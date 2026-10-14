<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Sana’a';
$country = 'Yemen';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #1d3557 0%, #e63946 100%)';
$intro_p1 = 'Sana’a, a major center for petroleum services, food processing, and construction in Yemen, requires advanced technological solutions for high-standard quality assurance. Sana’a is the administrative and industrial center of Yemen. Burhani Engineering Technology is proud to serve the Sana’a industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Sana’a — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Sana’a with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Sana’a, Yemen',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Sana’a, Yemen. Protect your production quality in Sana’a with our reliable bubble emission leak tester, a standard in modern packaging plants.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Sana’a, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Yemen and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Sana’a, Yemen',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Sana’a, Yemen. Our Vacuum Glove Box provides a controlled inert atmosphere for advanced laboratory testing and research in Sana’a.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Sana’a, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Yemen and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Sana’a, Yemen',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Sana’a, Yemen. Used extensively in Sana’a\'s industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Sana’a, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Yemen and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Sana’a, Yemen',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Sana’a, Yemen. The Burhani Vacuum Weld Tester is engineered for field use in Sana’a\'s oil & gas and heavy manufacturing sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Sana’a, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Yemen and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Sana’a, Yemen',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Sana’a, Yemen. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Sana’a\'s automotive testing facilities.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Sana’a, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Yemen and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Sana’a, Yemen',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Sana’a.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Sana’a, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Monitoring Unit Manufacturer in Sana’a, Yemen',
        'desc' => [
            'For refineries, chemical processing plants, and energy infrastructure in Sana’a, Yemen, we supply certified environmental air monitors. The VC20 supports compliance gas sampling according to strict regional audit requirements.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Sana’a.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'الشركة المصنعة لغرف PCR في ' . $city . '، ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>مصنعي غرف PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>مورد محطات عمل PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>مصدر غرف PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Sana’a, Yemen',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Sana’a and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
