<?php
// ============================================================
// Burhani Engineering Technology — config.php
// Portable: works on Windows XAMPP, Linux localhost, InfinityFree
// ============================================================

require_once __DIR__ . '/security.php';

// ── 1. Physical root of the project (always reliable) ────────────────────────
// __DIR__ = /…/BET/includes  →  dirname(__DIR__) = /…/BET
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
}

// ── 2. Dynamic BASE_URL ───────────────────────────────────────────────────────
if (!defined('BASE_URL')) {

    // Protocol: check HTTPS flag or X-Forwarded-Proto (works on Apache, InfinityFree, cPanel, and Render proxies)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
        ? 'https://'
        : 'http://';

    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    
    // ── Strategy 0: Explicit Environment Override ──────────────────────────────
    if (($env_url = getenv('PRODUCTION_URL')) !== false) {
        define('BASE_URL', rtrim($env_url, '/') . '/');
    } else {

    // ── Strategy A: filesystem diff (works on Linux / most cPanel) ────────────
    $docRoot  = isset($_SERVER['DOCUMENT_ROOT'])
                ? rtrim(str_replace('\\', '/', (string)$_SERVER['DOCUMENT_ROOT']), '/')
                : '';
    $projRoot = rtrim(str_replace('\\', '/', (string)ABSPATH), '/\\');

    // Try resolving real paths (can fail on Windows if path has symlinks/mixed slashes)
    $realDoc  = realpath($docRoot)  !== false ? str_replace('\\', '/', realpath($docRoot))  : $docRoot;
    $realProj = realpath($projRoot) !== false ? str_replace('\\', '/', realpath($projRoot)) : $projRoot;

    if ($docRoot !== '' && $realDoc !== '' && strpos($realProj, $realDoc) === 0) {
        // e.g. realDoc=/var/www/html  realProj=/var/www/html/BET  →  webPath=/BET
        $webPath = substr($realProj, strlen($realDoc));
    } else {
        // ── Strategy B: derive from SCRIPT_NAME (works on Windows XAMPP) ─────
        // SCRIPT_NAME is always like /BET/index.php or /BET/locations/…/city.php
        // We strip the part of the path that's BELOW the project root directory name.
        $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');

        // Find the project folder name from ABSPATH
        $projFolder = basename(rtrim(str_replace('\\', '/', ABSPATH), '/'));  // "BET"

        // Walk up the SCRIPT_NAME until we find the project folder segment
        $parts   = explode('/', ltrim($scriptName, '/'));
        $webPath = '';
        foreach ($parts as $i => $part) {
            if ($part === $projFolder) {
                $webPath = '/' . implode('/', array_slice($parts, 0, $i + 1));
                break;
            }
        }

        // ── Strategy C: hard fallback for localhost ───────────────────────────
        if ($webPath === '') {
            $webPath = strpos($host, 'localhost') !== false ? '/' . $projFolder : '';
        }
    }

    // Sanitise and build the final BASE_URL (always ends with exactly one slash)
    if (!defined('BASE_URL')) {
        define('BASE_URL', $protocol . $host . rtrim($webPath, '/') . '/');
    }
    } // End Strategy 0
}

// ── 3. Site-wide constants ────────────────────────────────────────────────────
define('SITE_NAME',     'Burhani Engineering Technology');
define('PHONE_NUMBER',  '+91 96772 96252');
define('EMAIL_ADDRESS', 'Sales@bhfvacuum.com');

// ── 4. Helper functions ───────────────────────────────────────────────────────

if (!function_exists('normalize_route_path')) {
    function normalize_route_path(string $path): string {
        $path = strtolower($path);
        $path = str_replace(['(', ')', "'", '’', '‘', '"'], '', $path);
        $path = str_replace(['é', 'è', 'ê', 'ë'], 'e', $path);
        $path = str_replace(['á', 'à', 'â', 'ä'], 'a', $path);
        $path = str_replace(['í', 'ì', 'î', 'ï'], 'i', $path);
        $path = str_replace(['ó', 'ò', 'ô', 'ö'], 'o', $path);
        $path = str_replace(['ú', 'ù', 'û', 'ü'], 'u', $path);
        $path = str_replace(['ç'], 'c', $path);
        $path = str_replace(['ñ'], 'n', $path);
        $path = str_replace([' ', '_'], '-', $path);
        $path = preg_replace('/-+/', '-', $path);
        return $path;
    }
}

/**
 * Resolves a relative URL path to the actual filesystem path case-insensitively.
 * This prevents 404 errors on case-sensitive Linux servers (like InfinityFree).
 * Optimized with O(1) static route map lookup. Shared by router.php's request dispatch,
 * routes/*.php, and includes/sitemap-builder.php (which needs the same normalization to
 * discover the real on-disk file behind a catalog's clean URL slug).
 */
