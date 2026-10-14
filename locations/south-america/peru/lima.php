<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Lima';
$country = 'Peru';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Lima, Peru\'s coastal capital and South America\'s third-largest metropolitan area, anchors a diverse economy spanning copper and zinc mining operations, fishmeal processing, petroleum refining, and large-scale infrastructure construction. Burhani Engineering Technology proudly serves Lima\'s industrial base as a manufacturer, supplier, exporter, importer, and dealer of vacuum testing equipment.';
$intro_p2 = 'Peru\'s mining sector — one of the world\'s largest producers of copper, zinc, and silver — demands precision vacuum quality assurance tools that can withstand high-altitude and demanding environmental conditions. Burhani Engineering Technology\'s product range, from portable weld testing boxes to heavy-duty degassing chambers, meets these requirements comprehensively.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Lima, Peru',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Lima, Peru. Designed for both laboratory and production-line use, the Burhani Vacuum Leak Test Machines ensures that flexible pouches and sterile barrier systems meet rigorous seal integrity standards in Lima\'s industrial environment.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Lima, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Peru and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Lima, Peru',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Lima, Peru. Burhani Engineering Technology\'s vacuum glove box provides an inert, oxygen-free workspace for sensitive material handling, semiconductor research, and pharmaceutical compounding at Lima\'s advanced research and manufacturing facilities.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Lima, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Peru and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Lima, Peru',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Lima, Peru. Our industrial vacuum degassing system eliminates entrapped air from viscous materials including adhesives, potting compounds, and food-grade gels, ensuring uniform product quality across Lima\'s food processing and chemical manufacturing operations.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Lima, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Peru and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Lima, Peru',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Lima, Peru. The Burhani vacuum weld test box uses a calibrated vacuum gauge and durable acrylic viewing window to provide instant visual confirmation of weld leaks — supporting Lima\'s tank inspection, pipeline commissioning, and NDT quality programs.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Lima, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Peru and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Lima, Peru',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Lima, Peru. The Burhani transparent vacuum chamber\'s modular design and integrated NPT fittings enable rapid connection to standard vacuum pumps, making it a versatile, immediately deployable asset for Lima\'s quality assurance operations.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Lima, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Peru and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Lima, Peru',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Lima.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Lima, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Sampling Equipment Exporter in Lima, Peru',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of environmental test systems serving production zones in Lima, Peru. The VC20 sampler is designed for mining zone gas sampling and environmental field research in Lima.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Peru and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Lima, Peru',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Lima or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
