<?php
/**
 * Products Handler
 * Burhani Engineering Technology Routing System
 */

function handle_products(array $segments, string $path): bool {
    // If the path doesn't start with products, skip
    if (empty($segments) || strcasecmp($segments[0], 'products') !== 0) {
        return false;
    }

    $clean_path = preg_replace('/\.php$/i', '', $path);
    $clean_path = trim($clean_path, '/');

    // 1. Direct match with case-insensitivity
    $file_path = resolve_path_case_insensitive(ABSPATH, $clean_path . '.php');
    if ($file_path && file_exists($file_path)) {
        require_once $file_path;
        return true;
    }

    // 2. Short URL matches (e.g. products/vacuum_glove_box -> products/vacuum_glove_box/vacuum_glove_box.php)
    if (count($segments) === 2) {
        $product_dir = $segments[1];

        // Catalog-driven resolution first. This is what makes clean catalog url_slugs work even
        // when they don't match the real on-disk folder name — e.g. 'ats-pressure-aging-vessel'
        // vs. the actual folder 'ATS_Pressure_Aging_Vessel_Asphalt_Binding Testing'. Without this,
        // route_map.php (which mirrors real folder names) has no entry for the clean slug at all,
        // and the directory-name-guessing fallback below can never find it either.
        static $catalog = null;
        if ($catalog === null) {
            require_once ABSPATH . 'includes/product-catalog.php';
            $catalog = get_product_catalog();
        }
        $norm_slug = strtolower(str_replace(['_', ' '], '-', $product_dir));
        foreach ($catalog as $key => $prod) {
            $norm_key = strtolower(str_replace(['_', ' '], '-', $key));
            $norm_url_slug = strtolower(str_replace(['_', ' '], '-', $prod['url_slug'] ?? ''));
            if ($norm_key === $norm_slug || $norm_url_slug === $norm_slug) {
                $catalog_file = ABSPATH . ($prod['internal_url'] ?? '');
                if (($prod['internal_url'] ?? '') !== '' && file_exists($catalog_file)) {
                    require_once $catalog_file;
                    return true;
                }
                break;
            }
        }

        // Find folder case-insensitively first
        $resolved_dir = resolve_path_case_insensitive(ABSPATH, 'products/' . $product_dir);
        if ($resolved_dir && is_dir($resolved_dir)) {
            $dir_basename = basename($resolved_dir);
            // Try segment-based file name
            $possible_file = $resolved_dir . DIRECTORY_SEPARATOR . $dir_basename . '.php';
            if (file_exists($possible_file)) {
                require_once $possible_file;
                return true;
            }

            // Special case for ATS Pressure Aging Vessel
            if (stripos($dir_basename, 'ATS_Pressure_Aging_Vessel') !== false) {
                $special_file = $resolved_dir . DIRECTORY_SEPARATOR . 'ATS_Pressure_Aging_Vessel.php';
                if (file_exists($special_file)) {
                    require_once $special_file;
                    return true;
                }
            }

            // Fallback: search for any .php file in the product folder excluding product-category
            $files = glob($resolved_dir . DIRECTORY_SEPARATOR . '*.php');
            if (!empty($files)) {
                require_once $files[0];
                return true;
            }
        }
    }

    return false;
}
