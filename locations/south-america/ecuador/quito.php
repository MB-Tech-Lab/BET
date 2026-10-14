<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Quito';
$country = 'Ecuador';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Quito, Ecuador\'s capital nestled high in the Andes, serves as the administrative and economic hub of a country whose industrial output spans petroleum refining, floriculture post-harvest processing, and an increasingly active mining sector. Burhani Engineering Technology is proud to supply vacuum testing systems to clients in Quito as a manufacturer, supplier, exporter, importer, and dealer.';
$intro_p2 = 'Ecuador\'s petroleum refineries and mining operations require reliable vacuum integrity and leak detection systems that operate under rigorous quality frameworks. Burhani Engineering Technology\'s certified product range — including Vacuum Leak Test Machines, weld testing vacuum boxes, and industrial degassing chambers — is purpose-built for these demanding applications.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Quito, Ecuador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Quito, Ecuador. Burhani\'s vacuum leak detection system uses controlled internal pressurization to identify gross seal failures in medical and food packaging — an essential instrument for Quito\'s sterile barrier and food-grade manufacturing operations.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Quito, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ecuador and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Quito, Ecuador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Quito, Ecuador. Our vacuum glove box unit maintains a controlled inert atmosphere for precision applications in battery material research, pharmaceutical synthesis, and high-purity manufacturing processes that are critical to Quito\'s industrial sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Quito, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ecuador and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Quito, Ecuador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Quito, Ecuador. Vacuum degassing with the Burhani chamber ensures bubble-free castings, void-free resin infusions, and contamination-free material batches — critical for Quito\'s composite manufacturing, food packaging, and specialty chemical producers.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Quito, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ecuador and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Quito, Ecuador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Quito, Ecuador. The Burhani vacuum box NDT system provides a safe, portable, and accurate method for detecting weld discontinuities in Quito\'s industrial structures, reducing the risk of catastrophic failures in storage tanks and pressurized pipelines.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Quito, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ecuador and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Quito, Ecuador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Quito, Ecuador. Burhani\'s transparent vacuum and pressure vessel provides full optical visibility during leak immersion testing, making it the preferred solution for Quito\'s food packaging manufacturers, pharmaceutical producers, and industrial quality labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Quito, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ecuador and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Quito, Ecuador',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Quito.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Quito, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Quito, Ecuador',
        'desc' => [
            'For local factories, mines, and industrial plants in Quito, Ecuador, we provide high-performance emission samplers. The VC20 ensures secure industrial safety monitoring and environmental testing.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Quito.'
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
    'title' => 'Supply Vacuum Testing Equipment to Quito, Ecuador',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Quito or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
