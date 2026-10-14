<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Copenhagen';
$country = 'Denmark';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Copenhagen, a major center for biotechnology, green energy, and maritime engineering in Denmark, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Denmark is a pioneer in sustainable manufacturing and medical research. Burhani Engineering Technology is proud to serve the Copenhagen industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Copenhagen with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Copenhagen, Denmark',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Copenhagen, Denmark. Our Vacuum Leak Test Machine is an essential inspection system for Copenhagen\'s pharmaceutical facilities, ensuring the highest standards of packaging integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Copenhagen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Denmark and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Copenhagen, Denmark',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Copenhagen, Denmark. In Copenhagen, precision testing labs rely on our vacuum glove box systems to handle reactive materials in a contamination-free environment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Copenhagen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Denmark and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Copenhagen, Denmark',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Copenhagen, Denmark. The Burhani Degassing Chamber offers superior vacuum performance for Copenhagen\'s pharmaceutical facilities and material R&D labs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Copenhagen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Denmark and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Copenhagen, Denmark',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Copenhagen, Denmark. Ensure leak-proof welds in Copenhagen\'s storage tanks and pipelines with our advanced NDT vacuum box testing unit.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Copenhagen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Denmark and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Copenhagen, Denmark',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Copenhagen, Denmark. Ensure total product integrity in Copenhagen with our durable transparent vacuum chamber, optimized for underwater leak inspection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Copenhagen, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Denmark and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Copenhagen, Denmark',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Copenhagen.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Copenhagen, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Testing Chamber Provider in Copenhagen, Denmark',
        'desc' => [
            'For environmental research laboratories and municipal agencies in Copenhagen, Denmark, we supply certified environmental air monitors. The VC20 supports clean air quality research and environmental field testing.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Copenhagen.'
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
    'title' => 'Supply Vacuum Testing Equipment to Copenhagen, Denmark',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Copenhagen and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