if (!function_exists('resolve_path_case_insensitive')) {
    function resolve_path_case_insensitive(string $root, string $relative_path): ?string {
        static $route_map = null;
        if ($route_map === null) {
            $map_file = __DIR__ . '/route_map.php';
            if (file_exists($map_file)) {
                $route_map = require $map_file;
            } else {
                $route_map = []; // Fallback
            }
        }

        $relative_clean = trim(str_replace('\\', '/', $relative_path), '/');
        $normalized = normalize_route_path($relative_clean);

        if (isset($route_map[$normalized])) {
            return rtrim($root, '/\\') . DIRECTORY_SEPARATOR . $route_map[$normalized];
        }

        return null;
    }
}

/**
 * Full URL to a file inside /assets/.
 *   echo asset('css/main.css');
 *   → http://localhost/BET/assets/css/main.css        (localhost)
 *   → https://clientdomain.com/assets/css/main.css (live)
 */
if (!function_exists('asset')) {
    function asset(string $path): string {
        $path = str_replace('\\', '/', $path);
        $parts = explode('/', ltrim($path, '/'));
        $encodedParts = array_map('rawurlencode', $parts);
        $encodedPath = implode('/', $encodedParts);
        return rtrim(BASE_URL, '/') . '/assets/' . $encodedPath;
    }
}

/**
 * Full internal URL to any page.
 *   echo url('products/vacuum-glove-box/');
 *   → http://localhost/BET/products/vacuum-glove-box/
 */
if (!function_exists('url')) {
    function url(string $path = ''): string {
        global $is_location_page, $continent, $country, $city;
        $clean_path = ltrim($path, '/');
        
        // Dynamically prepend location context to product URLs
        if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
            // Only prefix if it's a product link and isn't already prefixed
            if (str_starts_with($clean_path, 'products/')) {
                $cont = normalize_route_path($continent);
                $coun = normalize_route_path($country);
                $cit = normalize_route_path($city);
                return rtrim(BASE_URL, '/') . "/locations/{$cont}/{$coun}/{$cit}/" . $clean_path;
            }
        }
        
        return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
    }
}

/**
 * Dynamic Product Category URL builder
 * Preserves location context if on a location page.
 */
if (!function_exists('product_category_url')) {
    function product_category_url(string $product_slug, string $category_slug): string {
        global $is_location_page, $continent, $country, $city;
        
        $product_slug = strtolower(str_replace('_', '-', $product_slug));
        $category_slug = strtolower(str_replace(['.php', '_', ' '], ['', '-', '-'], $category_slug));
        
        if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
            $cont = normalize_route_path($continent);
            $coun = normalize_route_path($country);
            $cit = normalize_route_path($city);
            return url("locations/{$cont}/{$coun}/{$cit}/products/{$product_slug}/product-category/{$category_slug}/");
        }
        
        return url("products/{$product_slug}/product-category/{$category_slug}/");
    }
}

/**
 * Dynamic Product URL builder
 * Preserves location context if on a location page.
 */
if (!function_exists('product_url')) {
    function product_url(string $product_slug): string {
        global $is_location_page, $continent, $country, $city;
        
        // Remove trailing .php or extension and convert to slug format if needed
        $product_slug = strtolower(str_replace(['.php', '_'], ['', '-'], basename($product_slug)));
        
        if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
            $cont = normalize_route_path($continent);
            $coun = normalize_route_path($country);
            $cit = normalize_route_path($city);
            return url("locations/{$cont}/{$coun}/{$cit}/products/{$product_slug}/");
        }
        
        return url("products/{$product_slug}/");
    }
}


/**
 * Dynamic Product File URL builder
 * Preserves location context if on a location page and maintains the .php extension.
 */
if (!function_exists('product_file_url')) {
    function product_file_url(string $product_category, string $subcategory, string $filename): string {
        global $is_location_page, $continent, $country, $city;
        
        $product_category = strtolower(str_replace('_', '-', $product_category));
        $subcategory = strtolower(str_replace('_', '-', $subcategory));
        $filename = strtolower(str_replace('_', '-', $filename));
        // Ensure .php extension
        if (substr($filename, -4) !== '.php') {
            $filename .= '.php';
        }
        
        if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
            $cont = normalize_route_path($continent);
            $coun = normalize_route_path($country);
            $cit = normalize_route_path($city);
            return url("locations/{$cont}/{$coun}/{$cit}/products/{$product_category}/product-category/{$subcategory}/{$filename}");
        }
        
        return url("products/{$product_category}/product-category/{$subcategory}/{$filename}");
    }
}
