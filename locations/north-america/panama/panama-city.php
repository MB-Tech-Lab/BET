<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Panama City';
$country = 'Panama';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Panama City, a vital industrial player in Panama, requires advanced technological solutions to maintain its competitive edge in shipping logistics, petrochemicals, and marine engineering. Panama City\'s economy is built around the world-famous canal and global logistics. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Panama City meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Panama City, Panama',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Panama City, Panama. Protect your production quality in Panama City with our high-performance vacuum leak test machine, designed for rigorous industrial inspection and analysis.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Panama City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Panama and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Panama City, Panama',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Panama City, Panama. Our Vacuum Glove Box provides a controlled inert atmosphere for sensitive research in Panama City\'s aerospace and pharmaceutical laboratories.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Panama City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Panama and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Panama City, Panama',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Panama City, Panama. Eliminate trapped air and bubbles in your materials with our industrial degassing unit, used extensively in Panama City\'s composite and polymer industries.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Panama City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Panama and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Panama City, Panama',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Panama City, Panama. The Burhani Vacuum Weld Tester is engineered for speed and accuracy in Panama City\'s fabrication shops and industrial plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Panama City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Panama and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Panama City, Panama',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Panama City, Panama. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Panama City\'s automotive testing facilities.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Panama City, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Panama and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Panama City, Panama',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Panama City.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Panama City, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Testing Chamber Provider in Panama City, Panama',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in Panama City, Panama, we provide the VC20 collection system. This system is purpose-built to support environmental field monitoring and wastewater gas sampling in major municipal hubs in Panama City.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Panama choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Panama City, Panama',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Panama City.'
];

require_once ABSPATH . 'includes/location-template.php';
