<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Bangalore';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #f97316 0%, #ea580c 100%)';

$meta_title = "Manufacturer, Supplier, Exporter of Vacuum Testing Equipment in Bangalore, India";
$meta_description = "Precision vacuum engineering solutions for Bangalore's aerospace, biotech, and high-tech manufacturing corridors.";

$intro_p1 = "Bangalore is not just India's tech hub; it's a global center for aerospace, biotechnology, and precision industrial manufacturing. From Peenya, one of Asia's largest industrial estates, to the high-tech biotech clusters in Bommasandra and the automotive giants in Bidadi, Bangalore's industrial landscape is defined by precision.";
$intro_p2 = "Burhani Engineering Technology meets this demand with world-class vacuum testing equipment, essential for maintaining the high-reliability standards of Bangalore's aerospace, medical technology, research laboratories, and advanced manufacturing sectors. We provide Bangalore-based industries with cutting-edge bubble leak testers, degassing chambers, and custom vacuum systems designed for rigorous R&D and high-volume production environments.";

$products = [
    'leak_test' => [
        'title' => 'Vacuum Leak Test Machine in Bangalore, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Bangalore, India. The Burhani Vacuum Leak Test system is engineered for Bangalore\'s pharmaceutical packaging and aerospace testing applications, delivering precise seal evaluation.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Bangalore, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Vacuum Glove Box in Bangalore, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Bangalore, India. The Burhani Vacuum Glove Box offers a sterile, inert gas workspace for Bangalore\'s advanced research, biotechnology, and semiconductor labs.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Bangalore, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Vacuum Degassing Chamber in Bangalore, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Bangalore, India. Eliminate trapped air and gas bubbles efficiently with our high-performance vacuum degassing equipment, tailored for Bangalore\'s laboratory R&D and materials processing.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Bangalore, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Flat Vacuum Box Weld Testing in Bangalore, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Bangalore, India. In Bangalore, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Bangalore, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Transparent Vacuum & Pressure Vessel in Bangalore, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Bangalore, India. Our Transparent Vacuum and Pressure Vessel allows for full visual inspection during immersion leak testing in Bangalore\'s packaging and biomedical testing labs.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Bangalore, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Bangalore, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Bangalore.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Bangalore, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Vacuum Chamber Sampler VC20 Supplier in Bangalore, India',
        'desc' => [
            'As a trusted provider of scientific field testing equipment in Bangalore, India, we introduce the VC20 monitoring system. This instrumentation is developed specifically for high-precision industrial hygiene and municipal odor monitoring.',
            'Designed for industrial hygiene monitoring and landfill gas testing, the system pulls the target air sample directly into the collection bag. This eliminates contact with the internal pump mechanisms, ensuring volatile organic compounds (VOCs) are preserved.',
            'Environmental consultants and laboratories in India choose Burhani for our certified engineering standards. Reach out to our technical department to specify your VC20 configuration.'
        ]
    ],
    'pcr_chambers' => [
        'title' => 'पीसीआर चैंबर निर्माता ' . $city . ', ' . $country . ' में',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>पीसीआर चैंबर निर्माता</strong> in ' . $city . ', ' . $country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>पीसीआर वर्कस्टेशन आपूर्तिकर्ता</strong> in ' . $city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>पीसीआर चैंबर निर्यातक</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . $country . '.'
        ]
    ]
];

$cta_banner = [
    'title' => 'Supply Vacuum Testing Equipment to Bangalore, India',
    'desc' => 'Reliable technical support and pan-India shipping for all your vacuum testing requirements in Bangalore.'
];

$custom_sidebar_html = '
<div class="sidebar-box p-4 bg-white rounded shadow-sm" style="border-top: 5px solid #f97316;">
  <h4 class="mb-3" style="font-weight:700;">Bangalore Industrial Zones</h4>
  <ul class="list-unstyled mb-4">
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Peenya Industrial Area</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Bommasandra Industrial Hub</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Bidadi Industrial Estate</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Electronic City Phase II</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Whitefield Industrial Belt</li>
  </ul>
  <h4 class="mb-3" style="font-weight:700;">Regional Links</h4>
  <div class="d-flex flex-wrap gap-1">
    <a href="' . url('locations/asia/india/chennai/') . '" class="btn btn-sm btn-outline-secondary">Chennai</a>
    <a href="' . url('locations/asia/india/hyderabad/') . '" class="btn btn-sm btn-outline-secondary">Hyderabad</a>
    <a href="' . url('locations/asia/india/coimbatore/') . '" class="btn btn-sm btn-outline-secondary">Coimbatore</a>
    <a href="' . url('locations/asia/india/hosur/') . '" class="btn btn-sm btn-outline-secondary">Hosur</a>
  </div>
</div>';

require_once ABSPATH . 'includes/location-template.php';
