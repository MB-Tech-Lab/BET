<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Bogota';
$country = 'Colombia';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Bogotá, Colombia\'s sprawling capital and the country\'s primary industrial and commercial centre, anchors a growing economy driven by oil & gas pipeline infrastructure, mining, food processing, and chemical distribution. Burhani Engineering Technology serves Bogotá\'s industrial community as a dedicated manufacturer, supplier, exporter, importer, and dealer of vacuum testing equipment.';
$intro_p2 = 'Colombia\'s strategic position as South America\'s fourth-largest economy and its expanding pipeline and petrochemical sector create strong demand for certified NDT equipment. Burhani Engineering Technology\'s weld testing boxes, vacuum leak testers, and degassing chambers meet the rigorous requirements of Colombia\'s industrial quality standards.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Bogota, Colombia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Bogota, Colombia. The Vacuum Leak Test Machine detects gross leaks in flexible packaging via internal pressurization and bubble emission, providing rapid quality assurance for pharmaceutical pouches and food sachets at Bogota\'s production facilities.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Bogota, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Colombia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Bogota, Colombia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Bogota, Colombia. The acrylic vacuum glove box system from Burhani enables contamination-free handling of reactive chemicals, moisture-sensitive compounds, and high-purity materials — perfectly suited to Bogota\'s pharmaceutical and materials research laboratories.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Bogota, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Colombia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Bogota, Colombia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Bogota, Colombia. The Burhani degassing chamber is available in cylindrical and cube configurations to accommodate laboratory-scale to production-scale operations, meeting the diverse degassing requirements of Bogota\'s industrial and research sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Bogota, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Colombia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Bogota, Colombia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Bogota, Colombia. Designed for rugged industrial use, the Burhani flat-bottom weld testing system allows inspectors in Bogota\'s oil refineries, mining plants, and storage tank farms to perform rapid, repeatable bubble leak inspections on critical weld seams.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Bogota, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Colombia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Bogota, Colombia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Bogota, Colombia. Featuring adjustable feet, caster wheels, and a crystal-clear acrylic tank, the Burhani transparent pressure vessel supports Bogota\'s manufacturers in conducting ASTM-compliant submersion and vacuum leak tests with precision and ease.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Bogota, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Colombia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Bogota, Colombia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Bogota.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Bogota, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Bogota, Colombia',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in Bogota, Colombia, we provide the VC20 collection system. This system is purpose-built to support industrial hygiene monitoring and landfill methane testing in major municipal hubs in Bogota.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Colombia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Bogota, Colombia',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Bogota or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
