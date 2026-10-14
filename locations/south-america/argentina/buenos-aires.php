<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Buenos Aires';
$country = 'Argentina';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Buenos Aires, the vibrant capital and commercial powerhouse of Argentina, hosts a diverse industrial base spanning energy, agribusiness, and heavy manufacturing. Burhani Engineering Technology proudly extends its reach to Buenos Aires as a dedicated manufacturer, supplier, exporter, importer, and dealer of precision vacuum testing equipment.';
$intro_p2 = 'From the sprawling petrochemical corridors of the Greater Buenos Aires metropolitan zone to the country\'s expanding food & beverage processing and automotive manufacturing hubs, reliable vacuum testing solutions are an operational necessity. Burhani Engineering Technology delivers certified equipment built to global NDT and industrial standards.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Buenos Aires, Argentina',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Buenos Aires, Argentina. The Vacuum Leak Test Machine detects gross leaks in flexible packaging via internal pressurization and bubble emission, providing rapid quality assurance for pharmaceutical pouches and food sachets at Buenos Aires\'s production facilities.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Buenos Aires, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Argentina and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Buenos Aires, Argentina',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Buenos Aires, Argentina. The acrylic vacuum glove box system from Burhani enables contamination-free handling of reactive chemicals, moisture-sensitive compounds, and high-purity materials — perfectly suited to Buenos Aires\'s pharmaceutical and materials research laboratories.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Buenos Aires, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Argentina and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Buenos Aires, Argentina',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Buenos Aires, Argentina. The Burhani degassing chamber is available in cylindrical and cube configurations to accommodate laboratory-scale to production-scale operations, meeting the diverse degassing requirements of Buenos Aires\'s industrial and research sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Buenos Aires, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Argentina and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Buenos Aires, Argentina',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Buenos Aires, Argentina. Designed for rugged industrial use, the Burhani flat-bottom weld testing system allows inspectors in Buenos Aires\'s oil refineries, mining plants, and storage tank farms to perform rapid, repeatable bubble leak inspections on critical weld seams.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Buenos Aires, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Argentina and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Buenos Aires, Argentina',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Buenos Aires, Argentina. Featuring adjustable feet, caster wheels, and a crystal-clear acrylic tank, the Burhani transparent pressure vessel supports Buenos Aires\'s manufacturers in conducting ASTM-compliant submersion and vacuum leak tests with precision and ease.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Buenos Aires, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Argentina and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Buenos Aires, Argentina',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Buenos Aires.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Buenos Aires, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Testing Chamber Provider in Buenos Aires, Argentina',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Buenos Aires, Argentina, we introduce the VC20 monitoring system. This instrumentation is developed specifically for industrial air sampling and hazardous vapor control.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Argentina choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Buenos Aires, Argentina',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Buenos Aires or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
