<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Suva';
$country = 'Fiji';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Suva, Fiji\'s vibrant capital and commercial centre, is home to growing beverage, fisheries, and marine industries that require dependable vacuum testing equipment. Burhani Engineering Technology serves Suva as a dedicated manufacturer, exporter, importer, supplier, and dealer of vacuum solutions tailored to Pacific island industrial needs.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of fisheries processing, beverage packaging, marine transport, and infrastructure construction requirements in Suva.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Suva, Fiji',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Suva, Fiji. Burhani Engineering Technology\'s Vacuum Leak Test Machine delivers fast, accurate results for packaging integrity verification in Suva\'s growing industrial and export sectors. The system supports both Method A and Method B testing protocols, making it versatile for diverse production environments.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Suva, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Fiji and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Suva, Fiji',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Suva, Fiji. Burhani Engineering Technology\'s acrylic vacuum glove box enables Suva-based researchers and technicians to handle sensitised materials, lithium-ion battery components, and fine chemicals without exposure to moisture or oxygen. The unit features an integrated vacuum gauge, dual ball valves, and a durable silicone gasket for long-term airtight performance.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Suva, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Fiji and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Suva, Fiji',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Suva, Fiji. In Suva, Fiji, the Burhani Heated Vacuum Degassing Chamber adds temperature control to the standard degassing process, allowing users to work with high-viscosity polymers and slow-curing compounds. This stainless-steel heating variant is ideal for industrial composite and electronics encapsulation applications.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Suva, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Fiji and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Suva, Fiji',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Suva, Fiji. Burhani Engineering Technology\'s Flat Vacuum Box Weld Testing Equipment is a critical tool for verifying weld integrity in storage tanks, pressure vessels, and pipelines across Suva\'s oil & gas, water treatment, and marine infrastructure projects. The soapy solution applied to welds forms bubbles at defect points when vacuum is applied through the box.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Suva, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Fiji and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Suva, Fiji',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Suva, Fiji. Beverage bottlers, food processors, and pharmaceutical packagers in Suva, Fiji use the Burhani transparent pressure vessel to verify closure integrity and detect even the smallest pinholes in flexible packaging. The unit supports both vacuum and over-pressure test modes, providing versatility for diverse packaging formats.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Suva, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Fiji and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Suva, Fiji',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Suva.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Suva, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Hazardous Vapor Sampling System Provider in Suva, Fiji',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Suva, Fiji, we introduce the VC20 monitoring system. This instrumentation is developed specifically for odor investigations and landfill gas collection.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Fiji choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Suva, Fiji',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Suva or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
