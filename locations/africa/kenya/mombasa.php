<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Mombasa';
$country = 'Kenya';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Mombasa, a vital industrial player in Kenya, is making significant strides in petroleum refining, maritime engineering, and logistics. Mombasa is Kenya\'s primary industrial port and a gateway for regional trade. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Mombasa\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Mombasa — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Mombasa with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Mombasa, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Mombasa, Kenya. The Burhani Vacuum Leak Test unit is an indispensable tool for Mombasa\'s manufacturing lines, delivering precise testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Mombasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Mombasa, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Mombasa, Kenya. Engineered for durability, our glove boxes serve the specialized needs of Mombasa\'s growing high-tech and mining sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Mombasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Mombasa, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Mombasa, Kenya. In Mombasa, our degassing chambers are the preferred choice for material analysis and production in the energy and mining sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Mombasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Mombasa, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Mombasa, Kenya. Our Flat Vacuum Box Weld Testing equipment is essential for API standard NDT inspections of oil storage tanks in Mombasa.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Mombasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Mombasa, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Mombasa, Kenya. In Mombasa, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Mombasa, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Kenya and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Mombasa, Kenya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Mombasa.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Mombasa, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Provider in Mombasa, Kenya',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Mombasa, Kenya, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene monitoring and chemical plant air testing.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Kenya choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Mombasa, Kenya',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Mombasa and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
