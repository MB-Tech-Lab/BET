<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Santiago';
$country = 'Chile';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Santiago, Chile\'s dynamic capital and South America\'s most developed financial centre, serves as the command hub for the country\'s world-leading copper mining industry and rapidly expanding lithium processing sector. Burhani Engineering Technology proudly operates in Santiago as a reliable manufacturer, supplier, exporter, importer, and dealer of vacuum testing instrumentation.';
$intro_p2 = 'Chile\'s mineral extraction and processing facilities — ranging from copper smelters in the Atacama to lithium brine processing plants — require precision vacuum quality assurance systems that can handle harsh operating environments. Burhani Engineering Technology\'s robust vacuum testing equipment is engineered for exactly these conditions.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Santiago, Chile',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Santiago, Chile. Designed for both laboratory and production-line use, the Burhani Vacuum Leak Test Machines ensures that flexible pouches and sterile barrier systems meet rigorous seal integrity standards in Santiago\'s industrial environment.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Santiago, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Chile and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Santiago, Chile',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Santiago, Chile. Burhani Engineering Technology\'s vacuum glove box provides an inert, oxygen-free workspace for sensitive material handling, semiconductor research, and pharmaceutical compounding at Santiago\'s advanced research and manufacturing facilities.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Santiago, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Chile and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Santiago, Chile',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Santiago, Chile. Our industrial vacuum degassing system eliminates entrapped air from viscous materials including adhesives, potting compounds, and food-grade gels, ensuring uniform product quality across Santiago\'s food processing and chemical manufacturing operations.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Santiago, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Chile and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Santiago, Chile',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Santiago, Chile. The Burhani vacuum weld test box uses a calibrated vacuum gauge and durable acrylic viewing window to provide instant visual confirmation of weld leaks — supporting Santiago\'s tank inspection, pipeline commissioning, and NDT quality programs.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Santiago, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Chile and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Santiago, Chile',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Santiago, Chile. The Burhani transparent vacuum chamber\'s modular design and integrated NPT fittings enable rapid connection to standard vacuum pumps, making it a versatile, immediately deployable asset for Santiago\'s quality assurance operations.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Santiago, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Chile and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Santiago, Chile',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Santiago.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Santiago, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Emission Testing Chamber Provider in Santiago, Chile',
        'desc' => [
            'For environmental research laboratories and mining agencies in Santiago, Chile, we supply certified environmental air monitors. The VC20 supports clean air quality research and environmental compliance audits.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Santiago.'
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
    'title' => 'Supply Vacuum Testing Equipment to Santiago, Chile',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Santiago or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
