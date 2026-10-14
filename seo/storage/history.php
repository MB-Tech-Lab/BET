<?php
require_once __DIR__ . '/../config/seo-config.php';

function save_audit_history($date = null) {
    if (!$date) {
        $date = date('Y-m-d');
    }
    
    $source = SEO_DATA_DIR . '/audits.json';
    $dest = SEO_HISTORY_DIR . '/' . $date . '.json';
    $latest = SEO_DATA_DIR . '/latest.json';
    
    if (file_exists($source)) {
        // Save to history
        copy($source, $dest);
        // Save as latest
        copy($source, $latest);
        seo_log('info', "Saved audit history for $date");
        return true;
    }
    return false;
}

function get_previous_audit() {
    $files = glob(SEO_HISTORY_DIR . '/*.json');
    if (empty($files)) {
        return [];
    }
    
    // Sort descending by filename (which is YYYY-MM-DD.json)
    rsort($files);
    
    // The very first one might be the current run if we just saved it, 
    // so we want the *previous* one, or just parse 'latest.json' if that's what we want to compare against before saving history.
    // However, the standard flow is to compare latest.json with the newest file in history before we save the new one.
    // So we will just read latest.json
    $latest = SEO_DATA_DIR . '/latest.json';
    if (file_exists($latest)) {
        return json_decode(file_get_contents($latest), true) ?: [];
    }
    
    // If no latest, but history exists
    return json_decode(file_get_contents($files[0]), true) ?: [];
}

function get_all_history_snapshots() {
    $files = glob(SEO_HISTORY_DIR . '/*.json');
    rsort($files);
    $history = [];
    foreach ($files as $f) {
        $date = basename($f, '.json');
        $data = json_decode(file_get_contents($f), true) ?: [];
        
        $critical = 0; $high = 0; $medium = 0;
        foreach ($data as $url_data) {
            $critical += $url_data['severity_counts']['critical'] ?? 0;
            $high += $url_data['severity_counts']['high'] ?? 0;
            $medium += $url_data['severity_counts']['medium'] ?? 0;
        }
        
        $history[] = [
            'date' => $date,
            'audited_count' => count($data),
            'critical' => $critical,
            'high' => $high,
            'medium' => $medium
        ];
    }
    return $history;
}
