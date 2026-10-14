<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Istanbul';
$country = 'Turkey';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #1d3557 0%, #e63946 100%)';
$intro_p1 = 'Istanbul, a major center for automotive manufacturing, pharmaceuticals, and precision engineering in Turkey, requires advanced technological solutions for high-standard quality assurance. Istanbul is a massive industrial metropolis connecting Europe and Asia. Burhani Engineering Technology is proud to serve the Istanbul industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Istanbul — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Istanbul with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Istanbul, Turkey',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Istanbul, Turkey. In Istanbul, industrial production lines rely on our vacuum leak testing equipment to ensure the highest standards of package integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Istanbul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkey and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Istanbul, Turkey',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Istanbul, Turkey. The Burhani Vacuum Glove Box unit offers a contamination-free workspace for Istanbul\'s pharmaceutical and high-tech industries.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Istanbul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkey and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Istanbul, Turkey',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Istanbul, Turkey. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, designed for Istanbul\'s diverse material needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Istanbul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkey and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Istanbul, Turkey',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Istanbul, Turkey. In Istanbul, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Istanbul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkey and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Istanbul, Turkey',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Istanbul, Turkey. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Istanbul\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Istanbul, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkey and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Istanbul, Turkey',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Istanbul.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Istanbul, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Sampling Equipment Dealer in Istanbul, Turkey',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of heavy industrial testing systems serving mining sectors in Istanbul, Turkey. The VC20 sampler is designed for mining gas sampling and industrial environmental audits in Istanbul.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Turkey and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Istanbul, Turkey',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Istanbul and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
