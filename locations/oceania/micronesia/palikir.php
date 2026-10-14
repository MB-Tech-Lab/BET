<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Palikir';
$country = 'Micronesia';
$continent = 'Oceania';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #1a6b8a 100%)';
$intro_p1 = 'Palikir, the capital of the Federated States of Micronesia, supports a range of industrial and government-driven operations requiring precision vacuum testing instruments. Burhani Engineering Technology serves Palikir as an experienced manufacturer, importer, supplier, exporter, and dealer of certified vacuum testing equipment.';
$intro_p2 = 'With a comprehensive product portfolio spanning vacuum leak test machines, degassing chambers, glove boxes, weld testing equipment, transparent pressure vessels, and asphalt binder testing systems, Burhani Engineering Technology is positioned to support the full spectrum of fisheries processing, marine infrastructure, food safety testing, and government laboratories requirements in Palikir.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Palikir, Micronesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Palikir, Micronesia. The Vacuum Leak Test Machine is engineered to detect gross leaks in flexible packaging and sterile barrier systems through internal pressurization and bubble emission testing. In Palikir\'s fisheries processing, marine infrastructure, food safety testing, and government laboratories sector, this system provides rapid, reliable quality assurance for pouches, sachets, and pharmaceutical packaging.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Palikir, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Micronesia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Palikir, Micronesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Palikir, Micronesia. Laboratories and industrial units across Palikir, Micronesia requiring an oxygen-free and moisture-controlled environment trust Burhani Engineering Technology\'s vacuum glove boxes. These units are built for applications in materials research, semiconductor handling, and pharmaceutical compounding where atmospheric contamination is unacceptable.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Palikir, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Micronesia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Palikir, Micronesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Palikir, Micronesia. For polymer processors and material scientists operating in Palikir\'s industrial sector, the Burhani Vacuum Degassing Chamber provides efficient removal of dissolved gases and air inclusions. Available in both cube and cylindrical configurations, these chambers are sized to match everything from small lab batches to production-scale operations.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Palikir, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Micronesia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Palikir, Micronesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Palikir, Micronesia. The Burhani vacuum box weld tester brings portable, non-destructive weld inspection capability to field sites and fabrication shops across Palikir, Micronesia. With a durable acrylic base, robust vacuum fittings, and a calibrated gauge, the device requires only a soap solution and a standard vacuum pump to perform reliable leak detection.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Palikir, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Micronesia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Palikir, Micronesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Palikir, Micronesia. The Burhani transparent vacuum vessel\'s adjustable tank height feet, lockable caster wheels, and 1-inch NPT fittings make it easy to install and reposition within Palikir\'s packaging facilities. Its clear acrylic tank enables full visibility during submersion testing, ensuring no defective packages pass undetected.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Palikir, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Micronesia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Palikir, Micronesia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Palikir.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Palikir, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial Gas Sampling Unit Provider in Palikir, Micronesia',
        'desc' => [
            'For environmental research laboratories and local agencies in Palikir, Micronesia, we supply certified environmental air monitors. The VC20 supports clean air quality research and environmental field testing.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Palikir.'
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
    'title' => 'Supply Vacuum Testing Equipment to Palikir, Micronesia',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Palikir or across Oceania. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
