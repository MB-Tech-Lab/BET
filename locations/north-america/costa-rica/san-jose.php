<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'San Jose';
$country = 'Costa Rica';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'San Jose, a vital industrial player in Costa Rica, requires advanced technological solutions to maintain its competitive edge in medical device manufacturing, food processing, and high-tech electronics. Costa Rica is a global leader in medical device exports and sustainable industrial practices. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to San Jose meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in San Jose, Costa Rica',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in San Jose, Costa Rica. In San Jose, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of product safety and quality in flexible packaging.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in San Jose, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Costa Rica and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in San Jose, Costa Rica',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in San Jose, Costa Rica. The Burhani Vacuum Glove Box unit offers a sterile, contamination-free environment for advanced chemical processing in San Jose.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in San Jose, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Costa Rica and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in San Jose, Costa Rica',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in San Jose, Costa Rica. Optimized for efficiency, our vacuum degassing equipment is the standard for material analysis and production in San Jose.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in San Jose, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Costa Rica and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in San Jose, Costa Rica',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in San Jose, Costa Rica. In San Jose, our vacuum box weld testing unit provides irrefutable proof of weld quality in marine and petrochemical applications.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in San Jose, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Costa Rica and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in San Jose, Costa Rica',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in San Jose, Costa Rica. Our Transparent Vacuum and Pressure Vessel allows for full visual inspection during immersion leak testing in San Jose\'s food and packaging lines.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in San Jose, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Costa Rica and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in San Jose, Costa Rica',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in San Jose.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in San Jose, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Manufacturer in San Jose, Costa Rica',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in San Jose, Costa Rica, we provide the VC20 collection system. This system is purpose-built to support environmental field monitoring and wastewater gas sampling in major municipal hubs in San Jose.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Costa Rica choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to San Jose, Costa Rica',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in San Jose.'
];

require_once ABSPATH . 'includes/location-template.php';
