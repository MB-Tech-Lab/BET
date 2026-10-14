<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Dar es Salaam';
$country = 'Tanzania';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Dar es Salaam, a vital industrial player in Tanzania, is making significant strides in manufacturing, logistics, and maritime engineering. Dar es Salaam is the primary industrial port and commercial center of Tanzania. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Dar es Salaam\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Dar es Salaam — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Dar es Salaam with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Dar es Salaam, Tanzania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Dar es Salaam, Tanzania. Protect your product quality in Dar es Salaam with our advanced vacuum leak test machine, optimized for rapid and accurate evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Dar es Salaam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tanzania and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Dar es Salaam, Tanzania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Dar es Salaam, Tanzania. Our Vacuum Glove Box provides a controlled inert atmosphere for sensitive chemical handling and research in Dar es Salaam\'s industrial plants.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Dar es Salaam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tanzania and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Dar es Salaam, Tanzania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Dar es Salaam, Tanzania. Used extensively in Dar es Salaam\'s oil refineries and industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Dar es Salaam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tanzania and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Dar es Salaam, Tanzania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Dar es Salaam, Tanzania. The Burhani Vacuum Weld Tester is engineered for field use in Dar es Salaam\'s mining operations, oil refineries, and industrial plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Dar es Salaam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tanzania and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Dar es Salaam, Tanzania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Dar es Salaam, Tanzania. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Dar es Salaam\'s infrastructure and energy labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Dar es Salaam, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tanzania and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Dar es Salaam, Tanzania',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Dar es Salaam.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Dar es Salaam, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Gas Collection Device Exporter in Dar es Salaam, Tanzania',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of laboratory-grade air quality testing systems serving environmental projects in Dar es Salaam, Tanzania. The VC20 gas sampler is engineered to support scientific compliance gas sampling and field air collection protocols.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Tanzania and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'Mtengenezaji wa Vyumba vya PCR huko ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology ni <strong>Mtengenezaji wa Vyumba vya PCR</strong> anayeaminika huko ' . $city . ', ' . $country . '. Vituo vyetu vya kazi vilivyodhibitiwa kuzuia uchafuzi vina kichujio cha HEPA na uzuiaji viini vya UV kwa ushughulikiaji salama wa DNA/RNA.',
            'Kama <strong>Msambazaji mkuu wa Vituo vya Kazi vya PCR</strong> huko ' . $city . ', tunatoa vifaa vya kisasa vilivyoundwa kuzuia uchafuzi mtambuka wakati wa maandalizi muhimu ya biolojia ya molekuli na uchunguzi.',
            'Kampuni yetu pia inahudumu kama <strong>Msafirishaji na Muuzaji mashuhuri wa Vyumba vya PCR</strong>, ikitoa suluhisho za ubora wa juu za maabara kwa taasisi za utafiti na hospitali kote ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Dar es Salaam, Tanzania',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Dar es Salaam and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
