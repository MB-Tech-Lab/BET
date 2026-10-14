<?php
/**
 * BET Sitemap Builder
 * Catalog-driven, filesystem-verified discovery of every crawlable URL on the site,
 * plus images and downloads. Produces sitemap.xml (index) + per-category child sitemaps
 * and a flat data/sitemap_manifest.json index consumed by sitemap-explorer.php.
 *
 * Discovery sources, by design:
 *  - Products / product-categories / location+product combinations: driven by
 *    includes/product-catalog.php (get_product_catalog()), NOT raw glob. Globbing every
 *    product folder's PHP files previously manufactured phantom location+product URLs for
 *    non-catalog files and could never be trusted to match what router.php can actually route.
 *  - Locations: the catalog has no location data (none exists anywhere in the codebase),
 *    so the filesystem (each city's own PHP file under locations/) IS the authoritative source here.
 *  - Industries / Resources / Images / Downloads: filesystem glob, since these are simple,
 *    flat, self-contained content directories with no separate registry.
 *  - Static pages: a small curated allowlist. Globbing root *.php would sweep in
 *    admin/dev/debug scripts (diag.php, test.php, router.php, etc.) that must never be public.
 */

if (!function_exists('sitemap_discover_products')) {

function sitemap_url_path(string $relative): string {
    return '/' . ltrim(str_replace('\\', '/', $relative), '/');
}

/**
 * Products, product-category pages, and standalone use-case pages — all catalog-driven,
 * cross-checked against the filesystem so a stale catalog entry can never produce a 404.
 */
function sitemap_discover_products(): array {
    require_once ABSPATH . 'includes/product-catalog.php';
    $catalog = get_product_catalog();

    $products    = []; // one entry per top-level product
    $categories  = []; // one entry per product-category page
    $standalones = []; // one entry per standalone use-case page

    foreach ($catalog as $key => $prod) {
        $internal_url = $prod['internal_url'] ?? null;
        if (!$internal_url || !file_exists(ABSPATH . $internal_url)) {
            continue; // catalog entry points at a file that no longer exists — skip, don't guess
        }
        $product_dir = dirname($internal_url);
        $slug        = $prod['url_slug'] ?? $key;

        $products[] = [
            'url'      => sitemap_url_path("products/{$slug}/"),
            'label'    => $prod['name'] ?? $slug,
            'category' => 'product',
            'file'     => $internal_url,
        ];

        foreach ($prod['subcategories'] ?? [] as $cat_slug => $cat_label) {
            // Check for file first
            $resolved = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $cat_slug . '.php');
            
            // If not found, check if it's a directory mapping using the label
            if (!$resolved || !file_exists($resolved)) {
                $dir_path = ABSPATH . $product_dir . '/product-category/' . $cat_label;
                if (is_dir($dir_path)) {
                    $resolved = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $cat_label . '/' . $cat_slug . '.php');
                    if (!$resolved) {
                        $resolved = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $cat_label . '/' . $cat_label . '.php');
                    }
                }
            }

            if (!$resolved || !file_exists($resolved)) continue;
            
            $clean_cat_slug = strtolower(str_replace(['_', ' '], '-', $cat_slug));
            $rel_file = str_replace('\\', '/', str_replace(rtrim(ABSPATH, '/\\'), '', $resolved));
            $categories[] = [
                'url'      => sitemap_url_path("products/{$slug}/product-category/{$clean_cat_slug}/"),
                'label'    => $cat_label,
                'category' => 'product_category',
                'file'     => ltrim($rel_file, '/'),
                'parent'   => $slug,
            ];
        }

        foreach ($prod['subcategory_routes'] ?? [] as $sub_slug => $mapped_file) {
            if (!file_exists(ABSPATH . $mapped_file)) continue;
            $categories[] = [
                'url'      => sitemap_url_path("products/{$slug}/product-category/acrylic-vacuum-glove-box/{$sub_slug}.php"),
                'label'    => ucwords(str_replace('-', ' ', $sub_slug)),
                'category' => 'product_category',
                'file'     => $mapped_file,
                'parent'   => $slug,
                'location_path' => "/products/{$slug}/product-category/acrylic-vacuum-glove-box/{$sub_slug}.php",
            ];
        }

        foreach ($prod['standalone_pages'] ?? [] as $sa_slug => $sa_label) {
            $resolved = resolve_path_case_insensitive(ABSPATH, $product_dir . '/' . $sa_slug . '.php');
            if (!$resolved || !file_exists($resolved)) continue;
            $rel_file = str_replace('\\', '/', str_replace(rtrim(ABSPATH, '/\\'), '', $resolved));
            $standalones[] = [
                'url'      => sitemap_url_path("products/{$slug}/{$sa_slug}/"),
                'label'    => $sa_label,
                'category' => 'product',
                'file'     => ltrim($rel_file, '/'),
                'parent'   => $slug,
            ];
        }
    }

    return [$products, $categories, $standalones];
}

