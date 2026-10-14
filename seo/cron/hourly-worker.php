<?php
set_time_limit(0);
ini_set('memory_limit', '512M');

require_once __DIR__ . '/../config/seo-config.php';
require_once __DIR__ . '/../audit/audit-runner.php'; // wait, run_crawler_batch is in crawler.php
require_once __DIR__ . '/../audit/crawler.php';
require_once __DIR__ . '/../audit/duplicate-check.php';
require_once __DIR__ . '/../storage/history.php';
require_once __DIR__ . '/../storage/comparison.php';
require_once __DIR__ . '/../reports/generate.php';

// Only allow CLI execution
if (php_sapi_name() !== 'cli' && !isset($_GET['force_cron'])) {
    die("This script must be run from the command line.");
}

$automation_settings = seo_get_automation_settings();
if (empty($automation_settings['enabled'])) {
    seo_log('warning', '[AUTOMATION] Worker skipped because automation is disabled.');
    exit;
}

$lock_file = SEO_DATA_DIR . '/worker.lock';

// 1. Acquire Lock
$fp = fopen($lock_file, 'w+');
if (!flock($fp, LOCK_EX | LOCK_NB)) {
    seo_log('error', 'Worker is already running. Lock file exists.');
    fclose($fp);
    exit;
}

try {
    // Check Run Metadata
    $run_meta = [];
    if (file_exists(SEO_RUN_META_FILE)) {
        $run_meta = json_decode(file_get_contents(SEO_RUN_META_FILE), true) ?: [];
    }

    if (empty($run_meta) || (isset($run_meta['status']) && $run_meta['status'] === 'completed')) {
        // No active run. Exit quietly.
        exit;
    }
    
    // Resume or continue running
    if ($run_meta['status'] === 'interrupted') {
        seo_log('info', '[AUTOMATION] Existing run resumed (Run ID: ' . ($run_meta['run_id'] ?? 'unknown') . ').');
        $run_meta['status'] = 'running';
        atomic_write_json(SEO_RUN_META_FILE, $run_meta);
    } else {
        seo_log('info', '[AUTOMATION] Weekly audit enabled — worker starting.');
    }
    
    // 2. Process exactly ONE batch
    $res = run_crawler_batch(SEO_BATCH_SIZE);
    
    if (isset($res['error'])) {
        seo_log('error', 'Worker batch failed: ' . $res['error']);
        throw new Exception($res['error']);
    }
    
    seo_log('info', "Worker processed batch of {$res['processed']}. Total completed: {$res['completed']}/{$res['total']} ({$res['progress_pct']}%)");
    
    // 3. Check for completion
    if ($res['completed'] >= $res['total'] && $res['total'] > 0) {
        seo_log('info', 'All URLs processed. Finalizing weekly audit...');
        
        // Run Duplicate check
        seo_log('info', 'Running duplicate check...');
        run_duplicate_check();
        
        // Compare with previous
        seo_log('info', 'Comparing with previous audit...');
        $audits_file = SEO_DATA_DIR . '/audits.json';
        $current_audits = file_exists($audits_file) ? json_decode(file_get_contents($audits_file), true) : [];
        if (!empty($current_audits)) {
            $compared = compare_audits($current_audits);
            atomic_write_json($audits_file, $compared);
        }
        
        // Save History
        seo_log('info', 'Saving history snapshot...');
        save_audit_history();
        
        // Generate Reports & Stats
        seo_log('info', 'Generating reports and health score...');
        generate_reports();
        
        // Mark as completed
        $run_meta['status'] = 'completed';
        $run_meta['completed_at'] = date('Y-m-d H:i:s');
        atomic_write_json(SEO_RUN_META_FILE, $run_meta);
        
        seo_log('info', '[AUTOMATION] Weekly audit completed.');
    }

} catch (Exception $e) {
    seo_log('error', 'Hourly worker failed: ' . $e->getMessage());
    if (!empty($run_meta) && isset($run_meta['status']) && $run_meta['status'] === 'running') {
        $run_meta['status'] = 'interrupted';
        atomic_write_json(SEO_RUN_META_FILE, $run_meta);
    }
} finally {
    // 4. Release Lock
    flock($fp, LOCK_UN);
    fclose($fp);
    @unlink($lock_file);
}
