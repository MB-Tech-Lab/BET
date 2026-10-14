<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Sofia';
$country = 'Bulgaria';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Sofia, a major center for IT, biotechnology, and automotive electronics in Bulgaria, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Sofia is a rising hub for tech-driven manufacturing and pharmaceutical R&D in the Balkans. Burhani Engineering Technology is proud to serve the Sofia industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Sofia with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Sofia, Bulgaria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Sofia, Bulgaria. The Burhani Vacuum Leak Test equipment is the preferred choice for automotive plants in Sofia requiring rigorous leak detection for sealed components.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Sofia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bulgaria and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Sofia, Bulgaria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Sofia, Bulgaria. From semiconductor research to battery development, our vacuum glove boxes serve the specialized needs of Sofia\'s industrial sector.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Sofia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bulgaria and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Sofia, Bulgaria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Sofia, Bulgaria. In Sofia, our degassing systems are utilized for high-precision manufacturing and material analysis across various industrial applications.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Sofia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bulgaria and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Sofia, Bulgaria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Sofia, Bulgaria. Our Flat Vacuum Box Weld Testing equipment is critical for API standard NDT inspections in Sofia\'s maritime and energy sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Sofia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bulgaria and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Sofia, Bulgaria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Sofia, Bulgaria. In Sofia, our transparent pressure vessels are utilized for rigorous quality analysis of pharmaceutical and medical device packaging.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Sofia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Bulgaria and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Sofia, Bulgaria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Sofia.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Sofia, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Contamination-Free Sampler Supplier in Sofia, Bulgaria',
        'desc' => [
            'For local factories and industrial plants in Sofia, Bulgaria, we provide high-performance emission samplers. The VC20 ensures secure industrial safety monitoring and environmental testing.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Sofia.'
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
    'title' => 'Supply Vacuum Testing Equipment to Sofia, Bulgaria',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Sofia and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
