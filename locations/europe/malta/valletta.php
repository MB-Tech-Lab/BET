<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Valletta';
$country = 'Malta';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Valletta, a major center for pharmaceuticals, marine engineering, and aviation maintenance in Malta, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Malta is a key Mediterranean hub for pharmaceutical manufacturing and aviation services. Burhani Engineering Technology is proud to serve the Valletta industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Valletta with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Valletta, Malta',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Valletta, Malta. Engineered for European industrial standards, our vacuum leak tester delivers reliable results for Valletta\'s high-standard industrial testing labs.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Valletta, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malta and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Valletta, Malta',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Valletta, Malta. Ensure the safety and integrity of your experiments in Valletta with our durable, high-performance vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Valletta, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malta and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Valletta, Malta',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Valletta, Malta. Our Vacuum Degassing Chamber is a premier system for resin and polymer processing in Valletta\'s precision engineering sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Valletta, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malta and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Valletta, Malta',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Valletta, Malta. Perform reliable weld integrity analysis with our portable vacuum box system, a staple for industrial testing in Valletta.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Valletta, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malta and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Valletta, Malta',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Valletta, Malta. Designed for high-visibility industrial testing, our clear vessels are the preferred choice for Valletta\'s R&D centers.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Valletta, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Malta and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Valletta, Malta',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Valletta.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Valletta, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Manufacturer in Valletta, Malta',
        'desc' => [
            'Our company manufactures state-of-the-art gas collection systems, designed for environmental compliance auditing in Valletta, Malta. The VC20 unit ensures pristine gas sample collection with zero carryover.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Valletta. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Valletta, Malta',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Valletta and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
