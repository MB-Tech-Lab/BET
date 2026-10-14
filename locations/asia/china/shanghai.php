<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Shanghai';
$country = 'China';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #2b2d42 0%, #ef233c 100%)';
$intro_p1 = 'Shanghai, a major center for precision engineering, electronics manufacturing, and automotive sector in China, requires advanced technological solutions for high-standard quality assurance. Shanghai is a premier global industrial capital with a massive electronics and automotive base. Burhani Engineering Technology is proud to serve the Shanghai industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Shanghai — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Shanghai with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Shanghai, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Shanghai, China. Protect your production quality in Shanghai with our reliable bubble emission leak tester, a standard in modern packaging plants.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Shanghai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Shanghai, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Shanghai, China. Our Vacuum Glove Box provides a controlled inert atmosphere for advanced laboratory testing and research in Shanghai.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Shanghai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Shanghai, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Shanghai, China. Used extensively in Shanghai\'s industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Shanghai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Shanghai, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Shanghai, China. The Burhani Vacuum Weld Tester is engineered for field use in Shanghai\'s oil & gas and heavy manufacturing sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Shanghai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Shanghai, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Shanghai, China. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Shanghai\'s automotive testing facilities.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Shanghai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Shanghai, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Shanghai.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Shanghai, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Air Collector Provider in Shanghai, China',
        'desc' => [
            'As a leading supplier of advanced test equipment in Shanghai, China, we deliver the VC20 monitoring system. This instrumentation is designed specifically for industrial VOC testing and air purity verification programs in Shanghai.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in China choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'PCR 实验室操作台制造商位于 ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR 实验室操作台制造商</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR 工作站供应商</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR 实验室操作台出口商</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Shanghai, China',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Shanghai and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
