<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Auckland';
$country = 'New Zealand';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Auckland, New Zealand\'s largest city and economic powerhouse, is a leader in food processing, marine engineering, and pharmaceutical production, all sectors with critical vacuum testing requirements. Burhani Engineering Technology is proud to serve Auckland as a certified manufacturer, exporter, importer, supplier, and dealer of precision vacuum solutions.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of dairy and food processing, marine engineering, pharmaceutical manufacturing, and construction requirements in Auckland.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Auckland, New Zealand',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Auckland, New Zealand. Burhani Engineering Technology\'s Vacuum Leak Test Machine delivers fast, accurate results for packaging integrity verification in Auckland\'s growing industrial and export sectors. The system supports both Method A and Method B testing protocols, making it versatile for diverse production environments.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Auckland, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across New Zealand and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Auckland, New Zealand',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Auckland, New Zealand. Burhani Engineering Technology\'s acrylic vacuum glove box enables Auckland-based researchers and technicians to handle sensitised materials, lithium-ion battery components, and fine chemicals without exposure to moisture or oxygen. The unit features an integrated vacuum gauge, dual ball valves, and a durable silicone gasket for long-term airtight performance.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Auckland, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across New Zealand and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Auckland, New Zealand',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Auckland, New Zealand. In Auckland, New Zealand, the Burhani Heated Vacuum Degassing Chamber adds temperature control to the standard degassing process, allowing users to work with high-viscosity polymers and slow-curing compounds. This stainless-steel heating variant is ideal for industrial composite and electronics encapsulation applications.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Auckland, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across New Zealand and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Auckland, New Zealand',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Auckland, New Zealand. Burhani Engineering Technology\'s Flat Vacuum Box Weld Testing Equipment is a critical tool for verifying weld integrity in storage tanks, pressure vessels, and pipelines across Auckland\'s oil & gas, water treatment, and marine infrastructure projects. The soapy solution applied to welds forms bubbles at defect points when vacuum is applied through the box.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Auckland, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across New Zealand and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Auckland, New Zealand',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Auckland, New Zealand. Beverage bottlers, food processors, and pharmaceutical packagers in Auckland, New Zealand use the Burhani transparent pressure vessel to verify closure integrity and detect even the smallest pinholes in flexible packaging. The unit supports both vacuum and over-pressure test modes, providing versatility for diverse packaging formats.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Auckland, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across New Zealand and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Auckland, New Zealand',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Auckland.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Auckland, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampling Unit Exporter in Auckland, New Zealand',
        'desc' => [
            'Our company manufactures state-of-the-art environmental testing equipment, designed for hazardous vapor investigations in Auckland, New Zealand. The VC20 unit delivers reliable wastewater gas analysis with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Auckland. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Auckland, New Zealand',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Auckland or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
