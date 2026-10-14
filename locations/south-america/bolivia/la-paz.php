<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'La Paz';
$country = 'Bolivia';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'La Paz, Bolivia\'s seat of government and the world\'s highest capital city, is a strategic nexus for the country\'s natural gas, mining, and emerging lithium industry sectors. Burhani Engineering Technology proudly serves industrial clients in La Paz as a manufacturer, supplier, exporter, importer, and dealer of advanced vacuum testing systems.';
$intro_p2 = 'Bolivia\'s abundant mineral wealth and growing lithium battery material sector demand rigorous leak detection and vacuum quality assurance at every stage of production. Burhani Engineering Technology\'s comprehensive line of vacuum testing instruments — from Vacuum Leak Test Machines to degassing chambers — is fully equipped to serve La Paz\'s industrial landscape.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in La Paz, Bolivia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in La Paz, Bolivia. Burhani\'s vacuum leak detection system uses controlled internal pressurization to identify gross seal failures in medical and food packaging — an essential instrument for La Paz\'s sterile barrier and food-grade manufacturing operations.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in La Paz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bolivia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in La Paz, Bolivia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in La Paz, Bolivia. Our vacuum glove box unit maintains a controlled inert atmosphere for precision applications in battery material research, pharmaceutical synthesis, and high-purity manufacturing processes that are critical to La Paz\'s industrial sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in La Paz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bolivia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in La Paz, Bolivia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in La Paz, Bolivia. Vacuum degassing with the Burhani chamber ensures bubble-free castings, void-free resin infusions, and contamination-free material batches — critical for La Paz\'s composite manufacturing, food packaging, and specialty chemical producers.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in La Paz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bolivia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in La Paz, Bolivia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in La Paz, Bolivia. The Burhani vacuum box NDT system provides a safe, portable, and accurate method for detecting weld discontinuities in La Paz\'s industrial structures, reducing the risk of catastrophic failures in storage tanks and pressurized pipelines.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in La Paz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bolivia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in La Paz, Bolivia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in La Paz, Bolivia. Burhani\'s transparent vacuum and pressure vessel provides full optical visibility during leak immersion testing, making it the preferred solution for La Paz\'s food packaging manufacturers, pharmaceutical producers, and industrial quality labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in La Paz, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bolivia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in La Paz, Bolivia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in La Paz.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in La Paz, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Gas Collection Unit Provider in La Paz, Bolivia',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in La Paz, Bolivia, we provide the VC20 collection system. This system is purpose-built to support industrial hygiene monitoring and landfill methane testing in major municipal hubs in La Paz.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Bolivia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Fabricante de cámaras PCR en ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Fabricante de cámaras PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Proveedor de estaciones de trabajo PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exportador de cámaras PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to La Paz, Bolivia',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in La Paz or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
