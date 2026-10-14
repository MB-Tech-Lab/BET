<?php
/**
 * Main Centralized Router / Front Controller
 * Burhani Engineering Technology
 */

error_reporting(E_ALL);
ini_set('display_errors', 0);

// Load Configuration and site constants
require_once __DIR__ . '/config.php';

// resolve_path_case_insensitive() now lives in includes/config.php (loaded above) so it can be
// shared with includes/sitemap-builder.php without risking a function-redeclaration collision.

// Throttled automatic sitemap regeneration (see includes/sitemap-autobuild.php for the staleness
// heuristic). Cheap on almost every request: one filemtime check on a small marker file, unless
// 5+ minutes have passed, in which case it does a slightly deeper (still cheap) staleness scan.
require_once __DIR__ . '/sitemap-autobuild.php';
sitemap_maybe_regenerate();

// Parse Request URI
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$script_name = $_SERVER['SCRIPT_NAME'] ?? '';

// Determine project subfolder path (e.g. /BET) - router.php is now in includes/ so we go up one more level
$base_path = rtrim(dirname(dirname($script_name)), '/\\');

// Extract path relative to project root
$relative_uri = substr($request_uri, strlen($base_path));
$path_part = parse_url($relative_uri, PHP_URL_PATH) ?? '';
$path = urldecode(trim($path_part, '/'));

// Explode path into segments
$segments = $path !== '' ? explode('/', $path) : [];


// Handle dynamic robots.txt
if ($path === 'robots.txt') {
    header('Content-Type: text/plain; charset=utf-8');
    echo "User-agent: *\n";
    echo "Allow: /\n\n";
    echo "# Disallow admin areas\n";
    echo "Disallow: /admin/\n";
    echo "Disallow: /data/\n";
    echo "Disallow: /logs/\n";
    echo "Disallow: /uploads/\n\n";
    echo "# Sitemaps\n";
    echo "Sitemap: " . url('sitemap.xml') . "\n";
    exit();
}



// Full-Page Caching for Products and Locations
$is_cacheable = false;
if (strpos($path, 'locations/') === 0 || strpos($path, 'products/') === 0) {
    $is_cacheable = true;
}
if (isset($_GET['continent']) && isset($_GET['country']) && isset($_GET['city']) && isset($_GET['product'])) {
    $is_cacheable = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $is_cacheable) {
    // Cache key MUST include host/protocol/port, not just the path. The same path is reachable
    // via multiple hosts in this environment (localhost, 127.0.0.1, and eventually a production
    // domain), and BASE_URL — baked into every url()/asset() call on the page — is derived from
    // $_SERVER['HTTP_HOST'] per request. A path-only cache key means whichever host renders a
    // given path FIRST poisons every other host's visitors with its domain baked into their
    // canonical tags, asset URLs, and internal links for up to the full 24h TTL. Segregating by
    // host (and protocol/port, since a scheme or port change also changes BASE_URL) into its own
    // subdirectory keeps each host's cache fully independent while leaving the per-path TTL logic
    // below untouched.
    $cache_protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $cache_host_raw = $_SERVER['HTTP_HOST'] ?? 'default-host';
    $cache_host_safe = preg_replace('/[^a-zA-Z0-9\-_.]/', '_', $cache_protocol . '__' . $cache_host_raw);

    $cache_dir = dirname(__DIR__) . '/cache/' . $cache_host_safe;
    if (!is_dir($cache_dir)) {
        mkdir($cache_dir, 0755, true);
    }

    $safe_route = preg_replace('/[^a-zA-Z0-9\-_]/', '_', trim($path, '/'));
    if ($safe_route === '') $safe_route = 'index';

    $cache_file = $cache_dir . '/' . $safe_route . '.html';

    if (file_exists($cache_file) && (time() - filemtime($cache_file)) < 86400) {
        require_once __DIR__ . '/visitor-tracker.php';
        echo file_get_contents($cache_file);
        echo "\n<!-- Served from BET Cache -->";
        exit;
    }

    ob_start(function($buffer) use ($cache_file) {
        $http_code = http_response_code();
        if ($http_code === 200 || $http_code === false) {
            file_put_contents($cache_file, $buffer);
        }
        return $buffer;
    });
}

