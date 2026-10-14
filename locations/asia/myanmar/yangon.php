<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Yangon';
$country = 'Myanmar';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #003049 0%, #d62828 100%)';
$intro_p1 = 'Yangon, a major center for garments, food processing, and construction materials in Myanmar, requires advanced technological solutions for high-standard quality assurance. Yangon is the primary industrial and commercial hub of Myanmar. Burhani Engineering Technology is proud to serve the Yangon industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Yangon — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Yangon with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Yangon, Myanmar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Yangon, Myanmar. Optimize your quality control in Yangon with our high-performance vacuum leak test machine, designed for rapid industrial inspection.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Yangon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Myanmar and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Yangon, Myanmar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Yangon, Myanmar. Ensure the safety and integrity of your chemical processes in Yangon with our professional vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Yangon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Myanmar and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Yangon, Myanmar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Yangon, Myanmar. Our Vacuum Degassing Chamber is a high-standard system for resin and polymer processing in Yangon\'s manufacturing sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Yangon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Myanmar and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Yangon, Myanmar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Yangon, Myanmar. Perform reliable weld integrity evaluation on petrochemical plants and refinery operations in Yangon with our portable vacuum box.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Yangon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Myanmar and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Yangon, Myanmar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Yangon, Myanmar. The Burhani Transparent Vacuum unit provides exceptional clarity for quality analysis in Yangon\'s research and development labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Yangon, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Myanmar and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Yangon, Myanmar',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Yangon.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Yangon, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Supplier in Yangon, Myanmar',
        'desc' => [
            'As a leading supplier of environmental instrumentation in Yangon, Myanmar, we provide the VC20 system. This equipment is designed for wastewater gas testing and landfill methane sampling at municipal facilities in Yangon.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Myanmar choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Yangon, Myanmar',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Yangon and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
