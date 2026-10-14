<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Guatemala City';
$country = 'Guatemala';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Guatemala City, a vital industrial player in Guatemala, requires advanced technological solutions to maintain its competitive edge in food processing, chemical manufacturing, and pharmaceutical distribution. Guatemala City is the largest industrial hub in Central America. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Guatemala City meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Guatemala City, Guatemala',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Guatemala City, Guatemala. The Burhani Vacuum Leak Test unit is engineered to detect gross leaks in medical and food packaging, serving the critical quality needs of Guatemala City\'s manufacturing sector.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Guatemala City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guatemala and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Guatemala City, Guatemala',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Guatemala City, Guatemala. Engineered for clarity and durability, our glove boxes serve the high-tech industrial plants of Guatemala City with unmatched performance.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Guatemala City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guatemala and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Guatemala City, Guatemala',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Guatemala City, Guatemala. In Guatemala City, our degassing chambers are the preferred choice for oil refineries and chemical plants requiring reliable gas removal systems.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Guatemala City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guatemala and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Guatemala City, Guatemala',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Guatemala City, Guatemala. Our Flat Vacuum Box Weld Testing equipment is essential for API 650/653 compliant tank floor inspections in Guatemala City\'s energy and oil sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Guatemala City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guatemala and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Guatemala City, Guatemala',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Guatemala City, Guatemala. In Guatemala City, our clear acrylic vessels are used for submerged leak testing of pharmaceutical packages and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Guatemala City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guatemala and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Guatemala City, Guatemala',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Guatemala City.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Guatemala City, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Collection Device Exporter in Guatemala City, Guatemala',
        'desc' => [
            'For local factories and industrial plants in Guatemala City, Guatemala, we provide high-performance emission samplers. The VC20 ensures secure industrial emissions control and environmental field monitoring.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Guatemala City.'
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
    'title' => 'Supply Vacuum Testing Equipment to Guatemala City, Guatemala',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Guatemala City.'
];

require_once ABSPATH . 'includes/location-template.php';
