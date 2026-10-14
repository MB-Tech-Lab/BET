<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Asuncion';
$country = 'Paraguay';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Asunción, Paraguay\'s capital and economic heartland, is the centre of a country undergoing rapid industrial transformation driven by agro-industrial processing, soybean export logistics, and hydroelectric energy. Burhani Engineering Technology delivers vacuum testing solutions to Asunción\'s industrial sector as a manufacturer, supplier, exporter, importer, and dealer.';
$intro_p2 = 'Paraguay\'s growing food processing and agro-industrial export sector demands rigorous packaging integrity verification and sterile barrier testing. Burhani Engineering Technology provides ASTM-certified vacuum leak testing machines, degassing systems, and weld inspection equipment designed to meet the standards of Asunción\'s expanding industries.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Asuncion, Paraguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Asuncion, Paraguay. The internal pressurization bubble leak tester provides real-time, visible confirmation of packaging seal integrity — critical for Asuncion\'s food processing plants and pharmaceutical manufacturers aiming for zero-defect output.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Asuncion, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Paraguay and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Asuncion, Paraguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Asuncion, Paraguay. The Burhani vacuum glove box system combines robust acrylic construction with airtight glove ports and integrated vacuum fittings, providing Asuncion\'s industrial users with a reliable controlled-atmosphere workspace for sensitive operations.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Asuncion, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Paraguay and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Asuncion, Paraguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Asuncion, Paraguay. The Burhani Vacuum Degassing Chamber efficiently removes dissolved gases and air inclusions from resins, silicones, and polymers — an essential process control tool for Asuncion\'s composite materials, mining, and chemical processing industries.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Asuncion, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Paraguay and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Asuncion, Paraguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Asuncion, Paraguay. Our portable vacuum box weld tester enables field-deployable, non-destructive weld integrity inspection for flat surface butt welds in Asuncion\'s infrastructure projects, petrochemical plants, and marine fabrication yards.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Asuncion, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Paraguay and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Asuncion, Paraguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Asuncion, Paraguay. Our clear-walled vacuum vessel system combines ease of operation with highly visible leak detection, allowing operators in Asuncion\'s industrial and laboratory settings to perform accurate, repeatable package integrity testing.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Asuncion, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Paraguay and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Asuncion, Paraguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Asuncion.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Asuncion, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Collection Device Exporter in Asuncion, Paraguay',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of environmental test systems serving energy zones in Asuncion, Paraguay. The VC20 sampling chamber provides a reliable, airtight boundary for oil & gas field air sampling and refinery emissions control in Asuncion.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Paraguay and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Fabricante de cámaras PCR en ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Fabricante de cámaras PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Proveedor de estaciones de trabajo PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exportador de cámaras PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Asuncion, Paraguay',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Asuncion or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
