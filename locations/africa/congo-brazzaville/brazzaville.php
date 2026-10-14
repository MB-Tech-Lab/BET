<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Brazzaville';
$country = 'Congo (Brazzaville)';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Brazzaville, a vital industrial player in Congo (Brazzaville), is making significant strides in petroleum services, timber, and light manufacturing. Brazzaville is a key industrial hub on the Congo River. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Brazzaville\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Brazzaville — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Brazzaville with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Brazzaville, Congo (Brazzaville)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Brazzaville, Congo (Brazzaville). Designed for rugged industrial environments, our vacuum leak tester offers reliable seal inspection for Brazzaville\'s diverse packaging industry.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Brazzaville, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (Brazzaville) and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Brazzaville, Congo (Brazzaville)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Brazzaville, Congo (Brazzaville). Ensure precise atmospheric control for your critical processes in Brazzaville with our industrial-grade vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Brazzaville, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (Brazzaville) and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Brazzaville, Congo (Brazzaville)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Brazzaville, Congo (Brazzaville). Our Vacuum Degassing Chamber is a vital system for resin and polymer processing in Brazzaville\'s manufacturing and infrastructure sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Brazzaville, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (Brazzaville) and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Brazzaville, Congo (Brazzaville)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Brazzaville, Congo (Brazzaville). Perform reliable weld integrity evaluation on pipelines and infrastructure projects in Brazzaville with our portable vacuum box system.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Brazzaville, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (Brazzaville) and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Brazzaville, Congo (Brazzaville)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Brazzaville, Congo (Brazzaville). The Burhani Transparent Vacuum unit provides exceptional clarity for quality inspection in Brazzaville\'s pharmaceutical and food processing plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Brazzaville, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (Brazzaville) and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Brazzaville, Congo (Brazzaville)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Brazzaville.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Brazzaville, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Methane Collection Chamber VC20 Exporter in Brazzaville, Congo (Brazzaville)',
        'desc' => [
            'For manufacturing facilities and environmental engineers in Brazzaville, Congo (Brazzaville), we offer high-performance gas samplers. The VC20 provides reliable conformité industrielle, pulling air samples directly into collection bags without pump interaction.',
            'The portable air sampling chamber operates on the lung principle, pulling a vacuum of up to 18" Hg inside the chamber to expand the bag internally. This makes it ideal for landfill methane analysis, petrochemical safety monitoring, and industrial zone gas sampling.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Brazzaville.'
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
    'title' => 'Supply Vacuum Testing Equipment to Brazzaville, Congo (Brazzaville)',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Brazzaville and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
