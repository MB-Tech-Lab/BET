<?php
// ============================================================
// BET Software Manager — Admin Auth Guard
// Include at the top of every protected admin page.
// ============================================================

if (session_status() === PHP_SESSION_NONE) {
    // Secure session cookie settings before starting session
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    session_start();
}

if (empty($_SESSION['bet_admin_logged_in'])) {
    header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/login.php');
    exit;
}

// Session Timeout (30 minutes)
$timeout_duration = 1800;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/login.php?timeout=1');
    exit;
}
$_SESSION['last_activity'] = time();

// Generate CSRF Token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Provide a helper function to check CSRF
if (!function_exists('verify_csrf_token')) {
    function verify_csrf_token($token) {
        return hash_equals($_SESSION['csrf_token'], $token);
    }
}
