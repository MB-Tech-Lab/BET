<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Douala';
$country = 'Cameroon';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Douala, a vital industrial player in Cameroon, is making significant strides in petroleum refining, chemicals, and maritime logistics. Douala is the largest industrial port in the CEMAC region. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Douala\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Douala — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Douala with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Douala, Cameroon',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Douala, Cameroon. Designed for rugged industrial environments, our vacuum leak tester offers reliable seal inspection for Douala\'s diverse packaging industry.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Douala, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cameroon and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Douala, Cameroon',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Douala, Cameroon. Ensure precise atmospheric control for your critical processes in Douala with our industrial-grade vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Douala, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cameroon and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Douala, Cameroon',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Douala, Cameroon. Our Vacuum Degassing Chamber is a vital system for resin and polymer processing in Douala\'s manufacturing and infrastructure sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Douala, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cameroon and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Douala, Cameroon',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Douala, Cameroon. Perform reliable weld integrity evaluation on pipelines and infrastructure projects in Douala with our portable vacuum box system.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Douala, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cameroon and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Douala, Cameroon',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Douala, Cameroon. The Burhani Transparent Vacuum unit provides exceptional clarity for quality inspection in Douala\'s pharmaceutical and food processing plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Douala, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cameroon and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Douala, Cameroon',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Douala.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Douala, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Monitoring System VC20 Dealer in Douala, Cameroon',
        'desc' => [
            'Burhani Engineering Technology is a premier manufacturer of gas monitoring systems serving industrial plants in Douala, Cameroon. Engineered for precise prélèvement de gaz, our specialized air sampling chamber is built for environmental controls and emissions compliance in Douala.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Cameroon and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Douala, Cameroon',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Douala and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
