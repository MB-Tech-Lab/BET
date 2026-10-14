<?php
require_once __DIR__ . '/crawler.php';

function run_full_audit_loop() {
    seo_log('info', 'Starting full audit loop.');
    
    // Safety limit to prevent absolute infinite loops just in case
    $max_iterations = 10000;
    $i = 0;
    
    while ($i < $max_iterations) {
        $res = run_crawler_batch();
        if (!$res) {
            seo_log('error', 'Crawler batch failed to run.');
            break;
        }
        
        if ($res['processed'] === 0) {
            // No more URLs to process
            seo_log('info', 'Audit loop finished. All URLs processed.');
            break;
        }
        
        seo_log('info', "Processed batch of {$res['processed']}. Total completed: {$res['completed']}/{$res['total']} ({$res['progress_pct']}%)");
        $i++;
    }
    
    return true;
}

// Allow direct execution
if (php_sapi_name() === 'cli' && basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    run_full_audit_loop();
}
