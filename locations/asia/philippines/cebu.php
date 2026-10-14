<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Cebu';
$country = 'Philippines';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #003049 0%, #d62828 100%)';
$intro_p1 = 'Cebu, a major center for shipbuilding, electronics, and food processing in Philippines, requires advanced technological solutions for high-standard quality assurance. Cebu is a major industrial hub for the Visayas region and a key export gateway. Burhani Engineering Technology is proud to serve the Cebu industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Cebu — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Cebu with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Cebu, Philippines',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Cebu, Philippines. In Cebu, industrial production lines rely on our vacuum leak testing equipment to ensure the highest standards of package integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Cebu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Philippines and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Cebu, Philippines',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Cebu, Philippines. The Burhani Vacuum Glove Box unit offers a contamination-free workspace for Cebu\'s pharmaceutical and high-tech industries.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Cebu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Philippines and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Cebu, Philippines',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Cebu, Philippines. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, designed for Cebu\'s diverse material needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Cebu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Philippines and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Cebu, Philippines',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Cebu, Philippines. In Cebu, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Cebu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Philippines and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Cebu, Philippines',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Cebu, Philippines. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Cebu\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Cebu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Philippines and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Cebu, Philippines',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Cebu.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Cebu, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Monitoring Unit Manufacturer in Cebu, Philippines',
        'desc' => [
            'For manufacturing plants, municipal facilities, and environmental engineers in Cebu, Philippines, we supply certified environmental gas monitors. The VC20 supports high-accuracy emissions collection and odor monitoring.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Cebu.'
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
    'title' => 'Supply Vacuum Testing Equipment to Cebu, Philippines',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Cebu and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
