<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Funafuti';
$country = 'Tuvalu';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Funafuti, the small yet strategically important capital of Tuvalu, supports a fishing and marine logistics economy where equipment reliability is essential. Burhani Engineering Technology extends its services to Funafuti as a global manufacturer, supplier, exporter, importer, and dealer of reliable vacuum testing instruments.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of fishing industry, marine logistics, food import packaging, and climate-resilient infrastructure requirements in Funafuti.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Funafuti, Tuvalu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Funafuti, Tuvalu. In Funafuti, Tuvalu, the need for precise packaging leak detection is critical in food processing and pharmaceutical logistics chains. This vacuum pressurization system from Burhani Engineering Technology verifies seal integrity across a broad range of flexible containers, ensuring products reach international markets in perfect condition.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Funafuti, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tuvalu and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Funafuti, Tuvalu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Funafuti, Tuvalu. Research institutes and specialty manufacturers in Funafuti, Tuvalu use the Burhani Vacuum Glove Box to create ultra-clean working environments. Built with impact-resistant cast acrylic and engineered for ease of integration into existing laboratory workflows, this system meets international standards for inert-atmosphere workstations.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Funafuti, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tuvalu and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Funafuti, Tuvalu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Funafuti, Tuvalu. The Burhani Vacuum Degassing Chamber eliminates entrapped air bubbles from resins, silicones, epoxies, and adhesives used in Funafuti\'s manufacturing and composite fabrication sectors. By achieving vacuum levels down to 0.1 Torr, the chamber ensures bubble-free molds and castings with superior surface finish and structural integrity.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Funafuti, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tuvalu and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Funafuti, Tuvalu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Funafuti, Tuvalu. In Funafuti, Tuvalu, structural steel fabrication yards and pipeline contractors rely on the Burhani flat vacuum box system to perform in-situ weld integrity tests per international NDT standards. The transparent acrylic base provides clear visual confirmation of bubble formation, enabling immediate identification and repair of defective welds.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Funafuti, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tuvalu and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Funafuti, Tuvalu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Funafuti, Tuvalu. Burhani Engineering Technology\'s clear acrylic pressure vessel enables Funafuti-based quality control teams to perform ASTM D3078 and related bubble emission tests on sealed packaging without requiring specialized infrastructure. The overflow safety tank provision and built-in drain valve make routine testing clean and efficient.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Funafuti, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tuvalu and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Funafuti, Tuvalu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Funafuti.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Funafuti, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Air Collection Device Supplier in Funafuti, Tuvalu',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving environmental projects in Funafuti, Tuvalu. The VC20 gas sampler is engineered to support environmental field sampling and coastal environmental air monitoring in Funafuti.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Tuvalu and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Funafuti, Tuvalu',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Funafuti or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
