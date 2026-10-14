<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Nairobi';
$country = 'Kenya';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Nairobi, a vital industrial player in Kenya, is making significant strides in manufacturing, pharmaceuticals, and tech manufacturing. Nairobi is the leading industrial and technological hub of East Africa. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Nairobi\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Nairobi — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Nairobi with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Nairobi, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Nairobi, Kenya. In Nairobi, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of package integrity and seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Nairobi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Nairobi, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Nairobi, Kenya. The Burhani Vacuum Glove Box unit offers a sterile environment for pharmaceutical and material evaluation in Nairobi.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Nairobi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Nairobi, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Nairobi, Kenya. Eliminate trapped air and bubbles efficiently with our high-standard vacuum degassing equipment, designed for Nairobi\'s industrial needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Nairobi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Nairobi, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Nairobi, Kenya. In Nairobi, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Nairobi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Nairobi, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Nairobi, Kenya. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Nairobi\'s packaging industries.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Nairobi, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Nairobi, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Nairobi.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Nairobi, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Hazardous Vapor Collection Unit Supplier in Nairobi, Kenya',
        'desc' => [
            'Our company manufactures state-of-the-art environmental sampling equipment, designed for municipal odor control audits in Nairobi, Kenya. The VC20 unit delivers reliable hazardous vapor sampling with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Nairobi. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Nairobi, Kenya',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Nairobi and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
