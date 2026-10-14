<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Surabaya';
$country = 'Indonesia';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #003049 0%, #d62828 100%)';
$intro_p1 = 'Surabaya, a major center for shipbuilding, heavy manufacturing, and food processing in Indonesia, requires advanced technological solutions for high-standard quality assurance. Surabaya is the primary industrial port and manufacturing center of East Java. Burhani Engineering Technology is proud to serve the Surabaya industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Surabaya — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Surabaya with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Surabaya, Indonesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Surabaya, Indonesia. The Burhani Vacuum Leak Test system is engineered for Surabaya\'s pharmaceutical and food sectors, delivering precise seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Surabaya, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Indonesia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Surabaya, Indonesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Surabaya, Indonesia. Engineered for clarity and durability, our glove boxes serve the specialized needs of Surabaya\'s industrial and research sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Surabaya, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Indonesia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Surabaya, Indonesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Surabaya, Indonesia. In Surabaya, our degassing chambers are the preferred choice for laboratory testing and production-scale material processing.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Surabaya, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Indonesia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Surabaya, Indonesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Surabaya, Indonesia. Our Flat Vacuum Box Weld Testing equipment is essential for API standard tank inspection and pipeline leak testing in Surabaya.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Surabaya, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Indonesia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Surabaya, Indonesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Surabaya, Indonesia. In Surabaya, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Surabaya, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Indonesia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Surabaya, Indonesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Surabaya.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Surabaya, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Monitoring Unit Manufacturer in Surabaya, Indonesia',
        'desc' => [
            'For manufacturing plants, municipal facilities, and environmental engineers in Surabaya, Indonesia, we supply certified environmental gas monitors. The VC20 supports high-accuracy emissions collection and odor monitoring.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Surabaya.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Produsen Bilik PCR di ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Produsen Bilik PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Pemasok Stasiun Kerja PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Eksportir Bilik PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Surabaya, Indonesia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Surabaya and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
