<?php

function check_indexability($url, $parsed, $fetch_result) {
    $issues = [];
    $is_indexable = true;
    $noindex_source = '';
    
    $headers = $fetch_result['headers'];
    if (preg_match('/X-Robots-Tag:\s*([^\\r\\n]+)/i', $headers, $matches)) {
        $x_robots = strtolower(trim($matches[1]));
        if (strpos($x_robots, 'noindex') !== false) {
            $is_indexable = false;
            $noindex_source = "X-Robots-Tag: $x_robots";
        }
    }
    
    if (!empty($parsed['meta_robots']) && strpos($parsed['meta_robots'], 'noindex') !== false) {
        $is_indexable = false;
        $noindex_source = "Meta Robots: " . $parsed['meta_robots'];
    }
    
    if (!$is_indexable) {
        $issues[] = seo_create_issue(
            'noindex_unexpected', 
            'URL is in sitemap but contains a noindex directive.',
            $noindex_source,
            'Indexable (No noindex directive)',
            'Pages submitted in a sitemap must be indexable. Google will flag this as an error ("Submitted URL marked noindex").',
            'Either remove the noindex directive from the page, or remove the URL from the sitemap.'
        );
    }
    
    return [
        'is_indexable' => $is_indexable,
        'noindex' => !$is_indexable,
        'issues' => $issues
    ];
}
