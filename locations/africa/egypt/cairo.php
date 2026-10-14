<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Cairo';
$country = 'Egypt';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Cairo, a vital industrial player in Egypt, is making significant strides in petroleum refining, automotive manufacturing, and pharmaceuticals. Cairo is a major North African industrial powerhouse with a diverse manufacturing base. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Cairo\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Cairo — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Cairo with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Importer of Vacuum Leak Test Machine in Cairo, Egypt',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Cairo, Egypt. The Burhani Vacuum Leak Test unit is an indispensable tool for Cairo\'s manufacturing lines, delivering precise testing across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Cairo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Egypt and international markets.']
    ],
    'glove_box' => [
        'title' => 'Dealer of Vacuum Glove Box in Cairo, Egypt',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Cairo, Egypt. Engineered for durability, our glove boxes serve the specialized needs of Cairo\'s growing high-tech and mining sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Cairo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Egypt and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Manufacturer of Vacuum Degassing Chamber in Cairo, Egypt',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Cairo, Egypt. In Cairo, our degassing chambers are the preferred choice for material analysis and production in the energy and mining sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Cairo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Egypt and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Supplier of Flat Vacuum Box Weld Testing in Cairo, Egypt',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Cairo, Egypt. Our Flat Vacuum Box Weld Testing equipment is essential for API standard NDT inspections of oil storage tanks in Cairo.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Cairo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Egypt and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Exporter of Transparent Vacuum & Pressure Vessel in Cairo, Egypt',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Cairo, Egypt. In Cairo, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Cairo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Egypt and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Cairo, Egypt',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Cairo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Cairo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Sampler VC20 Dealer in Cairo, Egypt',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Vacuum Chamber Sampler VC20 Manufacturer</strong> in Cairo, Egypt. Conforming to international environmental norms, this specialized air sampling chamber is engineered for contamination-free gas collection and rigorous quality control in Cairo.',
            'Equipped with a built-in miniature pump delivering flow rates up to 12 LPM, the VC20 makes field collection fast and efficient. It supports direct extraction of stack emissions, soil gas, and wastewater head-space gases into Tedlar sampling bags.',
            'We serve as an active <strong>Vacuum Chamber Sampler VC20 Exporter</strong>, delivering certified quality control equipment across Egypt and international markets. Contact our support office for technical dossiers.'
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
    'title' => 'Supply Vacuum Testing Equipment to Cairo, Egypt',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Cairo and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
