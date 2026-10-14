<?php
/**
 * Locations Handler
 * Burhani Engineering Technology Routing System
 */

function handle_locations(array $segments, string $path): bool {
    // If the path doesn't start with locations, skip
    if (empty($segments) || strcasecmp($segments[0], 'locations') !== 0) {
        return false;
    }

    // If there are more than 4 segments, it is a location-product page, so skip
    if (count($segments) > 4) {
        return false;
    }

    // Standardize path: remove trailing slash, and remove .php extension if present
    $clean_path = preg_replace('/\.php$/i', '', $path);
    $clean_path = trim($clean_path, '/');

    // 1. Resolve case-insensitively on filesystem as a direct .php file
    $file_path = resolve_path_case_insensitive(ABSPATH, $clean_path . '.php');
    if ($file_path && file_exists($file_path)) {
        require_once $file_path;
        return true;
    }

    // 2. Resolve case-insensitively on filesystem as a directory
    $dir_path = resolve_path_case_insensitive(ABSPATH, $clean_path);
    if ($dir_path && is_dir($dir_path)) {
        $dir_basename = basename($dir_path);
        // Try file with the same name as the directory
        $possible_file = $dir_path . DIRECTORY_SEPARATOR . $dir_basename . '.php';
        if (file_exists($possible_file)) {
            require_once $possible_file;
            return true;
        }
    }

    return false;
}

