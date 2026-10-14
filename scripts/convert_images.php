<?php
$images = [
    'c:/xampp/htdocs/BET/assets/img/hero section.webp' => 'c:/xampp/htdocs/BET/assets/img/hero-section.webp',
    'c:/xampp/htdocs/BET/assets/img/HeroS.webp' => 'c:/xampp/htdocs/BET/assets/img/HeroS.webp'
];

foreach ($images as $src => $dest) {
    if (file_exists($src)) {
        $im = imagecreatefromjpeg($src);
        if ($im) {
            imagewebp($im, $dest, 80);
            imagedestroy($im);
            echo "Converted: " . basename($src) . " to " . basename($dest) . "\n";
        } else {
            echo "Failed to load: " . basename($src) . "\n";
        }
    } else {
        echo "File not found: " . basename($src) . "\n";
    }
}

