<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Calgary';
$country = 'Canada';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Calgary, a vital industrial player in Canada, requires advanced technological solutions to maintain its competitive edge in oil & gas, petrochemicals, and energy infrastructure. Calgary is the center of Canada\'s world-class energy industry and oil sands production. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Calgary meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Calgary, Canada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Calgary, Canada. Our Vacuum Leak Test Machine is a vital component for Calgary\'s packaging lines, providing precise testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653 for sterile barrier integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Calgary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Canada and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Calgary, Canada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Calgary, Canada. In Calgary, our glove box systems are essential for handling moisture-sensitive materials in semiconductor and battery research applications.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Calgary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Canada and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Calgary, Canada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Calgary, Canada. The Burhani Degassing Chamber offers superior vacuum levels for Calgary\'s industrial plants, ensuring void-free castings and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Calgary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Canada and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Calgary, Canada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Calgary, Canada. Ensure leak-proof welds in Calgary\'s storage tanks and pipelines with our NDT vacuum box testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Calgary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Canada and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Calgary, Canada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Calgary, Canada. Ensure packaging perfection in Calgary with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Calgary, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Canada and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Calgary, Canada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Calgary.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Calgary, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Supplier in Calgary, Canada',
        'desc' => [
            'As a trusted supplier of advanced test equipment in Calgary, Canada, we provide the VC20 sampling chamber. This instrumentation is developed specifically for hazardous vapor sampling and oilfield gas collection in major manufacturing hubs.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Canada choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Fabricant de chambres PCR à ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Fabricant de chambres PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Fournisseur de stations de travail PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exportateur de chambres PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Calgary, Canada',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Calgary.'
];

require_once ABSPATH . 'includes/location-template.php';
