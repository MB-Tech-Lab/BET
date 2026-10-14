<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Ghaziabad';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #f97316 0%, #ea580c 100%)';
$intro_p1 = 'Ghaziabad, a vital industrial hub in India, is a major center for manufacturing, chemicals, and industrial automation. Ghaziabad is a leading industrial hub in Uttar Pradesh within the NCR. Burhani Engineering Technology is proud to serve Ghaziabad\'s industrial clusters and manufacturing zones as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Ghaziabad — from vacuum leak testers for packaging industries to weld inspection boxes for oil & gas and steel plants — meets the highest international quality standards. We provide Ghaziabad\'s processing and fabrication industries with the reliability and precision required for world-class industrial automation and quality control.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Ghaziabad, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Ghaziabad, India. The Burhani Vacuum Leak Test unit is engineered for Ghaziabad\'s pharmaceutical and food sectors, providing accurate and rapid leak evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Ghaziabad, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Ghaziabad, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Ghaziabad, India. Designed for durability and clarity, our glove boxes serve the specialized needs of Ghaziabad\'s growing industrial clusters.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Ghaziabad, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Ghaziabad, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Ghaziabad, India. In Ghaziabad, our degassing chambers are the top choice for material analysis and production in the engineering and pharma sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Ghaziabad, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Ghaziabad, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Ghaziabad, India. Our Flat Vacuum Box Weld Testing equipment is essential for API standard inspection of storage tanks and pipelines in Ghaziabad.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Ghaziabad, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Ghaziabad, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Ghaziabad, India. In Ghaziabad, clear acrylic vessels are used for submerged leak evaluation of sealed products and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Ghaziabad, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Ghaziabad, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Ghaziabad.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Ghaziabad, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Quality Sampling Chamber Manufacturer in Ghaziabad, India',
        'desc' => [
            'For local factories and industrial plants in Ghaziabad, India, we provide high-performance emission samplers. The VC20 ensures secure industrial safety monitoring and environmental testing.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Ghaziabad.'
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
    'title' => 'Supply Vacuum Testing Equipment to Ghaziabad, India',
    'desc' => 'Reliable pan-India delivery and technical support for all your vacuum testing requirements in Ghaziabad and across the country.'
];

require_once ABSPATH . 'includes/location-template.php';
