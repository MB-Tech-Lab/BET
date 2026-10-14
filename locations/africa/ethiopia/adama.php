<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Adama';
$country = 'Ethiopia';
$continent = 'Africa';
$hero_gradient = 'linear-gradient(135deg, #2d5a27 0%, #1a4a1a 100%)';
$intro_p1 = 'Adama, a vital industrial player in Ethiopia, is making significant strides in manufacturing, logistics, and agro-processing. Adama is a key logistical link and manufacturing city in central Ethiopia. Burhani Engineering Technology is proud to serve as a leading manufacturer, supplier, and exporter of high-standard vacuum testing equipment to support Adama\'s growth.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Adama — from vacuum leak testers for food packaging to weld inspection boxes for oil refineries — meets the highest international quality standards. We provide Adama with the reliability and precision required for critical infrastructure and industrial operations.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Adama, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Adama, Ethiopia. Designed for rugged industrial environments, our vacuum leak tester offers reliable seal inspection for Adama\'s diverse packaging industry.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Adama, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Adama, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Adama, Ethiopia. Ensure precise atmospheric control for your critical processes in Adama with our industrial-grade vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Adama, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Adama, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Adama, Ethiopia. Our Vacuum Degassing Chamber is a vital system for resin and polymer processing in Adama\'s manufacturing and infrastructure sectors.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Adama, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Adama, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Adama, Ethiopia. Perform reliable weld integrity evaluation on pipelines and infrastructure projects in Adama with our portable vacuum box system.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Adama, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Adama, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Adama, Ethiopia. The Burhani Transparent Vacuum unit provides exceptional clarity for quality inspection in Adama\'s pharmaceutical and food processing plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Adama, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Ethiopia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Adama, Ethiopia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Adama.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Adama, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Air Monitoring Chamber Provider in Adama, Ethiopia',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Adama, Ethiopia, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene monitoring and chemical plant air testing.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Ethiopia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ]
,
    'pcr_chambers' => [
        'title' => 'Manufacturer of PCR Chambers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Adama, Ethiopia',
    'desc' => 'Reliable international shipping and technical consultation for all your vacuum testing requirements in Adama and across Africa.'
];

require_once ABSPATH . 'includes/location-template.php';
