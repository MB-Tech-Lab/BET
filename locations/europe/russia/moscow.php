<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Moscow';
$country = 'Russia';
$continent = 'Europe';
$hero_gradient = 'linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%)';
$intro_p1 = 'Moscow, a major center for aerospace, petroleum refining, and automotive manufacturing in Russia, demands high-standard industrial testing to ensure the reliability of its manufacturing output. Moscow is the massive industrial and economic core of the Russian Federation. Burhani Engineering Technology is proud to serve the Moscow industrial market as a trusted manufacturer, supplier, and exporter of world-class vacuum testing equipment.';
$intro_p2 = 'Our commitment to excellence ensures that all our systems — from vacuum leak testers to degassing chambers — meet the rigorous requirements of European automotive, aerospace, and pharmaceutical industries. We provide Moscow with the precision tools needed for advanced R&D and production-scale quality control.';

$products = [
    'leak_test' => [
        'title' => 'Manufacturer of Vacuum Leak Test Machine in Moscow, Russia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Moscow, Russia. Optimize your production line in Moscow with our high-performance vacuum leak test machine, designed for precision testing and analysis.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Moscow, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Russia and international markets.']
    ],
    'glove_box' => [
        'title' => 'Supplier of Vacuum Glove Box in Moscow, Russia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Moscow, Russia. The Burhani Vacuum Glove Box provides a sterile, inert atmosphere for advanced aerospace systems and research labs in Moscow.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Moscow, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Russia and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Exporter of Vacuum Degassing Chamber in Moscow, Russia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Moscow, Russia. Used by leading automotive plants in Moscow, our degassing unit ensures void-free material casting and high-standard industrial testing.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Moscow, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Russia and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Importer of Flat Vacuum Box Weld Testing in Moscow, Russia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Moscow, Russia. The Burhani Vacuum Weld Tester is engineered for speed and precision in Moscow\'s aerospace and petrochemical plants.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Moscow, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Russia and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Dealer of Transparent Vacuum & Pressure Vessel in Moscow, Russia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Moscow, Russia. Engineered to withstand extreme pressures and vacuums, our transparent vessels serve the aerospace systems of Moscow.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Moscow, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across Russia and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Moscow, Russia',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Moscow.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Moscow, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Contamination-Free Sampler Supplier in Moscow, Russia',
        'desc' => [
            'As a trusted supplier of industrial testing equipment in Moscow, Russia, we provide the VC20 collection system. This system is purpose-built to support mining air sampling and compliance vapor testing in major production hubs in Moscow.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in Russia choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'Manufacturer of PCR Chambers in ' . $city . ', ' . $country . '',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>PCR Chamber Manufacturer</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>PCR Workstation Supplier</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>PCR Chamber Exporter</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Moscow, Russia',
    'desc' => 'Reliable technical support and international shipping for all your vacuum testing requirements in Moscow and across Europe.'
];

require_once ABSPATH . 'includes/location-template.php';
