<?php
require_once __DIR__ . '/../config/seo-config.php';

function discover_urls() {
    $sitemap_index_url = SEO_BASE_URL . '/sitemap/sitemap.xml';
    $urls = [];

    function fetch_xml($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    $xml_content = fetch_xml($sitemap_index_url);
    if (!$xml_content) {
        seo_log('error', 'Failed to fetch sitemap index: ' . $sitemap_index_url);
        return false;
    }

    $sitemaps = [];
    $xml = @simplexml_load_string($xml_content);
    if ($xml && isset($xml->sitemap)) {
        foreach ($xml->sitemap as $sm) {
            $sitemaps[] = (string)$sm->loc;
        }
    } else {
        if ($xml && isset($xml->url)) {
            $sitemaps[] = $sitemap_index_url; 
        }
    }

    $existing_urls = [];
    if (file_exists(SEO_DATA_DIR . '/urls.json')) {
        $existing_urls = json_decode(file_get_contents(SEO_DATA_DIR . '/urls.json'), true) ?: [];
    }

    $total_sitemap_urls = 0;
    $excluded_images = 0;
    
    // Mark all existing as 'missing' initially. We will restore them if found.
    $next_urls = [];
    foreach ($existing_urls as $path => $u) {
        $u['status'] = 'missing';
        $next_urls[$path] = $u;
    }

    foreach ($sitemaps as $sitemap_url) {
        if (strpos($sitemap_url, 'sitemap-images.xml') !== false) {
            $s_xml_content = fetch_xml($sitemap_url);
            if ($s_xml_content) {
                $s_xml = @simplexml_load_string($s_xml_content);
                if ($s_xml && isset($s_xml->url)) {
                    $excluded_images += count($s_xml->url);
                    $total_sitemap_urls += count($s_xml->url);
                }
            }
            continue;
        }

        $s_xml_content = fetch_xml($sitemap_url);
        if (!$s_xml_content) {
            seo_log('error', 'Failed to fetch sitemap: ' . $sitemap_url);
            continue;
        }
        $s_xml = @simplexml_load_string($s_xml_content);
        if ($s_xml && isset($s_xml->url)) {
            $total_sitemap_urls += count($s_xml->url);
            
            foreach ($s_xml->url as $url_node) {
                // Count explicitly inside image tags if present
                if (isset($url_node->children('image', true)->image)) {
                    $excluded_images += count($url_node->children('image', true)->image);
                }
            
                $loc = (string)$url_node->loc;
                
                $path = parse_url($loc, PHP_URL_PATH);
                $path = preg_replace('#^/BET#', '', $path);
                
                $type = 'other';
                if (preg_match('#/locations/[^/]+/[^/]+/[^/]+/products/[^/]+#', $path)) {
                    $type = 'location_product';
                } elseif (preg_match('#/locations/[^/]+/[^/]+/[^/]+/?#', $path)) {
                    $type = 'location';
                } elseif (preg_match('#/products/[^/]+#', $path)) {
                    $type = 'product';
                }

                $status = isset($existing_urls[$path]) && $existing_urls[$path]['status'] !== 'missing' ? $existing_urls[$path]['status'] : 'pending';
                // If it was previously failed, leave it as failed so it gets re-audited or tracked
                // Wait, if it was completed, leave it as completed. 
                // But if it's a new crawl batch starting from scratch, they should all be pending.
                // Discovery shouldn't reset 'completed' to 'pending' unless it's a new week.
                // In weekly-audit.php, we clear audits.json, but urls.json might retain 'completed'.
                // Actually, weekly-audit should reset all to pending.
                // Let's reset all to pending if run via weekly cron, but wait, weekly cron just calls discover_urls().
                // Let's not reset here, weekly-audit will do it.
                
                $next_urls[$path] = [
                    'url' => $path,
                    'full_url' => $loc,
                    'type' => $type,
                    'status' => $status,
                    'last_discovered' => date('Y-m-d H:i:s'),
                    'last_audited' => isset($existing_urls[$path]) ? $existing_urls[$path]['last_audited'] : null
                ];
            }
        }
    }

    if (!is_dir(SEO_DATA_DIR)) {
        mkdir(SEO_DATA_DIR, 0755, true);
    }

    file_put_contents(SEO_DATA_DIR . '/urls.json', json_encode($next_urls, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    
    $discovery_stats = [
        'total_sitemap_urls' => $total_sitemap_urls,
        'excluded_images' => $excluded_images,
        'auditable_urls' => count($next_urls),
        'missing_urls' => count(array_filter($next_urls, function($u) { return $u['status'] === 'missing'; }))
    ];
    file_put_contents(SEO_DATA_DIR . '/discovery_stats.json', json_encode($discovery_stats, JSON_PRETTY_PRINT));
    
    seo_log('info', 'Discovery completed. Total auditable: ' . count($next_urls));

    return $discovery_stats;
}

// Allow direct execution
if (php_sapi_name() === 'cli' && basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    discover_urls();
} elseif (isset($_GET['run'])) {
    header('Content-Type: application/json');
    $stats = discover_urls();
    echo json_encode(['success' => true, 'count' => $stats['auditable_urls'], 'stats' => $stats]);
}
