<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Rio de Janeiro';
$country = 'Brazil';
$continent = 'South America';
$hero_gradient = 'linear-gradient(135deg, #1a3c5e 0%, #2d7a4f 100%)';
$intro_p1 = 'Rio de Janeiro, home to Brazil\'s iconic offshore petroleum industry and a critical hub for subsea pipeline integrity work, requires vacuum testing solutions that match the demanding standards of deep-water oil & gas operations. Burhani Engineering Technology is positioned as a trusted manufacturer, supplier, exporter, importer, and dealer serving Rio de Janeiro\'s industrial sectors.';
$intro_p2 = 'From Petrobras-affiliated fabrication facilities to independent marine engineering contractors operating out of Rio de Janeiro, the need for compliant NDT weld inspection and vacuum leak detection is paramount. Burhani Engineering Technology supplies a complete product portfolio that meets API, ASTM, and international quality standards.';

$products = [
    'leak_test' => [
        'title' => 'Dealer of Vacuum Leak Test Machine in Rio de Janeiro, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Rio de Janeiro, Brazil. The internal pressurization bubble leak tester provides real-time, visible confirmation of packaging seal integrity — critical for Rio de Janeiro\'s food processing plants and pharmaceutical manufacturers aiming for zero-defect output.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Rio de Janeiro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'glove_box' => [
        'title' => 'Manufacturer of Vacuum Glove Box in Rio de Janeiro, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Rio de Janeiro, Brazil. The Burhani vacuum glove box system combines robust acrylic construction with airtight glove ports and integrated vacuum fittings, providing Rio de Janeiro\'s industrial users with a reliable controlled-atmosphere workspace for sensitive operations.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Rio de Janeiro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Supplier of Vacuum Degassing Chamber in Rio de Janeiro, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Rio de Janeiro, Brazil. The Burhani Vacuum Degassing Chamber efficiently removes dissolved gases and air inclusions from resins, silicones, and polymers — an essential process control tool for Rio de Janeiro\'s composite materials, mining, and chemical processing industries.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Rio de Janeiro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Exporter of Flat Vacuum Box Weld Testing in Rio de Janeiro, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Rio de Janeiro, Brazil. Our portable vacuum box weld tester enables field-deployable, non-destructive weld integrity inspection for flat surface butt welds in Rio de Janeiro\'s infrastructure projects, petrochemical plants, and marine fabrication yards.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Rio de Janeiro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Importer of Transparent Vacuum & Pressure Vessel in Rio de Janeiro, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Rio de Janeiro, Brazil. Our clear-walled vacuum vessel system combines ease of operation with highly visible leak detection, allowing operators in Rio de Janeiro\'s industrial and laboratory settings to perform accurate, repeatable package integrity testing.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Rio de Janeiro, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Brazil and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Rio de Janeiro, Brazil',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Rio de Janeiro.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Rio de Janeiro, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Rio de Janeiro, Brazil',
        'desc' => [
            'As a trusted supplier of advanced test equipment in Rio de Janeiro, Brazil, we provide the VC20 sampling chamber. This instrumentation is developed specifically for industrial emissions audits and wastewater odor investigations in major manufacturing hubs.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Brazil choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Fabricante de câmaras PCR em ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>Fabricante de câmaras PCR</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>Fornecedor de estações de trabalho PCR</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>Exportador de câmaras PCR</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Rio de Janeiro, Brazil',
    'desc' => 'Get a customized quotation for any vacuum testing requirement in Rio de Janeiro or across South America. Our team provides technical consultation, product selection guidance, and international shipping support.'
];

require_once ABSPATH . 'includes/location-template.php';
