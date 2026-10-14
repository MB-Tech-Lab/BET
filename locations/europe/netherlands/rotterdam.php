<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Rotterdam';
$country = 'Netherlands';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Rotterdam, a major center for petrochemicals, marine engineering, and logistics in Netherlands, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Rotterdam is home to Europe\'s largest port and a massive petrochemical cluster. Burhani Engineering Technology is proud to serve the Rotterdam industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Rotterdam with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Rotterdam, Netherlands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Rotterdam, Netherlands. Engineered for European industrial standards, our vacuum leak tester delivers reliable results for Rotterdam\'s high-standard industrial testing labs.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Rotterdam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Netherlands and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Rotterdam, Netherlands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Rotterdam, Netherlands. Ensure the safety and integrity of your experiments in Rotterdam with our durable, high-performance vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Rotterdam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Netherlands and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Rotterdam, Netherlands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Rotterdam, Netherlands. Our Vacuum Degassing Chamber is a premier system for resin and polymer processing in Rotterdam\'s precision engineering sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Rotterdam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Netherlands and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Rotterdam, Netherlands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Rotterdam, Netherlands. Perform reliable weld integrity analysis with our portable vacuum box system, a staple for industrial testing in Rotterdam.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Rotterdam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Netherlands and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Rotterdam, Netherlands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Rotterdam, Netherlands. Designed for high-visibility industrial testing, our clear vessels are the preferred choice for Rotterdam\'s R&D centers.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Rotterdam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Netherlands and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Rotterdam, Netherlands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Rotterdam.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Rotterdam, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Gas Collection System Exporter in Rotterdam, Netherlands',
        'desc' => [
            'Burhani Engineering Technology is a premier manufacturer of gas monitoring systems serving industrial research in Rotterdam, Netherlands. The VC20 unit is engineered to support laboratory environmental compliance and industrial VOC monitoring audits.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Netherlands and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Fabrikant van PCR-kamers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Fabrikant van PCR-kamers</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Leverancier van PCR-werkstations</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exporteur van PCR-kamers</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Rotterdam, Netherlands',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Rotterdam and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
