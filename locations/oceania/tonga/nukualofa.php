<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Nuku\'alofa';
$country = 'Tonga';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Nuku\'alofa, the compact capital of the Kingdom of Tonga, anchors a fisheries-oriented and food processing economy where packaging seal integrity is paramount. Burhani Engineering Technology proudly services Nuku\'alofa as a dependable manufacturer, importer, exporter, supplier, and dealer of vacuum and pressure testing instruments.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of fisheries, food processing, beverage manufacturing, and building construction requirements in Nuku\'alofa.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Nuku\'alofa, Tonga',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Nuku\'alofa, Tonga. Burhani Engineering Technology\'s Vacuum Leak Test Machine delivers fast, accurate results for packaging integrity verification in Nuku\'alofa\'s growing industrial and export sectors. The system supports both Method A and Method B testing protocols, making it versatile for diverse production environments.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Nuku\'alofa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tonga and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Nuku\'alofa, Tonga',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Nuku\'alofa, Tonga. Burhani Engineering Technology\'s acrylic vacuum glove box enables Nuku\'alofa-based researchers and technicians to handle sensitised materials, lithium-ion battery components, and fine chemicals without exposure to moisture or oxygen. The unit features an integrated vacuum gauge, dual ball valves, and a durable silicone gasket for long-term airtight performance.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Nuku\'alofa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tonga and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Nuku\'alofa, Tonga',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Nuku\'alofa, Tonga. In Nuku\'alofa, Tonga, the Burhani Heated Vacuum Degassing Chamber adds temperature control to the standard degassing process, allowing users to work with high-viscosity polymers and slow-curing compounds. This stainless-steel heating variant is ideal for industrial composite and electronics encapsulation applications.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Nuku\'alofa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tonga and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Nuku\'alofa, Tonga',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Nuku\'alofa, Tonga. Burhani Engineering Technology\'s Flat Vacuum Box Weld Testing Equipment is a critical tool for verifying weld integrity in storage tanks, pressure vessels, and pipelines across Nuku\'alofa\'s oil & gas, water treatment, and marine infrastructure projects. The soapy solution applied to welds forms bubbles at defect points when vacuum is applied through the box.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Nuku\'alofa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tonga and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Nuku\'alofa, Tonga',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Nuku\'alofa, Tonga. Beverage bottlers, food processors, and pharmaceutical packagers in Nuku\'alofa, Tonga use the Burhani transparent pressure vessel to verify closure integrity and detect even the smallest pinholes in flexible packaging. The unit supports both vacuum and over-pressure test modes, providing versatility for diverse packaging formats.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Nuku\'alofa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tonga and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Nuku\'alofa, Tonga',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Nuku\'alofa.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Nuku\'alofa, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampling Unit Exporter in Nuku\, Tonga',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving environmental projects in Nuku\, Tonga. The VC20 gas sampler is engineered to support environmental field sampling and coastal environmental air monitoring in Nuku\.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Tonga and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Nuku\'alofa, Tonga',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Nuku\'alofa or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
