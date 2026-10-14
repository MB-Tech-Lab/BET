<?php
$base_dir = '/website/BET/locations/africa';

$lang_map = [
    // Arabic
    'algeria' => 'ar',
    'egypt' => 'ar',
    'libya' => 'ar',
    'morocco' => 'ar',
    'sudan' => 'ar',
    'tunisia' => 'ar',
    'mauritania' => 'ar',
    'somalia' => 'ar',
    'somaliland' => 'ar',
    // French
    'benin' => 'fr',
    'burkina-faso' => 'fr',
    'burundi' => 'fr',
    'cameroon' => 'fr',
    'central-african-republic' => 'fr',
    'chad' => 'fr',
    'comoros' => 'fr',
    'congo-brazzaville' => 'fr',
    'congo-drc' => 'fr',
    'djibouti' => 'fr',
    'equatorial-guinea' => 'fr', 
    'gabon' => 'fr',
    'guinea' => 'fr',
    'ivory-coast' => 'fr',
    'madagascar' => 'fr',
    'mali' => 'fr',
    'niger' => 'fr',
    'rwanda' => 'fr',
    'senegal' => 'fr',
    'togo' => 'fr',
    // Portuguese
    'angola' => 'pt',
    'cape-verde' => 'pt',
    'guinea-bissau' => 'pt',
    'mozambique' => 'pt',
    'sao-tome' => 'pt',
    // Swahili
    'kenya' => 'sw',
    'tanzania' => 'sw',
    'uganda' => 'en', 
    // English defaults for the rest
];

$translations = [
    'en' => [
        'title' => 'Manufacturer of PCR Chambers in {City}, {Country}',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in {City}, {Country}. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in {City}, we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across {Country}.'
        ]
    ],
    'fr' => [
        'title' => 'Fabricant de Chambres PCR à {City}, {Country}',
        'desc' => [
            'Burhani Engineering Technology est un <strong>Fabricant de Chambres PCR</strong> de confiance à {City}, {Country}. Nos stations de travail à contamination contrôlée sont équipées d\'une filtration HEPA et d\'une stérilisation UV pour une manipulation sécurisée de l\'ADN/ARN.',
            'En tant que principal <strong>Fournisseur de Stations de Travail PCR</strong> à {City}, nous proposons des équipements de pointe conçus pour prévenir la contamination croisée lors de la préparation moléculaire et des diagnostics critiques.',
            'Notre entreprise agit également en tant qu\'<strong>Exportateur et Distributeur de Chambres PCR</strong>, fournissant des solutions de laboratoire de qualité supérieure aux instituts de recherche et aux hôpitaux à travers {Country}.'
        ]
    ],
    'ar' => [
        'title' => 'الشركة المصنعة لغرف PCR في {City}، {Country}',
        'desc' => [
            'تعتبر شركة Burhani Engineering Technology من <strong>مصنعي غرف PCR</strong> الموثوقين في {City}، {Country}. تم تجهيز محطات العمل الخاصة بنا التي يتم التحكم في تلوثها بنظام ترشيح HEPA والتعقيم بالأشعة فوق البنفسجية للتعامل الآمن مع الحمض النووي (DNA/RNA).',
            'بصفتنا <strong>مورداً رائداً لمحطات عمل PCR</strong> في {City}، نقدم معدات متطورة مصممة لمنع التلوث المتبادل أثناء البيولوجيا الجزيئية الحرجة والتحضيرات التشخيصية.',
            'تعمل شركتنا أيضًا <strong>كمصدر وموزع بارز لغرف PCR</strong>، حيث تقدم حلولًا مخبرية عالية الجودة لمعاهد البحوث والمستشفيات في جميع أنحاء {Country}.'
        ]
    ],
    'pt' => [
        'title' => 'Fabricante de Câmaras PCR em {City}, {Country}',
        'desc' => [
            'A Burhani Engineering Technology é um <strong>Fabricante de Câmaras PCR</strong> de confiança em {City}, {Country}. As nossas estações de trabalho de contaminação controlada estão equipadas com filtração HEPA e esterilização UV para o manuseamento seguro de ADN/ARN.',
            'Como <strong>Fornecedor líder de Estações de Trabalho PCR</strong> em {City}, disponibilizamos equipamento de bancada avançado concebido para prevenir a contaminação cruzada durante as preparações de biologia molecular e diagnóstico.',
            'A nossa empresa serve também como um proeminente <strong>Exportador e Distribuidor de Câmaras PCR</strong>, entregando soluções laboratoriais de qualidade superior a institutos de investigação e hospitais por toda a {Country}.'
        ]
    ],
    'sw' => [
        'title' => 'Mtengenezaji wa Vyumba vya PCR huko {City}, {Country}',
        'desc' => [
            'Burhani Engineering Technology ni <strong>Mtengenezaji wa Vyumba vya PCR</strong> anayeaminika huko {City}, {Country}. Vituo vyetu vya kazi vilivyodhibitiwa kuzuia uchafuzi vina kichujio cha HEPA na uzuiaji viini vya UV kwa ushughulikiaji salama wa DNA/RNA.',
            'Kama <strong>Msambazaji mkuu wa Vituo vya Kazi vya PCR</strong> huko {City}, tunatoa vifaa vya kisasa vilivyoundwa kuzuia uchafuzi mtambuka wakati wa maandalizi muhimu ya biolojia ya molekuli na uchunguzi.',
            'Kampuni yetu pia inahudumu kama <strong>Msafirishaji na Muuzaji mashuhuri wa Vyumba vya PCR</strong>, ikitoa suluhisho za ubora wa juu za maabara kwa taasisi za utafiti na hospitali kote {Country}.'
        ]
    ]
];

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($base_dir));

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filepath = $file->getPathname();
        
        $path_parts = explode('/', str_replace($base_dir . '/', '', $filepath));
        if (count($path_parts) >= 2) {
            $country_slug = $path_parts[0];
            
            $lang = isset($lang_map[$country_slug]) ? $lang_map[$country_slug] : 'en';
            $t = $translations[$lang];
            
            $php_code = "    'pcr_chambers' => [\n";
            $php_code .= "        'title' => '" . addslashes(str_replace('{City}', "'.\$city.'", str_replace('{Country}', "'.\$country.'", $t['title']))) . "',\n";
            $php_code .= "        'desc' => [\n";
            foreach ($t['desc'] as $d) {
                $php_code .= "            '" . addslashes(str_replace('{City}', "'.\$city.'", str_replace('{Country}', "'.\$country.'", $d))) . "',\n";
            }
            $php_code = rtrim($php_code, ",\n");
            $php_code .= "\n        ]\n    ]";
            
            $content = file_get_contents($filepath);
            
            if (strpos($content, "'pcr_chambers' =>") !== false) {
                echo "Already injected in $filepath\n";
                continue;
            }
            
            if (preg_match('/\$products\s*=\s*\[(.*?)\];/s', $content, $matches, PREG_OFFSET_CAPTURE)) {
                $array_content = $matches[1][0];
                $array_pos = $matches[1][1];
                $array_end_pos = $array_pos + strlen($array_content);
                
                // Add comma to previous element if needed
                $replacement = ",\n" . $php_code;
                
                $content = substr_replace($content, $replacement, $array_end_pos, 0);
                file_put_contents($filepath, $content);
                echo "Injected in $filepath ($lang)\n";
            } else {
                echo "Failed to find products array in $filepath\n";
            }
        }
    }
}
?>
