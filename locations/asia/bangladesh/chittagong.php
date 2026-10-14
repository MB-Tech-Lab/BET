<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Chittagong';
$country = 'Bangladesh';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #003049 0%, #d62828 100%)';
$intro_p1 = 'Chittagong, a major center for shipbuilding, petroleum refining, and logistics in Bangladesh, requires advanced technological solutions for high-standard quality assurance. Chittagong is the primary industrial port of Bangladesh and a gateway for regional trade. Burhani Engineering Technology is proud to serve the Chittagong industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Chittagong — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Chittagong with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Chittagong, Bangladesh',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Chittagong, Bangladesh. Our Vacuum Leak Test Machine is a vital inspection unit for Chittagong\'s packaging plants, providing bubble leak detection across multiple ASTM methods.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Chittagong, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bangladesh and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Chittagong, Bangladesh',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Chittagong, Bangladesh. In Chittagong, precision engineering facilities utilize our vacuum glove box systems to handle sensitive electronics and materials.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Chittagong, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bangladesh and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Chittagong, Bangladesh',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Chittagong, Bangladesh. The Burhani Degassing Chamber offers superior vacuum performance for Chittagong\'s chemical processing and precision engineering projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Chittagong, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bangladesh and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Chittagong, Bangladesh',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Chittagong, Bangladesh. Ensure leak-proof welds in Chittagong\'s energy infrastructure and storage tanks with our advanced NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Chittagong, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bangladesh and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Chittagong, Bangladesh',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Chittagong, Bangladesh. Ensure packaging perfection in Chittagong with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Chittagong, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bangladesh and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Chittagong, Bangladesh',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Chittagong.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Chittagong, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Supplier in Chittagong, Bangladesh',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Chittagong, Bangladesh, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene and municipal odor monitoring.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Bangladesh choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Chittagong, Bangladesh',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Chittagong and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
