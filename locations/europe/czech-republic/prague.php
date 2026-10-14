<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Prague';
$country = 'Czech Republic';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Prague, a major center for automotive manufacturing, precision engineering, and aerospace in Czech Republic, demands high-standard industrial testing to ensure the reliability of its manufacturing output. The Czech Republic is an industrial powerhouse with a long tradition in machinery and transport. Burhani Engineering Technology is proud to serve the Prague industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Prague with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Prague, Czech Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Prague, Czech Republic. Optimize your production line in Prague with our high-performance vacuum leak test machine, designed for precision testing and analysis.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Prague, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Czech Republic and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Prague, Czech Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Prague, Czech Republic. The Burhani Vacuum Glove Box provides a sterile, inert atmosphere for advanced aerospace systems and research labs in Prague.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Prague, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Czech Republic and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Prague, Czech Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Prague, Czech Republic. Used by leading automotive plants in Prague, our degassing unit ensures void-free material casting and high-standard industrial testing.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Prague, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Czech Republic and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Prague, Czech Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Prague, Czech Republic. The Burhani Vacuum Weld Tester is engineered for speed and precision in Prague\'s aerospace and petrochemical plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Prague, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Czech Republic and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Prague, Czech Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Prague, Czech Republic. Engineered to withstand extreme pressures and vacuums, our transparent vessels serve the aerospace systems of Prague.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Prague, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Czech Republic and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Prague, Czech Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Prague.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Prague, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Manufacturer in Prague, Czech Republic',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of heavy industrial testing systems serving production zones in Prague, Czech Republic. The VC20 sampler is designed for manufacturing gas testing and industrial safety audits in Prague.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Czech Republic and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Výrobce PCR komor v ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Výrobce PCR komor</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Dodavatel PCR pracovních stanic</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Vývozce PCR komor</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Prague, Czech Republic',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Prague and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
