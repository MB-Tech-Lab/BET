<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Kabul';
$country = 'Afghanistan';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #d1495b 100%)';
$intro_p1 = 'Kabul, a major center for construction materials, food processing, and energy infrastructure in Afghanistan, requires advanced technological solutions for high-standard quality assurance. Kabul is the administrative and commercial heart of Afghanistan, focusing on rebuilding and industrial stability. Burhani Engineering Technology is proud to serve the Kabul industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Kabul — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Kabul with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Kabul, Afghanistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Kabul, Afghanistan. Our Vacuum Leak Test Machine is a vital inspection unit for Kabul\'s packaging plants, providing bubble leak detection across multiple ASTM methods.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Kabul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Afghanistan and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Kabul, Afghanistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Kabul, Afghanistan. In Kabul, precision engineering facilities utilize our vacuum glove box systems to handle sensitive electronics and materials.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Kabul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Afghanistan and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Kabul, Afghanistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Kabul, Afghanistan. The Burhani Degassing Chamber offers superior vacuum performance for Kabul\'s chemical processing and precision engineering projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Kabul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Afghanistan and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Kabul, Afghanistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Kabul, Afghanistan. Ensure leak-proof welds in Kabul\'s energy infrastructure and storage tanks with our advanced NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Kabul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Afghanistan and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Kabul, Afghanistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Kabul, Afghanistan. Ensure packaging perfection in Kabul with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Kabul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Afghanistan and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Kabul, Afghanistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Kabul.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Kabul, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampler Supplier in Kabul, Afghanistan',
        'desc' => [
            'Our company supplies heavy-duty air pollution monitoring devices for major industrial zones in Kabul, Afghanistan. The VC20 unit delivers absolute sample integrity for mining and energy projects.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Kabul. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Kabul, Afghanistan',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Kabul and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
