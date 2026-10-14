<?php
require_once __DIR__ . '/../config/seo-config.php';
require_once __DIR__ . '/fetcher.php';
require_once __DIR__ . '/parser.php';
require_once __DIR__ . '/canonical-checker.php';
require_once __DIR__ . '/indexability-checker.php';
require_once __DIR__ . '/image-checker.php';
require_once __DIR__ . '/link-checker.php';
require_once __DIR__ . '/url-validator.php';

function run_audit_for_url($url, $type) {
    global $seo_severities;
    
    $result = [
        'url' => $url,
        'type' => $type,
        'http_status' => 0,
        'final_url' => '',
        'redirect_count' => 0,
        'response_time' => 0,
        'issues' => [],
        'severity_counts' => ['critical' => 0, 'high' => 0, 'medium' => 0, 'low' => 0],
        'audited_at' => date('Y-m-d H:i:s')
    ];

    // 1. Fetch
    $fetch_data = fetch_url($url);
    $result['http_status'] = $fetch_data['http_status'];
    $result['final_url'] = $fetch_data['final_url'];
    $result['redirect_count'] = $fetch_data['redirect_count'];
    $result['response_time'] = $fetch_data['response_time'];

    // Check basic HTTP issues
    if ($result['http_status'] >= 500) {
        $result['issues'][] = seo_create_issue(
            '5xx', 
            "Server returned {$result['http_status']} error.",
            $result['http_status'], 
            '200 OK', 
            'Server errors prevent users and search engines from accessing the page.', 
            'Check server logs to identify and fix the underlying crash or misconfiguration.'
        );
    } elseif ($result['http_status'] == 404) {
        $result['issues'][] = seo_create_issue(
            '404', 
            "Page not found (404).",
            '404', 
            '200 OK', 
            'Search engines will drop this page from the index. Users will see an error.', 
            'If intentional, ensure all internal links to this URL are removed. If accidental, restore the page or add a 301 redirect.'
        );
    } elseif ($result['http_status'] >= 400) {
        $result['issues'][] = seo_create_issue(
            (string)$result['http_status'], 
            "Client error {$result['http_status']}.",
            $result['http_status'], 
            '200 OK', 
            'The client requested a resource that is unavailable or forbidden.', 
            'Verify permissions and existence of the resource.'
        );
    }
    
    if ($result['redirect_count'] >= SEO_MAX_REDIRECTS) {
        $result['issues'][] = seo_create_issue(
            'redirect_loop', 
            'Maximum redirects reached or loop detected.',
            $result['redirect_count'] . ' redirects', 
            '0-1 redirects', 
            'Redirect chains waste crawl budget and loops prevent access entirely.', 
            'Update the original link to point directly to the final destination URL.'
        );
    }

    if ($fetch_data['error_msg']) {
        if (strpos($fetch_data['error_msg'], 'timed out') !== false) {
             $result['issues'][] = seo_create_issue('timeout', "Connection Timed Out", $fetch_data['error_msg'], 'Success', 'The server took too long to respond.', 'Optimize page generation time or check server load.');
        } else {
             $result['issues'][] = seo_create_issue('connection_error', "cURL Error: " . $fetch_data['error_msg'], $fetch_data['error_msg'], 'Success', 'Network or DNS failure prevented the page from loading.', 'Verify server network connectivity.');
        }
    }

    // 2. Parse (if HTML)
    $parsed = null;
    if (strpos($fetch_data['content_type'], 'text/html') !== false && !empty($fetch_data['html'])) {
        $parsed = parse_html($fetch_data['html'], $result['final_url']);
    }

    // 3. On-Page Checks
    if ($parsed) {
        // Title
        if (empty($parsed['title'])) {
            $result['issues'][] = seo_create_issue('missing_title', 'Page is missing a title tag.', '', 'Valid title tag', 'Titles are crucial for search engine rankings and CTR in SERPs.', 'Add a unique, descriptive <title> tag between 50-60 characters.');
        } elseif (strlen($parsed['title']) > 70) {
            $result['issues'][] = seo_create_issue('long_title', 'Title is longer than 70 characters.', strlen($parsed['title']) . ' chars', '< 70 chars', 'Long titles are truncated in Google search results, hurting CTR.', 'Shorten the title to be concise and front-load important keywords.');
        }

        // H1
        if (empty($parsed['h1'])) {
            $result['issues'][] = seo_create_issue('missing_h1', 'Page is missing an H1 tag.', '0', '1', 'H1 tags provide structural context to search engines about the page content.', 'Ensure exactly one <h1> tag is present on the page.');
        }

        // Description
        if (empty($parsed['meta_description'])) {
            $result['issues'][] = seo_create_issue('missing_description', 'Page is missing a meta description.', '', 'Valid description', 'Descriptions drive CTR from search engines.', 'Add a <meta name="description"> tag that summarizes the page.');
        } elseif (strlen($parsed['meta_description']) < 50) {
            $result['issues'][] = seo_create_issue('short_description', 'Meta description is too short.', strlen($parsed['meta_description']) . ' chars', '> 50 chars', 'Short descriptions fail to provide enough context for searchers.', 'Expand the description to 150-160 characters.');
        }

        // Run sub-checkers
        $canonical_issues = check_canonical($result['final_url'], $parsed);
        $result['issues'] = array_merge($result['issues'], $canonical_issues);

        $index_result = check_indexability($url, $parsed, $fetch_data);
        $result['issues'] = array_merge($result['issues'], $index_result['issues']);

        $image_result = check_images($url, $parsed);
        $result['issues'] = array_merge($result['issues'], $image_result['issues']);

        $link_result = check_links($url, $parsed);
        $result['issues'] = array_merge($result['issues'], $link_result['issues']);
        
        $result['title'] = $parsed['title'];
        $result['meta_description'] = $parsed['meta_description'];
        $result['canonical'] = $parsed['canonical'];
        $result['h1'] = $parsed['h1'];
        $result['noindex'] = $index_result['noindex'];
        
        if ($link_result['internal_count'] === 0) {
             $result['issues'][] = seo_create_issue('orphan_page_candidate', 'Page has 0 outgoing internal links.', '0 links', '> 0', 'Pages with no outgoing links trap users and search engines.', 'Add navigation or contextual internal links.');
        }
    }

    // 4. BET Validator
    $bet_issues = validate_bet_url($url, $result['final_url'], $type);
    $result['issues'] = array_merge($result['issues'], $bet_issues);

    // 5. Compute Severity Counts
    foreach ($result['issues'] as $issue) {
        if (isset($result['severity_counts'][$issue['severity']])) {
            $result['severity_counts'][$issue['severity']]++;
        }
    }

    return [
        'audit' => $result,
        'parsed' => $parsed
    ];
}
