<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dir = __DIR__ . '/../locations/oceania';

$updated_count = 0;
$skipped_count = 0;

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filepath = $file->getRealPath();
        
        $content = file_get_contents($filepath);
        
        if (strpos($content, "'pcr_chambers'") !== false) {
            $skipped_count++;
            continue;
        }

        $title = 'Manufacturer of PCR Chambers in \' . $city . \', \' . $country . \'';
        $mfg_kw = 'PCR Chamber Manufacturer';
        $sup_kw = 'PCR Workstation Supplier';
        $exp_kw = 'PCR Chamber Exporter';

        $snippet = "    'pcr_chambers' => [
        'title' => '$title',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>$mfg_kw</strong> in ' . \$city . ', ' . \$country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>$sup_kw</strong> in ' . \$city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>$exp_kw</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . \$country . '.'
        ]
    ]";

        $injected = false;
        
        $pos = strrpos($content, "    ]\n];");
        if ($pos !== false) {
            $search = substr($content, $pos, strlen("    ]\n];"));
            $replace = "    ],\n" . $snippet . "\n];";
            $content = substr_replace($content, $replace, $pos, strlen($search));
            $injected = true;
        } elseif (($pos = strrpos($content, "    ]\r\n];")) !== false) {
            $search = substr($content, $pos, strlen("    ]\r\n];"));
            $replace = "    ],\r\n" . $snippet . "\r\n];";
            $content = substr_replace($content, $replace, $pos, strlen($search));
            $injected = true;
        } else {
            $pos = strpos($content, "];\n\n\$cta_banner");
            if ($pos !== false) {
                $last_bracket_pos = strrpos(substr($content, 0, $pos), "    ]");
                if ($last_bracket_pos !== false) {
                    $search = substr($content, $last_bracket_pos, $pos - $last_bracket_pos);
                    $replace = rtrim($search) . ",\n" . $snippet . "\n";
                    $content = substr_replace($content, $replace, $last_bracket_pos, strlen($search));
                    $injected = true;
                }
            }
        }
        
        if ($injected) {
            file_put_contents($filepath, $content);
            $updated_count++;
            echo "Updated: $filepath\n";
        } else {
            echo "Could not find insertion point for: $filepath\n";
        }
    }
}

echo "Done! Updated $updated_count files. Skipped $skipped_count files.\n";
