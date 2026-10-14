<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Sydney';
$country = 'Australia';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Sydney, Australia\'s largest commercial hub and a gateway to the Pacific, drives demand for precision vacuum technology across its thriving marine engineering, oil & gas, and construction sectors. Burhani Engineering Technology proudly serves clients in Sydney as a trusted manufacturer, supplier, exporter, importer, and dealer of world-class vacuum testing equipment.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of the offshore oil & gas industry, marine engineering, and large-scale infrastructure development requirements in Sydney.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Sydney, Australia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Sydney, Australia. The Vacuum Leak Test Machine is engineered to detect gross leaks in flexible packaging and sterile barrier systems through internal pressurization and bubble emission testing. In Sydney\'s the offshore oil & gas industry, marine engineering, and large-scale infrastructure development sector, this system provides rapid, reliable quality assurance for pouches, sachets, and pharmaceutical packaging.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Sydney, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Australia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Sydney, Australia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Sydney, Australia. Laboratories and industrial units across Sydney, Australia requiring an oxygen-free and moisture-controlled environment trust Burhani Engineering Technology\'s vacuum glove boxes. These units are built for applications in materials research, semiconductor handling, and pharmaceutical compounding where atmospheric contamination is unacceptable.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Sydney, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Australia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Sydney, Australia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Sydney, Australia. For polymer processors and material scientists operating in Sydney\'s industrial sector, the Burhani Vacuum Degassing Chamber provides efficient removal of dissolved gases and air inclusions. Available in both cube and cylindrical configurations, these chambers are sized to match everything from small lab batches to production-scale operations.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Sydney, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Australia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Sydney, Australia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Sydney, Australia. The Burhani vacuum box weld tester brings portable, non-destructive weld inspection capability to field sites and fabrication shops across Sydney, Australia. With a durable acrylic base, robust vacuum fittings, and a calibrated gauge, the device requires only a soap solution and a standard vacuum pump to perform reliable leak detection.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Sydney, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Australia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Sydney, Australia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Sydney, Australia. The Burhani transparent vacuum vessel\'s adjustable tank height feet, lockable caster wheels, and 1-inch NPT fittings make it easy to install and reposition within Sydney\'s packaging facilities. Its clear acrylic tank enables full visibility during submersion testing, ensuring no defective packages pass undetected.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Sydney, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Australia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Sydney, Australia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Sydney.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Sydney, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Sydney, Australia',
        'desc' => [
            'As a trusted supplier of advanced test equipment in Sydney, Australia, we provide the VC20 sampling chamber. This instrumentation is developed specifically for industrial VOC monitoring and environmental compliance audits in major manufacturing hubs.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Australia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
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
    'title' => 'Supply Vacuum Testing Equipment to Sydney, Australia',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Sydney or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
