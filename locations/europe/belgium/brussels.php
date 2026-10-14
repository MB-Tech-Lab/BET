<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Brussels';
$country = 'Belgium';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Brussels, a major center for pharmaceutical production, aerospace, and food processing in Belgium, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Brussels hosts a high concentration of international industrial research and pharmaceutical plants. Burhani Engineering Technology is proud to serve the Brussels industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Brussels with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Brussels, Belgium',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Brussels, Belgium. Optimize your production line in Brussels with our high-performance vacuum leak test machine, designed for precision testing and analysis.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Brussels, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Belgium and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Brussels, Belgium',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Brussels, Belgium. The Burhani Vacuum Glove Box provides a sterile, inert atmosphere for advanced aerospace systems and research labs in Brussels.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Brussels, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Belgium and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Brussels, Belgium',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Brussels, Belgium. Used by leading automotive plants in Brussels, our degassing unit ensures void-free material casting and high-standard industrial testing.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Brussels, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Belgium and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Brussels, Belgium',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Brussels, Belgium. The Burhani Vacuum Weld Tester is engineered for speed and precision in Brussels\'s aerospace and petrochemical plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Brussels, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Belgium and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Brussels, Belgium',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Brussels, Belgium. Engineered to withstand extreme pressures and vacuums, our transparent vessels serve the aerospace systems of Brussels.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Brussels, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Belgium and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Brussels, Belgium',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Brussels.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Brussels, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Sampling Equipment Dealer in Brussels, Belgium',
        'desc' => [
            'For scientific laboratories, pharmaceutical facilities, and manufacturing plants in Brussels, Belgium, we supply certified environmental air monitors. The VC20 supports compliance gas sampling according to strict European regulations.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Brussels.'
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
    'title' => 'Supply Vacuum Testing Equipment to Brussels, Belgium',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Brussels and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
