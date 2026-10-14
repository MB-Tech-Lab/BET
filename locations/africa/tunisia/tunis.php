<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Tunis';
$country = 'Tunisia';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Tunis, a vital industrial player in Tunisia, is making significant strides in automotive parts, aerospace components, and pharmaceuticals. Tunis is a high-tech manufacturing center for the North African region. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Tunis\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Tunis — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Tunis with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Tunis, Tunisia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Tunis, Tunisia. In Tunis, industrial plants rely on our vacuum leak testing equipment to ensure the highest standards of package integrity and seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Tunis, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tunisia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Tunis, Tunisia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Tunis, Tunisia. The Burhani Vacuum Glove Box unit offers a sterile environment for pharmaceutical and material evaluation in Tunis.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Tunis, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tunisia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Tunis, Tunisia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Tunis, Tunisia. Eliminate trapped air and bubbles efficiently with our high-standard vacuum degassing equipment, designed for Tunis\'s industrial needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Tunis, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tunisia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Tunis, Tunisia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Tunis, Tunisia. In Tunis, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Tunis, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tunisia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Tunis, Tunisia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Tunis, Tunisia. Our Transparent Vacuum and Pressure Vessel enables full visual inspection during immersion leak testing in Tunis\'s packaging industries.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Tunis, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Tunisia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Tunis, Tunisia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Tunis.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Tunis, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'VOC Monitoring Equipment VC20 Exporter in Tunis, Tunisia',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Vacuum Chamber Sampler VC20 Manufacturer</strong> in Tunis, Tunisia. Conforming to international environmental norms, this specialized air sampling chamber is engineered for contamination-free gas collection and rigorous quality control in Tunis.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active <strong>Vacuum Chamber Sampler VC20 Exporter</strong>, delivering certified quality control equipment across Tunisia and international markets. Contact our support office for technical dossiers.'
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
    'title' => 'Supply Vacuum Testing Equipment to Tunis, Tunisia',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Tunis and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
