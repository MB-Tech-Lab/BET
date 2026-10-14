<?php
set_time_limit(0);
ini_set('memory_limit', '512M');

require_once __DIR__ . '/../config/seo-config.php';
require_once __DIR__ . '/../audit/discovery.php';

// Only allow CLI execution
if (php_sapi_name() !== 'cli' && !isset($_GET['force_cron'])) {
    die("This script must be run from the command line.");
}

$automation_settings = seo_get_automation_settings();
if (empty($automation_settings['enabled'])) {
    seo_log('warning', '[AUTOMATION] Weekly audit disabled — initializer skipped.');
    exit;
}

$lock_file = SEO_DATA_DIR . '/initializer.lock';

// 1. Acquire Lock
$fp = fopen($lock_file, 'w+');
if (!flock($fp, LOCK_EX | LOCK_NB)) {
    seo_log('error', 'Initializer is already running. Lock file exists.');
    fclose($fp);
    exit;
}

seo_log('info', '--- WEEKLY AUDIT INITIALIZER STARTED ---');

try {
    // Check Run Metadata
    $run_meta = [];
    if (file_exists(SEO_RUN_META_FILE)) {
        $run_meta = json_decode(file_get_contents(SEO_RUN_META_FILE), true) ?: [];
    }

    $is_completed = empty($run_meta) || (isset($run_meta['status']) && $run_meta['status'] === 'completed');

    if (!$is_completed) {
        seo_log('warning', 'A previous audit run is still in progress (Status: ' . ($run_meta['status'] ?? 'unknown') . '). Weekly initializer will NOT start a new run until the current one is completed.');
    } else {
        seo_log('info', '[AUTOMATION] New weekly run initialized.');
        
        // 2. Discover URLs
        seo_log('info', 'Running URL discovery...');
        discover_urls();
        
        // Reset all URLs to pending
        $urls_file = SEO_DATA_DIR . '/urls.json';
        if (file_exists($urls_file)) {
            $urls = json_decode(file_get_contents($urls_file), true) ?: [];
            foreach ($urls as &$u) {
                if ($u['status'] !== 'missing') {
                    $u['status'] = 'pending';
                }
            }
            atomic_write_json($urls_file, $urls);
        }
        
        // Clear old in-progress audit state
        $audits_file = SEO_DATA_DIR . '/audits.json';
        if (file_exists($audits_file)) {
            @unlink($audits_file);
        }

        // Initialize run meta
        $run_meta = [
            'run_id' => date('Ymd_His'),
            'started_at' => date('Y-m-d H:i:s'),
            'status' => 'running',
            'processed' => 0
        ];
        atomic_write_json(SEO_RUN_META_FILE, $run_meta);
        
        seo_log('info', 'Weekly audit run initialized successfully (Run ID: ' . $run_meta['run_id'] . '). Waiting for hourly worker batches.');
    }

} catch (Exception $e) {
    seo_log('error', 'Weekly initializer failed: ' . $e->getMessage());
} finally {
    // 3. Release Lock
    flock($fp, LOCK_UN);
    fclose($fp);
    @unlink($lock_file);
}
