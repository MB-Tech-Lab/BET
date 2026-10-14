<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Zagreb';
$country = 'Croatia';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Zagreb, a major center for pharmaceuticals, food processing, and electrical engineering in Croatia, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Zagreb leads Croatia\'s industrial output with a strong focus on high-standard testing. Burhani Engineering Technology is proud to serve the Zagreb industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Zagreb with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Zagreb, Croatia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Zagreb, Croatia. Engineered for European industrial standards, our vacuum leak tester delivers reliable results for Zagreb\'s high-standard industrial testing labs.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Zagreb, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Croatia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Zagreb, Croatia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Zagreb, Croatia. Ensure the safety and integrity of your experiments in Zagreb with our durable, high-performance vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Zagreb, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Croatia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Zagreb, Croatia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Zagreb, Croatia. Our Vacuum Degassing Chamber is a premier system for resin and polymer processing in Zagreb\'s precision engineering sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Zagreb, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Croatia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Zagreb, Croatia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Zagreb, Croatia. Perform reliable weld integrity analysis with our portable vacuum box system, a staple for industrial testing in Zagreb.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Zagreb, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Croatia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Zagreb, Croatia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Zagreb, Croatia. Designed for high-visibility industrial testing, our clear vessels are the preferred choice for Zagreb\'s R&D centers.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Zagreb, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Croatia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Zagreb, Croatia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Zagreb.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Zagreb, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Gas Collection System Exporter in Zagreb, Croatia',
        'desc' => [
            'As a leading supplier of environmental instrumentation in Zagreb, Croatia, we provide the VC20 system. This equipment is designed for odor investigation and industrial hygiene at municipal facilities in Zagreb.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Croatia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Zagreb, Croatia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Zagreb and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
