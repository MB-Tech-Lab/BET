<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Bellary';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #f97316 0%, #ea580c 100%)';
$intro_p1 = 'Bellary, a vital industrial hub in India, is a major center for steel plants, textiles, and mining services. Bellary is a leading center for steel and textile manufacturing. Burhani Engineering Technology is proud to serve Bellary\'s industrial clusters and manufacturing zones as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Bellary — from vacuum leak testers for packaging industries to weld inspection boxes for oil & gas and steel plants — meets the highest international quality standards. We provide Bellary\'s processing and fabrication industries with the reliability and precision required for world-class industrial automation and quality control.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Bellary, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Bellary, India. The Burhani Vacuum Leak Test unit is engineered for Bellary\'s pharmaceutical and food sectors, providing accurate and rapid leak evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Bellary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Bellary, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Bellary, India. Designed for durability and clarity, our glove boxes serve the specialized needs of Bellary\'s growing industrial clusters.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Bellary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Bellary, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Bellary, India. In Bellary, our degassing chambers are the top choice for material analysis and production in the engineering and pharma sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Bellary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Bellary, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Bellary, India. Our Flat Vacuum Box Weld Testing equipment is essential for API standard inspection of storage tanks and pipelines in Bellary.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Bellary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Bellary, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Bellary, India. In Bellary, clear acrylic vessels are used for submerged leak evaluation of sealed products and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Bellary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Bellary, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Bellary.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Bellary, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Monitoring Equipment Provider in Bellary, India',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Bellary, India, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene and municipal odor monitoring.',
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
    'title' => 'Supply Vacuum Testing Equipment to Bellary, India',
    'desc' => 'Reliable pan-India delivery and technical support for all your vacuum testing requirements in Bellary and across the country.'
];

require_once ABSPATH . 'includes/location-template.php';
