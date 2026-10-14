<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Lubumbashi';
$country = 'Congo (DRC)';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Lubumbashi, a vital industrial player in Congo (DRC), is making significant strides in copper and cobalt mining, mineral processing, and heavy machinery. Lubumbashi is the heart of the DRC\'s world-leading mining sector. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Lubumbashi\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Lubumbashi — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Lubumbashi with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Lubumbashi, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Lubumbashi, Congo (DRC). Our Vacuum Leak Test Machine provides essential bubble emission inspection for flexible packaging in Lubumbashi\'s food processing and pharmaceutical sectors.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Lubumbashi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Lubumbashi, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Lubumbashi, Congo (DRC). In Lubumbashi, mining and energy laboratories utilize our vacuum glove box systems to protect moisture-sensitive materials from contamination.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Lubumbashi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Lubumbashi, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Lubumbashi, Congo (DRC). The Burhani Degassing Chamber offers superior vacuum performance for Lubumbashi\'s chemical processing and infrastructure development projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Lubumbashi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Lubumbashi, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Lubumbashi, Congo (DRC). Ensure leak-proof welds in Lubumbashi\'s energy infrastructure and water treatment plants with our advanced NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Lubumbashi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Lubumbashi, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Lubumbashi, Congo (DRC). Ensure packaging perfection in Lubumbashi with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Lubumbashi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Lubumbashi, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Lubumbashi.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Lubumbashi, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Sampling Equipment VC20 Distributor in Lubumbashi, Congo (DRC)',
        'desc' => [
            'Our company operates as an active exporter of gas sampling equipment to industrial zones in Lubumbashi, Congo (DRC). The VC20 portable sampler is optimized for surveillance des émissions, allowing operators to verify compliance parameters.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Lubumbashi. Contact our support office for technical dossiers and customized commercial quotes.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'Fabricant de Chambres PCR à ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology est un <strong>Fabricant de Chambres PCR</strong> de confiance à ' . $city . ', ' . $country . '. Nos stations de travail à contamination contrôlée sont équipées d\'une filtration HEPA et d\'une stérilisation UV pour une manipulation sécurisée de l\'ADN/ARN.',
            'En tant que principal <strong>Fournisseur de Stations de Travail PCR</strong> à ' . $city . ', nous proposons des équipements de pointe conçus pour prévenir la contamination croisée lors de la préparation moléculaire et des diagnostics critiques.',
            'Notre entreprise agit également en tant qu\'<strong>Exportateur et Distributeur de Chambres PCR</strong>, fournissant des solutions de laboratoire de qualité supérieure aux instituts de recherche et aux hôpitaux à travers ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Lubumbashi, Congo (DRC)',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Lubumbashi and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