function handle_location_products(array $segments, string $path): bool {
    // If the path doesn't start with locations, skip
    if (empty($segments) || strcasecmp($segments[0], 'locations') !== 0) {
        return false;
    }

    // ── Parse segments ───────────────────────────────────────────────────────
    $is_category   = false;
    $category_slug = null;
    $product_slug  = null;

    // Require at least: locations / continent / country / city = 4 base parts
    if (count($segments) < 5) {
        return false;
    }

    $raw_continent = $segments[1];
    $raw_country   = $segments[2];
    $city_name     = preg_replace('/\.php$/i', '', $segments[3]);

    $is_sub_product = false;

    // Pattern A0: /locations/c/c/city/products/product/product-category/category/sub-product (9 segments)
    if (count($segments) >= 9
        && strcasecmp($segments[4], 'products') === 0
        && strcasecmp($segments[6], 'product-category') === 0
    ) {
        $parent_product_slug = preg_replace('/\.php$/i', '', $segments[5]);
        $category_slug = preg_replace('/\.php$/i', '', $segments[7]);
        
        // Support nested product paths that might span multiple segments
        $raw_product_path = implode('/', array_slice($segments, 8));
        $product_slug = basename($raw_product_path);
        $product_slug = preg_replace('/\.php$/i', '', $product_slug);
        
        $is_category   = false;
        $is_sub_product = true;

    // Pattern A: /locations/c/c/city/products/product/product-category/category (8 segments)
    } elseif (count($segments) == 8
        && strcasecmp($segments[4], 'products') === 0
        && strcasecmp($segments[6], 'product-category') === 0
    ) {
        $product_slug  = preg_replace('/\.php$/i', '', $segments[5]);
        $category_slug = preg_replace('/\.php$/i', '', $segments[7]);
        $is_category   = true;

    // Pattern B: /locations/c/c/city/product/product-category/category (7 segments, no 'products' word)
    } elseif (count($segments) >= 7
        && strcasecmp($segments[5], 'product-category') === 0
    ) {
        $product_slug  = preg_replace('/\.php$/i', '', $segments[4]);
        $category_slug = preg_replace('/\.php$/i', '', $segments[6]);
        $is_category   = true;

    // Pattern C: /locations/c/c/city/products/product (6 segments with 'products' word)
    } elseif (count($segments) === 6 && strcasecmp($segments[4], 'products') === 0) {
        $product_slug = preg_replace('/\.php$/i', '', $segments[5]);

    // Pattern D: /locations/c/c/city/product (5 segments, no 'products' word)
    } elseif (count($segments) === 5) {
        $product_slug = preg_replace('/\.php$/i', '', $segments[4]);

    } else {
        return false;
    }

    // ── Resolve catalog key ──────────────────────────────────────────────────
    require_once ABSPATH . 'includes/product-catalog.php';
    $catalog = get_product_catalog();

    $catalog_key     = null;
    $standalone_slug = null;
    $nested_parent_match = false;
    $norm_product_slug = strtolower(str_replace(['_', ' '], '-', $product_slug));
    foreach ($catalog as $key => $prod) {
        $norm_key  = strtolower(str_replace(['_', ' '], '-', $key));
        $norm_slug = strtolower(str_replace(['_', ' '], '-', $prod['url_slug'] ?? ''));
        if ($norm_key === $norm_product_slug || $norm_slug === $norm_product_slug) {
            $catalog_key = $key;
            break;
        }
    }

    // Nested product-category pages such as Acrylic products use the parent product slug
    // in the location URL and keep the child slug in the final segment. Metal Body pages
    // remain top-level catalog entries and are handled by the lookup above.
    if (!$catalog_key && $is_sub_product && !empty($parent_product_slug)) {
        $norm_parent_slug = strtolower(str_replace(['_', ' '], '-', $parent_product_slug));
        foreach ($catalog as $key => $prod) {
            $norm_key  = strtolower(str_replace(['_', ' '], '-', $key));
            $norm_slug = strtolower(str_replace(['_', ' '], '-', $prod['url_slug'] ?? ''));
            if ($norm_key === $norm_parent_slug || $norm_slug === $norm_parent_slug) {
                $catalog_key = $key;
                $nested_parent_match = true;
                break;
            }
        }
    }

    // Not a top-level product — check each product's standalone_pages (use-case pages that
    // sit as siblings of the main product file, e.g. products/vacuum_glove_box/pharmaceutical-glove-box.php,
    // and declare their own locations/.../products/{slug}/ canonical URL).
    if (!$catalog_key && !$is_category) {
        foreach ($catalog as $key => $prod) {
            foreach ($prod['standalone_pages'] ?? [] as $sa_slug => $sa_label) {
                if (strtolower(str_replace(['_', ' '], '-', $sa_slug)) === $norm_product_slug) {
                    $catalog_key     = $key;
                    $standalone_slug = $sa_slug;
                    break 2;
                }
            }
        }
    }

    if (!$catalog_key) {
        return false;
    }

    // ── Resolve city file ────────────────────────────────────────────────────
    $location_relative = "locations/{$raw_continent}/{$raw_country}/{$city_name}.php";
    $resolved_location = resolve_path_case_insensitive(ABSPATH, $location_relative);

    if (!$resolved_location || !file_exists($resolved_location)) {
        return false;
    }

    // ── Set global location context BEFORE loading any template files ────────
    // product_url() and product_category_url() in config.php read these globals.
    // They MUST be set before any include that calls those helpers.
    // Preserve local category_slug before global keyword overwrites it
    $temp_category_slug = $category_slug ?? null;

    global $is_location_page, $continent, $country, $city, $product_key, $category_slug;

    $is_location_page = true;
    $continent        = str_replace('-', ' ', ucwords(str_replace('-', ' ', $raw_continent)));
    $country          = str_replace('-', ' ', ucwords(str_replace('-', ' ', $raw_country)));
    $product_key      = $catalog[$catalog_key]['key'] ?? $catalog_key;
    
    if ($is_category) {
        $category_slug = $temp_category_slug; // Restore the value to the global scope
    }

    // Intercept location-template.php from running its full HTML output
    if (!defined('METADATA_ONLY')) {
        define('METADATA_ONLY', true);
    }

    // Load city data — this redefines $city, $country, $continent with proper casing/spelling
    include $resolved_location;

    // Re-assert $is_location_page after city include (city file won't unset it, but be safe)
    $is_location_page = true;

    // ── Dispatch to correct template ─────────────────────────────────────────
    if ($is_category && $category_slug) {
        $product_dir   = dirname($catalog[$catalog_key]['internal_url']);
        $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $category_slug . '.php');
        if ($category_file && file_exists($category_file)) {
            include $category_file;
            return true;
        }
        
        // Fallback: check if it's in a folder (e.g. Acrylic Vacuum - Glove Box/Acrylic_Vacuum_Glove_Box.php)
        $parent_product = $catalog[$catalog_key] ?? [];
        if (!empty($parent_product['subcategories'])) {
            $keys = array_keys($parent_product['subcategories']);
            $norm_keys = array_map(function($slug) {
                return strtolower(str_replace(['_', ' '], '-', $slug));
            }, $keys);
            
            $idx = array_search($category_slug, $norm_keys);
            if ($idx !== false) {
                $original_key = $keys[$idx];
                $original_label = $parent_product['subcategories'][$original_key];
                
                $folder_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $original_label . '/' . $original_key . '.php');
                if ($folder_file && file_exists($folder_file)) {
                    include $folder_file;
                    return true;
                }
                
                $direct_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $original_key . '.php');
                if ($direct_file && file_exists($direct_file)) {
                    include $direct_file;
                    return true;
                }
            }
        }
        
        return false;
    }

    if ($standalone_slug) {
        $product_dir     = dirname($catalog[$catalog_key]['internal_url']);
        $standalone_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/' . $standalone_slug . '.php');
        if ($standalone_file && file_exists($standalone_file)) {
            include $standalone_file;
            return true;
        }
        return false;
    }

    if ($is_sub_product) {
        $parent_product = $catalog[$catalog_key] ?? [];
        $mapped_sub_product = $parent_product['subcategory_routes'][$norm_product_slug] ?? null;

        if (!$mapped_sub_product && !empty($parent_product['subcategory_routes'])) {
            foreach ($parent_product['subcategory_routes'] as $key => $path) {
                $path_basename = preg_replace('/\.php$/i', '', basename($path));
                $norm_path_basename = strtolower(str_replace(['_', ' '], '-', $path_basename));
                if ($norm_path_basename === $norm_product_slug) {
                    $mapped_sub_product = $path;
                    break;
                }
            }
        }

        if ($mapped_sub_product) {
            $mapped_path = ABSPATH . $mapped_sub_product;
            if (file_exists($mapped_path)) {
                include $mapped_path;
                return true;
            }
        }

        // A nested route must resolve to its explicitly registered child file. Never serve
        // the parent product as a silent fallback for an unknown or stale child slug.
        if ($nested_parent_match) {
            return false;
        }

        $sub_product_file = resolve_path_case_insensitive(ABSPATH, $catalog[$catalog_key]['internal_url']);
        if ($sub_product_file && file_exists($sub_product_file)) {
            include $sub_product_file;
            return true;
        }
        return false;
    }

    // Standard location-product page
    include ABSPATH . 'templates/location-product.php';
    return true;
}

