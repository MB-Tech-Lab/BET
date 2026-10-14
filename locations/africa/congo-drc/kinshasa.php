<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Kinshasa';
$country = 'Congo (DRC)';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Kinshasa, a vital industrial player in Congo (DRC), is making significant strides in manufacturing, food processing, and pharmaceuticals. Kinshasa is a massive industrial metropolitan center for the DRC. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Kinshasa\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Kinshasa — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Kinshasa with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Kinshasa, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Kinshasa, Congo (DRC). Protect your product quality in Kinshasa with our advanced vacuum leak test machine, optimized for rapid and accurate evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Kinshasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Kinshasa, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Kinshasa, Congo (DRC). Our Vacuum Glove Box provides a controlled inert atmosphere for sensitive chemical handling and research in Kinshasa\'s industrial plants.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Kinshasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Kinshasa, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Kinshasa, Congo (DRC). Used extensively in Kinshasa\'s oil refineries and industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Kinshasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Kinshasa, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Kinshasa, Congo (DRC). The Burhani Vacuum Weld Tester is engineered for field use in Kinshasa\'s mining operations, oil refineries, and industrial plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Kinshasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Kinshasa, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Kinshasa, Congo (DRC). Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Kinshasa\'s infrastructure and energy labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Kinshasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Congo (DRC) and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Kinshasa, Congo (DRC)',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Kinshasa.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Kinshasa, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Vacuum Sampler Manufacturer in Kinshasa, Congo (DRC)',
        'desc' => [
            'Our company operates as an active exporter of gas sampling equipment to industrial zones in Kinshasa, Congo (DRC). The VC20 portable sampler is optimized for surveillance des émissions, allowing operators to verify compliance parameters.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Kinshasa. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Kinshasa, Congo (DRC)',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Kinshasa and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