/** All 327 city pages — filesystem is the only source of truth (no location data file exists). */
function sitemap_discover_locations(): array {
    $entries = [];
    $files = glob(ABSPATH . 'locations/*/*/*.php');
    foreach ($files as $f) {
        $rel = str_replace('\\', '/', str_replace(ABSPATH, '', $f));
        $parts = explode('/', trim($rel, '/')); // locations, continent, country, city.php
        if (count($parts) !== 4) continue;
        $city = preg_replace('/\.php$/i', '', $parts[3]);
        // Lowercase continent/country/city segments: routing and every page's own canonical
        // already normalize to lowercase (includes/location-template.php's strtolower() fallback,
        // routes/locations.php's ucwords()-then-lowercase-in-URL derivation), but folder names on
        // disk aren't guaranteed to be lowercase (e.g. locations/asia/Cambodia is capitalized while
        // every other of the 186 country folders is lowercase) — build the URL the same
        // case-normalized way the live pages do, so the sitemap never advertises a URL that
        // differs from what that page's own <link rel="canonical"> outputs.
        $continent_slug = strtolower($parts[1]);
        $country_slug   = strtolower($parts[2]);
        $city_slug      = strtolower($city);
        $entries[] = [
            'url'      => sitemap_url_path("locations/{$continent_slug}/{$country_slug}/{$city_slug}/"),
            'label'    => ucwords(str_replace('-', ' ', $city)),
            'category' => 'location',
            'file'     => $rel,
        ];
    }
    return $entries;
}

/**
 * Location + Product (+ Category) combinations. Combinatorial over real catalog products/
 * subcategories/standalone_pages only — this is what eliminates phantom, unroutable URLs.
 */
function sitemap_discover_location_products(array $locations, array $products, array $categories, array $standalones): array {
    $entries = [];

    // Index categories/standalones by parent product slug for fast combination.
    $cats_by_parent = [];
    foreach ($categories as $c) $cats_by_parent[$c['parent']][] = $c;
    $sa_by_parent = [];
    foreach ($standalones as $s) $sa_by_parent[$s['parent']][] = $s;

    $url_last_segment = static function (string $url): string {
        $parts = explode('/', trim($url, '/'));
        return end($parts);
    };

    foreach ($locations as $loc) {
        $loc_base = rtrim($loc['url'], '/');

        foreach ($products as $p) {
            $slug = $url_last_segment($p['url']);
            $entries[] = [
                'url'      => $loc_base . "/products/{$slug}/",
                'label'    => $p['label'] . ' — ' . $loc['label'],
                'category' => 'location_product',
                'file'     => $p['file'],
            ];
            foreach ($cats_by_parent[$slug] ?? [] as $c) {
                if (!empty($c['location_path'])) {
                    $entries[] = [
                        'url'      => $loc_base . $c['location_path'],
                        'label'    => $c['label'] . ' — ' . $loc['label'],
                        'category' => 'location_product',
                        'file'     => $c['file'],
                    ];
                    continue;
                }
                $cat_slug = $url_last_segment($c['url']);
                $entries[] = [
                    'url'      => $loc_base . "/products/{$slug}/product-category/{$cat_slug}/",
                    'label'    => $c['label'] . ' — ' . $loc['label'],
                    'category' => 'location_product',
                    'file'     => $c['file'],
                ];
            }
            foreach ($sa_by_parent[$slug] ?? [] as $s) {
                $sa_slug = $url_last_segment($s['url']);
                $entries[] = [
                    'url'      => $loc_base . "/products/{$sa_slug}/",
                    'label'    => $s['label'] . ' — ' . $loc['label'],
                    'category' => 'location_product',
                    'file'     => $s['file'],
                ];
            }
        }
    }

    return $entries;
}

