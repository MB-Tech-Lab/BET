<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Santo Domingo';
$country = 'Dominican Republic';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Santo Domingo, a vital industrial player in Dominican Republic, requires advanced technological solutions to maintain its competitive edge in manufacturing, pharmaceutical logistics, and food packaging. The Dominican Republic has a thriving free-trade zone manufacturing sector. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Santo Domingo meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Santo Domingo, Dominican Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Santo Domingo, Dominican Republic. Protect your production quality in Santo Domingo with our high-performance vacuum leak test machine, designed for rigorous industrial inspection and analysis.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Santo Domingo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Dominican Republic and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Santo Domingo, Dominican Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Santo Domingo, Dominican Republic. Our Vacuum Glove Box provides a controlled inert atmosphere for sensitive research in Santo Domingo\'s aerospace and pharmaceutical laboratories.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Santo Domingo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Dominican Republic and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Santo Domingo, Dominican Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Santo Domingo, Dominican Republic. Eliminate trapped air and bubbles in your materials with our industrial degassing unit, used extensively in Santo Domingo\'s composite and polymer industries.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Santo Domingo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Dominican Republic and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Santo Domingo, Dominican Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Santo Domingo, Dominican Republic. The Burhani Vacuum Weld Tester is engineered for speed and accuracy in Santo Domingo\'s fabrication shops and industrial plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Santo Domingo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Dominican Republic and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Santo Domingo, Dominican Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Santo Domingo, Dominican Republic. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Santo Domingo\'s automotive testing facilities.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Santo Domingo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Dominican Republic and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Santo Domingo, Dominican Republic',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Santo Domingo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Santo Domingo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Hazardous Vapor Sampling System Manufacturer in Santo Domingo, Dominican Republic',
        'desc' => [
            'Our company manufactures state-of-the-art gas collection systems, designed for industrial hygiene testing in Santo Domingo, Dominican Republic. The VC20 unit ensures pristine gas sample collection with zero carryover.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Santo Domingo. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Santo Domingo, Dominican Republic',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Santo Domingo.'
];

require_once ABSPATH . 'includes/location-template.php';
