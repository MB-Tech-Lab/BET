<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Thiruvananthapuram';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #f97316 0%, #ea580c 100%)';
$intro_p1 = 'Thiruvananthapuram, a vital industrial hub in India, is a major center for aerospace, electronics, and manufacturing. Thiruvananthapuram is a major center for aerospace and electronics in Kerala. Burhani Engineering Technology is proud to serve Thiruvananthapuram\'s industrial clusters and manufacturing zones as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Thiruvananthapuram — from vacuum leak testers for packaging industries to weld inspection boxes for oil & gas and steel plants — meets the highest international quality standards. We provide Thiruvananthapuram\'s processing and fabrication industries with the reliability and precision required for world-class industrial automation and quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Thiruvananthapuram, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Thiruvananthapuram, India. Ensure product safety in Thiruvananthapuram with our professional bubble leak tester, a standard for manufacturing and processing plants across India.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Thiruvananthapuram, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Thiruvananthapuram, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Thiruvananthapuram, India. Our Vacuum Glove Box provides a controlled inert environment for advanced R&D and chemical handling in Thiruvananthapuram\'s industrial laboratories.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Thiruvananthapuram, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Thiruvananthapuram, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Thiruvananthapuram, India. Used extensively in Thiruvananthapuram\'s industrial plants, our degassing unit ensures high-purity material evaluation and bubble-free batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Thiruvananthapuram, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Thiruvananthapuram, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Thiruvananthapuram, India. The Burhani Vacuum Weld Tester is engineered for field use in Thiruvananthapuram\'s heavy manufacturing and steel plant operations.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Thiruvananthapuram, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Thiruvananthapuram, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Thiruvananthapuram, India. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Thiruvananthapuram\'s industrial automation labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Thiruvananthapuram, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Thiruvananthapuram, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Thiruvananthapuram.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Thiruvananthapuram, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Monitoring Equipment Provider in Thiruvananthapuram, India',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Thiruvananthapuram, India, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene and municipal odor monitoring.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in India choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Thiruvananthapuram, India',
    'desc' => 'Reliable pan-India delivery and technical support for all your vacuum testing requirements in Thiruvananthapuram and across the country.'
];

require_once ABSPATH . 'includes/location-template.php';
