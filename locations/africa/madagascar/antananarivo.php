<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Antananarivo';
$country = 'Madagascar';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Antananarivo, a vital industrial player in Madagascar, is making significant strides in textiles, food processing, and mining services. Antananarivo is the industrial core of Madagascar. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Antananarivo\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Antananarivo — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Antananarivo with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Antananarivo, Madagascar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Antananarivo, Madagascar. In Antananarivo, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of package integrity and seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Antananarivo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Madagascar and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Antananarivo, Madagascar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Antananarivo, Madagascar. The Burhani Vacuum Glove Box unit offers a sterile environment for pharmaceutical and material evaluation in Antananarivo.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Antananarivo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Madagascar and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Antananarivo, Madagascar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Antananarivo, Madagascar. Eliminate trapped air and bubbles efficiently with our high-standard vacuum degassing equipment, designed for Antananarivo\'s industrial needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Antananarivo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Madagascar and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Antananarivo, Madagascar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Antananarivo, Madagascar. In Antananarivo, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Antananarivo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Madagascar and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Antananarivo, Madagascar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Antananarivo, Madagascar. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Antananarivo\'s packaging industries.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Antananarivo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Madagascar and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Antananarivo, Madagascar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Antananarivo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Antananarivo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Environmental Gas Collector Exporter in Antananarivo, Madagascar',
        'desc' => [
            'Burhani Engineering Technology is a leading supplier of heavy industrial gas monitoring instrumentation serving sectors in Antananarivo, Madagascar. Designed for robust mining sector gas analysis and oil & gas field air sampling, the VC20 delivers rugged reliability.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Madagascar and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Antananarivo, Madagascar',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Antananarivo and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
