<?php
require_once __DIR__ . '/config/auth.php';

header('Content-Type: application/json');

$upload_dir = dirname(__DIR__) . '/uploads/software/';
$chunks_dir = dirname(__DIR__) . '/uploads/chunks/';

if (!file_exists($chunks_dir)) {
    mkdir($chunks_dir, 0777, true);
}

// Ensure .htaccess
$htaccess_path = $chunks_dir . '.htaccess';
if (!file_exists($htaccess_path)) {
    file_put_contents($htaccess_path, "RemoveHandler .php .phtml\nphp_flag engine off\n");
}

// Cleanup chunks older than 24 hours
$files = glob($chunks_dir . '*');
$now   = time();
if ($files) {
    foreach ($files as $file) {
        if (is_file($file) && basename($file) !== '.htaccess') {
            if ($now - filemtime($file) >= 86400) { // 24 hours
                @unlink($file);
            }
        }
    }
}

$action = $_POST['action'] ?? '';

// CSRF Validation
if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
    http_response_code(403);
    echo json_encode(['error' => 'Invalid CSRF token']);
    exit;
}

if ($action === 'chunk') {
    $upload_id = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['upload_id'] ?? '');
    $platform = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['platform'] ?? '');
    $chunk_index = (int)($_POST['chunk_index'] ?? 0);
    
    if (!$upload_id || !$platform || !isset($_FILES['chunk'])) {
        echo json_encode(['error' => 'Missing parameters']);
        exit;
    }

    $chunk_file = $_FILES['chunk']['tmp_name'];
    $dest_file = $chunks_dir . $upload_id . '_' . $platform . '_' . $chunk_index;

    if (move_uploaded_file($chunk_file, $dest_file)) {
        echo json_encode(['status' => 'success']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to move uploaded chunk']);
    }
    exit;

} elseif ($action === 'merge') {
    $upload_id = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['upload_id'] ?? '');
    $platform = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['platform'] ?? '');
    $total_chunks = (int)($_POST['total_chunks'] ?? 0);
    $filename = basename($_POST['filename'] ?? '');

    if (!$upload_id || !$platform || !$total_chunks || !$filename) {
        echo json_encode(['error' => 'Missing parameters']);
        exit;
    }

    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
    // Validate extensions
    $valid_ext = false;
    if ($platform === 'windows' && in_array($ext, ['exe', 'msi', 'zip', 'iso', 'img', 'bin'])) $valid_ext = true;
    if ($platform === 'linux' && in_array($ext, ['deb', 'rpm', 'tar.gz', 'iso', 'img', 'bin'])) $valid_ext = true;
    
    // Handle tar.gz specifically
    if ($platform === 'linux' && str_ends_with(strtolower($filename), 'tar.gz')) {
        $valid_ext = true;
    }

    if (!$valid_ext) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid file extension for platform']);
        exit;
    }

    // Reject executable extensions explicitly
    $blocked_exts = ['php', 'phtml', 'phar', 'cgi', 'asp', 'aspx', 'jsp', 'sh', 'bash', 'cmd', 'bat'];
    if (in_array($ext, $blocked_exts)) {
        http_response_code(400);
        echo json_encode(['error' => 'Executable web files are not allowed']);
        exit;
    }

    // Generate safe unique filename
    $safe_name = uniqid(time() . '_') . '_' . preg_replace('/[^a-zA-Z0-9_\.-]/', '_', $filename);
    $final_path = $upload_dir . $safe_name;
    
    // Overwrite existing file if it exists
    if (file_exists($final_path)) {
        @unlink($final_path);
    }

    $out = @fopen($final_path, "wb");
    if (!$out) {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to open output file']);
        exit;
    }

    for ($i = 0; $i < $total_chunks; $i++) {
        $chunk_path = $chunks_dir . $upload_id . '_' . $platform . '_' . $i;
        if (!file_exists($chunk_path)) {
            fclose($out);
            @unlink($final_path);
            http_response_code(400);
            echo json_encode(['error' => 'Missing chunk index ' . $i]);
            exit;
        }

        $in = @fopen($chunk_path, "rb");
        if (!$in) {
            fclose($out);
            @unlink($final_path);
            http_response_code(500);
            echo json_encode(['error' => 'Failed to read chunk ' . $i]);
            exit;
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }
        fclose($in);
        
        // Clean up chunk
        @unlink($chunk_path);
    }
    fclose($out);

    // Validate MIME type securely
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $final_path);
    finfo_close($finfo);

    $blocked_mimes = ['text/x-php', 'application/x-httpd-php', 'application/x-sh', 'text/html'];
    if (in_array($mime, $blocked_mimes)) {
        @unlink($final_path);
        http_response_code(400);
        echo json_encode(['error' => 'Invalid or dangerous file content detected.']);
        exit;
    }

    // Get final file size
    $size = filesize($final_path);

    echo json_encode([
        'status' => 'success',
        'filename' => $safe_name,
        'size' => $size
    ]);
    exit;
}

echo json_encode(['error' => 'Invalid action']);
