<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Managua';
$country = 'Nicaragua';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Managua, a vital industrial player in Nicaragua, requires advanced technological solutions to maintain its competitive edge in agro-industry, textile production, and renewable energy. Nicaragua is focusing on diversifying its industrial base through agribusiness and energy. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Managua meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Managua, Nicaragua',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Managua, Nicaragua. As a top-tier inspection system, our vacuum leak tester delivers reliable bubble emission results for Managua\'s pharmaceutical and food processing plants.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Managua, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Nicaragua and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Managua, Nicaragua',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Managua, Nicaragua. From pharmaceutical labs to aerospace facilities in Managua, our vacuum glove box equipment ensures total atmospheric control for critical experiments.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Managua, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Nicaragua and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Managua, Nicaragua',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Managua, Nicaragua. Our Vacuum Degassing Chamber is a high-performance system designed for resin and silicone processing in Managua\'s manufacturing sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Managua, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Nicaragua and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Managua, Nicaragua',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Managua, Nicaragua. Perform reliable weld integrity inspection with our portable vacuum box system, a staple for infrastructure projects in Managua.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Managua, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Nicaragua and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Managua, Nicaragua',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Managua, Nicaragua. The Burhani Transparent Vacuum unit provides exceptional clarity for quality analysis in Managua\'s research and development labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Managua, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Nicaragua and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Managua, Nicaragua',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Managua.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Managua, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Managua, Nicaragua',
        'desc' => [
            'For local factories and industrial plants in Managua, Nicaragua, we provide high-performance emission samplers. The VC20 ensures secure industrial emissions control and environmental field monitoring.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Managua.'
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
    'title' => 'Supply Vacuum Testing Equipment to Managua, Nicaragua',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Managua.'
];

require_once ABSPATH . 'includes/location-template.php';
