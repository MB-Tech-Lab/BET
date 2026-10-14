<?php
// ============================================================
// BET Software Manager — Admin Dashboard
// ============================================================
require_once __DIR__ . '/config/auth.php';
define('BET_ADMIN', true);

// Define paths
$data_file = dirname(__DIR__) . '/data/downloads.json';
$upload_dir = dirname(__DIR__) . '/uploads/software/';

// Create directories and file if they don't exist
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}
if (!file_exists($data_file)) {
    file_put_contents($data_file, '[]');
}

// Ensure .htaccess prevents direct access to uploads directory
$htaccess_path = $upload_dir . '.htaccess';
if (!file_exists($htaccess_path) || strpos(file_get_contents($htaccess_path), 'Deny from all') === false) {
    file_put_contents($htaccess_path, "Deny from all\n");
}

function backup_json($source_file) {
    if (!file_exists($source_file)) return;
    $backup_dir = dirname($source_file) . '/backups/';
    if (!file_exists($backup_dir)) mkdir($backup_dir, 0777, true);
    
    $filename = basename($source_file, '.json');
    $backup_path = $backup_dir . $filename . '_' . date('Ymd_His') . '.json';
    copy($source_file, $backup_path);
    
    // Keep only last 10 backups for this file
    $backups = glob($backup_dir . $filename . '_*.json');
    rsort($backups);
    if (count($backups) > 10) {
        $to_delete = array_slice($backups, 10);
        foreach ($to_delete as $old_backup) {
            @unlink($old_backup);
        }
    }
}

// Support large uploads
set_time_limit(0);

// Helper for php.ini size parsing
function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    $val = (int)$val;
    switch($last) {
        case 'g': $val *= 1024; // fall-through
        case 'm': $val *= 1024; // fall-through
        case 'k': $val *= 1024;
    }
    return $val;
}

$message = '';
$message_type = '';

$max_post_size = return_bytes(ini_get('post_max_size'));
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['CONTENT_LENGTH']) && $_SERVER['CONTENT_LENGTH'] > $max_post_size) {
    $message = 'The selected file exceeds the maximum upload size allowed by the server.';
    $message_type = 'danger';
    $_POST = []; // Prevent further processing
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token']))) {
    $message = 'Invalid CSRF token. Please try again.';
    $message_type = 'danger';
    $_POST = []; // Prevent further processing
}

// Load existing downloads
$downloads = json_decode(file_get_contents($data_file), true) ?: [];

// Safe in-memory migration for legacy records
foreach ($downloads as &$item) {
    if (isset($item['platform']) && isset($item['file'])) {
        if ($item['platform'] === 'Windows') {
            $item['windows_file'] = $item['file'];
        } else if ($item['platform'] === 'Linux') {
            $item['linux_file'] = $item['file'];
        }
        unset($item['platform'], $item['file']);
    }
}
unset($item);