/** Industries — flat glob, no separate registry exists. */
function sitemap_discover_industries(): array {
    $entries = [];
    foreach (glob(ABSPATH . 'industries/*.php') as $f) {
        $slug = basename($f, '.php');
        $entries[] = [
            'url'      => sitemap_url_path("industries/{$slug}/"),
            'label'    => ucwords(str_replace('-', ' ', $slug)),
            'category' => 'industry',
            'file'     => 'industries/' . basename($f),
        ];
    }
    return $entries;
}

/** Documentation / resource guides — flat glob, split out as its own category (not merged into industries). */
function sitemap_discover_documentation(): array {
    $entries = [];
    foreach (glob(ABSPATH . 'resources/*.php') as $f) {
        $slug = basename($f, '.php');
        $entries[] = [
            'url'      => sitemap_url_path("resources/{$slug}/"),
            'label'    => ucwords(str_replace('-', ' ', $slug)),
            'category' => 'documentation',
            'file'     => 'resources/' . basename($f),
        ];
    }
    return $entries;
}

/**
 * Curated static pages. Intentionally NOT a glob of root *.php — that would expose dev/debug
 * scripts. forms/contact.php and forms/appointment.php are deliberately excluded: they are
 * POST-only AJAX form processors (PHP_Email_Form handlers with no HTML output on GET), not
 * navigable pages — including them produced dead/blank sitemap entries with no real canonical.
 */
function sitemap_discover_static_pages(): array {
    $allowlist = [
        ''                => 'Home',
        'includes/products.php'    => 'Our Products',
        'includes/downloads.php'   => 'Software Download Center',
    ];
    $entries = [];
    foreach ($allowlist as $rel => $label) {
        if ($rel !== '' && !file_exists(ABSPATH . $rel)) continue;
        $entries[] = [
            'url'      => $rel === '' ? '/' : sitemap_url_path(preg_replace('/\.php$/i', '', $rel) . '/'),
            'label'    => $label,
            'category' => 'static',
            'file'     => $rel === '' ? 'index.php' : $rel,
        ];
    }
    return $entries;
}

/** Recursively scans a directory for image files. Returns [url, label, file] entries. */
function sitemap_scan_images(string $dir): array {
    $entries = [];
    if (!is_dir($dir)) return $entries;
    $exts = ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif', 'avif'];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS));
    foreach ($it as $file) {
        if (!$file->isFile()) continue;
        $ext = strtolower($file->getExtension());
        if (!in_array($ext, $exts, true)) continue;
        $real = str_replace('\\', '/', $file->getPathname());
        $rel  = ltrim(str_replace(str_replace('\\', '/', rtrim(ABSPATH, '/\\')), '', $real), '/');
        $title = pathinfo($file->getFilename(), PATHINFO_FILENAME);
        $title = ucwords(str_replace(['-', '_'], ' ', $title));
        $caption = basename(dirname($real));
        $entries[] = [
            'url'      => sitemap_url_path($rel),
            'label'    => $title,
            'caption'  => $caption,
            'category' => 'image',
            'file'     => $rel,
        ];
    }
    return $entries;
}

/** All images: assets/img (product/gallery/hero/category/industry/documentation images) + brochers/ (brochure images). */
function sitemap_discover_images(): array {
    $entries = sitemap_scan_images(ABSPATH . 'assets/img');
    $entries = array_merge($entries, sitemap_scan_images(ABSPATH . 'brochers'));
    if (is_dir(ABSPATH . 'uploads')) {
        $entries = array_merge($entries, sitemap_scan_images(ABSPATH . 'uploads'));
    }
    return $entries;
}

