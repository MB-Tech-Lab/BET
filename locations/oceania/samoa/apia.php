<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Apia';
$country = 'Samoa';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Apia, the capital of the Independent State of Samoa, is the nerve centre of a growing Pacific economy anchored in food processing, fisheries, and export logistics. Burhani Engineering Technology reaches Apia as a reliable manufacturer, supplier, importer, exporter, and dealer of vacuum testing equipment for Pacific-region industries.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of food and beverage processing, fisheries export, packaging, and port logistics requirements in Apia.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Apia, Samoa',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Apia, Samoa. The Vacuum Leak Test Machine is engineered to detect gross leaks in flexible packaging and sterile barrier systems through internal pressurization and bubble emission testing. In Apia\'s food and beverage processing, fisheries export, packaging, and port logistics sector, this system provides rapid, reliable quality assurance for pouches, sachets, and pharmaceutical packaging.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Apia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Samoa and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Apia, Samoa',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Apia, Samoa. Laboratories and industrial units across Apia, Samoa requiring an oxygen-free and moisture-controlled environment trust Burhani Engineering Technology\'s vacuum glove boxes. These units are built for applications in materials research, semiconductor handling, and pharmaceutical compounding where atmospheric contamination is unacceptable.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Apia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Samoa and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Apia, Samoa',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Apia, Samoa. For polymer processors and material scientists operating in Apia\'s industrial sector, the Burhani Vacuum Degassing Chamber provides efficient removal of dissolved gases and air inclusions. Available in both cube and cylindrical configurations, these chambers are sized to match everything from small lab batches to production-scale operations.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Apia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Samoa and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Apia, Samoa',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Apia, Samoa. The Burhani vacuum box weld tester brings portable, non-destructive weld inspection capability to field sites and fabrication shops across Apia, Samoa. With a durable acrylic base, robust vacuum fittings, and a calibrated gauge, the device requires only a soap solution and a standard vacuum pump to perform reliable leak detection.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Apia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Samoa and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Apia, Samoa',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Apia, Samoa. The Burhani transparent vacuum vessel\'s adjustable tank height feet, lockable caster wheels, and 1-inch NPT fittings make it easy to install and reposition within Apia\'s packaging facilities. Its clear acrylic tank enables full visibility during submersion testing, ensuring no defective packages pass undetected.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Apia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Samoa and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Apia, Samoa',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Apia.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Apia, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Sampling Equipment Exporter in Apia, Samoa',
        'desc' => [
            'Burhani Engineering Technology is a leading manufacturer of air sampling systems serving environmental projects in Apia, Samoa. The VC20 gas sampler is engineered to support environmental field sampling and coastal environmental air monitoring in Apia.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Samoa and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Apia, Samoa',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Apia or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
