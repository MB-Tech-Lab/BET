<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Port-au-Prince';
$country = 'Haiti';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Port-au-Prince, a vital industrial player in Haiti, requires advanced technological solutions to maintain its competitive edge in light manufacturing, food processing, and construction services. Haiti\'s industrial sector focuses on domestic consumer goods and reconstruction. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Port-au-Prince meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Port-au-Prince, Haiti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Port-au-Prince, Haiti. As a top-tier inspection system, our vacuum leak tester delivers reliable bubble emission results for Port-au-Prince\'s pharmaceutical and food processing plants.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Port-au-Prince, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Haiti and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Port-au-Prince, Haiti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Port-au-Prince, Haiti. From pharmaceutical labs to aerospace facilities in Port-au-Prince, our vacuum glove box equipment ensures total atmospheric control for critical experiments.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Port-au-Prince, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Haiti and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Port-au-Prince, Haiti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Port-au-Prince, Haiti. Our Vacuum Degassing Chamber is a high-performance system designed for resin and silicone processing in Port-au-Prince\'s manufacturing sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Port-au-Prince, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Haiti and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Port-au-Prince, Haiti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Port-au-Prince, Haiti. Perform reliable weld integrity inspection with our portable vacuum box system, a staple for infrastructure projects in Port-au-Prince.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Port-au-Prince, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Haiti and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Port-au-Prince, Haiti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Port-au-Prince, Haiti. The Burhani Transparent Vacuum unit provides exceptional clarity for quality analysis in Port-au-Prince\'s research and development labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Port-au-Prince, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Haiti and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Port-au-Prince, Haiti',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Port-au-Prince.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Port-au-Prince, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Manufacturer in Port-au-Prince, Haiti',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of environmental test systems serving municipal zones in Port-au-Prince, Haiti. The VC20 sampling chamber provides a reliable, airtight boundary for air quality testing and wastewater odor control in Port-au-Prince.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Haiti and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Port-au-Prince, Haiti',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Port-au-Prince.'
];

require_once ABSPATH . 'includes/location-template.php';
