<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Ulaanbaatar';
$country = 'Mongolia';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #d1495b 100%)';
$intro_p1 = 'Ulaanbaatar, a major center for mining tech, construction materials, and energy in Mongolia, requires advanced technological solutions for high-standard quality assurance. Ulaanbaatar is the industrial heart of Mongolia\'s mineral-driven economy. Burhani Engineering Technology is proud to serve the Ulaanbaatar industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Ulaanbaatar — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Ulaanbaatar with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Ulaanbaatar, Mongolia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Ulaanbaatar, Mongolia. The Burhani Vacuum Leak Test system is engineered for Ulaanbaatar\'s pharmaceutical and food sectors, delivering precise seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Ulaanbaatar, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mongolia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Ulaanbaatar, Mongolia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Ulaanbaatar, Mongolia. Engineered for clarity and durability, our glove boxes serve the specialized needs of Ulaanbaatar\'s industrial and research sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Ulaanbaatar, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mongolia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Ulaanbaatar, Mongolia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Ulaanbaatar, Mongolia. In Ulaanbaatar, our degassing chambers are the preferred choice for laboratory testing and production-scale material processing.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Ulaanbaatar, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mongolia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Ulaanbaatar, Mongolia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Ulaanbaatar, Mongolia. Our Flat Vacuum Box Weld Testing equipment is essential for API standard tank inspection and pipeline leak testing in Ulaanbaatar.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Ulaanbaatar, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mongolia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Ulaanbaatar, Mongolia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Ulaanbaatar, Mongolia. In Ulaanbaatar, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Ulaanbaatar, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mongolia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Ulaanbaatar, Mongolia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Ulaanbaatar.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Ulaanbaatar, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Gas Sampling Chamber Manufacturer in Ulaanbaatar, Mongolia',
        'desc' => [
            'Our company manufactures certified test chambers, tailored for cleanroom research and manufacturing in Ulaanbaatar, Mongolia. The VC20 unit supports high-accuracy compliance monitoring and gas collection.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Ulaanbaatar. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Ulaanbaatar, Mongolia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Ulaanbaatar and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
