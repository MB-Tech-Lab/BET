<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Monrovia';
$country = 'Liberia';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Monrovia, a vital industrial player in Liberia, is making significant strides in mining services, rubber processing, and maritime logistics. Monrovia anchors Liberia\'s industrial growth and resource exports. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Monrovia\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Monrovia — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Monrovia with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Monrovia, Liberia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Monrovia, Liberia. Protect your product quality in Monrovia with our advanced vacuum leak test machine, optimized for rapid and accurate evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Monrovia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liberia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Monrovia, Liberia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Monrovia, Liberia. Our Vacuum Glove Box provides a controlled inert atmosphere for sensitive chemical handling and research in Monrovia\'s industrial plants.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Monrovia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liberia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Monrovia, Liberia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Monrovia, Liberia. Used extensively in Monrovia\'s oil refineries and industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Monrovia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liberia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Monrovia, Liberia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Monrovia, Liberia. The Burhani Vacuum Weld Tester is engineered for field use in Monrovia\'s mining operations, oil refineries, and industrial plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Monrovia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liberia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Monrovia, Liberia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Monrovia, Liberia. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Monrovia\'s infrastructure and energy labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Monrovia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liberia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Monrovia, Liberia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Monrovia.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Monrovia, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial VOC Sampler Manufacturer in Monrovia, Liberia',
        'desc' => [
            'Our company supplies heavy-duty air pollution monitoring devices for major industrial zones in Monrovia, Liberia. The VC20 unit delivers absolute sample integrity for petrochemical refineries and wastewater gas monitoring.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Monrovia. Contact our support office for technical dossiers and customized commercial quotes.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'Manufacturer of PCR Chambers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Monrovia, Liberia',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Monrovia and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
