<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Monterrey';
$country = 'Mexico';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Monterrey, a vital industrial player in Mexico, requires advanced technological solutions to maintain its competitive edge in steel production, automotive parts, and heavy manufacturing. Monterrey is Mexico\'s industrial powerhouse, specializing in steel and high-tech manufacturing. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Monterrey meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Monterrey, Mexico',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Monterrey, Mexico. The Burhani Vacuum Leak Test unit is engineered to detect gross leaks in medical and food packaging, serving the critical quality needs of Monterrey\'s manufacturing sector.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Monterrey, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mexico and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Monterrey, Mexico',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Monterrey, Mexico. Engineered for clarity and durability, our glove boxes serve the high-tech industrial plants of Monterrey with unmatched performance.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Monterrey, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mexico and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Monterrey, Mexico',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Monterrey, Mexico. In Monterrey, our degassing chambers are the preferred choice for oil refineries and chemical plants requiring reliable gas removal systems.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Monterrey, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mexico and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Monterrey, Mexico',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Monterrey, Mexico. Our Flat Vacuum Box Weld Testing equipment is essential for API 650/653 compliant tank floor inspections in Monterrey\'s energy and oil sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Monterrey, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mexico and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Monterrey, Mexico',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Monterrey, Mexico. In Monterrey, our clear acrylic vessels are used for submerged leak testing of pharmaceutical packages and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Monterrey, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mexico and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Monterrey, Mexico',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Monterrey.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Monterrey, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Sampling Equipment Exporter in Monterrey, Mexico',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Monterrey, Mexico, we introduce the VC20 monitoring system. This instrumentation is developed specifically for wastewater odor analysis and industrial air monitoring.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Mexico choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Monterrey, Mexico',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Monterrey.'
];

require_once ABSPATH . 'includes/location-template.php';
