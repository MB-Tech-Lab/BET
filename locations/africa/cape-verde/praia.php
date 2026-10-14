<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Praia';
$country = 'Cape Verde';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Praia, a vital industrial player in Cape Verde, is making significant strides in maritime engineering, food processing, and logistics. Praia anchors Cape Verde\'s mid-Atlantic shipping and industrial logistics. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Praia\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Praia — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Praia with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Praia, Cape Verde',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Praia, Cape Verde. The Burhani Vacuum Leak Test unit is an indispensable tool for Praia\'s manufacturing lines, delivering precise testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Praia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cape Verde and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Praia, Cape Verde',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Praia, Cape Verde. Engineered for durability, our glove boxes serve the specialized needs of Praia\'s growing high-tech and mining sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Praia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cape Verde and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Praia, Cape Verde',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Praia, Cape Verde. In Praia, our degassing chambers are the preferred choice for material analysis and production in the energy and mining sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Praia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cape Verde and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Praia, Cape Verde',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Praia, Cape Verde. Our Flat Vacuum Box Weld Testing equipment is essential for API standard NDT inspections of oil storage tanks in Praia.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Praia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cape Verde and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Praia, Cape Verde',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Praia, Cape Verde. In Praia, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Praia, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Cape Verde and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Praia, Cape Verde',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Praia.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Praia, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Praia, Cape Verde',
        'desc' => [
            'We are the preferred <strong>Portable Gas Sampler VC20 Dealer</strong> in Praia, Cape Verde. Engineered for municipal wastewater gas testing and environmental odor inspections, our equipment ensures high-accuracy data collection for Praia compliance teams.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of >18" Hg to expand the sample bag within the airtight enclosure. This ensures that the gas sample never touches the pump, avoiding any internal contamination.',
            'As a trusted partner and <strong>Importer of Portable Gas Sampler VC20</strong> systems, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Praia.'
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
    'title' => 'Supply Vacuum Testing Equipment to Praia, Cape Verde',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Praia and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
