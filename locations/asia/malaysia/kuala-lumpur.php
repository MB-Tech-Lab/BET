<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Kuala Lumpur';
$country = 'Malaysia';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #003049 0%, #d62828 100%)';
$intro_p1 = 'Kuala Lumpur, a major center for manufacturing industries, pharma industries, and packaging plants in Malaysia, requires advanced technological solutions for high-standard quality assurance. Kuala Lumpur is a premier center for manufacturing and pharmaceutical production in SE Asia. Burhani Engineering Technology is proud to serve the Kuala Lumpur industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Kuala Lumpur — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Kuala Lumpur with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Kuala Lumpur, Malaysia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Kuala Lumpur, Malaysia. Protect your production quality in Kuala Lumpur with our reliable bubble emission leak tester, a standard in modern packaging plants.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Kuala Lumpur, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malaysia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Kuala Lumpur, Malaysia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Kuala Lumpur, Malaysia. Our Vacuum Glove Box provides a controlled inert atmosphere for advanced laboratory testing and research in Kuala Lumpur.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Kuala Lumpur, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malaysia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Kuala Lumpur, Malaysia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Kuala Lumpur, Malaysia. Used extensively in Kuala Lumpur\'s industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Kuala Lumpur, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malaysia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Kuala Lumpur, Malaysia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Kuala Lumpur, Malaysia. The Burhani Vacuum Weld Tester is engineered for field use in Kuala Lumpur\'s oil & gas and heavy manufacturing sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Kuala Lumpur, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malaysia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Kuala Lumpur, Malaysia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Kuala Lumpur, Malaysia. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Kuala Lumpur\'s automotive testing facilities.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Kuala Lumpur, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malaysia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Kuala Lumpur, Malaysia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Kuala Lumpur.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Kuala Lumpur, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Collection System Exporter in Kuala Lumpur, Malaysia',
        'desc' => [
            'For manufacturing plants, municipal facilities, and environmental engineers in Kuala Lumpur, Malaysia, we supply certified environmental gas monitors. The VC20 supports high-accuracy emissions collection and odor monitoring.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Kuala Lumpur.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Pengeluar Kebuk PCR di ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Pengeluar Kebuk PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Pembekal Stesen Kerja PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Pengeksport Kebuk PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Kuala Lumpur, Malaysia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Kuala Lumpur and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
