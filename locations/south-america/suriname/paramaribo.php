<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Paramaribo';
$country = 'Suriname';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Paramaribo, the capital of Suriname, oversees an industrial economy rooted in bauxite and alumina processing, offshore oil and gas production, and timber exports. Burhani Engineering Technology extends its vacuum testing expertise to Paramaribo\'s industrial operators as a manufacturer, supplier, exporter, importer, and dealer.';
$intro_p2 = 'Suriname\'s bauxite processing facilities and offshore oil infrastructure require vacuum integrity testing systems that provide reliable, repeatable results under tropical operating conditions. Burhani Engineering Technology\'s industrial-grade vacuum testing equipment — including NDT weld inspection boxes and degassing chambers — is specifically designed for these demanding environments.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Paramaribo, Suriname',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Paramaribo, Suriname. The Vacuum Leak Test Machine detects gross leaks in flexible packaging via internal pressurization and bubble emission, providing rapid quality assurance for pharmaceutical pouches and food sachets at Paramaribo\'s production facilities.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Paramaribo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Suriname and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Paramaribo, Suriname',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Paramaribo, Suriname. The acrylic vacuum glove box system from Burhani enables contamination-free handling of reactive chemicals, moisture-sensitive compounds, and high-purity materials — perfectly suited to Paramaribo\'s pharmaceutical and materials research laboratories.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Paramaribo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Suriname and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Paramaribo, Suriname',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Paramaribo, Suriname. The Burhani degassing chamber is available in cylindrical and cube configurations to accommodate laboratory-scale to production-scale operations, meeting the diverse degassing requirements of Paramaribo\'s industrial and research sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Paramaribo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Suriname and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Paramaribo, Suriname',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Paramaribo, Suriname. Designed for rugged industrial use, the Burhani flat-bottom weld testing system allows inspectors in Paramaribo\'s oil refineries, mining plants, and storage tank farms to perform rapid, repeatable bubble leak inspections on critical weld seams.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Paramaribo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Suriname and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Paramaribo, Suriname',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Paramaribo, Suriname. Featuring adjustable feet, caster wheels, and a crystal-clear acrylic tank, the Burhani transparent pressure vessel supports Paramaribo\'s manufacturers in conducting ASTM-compliant submersion and vacuum leak tests with precision and ease.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Paramaribo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Suriname and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Paramaribo, Suriname',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Paramaribo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Paramaribo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Paramaribo, Suriname',
        'desc' => [
            'For oilfields, refineries, municipal facilities, and environmental engineers in Paramaribo, Suriname, we supply certified environmental gas monitors. The VC20 supports high-accuracy emissions collection and odor monitoring.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Paramaribo.'
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
    'title' => 'Supply Vacuum Testing Equipment to Paramaribo, Suriname',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Paramaribo or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
