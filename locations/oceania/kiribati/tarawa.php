<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Tarawa';
$country = 'Kiribati';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'South Tarawa, the administrative heart of Kiribati, is at the forefront of the nation\'s growing maritime and fisheries export economy. Burhani Engineering Technology reaches Tarawa as a committed supplier, manufacturer, exporter, importer, and dealer, offering vacuum testing instruments built for tropical island industrial environments.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of maritime operations, fisheries export, food packaging, and coastal infrastructure requirements in Tarawa.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Tarawa, Kiribati',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Tarawa, Kiribati. In Tarawa, Kiribati, the need for precise packaging leak detection is critical in food processing and pharmaceutical logistics chains. This vacuum pressurization system from Burhani Engineering Technology verifies seal integrity across a broad range of flexible containers, ensuring products reach international markets in perfect condition.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Tarawa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kiribati and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Tarawa, Kiribati',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Tarawa, Kiribati. Research institutes and specialty manufacturers in Tarawa, Kiribati use the Burhani Vacuum Glove Box to create ultra-clean working environments. Built with impact-resistant cast acrylic and engineered for ease of integration into existing laboratory workflows, this system meets international standards for inert-atmosphere workstations.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Tarawa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kiribati and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Tarawa, Kiribati',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Tarawa, Kiribati. The Burhani Vacuum Degassing Chamber eliminates entrapped air bubbles from resins, silicones, epoxies, and adhesives used in Tarawa\'s manufacturing and composite fabrication sectors. By achieving vacuum levels down to 0.1 Torr, the chamber ensures bubble-free molds and castings with superior surface finish and structural integrity.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Tarawa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kiribati and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Tarawa, Kiribati',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Tarawa, Kiribati. In Tarawa, Kiribati, structural steel fabrication yards and pipeline contractors rely on the Burhani flat vacuum box system to perform in-situ weld integrity tests per international NDT standards. The transparent acrylic base provides clear visual confirmation of bubble formation, enabling immediate identification and repair of defective welds.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Tarawa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kiribati and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Tarawa, Kiribati',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Tarawa, Kiribati. Burhani Engineering Technology\'s clear acrylic pressure vessel enables Tarawa-based quality control teams to perform ASTM D3078 and related bubble emission tests on sealed packaging without requiring specialized infrastructure. The overflow safety tank provision and built-in drain valve make routine testing clean and efficient.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Tarawa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kiribati and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Tarawa, Kiribati',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Tarawa.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Tarawa, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Gas Collection Chamber Manufacturer in Tarawa, Kiribati',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Tarawa, Kiribati, we introduce the VC20 monitoring system. This instrumentation is developed specifically for odor investigations and landfill gas collection.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Kiribati choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Tarawa, Kiribati',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Tarawa or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
