<?php
$base_dir = '/website/BET/locations/africa';

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($base_dir));
$count = 0;

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filepath = $file->getPathname();
        $content = file_get_contents($filepath);
        
        $original = $content;
        
        // The injection script wrote \'.$city.\' and \'.$country.\' inside single quotes.
        // It looks exactly like: \'.$city.\' and \'.$country.\' in the source code.
        // We will replace it with ' . $city . ' and ' . $country . ' so it evaluates.
        
        $content = str_replace("\\'.\$city.\\'", "' . \$city . '", $content);
        $content = str_replace("\\'.\$country.\\'", "' . \$country . '", $content);
        
        // Just in case it was written without slashes:
        $content = str_replace("'.\$city.'", "' . \$city . '", $content);
        $content = str_replace("'.\$country.'", "' . \$country . '", $content);

        // Just in case it was written with {$city} or {$country}:
        $content = str_replace("{\$city}", "' . \$city . '", $content);
        $content = str_replace("{\$country}", "' . \$country . '", $content);
        
        if ($content !== $original) {
            file_put_contents($filepath, $content);
            echo "Fixed variables in $filepath\n";
            $count++;
        }
    }
}

echo "Total files fixed: $count\n";
?>
