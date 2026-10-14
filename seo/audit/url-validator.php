<?php

function validate_bet_url($url, $final_url, $type) {
    $issues = [];
    
    // Check if URL resolves correctly without unintended redirects
    // e.g. location URLs stripping trailing slashes or parameters
    
    $parsed_original = parse_url($url, PHP_URL_PATH);
    $parsed_final = parse_url($final_url, PHP_URL_PATH);
    
    $is_soft_404 = ($parsed_final === '/404.php' || preg_match('#/404\.php$#', (string)$parsed_final));
    if ($parsed_original !== $parsed_final && $is_soft_404) {
         $issues[] = seo_create_issue(
             'routing_failure', 
             "URL resolves to the 404 page despite HTTP 200.",
             $final_url,
             $url,
             "The server returned a 200 OK status, but the content is the 404 error page. This is a soft 404.",
             "Fix the routing logic so it returns a true 404 HTTP status code when the page is not found."
         );
    }
    
    if ($parsed_original !== $parsed_final && !$is_soft_404) {
        // If it redirected, it's already caught by redirect_count, but we can flag incorrect resolution
        if (strpos($final_url, '?') !== false) {
            $issues[] = seo_create_issue(
                'incorrect_url_resolution', 
                "Clean URL resolves to parameterized URL.",
                $final_url,
                $url,
                "The routing system rewrote a clean URL to a dirty parameterized URL, which hurts SEO.",
                "Ensure the routing system preserves the clean URL structure without exposing internal query parameters."
            );
        }
    }

    return $issues;
}
