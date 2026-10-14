<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Shenzhen';
$country = 'China';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #2b2d42 0%, #ef233c 100%)';
$intro_p1 = 'Shenzhen, a major center for electronics manufacturing, high-tech R&D, and precision engineering in China, requires advanced technological solutions for high-standard quality assurance. Shenzhen is the world\'s leading hub for electronics innovation and advanced manufacturing. Burhani Engineering Technology is proud to serve the Shenzhen industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Shenzhen — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Shenzhen with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Shenzhen, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Shenzhen, China. Our Vacuum Leak Test Machine is a vital inspection unit for Shenzhen\'s packaging plants, providing bubble leak detection across multiple ASTM methods.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Shenzhen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Shenzhen, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Shenzhen, China. In Shenzhen, precision engineering facilities utilize our vacuum glove box systems to handle sensitive electronics and materials.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Shenzhen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Shenzhen, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Shenzhen, China. The Burhani Degassing Chamber offers superior vacuum performance for Shenzhen\'s chemical processing and precision engineering projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Shenzhen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Shenzhen, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Shenzhen, China. Ensure leak-proof welds in Shenzhen\'s energy infrastructure and storage tanks with our advanced NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Shenzhen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Shenzhen, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Shenzhen, China. Ensure packaging perfection in Shenzhen with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Shenzhen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across China and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Shenzhen, China',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Shenzhen.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Shenzhen, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Monitoring Unit Manufacturer in Shenzhen, China',
        'desc' => [
            'For scientific laboratories and high-technology manufacturing centers in Shenzhen, China, we supply certified VOC testing equipment. The VC20 ensures reliable, secure air and gas sample collection with complete precision.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Shenzhen.'
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
    'title' => 'Supply Vacuum Testing Equipment to Shenzhen, China',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Shenzhen and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
