<?php
/**
 * BET Gallery Helper
 * Handles automated discovery of images for products and subcategories.
 */

if (!function_exists('discover_gallery_images')) {
    function discover_gallery_images(string $product_slug, ?string $category_slug = null): array {
        require_once ABSPATH . 'includes/product-catalog.php';
        $catalog = get_product_catalog();

        $prod = $catalog[$product_slug] ?? null;
        if (!$prod) {
            // Check if product_slug is actually a standalone
            foreach ($catalog as $key => $p) {
                foreach ($p['standalone_pages'] ?? [] as $sa_slug => $label) {
                    if ($sa_slug === $product_slug) {
                        $prod = $p;
                        $category_slug = $sa_slug;
                        break 2;
                    }
                }
            }
        }

        if (!$prod) return [];

        // Base image path of the product
        $base_image_path = $prod['image'] ?? '';
        if (strpos($base_image_path, 'assets/') === 0) {
            $base_image_path = ABSPATH . $base_image_path;
        } else {
            $base_image_path = ABSPATH . 'assets/' . ltrim($base_image_path, '/');
        }

        $base_dir = dirname($base_image_path);
        if (!is_dir($base_dir)) {
            $base_dir = ABSPATH . 'assets/img';
        }

        $target_dir = $base_dir;

        // If we are looking for a subcategory or standalone page gallery
        $sub = $category_slug ?? null;
        if ($sub) {
            // Find subdirectory in parent product directory matching subcategory slug
            $norm_sub = strtolower(str_replace(['_', ' '], '-', $sub));
            $subdirs = glob($base_dir . '/*', GLOB_ONLYDIR);
            foreach ($subdirs as $sd) {
                $norm_dir = strtolower(str_replace(['_', ' '], '-', basename($sd)));
                if ($norm_dir === $norm_sub) {
                    $target_dir = $sd;
                    break;
                }
            }
        }

        $images = [];
        if (!is_dir($target_dir)) {
            return $images;
        }

        $exts = ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif', 'avif'];
        $files = scandir($target_dir);
        $seen_sizes = [];

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            $file_path = $target_dir . DIRECTORY_SEPARATOR . $file;
            if (!is_file($file_path)) continue;

            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($ext, $exts, true)) continue;

            // Ignore thumbnails, temp files, and typical dashboard icons
            $lower_file = strtolower($file);
            if (strpos($lower_file, 'thumb') !== false || strpos($lower_file, 'temp') !== false) {
                continue;
            }

            // Deduplicate by file size to avoid exact duplicates
            $size = filesize($file_path);
            if (isset($seen_sizes[$size])) continue;
            $seen_sizes[$size] = true;

            // Relative path for the URL
            $rel_path = str_replace(DIRECTORY_SEPARATOR, '/', str_replace(ABSPATH, '', $file_path));
            $rel_url = '/' . ltrim($rel_path, '/');

            // Retrieve dimensions
            $width = 800;
            $height = 600;
            $info = @getimagesize($file_path);
            if ($info) {
                $width = $info[0];
                $height = $info[1];
            }

            // Prettify name for title
            $title = pathinfo($file, PATHINFO_FILENAME);
            $title = ucwords(str_replace(['-', '_'], ' ', $title));

            $images[] = [
                'url'      => $rel_url,
                'title'    => $title,
                'alt'      => $title . ' - Burhani Engineering Technology',
                'caption'  => $title,
                'width'    => $width,
                'height'   => $height,
            ];
        }

        return $images;
    }
}
