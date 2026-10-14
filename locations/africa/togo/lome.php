<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Lome';
$country = 'Togo';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Lome, a vital industrial player in Togo, is making significant strides in logistics, phosphates processing, and maritime services. Lome is a critical West African logistical and industrial hub. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Lome\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Lome — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Lome with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Lome, Togo',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Lome, Togo. Our Vacuum Leak Test Machine provides essential bubble emission inspection for flexible packaging in Lome\'s food processing and pharmaceutical sectors.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Lome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Togo and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Lome, Togo',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Lome, Togo. In Lome, mining and energy laboratories utilize our vacuum glove box systems to protect moisture-sensitive materials from contamination.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Lome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Togo and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Lome, Togo',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Lome, Togo. The Burhani Degassing Chamber offers superior vacuum performance for Lome\'s chemical processing and infrastructure development projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Lome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Togo and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Lome, Togo',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Lome, Togo. Ensure leak-proof welds in Lome\'s energy infrastructure and water treatment plants with our advanced NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Lome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Togo and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Lome, Togo',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Lome, Togo. Ensure packaging perfection in Lome with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Lome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Togo and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Lome, Togo',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Lome.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Lome, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Sampling Chamber VC20 Manufacturer in Lome, Togo',
        'desc' => [
            'Burhani Engineering Technology is a certified <strong>Vacuum Chamber Sampler VC20 Manufacturer</strong> serving environmental control agencies and factories in Lome, Togo. Our portable gas collection system provides a reliable, airtight boundary for landfill gas monitoring and VOC sampling.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active <strong>Vacuum Chamber Sampler VC20 Exporter</strong>, delivering certified quality control equipment across Togo and international markets. Contact our support office for technical dossiers.'
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
    'title' => 'Supply Vacuum Testing Equipment to Lome, Togo',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Lome and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
