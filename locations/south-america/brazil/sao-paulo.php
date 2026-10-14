<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Sao Paulo';
$country = 'Brazil';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'São Paulo, the largest city in South America and Brazil\'s economic engine, hosts one of the continent\'s most concentrated industrial ecosystems encompassing pharmaceutical packaging, food processing, and chemical manufacturing. Burhani Engineering Technology is proud to serve clients in São Paulo as a leading manufacturer, supplier, exporter, importer, and dealer of vacuum testing equipment.';
$intro_p2 = 'With São Paulo\'s pharmaceutical manufacturers requiring rigorous sterile barrier integrity testing and its food processors demanding hermetic seal verification, Burhani Engineering Technology\'s ASTM-certified vacuum testing portfolio addresses a wide spectrum of quality assurance challenges across the city\'s diverse industrial landscape.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Sao Paulo, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Sao Paulo, Brazil. Our bubble emission leak test unit is engineered for multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653, delivering reliable gross-leak detection for flexible packaging operations in Sao Paulo\'s pharmaceutical, food, and industrial packaging sectors.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Sao Paulo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Sao Paulo, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Sao Paulo, Brazil. Engineered for both single- and multi-port configurations, the Burhani vacuum glove box delivers a sealed, oxygen-depleted working environment for Sao Paulo\'s chemical industry, research institutions, and electronics manufacturers.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Sao Paulo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Sao Paulo, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Sao Paulo, Brazil. The Burhani acrylic vacuum degassing unit provides full visibility of the degassing process, enabling operators in Sao Paulo\'s industrial facilities to precisely control vacuum levels and processing times for repeatable, high-quality results.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Sao Paulo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Sao Paulo, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Sao Paulo, Brazil. The Burhani flat-bottom vacuum box performs API 650/653-compliant NDT bubble leak testing on tank floor welds, pipeline joints, and structural seams — a critical tool for Sao Paulo\'s oil & gas storage tank fabrication and maintenance operations.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Sao Paulo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Sao Paulo, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Sao Paulo, Brazil. The acrylic transparent pressure vessel from Burhani Engineering Technology enables submersion-based leak detection for sealed packages, sachets, and containers — a reliable quality assurance tool for Sao Paulo\'s food and beverage export industry.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Sao Paulo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Sao Paulo, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Sao Paulo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Sao Paulo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Collection Device Exporter in Sao Paulo, Brazil',
        'desc' => [
            'Our company manufactures state-of-the-art environmental testing equipment, designed for industrial VOC monitoring in Sao Paulo, Brazil. The VC20 unit delivers reliable gas analysis with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Sao Paulo. Contact our support office for technical dossiers and customized commercial quotes.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Fabricante de câmaras PCR em ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Fabricante de câmaras PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Fornecedor de estações de trabalho PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exportador de câmaras PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Sao Paulo, Brazil',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Sao Paulo or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