/** Downloadable documents under brochers/ (PDF/DOC/DOCX/XLS/XLSX/PPT/PPTX/ZIP/RAR) + registered software downloads. */
function sitemap_discover_downloads(): array {
    $entries = [];
    $exts = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'zip', 'rar'];
    if (is_dir(ABSPATH . 'brochers')) {
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(ABSPATH . 'brochers', FilesystemIterator::SKIP_DOTS));
        foreach ($it as $file) {
            if (!$file->isFile()) continue;
            $ext = strtolower($file->getExtension());
            if (!in_array($ext, $exts, true)) continue;
            $real = str_replace('\\', '/', $file->getPathname());
            $rel  = ltrim(str_replace(str_replace('\\', '/', rtrim(ABSPATH, '/\\')), '', $real), '/');
            $entries[] = [
                'url'      => sitemap_url_path($rel),
                'label'    => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                'category' => 'download',
                'file'     => $rel,
                'filetype' => $ext,
                'size'     => $file->getSize(),
            ];
        }
    }

    $data_file = ABSPATH . 'data/downloads.json';
    if (file_exists($data_file)) {
        $downloads = json_decode(file_get_contents($data_file), true);
        if (is_array($downloads)) {
            foreach ($downloads as $dl) {
                if (empty($dl['id'])) continue;
                $entries[] = [
                    'url'      => sitemap_url_path('includes/software-detail.php?id=' . rawurlencode($dl['id'])),
                    'label'    => $dl['name'] ?? $dl['id'],
                    'category' => 'download',
                    'file'     => 'data/downloads.json#' . $dl['id'],
                    'filetype' => 'software',
                ];
            }
        }
    }
    return $entries;
}

/** Priority/changefreq heuristic, applied uniformly at write time. */
function sitemap_priority_for(string $category, string $url): array {
    if ($url === '/') return ['1.0', 'weekly'];
    switch ($category) {
        case 'static':                  return ['0.9', 'monthly'];
        case 'product':                 return ['0.8', 'monthly'];
        case 'product_category':        return ['0.8', 'monthly'];
        case 'industry':
        case 'documentation':           return ['0.7', 'monthly'];
        case 'location':                return ['0.6', 'monthly'];
        case 'location_product':        return ['0.5', 'monthly'];
        case 'location_product_gallery': return ['0.5', 'monthly'];
        case 'download':                return ['0.5', 'yearly'];
        case 'image':                   return ['0.4', 'yearly'];
        default:                        return ['0.5', 'monthly'];
    }
}

/** Location + Product Gallery pages — derived from location products */
function sitemap_discover_location_product_galleries(array $location_products): array {
    $entries = [];
    foreach ($location_products as $lp) {
        // Skip subcategories (which contain product-category in the URL)
        if (strpos($lp['url'], '/product-category/') !== false) {
            continue;
        }
        $entries[] = [
            'url'      => rtrim($lp['url'], '/') . '/gallery/',
            'label'    => str_replace(' — ', ' Gallery — ', $lp['label']),
            'category' => 'location_product_gallery',
            'file'     => $lp['file'],
        ];
    }
    return $entries;
}

/** Builds the complete, de-duplicated manifest of every URL category. */
function sitemap_build_manifest(): array {
    [$products, $categories, $standalones] = sitemap_discover_products();
    $locations         = sitemap_discover_locations();
    $location_products = sitemap_discover_location_products($locations, $products, $categories, $standalones);
    $location_galleries = sitemap_discover_location_product_galleries($location_products);
    $industries        = sitemap_discover_industries();
    $documentation      = sitemap_discover_documentation();
    $static_pages       = sitemap_discover_static_pages();
    $images             = sitemap_discover_images();
    $downloads          = sitemap_discover_downloads();

    $all = array_merge(
        $static_pages,
        $products,
        $categories,
        $standalones,
        $locations,
        $location_products,
        $location_galleries,
        $industries,
        $documentation,
        $images,
        $downloads
    );

    // De-dupe by URL (last-write-wins is fine — entries describing the same URL agree on category).
    $seen = [];
    $manifest = [];
    $lastmod = date('Y-m-d');
    foreach ($all as $entry) {
        $key = $entry['url'];
        if (isset($seen[$key])) continue;
        $seen[$key] = true;
        [$priority, $changefreq] = sitemap_priority_for($entry['category'], $entry['url']);
        $entry['priority']   = $priority;
        $entry['changefreq'] = $changefreq;
        $entry['lastmod']    = $lastmod;
        $manifest[] = $entry;
    }

    return $manifest;
}