function handle_location_product_gallery(array $segments, string $path): bool {
    if (empty($segments) || strcasecmp($segments[0], 'locations') !== 0) {
        return false;
    }

    // Pattern: /locations/{continent}/{country}/{city}/products/{product}/gallery (7 segments)
    if (count($segments) !== 7) {
        return false;
    }

    if (strcasecmp($segments[4], 'products') !== 0 || strcasecmp($segments[6], 'gallery') !== 0) {
        return false;
    }

    $raw_continent = $segments[1];
    $raw_country   = $segments[2];
    $city_name     = preg_replace('/\.php$/i', '', $segments[3]);
    $product_slug  = preg_replace('/\.php$/i', '', $segments[5]);

    require_once ABSPATH . 'includes/product-catalog.php';
    $catalog = get_product_catalog();

    $catalog_key = null;
    $standalone_slug = null;
    $norm_product_slug = strtolower(str_replace(['_', ' '], '-', $product_slug));
    foreach ($catalog as $key => $prod) {
        $norm_key  = strtolower(str_replace(['_', ' '], '-', $key));
        $norm_slug = strtolower(str_replace(['_', ' '], '-', $prod['url_slug'] ?? ''));
        if ($norm_key === $norm_product_slug || $norm_slug === $norm_product_slug) {
            $catalog_key = $key;
            break;
        }
    }

    if (!$catalog_key) {
        foreach ($catalog as $key => $prod) {
            foreach ($prod['standalone_pages'] ?? [] as $sa_slug => $sa_label) {
                if (strtolower(str_replace(['_', ' '], '-', $sa_slug)) === $norm_product_slug) {
                    $catalog_key     = $key;
                    $standalone_slug = $sa_slug;
                    break 2;
                }
            }
        }
    }

    if (!$catalog_key) {
        return false;
    }

    $location_relative = "locations/{$raw_continent}/{$raw_country}/{$city_name}.php";
    $resolved_location = resolve_path_case_insensitive(ABSPATH, $location_relative);

    if (!$resolved_location || !file_exists($resolved_location)) {
        return false;
    }

    global $is_location_page, $continent, $country, $city, $product_key, $product_slug, $category_slug;

    $is_location_page = true;
    $continent        = str_replace('-', ' ', ucwords(str_replace('-', ' ', $raw_continent)));
    $country          = str_replace('-', ' ', ucwords(str_replace('-', ' ', $raw_country)));
    $product_key      = $catalog[$catalog_key]['key'] ?? $catalog_key;
    $product_slug     = $catalog_key;
    $category_slug    = $standalone_slug;

    if (!defined('METADATA_ONLY')) {
        define('METADATA_ONLY', true);
    }

    include $resolved_location;
    $is_location_page = true;

    include ABSPATH . 'templates/location-product-gallery.php';
    return true;
}

