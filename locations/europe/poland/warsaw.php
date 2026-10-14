<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Warsaw';
$country = 'Poland';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Warsaw, a major center for automotive manufacturing, food processing, and pharmaceuticals in Poland, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Warsaw is a rapidly growing industrial hub in Central Europe with a diverse manufacturing base. Burhani Engineering Technology is proud to serve the Warsaw industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Warsaw with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Exporter of Vacuum Leak Test Machine in Warsaw, Poland',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Warsaw, Poland. In Warsaw, industrial R&D centers utilize our vacuum leak testing unit to perform precise analysis on flexible and rigid packaging across multiple ASTM methods including F2096, D3078, D4991, D5094, and D6653.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Warsaw, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Poland and international markets.']
    ],
    'glove_box' => [
        'title' => 'Importer of Vacuum Glove Box in Warsaw, Poland',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Warsaw, Poland. Our high-quality glove box unit is engineered for pharmaceutical production in Warsaw, offering total control over atmospheric conditions.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Warsaw, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Poland and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Dealer of Vacuum Degassing Chamber in Warsaw, Poland',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Warsaw, Poland. Eliminate trapped gases efficiently with our industrial vacuum degassing equipment, the standard for excellence in Warsaw.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Warsaw, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Poland and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Manufacturer of Flat Vacuum Box Weld Testing in Warsaw, Poland',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Warsaw, Poland. In Warsaw, our vacuum box weld testing equipment provides instantaneous visual confirmation of weld quality for heavy engineering.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Warsaw, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Poland and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Supplier of Transparent Vacuum & Pressure Vessel in Warsaw, Poland',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Warsaw, Poland. The Burhani Transparent Vacuum Vessel allows for clear, visual inspection during submersion leak testing in Warsaw\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Warsaw, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Poland and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Warsaw, Poland',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Warsaw.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Warsaw, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Warsaw, Poland',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in Warsaw, Poland, we provide the VC20 collection system. This system is purpose-built to support VOC emissions monitoring and air contamination analysis in major production hubs in Warsaw.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Poland choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Producent komór PCR w ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Producent komór PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Dostawca stacji roboczych PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Eksporter komór PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Warsaw, Poland',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Warsaw and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
