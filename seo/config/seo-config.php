<?php
// SEO Configuration

// Crawler Limits
define('SEO_BATCH_SIZE', 50);          // URLs per batch
define('SEO_DELAY_MS', 100);           // Delay between requests
define('SEO_TIMEOUT_SEC', 10);         // cURL timeout
define('SEO_MAX_RETRIES', 3);          // Max retries on failure
define('SEO_MAX_REDIRECTS', 5);        // Max redirects before flagging error

// Paths
define('SEO_BASE_DIR', realpath(__DIR__ . '/..'));
define('SEO_DATA_DIR', SEO_BASE_DIR . '/data');
define('SEO_HISTORY_DIR', SEO_DATA_DIR . '/history');
define('SEO_LOGS_DIR', SEO_BASE_DIR . '/logs');
define('SEO_STORAGE_DIR', SEO_BASE_DIR . '/storage');

// Base URL for SEO crawling, discovery, and link checking
if (!defined('SEO_BASE_URL')) {
    // 1. Explicit SEO environment override (e.g. BET_SEO_BASE_URL="http://localhost/BET" or live URL)
    $env_seo_base = getenv('BET_SEO_BASE_URL');
    if ($env_seo_base !== false && trim($env_seo_base) !== '') {
        $seo_base = trim($env_seo_base);
    } elseif (($env_prod = getenv('PRODUCTION_URL')) !== false && trim($env_prod) !== '') {
        $seo_base = trim($env_prod);
    } elseif (defined('BASE_URL')) {
        $seo_base = BASE_URL;
    } else {
        // Safe production default
        $seo_base = 'https://www.burhaniengineeringtechnology.com';
    }
    define('SEO_BASE_URL', rtrim($seo_base, '/'));
}

define('SEO_RUN_META_FILE', SEO_DATA_DIR . '/run-meta.json');
define('SEO_AUTOMATION_SETTINGS_FILE', SEO_DATA_DIR . '/automation-settings.json');

// Cleanup
define('SEO_HISTORY_RETENTION_DAYS', 90);

// Severities
$seo_severities = [
    'critical' => [
        '404', '5xx', 'redirect_loop', 'broken_canonical', 
        'inaccessible_page', 'noindex_unexpected', 'routing_failure', 'timeout', 'connection_error'
    ],
    'high' => [
        'missing_title', 'missing_h1', 'duplicate_canonical', 
        'orphan_page', 'broken_internal_link', 'incorrect_url_resolution'
    ],
    'medium' => [
        'duplicate_title', 'duplicate_description', 'long_title', 
        'short_description', 'missing_alt', 'excessive_click_depth'
    ],
    'low' => [
        'minor_optimization'
    ]
];

function seo_get_severity($code) {
    global $seo_severities;
    foreach ($seo_severities as $severity => $codes) {
        if (in_array($code, $codes)) return $severity;
    }
    return 'low';
}

function seo_create_issue($code, $message, $detected = '', $expected = '', $explanation = '', $recommendation = '') {
    return [
        'type' => $code, // legacy key
        'code' => $code,
        'severity' => seo_get_severity($code),
        'message' => $message,
        'detected' => $detected,
        'expected' => $expected,
        'explanation' => $explanation,
        'recommendation' => $recommendation
    ];
}

// Helper functions for logging
function seo_log($type, $message) {
    $date = date('Y-m-d H:i:s');
    if (!is_dir(SEO_LOGS_DIR)) mkdir(SEO_LOGS_DIR, 0755, true);
    $file = $type === 'error' ? SEO_LOGS_DIR . '/errors.log' : SEO_LOGS_DIR . '/audit.log';
    file_put_contents($file, "[$date] $message" . PHP_EOL, FILE_APPEND);
}

// Atomic file write for JSON to prevent corruption
function atomic_write_json($file, $data) {
    $temp = $file . '.tmp.' . uniqid();
    file_put_contents($temp, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    if (file_exists($file)) {
        // On Windows, rename can fail if the file exists and is open, but this should be fine
        // since we control the locks, or we can use unlink first.
        // Actually, rename() overwrites on Linux automatically. On Windows, it might fail.
        @unlink($file); 
    }
    rename($temp, $file);
}

// Get automation settings with safe defaults
function seo_get_automation_settings() {
    $defaults = [
        'enabled' => false,
        'weekly_day' => 'Monday',
        'weekly_time' => '02:00',
        'worker_interval' => 15,
        'batch_size' => 50,
        'updated_at' => null
    ];
    
    if (file_exists(SEO_AUTOMATION_SETTINGS_FILE)) {
        $data = json_decode(file_get_contents(SEO_AUTOMATION_SETTINGS_FILE), true);
        if (is_array($data)) {
            return array_merge($defaults, $data);
        }
    }
    return $defaults;
}
