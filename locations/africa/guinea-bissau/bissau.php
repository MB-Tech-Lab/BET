<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Bissau';
$country = 'Guinea-Bissau';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Bissau, a vital industrial player in Guinea-Bissau, is making significant strides in agro-processing, fishing, and light manufacturing. Bissau is the economic and industrial capital of Guinea-Bissau. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Bissau\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Bissau — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Bissau with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Bissau, Guinea-Bissau',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Bissau, Guinea-Bissau. Protect your product quality in Bissau with our advanced vacuum leak test machine, optimized for rapid and accurate evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Bissau, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guinea-Bissau and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Bissau, Guinea-Bissau',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Bissau, Guinea-Bissau. Our Vacuum Glove Box provides a controlled inert atmosphere for sensitive chemical handling and research in Bissau\'s industrial plants.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Bissau, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guinea-Bissau and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Bissau, Guinea-Bissau',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Bissau, Guinea-Bissau. Used extensively in Bissau\'s oil refineries and industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Bissau, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guinea-Bissau and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Bissau, Guinea-Bissau',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Bissau, Guinea-Bissau. The Burhani Vacuum Weld Tester is engineered for field use in Bissau\'s mining operations, oil refineries, and industrial plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Bissau, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guinea-Bissau and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Bissau, Guinea-Bissau',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Bissau, Guinea-Bissau. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Bissau\'s infrastructure and energy labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Bissau, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Guinea-Bissau and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Bissau, Guinea-Bissau',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Bissau.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Bissau, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampler VC20 Dealer in Bissau, Guinea-Bissau',
        'desc' => [
            'As a leading <strong>VOC Monitoring Equipment VC20 Supplier</strong> in Bissau, Guinea-Bissau, we deliver advanced solutions for industrial hygiene. The VC20 air sampling chamber enables environmental consultants in Bissau to collect pristine gas samples without pump cross-contamination.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Guinea-Bissau choose Burhani for our certified engineering standards. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Bissau, Guinea-Bissau',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Bissau and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
