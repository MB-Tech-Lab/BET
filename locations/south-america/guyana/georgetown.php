<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Georgetown';
$country = 'Guyana';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Georgetown, the capital of Guyana, is at the epicentre of one of the world\'s most rapidly developing oil economies following the discovery of massive offshore petroleum reserves. Burhani Engineering Technology serves Georgetown\'s emerging industrial landscape as a trusted manufacturer, supplier, exporter, importer, and dealer of vacuum testing equipment.';
$intro_p2 = 'Guyana\'s offshore oil exploration boom, combined with its established gold and bauxite mining industries, generates strong demand for precision NDT and vacuum quality assurance systems. Burhani Engineering Technology\'s comprehensive product portfolio is ideally positioned to support Georgetown\'s fast-growing industrial infrastructure.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Georgetown, Guyana',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Georgetown, Guyana. Our bubble emission leak test unit is engineered for multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653, delivering reliable gross-leak detection for flexible packaging operations in Georgetown\'s pharmaceutical, food, and industrial packaging sectors.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Georgetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guyana and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Georgetown, Guyana',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Georgetown, Guyana. Engineered for both single- and multi-port configurations, the Burhani vacuum glove box delivers a sealed, oxygen-depleted working environment for Georgetown\'s chemical industry, research institutions, and electronics manufacturers.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Georgetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guyana and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Georgetown, Guyana',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Georgetown, Guyana. The Burhani acrylic vacuum degassing unit provides full visibility of the degassing process, enabling operators in Georgetown\'s industrial facilities to precisely control vacuum levels and processing times for repeatable, high-quality results.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Georgetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guyana and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Georgetown, Guyana',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Georgetown, Guyana. The Burhani flat-bottom vacuum box performs API 650/653-compliant NDT bubble leak testing on tank floor welds, pipeline joints, and structural seams — a critical tool for Georgetown\'s oil & gas storage tank fabrication and maintenance operations.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Georgetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guyana and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Georgetown, Guyana',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Georgetown, Guyana. The acrylic transparent pressure vessel from Burhani Engineering Technology enables submersion-based leak detection for sealed packages, sachets, and containers — a reliable quality assurance tool for Georgetown\'s food and beverage export industry.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Georgetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guyana and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Georgetown, Guyana',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Georgetown.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Georgetown, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Hazardous Vapor Sampling System Manufacturer in Georgetown, Guyana',
        'desc' => [
            'As a leading supplier of environmental instrumentation in Georgetown, Guyana, we provide the VC20 system. This equipment is designed for VOC monitoring and industrial gas collection at major production facilities in Georgetown.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Guyana choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Manufacturer of PCR Chambers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Georgetown, Guyana',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Georgetown or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
