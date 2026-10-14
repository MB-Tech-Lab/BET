<?php
$dir = dirname(__DIR__) . "/assets/img";
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
$files = []; 

foreach ($rii as $file) {
    if ($file->isDir()) continue;
    $ext = strtolower($file->getExtension());
    if (in_array($ext, ["jpg", "jpeg", "png"])) {
        // Skip favicon or logo
        if (strpos($file->getFilename(), "favicon") !== false || strpos($file->getFilename(), "logo") !== false) {
            continue;
        }
        
        $path = $file->getPathname();
        $size = filesize($path);
        
        // If image is already smaller than 100KB, it might not need aggressive optimization, but WebP is always better
        $webp_path = preg_replace("/\.(jpg|jpeg|png)$/i", ".webp", $path);
        
        if ($ext === "png") {
            $im = imagecreatefrompng($path);
            imagepalettetotruecolor($im);
            imagealphablending($im, true);
            imagesavealpha($im, true);
        } else {
            $im = imagecreatefromjpeg($path);
        }
        
        if ($im) {
            imagewebp($im, $webp_path, 75);
            imagedestroy($im);
            
            // Delete original
            unlink($path);
            echo "Converted $path -> $webp_path\n";
        }
    }
}
?>