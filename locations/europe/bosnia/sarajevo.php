<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Sarajevo';
$country = 'Bosnia';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Sarajevo, a major center for metalworking, automotive parts, and energy production in Bosnia, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Sarajevo is reviving its industrial base with a focus on precision metal components. Burhani Engineering Technology is proud to serve the Sarajevo industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Sarajevo with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Sarajevo, Bosnia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Sarajevo, Bosnia. In Sarajevo, industrial R&D centers utilize our vacuum leak testing unit to perform precise analysis on flexible and rigid packaging across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Sarajevo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bosnia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Sarajevo, Bosnia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Sarajevo, Bosnia. Our high-quality glove box unit is engineered for pharmaceutical production in Sarajevo, offering total control over atmospheric conditions.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Sarajevo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bosnia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Sarajevo, Bosnia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Sarajevo, Bosnia. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, the standard for excellence in Sarajevo.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Sarajevo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bosnia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Sarajevo, Bosnia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Sarajevo, Bosnia. In Sarajevo, our vacuum box weld testing equipment provides instantaneous visual confirmation of weld quality for heavy engineering.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Sarajevo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bosnia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Sarajevo, Bosnia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Sarajevo, Bosnia. The Burhani Transparent Vacuum Vessel allows for clear, visual inspection during submersion leak testing in Sarajevo\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Sarajevo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bosnia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Sarajevo, Bosnia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Sarajevo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Sarajevo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Manufacturer in Sarajevo, Bosnia',
        'desc' => [
            'As a leading supplier of environmental instrumentation in Sarajevo, Bosnia, we provide the VC20 system. This equipment is designed for odor investigation and industrial hygiene at municipal facilities in Sarajevo.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Bosnia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Sarajevo, Bosnia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Sarajevo and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
