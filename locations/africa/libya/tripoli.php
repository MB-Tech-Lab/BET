<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Tripoli';
$country = 'Libya';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Tripoli, a vital industrial player in Libya, is making significant strides in petroleum refining, chemicals, and energy production. Tripoli is the heart of Libya\'s energy-driven industrial sector. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Tripoli\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Tripoli — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Tripoli with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Supplier of Vacuum Leak Test Machine in Tripoli, Libya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Tripoli, Libya. Our Vacuum Leak Test Machine provides essential bubble emission inspection for flexible packaging in Tripoli\'s food processing and pharmaceutical sectors.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Tripoli, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Libya and international markets.']
    ],
    'glove_box' => [
        'title' => 'Exporter of Vacuum Glove Box in Tripoli, Libya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Tripoli, Libya. In Tripoli, mining and energy laboratories utilize our vacuum glove box systems to protect moisture-sensitive materials from contamination.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Tripoli, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Libya and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Importer of Vacuum Degassing Chamber in Tripoli, Libya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Tripoli, Libya. The Burhani Degassing Chamber offers superior vacuum performance for Tripoli\'s chemical processing and infrastructure development projects.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Tripoli, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Libya and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Dealer of Flat Vacuum Box Weld Testing in Tripoli, Libya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Tripoli, Libya. Ensure leak-proof welds in Tripoli\'s energy infrastructure and water treatment plants with our advanced NDT testing equipment.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Tripoli, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Libya and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Manufacturer of Transparent Vacuum & Pressure Vessel in Tripoli, Libya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Tripoli, Libya. Ensure packaging perfection in Tripoli with our durable transparent pressure vessel, designed for high-visibility leak detection.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Tripoli, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Libya and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Tripoli, Libya',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Tripoli.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Tripoli, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Monitoring Equipment VC20 Exporter in Tripoli, Libya',
        'desc' => [
            'As a premier <strong>VOC Monitoring Equipment VC20 Supplier</strong> in Tripoli, Libya, we provide robust solutions for emissions monitoring. Our portable gas sampler ensures precise prélèvement of air samples, enabling air quality labs in Tripoli to verify standard compliance.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Libya choose Burhani for our certified engineering standards. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Tripoli, Libya',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Tripoli and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
