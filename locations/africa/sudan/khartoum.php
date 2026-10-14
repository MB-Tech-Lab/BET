<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Khartoum';
$country = 'Sudan';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Khartoum, a vital industrial player in Sudan, is making significant strides in petroleum refining, manufacturing, and agro-industry. Khartoum is the main industrial powerhouse of Sudan. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Khartoum\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Khartoum — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Khartoum with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Khartoum, Sudan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Khartoum, Sudan. Designed for rugged industrial environments, our vacuum leak tester offers reliable seal inspection for Khartoum\'s diverse packaging industry.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Khartoum, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sudan and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Khartoum, Sudan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Khartoum, Sudan. Ensure precise atmospheric control for your critical processes in Khartoum with our industrial-grade vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Khartoum, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sudan and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Khartoum, Sudan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Khartoum, Sudan. Our Vacuum Degassing Chamber is a vital system for resin and polymer processing in Khartoum\'s manufacturing and infrastructure sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Khartoum, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sudan and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Khartoum, Sudan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Khartoum, Sudan. Perform reliable weld integrity evaluation on pipelines and infrastructure projects in Khartoum with our portable vacuum box system.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Khartoum, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sudan and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Khartoum, Sudan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Khartoum, Sudan. The Burhani Transparent Vacuum unit provides exceptional clarity for quality inspection in Khartoum\'s pharmaceutical and food processing plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Khartoum, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sudan and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Khartoum, Sudan',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Khartoum.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Khartoum, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Hazardous Vapor Collection Unit Supplier in Khartoum, Sudan',
        'desc' => [
            'Our company manufactures state-of-the-art environmental sampling equipment, designed for municipal odor control audits in Khartoum, Sudan. The VC20 unit delivers reliable hazardous vapor sampling with complete analytical sample integrity.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Khartoum. Contact our support office for technical dossiers and customized commercial quotes.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'الشركة المصنعة لغرف PCR في ' . $city . '، ' . $country . '',
        'desc' => [
            'تعتبر شركة Burhani Engineering Technology من <strong>مصنعي غرف PCR</strong> الموثوقين في ' . $city . '، ' . $country . '. تم تجهيز محطات العمل الخاصة بنا التي يتم التحكم في تلوثها بنظام ترشيح HEPA والتعقيم بالأشعة فوق البنفسجية للتعامل الآمن مع الحمض النووي (DNA/RNA).',
            'بصفتنا <strong>مورداً رائداً لمحطات عمل PCR</strong> في ' . $city . '، نقدم معدات متطورة مصممة لمنع التلوث المتبادل أثناء البيولوجيا الجزيئية الحرجة والتحضيرات التشخيصية.',
            'تعمل شركتنا أيضًا <strong>كمصدر وموزع بارز لغرف PCR</strong>، حيث تقدم حلولًا مخبرية عالية الجودة لمعاهد البحوث والمستشفيات في جميع أنحاء ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Khartoum, Sudan',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Khartoum and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
