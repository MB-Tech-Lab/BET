<?php
// LEGACY WRAPPER SCRIPT
// This script is preserved for backward compatibility. 
// It simulates the old behavior by running the initializer and then looping the worker.
// PRODUCTION RECOMMENDATION: Use weekly-initializer.php and hourly-worker.php in Cron instead.

set_time_limit(0);
ini_set('memory_limit', '512M');

require_once __DIR__ . '/../config/seo-config.php';

// Only allow CLI execution
if (php_sapi_name() !== 'cli' && !isset($_GET['force_cron'])) {
    die("This script must be run from the command line.");
}

seo_log('warning', 'DEPRECATION NOTICE: weekly-audit.php is deprecated. Please switch your Cron schedule to use weekly-initializer.php (Mondays) and hourly-worker.php (Every hour) for reliable low-resource batch processing.');

seo_log('info', '--- LEGACY WEEKLY AUDIT STARTED ---');

// 1. Run Initializer
seo_log('info', 'Executing weekly initializer...');
require __DIR__ . '/weekly-initializer.php';

// 2. Loop Worker until finished
seo_log('info', 'Executing worker loop (simulating hourly cron)...');

// Note: We use shell_exec or include to run the worker in a loop, but since we are in the same process,
// it's safer to just include it in a loop if we bypass the exit/die statements, OR we can just execute the worker via CLI.

$php_bin = PHP_BINARY;
if (empty($php_bin) || $php_bin === 'phpdbg') {
    $php_bin = 'php'; // Fallback
}

$worker_path = escapeshellarg(__DIR__ . '/hourly-worker.php');

$max_iterations = 10000;
$i = 0;

while ($i < $max_iterations) {
    $run_meta = json_decode(file_get_contents(SEO_RUN_META_FILE), true) ?: [];
    if (!empty($run_meta) && isset($run_meta['status']) && $run_meta['status'] === 'completed') {
        seo_log('info', 'Legacy wrapper finished. Audit is completed.');
        break;
    }
    
    // Execute worker as a separate process to ensure memory is freed and locks work cleanly
    seo_log('info', "Legacy wrapper executing worker batch iteration " . ($i + 1) . "...");
    $output = shell_exec("$php_bin $worker_path 2>&1");
    
    // Check if worker aborted or crashed
    $run_meta_after = json_decode(file_get_contents(SEO_RUN_META_FILE), true) ?: [];
    if (!empty($run_meta_after) && isset($run_meta_after['status']) && $run_meta_after['status'] === 'interrupted') {
        seo_log('error', 'Worker was interrupted or failed. Aborting legacy wrapper loop.');
        break;
    }
    
    if (strpos($output, 'Worker is already running') !== false) {
        seo_log('warning', 'Worker lock collision in legacy wrapper loop. Retrying in 5 seconds...');
        sleep(5);
    }
    
    $i++;
}

seo_log('info', '--- LEGACY WEEKLY AUDIT WRAPPER ENDED ---');
