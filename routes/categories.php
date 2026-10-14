<?php
/**
 * Categories Handler
 * Burhani Engineering Technology Routing System
 */

function handle_categories(array $segments, string $path): bool {
    // Check if the path contains 'product-category' case-insensitively
    $category_index = null;
    foreach ($segments as $i => $seg) {
        if (strcasecmp($seg, 'product-category') === 0) {
            $category_index = $i;
            break;
        }
    }

    if ($category_index === null) {
        return false;
    }

    $clean_path = preg_replace('/\.php$/i', '', $path);
    $clean_path = trim($clean_path, '/');

    // 1. Resolve case-insensitively on filesystem. route_map.php mirrors real folder names, so
    // this only works when the URL's product slug matches the real on-disk product folder name.
    $file_path = resolve_path_case_insensitive(ABSPATH, $clean_path . '.php');
    if ($file_path && file_exists($file_path)) {
        require_once $file_path;
        return true;
    }

    // 2. Catalog-driven fallback: handles products whose clean catalog url_slug doesn't match
    // the real on-disk folder name (e.g. 'ats-pressure-aging-vessel' vs. the actual folder
    // 'ATS_Pressure_Aging_Vessel_Asphalt_Binding Testing') — route_map.php has no entry that
    // bridges the two, so the filesystem lookup above can never succeed for these.
    $product_slug  = $segments[$category_index - 1] ?? null;
    $category_slug = $segments[$category_index + 1] ?? null;
    if ($product_slug && $category_slug) {
        require_once ABSPATH . 'includes/product-catalog.php';
        $catalog = get_product_catalog();
        $norm_slug = strtolower(str_replace(['_', ' '], '-', preg_replace('/\.php$/i', '', $product_slug)));
        foreach ($catalog as $key => $prod) {
            $norm_key      = strtolower(str_replace(['_', ' '], '-', $key));
            $norm_url_slug = strtolower(str_replace(['_', ' '], '-', $prod['url_slug'] ?? ''));
            if ($norm_key !== $norm_slug && $norm_url_slug !== $norm_slug) continue;

            $product_dir  = dirname($prod['internal_url'] ?? '');
            $category_clean = preg_replace('/\.php$/i', '', $category_slug);
            $sub_product_slug = $segments[$category_index + 2] ?? null;

            // Some categories contain product files in nested directories whose real names do
            // not match their clean URL slugs. Keep those aliases in the catalog so the router
            // resolves the actual existing file without exposing filesystem paths in clean URLs.
            if ($sub_product_slug && !empty($prod['subcategory_routes'])) {
                $sub_product_clean = strtolower(str_replace(['_', ' '], '-', preg_replace('/\.php$/i', '', $sub_product_slug)));
                $mapped_file = $prod['subcategory_routes'][$sub_product_clean] ?? null;
                if ($mapped_file && file_exists(ABSPATH . $mapped_file)) {
                    require_once ABSPATH . $mapped_file;
                    return true;
                }
            }

            if ($sub_product_slug) {
                $sub_product_clean = preg_replace('/\.php$/i', '', $sub_product_slug);
                $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $category_clean . '/' . $sub_product_clean . '.php');
                
                // Fallback: check subcategories map in catalog to find nested directory names for sub-products
                if (!$category_file && !empty($prod['subcategories'])) {
                    foreach ($prod['subcategories'] as $sub_key => $sub_val) {
                        $norm_sub_key = strtolower(str_replace(['_', ' '], '-', $sub_key));
                        if ($norm_sub_key === $category_clean) {
                            $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $sub_val . '/' . $sub_product_clean . '.php');
                            break;
                        }
                    }
                }

                if (!$category_file) {
                    $cat_en_dash = str_replace('gbmb', 'Glove Box - Metal Body', $category_clean); // heuristic mapping
                    $cat_en_dash = str_ireplace('vacuum-gbmb', 'Vacuum Glove Box - Metal Body', $category_clean);
                    $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $cat_en_dash . '/' . $sub_product_clean . '.php');
                }
            } else {
                $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $category_clean . '.php');
                
                // Fallback: check subcategories map in catalog to find nested directory names
                if (!$category_file && !empty($prod['subcategories'])) {
                    foreach ($prod['subcategories'] as $sub_key => $sub_val) {
                        $norm_sub_key = strtolower(str_replace(['_', ' '], '-', $sub_key));
                        if ($norm_sub_key === $category_clean) {
                            // Check if a directory matching the real name exists
                            $dir_path = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $sub_val);
                            if ($dir_path && is_dir($dir_path)) {
                                $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $sub_val . '/' . $sub_key . '.php');
                                if (!$category_file) {
                                    $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $sub_val . '/' . $sub_val . '.php');
                                }
                            }
                            break;
                        }
                    }
                }

                if (!$category_file) {
                    $cat_en_dash = str_ireplace('vacuum-gbmb', 'Vacuum Glove Box - Metal Body', $category_clean);
                    $category_file = resolve_path_case_insensitive(ABSPATH, $product_dir . '/product-category/' . $cat_en_dash . '.php');
                }
            }

            if ($category_file && file_exists($category_file)) {
                require_once $category_file;
                return true;
            }
            break;
        }
    }

    return false;
}
