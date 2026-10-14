<?php

function check_canonical($url, $parsed) {
    global $seo_severities;
    
    $canonical = $parsed['canonical'];
    $issues = [];
    
    if (empty($canonical)) {
        return $issues;
    }
    
    if (!filter_var($canonical, FILTER_VALIDATE_URL)) {
        $issues[] = seo_create_issue(
            'broken_canonical', 
            'Canonical URL is malformed: ' . $canonical,
            $canonical,
            'A valid absolute URL',
            'A malformed canonical tag is ignored by search engines, potentially leading to duplicate content issues.',
            'Ensure the canonical tag contains a valid, absolute URL including the protocol (http/https).'
        );
        return $issues;
    }
    
    return $issues;
}
