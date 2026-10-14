<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'St Georges';
$country = 'Grenada';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'St Georges, a vital industrial player in Grenada, requires advanced technological solutions to maintain its competitive edge in nutmeg processing, marine services, and beverage production. Grenada is known for its spice production and growing marine engineering sector. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to St Georges meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in St Georges, Grenada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in St Georges, Grenada. In St Georges, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of product safety and quality in flexible packaging.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in St Georges, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Grenada and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in St Georges, Grenada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in St Georges, Grenada. The Burhani Vacuum Glove Box unit offers a sterile, contamination-free environment for advanced chemical processing in St Georges.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in St Georges, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Grenada and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in St Georges, Grenada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in St Georges, Grenada. Optimized for efficiency, our vacuum degassing equipment is the standard for material analysis and production in St Georges.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in St Georges, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Grenada and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in St Georges, Grenada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in St Georges, Grenada. In St Georges, our vacuum box weld testing unit provides irrefutable proof of weld quality in marine and petrochemical applications.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in St Georges, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Grenada and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in St Georges, Grenada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in St Georges, Grenada. Our Transparent Vacuum and Pressure Vessel allows for full visual inspection during immersion leak testing in St Georges\'s food and packaging lines.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in St Georges, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Grenada and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in St Georges, Grenada',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in St Georges.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in St Georges, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Manufacturer in St Georges, Grenada',
        'desc' => [
            'Our company manufactures state-of-the-art gas collection systems, designed for industrial hygiene testing in St Georges, Grenada. The VC20 unit ensures pristine gas sample collection with zero carryover.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in St Georges. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to St Georges, Grenada',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in St Georges.'
];

require_once ABSPATH . 'includes/location-template.php';
