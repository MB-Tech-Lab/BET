<?php
// ============================================================
// BET Software Manager — Admin Credentials
// Passwords stored using password_hash(PASSWORD_BCRYPT)
// ============================================================
// To change a password, generate a new hash:
//   C:\xampp\php\php.exe -r "echo password_hash('NEW_PASS', PASSWORD_BCRYPT);"
// Then replace the hash string below.
// ============================================================

$admins = [
    [
        'username'     => 'admin',
        'password'     => '$2y$10$dummyhash1234567890123456789012345678901234567890',
        'email'        => 'admin@example.com',
        'role'         => 'superadmin'
    ],
    [
        'username'     => 'editor',
        'password'     => '$2y$10$dummyhash0987654321098765432109876543210987654321',
        'email'        => 'editor@example.com',
        'role'         => 'editor'
    ],
];
