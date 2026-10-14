<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Damascus';
$country = 'Syria';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #1d3557 0%, #e63946 100%)';
$intro_p1 = 'Damascus, a major center for pharmaceuticals, textiles, and food processing in Syria, requires advanced technological solutions for high-standard quality assurance. Damascus is the historic and industrial core of Syria. Burhani Engineering Technology is proud to serve the Damascus industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Damascus — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Damascus with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Damascus, Syria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Damascus, Syria. Protect your production quality in Damascus with our reliable bubble emission leak tester, a standard in modern packaging plants.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Damascus, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Syria and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Damascus, Syria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Damascus, Syria. Our Vacuum Glove Box provides a controlled inert atmosphere for advanced laboratory testing and research in Damascus.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Damascus, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Syria and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Damascus, Syria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Damascus, Syria. Used extensively in Damascus\'s industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Damascus, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Syria and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Damascus, Syria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Damascus, Syria. The Burhani Vacuum Weld Tester is engineered for field use in Damascus\'s oil & gas and heavy manufacturing sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Damascus, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Syria and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Damascus, Syria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Damascus, Syria. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Damascus\'s automotive testing facilities.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Damascus, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Syria and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Damascus, Syria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Damascus.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Damascus, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Sample Collection System Exporter in Damascus, Syria',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of high-precision gas monitoring systems serving petrochemical facilities in Damascus, Syria. The VC20 unit is engineered to support industrial gas compliance and refinery vapor sampling audits in Damascus.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Syria and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'الشركة المصنعة لغرف PCR في ' . $city . '، ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>مصنعي غرف PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>مورد محطات عمل PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>مصدر غرف PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Damascus, Syria',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Damascus and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
