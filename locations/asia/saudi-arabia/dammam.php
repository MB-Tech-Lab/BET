<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Dammam';
$country = 'Saudi Arabia';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #1d3557 0%, #e63946 100%)';
$intro_p1 = 'Dammam, a major center for oil & gas, petrochemical plants, and maritime logistics in Saudi Arabia, requires advanced technological solutions for high-standard quality assurance. Dammam is the premier industrial hub for the Saudi energy and chemical sectors. Burhani Engineering Technology is proud to serve the Dammam industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Dammam — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Dammam with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Dammam, Saudi Arabia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Dammam, Saudi Arabia. Protect your production quality in Dammam with our reliable bubble emission leak tester, a standard in modern packaging plants.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Dammam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Saudi Arabia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Dammam, Saudi Arabia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Dammam, Saudi Arabia. Our Vacuum Glove Box provides a controlled inert atmosphere for advanced laboratory testing and research in Dammam.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Dammam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Saudi Arabia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Dammam, Saudi Arabia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Dammam, Saudi Arabia. Used extensively in Dammam\'s industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Dammam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Saudi Arabia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Dammam, Saudi Arabia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Dammam, Saudi Arabia. The Burhani Vacuum Weld Tester is engineered for field use in Dammam\'s oil & gas and heavy manufacturing sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Dammam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Saudi Arabia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Dammam, Saudi Arabia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Dammam, Saudi Arabia. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Dammam\'s automotive testing facilities.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Dammam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Saudi Arabia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Dammam, Saudi Arabia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Dammam.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Dammam, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Supplier in Dammam, Saudi Arabia',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in Dammam, Saudi Arabia, we provide the VC20 sampling chamber. This instrumentation is developed specifically for petrochemical air monitoring and hazardous gas testing operations in Dammam.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Saudi Arabia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Dammam, Saudi Arabia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Dammam and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
