<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Oran';
$country = 'Algeria';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Oran, a vital industrial player in Algeria, is making significant strides in petrochemicals, maritime logistics, and automotive assembly. Oran is a vital industrial port city with a focus on petrochemical exports. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Oran\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Oran — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Oran with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Oran, Algeria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Oran, Algeria. In Oran, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of package integrity and seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Oran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Algeria and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Oran, Algeria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Oran, Algeria. The Burhani Vacuum Glove Box unit offers a sterile environment for pharmaceutical and material evaluation in Oran.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Oran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Algeria and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Oran, Algeria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Oran, Algeria. Eliminate trapped air and bubbles efficiently with our high-standard vacuum degassing equipment, designed for Oran\'s industrial needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Oran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Algeria and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Oran, Algeria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Oran, Algeria. In Oran, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Oran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Algeria and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Oran, Algeria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Oran, Algeria. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Oran\'s packaging industries.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Oran, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Algeria and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Oran, Algeria',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Oran.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Oran, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Oran, Algeria',
        'desc' => [
            'As a premier <strong>VOC Monitoring Equipment VC20 Supplier</strong> in Oran, Algeria, we provide robust solutions for emissions monitoring. Our portable gas sampler ensures precise prélèvement of air samples, enabling air quality labs in Oran to verify standard compliance.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Algeria choose Burhani for our certified engineering standards. Our air sampling chambers are backed by a complete 12-month manufacturer warranty.'
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
    'title' => 'Supply Vacuum Testing Equipment to Oran, Algeria',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Oran and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
