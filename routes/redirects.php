<?php
/**
 * Redirects Handler
 * Burhani Engineering Technology Routing System
 */

function handle_redirects(string $path): bool {
    // Array of legacy -> new URLs or clean redirect rules
    $redirects = [
        // Example: 'old-page' => 'new-page',
    ];

    $path = trim($path, '/');
    if (isset($redirects[$path])) {
        $destination = $redirects[$path];
        // If it doesn't start with http/https, make it absolute using url()
        if (strpos($destination, 'http') !== 0) {
            $destination = url($destination);
        }
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: " . $destination);
        exit();
    }

    return false;
}
