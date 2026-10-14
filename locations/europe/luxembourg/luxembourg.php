<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Luxembourg';
$country = 'Luxembourg';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Luxembourg, a major center for steel production, logistics, and high-tech manufacturing in Luxembourg, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Luxembourg is a global leader in high-performance steel and specialized logistics. Burhani Engineering Technology is proud to serve the Luxembourg industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Luxembourg with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Luxembourg, Luxembourg',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Luxembourg, Luxembourg. The Burhani Vacuum Leak Test equipment is the preferred choice for automotive plants in Luxembourg requiring rigorous leak detection for sealed components.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Luxembourg, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Luxembourg and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Luxembourg, Luxembourg',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Luxembourg, Luxembourg. From semiconductor research to battery development, our vacuum glove boxes serve the specialized needs of Luxembourg\'s industrial sector.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Luxembourg, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Luxembourg and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Luxembourg, Luxembourg',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Luxembourg, Luxembourg. In Luxembourg, our degassing systems are utilized for high-precision manufacturing and material analysis across various industrial applications.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Luxembourg, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Luxembourg and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Luxembourg, Luxembourg',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Luxembourg, Luxembourg. Our Flat Vacuum Box Weld Testing equipment is critical for API standard NDT inspections in Luxembourg\'s maritime and energy sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Luxembourg, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Luxembourg and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Luxembourg, Luxembourg',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Luxembourg, Luxembourg. In Luxembourg, our transparent pressure vessels are utilized for rigorous quality analysis of pharmaceutical and medical device packaging.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Luxembourg, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Luxembourg and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Luxembourg, Luxembourg',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Luxembourg.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Luxembourg, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Testing Chamber Provider in Luxembourg, Luxembourg',
        'desc' => [
            'Our company manufactures state-of-the-art environmental testing equipment, designed for pharmaceutical gas testing in Luxembourg, Luxembourg. The VC20 unit delivers reliable wastewater odor analysis with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Luxembourg. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Luxembourg, Luxembourg',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Luxembourg and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
