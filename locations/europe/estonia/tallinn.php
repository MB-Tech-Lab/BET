<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Tallinn';
$country = 'Estonia';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Tallinn, a major center for electronics, wood processing, and high-tech manufacturing in Estonia, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Tallinn is the center of the \'e-Estonia\' industrial digital transformation. Burhani Engineering Technology is proud to serve the Tallinn industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Tallinn with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Tallinn, Estonia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Tallinn, Estonia. In Tallinn, industrial R&D centers utilize our vacuum leak testing unit to perform precise analysis on flexible and rigid packaging across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Tallinn, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Estonia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Tallinn, Estonia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Tallinn, Estonia. Our high-quality glove box unit is engineered for pharmaceutical production in Tallinn, offering total control over atmospheric conditions.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Tallinn, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Estonia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Tallinn, Estonia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Tallinn, Estonia. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, the standard for excellence in Tallinn.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Tallinn, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Estonia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Tallinn, Estonia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Tallinn, Estonia. In Tallinn, our vacuum box weld testing equipment provides instantaneous visual confirmation of weld quality for heavy engineering.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Tallinn, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Estonia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Tallinn, Estonia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Tallinn, Estonia. The Burhani Transparent Vacuum Vessel allows for clear, visual inspection during submersion leak testing in Tallinn\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Tallinn, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Estonia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Tallinn, Estonia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Tallinn.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Tallinn, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Provider in Tallinn, Estonia',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving municipal projects in Tallinn, Estonia. The VC20 gas sampler is engineered to support environmental field testing and air quality research in Tallinn.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Estonia and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Manufacturer of PCR Chambers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Tallinn, Estonia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Tallinn and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
