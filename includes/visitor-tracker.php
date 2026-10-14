<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$visitors_file = __DIR__ . '/../data/visitors.csv';

$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
// Sanitize commas in user agent for CSV safety
$user_agent = str_replace('"', '""', $user_agent);

$url = $_SERVER['REQUEST_URI'] ?? '/';
$datetime = date('Y-m-d H:i:s');
$current_time = time();

// Localhost Filtering Safeguard
$server_name = $_SERVER['SERVER_NAME'] ?? '';
if ($ip === '127.0.0.1' || $ip === '::1' || stripos($server_name, 'localhost') !== false) {
    return; // Ignore localhost traffic entirely
}

// Bot & Crawler Filtering
$bots = [
    'Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot',
    'facebookexternalhit', 'WhatsApp', 'TelegramBot', 'curl', 'wget', 'python',
    'requests', 'HeadlessChrome', 'Lighthouse', 'GTmetrix', 'Pingdom', 'Screaming Frog'
];
foreach ($bots as $bot) {
    if (stripos($user_agent, $bot) !== false) {
        return; // Ignore bot/crawler traffic entirely
    }
}

$should_track = false;

if (!isset($_SESSION['last_activity']) || !isset($_SESSION['tracked_ip'])) {
    // New session
    $should_track = true;
} else {
    // Existing session
    // Check if IP changed or it's been more than 30 minutes (1800 seconds)
    if ($_SESSION['tracked_ip'] !== $ip || ($current_time - $_SESSION['last_activity']) > 1800) {
        $should_track = true;
    }
}

// Update session state
$_SESSION['last_activity'] = $current_time;
$_SESSION['tracked_ip'] = $ip;

// 1. Log Page View
$pageviews_file = __DIR__ . '/../data/pageviews.csv';
$fp_pv = fopen($pageviews_file, 'a');
if ($fp_pv) {
    // Use LOCK_NB (non-blocking) so that we don't stall the request if the file is locked
    if (flock($fp_pv, LOCK_EX | LOCK_NB)) {
        fputcsv($fp_pv, [$ip, $url, $datetime, $user_agent]);
        flock($fp_pv, LOCK_UN);
    }
    fclose($fp_pv);
}

// 2. Log Visitor (Unique Session)
if ($should_track) {
    $fp = fopen($visitors_file, 'a');
    if ($fp) {
        if (flock($fp, LOCK_EX | LOCK_NB)) {
            fputcsv($fp, [$ip, $url, $datetime, $user_agent]);
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    }
}
?>
