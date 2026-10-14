<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Vilnius';
$country = 'Lithuania';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Vilnius, a major center for biotechnology, lasers, and precision manufacturing in Lithuania, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Vilnius is world-renowned for its laser technology and biotech industrial sectors. Burhani Engineering Technology is proud to serve the Vilnius industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Vilnius with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Vilnius, Lithuania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Vilnius, Lithuania. In Vilnius, industrial R&D centers utilize our vacuum leak testing unit to perform precise analysis on flexible and rigid packaging across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Vilnius, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Lithuania and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Vilnius, Lithuania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Vilnius, Lithuania. Our high-quality glove box unit is engineered for pharmaceutical production in Vilnius, offering total control over atmospheric conditions.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Vilnius, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Lithuania and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Vilnius, Lithuania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Vilnius, Lithuania. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, the standard for excellence in Vilnius.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Vilnius, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Lithuania and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Vilnius, Lithuania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Vilnius, Lithuania. In Vilnius, our vacuum box weld testing equipment provides instantaneous visual confirmation of weld quality for heavy engineering.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Vilnius, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Lithuania and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Vilnius, Lithuania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Vilnius, Lithuania. The Burhani Transparent Vacuum Vessel allows for clear, visual inspection during submersion leak testing in Vilnius\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Vilnius, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Lithuania and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Vilnius, Lithuania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Vilnius.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Vilnius, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Provider in Vilnius, Lithuania',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving municipal projects in Vilnius, Lithuania. The VC20 gas sampler is engineered to support environmental field testing and air quality research in Vilnius.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Lithuania and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Vilnius, Lithuania',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Vilnius and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
