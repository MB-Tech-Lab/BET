<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Houston';
$country = 'USA';
$continent = 'North America';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Houston, a vital industrial player in USA, requires advanced technological solutions to maintain its competitive edge in oil & gas, aerospace engineering, and medical research. Houston is the energy capital of the world and a global leader in aerospace and healthcare. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment to this region.';
$intro_p2 = 'Our commitment to excellence ensures that every unit we supply to Houston meets the highest international standards for precision and durability. Whether you are in the automotive, aerospace, or pharmaceutical sector, our vacuum systems provide the reliability your operations demand.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Houston, USA',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Houston, USA. In Houston, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of product safety and quality in flexible packaging.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Houston, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across USA and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Houston, USA',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Houston, USA. The Burhani Vacuum Glove Box unit offers a sterile, contamination-free environment for advanced chemical processing in Houston.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Houston, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across USA and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Houston, USA',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Houston, USA. Optimized for efficiency, our vacuum degassing equipment is the standard for material analysis and production in Houston.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Houston, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across USA and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Houston, USA',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Houston, USA. In Houston, our vacuum box weld testing unit provides irrefutable proof of weld quality in marine and petrochemical applications.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Houston, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across USA and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Houston, USA',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Houston, USA. Our Transparent Vacuum and Pressure Vessel allows for full visual inspection during immersion leak testing in Houston\'s food and packaging lines.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Houston, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across USA and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Houston, USA',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Houston.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Houston, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Testing Chamber Provider in Houston, USA',
        'desc' => [
            'Burhani Engineering Technology is a premier manufacturer of high-compliance testing systems serving advanced industries in Houston, USA. The VC20 unit is engineered to support EPA compliance air sampling and industrial emissions monitoring audits.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across USA and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Houston, USA',
    'desc' => 'Reliable international shipping and technical support for all your vacuum testing needs in Houston.'
];

require_once ABSPATH . 'includes/location-template.php';
