<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Port Moresby';
$country = 'Papua New Guinea';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Port Moresby, the capital of Papua New Guinea, is the commercial gateway to one of the region\'s most resource-rich nations, with booming LNG, mining, and construction sectors requiring industrial testing equipment. Burhani Engineering Technology serves Port Moresby as a leading manufacturer, exporter, importer, supplier, and dealer of vacuum testing solutions.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of LNG extraction, oil pipeline construction, mining, and food and beverage manufacturing requirements in Port Moresby.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Port Moresby, Papua New Guinea',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Port Moresby, Papua New Guinea. Quality assurance professionals in Port Moresby rely on the Vacuum Leak Test Machine to validate packaging seals before dispatch. The equipment applies controlled air pressure to submerged packages, making even the smallest defects immediately visible, supporting zero-defect shipping standards.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Port Moresby, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Papua New Guinea and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Port Moresby, Papua New Guinea',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Port Moresby, Papua New Guinea. The Burhani Vacuum Glove Box provides a sealed, inert-atmosphere enclosure essential for handling moisture-sensitive materials, reactive chemicals, and precision components in Port Moresby\'s research and manufacturing laboratories. Constructed from high-clarity acrylic with integrated glove ports and pass-through antechambers, it enables safe, contamination-free material handling.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Port Moresby, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Papua New Guinea and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Port Moresby, Papua New Guinea',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Port Moresby, Papua New Guinea. Resin casting, potting, and composite manufacturing operations in Port Moresby, Papua New Guinea benefit from the Burhani Acrylic Vacuum Degassing Chamber\'s transparent construction, enabling operators to monitor the degassing process in real time. The heavy-duty valves and calibrated vacuum gauge ensure repeatable, precise vacuum cycles every time.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Port Moresby, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Papua New Guinea and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Port Moresby, Papua New Guinea',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Port Moresby, Papua New Guinea. Offshore construction and shipbuilding projects in Port Moresby\'s marine sector demand zero-compromise weld quality. Burhani Engineering Technology\'s vacuum box weld testing range, including flat bottom, angular, sea-chest, and corner configurations, covers every weld geometry found in structural and pressure-containing applications.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Port Moresby, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Papua New Guinea and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Port Moresby, Papua New Guinea',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Port Moresby, Papua New Guinea. In Port Moresby\'s food export supply chain, consistent packaging seal quality is essential to meet importing country standards. The Burhani transparent vacuum and pressure vessel ensures every pouch, bottle, and container is tested for gross leaks before despatch, protecting brand integrity and reducing costly product returns.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Port Moresby, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Papua New Guinea and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Port Moresby, Papua New Guinea',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Port Moresby.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Port Moresby, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Manufacturer in Port Moresby, Papua New Guinea',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving environmental projects in Port Moresby, Papua New Guinea. The VC20 gas sampler is engineered to support environmental field sampling and coastal environmental air monitoring in Port Moresby.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Papua New Guinea and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Port Moresby, Papua New Guinea',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Port Moresby or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
