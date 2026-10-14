<?php
require_once __DIR__ . '/../config/seo-config.php';

function fetch_url($url) {
    $start_time = microtime(true);
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, SEO_MAX_REDIRECTS);
    curl_setopt($ch, CURLOPT_TIMEOUT, SEO_TIMEOUT_SEC);
    curl_setopt($ch, CURLOPT_USERAGENT, 'BET SEO Auditor 1.0 (Weekly Monitor)');
    curl_setopt($ch, CURLOPT_HEADER, true);
    
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    $error = curl_error($ch);
    $errno = curl_errno($ch);
    
    curl_close($ch);
    
    $result = [
        'url' => $url,
        'http_status' => $info['http_code'] ?: 0,
        'final_url' => $info['url'] ?: $url,
        'redirect_count' => $info['redirect_count'] ?? 0,
        'response_time' => round(microtime(true) - $start_time, 3),
        'content_type' => $info['content_type'] ?? '',
        'error_msg' => $error,
        'headers' => '',
        'html' => ''
    ];

    if (!$errno && $response !== false) {
        $header_size = $info['header_size'];
        $result['headers'] = substr($response, 0, $header_size);
        $result['html'] = substr($response, $header_size);
    }
    
    return $result;
}
