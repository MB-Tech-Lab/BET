<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Paradeep';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #f97316 0%, #ea580c 100%)';
$intro_p1 = 'Paradeep, a vital industrial hub in India, is a major center for petrochemicals, petroleum refining, and maritime logistics. Paradeep is a major industrial port and energy hub in Odisha. Burhani Engineering Technology is proud to serve Paradeep\'s industrial clusters and manufacturing zones as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Paradeep — from vacuum leak testers for packaging industries to weld inspection boxes for oil & gas and steel plants — meets the highest international quality standards. We provide Paradeep\'s processing and fabrication industries with the reliability and precision required for world-class industrial automation and quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Paradeep, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Paradeep, India. In Paradeep, industrial production lines rely on our vacuum leak testing equipment to maintain the highest standards of package seal integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Paradeep, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Paradeep, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Paradeep, India. The Burhani Vacuum Glove Box offers a sterile workspace for Paradeep\'s electronics and pharmaceutical manufacturing sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Paradeep, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Paradeep, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Paradeep, India. Eliminate trapped air efficiently with our high-performance vacuum degassing equipment, tailored for Paradeep\'s industrial needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Paradeep, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Paradeep, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Paradeep, India. In Paradeep, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Paradeep, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Paradeep, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Paradeep, India. Our Transparent Vacuum and Pressure Vessel allows for full visual inspection during immersion leak testing in Paradeep\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Paradeep, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Paradeep, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Paradeep.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Paradeep, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Collection System Supplier in Paradeep, India',
        'desc' => [
            'Our company manufactures state-of-the-art environmental sampling equipment, designed for municipal odor control audits in Paradeep, India. The VC20 unit delivers reliable hazardous vapor sampling with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Paradeep. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Paradeep, India',
    'desc' => 'Reliable pan-India delivery and technical support for all your vacuum testing requirements in Paradeep and across the country.'
];

require_once ABSPATH . 'includes/location-template.php';
