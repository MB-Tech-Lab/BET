<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Agra';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #f97316 0%, #ea580c 100%)';
$intro_p1 = 'Agra, a vital industrial hub in India, is a major center for manufacturing, leather, and food processing. Agra is an important industrial and commercial city in Uttar Pradesh. Burhani Engineering Technology is proud to serve Agra\'s industrial clusters and manufacturing zones as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Agra — from vacuum leak testers for packaging industries to weld inspection boxes for oil & gas and steel plants — meets the highest international quality standards. We provide Agra\'s processing and fabrication industries with the reliability and precision required for world-class industrial automation and quality control.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Agra, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Agra, India. Our Vacuum Leak Test Machine is a critical inspection system for Agra\'s packaging industries, offering testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Agra, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Agra, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Agra, India. In Agra, precision engineering and pharma facilities utilize our vacuum glove box systems to prevent material contamination.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Agra, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Agra, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Agra, India. The Burhani Degassing Chamber offers superior vacuum performance for Agra\'s chemical processing and industrial automation projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Agra, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Agra, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Agra, India. Ensure leak-proof welds in Agra\'s industrial plants and energy infrastructure with our professional NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Agra, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Agra, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Agra, India. Ensure packaging excellence in Agra with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Agra, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Agra, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Agra.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Agra, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Quality Sampling Chamber Manufacturer in Agra, India',
        'desc' => [
            'For scientific research laboratories and industrial facilities in Agra, India, we supply certified environmental air monitors. The VC20 supports rigorous environmental field research and VOC collection.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Agra.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'पीसीआर चैंबर निर्माता ' . $city . ', ' . $country . ' में',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>पीसीआर चैंबर निर्माता</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>पीसीआर वर्कस्टेशन आपूर्तिकर्ता</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>पीसीआर चैंबर निर्यातक</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Agra, India',
    'desc' => 'Reliable pan-India delivery and technical support for all your vacuum testing requirements in Agra and across the country.'
];

require_once ABSPATH . 'includes/location-template.php';
