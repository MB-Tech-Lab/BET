<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Kaohsiung';
$country = 'Taiwan';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #2b2d42 0%, #ef233c 100%)';
$intro_p1 = 'Kaohsiung, a major center for steel production, shipbuilding, and petrochemicals in Taiwan, requires advanced technological solutions for high-standard quality assurance. Kaohsiung is Taiwan\'s largest industrial port and heavy manufacturing hub. Burhani Engineering Technology is proud to serve the Kaohsiung industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Kaohsiung — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Kaohsiung with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Kaohsiung, Taiwan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Kaohsiung, Taiwan. In Kaohsiung, industrial production lines rely on our vacuum leak testing equipment to ensure the highest standards of package integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Kaohsiung, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Taiwan and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Kaohsiung, Taiwan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Kaohsiung, Taiwan. The Burhani Vacuum Glove Box unit offers a contamination-free workspace for Kaohsiung\'s pharmaceutical and high-tech industries.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Kaohsiung, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Taiwan and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Kaohsiung, Taiwan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Kaohsiung, Taiwan. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, designed for Kaohsiung\'s diverse material needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Kaohsiung, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Taiwan and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Kaohsiung, Taiwan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Kaohsiung, Taiwan. In Kaohsiung, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Kaohsiung, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Taiwan and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Kaohsiung, Taiwan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Kaohsiung, Taiwan. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Kaohsiung\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Kaohsiung, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Taiwan and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Kaohsiung, Taiwan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Kaohsiung.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Kaohsiung, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Air Collector Provider in Kaohsiung, Taiwan',
        'desc' => [
            'As a leading supplier of advanced test equipment in Kaohsiung, Taiwan, we deliver the VC20 monitoring system. This instrumentation is designed specifically for industrial VOC testing and air purity verification programs in Kaohsiung.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Taiwan choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Kaohsiung, Taiwan',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Kaohsiung and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
