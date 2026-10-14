<?php
/**
 * Path Helper for Burhani Engineering Technology
 * Handles dynamic path resolution and OS-agnostic directory handling.
 */

if (!defined('ABSPATH')) {
    // ABSPATH is the physical root of the project on the server
    define('ABSPATH', dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR);
}

/**
 * Returns the absolute path to a file or directory relative to the project root.
 * Use this for internal PHP includes/requires.
 */
if (!function_exists('get_absolute_path')) {
    function get_absolute_path($path = '') {
        return ABSPATH . ltrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path), DIRECTORY_SEPARATOR);
    }
}

/**
 * Dynamically detects the base URL of the project for URL generation.
 */
if (!function_exists('detect_base_url')) {
    function detect_base_url() {
        // Explicitly handle all non-local production domains as root-hosted
        if (isset($_SERVER['HTTP_HOST']) && 
            $_SERVER['HTTP_HOST'] !== 'localhost' && 
            $_SERVER['HTTP_HOST'] !== '127.0.0.1' && 
            strpos($_SERVER['HTTP_HOST'], '192.168.') === false) {
            return ''; // Root of the domain
        }

        // Fallback for CLI or cases where SERVER variables are missing
        if (!isset($_SERVER['DOCUMENT_ROOT']) || !isset($_SERVER['SCRIPT_FILENAME'])) {
            return '';
        }

        $doc_root = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
        $project_root = str_replace('\\', '/', dirname(dirname(__DIR__)));
        
        // Calculate the relative path from document root to project root
        if (strpos($project_root, $doc_root) === 0) {
            $base_url = substr($project_root, strlen($doc_root));
        } else {
            $base_url = '';
        }
        
        $final_base = '/' . ltrim(rtrim($base_url, '/'), '/');
        return ($final_base === '/') ? '' : $final_base;
    }
}
