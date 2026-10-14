<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Honiara';
$country = 'Solomon Islands';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Honiara, the capital of the Solomon Islands, is the hub of a natural resource-driven economy that increasingly demands quality-assured industrial and food processing equipment. Burhani Engineering Technology delivers to Honiara as a trusted manufacturer, exporter, supplier, importer, and dealer of premium vacuum testing systems.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of timber processing, fisheries, food packaging, and marine vessel operations requirements in Honiara.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Honiara, Solomon Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Honiara, Solomon Islands. Designed for detecting seal defects using the internal pressurization bubble test method per ASTM F2096, this leak testing system is widely used in packaging facilities across Honiara, Solomon Islands. The unit identifies leaks as small as 250 microns, ensuring packaging integrity in marine-adjacent food and pharmaceutical operations.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Honiara, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Solomon Islands and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Honiara, Solomon Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Honiara, Solomon Islands. In Honiara\'s growing scientific and industrial research community, the Burhani Vacuum Glove Box offers a reliable solution for processing materials that react with ambient air or humidity. Engineered with precision-fitted glove sleeves and multi-port access panels, the system maintains stable sub-atmospheric conditions throughout operation.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Honiara, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Solomon Islands and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Honiara, Solomon Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Honiara, Solomon Islands. Burhani Engineering Technology\'s vacuum degassing chambers serve manufacturers in Honiara needing to produce void-free castings in silicone rubbers, polyurethane, and epoxy compounds. With a food-grade silicone vacuum hose, dual gasket system, and 50-micron air filter on the vent port, hygiene and precision are both guaranteed.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Honiara, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Solomon Islands and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Honiara, Solomon Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Honiara, Solomon Islands. Construction of fuel storage facilities, marine dry docks, and processing plant pressure vessels in Honiara requires stringent weld quality verification. Burhani Engineering Technology supplies vacuum box weld testing equipment that meets international NDT codes, enabling fabricators to certify every weld joint before commissioning.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Honiara, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Solomon Islands and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Honiara, Solomon Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Honiara, Solomon Islands. The Burhani Transparent Vacuum and Pressure Vessel is designed for pouch leak detection, beverage container seal testing, and packaging integrity verification in Honiara\'s growing food and beverage sector. The hinged, lockable acrylic lid and high-visibility transparent chamber allow operators to observe leaks in real time under water.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Honiara, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Solomon Islands and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Honiara, Solomon Islands',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Honiara.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Honiara, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Supplier in Honiara, Solomon Islands',
        'desc' => [
            'Our company manufactures state-of-the-art environmental sampling equipment, designed for municipal wastewater gas testing in Honiara, Solomon Islands. The VC20 unit delivers reliable industrial hygiene audits with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Honiara. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Honiara, Solomon Islands',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Honiara or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
