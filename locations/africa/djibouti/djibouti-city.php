<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Djibouti City';
$country = 'Djibouti';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Djibouti City, a vital industrial player in Djibouti, is making significant strides in maritime logistics, free-zone manufacturing, and energy tech. Djibouti City is a premier global logistical hub with a focus on international trade. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Djibouti City\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Djibouti City — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Djibouti City with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Djibouti City, Djibouti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Djibouti City, Djibouti. In Djibouti City, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of package integrity and seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Djibouti City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Djibouti and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Djibouti City, Djibouti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Djibouti City, Djibouti. The Burhani Vacuum Glove Box unit offers a sterile environment for pharmaceutical and material evaluation in Djibouti City.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Djibouti City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Djibouti and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Djibouti City, Djibouti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Djibouti City, Djibouti. Eliminate trapped air and bubbles efficiently with our high-standard vacuum degassing equipment, designed for Djibouti City\'s industrial needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Djibouti City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Djibouti and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Djibouti City, Djibouti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Djibouti City, Djibouti. In Djibouti City, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Djibouti City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Djibouti and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Djibouti City, Djibouti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Djibouti City, Djibouti. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Djibouti City\'s packaging industries.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Djibouti City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Djibouti and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Djibouti City, Djibouti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Djibouti City.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Djibouti City, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Odor Investigation Sampler Dealer in Djibouti City, Djibouti',
        'desc' => [
            'For scientific research laboratories and industrial facilities in Djibouti City, Djibouti, we supply certified environmental air monitors. The VC20 supports rigorous environmental field research and VOC collection according to ASTM and EPA standards.',
            'The device operates utilizing the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This laboratory-grade mechanism ensures that the air sample has zero contact with pump components, eliminating carryover.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Djibouti City.'
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
    'title' => 'Supply Vacuum Testing Equipment to Djibouti City, Djibouti',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Djibouti City and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
