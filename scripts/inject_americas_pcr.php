<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$directories = [
    __DIR__ . '/../locations/north-america',
    __DIR__ . '/../locations/south-america'
];

$updated_count = 0;
$skipped_count = 0;

$lang_map = [
    'brazil'=>'pt',
    'canada'=>'fr',
    'haiti'=>'fr',
    'costa-rica'=>'es', 'cuba'=>'es', 'dominican-republic'=>'es', 'el-salvador'=>'es', 
    'guatemala'=>'es', 'honduras'=>'es', 'mexico'=>'es', 'nicaragua'=>'es', 'panama'=>'es',
    'argentina'=>'es', 'bolivia'=>'es', 'chile'=>'es', 'colombia'=>'es', 
    'ecuador'=>'es', 'paraguay'=>'es', 'peru'=>'es', 'uruguay'=>'es', 'venezuela'=>'es'
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) continue;

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $filepath = $file->getRealPath();
            
            $country_dir = basename(dirname($filepath));
            $lang = $lang_map[strtolower($country_dir)] ?? 'en';
            
            $content = file_get_contents($filepath);
            
            if (strpos($content, "'pcr_chambers'") !== false) {
                $skipped_count++;
                continue;
            }

            $title = '';
            $mfg_kw = '';
            $sup_kw = '';
            $exp_kw = '';
            
            if ($lang === 'fr') {
                $title = 'Fabricant de chambres PCR à \' . $city . \', \' . $country . \'';
                $mfg_kw = 'Fabricant de chambres PCR';
                $sup_kw = 'Fournisseur de stations de travail PCR';
                $exp_kw = 'Exportateur de chambres PCR';
            } elseif ($lang === 'es') {
                $title = 'Fabricante de cámaras PCR en \' . $city . \', \' . $country . \'';
                $mfg_kw = 'Fabricante de cámaras PCR';
                $sup_kw = 'Proveedor de estaciones de trabajo PCR';
                $exp_kw = 'Exportador de cámaras PCR';
            } elseif ($lang === 'pt') {
                $title = 'Fabricante de câmaras PCR em \' . $city . \', \' . $country . \'';
                $mfg_kw = 'Fabricante de câmaras PCR';
                $sup_kw = 'Fornecedor de estações de trabalho PCR';
                $exp_kw = 'Exportador de câmaras PCR';
            } else {
                $title = 'Manufacturer of PCR Chambers in \' . $city . \', \' . $country . \'';
                $mfg_kw = 'PCR Chamber Manufacturer';
                $sup_kw = 'PCR Workstation Supplier';
                $exp_kw = 'PCR Chamber Exporter';
            }

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
}

echo "Done! Updated $updated_count files. Skipped $skipped_count files.\n";