// Handle Upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'upload') {
    $product = trim($_POST['product'] ?? '');
    $version = trim($_POST['version'] ?? '');
    $release_notes = trim($_POST['release_notes'] ?? '');
    $status = trim($_POST['status'] ?? 'Latest Release');
    
    $win_source = $_POST['windows_source'] ?? 'none';
    $lin_source = $_POST['linux_source'] ?? 'none';

    $has_win = false;
    $has_lin = false;

    $safe_win = null;
    $safe_lin = null;

    $upload_success = true;

    // Process Windows
    if ($win_source === 'file') {
        $win_file = $_FILES['windows_file'] ?? null;
        if ($win_file && $win_file['error'] === UPLOAD_ERR_OK) {
            $ext = strtolower(pathinfo($win_file['name'], PATHINFO_EXTENSION));
            if (in_array($ext, ['exe', 'msi', 'zip', 'iso', 'img', 'bin'])) {
                $safe_win = preg_replace('/[^a-zA-Z0-9_\.-]/', '_', basename($win_file['name']));
                if (!move_uploaded_file($win_file['tmp_name'], $upload_dir . $safe_win)) {
                    $upload_success = false;
                } else {
                    $has_win = true;
                    $win_size = filesize($upload_dir . $safe_win);
                }
            } else {
                $upload_success = false;
                $message = 'Windows file must be a valid format (.exe, .msi, etc).';
                $message_type = 'danger';
            }
        } elseif ($win_file && $win_file['error'] === UPLOAD_ERR_INI_SIZE) {
            $upload_success = false;
            $message = 'The selected Windows file exceeds the maximum upload size allowed by the server.';
            $message_type = 'danger';
        }
    } elseif ($win_source === 'url') {
        $win_url = trim($_POST['windows_url'] ?? '');
        if (filter_var($win_url, FILTER_VALIDATE_URL)) {
            $safe_win = $win_url;
            $has_win = true;
            $win_size = 0;
        } else {
            $upload_success = false;
            $message = 'Invalid Windows external URL.';
            $message_type = 'danger';
        }
    } elseif ($win_source === 'chunked') {
        $win_final = trim($_POST['windows_final_file'] ?? '');
        if ($win_final && file_exists($upload_dir . $win_final)) {
            $safe_win = $win_final;
            $has_win = true;
            $win_size = (int)($_POST['windows_size'] ?? 0);
        } else {
            $upload_success = false;
            $message = 'Chunked file missing for Windows.';
            $message_type = 'danger';
        }
    }

    // Process Linux
    if ($lin_source === 'file' && $upload_success) {
        $lin_file = $_FILES['linux_file'] ?? null;
        if ($lin_file && $lin_file['error'] === UPLOAD_ERR_OK) {
            $ext = strtolower(pathinfo($lin_file['name'], PATHINFO_EXTENSION));
            $is_tar = str_ends_with(strtolower($lin_file['name']), 'tar.gz');
            if (in_array($ext, ['deb', 'rpm', 'iso', 'img', 'bin']) || $is_tar) {
                $safe_lin = preg_replace('/[^a-zA-Z0-9_\.-]/', '_', basename($lin_file['name']));
                if (!move_uploaded_file($lin_file['tmp_name'], $upload_dir . $safe_lin)) {
                    $upload_success = false;
                } else {
                    $has_lin = true;
                    $lin_size = filesize($upload_dir . $safe_lin);
                }
            } else {
                $upload_success = false;
                $message = 'Linux file must be a valid format (.deb, .rpm, etc).';
                $message_type = 'danger';
            }
        } elseif ($lin_file && $lin_file['error'] === UPLOAD_ERR_INI_SIZE) {
            $upload_success = false;
            $message = 'The selected Linux file exceeds the maximum upload size allowed by the server.';
            $message_type = 'danger';
        }
    } elseif ($lin_source === 'url' && $upload_success) {
        $lin_url = trim($_POST['linux_url'] ?? '');
        if (filter_var($lin_url, FILTER_VALIDATE_URL)) {
            $safe_lin = $lin_url;
            $has_lin = true;
            $lin_size = 0;
        } else {
            $upload_success = false;
            $message = 'Invalid Linux external URL.';
            $message_type = 'danger';
        }
    } elseif ($lin_source === 'chunked' && $upload_success) {
        $lin_final = trim($_POST['linux_final_file'] ?? '');
        if ($lin_final && file_exists($upload_dir . $lin_final)) {
            $safe_lin = $lin_final;
            $has_lin = true;
            $lin_size = (int)($_POST['linux_size'] ?? 0);
        } else {
            $upload_success = false;
            $message = 'Chunked file missing for Linux.';
            $message_type = 'danger';
        }
    }

    if ($product && $version && ($has_win || $has_lin)) {
        if ($upload_success) {
            // Update existing or add new
            $updated = false;
            foreach ($downloads as &$item) {
                if ($item['product'] === $product) {
                    if ($safe_win) {
                        // Unlink if it was a file (not URL) and it changed
                        if (!empty($item['windows_file']) && $item['windows_file'] !== $safe_win && !filter_var($item['windows_file'], FILTER_VALIDATE_URL) && file_exists($upload_dir . $item['windows_file'])) {
                            @unlink($upload_dir . $item['windows_file']);
                        }
                        $item['windows_file'] = $safe_win;
                        $item['windows_size'] = $win_size;
                    }
                    if ($safe_lin) {
                        if (!empty($item['linux_file']) && $item['linux_file'] !== $safe_lin && !filter_var($item['linux_file'], FILTER_VALIDATE_URL) && file_exists($upload_dir . $item['linux_file'])) {
                            @unlink($upload_dir . $item['linux_file']);
                        }
                        $item['linux_file'] = $safe_lin;
                        $item['linux_size'] = $lin_size;
                    }
                    $item['version'] = $version;
                    $item['release_notes'] = $release_notes;
                    $item['status'] = $status;
                    $item['uploaded_date'] = date('Y-m-d');
                    $updated = true;
                    break;
                }
            }

            if (!$updated) {
                $new_record = [
                    'id' => uniqid(),
                    'product' => $product,
                    'version' => $version,
                    'release_notes' => $release_notes,
                    'status' => $status,
                    'uploaded_date' => date('Y-m-d')
                ];
                if ($safe_win) {
                    $new_record['windows_file'] = $safe_win;
                    $new_record['windows_size'] = $win_size;
                }
                if ($safe_lin) {
                    $new_record['linux_file'] = $safe_lin;
                    $new_record['linux_size'] = $lin_size;
                }
                $downloads[] = $new_record;
            }

            backup_json($data_file);
            file_put_contents($data_file, json_encode($downloads, JSON_PRETTY_PRINT));

            // Log to activity.csv
            $activity_csv = dirname(__DIR__) . '/data/activity.csv';
            $act_type = $updated ? 'Version Updated' : 'Software Uploaded';
            $act_desc = $updated ? $product . ' updated to ' . $version : $product . ' v' . $version . ' uploaded';
            $fp_act = fopen($activity_csv, 'a');
            if ($fp_act) {
                if (flock($fp_act, LOCK_EX)) {
                    fputcsv($fp_act, [$act_type, $act_desc, date('Y-m-d H:i:s')]);
                    flock($fp_act, LOCK_UN);
                }
                fclose($fp_act);
            }

            $message = 'Software saved successfully.';
            $message_type = 'success';
        } else if (!$message) {
            $message = 'Failed to process files.';
            $message_type = 'danger';
        }
    } else {
        if (!$message) {
            $message = 'Please provide Product Name, Version, and at least one valid source.';
            $message_type = 'danger';
        }
    }
}

