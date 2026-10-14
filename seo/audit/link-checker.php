<?php

function check_links($url, $parsed) {
    $issues = [];
    $internal = [];
    $external = [];
    $links = $parsed['links'] ?? [];

    foreach ($links as $link) {
        if (strpos($link, 'http') === 0) {
            if (strpos($link, SEO_BASE_URL) === 0) {
                $internal[] = $link;
            } else {
                $external[] = $link;
            }
        } else {
            $internal[] = $link;
        }
    }
    
    // In a full crawl, we'd cross-reference these links to see if they 404.
    // For this module, we're just parsing the page.
    // But we can check for obviously malformed links.
    
    $broken_links = 0;
    foreach ($internal as $link) {
        if (strpos($link, '#') === 0) continue;
        if (strpos($link, 'javascript:') === 0) continue;
        if (strpos($link, 'mailto:') === 0) continue;
        if (strpos($link, 'tel:') === 0) continue;
        
        // Basic malformed check
        if (preg_match('/[<>]/', $link)) {
            $broken_links++;
            $issues[] = seo_create_issue(
                'broken_internal_link', 
                "Malformed internal link detected.",
                $link,
                "A valid URL",
                "Malformed links break crawler navigation and user experience.",
                "Fix the HTML formatting of the href attribute."
            );
        }
    }
    
    return [
        'internal_count' => count($internal),
        'external_count' => count($external),
        'issues' => $issues
    ];
}
