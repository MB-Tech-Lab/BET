<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Caracas';
$country = 'Venezuela';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Caracas, Venezuela\'s capital, sits at the centre of one of the world\'s largest proven petroleum reserve economies, with extensive downstream petroleum refining, heavy crude upgrading, and petrochemical processing operations. Burhani Engineering Technology serves Caracas\'s industrial operators as a manufacturer, supplier, exporter, importer, and dealer of precision vacuum testing equipment.';
$intro_p2 = 'Venezuela\'s extensive petroleum and petrochemical infrastructure demands vacuum testing systems capable of meeting international NDT standards for pipeline weld integrity, vessel leak detection, and process quality assurance. Burhani Engineering Technology\'s certified product portfolio addresses each of these requirements with reliable, field-proven equipment.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Caracas, Venezuela',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Caracas, Venezuela. Our bubble emission leak test unit is engineered for multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653, delivering reliable gross-leak detection for flexible packaging operations in Caracas\'s pharmaceutical, food, and industrial packaging sectors.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Caracas, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Venezuela and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Caracas, Venezuela',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Caracas, Venezuela. Engineered for both single- and multi-port configurations, the Burhani vacuum glove box delivers a sealed, oxygen-depleted working environment for Caracas\'s chemical industry, research institutions, and electronics manufacturers.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Caracas, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Venezuela and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Caracas, Venezuela',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Caracas, Venezuela. The Burhani acrylic vacuum degassing unit provides full visibility of the degassing process, enabling operators in Caracas\'s industrial facilities to precisely control vacuum levels and processing times for repeatable, high-quality results.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Caracas, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Venezuela and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Caracas, Venezuela',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Caracas, Venezuela. The Burhani flat-bottom vacuum box performs API 650/653-compliant NDT bubble leak testing on tank floor welds, pipeline joints, and structural seams — a critical tool for Caracas\'s oil & gas storage tank fabrication and maintenance operations.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Caracas, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Venezuela and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Caracas, Venezuela',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Caracas, Venezuela. The acrylic transparent pressure vessel from Burhani Engineering Technology enables submersion-based leak detection for sealed packages, sachets, and containers — a reliable quality assurance tool for Caracas\'s food and beverage export industry.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Caracas, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Venezuela and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Caracas, Venezuela',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Caracas.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Caracas, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Sampling Equipment Exporter in Caracas, Venezuela',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of environmental test systems serving energy zones in Caracas, Venezuela. The VC20 sampling chamber provides a reliable, airtight boundary for oil & gas field air sampling and refinery emissions control in Caracas.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Venezuela and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Caracas, Venezuela',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Caracas or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
