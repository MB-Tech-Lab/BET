<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Port Vila';
$country = 'Vanuatu';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Port Vila, the cosmopolitan capital of Vanuatu, anchors an economy shaped by tourism, food processing, and marine trade, sectors with growing needs for quality vacuum testing systems. Burhani Engineering Technology serves Port Vila as a committed manufacturer, exporter, supplier, importer, and dealer of industrial vacuum solutions.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of tourism infrastructure, food and beverage processing, fisheries, and construction requirements in Port Vila.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Port Vila, Vanuatu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Port Vila, Vanuatu. Quality assurance professionals in Port Vila rely on the Vacuum Leak Test Machine to validate packaging seals before dispatch. The equipment applies controlled air pressure to submerged packages, making even the smallest defects immediately visible, supporting zero-defect shipping standards.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Port Vila, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Vanuatu and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Port Vila, Vanuatu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Port Vila, Vanuatu. The Burhani Vacuum Glove Box provides a sealed, inert-atmosphere enclosure essential for handling moisture-sensitive materials, reactive chemicals, and precision components in Port Vila\'s research and manufacturing laboratories. Constructed from high-clarity acrylic with integrated glove ports and pass-through antechambers, it enables safe, contamination-free material handling.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Port Vila, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Vanuatu and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Port Vila, Vanuatu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Port Vila, Vanuatu. Resin casting, potting, and composite manufacturing operations in Port Vila, Vanuatu benefit from the Burhani Acrylic Vacuum Degassing Chamber\'s transparent construction, enabling operators to monitor the degassing process in real time. The heavy-duty valves and calibrated vacuum gauge ensure repeatable, precise vacuum cycles every time.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Port Vila, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Vanuatu and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Port Vila, Vanuatu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Port Vila, Vanuatu. Offshore construction and shipbuilding projects in Port Vila\'s marine sector demand zero-compromise weld quality. Burhani Engineering Technology\'s vacuum box weld testing range, including flat bottom, angular, sea-chest, and corner configurations, covers every weld geometry found in structural and pressure-containing applications.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Port Vila, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Vanuatu and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Port Vila, Vanuatu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Port Vila, Vanuatu. In Port Vila\'s food export supply chain, consistent packaging seal quality is essential to meet importing country standards. The Burhani transparent vacuum and pressure vessel ensures every pouch, bottle, and container is tested for gross leaks before despatch, protecting brand integrity and reducing costly product returns.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Port Vila, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Vanuatu and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Port Vila, Vanuatu',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Port Vila.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Port Vila, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampling Unit Exporter in Port Vila, Vanuatu',
        'desc' => [
            'Our company manufactures state-of-the-art environmental sampling equipment, designed for municipal wastewater gas testing in Port Vila, Vanuatu. The VC20 unit delivers reliable industrial hygiene audits with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Port Vila. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Port Vila, Vanuatu',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Port Vila or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
