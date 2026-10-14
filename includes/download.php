<?php
// ============================================================
// BET Software Manager - Secure Download Proxy & Analytics
// ============================================================

$id = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['id'] ?? '');
$os = strtolower(preg_replace('/[^a-zA-Z]/', '', $_GET['os'] ?? ''));

if (!$id || !in_array($os, ['windows', 'linux'])) {
    die("Invalid download request.");
}

$data_file = dirname(__DIR__) . '/data/downloads.json';
$stats_file = dirname(__DIR__) . '/data/download_stats.json';
$upload_dir = dirname(__DIR__) . '/uploads/software/';

if (!file_exists($data_file)) {
    die("Software database not found.");
}

$downloads = json_decode(file_get_contents($data_file), true) ?: [];
$software = null;

foreach ($downloads as $item) {
    if ($item['id'] === $id) {
        $software = $item;
        break;
    }
}

if (!$software) {
    die("Software not found.");
}

$file_key = $os . '_file';
$target = $software[$file_key] ?? '';

if (!$target) {
    die("Download not available for this platform.");
}

// Track Analytics
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$datetime = date('Y-m-d H:i:s');

// 1. Log to downloads.csv (Software Name, Version, Platform, DateTime, IP)
$downloads_csv = dirname(__DIR__) . '/data/downloads.csv';
$fp_csv = fopen($downloads_csv, 'a');
if ($fp_csv) {
    if (flock($fp_csv, LOCK_EX)) {
        fputcsv($fp_csv, [
            $software['product'] ?? 'Unknown',
            $software['version'] ?? 'Unknown',
            ucfirst($os),
            $datetime,
            $ip
        ]);
        flock($fp_csv, LOCK_UN);
    }
    fclose($fp_csv);
}

// 2. Log to activity.csv (Type, Description, DateTime)
$activity_csv = __DIR__ . '/data/activity.csv';
$fp_act = fopen($activity_csv, 'a');
if ($fp_act) {
    if (flock($fp_act, LOCK_EX)) {
        fputcsv($fp_act, [
            'Software Downloaded',
            ucfirst($os) . ' version of ' . ($software['product'] ?? 'Unknown') . ' downloaded',
            $datetime
        ]);
        flock($fp_act, LOCK_UN);
    }
    fclose($fp_act);
}
// 3. Update downloads.json for specific software
$fpd = fopen($data_file, 'c+');
if ($fpd) {
    if (flock($fpd, LOCK_EX)) {
        $content = stream_get_contents($fpd);
        $current_downloads = $content ? json_decode($content, true) : [];
        if (is_array($current_downloads)) {
            foreach ($current_downloads as &$item) {
                if ($item['id'] === $id) {
                    $item['total_downloads'] = ($item['total_downloads'] ?? 0) + 1;
                    if ($os === 'windows') {
                        $item['windows_downloads'] = ($item['windows_downloads'] ?? 0) + 1;
                    } else if ($os === 'linux') {
                        $item['linux_downloads'] = ($item['linux_downloads'] ?? 0) + 1;
                    }
                    $item['last_download'] = $datetime;
                    break;
                }
            }
            ftruncate($fpd, 0);
            rewind($fpd);
            fwrite($fpd, json_encode($current_downloads, JSON_PRETTY_PRINT));
        }
        flock($fpd, LOCK_UN);
    }
    fclose($fpd);
}

// Deliver File
if (filter_var($target, FILTER_VALIDATE_URL)) {
    // External URL, redirect seamlessly
    header("Location: " . $target);
    exit;
} else {
    // Local file delivery
    $file_path = $upload_dir . basename($target);
    
    if (!file_exists($file_path)) {
        die("File is missing on the server.");
    }
    
    // Prevent time out for large files
    set_time_limit(0);
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($target) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
    
    // Clear output buffer to avoid memory overflow
    while (ob_get_level()) {
        ob_end_clean();
    }
    
    readfile($file_path);
    exit;
}
