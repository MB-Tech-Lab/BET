<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Muscat';
$country = 'Oman';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #1d3557 0%, #e63946 100%)';
$intro_p1 = 'Muscat, a major center for oil & gas, petrochemical plants, and maritime logistics in Oman, requires advanced technological solutions for high-standard quality assurance. Muscat anchors Oman\'s energy sector and its strategic maritime position. Burhani Engineering Technology is proud to serve the Muscat industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Muscat — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Muscat with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Muscat, Oman',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Muscat, Oman. In Muscat, industrial production lines rely on our vacuum leak testing equipment to ensure the highest standards of package integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Muscat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Oman and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Muscat, Oman',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Muscat, Oman. The Burhani Vacuum Glove Box unit offers a contamination-free workspace for Muscat\'s pharmaceutical and high-tech industries.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Muscat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Oman and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Muscat, Oman',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Muscat, Oman. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, designed for Muscat\'s diverse material needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Muscat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Oman and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Muscat, Oman',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Muscat, Oman. In Muscat, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Muscat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Oman and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Muscat, Oman',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Muscat, Oman. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Muscat\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Muscat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Oman and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Muscat, Oman',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Muscat.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Muscat, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Air Collector Provider in Muscat, Oman',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in Muscat, Oman, we provide the VC20 sampling chamber. This instrumentation is developed specifically for petrochemical air monitoring and hazardous gas testing operations in Muscat.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Oman choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Muscat, Oman',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Muscat and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
