<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Montevideo';
$country = 'Uruguay';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Montevideo, Uruguay\'s capital and South America\'s leading port city, is the logistical backbone of a country whose export economy is dominated by meat processing, agricultural products, and an increasingly sophisticated pharmaceutical manufacturing sector. Burhani Engineering Technology serves Montevideo\'s industrial community as a manufacturer, supplier, exporter, importer, and dealer of vacuum testing systems.';
$intro_p2 = 'Uruguay\'s food and pharmaceutical industries demand the highest standards of packaging integrity and sterile barrier verification. Burhani Engineering Technology\'s Vacuum Leak Test Machines, transparent vacuum vessels, and vacuum glove boxes provide Montevideo\'s manufacturers with the tools to achieve zero-defect quality assurance across their production lines.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Montevideo, Uruguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Montevideo, Uruguay. Burhani\'s vacuum leak detection system uses controlled internal pressurization to identify gross seal failures in medical and food packaging — an essential instrument for Montevideo\'s sterile barrier and food-grade manufacturing operations.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Montevideo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Uruguay and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Montevideo, Uruguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Montevideo, Uruguay. Our vacuum glove box unit maintains a controlled inert atmosphere for precision applications in battery material research, pharmaceutical synthesis, and high-purity manufacturing processes that are critical to Montevideo\'s industrial sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Montevideo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Uruguay and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Montevideo, Uruguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Montevideo, Uruguay. Vacuum degassing with the Burhani chamber ensures bubble-free castings, void-free resin infusions, and contamination-free material batches — critical for Montevideo\'s composite manufacturing, food packaging, and specialty chemical producers.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Montevideo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Uruguay and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Montevideo, Uruguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Montevideo, Uruguay. The Burhani vacuum box NDT system provides a safe, portable, and accurate method for detecting weld discontinuities in Montevideo\'s industrial structures, reducing the risk of catastrophic failures in storage tanks and pressurized pipelines.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Montevideo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Uruguay and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Montevideo, Uruguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Montevideo, Uruguay. Burhani\'s transparent vacuum and pressure vessel provides full optical visibility during leak immersion testing, making it the preferred solution for Montevideo\'s food packaging manufacturers, pharmaceutical producers, and industrial quality labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Montevideo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Uruguay and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Montevideo, Uruguay',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Montevideo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Montevideo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Collection Device Exporter in Montevideo, Uruguay',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving mining projects in Montevideo, Uruguay. The VC20 gas sampler is engineered to support mining emissions testing and laboratory gas analysis in Montevideo.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Uruguay and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Montevideo, Uruguay',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Montevideo or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
