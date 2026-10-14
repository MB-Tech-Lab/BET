<?php
set_time_limit(0);

$base_url = "http://localhost/BET";
require_once dirname(__DIR__) . "/includes/product-catalog.php";
$catalog = get_product_catalog();

$locations = [];
$loc_dir = dirname(__DIR__) . "/locations";
if (is_dir($loc_dir)) {
    $continents = scandir($loc_dir);
    foreach ($continents as $continent) {
        if ($continent === "." || $continent === ".." || !is_dir($loc_dir . "/" . $continent)) continue;
        $countries = scandir($loc_dir . "/" . $continent);
        foreach ($countries as $country) {
            if ($country === "." || $country === ".." || !is_dir($loc_dir . "/" . $continent . "/" . $country)) continue;
            $cities = scandir($loc_dir . "/" . $continent . "/" . $country);
            foreach ($cities as $city) {
                if ($city === "." || $city === ".." || !is_dir($loc_dir . "/" . $continent . "/" . $country . "/" . $city)) continue;
                $locations[] = "locations/" . urlencode($continent) . "/" . urlencode($country) . "/" . urlencode($city);
            }
        }
    }
}

$urls = [];
// Products
foreach ($catalog as $slug => $data) {
    $urls[] = "$base_url/products/$slug/";
    
    // Location-Product combinations
    foreach ($locations as $loc) {
        $urls[] = "$base_url/$loc/products/$slug/";
    }
}

echo "Total URLs to warm: " . count($urls) . "\n";

// Batch processing using curl_multi
$batch_size = 20;
$total = count($urls);

for ($i = 0; $i < $total; $i += $batch_size) {
    $batch = array_slice($urls, $i, $batch_size);
    $mh = curl_multi_init();
    $handles = [];
    
    foreach ($batch as $url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_multi_add_handle($mh, $ch);
        $handles[] = $ch;
    }
    
    $running = null;
    do {
        curl_multi_exec($mh, $running);
    } while ($running);
    
    foreach ($handles as $ch) {
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    
    echo "Processed " . min($i + $batch_size, $total) . " / $total\n";
}

echo "Cache warming complete!\n";
?>