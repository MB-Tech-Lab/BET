<?php

$dir = new RecursiveDirectoryIterator('C:\xampp\htdocs\BET\locations');
$iterator = new RecursiveIteratorIterator($dir);

$replacements = [
    'ASTM F2096 compliant bubble emission testing' => 'testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653',
];

$count = 0;

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $path = $file->getPathname();
        $content = file_get_contents($path);
        
        $modified = false;
        
        foreach ($replacements as $old => $new) {
            if (strpos($content, $old) !== false) {
                $content = str_replace($old, $new, $content);
                $modified = true;
            }
        }
        
        if ($modified) {
            file_put_contents($path, $content);
            $count++;
        }
    }
}

echo "Modified $count files.\n";
