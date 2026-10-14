<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Maputo';
$country = 'Mozambique';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Maputo, a vital industrial player in Mozambique, is making significant strides in aluminum smelting, maritime logistics, and energy projects. Maputo anchors Mozambique\'s industrial growth and natural gas potential. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Maputo\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Maputo — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Maputo with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Maputo, Mozambique',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Maputo, Mozambique. Designed for rugged industrial environments, our vacuum leak tester offers reliable seal inspection for Maputo\'s diverse packaging industry.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Maputo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mozambique and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Maputo, Mozambique',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Maputo, Mozambique. Ensure precise atmospheric control for your critical processes in Maputo with our industrial-grade vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Maputo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mozambique and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Maputo, Mozambique',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Maputo, Mozambique. Our Vacuum Degassing Chamber is a vital system for resin and polymer processing in Maputo\'s manufacturing and infrastructure sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Maputo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mozambique and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Maputo, Mozambique',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Maputo, Mozambique. Perform reliable weld integrity evaluation on pipelines and infrastructure projects in Maputo with our portable vacuum box system.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Maputo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mozambique and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Maputo, Mozambique',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Maputo, Mozambique. The Burhani Transparent Vacuum unit provides exceptional clarity for quality inspection in Maputo\'s pharmaceutical and food processing plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Maputo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Mozambique and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Maputo, Mozambique',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Maputo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Maputo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Collection Chamber Dealer in Maputo, Mozambique',
        'desc' => [
            'For mining operations, petrochemical installations, and heavy industry plants in Maputo, Mozambique, we provide high-performance emission samplers. The VC20 ensures secure methane leak testing and industrial hygiene testing under extreme conditions.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This industrial-heavy mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Maputo.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'Fabricante de Câmaras PCR em ' . $city . ', ' . $country . '',
        'desc' => [
            'A Burhani Engineering Technology é um <strong>Fabricante de Câmaras PCR</strong> de confiança em ' . $city . ', ' . $country . '. As nossas estações de trabalho de contaminação controlada estão equipadas com filtração HEPA e esterilização UV para o manuseamento seguro de ADN/ARN.',
            'Como <strong>Fornecedor líder de Estações de Trabalho PCR</strong> em ' . $city . ', disponibilizamos equipamento de bancada avançado concebido para prevenir a contaminação cruzada durante as preparações de biologia molecular e diagnóstico.',
            'A nossa empresa serve também como um proeminente <strong>Exportador e Distribuidor de Câmaras PCR</strong>, entregando soluções laboratoriais de qualidade superior a institutos de investigação e hospitais por toda a ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Maputo, Mozambique',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Maputo and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
