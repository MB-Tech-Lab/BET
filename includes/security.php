<?php
// ============================================================
// Burhani Engineering Technology — Security Hardening
// ============================================================

// 1. Error Handling (Production Mode)
error_reporting(E_ALL);
ini_set('display_errors', '0'); // Hide errors from users
ini_set('log_errors', '1');     // Log errors internally

// Ensure logs directory exists
$logs_dir = dirname(__DIR__) . '/logs';
if (!file_exists($logs_dir)) {
    mkdir($logs_dir, 0777, true);
    // Protect logs directory
    file_put_contents($logs_dir . '/.htaccess', "Deny from all\n");
}
ini_set('error_log', $logs_dir . '/php_errors.log');

// 2. Global Security Headers
// Prevent Clickjacking
header('X-Frame-Options: SAMEORIGIN');
// Prevent MIME-Sniffing
header('X-Content-Type-Options: nosniff');
// Control Referrer Information
header('Referrer-Policy: strict-origin-when-cross-origin');

?>
