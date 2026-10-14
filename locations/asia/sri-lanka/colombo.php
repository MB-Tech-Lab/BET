<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Colombo';
$country = 'Sri Lanka';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #003049 0%, #d62828 100%)';
$intro_p1 = 'Colombo, a major center for garments, food processing, and maritime logistics in Sri Lanka, requires advanced technological solutions for high-standard quality assurance. Colombo is the industrial and logistical gateway for Sri Lanka\'s global trade. Burhani Engineering Technology is proud to serve the Colombo industrial market as a leading manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that every system we deliver to Colombo — from vacuum leak testers for packaging lines to weld inspection boxes for petrochemical plants — meets the highest international standards. We provide Colombo with the precision and reliability required for advanced industrial R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Colombo, Sri Lanka',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Colombo, Sri Lanka. Optimize your quality control in Colombo with our high-performance vacuum leak test machine, designed for rapid industrial inspection.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Colombo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sri Lanka and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Colombo, Sri Lanka',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Colombo, Sri Lanka. Ensure the safety and integrity of your chemical processes in Colombo with our professional vacuum glove box equipment.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Colombo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sri Lanka and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Colombo, Sri Lanka',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Colombo, Sri Lanka. Our Vacuum Degassing Chamber is a high-standard system for resin and polymer processing in Colombo\'s manufacturing sector.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Colombo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sri Lanka and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Colombo, Sri Lanka',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Colombo, Sri Lanka. Perform reliable weld integrity evaluation on petrochemical plants and refinery operations in Colombo with our portable vacuum box.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Colombo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sri Lanka and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Colombo, Sri Lanka',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Colombo, Sri Lanka. The Burhani Transparent Vacuum unit provides exceptional clarity for quality analysis in Colombo\'s research and development labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Colombo, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Sri Lanka and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Colombo, Sri Lanka',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Colombo.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Colombo, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Air Sampling Chamber Supplier in Colombo, Sri Lanka',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Colombo, Sri Lanka, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene and municipal odor monitoring.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Sri Lanka choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'பிசிஆர் சேம்பர் உற்பத்தியாளர் ' . $city . ', ' . $country . ' இல்',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>பிசிஆர் சேம்பர் உற்பத்தியாளர்</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>பிசிஆர் ஒர்க்ஸ்டேஷன் சப்ளையர்</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>பிசிஆர் சேம்பர் ஏற்றுமதியாளர்</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Colombo, Sri Lanka',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Colombo and across Asia.'
];

require_once ABSPATH . 'includes/location-template.php';
