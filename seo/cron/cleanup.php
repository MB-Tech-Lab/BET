<?php
require_once __DIR__ . '/../config/seo-config.php';

function cleanup_old_history() {
    $files = glob(SEO_HISTORY_DIR . '/*.json');
    $now = time();
    $retention_sec = SEO_HISTORY_RETENTION_DAYS * 86400;
    
    $deleted = 0;
    foreach ($files as $file) {
        if (is_file($file)) {
            $mtime = filemtime($file);
            if ($now - $mtime > $retention_sec) {
                unlink($file);
                $deleted++;
            }
        }
    }
    
    seo_log('info', "Cleanup complete. Removed $deleted old history files.");
    return $deleted;
}

if (php_sapi_name() === 'cli' && basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    cleanup_old_history();
}
