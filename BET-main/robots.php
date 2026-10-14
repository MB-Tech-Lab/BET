<?php
require_once __DIR__ . '/includes/config.php';

header('Content-Type: text/plain');

echo "User-agent: *\n";
echo "Disallow: /admin/\n";
echo "Disallow: /seo/\n";
echo "Disallow: /tools/\n";
echo "Disallow: /cache/\n";
echo "Disallow: /data/\n";
echo "Disallow: /logs/\n";
echo "\n";
echo "Sitemap: " . url('sitemap.xml') . "\n";
