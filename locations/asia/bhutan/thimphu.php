<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Thimphu';
$country = 'Bhutan';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #003049 0%, #d62828 100%)';
$intro_p1 = 'Thimphu, a major center for hydroelectric power, agro-industry, and construction in Bhutan, requires advanced technological solutions for high-standard quality assurance. Thimphu leads Bhutan\'s industrial modernization with a focus on sustainable energy and infrastructure. Burhani Engineering Technology is proud to serve the Thimphu industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Thimphu — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Thimphu with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Thimphu, Bhutan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Thimphu, Bhutan. In Thimphu, industrial production lines rely on our vacuum leak testing equipment to ensure the highest standards of package integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Thimphu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bhutan and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Thimphu, Bhutan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Thimphu, Bhutan. The Burhani Vacuum Glove Box unit offers a contamination-free workspace for Thimphu\'s pharmaceutical and high-tech industries.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Thimphu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bhutan and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Thimphu, Bhutan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Thimphu, Bhutan. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, designed for Thimphu\'s diverse material needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Thimphu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bhutan and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Thimphu, Bhutan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Thimphu, Bhutan. In Thimphu, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Thimphu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bhutan and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Thimphu, Bhutan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Thimphu, Bhutan. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Thimphu\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Thimphu, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bhutan and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Thimphu, Bhutan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Thimphu.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Thimphu, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampler Supplier in Thimphu, Bhutan',
        'desc' => [
            'Our company manufactures state-of-the-art environmental sampling equipment, designed for municipal odor control audits in Thimphu, Bhutan. The VC20 unit delivers reliable hazardous vapor sampling with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Thimphu. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Thimphu, Bhutan',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Thimphu and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
