<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Monaco';
$country = 'Monaco';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Monaco, a major center for precision cosmetics, pharmaceuticals, and marine tech in Monaco, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Monaco hosts specialized, high-value industrial activities in a compact, elite environment. Burhani Engineering Technology is proud to serve the Monaco industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Monaco with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Monaco, Monaco',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Monaco, Monaco. Our Vacuum Leak Test Machine is an essential inspection system for Monaco\'s pharmaceutical facilities, ensuring the highest standards of packaging integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Monaco, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Monaco and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Monaco, Monaco',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Monaco, Monaco. In Monaco, precision testing labs rely on our vacuum glove box systems to handle reactive materials in a contamination-free environment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Monaco, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Monaco and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Monaco, Monaco',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Monaco, Monaco. The Burhani Degassing Chamber offers superior vacuum performance for Monaco\'s pharmaceutical facilities and material R&D labs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Monaco, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Monaco and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Monaco, Monaco',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Monaco, Monaco. Ensure leak-proof welds in Monaco\'s storage tanks and pipelines with our advanced NDT vacuum box testing unit.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Monaco, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Monaco and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Monaco, Monaco',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Monaco, Monaco. Ensure total product integrity in Monaco with our durable transparent vacuum chamber, optimized for underwater leak inspection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Monaco, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Monaco and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Monaco, Monaco',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Monaco.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Monaco, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Contamination-Free Sampler Supplier in Monaco, Monaco',
        'desc' => [
            'As a trusted supplier of advanced test equipment in Monaco, Monaco, we provide the VC20 sampling chamber. This instrumentation is developed specifically for emissions control and cleanroom air sampling requirements in Monaco.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Monaco choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Monaco, Monaco',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Monaco and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
