<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Tehran';
$country = 'Iran';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #1d3557 0%, #e63946 100%)';
$intro_p1 = 'Tehran, a major center for automotive sector, pharmaceuticals, and precision engineering in Iran, requires advanced technological solutions for high-standard quality assurance. Tehran is the massive industrial and economic core of the Iranian economy. Burhani Engineering Technology is proud to serve the Tehran industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Tehran — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Tehran with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Tehran, Iran',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Tehran, Iran. Optimize your quality control in Tehran with our high-performance vacuum leak test machine, designed for rapid industrial inspection.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Tehran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Iran and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Tehran, Iran',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Tehran, Iran. Ensure the safety and integrity of your chemical processes in Tehran with our professional vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Tehran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Iran and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Tehran, Iran',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Tehran, Iran. Our Vacuum Degassing Chamber is a high-standard system for resin and polymer processing in Tehran\'s manufacturing sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Tehran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Iran and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Tehran, Iran',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Tehran, Iran. Perform reliable weld integrity evaluation on petrochemical plants and refinery operations in Tehran with our portable vacuum box.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Tehran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Iran and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Tehran, Iran',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Tehran, Iran. The Burhani Transparent Vacuum unit provides exceptional clarity for quality analysis in Tehran\'s research and development labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Tehran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Iran and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Tehran, Iran',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Tehran.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Tehran, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Collection System Exporter in Tehran, Iran',
        'desc' => [
            'For refineries, chemical processing plants, and energy infrastructure in Tehran, Iran, we supply certified environmental air monitors. The VC20 supports compliance gas sampling according to strict regional audit requirements.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Tehran.'
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
    'title' => 'Supply Vacuum Testing Equipment to Tehran, Iran',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Tehran and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
