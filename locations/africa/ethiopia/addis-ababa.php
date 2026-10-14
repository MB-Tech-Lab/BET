<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Addis Ababa';
$country = 'Ethiopia';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Addis Ababa, a vital industrial player in Ethiopia, is making significant strides in industrial parks, pharmaceuticals, and automotive assembly. Addis Ababa is a fast-growing hub for large-scale industrial park development. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Addis Ababa\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Addis Ababa — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Addis Ababa with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Addis Ababa, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Addis Ababa, Ethiopia. The Burhani Vacuum Leak Test unit is an indispensable tool for Addis Ababa\'s manufacturing lines, delivering precise testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Addis Ababa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Addis Ababa, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Addis Ababa, Ethiopia. Engineered for durability, our glove boxes serve the specialized needs of Addis Ababa\'s growing high-tech and mining sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Addis Ababa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Addis Ababa, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Addis Ababa, Ethiopia. In Addis Ababa, our degassing chambers are the preferred choice for material analysis and production in the energy and mining sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Addis Ababa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Addis Ababa, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Addis Ababa, Ethiopia. Our Flat Vacuum Box Weld Testing equipment is essential for API standard NDT inspections of oil storage tanks in Addis Ababa.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Addis Ababa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Addis Ababa, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Addis Ababa, Ethiopia. In Addis Ababa, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Addis Ababa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Addis Ababa, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Addis Ababa.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Addis Ababa, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Provider in Addis Ababa, Ethiopia',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Addis Ababa, Ethiopia, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene monitoring and chemical plant air testing.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Ethiopia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'Manufacturer of PCR Chambers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Addis Ababa, Ethiopia',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Addis Ababa and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
