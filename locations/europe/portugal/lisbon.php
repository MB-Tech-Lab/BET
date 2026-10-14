<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Lisbon';
$country = 'Portugal';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Lisbon, a major center for automotive parts, renewable energy, and textiles in Portugal, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Lisbon is the center of Portugal\'s industrial modernization and sustainable tech. Burhani Engineering Technology is proud to serve the Lisbon industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Lisbon with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Lisbon, Portugal',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Lisbon, Portugal. The Burhani Vacuum Leak Test equipment is the preferred choice for automotive plants in Lisbon requiring rigorous leak detection for sealed components.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Lisbon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Portugal and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Lisbon, Portugal',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Lisbon, Portugal. From semiconductor research to battery development, our vacuum glove boxes serve the specialized needs of Lisbon\'s industrial sector.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Lisbon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Portugal and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Lisbon, Portugal',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Lisbon, Portugal. In Lisbon, our degassing systems are utilized for high-precision manufacturing and material analysis across various industrial applications.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Lisbon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Portugal and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Lisbon, Portugal',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Lisbon, Portugal. Our Flat Vacuum Box Weld Testing equipment is critical for API standard NDT inspections in Lisbon\'s maritime and energy sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Lisbon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Portugal and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Lisbon, Portugal',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Lisbon, Portugal. In Lisbon, our transparent pressure vessels are utilized for rigorous quality analysis of pharmaceutical and medical device packaging.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Lisbon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Portugal and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Lisbon, Portugal',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Lisbon.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Lisbon, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Sampling Unit Dealer in Lisbon, Portugal',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of environmental test systems serving industrial zones in Lisbon, Portugal. The VC20 sampling chamber provides a reliable, airtight boundary for wastewater gas testing and refinery vapor collection in Lisbon.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Portugal and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Fabricante de câmaras PCR em ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Fabricante de câmaras PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Fornecedor de estações de trabalho PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exportador de câmaras PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Lisbon, Portugal',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Lisbon and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
