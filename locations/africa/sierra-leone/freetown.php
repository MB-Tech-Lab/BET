<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Freetown';
$country = 'Sierra Leone';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Freetown, a vital industrial player in Sierra Leone, is making significant strides in mining services, maritime logistics, and construction. Freetown anchors Sierra Leone\'s resource-based industrial sector. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Freetown\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Freetown — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Freetown with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Freetown, Sierra Leone',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Freetown, Sierra Leone. The Burhani Vacuum Leak Test unit is an indispensable tool for Freetown\'s manufacturing lines, delivering precise testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Freetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sierra Leone and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Freetown, Sierra Leone',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Freetown, Sierra Leone. Engineered for durability, our glove boxes serve the specialized needs of Freetown\'s growing high-tech and mining sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Freetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sierra Leone and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Freetown, Sierra Leone',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Freetown, Sierra Leone. In Freetown, our degassing chambers are the preferred choice for material analysis and production in the energy and mining sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Freetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sierra Leone and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Freetown, Sierra Leone',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Freetown, Sierra Leone. Our Flat Vacuum Box Weld Testing equipment is essential for API standard NDT inspections of oil storage tanks in Freetown.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Freetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sierra Leone and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Freetown, Sierra Leone',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Freetown, Sierra Leone. In Freetown, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Freetown, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sierra Leone and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Freetown, Sierra Leone',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Freetown.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Freetown, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Emission Sampler Dealer in Freetown, Sierra Leone',
        'desc' => [
            'For mining operations, petrochemical installations, and heavy industry plants in Freetown, Sierra Leone, we provide high-performance emission samplers. The VC20 ensures secure methane leak testing and industrial hygiene testing under extreme conditions.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This industrial-heavy mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Freetown.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'Manufacturer of PCR Chambers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Freetown, Sierra Leone',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Freetown and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
