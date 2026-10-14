<?php
/**
 * Throttled automatic sitemap regeneration.
 * Fired from router.php on ordinary traffic so the sitemap "should NEVER require manual
 * editing" — but real content changes (a new product-category file, a new city, a catalog
 * edit) don't happen every request, so this is heavily throttled: at most one staleness
 * check every 5 minutes, and a full rebuild only when something has actually changed.
 */

if (!function_exists('sitemap_compute_fingerprint')) {

function sitemap_compute_fingerprint(): int {
    $max = 0;
    $touch = static function (string $p) use (&$max): void {
        if (file_exists($p)) $max = max($max, filemtime($p));
    };

    $touch(ABSPATH . 'includes/product-catalog.php');
    $touch(ABSPATH . 'products');
    $touch(ABSPATH . 'locations');
    $touch(ABSPATH . 'industries');
    $touch(ABSPATH . 'resources');
    $touch(ABSPATH . 'brochers');
    $touch(ABSPATH . 'assets/img');

    // A new file inside an existing subfolder updates that subfolder's own mtime, not its
    // parent's — check one level deeper for the two directories that actually grow over time.
    foreach (glob(ABSPATH . 'products/*', GLOB_ONLYDIR) ?: [] as $d) {
        $touch($d);
        $touch($d . '/product-category');
    }
    foreach (glob(ABSPATH . 'locations/*/*', GLOB_ONLYDIR) ?: [] as $d) {
        $touch($d);
    }

    return $max;
}

function sitemap_maybe_regenerate(): void {
    $meta_file = ABSPATH . 'data/.sitemap_meta.json';
    $manifest_file = ABSPATH . 'data/sitemap_manifest.json';

    $meta = file_exists($meta_file) ? json_decode(file_get_contents($meta_file), true) : null;
    if (!is_array($meta)) $meta = ['last_built' => 0, 'last_check' => 0];
    $now = time();

    // Throttle: skip the (cheap, but not free) fingerprint scan unless 5+ minutes have passed.
    if (($now - ($meta['last_check'] ?? 0)) < 300) {
        return;
    }

    // Record the check immediately so concurrent requests during a rebuild don't pile on.
    $meta['last_check'] = $now;
    @file_put_contents($meta_file, json_encode($meta));

    $needs_build = !file_exists($manifest_file);
    if (!$needs_build) {
        $needs_build = sitemap_compute_fingerprint() > ($meta['last_built'] ?? 0);
    }

    if (!$needs_build) {
        return;
    }

    require_once ABSPATH . 'includes/sitemap-builder.php';
    sitemap_write_all(); // rewrites data/.sitemap_meta.json with a fresh last_built/last_check itself
}

} // function_exists guard
