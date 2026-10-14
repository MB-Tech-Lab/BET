<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Ouagadougou';
$country = 'Burkina Faso';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Ouagadougou, a vital industrial player in Burkina Faso, is making significant strides in agro-industry, gold mining services, and light manufacturing. Ouagadougou is a growing industrial center for agricultural processing and mining support. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Ouagadougou\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Ouagadougou — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Ouagadougou with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Ouagadougou, Burkina Faso',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Ouagadougou, Burkina Faso. Our Vacuum Leak Test Machine provides essential bubble emission inspection for flexible packaging in Ouagadougou\'s food processing and pharmaceutical sectors.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Ouagadougou, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Burkina Faso and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Ouagadougou, Burkina Faso',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Ouagadougou, Burkina Faso. In Ouagadougou, mining and energy laboratories utilize our vacuum glove box systems to protect moisture-sensitive materials from contamination.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Ouagadougou, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Burkina Faso and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Ouagadougou, Burkina Faso',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Ouagadougou, Burkina Faso. The Burhani Degassing Chamber offers superior vacuum performance for Ouagadougou\'s chemical processing and infrastructure development projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Ouagadougou, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Burkina Faso and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Ouagadougou, Burkina Faso',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Ouagadougou, Burkina Faso. Ensure leak-proof welds in Ouagadougou\'s energy infrastructure and water treatment plants with our advanced NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Ouagadougou, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Burkina Faso and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Ouagadougou, Burkina Faso',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Ouagadougou, Burkina Faso. Ensure packaging perfection in Ouagadougou with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Ouagadougou, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Burkina Faso and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Ouagadougou, Burkina Faso',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Ouagadougou.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Ouagadougou, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampler VC20 Dealer in Ouagadougou, Burkina Faso',
        'desc' => [
            'As a leading <strong>VOC Monitoring Equipment VC20 Supplier</strong> in Ouagadougou, Burkina Faso, we deliver advanced solutions for industrial hygiene. The VC20 air sampling chamber enables environmental consultants in Ouagadougou to collect pristine gas samples without pump cross-contamination.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Burkina Faso choose Burhani for our certified engineering standards. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Ouagadougou, Burkina Faso',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Ouagadougou and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