// Handle Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $id_to_delete = $_POST['id'] ?? '';
    if ($id_to_delete) {
        $new_downloads = [];
        foreach ($downloads as $item) {
            if ($item['id'] === $id_to_delete) {
                // Delete the files if they are local
                if (!empty($item['windows_file']) && !filter_var($item['windows_file'], FILTER_VALIDATE_URL) && file_exists($upload_dir . $item['windows_file'])) {
                    @unlink($upload_dir . $item['windows_file']);
                }
                if (!empty($item['linux_file']) && !filter_var($item['linux_file'], FILTER_VALIDATE_URL) && file_exists($upload_dir . $item['linux_file'])) {
                    @unlink($upload_dir . $item['linux_file']);
                }
            } else {
                $new_downloads[] = $item;
            }
        }
        backup_json($data_file);
        file_put_contents($data_file, json_encode($new_downloads, JSON_PRETTY_PRINT));
        $downloads = $new_downloads;

        // Log to activity.csv
        $activity_csv = dirname(__DIR__) . '/data/activity.csv';
        $deleted_name = $_POST['product_name'] ?? $id_to_delete;
        $fp_del = fopen($activity_csv, 'a');
        if ($fp_del) {
            if (flock($fp_del, LOCK_EX)) {
                fputcsv($fp_del, ['Software Deleted', $deleted_name . ' deleted', date('Y-m-d H:i:s')]);
                flock($fp_del, LOCK_UN);
            }
            fclose($fp_del);
        }

        $message = 'Software deleted successfully.';
        $message_type = 'success';
    }
}

// Calculate system stats
$stats_file = dirname(__DIR__) . '/data/download_stats.json';
$stats = file_exists($stats_file) ? json_decode(file_get_contents($stats_file), true) : ['total' => 0, 'windows' => 0, 'linux' => 0, 'last_download' => 'Never'];

$total_storage_bytes = 0;
if (file_exists($upload_dir)) {
    foreach (new DirectoryIterator($upload_dir) as $file) {
        if ($file->isFile() && $file->getFilename() !== '.htaccess') {
            $total_storage_bytes += $file->getSize();
        }
    }
}

