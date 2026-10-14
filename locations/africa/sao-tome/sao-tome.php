<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Sao Tome';
$country = 'Sao Tome';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Sao Tome, a vital industrial player in Sao Tome, is making significant strides in agro-processing, maritime services, and logistics. Sao Tome is the industrial and logistical center for the island nation. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Sao Tome\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Sao Tome — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Sao Tome with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Sao Tome, Sao Tome',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Sao Tome, Sao Tome. Protect your product quality in Sao Tome with our advanced vacuum leak test machine, optimized for rapid and accurate evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Sao Tome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sao Tome and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Sao Tome, Sao Tome',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Sao Tome, Sao Tome. Our Vacuum Glove Box provides a controlled inert atmosphere for sensitive chemical handling and research in Sao Tome\'s industrial plants.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Sao Tome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sao Tome and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Sao Tome, Sao Tome',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Sao Tome, Sao Tome. Used extensively in Sao Tome\'s oil refineries and industrial plants, our degassing unit ensures void-free material evaluation and high-purity batches.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Sao Tome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sao Tome and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Sao Tome, Sao Tome',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Sao Tome, Sao Tome. The Burhani Vacuum Weld Tester is engineered for field use in Sao Tome\'s mining operations, oil refineries, and industrial plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Sao Tome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sao Tome and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Sao Tome, Sao Tome',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Sao Tome, Sao Tome. Engineered to withstand high pressure and vacuum, our transparent vessels are a key tool for Sao Tome\'s infrastructure and energy labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Sao Tome, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sao Tome and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Sao Tome, Sao Tome',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Sao Tome.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Sao Tome, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Sampling Equipment VC20 Distributor in Sao Tome, Sao Tome',
        'desc' => [
            'Our company operates as an active exporter of gas sampling equipment to industrial zones in Sao Tome, Sao Tome. The VC20 portable sampler is optimized for surveillance des émissions, allowing operators to verify compliance parameters.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Sao Tome. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Sao Tome, Sao Tome',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Sao Tome and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
