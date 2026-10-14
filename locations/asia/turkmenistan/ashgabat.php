<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Ashgabat';
$country = 'Turkmenistan';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #0d3b66 0%, #d1495b 100%)';
$intro_p1 = 'Ashgabat, a major center for natural gas processing, textiles, and energy in Turkmenistan, requires advanced technological solutions for high-standard quality assurance. Ashgabat anchors Turkmenistan\'s energy-rich industrial economy. Burhani Engineering Technology is proud to serve the Ashgabat industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Ashgabat — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Ashgabat with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Ashgabat, Turkmenistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Ashgabat, Turkmenistan. Optimize your quality control in Ashgabat with our high-performance vacuum leak test machine, designed for rapid industrial inspection.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Ashgabat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkmenistan and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Ashgabat, Turkmenistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Ashgabat, Turkmenistan. Ensure the safety and integrity of your chemical processes in Ashgabat with our professional vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Ashgabat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkmenistan and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Ashgabat, Turkmenistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Ashgabat, Turkmenistan. Our Vacuum Degassing Chamber is a high-standard system for resin and polymer processing in Ashgabat\'s manufacturing sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Ashgabat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkmenistan and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Ashgabat, Turkmenistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Ashgabat, Turkmenistan. Perform reliable weld integrity evaluation on petrochemical plants and refinery operations in Ashgabat with our portable vacuum box.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Ashgabat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkmenistan and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Ashgabat, Turkmenistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Ashgabat, Turkmenistan. The Burhani Transparent Vacuum unit provides exceptional clarity for quality analysis in Ashgabat\'s research and development labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Ashgabat, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Turkmenistan and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Ashgabat, Turkmenistan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Ashgabat.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Ashgabat, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Environmental Sampling Equipment Dealer in Ashgabat, Turkmenistan',
        'desc' => [
            'Burhani Engineering Technology is a certified manufacturer of heavy industrial testing systems serving mining sectors in Ashgabat, Turkmenistan. The VC20 sampler is designed for mining gas sampling and industrial environmental audits in Ashgabat.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active exporter, delivering certified quality control equipment across Turkmenistan and international markets. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Ashgabat, Turkmenistan',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Ashgabat and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
