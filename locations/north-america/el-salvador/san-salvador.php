<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'San Salvador';
$country = 'El Salvador';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'San Salvador, a vital industrial player in El Salvador, requires advanced technological solutions to maintain its competitive edge in textile manufacturing, agro-processing, and construction materials. El Salvador is a key industrial player in Central America with a focus on manufacturing exports. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to San Salvador meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in San Salvador, El Salvador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in San Salvador, El Salvador. Our Vacuum Leak Test Machine is a vital component for San Salvador\'s packaging lines, providing precise testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653 for sterile barrier integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in San Salvador, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across El Salvador and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in San Salvador, El Salvador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in San Salvador, El Salvador. In San Salvador, our glove box systems are essential for handling moisture-sensitive materials in semiconductor and battery research applications.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in San Salvador, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across El Salvador and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in San Salvador, El Salvador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in San Salvador, El Salvador. The Burhani Degassing Chamber offers superior vacuum levels for San Salvador\'s industrial plants, ensuring void-free castings and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in San Salvador, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across El Salvador and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in San Salvador, El Salvador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in San Salvador, El Salvador. Ensure leak-proof welds in San Salvador\'s storage tanks and pipelines with our NDT vacuum box testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in San Salvador, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across El Salvador and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in San Salvador, El Salvador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in San Salvador, El Salvador. Ensure packaging perfection in San Salvador with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in San Salvador, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across El Salvador and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in San Salvador, El Salvador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in San Salvador.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in San Salvador, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Collection System Dealer in San Salvador, El Salvador',
        'desc' => [
            'Our company supplies heavy-duty air pollution monitoring devices for major industrial zones in San Salvador, El Salvador. The VC20 unit delivers absolute sample integrity for compliance testing and industrial emissions control.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in San Salvador. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to San Salvador, El Salvador',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in San Salvador.'
];

require_once ABSPATH . 'includes/location-template.php';
