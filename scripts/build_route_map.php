<?php
$root = dirname(__DIR__);
require_once $root . '/includes/config.php';
$map = [];

function scan_dir($dir, $base) {
    global $map, $root;
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === "." || $item === "..") continue;
        
        // Exclude some directories
        if ($base === "" && in_array($item, [".git", ".vscode", "cache", "data", "scripts"])) continue;
        
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        $relative = $base !== "" ? $base . "/" . $item : $item;
        
        // The key is the normalized path using the shared normalization logic
        // Wait, the router normalizes each segment independently, so let's normalize the whole relative path
        $normalized = normalize_route_path($relative);
        $map[$normalized] = $relative;
        
        if (is_dir($path)) {
            scan_dir($path, $relative);
        }
    }
}

scan_dir($root, "");

$output = "<?php\n// Auto-generated static route map for O(1) case-insensitive lookups\nreturn [\n";
foreach ($map as $key => $val) {
    $output .= "    \"" . addslashes($key) . "\" => \"" . addslashes($val) . "\",\n";
}
$output .= "];\n";

file_put_contents($root . "/includes/route_map.php", $output);
echo "Route map built with " . count($map) . " entries.\n";
?>