// 0. Dynamic Location Product Routes (via .htaccess rewrite) are NOT handled here.
// .htaccess rewrites these URLs into $_GET['continent'/'country'/'city'/'product'/'category'],
// but $path/$segments (computed above from REQUEST_URI) are unaffected by that rewrite, so the
// segment dispatch below ('locations' branch -> routes/locations.php::handle_location_products())
// resolves the exact same URL. That handler normalizes product slugs against the catalog and loads
// the city file for localized copy; an earlier version of this section duplicated that lookup with
// an unnormalized exact-key match and without loading the city file, silently serving generic,
// lowercase-cased ("in mumbai, india") content for the site's own canonical location+product URLs.
// Removed in favor of the single, correct implementation in routes/locations.php.

// 1. Handle Home Route (empty or index.php)
if ($path === '' || $path === 'index.php') {
    require_once dirname(__DIR__) . '/index.php';
    exit();
}

// 2. Handle Redirects (Phase 2: redirects.php)
require_once dirname(__DIR__) . '/routes/redirects.php';
if (handle_redirects($path)) {
    exit();
}


if (!empty($segments)) {
    $first_segment = strtolower($segments[0]);
    
    if ($first_segment === 'products') {
        if (stripos($path, 'product-category') !== false) {
            // 3. Handle Product Category Routes (Phase 5: categories.php)
            require_once dirname(__DIR__) . '/routes/categories.php';
            if (handle_categories($segments, $path)) exit();
        }
        
        // 4. Handle Product Routes (Phase 4: products.php)
        require_once dirname(__DIR__) . '/routes/products.php';
        if (handle_products($segments, $path)) exit();
    } elseif ($first_segment === 'locations') {
        require_once dirname(__DIR__) . '/routes/locations.php';
        
        // 5. Handle Location Product Gallery Routes
        if (handle_location_product_gallery($segments, $path)) exit();
        
        // 5.1. Handle Location Product Routes
        if (handle_location_products($segments, $path)) exit();
        
        // 6. Handle Location Routes (Phase 3: locations.php)
        if (handle_locations($segments, $path)) exit();
    }
}

// 6. Direct File Check Fallback
// Check if the file exists directly under root (e.g., about.php, contact.php)
$clean_path = preg_replace('/\.php$/i', '', $path);
$resolved_direct_file = resolve_path_case_insensitive(dirname(__DIR__), $clean_path . '.php');
if ($resolved_direct_file && file_exists($resolved_direct_file)) {
    require_once $resolved_direct_file;
    exit();
}

// 7. Page Not Found (404 Error page)
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | Burhani Engineering Technology</title>
    <link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>">
    <style>
        .error-container {
            text-align: center;
            padding: 100px 20px;
        }
        .error-container h1 {
            font-size: 5rem;
            color: #e63946;
            margin-bottom: 20px;
        }
        .error-container p {
            font-size: 1.5rem;
            color: #1d3557;
            margin-bottom: 30px;
        }
        .error-container .btn {
            background-color: #1d3557;
            color: #fff;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .error-container .btn:hover {
            background-color: #e63946;
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/header.php'; ?>
    <main class="main">
        <div class="container">
            <div class="error-container">
                <h1>404</h1>
                <p>Oops! The page you are looking for does not exist.</p>
                <a href="<?php echo url(); ?>" class="btn">Go Back Home</a>
            </div>
        </div>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>
<?php
file_put_contents(__DIR__ . "/route_debug.txt", "Path: $path, Clean Path: $clean_path, Resolved: $resolved_direct_file, Base Path: $base_path, Request URI: $request_uri\n", FILE_APPEND);
if ($path === "products.php") { file_put_contents(__DIR__ . "/debug2.txt", "uri: $request_uri, rel: $relative_uri, path: $path"); }
?>
