<?php

function check_images($url, $parsed) {
    $issues = [];
    $images = $parsed['images'];
    
    $missing_alt_count = 0;
    foreach ($images as $img) {
        if (empty(trim($img['alt']))) {
            $missing_alt_count++;
        }
    }
    
    if ($missing_alt_count > 0) {
        $issues[] = seo_create_issue(
            'missing_alt', 
            "Page has $missing_alt_count image(s) missing alt text.",
            "$missing_alt_count missing",
            "0 missing",
            "Alt text is required for accessibility and helps image SEO.",
            "Add descriptive alt attributes to all content images. Use empty alt='' for purely decorative images."
        );
    }
    
    return [
        'total_images' => count($images),
        'missing_alt_count' => $missing_alt_count,
        'issues' => $issues
    ];
}