/** Splits the manifest into the child-sitemap groupings used for the XML files. */
function sitemap_group_manifest(array $manifest): array {
    $groups = [
        'products'                   => [], // product + product_category + static
        'locations'                  => [],
        'location-products'          => [],
        'location-product-galleries' => [],
        'industries'                 => [],
        'documentation'              => [],
        'images'                     => [],
        'downloads'                  => [],
    ];
    foreach ($manifest as $entry) {
        switch ($entry['category']) {
            case 'static':
            case 'product':
            case 'product_category':
                $groups['products'][] = $entry; break;
            case 'location':
                $groups['locations'][] = $entry; break;
            case 'location_product':
                $groups['location-products'][] = $entry; break;
            case 'location_product_gallery':
                $groups['location-product-galleries'][] = $entry; break;
            case 'industry':
                $groups['industries'][] = $entry; break;
            case 'documentation':
                $groups['documentation'][] = $entry; break;
            case 'image':
                $groups['images'][] = $entry; break;
            case 'download':
                $groups['downloads'][] = $entry; break;
        }
    }
    return $groups;
}

function sitemap_xml_escape(string $s): string {
    return htmlspecialchars($s, ENT_XML1 | ENT_QUOTES);
}

function sitemap_write_urlset(string $path, array $entries, string $domain): void {
    $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<?xml-stylesheet type="text/xsl" href="' . $domain . '/sitemap/sitemap.xsl"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($entries as $e) {
        $parsed = parse_url($e['url']);
        $url_path = $parsed['path'] ?? '';
        $query = isset($parsed['query']) ? '?' . $parsed['query'] : '';
        
        $loc = $domain . '/' . implode('/', array_map('rawurlencode', explode('/', ltrim($url_path, '/')))) . $query;
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . sitemap_xml_escape($loc) . "</loc>\n";
        $xml .= "    <lastmod>" . $e['lastmod'] . "</lastmod>\n";
        $xml .= "    <changefreq>" . $e['changefreq'] . "</changefreq>\n";
        $xml .= "    <priority>" . $e['priority'] . "</priority>\n";
        $xml .= "  </url>\n";
    }
    $xml .= '</urlset>';
    file_put_contents($path, $xml);
}

function sitemap_write_gallery_image_urlset(string $path, array $galleries, string $domain): void {
    $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<?xml-stylesheet type="text/xsl" href="' . $domain . '/sitemap/sitemap.xsl"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
    $xml .= '        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";

    require_once ABSPATH . 'includes/gallery-helper.php';
    $product_images_cache = [];

    foreach ($galleries as $g) {
        $parts = explode('/', trim($g['url'], '/'));
        $product_slug = $parts[5] ?? '';
        if (empty($product_slug)) continue;

        if (!isset($product_images_cache[$product_slug])) {
            $product_images_cache[$product_slug] = discover_gallery_images($product_slug);
        }
        $images = $product_images_cache[$product_slug];

        if (empty($images)) continue;

        $loc = $domain . implode('/', array_map('rawurlencode', explode('/', $g['url'])));
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . sitemap_xml_escape($loc) . "</loc>\n";
        foreach ($images as $img) {
            $img_loc = $domain . implode('/', array_map('rawurlencode', explode('/', $img['url'])));
            $xml .= "    <image:image>\n";
            $xml .= "      <image:loc>" . sitemap_xml_escape($img_loc) . "</image:loc>\n";
            $xml .= "      <image:title>" . sitemap_xml_escape($img['title']) . "</image:title>\n";
            $xml .= "      <image:caption>" . sitemap_xml_escape($img['caption']) . "</image:caption>\n";
            $xml .= "    </image:image>\n";
        }
        $xml .= "  </url>\n";
    }
    $xml .= '</urlset>';
    file_put_contents($path, $xml);
}