function formatBytesStats($bytes, $precision = 2) {
    if (!$bytes || $bytes == 0) return '0 B';
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . ' ' . $units[$pow];
}
?><?php
$windows_count = 0;
$linux_count = 0;
foreach ($downloads as $item) {
    if (!empty($item['windows_file'])) $windows_count++;
    if (!empty($item['linux_file'])) $linux_count++;
}
$latest_upload = 'Never';
if (count($downloads) > 0) {
    // Assuming $downloads is sorted descending, [0] is latest
    // If not, we could search for max date
    $max_time = 0;
    foreach ($downloads as $item) {
        $time = strtotime($item['uploaded_date']);
        if ($time > $max_time) $max_time = $time;
    }
    if ($max_time > 0) {
        $latest_upload = date('M d, Y', $max_time);
    }
}
require_once __DIR__ . '/includes/header.php'; 
?>
  <div class="dashboard-container">
    <div class="container">

      <!-- System Metrics -->
      <div class="row mb-4">
        <div class="col-md-3">
          <div class="dashboard-card text-center py-4">
            <h1 class="text-primary mb-0"><i class="bi bi-box-seam"></i></h1>
            <h3 class="mt-2 mb-1"><?php echo count($downloads); ?></h3>
            <div class="text-muted small text-uppercase fw-bold">Total Software Packages</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="dashboard-card text-center py-4">
            <h1 class="text-info mb-0"><i class="bi bi-windows"></i></h1>
            <h3 class="mt-2 mb-1"><?php echo $windows_count; ?></h3>
            <div class="text-muted small text-uppercase fw-bold">Windows Packages</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="dashboard-card text-center py-4">
            <h1 class="text-success mb-0"><i class="bi bi-ubuntu"></i></h1>
            <h3 class="mt-2 mb-1"><?php echo $linux_count; ?></h3>
            <div class="text-muted small text-uppercase fw-bold">Linux Packages</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="dashboard-card text-center py-4">
            <h1 class="text-warning mb-0"><i class="bi bi-clock-history"></i></h1>
            <h5 class="mt-3 mb-2 text-dark"><?php echo htmlspecialchars($latest_upload); ?></h5>
            <div class="text-muted small text-uppercase fw-bold">Latest Upload</div>
          </div>
        </div>
      </div>div>

      <?php if ($message): ?>
        <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
          <?php echo htmlspecialchars($message); ?>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="row">
        <!-- Upload Form -->
        <div class="col-lg-4 mb-4">
            <div class="dashboard-card">
              <h3><i class="bi bi-cloud-arrow-up"></i> Upload Software</h3>
              <form method="POST" enctype="multipart/form-data" id="uploadForm" onsubmit="handleFormSubmit(event)">
                <input type="hidden" name="csrf_token" id="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>">
                <input type="hidden" name="action" value="upload">
                
                <!-- Hidden inputs for chunked final files -->
                <input type="hidden" name="windows_final_file" id="windows_final_file" value="">
                <input type="hidden" name="windows_size" id="windows_size" value="">
                <input type="hidden" name="linux_final_file" id="linux_final_file" value="">
                <input type="hidden" name="linux_size" id="linux_size" value="">
                
                <input type="hidden" name="windows_source" id="windows_source" value="none">
                <input type="hidden" name="linux_source" id="linux_source" value="none">
              
              <div class="mb-3">
                <label for="product" class="form-label">Product Name *</label>
                <input type="text" class="form-control" id="product" name="product" required placeholder="e.g. Vacuum Leak Test Machine">
              </div>

              <div class="mb-3">
                <label for="version" class="form-label">Version *</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="version" name="version" required placeholder="e.g. 2.1.0">
                  <select class="form-select" id="status" name="status" style="max-width: 180px;">
                    <option value="Latest Release">Latest Release</option>
                    <option value="Previous Release">Previous Release</option>
                    <option value="Archived Release">Archived Release</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label for="release_notes" class="form-label">Release Notes</label>
                <textarea class="form-control" id="release_notes" name="release_notes" rows="3" placeholder="What's new in this version?"></textarea>
              </div>

              <div class="mb-4">
                <label class="form-label fw-bold"><i class="bi bi-windows"></i> Windows Application (.exe, .msi, .zip, .iso)</label>
                <div class="drag-drop-zone" id="win_drop_zone">
                  <input type="file" id="windows_file" name="windows_file" accept=".exe,.msi,.zip,.iso,.img,.bin">
                  <div class="drag-drop-text-container" id="win_text">
                    <i class="bi bi-folder2-open" id="win_icon"></i>
                    <span class="text-muted"><strong>Drag file here</strong> or <span class="text-primary">Choose File</span></span>
                  </div>
                  <div class="file-info-display" id="win_file_info"></div>
                </div>
              </div>

              <div class="mb-4">
                <label class="form-label fw-bold"><i class="bi bi-ubuntu"></i> Linux Application (.deb, .rpm, .tar.gz, .iso)</label>
                <div class="drag-drop-zone" id="lin_drop_zone">
                  <input type="file" id="linux_file" name="linux_file" accept=".deb,.rpm,.tar.gz,.iso,.img,.bin">
                  <div class="drag-drop-text-container" id="lin_text">
                    <i class="bi bi-folder2-open" id="lin_icon"></i>
                    <span class="text-muted"><strong>Drag file here</strong> or <span class="text-primary">Choose File</span></span>
                  </div>
                  <div class="file-info-display" id="lin_file_info"></div>
                </div>
              </div>

              <!-- Upload Progress UI (Hidden by default) -->
              <div id="uploadProgressContainer" style="display: none;" class="mt-4 p-3 bg-light border rounded">
                <h6 class="mb-2 text-dark" id="uploadStatusText">Preparing upload...</h6>
                <div class="progress mb-2" style="height: 20px;">
                  <div id="uploadProgressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
                <div class="d-flex justify-content-between text-muted small">
                  <span id="uploadBytesText">0 MB / 0 MB</span>
                  <span id="uploadSpeedText">0 MB/s</span>
                  <span id="uploadEtaText">Estimating...</span>
                </div>
              </div>

              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                  <i class="bi bi-cloud-upload"></i> Upload & Publish
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Software List -->
        <div class="col-lg-8">
          <div class="dashboard-card">
            <h3><i class="bi bi-hdd-stack"></i> Uploaded Software</h3>
            
            <?php if (empty($downloads)): ?>
              <div class="empty-state">
                <i class="bi bi-inbox"></i>
                <h5>No software uploaded yet.</h5>
                <p>Use the form on the left to upload your first software package.</p>
              </div>
            <?php else: ?>
              <div class="table-responsive">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                        <th>Product</th>
                        <th>Version</th>
                        <th>Platform & Downloads</th>
                        <th>Upload Date</th>
                        <th class="text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Sort by upload date descending
                    usort($downloads, function($a, $b) {
                        return strtotime($b['uploaded_date']) - strtotime($a['uploaded_date']);
                    });
                    foreach ($downloads as $item): 
                    ?>
                      <tr>
                        <td>
                          <strong><?php echo htmlspecialchars($item['product']); ?></strong>
                          <?php if (!empty($item['release_notes'])): ?>
                            <div class="text-muted small text-truncate" style="max-width: 200px;" title="<?php echo htmlspecialchars($item['release_notes']); ?>">
                              <?php echo htmlspecialchars($item['release_notes']); ?>
                            </div>
                          <?php endif; ?>
                        </td>
                        <td>
                            <span class="badge bg-secondary mb-1">v<?php echo htmlspecialchars($item['version']); ?></span><br>
                            <?php 
                                $status = $item['status'] ?? 'Latest Release';
                                $badge = 'bg-secondary';
                                if ($status === 'Latest Release') $badge = 'bg-success';
                                if ($status === 'Previous Release') $badge = 'bg-warning text-dark';
                            ?>
                            <span class="badge <?php echo $badge; ?>"><?php echo htmlspecialchars($status); ?></span>
                        </td>
                        <td>
                          <?php if (!empty($item['windows_file'])): ?>
                            <div class="mb-1 d-flex align-items-center gap-2">
                                <span class="platform-badge platform-windows"><i class="bi bi-windows"></i> Windows</span>
                                <span class="badge bg-light text-dark border"><i class="bi bi-download"></i> <?php echo number_format($item['windows_downloads'] ?? 0); ?></span>
                                <?php if (filter_var($item['windows_file'], FILTER_VALIDATE_URL)): ?>
                                    <a href="<?php echo htmlspecialchars($item['windows_file']); ?>" class="text-decoration-none text-muted small" target="_blank">
                                      <i class="bi bi-link-45deg"></i> External Link
                                    </a>
                                <?php else: ?>
                                    <a href="../uploads/software/<?php echo htmlspecialchars($item['windows_file']); ?>" class="text-decoration-none text-muted small" download>
                                      <i class="bi bi-download"></i> <?php echo htmlspecialchars($item['windows_file']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                          <?php endif; ?>
                          <?php if (!empty($item['linux_file'])): ?>
                            <div class="d-flex align-items-center gap-2">
                                <span class="platform-badge platform-linux"><i class="bi bi-ubuntu"></i> Linux</span>
                                <span class="badge bg-light text-dark border"><i class="bi bi-download"></i> <?php echo number_format($item['linux_downloads'] ?? 0); ?></span>
                                <?php if (filter_var($item['linux_file'], FILTER_VALIDATE_URL)): ?>
                                    <a href="<?php echo htmlspecialchars($item['linux_file']); ?>" class="text-decoration-none text-muted small" target="_blank">
                                      <i class="bi bi-link-45deg"></i> External Link
                                    </a>
                                <?php else: ?>
                                    <a href="../uploads/software/<?php echo htmlspecialchars($item['linux_file']); ?>" class="text-decoration-none text-muted small" download>
                                      <i class="bi bi-download"></i> <?php echo htmlspecialchars($item['linux_file']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                          <?php endif; ?>
                          <div class="mt-2 pt-2 border-top">
                            <span class="text-muted small"><strong>Total:</strong> <?php echo number_format($item['total_downloads'] ?? 0); ?> | <strong>Last Download:</strong> <?php echo htmlspecialchars($item['last_download'] ?? 'Never'); ?></span>
                          </div>
                        </td>
                        <td><?php echo htmlspecialchars($item['uploaded_date']); ?></td>
                        <td class="text-end">
                          <form action="software.php" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this software? This action cannot be undone.');">
                            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
                            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($item['product']); ?>">
                            <button type="submit" class="btn-action btn-delete" title="Delete Software">
                              <i class="bi bi-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    // File UI handlers
    function setupDragAndDrop(inputId, zoneId, textId, iconId, infoId) {
        const input = document.getElementById(inputId);
        const zone = document.getElementById(zoneId);
        const info = document.getElementById(infoId);
        const text = document.getElementById(textId);
        const icon = document.getElementById(iconId);

        const updateDisplay = () => {
            if (input.files && input.files.length > 0) {
                const file = input.files[0];
                const size = (file.size / (1024 * 1024)).toFixed(2);
                text.style.display = 'none';
                info.innerHTML = `<i class="bi bi-check-circle-fill text-success"></i> ${file.name} <span class="text-muted fw-normal ms-2">(${size} MB)</span>`;
                info.style.display = 'block';
                // Set the hidden source value
                document.getElementById(inputId.split('_')[0] + '_source').value = 'file';
            } else {
                text.style.display = 'flex';
                info.style.display = 'none';
                document.getElementById(inputId.split('_')[0] + '_source').value = 'none';
            }
        };

        input.addEventListener('change', updateDisplay);

        zone.addEventListener('dragover', (e) => {
            e.preventDefault();
            zone.classList.add('dragover');
        });

        zone.addEventListener('dragleave', (e) => {
            e.preventDefault();
            zone.classList.remove('dragover');
        });

        zone.addEventListener('drop', (e) => {
            e.preventDefault();
            zone.classList.remove('dragover');
            if (e.dataTransfer.files && e.dataTransfer.files.length > 0) {
                input.files = e.dataTransfer.files;
                updateDisplay();
            }
        });
    }

    setupDragAndDrop('windows_file', 'win_drop_zone', 'win_text', 'win_icon', 'win_file_info');
    setupDragAndDrop('linux_file', 'lin_drop_zone', 'lin_text', 'lin_icon', 'lin_file_info');

    const CHUNK_SIZE = 5 * 1024 * 1024; // 5MB

    async function handleFormSubmit(event) {
        event.preventDefault();
        
        const winSource = document.getElementById('windows_source').value;
        const linSource = document.getElementById('linux_source').value;
        const winFile = document.getElementById('windows_file').files[0];
        const linFile = document.getElementById('linux_file').files[0];

        if (!winFile && !linFile) {
            return alert('Please select at least one file (Windows or Linux) to upload.');
        }

        const btn = document.getElementById('submitBtn');
        btn.disabled = true;

        const progressContainer = document.getElementById('uploadProgressContainer');
        progressContainer.style.display = 'block';

        try {
            if (winSource === 'file') {
                const result = await uploadFile(winFile, 'windows');
                document.getElementById('windows_final_file').value = result.filename;
                document.getElementById('windows_size').value = result.size;
                document.getElementById('windows_source').value = 'chunked';
                // Prevent native file upload by clearing input
                document.getElementById('windows_file').value = '';
            }

            if (linSource === 'file') {
                const result = await uploadFile(linFile, 'linux');
                document.getElementById('linux_final_file').value = result.filename;
                document.getElementById('linux_size').value = result.size;
                document.getElementById('linux_source').value = 'chunked';
                // Prevent native file upload by clearing input
                document.getElementById('linux_file').value = '';
            }

            document.getElementById('uploadStatusText').innerText = "Finalizing record...";
            document.getElementById('uploadForm').submit();

        } catch (err) {
            alert("Upload failed: " + err.message);
            btn.disabled = false;
            progressContainer.style.display = 'none';
        }
    }

    async function uploadFile(file, platform) {
        const totalChunks = Math.ceil(file.size / CHUNK_SIZE);
        const uploadId = Date.now().toString() + '_' + Math.random().toString(36).substr(2, 5);
        
        const statusText = document.getElementById('uploadStatusText');
        const progressBar = document.getElementById('uploadProgressBar');
        const bytesText = document.getElementById('uploadBytesText');
        const speedText = document.getElementById('uploadSpeedText');
        const etaText = document.getElementById('uploadEtaText');

        statusText.innerText = `Uploading ${platform} file (${file.name})...`;
        
        let startTime = Date.now();
        let uploadedBytes = 0;

        for (let i = 0; i < totalChunks; i++) {
            const start = i * CHUNK_SIZE;
            const end = Math.min(start + CHUNK_SIZE, file.size);
            const chunk = file.slice(start, end);

            const formData = new FormData();
            formData.append('csrf_token', document.getElementById('csrf_token').value);
            formData.append('action', 'chunk');
            formData.append('upload_id', uploadId);
            formData.append('platform', platform);
            formData.append('chunk_index', i);
            formData.append('chunk', chunk);

            let retries = 3;
            let success = false;
            
            while (retries > 0 && !success) {
                try {
                    const response = await fetch('upload_chunk.php', { method: 'POST', body: formData });
                    
                    if (!response.ok) {
                        const errorText = await response.text();
                        throw new Error(errorText);
                    }
                    
                    success = true;
                    uploadedBytes += chunk.size;
                    
                    // Update Progress UI
                    const percent = Math.round((uploadedBytes / file.size) * 100);
                    progressBar.style.width = percent + '%';
                    progressBar.innerText = percent + '%';
                    
                    const mbUploaded = (uploadedBytes / (1024*1024)).toFixed(2);
                    const mbTotal = (file.size / (1024*1024)).toFixed(2);
                    bytesText.innerText = `${mbUploaded} MB / ${mbTotal} MB`;
                    
                    const timeElapsed = (Date.now() - startTime) / 1000;
                    if (timeElapsed > 0) {
                        const bytesPerSec = uploadedBytes / timeElapsed;
                        speedText.innerText = (bytesPerSec / (1024*1024)).toFixed(2) + ' MB/s';
                        
                        const remainingBytes = file.size - uploadedBytes;
                        const etaSecs = remainingBytes / bytesPerSec;
                        if (etaSecs > 60) {
                            etaText.innerText = Math.round(etaSecs / 60) + ' min left';
                        } else {
                            etaText.innerText = Math.round(etaSecs) + ' sec left';
                        }
                    }

                } catch (e) {
                    retries--;
                    if (retries === 0) throw new Error(`Chunk ${i} failed. ` + e.message);
                    await new Promise(r => setTimeout(r, 2000));
                }
            }
        }

        statusText.innerText = `Merging ${platform} file on server...`;
        const mergeData = new FormData();
        mergeData.append('csrf_token', document.getElementById('csrf_token').value);
        mergeData.append('action', 'merge');
        mergeData.append('upload_id', uploadId);
        mergeData.append('platform', platform);
        mergeData.append('total_chunks', totalChunks);
        mergeData.append('filename', file.name);

        const mergeRes = await fetch('upload_chunk.php', { method: 'POST', body: mergeData });
        if (!mergeRes.ok) {
            const err = await mergeRes.text();
            throw new Error("Merge failed: " + err);
        }
        return await mergeRes.json();
    }
  </script>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
