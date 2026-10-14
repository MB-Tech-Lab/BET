<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Majuro';
$country = 'Marshall Islands';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Majuro, the Marshall Islands\' principal port and commercial hub, serves one of the world\'s largest ship registries and a growing fisheries sector. Burhani Engineering Technology operates as a reliable manufacturer, exporter, supplier, importer, and dealer of vacuum testing systems deployed across Majuro\'s maritime and packaging industries.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of ship registry and vessel maintenance, fisheries, food packaging, and port infrastructure requirements in Majuro.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Majuro, Marshall Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Majuro, Marshall Islands. Quality assurance professionals in Majuro rely on the Vacuum Leak Test Machine to validate packaging seals before dispatch. The equipment applies controlled air pressure to submerged packages, making even the smallest defects immediately visible, supporting zero-defect shipping standards.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Majuro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Marshall Islands and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Majuro, Marshall Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Majuro, Marshall Islands. The Burhani Vacuum Glove Box provides a sealed, inert-atmosphere enclosure essential for handling moisture-sensitive materials, reactive chemicals, and precision components in Majuro\'s research and manufacturing laboratories. Constructed from high-clarity acrylic with integrated glove ports and pass-through antechambers, it enables safe, contamination-free material handling.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Majuro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Marshall Islands and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Majuro, Marshall Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Majuro, Marshall Islands. Resin casting, potting, and composite manufacturing operations in Majuro, Marshall Islands benefit from the Burhani Acrylic Vacuum Degassing Chamber\'s transparent construction, enabling operators to monitor the degassing process in real time. The heavy-duty valves and calibrated vacuum gauge ensure repeatable, precise vacuum cycles every time.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Majuro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Marshall Islands and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Majuro, Marshall Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Majuro, Marshall Islands. Offshore construction and shipbuilding projects in Majuro\'s marine sector demand zero-compromise weld quality. Burhani Engineering Technology\'s vacuum box weld testing range, including flat bottom, angular, sea-chest, and corner configurations, covers every weld geometry found in structural and pressure-containing applications.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Majuro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Marshall Islands and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Majuro, Marshall Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Majuro, Marshall Islands. In Majuro\'s food export supply chain, consistent packaging seal quality is essential to meet importing country standards. The Burhani transparent vacuum and pressure vessel ensures every pouch, bottle, and container is tested for gross leaks before despatch, protecting brand integrity and reducing costly product returns.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Majuro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Marshall Islands and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Majuro, Marshall Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Majuro.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Majuro, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Supplier in Majuro, Marshall Islands',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving environmental projects in Majuro, Marshall Islands. The VC20 gas sampler is engineered to support environmental field sampling and coastal environmental air monitoring in Majuro.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Marshall Islands and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Majuro, Marshall Islands',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Majuro or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
