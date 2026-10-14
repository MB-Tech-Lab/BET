<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Vaduz';
$country = 'Liechtenstein';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Vaduz, a major center for high-tech dental products, precision tools, and chemicals in Liechtenstein, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Liechtenstein has one of the highest industrial outputs per capita, focused on precision tools. Burhani Engineering Technology is proud to serve the Vaduz industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Vaduz with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Vaduz, Liechtenstein',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Vaduz, Liechtenstein. Our Vacuum Leak Test Machine is an essential inspection system for Vaduz\'s pharmaceutical facilities, ensuring the highest standards of packaging integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Vaduz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liechtenstein and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Vaduz, Liechtenstein',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Vaduz, Liechtenstein. In Vaduz, precision testing labs rely on our vacuum glove box systems to handle reactive materials in a contamination-free environment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Vaduz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liechtenstein and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Vaduz, Liechtenstein',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Vaduz, Liechtenstein. The Burhani Degassing Chamber offers superior vacuum performance for Vaduz\'s pharmaceutical facilities and material R&D labs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Vaduz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liechtenstein and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Vaduz, Liechtenstein',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Vaduz, Liechtenstein. Ensure leak-proof welds in Vaduz\'s storage tanks and pipelines with our advanced NDT vacuum box testing unit.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Vaduz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liechtenstein and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Vaduz, Liechtenstein',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Vaduz, Liechtenstein. Ensure total product integrity in Vaduz with our durable transparent vacuum chamber, optimized for underwater leak inspection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Vaduz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Liechtenstein and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Vaduz, Liechtenstein',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Vaduz.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Vaduz, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Contamination-Free Sampler Supplier in Vaduz, Liechtenstein',
        'desc' => [
            'Burhani Engineering Technology is a premier manufacturer of gas monitoring systems serving industrial research in Vaduz, Liechtenstein. The VC20 unit is engineered to support laboratory environmental compliance and industrial VOC monitoring audits.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Liechtenstein and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Hersteller von PCR-Kammern in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Hersteller von PCR-Kammern</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Anbieter von PCR-Arbeitsstationen</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exporteur von PCR-Kammern</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Vaduz, Liechtenstein',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Vaduz and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
