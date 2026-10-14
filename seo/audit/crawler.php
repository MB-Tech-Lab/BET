<?php
require_once __DIR__ . '/../config/seo-config.php';
require_once __DIR__ . '/checker.php';
require_once __DIR__ . '/../storage/audit-storage.php';

function run_crawler_batch($batch_size = SEO_BATCH_SIZE) {
    $urls_file = SEO_DATA_DIR . '/urls.json';
    
    if (!file_exists($urls_file)) {
        seo_log('error', 'URL inventory not found for crawler.');
        return ['error' => 'URL inventory not found'];
    }

    $lock_file = SEO_DATA_DIR . '/urls.lock';
    $fp = fopen($lock_file, 'w+');
    if (!flock($fp, LOCK_EX | LOCK_NB)) {
        seo_log('error', 'Crawler could not lock urls.lock. Another process is running.');
        fclose($fp);
        return ['error' => 'Lock active. Process already running.'];
    }

    $urls_data = file_exists($urls_file) ? file_get_contents($urls_file) : '';
    $urls = json_decode($urls_data, true) ?: [];

    $processed_count = 0;
    $batch_results = [];

    foreach ($urls as $path => &$url_obj) {
        if ($url_obj['status'] === 'pending' || $url_obj['status'] === 'failed') {
            
            $url_obj['status'] = 'processing';
            
            $full_url = SEO_BASE_URL . '/' . ltrim($url_obj['url'], '/');
            
            // Retry logic
            $retries = 0;
            $success = false;
            $audit_result = null;
            
            while ($retries < SEO_MAX_RETRIES && !$success) {
                $audit_result = run_audit_for_url($full_url, $url_obj['type']);
                
                // If it's a hard fail (timeout/connection), we might want to retry
                $issues = array_column($audit_result['audit']['issues'], 'type');
                if (in_array('timeout', $issues) || in_array('connection_error', $issues)) {
                    $retries++;
                    if ($retries < SEO_MAX_RETRIES) usleep(500 * 1000); // Wait 500ms before retry
                } else {
                    $success = true; // Not a transient failure
                }
            }
            
            $result = $audit_result['audit'];
            $result['url'] = $path;
            
            $issues = array_column($result['issues'], 'type');
            if (in_array('timeout', $issues) || in_array('connection_error', $issues)) {
                $url_obj['status'] = 'failed';
            } else {
                $url_obj['status'] = 'completed';
            }
            $url_obj['last_audit'] = date('Y-m-d H:i:s');
            
            $batch_results[] = $result;
            $processed_count++;
            
            if (SEO_DELAY_MS > 0) {
                usleep(SEO_DELAY_MS * 1000);
            }
            
            if ($processed_count >= $batch_size) {
                break;
            }
        }
    }

    if (!empty($batch_results)) {
        init_audit_storage();
        save_audit_batch($batch_results);
    }

    atomic_write_json($urls_file, $urls);
    
    // Also update run metadata progress
    if (file_exists(SEO_RUN_META_FILE)) {
        $run_meta = json_decode(file_get_contents(SEO_RUN_META_FILE), true) ?: [];
        $run_meta['processed'] = ($run_meta['processed'] ?? 0) + $processed_count;
        atomic_write_json(SEO_RUN_META_FILE, $run_meta);
    }

    flock($fp, LOCK_UN);
    fclose($fp);
    @unlink($lock_file);

    $total = count($urls);
    // Ignore 'missing' from the total completion count calculation since they aren't part of this run
    $active_urls = array_filter($urls, function($u) { return $u['status'] !== 'missing'; });
    $total_active = count($active_urls);
    $completed = count(array_filter($active_urls, function($u) { return $u['status'] === 'completed' || $u['status'] === 'failed'; }));

    return [
        'processed' => $processed_count, 
        'total' => $total_active, 
        'completed' => $completed,
        'progress_pct' => $total_active > 0 ? round(($completed / $total_active) * 100, 2) : 0
    ];
}

if (isset($_GET['run'])) {
    header('Content-Type: application/json');
    $res = run_crawler_batch();
    echo json_encode(['success' => !isset($res['error']), 'data' => $res, 'error' => $res['error'] ?? null]);
}