/** Writes sitemap.xml (index), all child sitemaps, the JSON manifest, and sitemap.xsl. Returns stats. */
function sitemap_write_all(): array {
    $domain = rtrim(BASE_URL, '/');
    $root   = rtrim(ABSPATH, '/\\');

    $manifest = sitemap_build_manifest();
    $groups   = sitemap_group_manifest($manifest);

    $files = [
        'sitemap-products.xml'           => 'products',
        'sitemap-locations.xml'          => 'locations',
        'sitemap-location-products.xml'  => 'location-products',
        'sitemap-location-product-galleries.xml' => 'location-product-galleries',
        'sitemap-industries.xml'         => 'industries',
        'sitemap-documentation.xml'      => 'documentation',
        'sitemap-downloads.xml'          => 'downloads',
    ];
    foreach ($files as $filename => $group_key) {
        sitemap_write_urlset($root . '/sitemap/' . $filename, $groups[$group_key], $domain);
    }
    sitemap_write_gallery_image_urlset($root . '/sitemap/sitemap-images.xml', $groups['location-product-galleries'], $domain);

    // Sitemap index
    $index  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $index .= '<?xml-stylesheet type="text/xsl" href="' . $domain . '/sitemap/sitemap.xsl"?>' . "\n";
    $index .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    $lastmod = date('Y-m-d');
    foreach (array_keys($files) as $filename) {
        $index .= "  <sitemap>\n    <loc>{$domain}/sitemap/{$filename}</loc>\n    <lastmod>{$lastmod}</lastmod>\n  </sitemap>\n";
    }
    $index .= "  <sitemap>\n    <loc>{$domain}/sitemap/sitemap-images.xml</loc>\n    <lastmod>{$lastmod}</lastmod>\n  </sitemap>\n";
    $index .= '</sitemapindex>';
    file_put_contents($root . '/sitemap/sitemap.xml', $index);

    // Flat JSON manifest for the explorer (server-side searchable/paginatable without re-parsing XML).
    file_put_contents($root . '/data/sitemap_manifest.json', json_encode([
        'generated_at' => date('c'),
        'count'        => count($manifest),
        'entries'      => $manifest,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));

    // Minimal, valid XSL so the stylesheet reference isn't a dead link.
    if (!file_exists($root . '/sitemap/sitemap.xsl')) {
        file_put_contents($root . '/sitemap/sitemap.xsl', sitemap_default_xsl());
    }

    // Staleness marker consumed by includes/sitemap-autobuild.php
    file_put_contents($root . '/data/.sitemap_meta.json', json_encode([
        'last_built' => time(),
        'last_check' => time(),
    ]));

    $counts = [];
    foreach ($groups as $k => $g) $counts[$k] = count($g);
    $counts['total'] = count($manifest);
    return $counts;
}

function sitemap_default_xsl(): string {
    return <<<'XSL'
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
<html>
<head>
<title>XML Sitemap</title>
<style>
body{font-family:-apple-system,Segoe UI,Arial,sans-serif;margin:2rem;color:#1d3557;}
h1{font-size:1.25rem;}
table{border-collapse:collapse;width:100%;font-size:0.9rem;}
th,td{border:1px solid #e2e8f0;padding:6px 10px;text-align:left;}
th{background:#1d3557;color:#fff;}
tr:nth-child(even){background:#f8f9fa;}
a{color:#1d3557;}
</style>
</head>
<body>
<h1>XML Sitemap</h1>
<table>
<tr><th>URL</th><th>Last Modified</th><th>Change Frequency</th><th>Priority</th></tr>
<xsl:for-each select="sitemap:urlset/sitemap:url">
<tr>
<td><a href="{sitemap:loc}"><xsl:value-of select="sitemap:loc"/></a></td>
<td><xsl:value-of select="sitemap:lastmod"/></td>
<td><xsl:value-of select="sitemap:changefreq"/></td>
<td><xsl:value-of select="sitemap:priority"/></td>
</tr>
</xsl:for-each>
<xsl:for-each select="sitemap:sitemapindex/sitemap:sitemap">
<tr>
<td><a href="{sitemap:loc}"><xsl:value-of select="sitemap:loc"/></a></td>
<td><xsl:value-of select="sitemap:lastmod"/></td>
<td colspan="2">Sitemap Index Entry</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
XSL;
}

} // function_exists guard
