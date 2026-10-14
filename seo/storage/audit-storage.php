<?php
require_once __DIR__ . '/../config/seo-config.php';

function init_audit_storage() {
    $file = SEO_DATA_DIR . '/audits.json';
    if (!file_exists($file)) {
        file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));
    }
}

function save_audit_batch($results) {
    $file = SEO_DATA_DIR . '/audits.json';
    
    // Read existing
    $existing = [];
    if (file_exists($file)) {
        $content = file_get_contents($file);
        if ($content) {
            $existing = json_decode($content, true) ?: [];
        }
    }
    
    // Merge by URL
    foreach ($results as $result) {
        $existing[$result['url']] = $result;
    }
    
    // Save back
    atomic_write_json($file, $existing);
}

function get_current_audits() {
    $file = SEO_DATA_DIR . '/audits.json';
    if (file_exists($file)) {
        return json_decode(file_get_contents($file), true) ?: [];
    }
    return [];
}
