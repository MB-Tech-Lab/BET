<?php
// ============================================================
// BET Software Details Page
// ============================================================

$id = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['id'] ?? '');

if (!$id) {
    header("Location: " . url('includes/downloads/'));
    exit;
}

require_once __DIR__ . '/config.php';

$data_file = dirname(__DIR__) . '/data/downloads.json';
$downloads = file_exists($data_file) ? json_decode(file_get_contents($data_file), true) : [];
$software = null;

foreach ($downloads as $item) {
    if (isset($item['id']) && $item['id'] === $id) {
        $software = $item;
        break;
    }
}

if (!$software) {
    header("Location: " . url('includes/downloads/'));
    exit;
}

// Ensure legacy fields mapping
if (isset($software['platform']) && isset($software['file'])) {
    if ($software['platform'] === 'Windows') {
        $software['windows_file'] = $software['file'];
    } else if ($software['platform'] === 'Linux') {
        $software['linux_file'] = $software['file'];
    }
}

function formatBytes($bytes, $precision = 2) {
    if (!$bytes || $bytes == 0) return 'Unknown size';
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . ' ' . $units[$pow];
}

$prod_name = htmlspecialchars($software['product']);
$prod_ver  = htmlspecialchars($software['version']);
$status    = htmlspecialchars($software['status'] ?? 'Latest Release');
$notes     = nl2br(htmlspecialchars($software['release_notes'] ?? 'No release notes available.'));
$date      = date('F j, Y', strtotime($software['uploaded_date'] ?? date('Y-m-d')));

// SEO Metadata
$meta_title = "Download {$prod_name} v{$prod_ver} | Burhani Engineering Technology";
$meta_description = "Download {$prod_name} version {$prod_ver} for Windows and Linux. Release notes: " . strip_tags(substr($notes, 0, 100)) . "...";
$canonical_url = url("includes/software-detail.php?id={$id}");

require_once __DIR__ . '/header.php';
?>

<style>
  .detail-hero {
    background: linear-gradient(135deg, var(--heading-color, #0b4f79) 0%, #083b5c 100%);
    color: #fff;
    padding: 80px 0 60px;
    position: relative;
  }
  .detail-hero h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 10px;
    color: #fff;
  }
  .detail-hero p {
    font-size: 1.1rem;
    color: #e0e0e0;
    margin-bottom: 20px;
  }
  .status-badge {
    padding: 5px 12px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 0.9rem;
    display: inline-block;
  }
  .status-latest { background: #12c8dc; color: #fff; }
  .status-previous { background: #fcc624; color: #222; }
  
  .detail-section {
    padding: 60px 0;
    background-color: #f8f9fa;
  }
  .detail-card {
    background: #fff;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    border-top: 4px solid var(--accent-color, #12c8dc);
  }
  .platform-section {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eee;
  }
  .download-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
    margin-right: 15px;
    margin-bottom: 15px;
  }
  .btn-win {
    background: #0078d7;
    color: #fff;
  }
  .btn-win:hover {
    background: #005a9e;
    color: #fff;
  }
  .btn-lin {
    background: #444;
    color: #fff;
  }
  .btn-lin:hover {
    background: #222;
    color: #fff;
  }
</style>

<!-- Hero Section -->
<section class="detail-hero">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <h1><?php echo $prod_name; ?></h1>
            <p>Version <?php echo $prod_ver; ?> &bull; Released on <?php echo $date; ?></p>
            
            <?php 
                $badge_class = 'status-latest';
                if ($status === 'Previous Release') $badge_class = 'status-previous';
                if ($status === 'Archived Release') $badge_class = 'bg-secondary text-white';
            ?>
            <span class="status-badge <?php echo $badge_class; ?>"><?php echo $status; ?></span>
        </div>
        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
            <a href="<?php echo url('includes/downloads/'); ?>" class="btn btn-outline-light"><i class="bi bi-arrow-left"></i> Back to Hub</a>
        </div>
    </div>
  </div>
</section>

<section class="detail-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="detail-card">
                    <h3 class="mb-4">Release Notes</h3>
                    <div class="notes-content" style="font-size: 1.05rem; line-height: 1.7; color: #444;">
                        <?php echo $notes; ?>
                    </div>
                    
                    <div class="platform-section">
                        <h4 class="mb-3">Download for your Platform</h4>
                        
                        <?php if (!empty($software['windows_file'])): ?>
                            <a href="<?php echo url('includes/download.php?id=' . $software['id'] . '&os=windows'); ?>" class="download-btn btn-win">
                                <i class="bi bi-windows"></i> Windows Download
                                <span class="badge bg-light text-dark ms-2"><?php echo formatBytes($software['windows_size'] ?? 0); ?></span>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (!empty($software['linux_file'])): ?>
                            <a href="<?php echo url('includes/download.php?id=' . $software['id'] . '&os=linux'); ?>" class="download-btn btn-lin">
                                <i class="bi bi-ubuntu"></i> Linux Download
                                <span class="badge bg-light text-dark ms-2"><?php echo formatBytes($software['linux_size'] ?? 0); ?></span>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (empty($software['windows_file']) && empty($software['linux_file'])): ?>
                            <p class="text-muted">No downloads available for this release.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>
