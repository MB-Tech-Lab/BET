<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Mumbai';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%)';

$meta_title = "Manufacturer, Supplier, Exporter of Vacuum Testing Equipment in Mumbai, India";
$meta_description = "World-class vacuum engineering and leak detection systems for Mumbai's diverse industrial landscape.";

$intro_p1 = "Mumbai is the heartbeat of India's economy, housing some of the world's largest pharmaceutical, petrochemical, and manufacturing giants. From the high-tech pharma clusters in the Thane-Belapur (TTC) Industrial Area to the heavy petrochemical and engineering zones in Taloja and Patalganga, Mumbai's industrial output requires the highest levels of precision.";
$intro_p2 = "Burhani Engineering Technology serves this powerhouse with specialized vacuum testing equipment, essential for ensuring the integrity of critical industrial components and consumer packaging. We provide Mumbai-based manufacturers with cutting-edge bubble leak testers, degassing chambers, and custom vacuum systems designed for both rigorous laboratory research and high-speed production environments.";

$products = [
    'leak_test' => [
        'title' => 'Vacuum Leak Test Machine in Mumbai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Leak Test Machine Manufacturer</strong> in Mumbai, India. In Mumbai, industrial production lines rely on our vacuum leak testing equipment to maintain the highest standards of package seal integrity.', 'As a leading <strong>Vacuum Leak Test Machine Supplier</strong> in Mumbai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Vacuum Glove Box in Mumbai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Mumbai, India. The Burhani Vacuum Glove Box offers a sterile workspace for Mumbai\'s electronics and pharmaceutical manufacturing sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Mumbai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Vacuum Degassing Chamber in Mumbai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Mumbai, India. Eliminate trapped air efficiently with our high-performance vacuum degassing equipment, tailored for Mumbai\'s industrial needs.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Mumbai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Flat Vacuum Box Weld Testing in Mumbai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Mumbai, India. In Mumbai, our vacuum box weld testing unit provides rapid, visible proof of weld quality for critical industrial structures.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Mumbai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Transparent Vacuum & Pressure Vessel in Mumbai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Mumbai, India. Our Transparent Vacuum and Pressure Vessel allows for full visual inspection during immersion leak testing in Mumbai\'s packaging plants.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Mumbai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Mumbai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Mumbai.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Mumbai, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Portable Gas Collection System Supplier in Mumbai, India',
        'desc' => [
            'Our company manufactures certified test chambers, tailored for pharmaceutical research and cleanroom applications in Mumbai, India. The VC20 unit supports high-accuracy compliance monitoring and gas collection.',
            'The unit offers a dedicated purge system and LED-illuminated viewing window to monitor bag expansion. It is highly suited for monitoring odors, municipal landfill emissions, and hazardous vapors in industrial zones.',
            'Burhani Engineering Technology coordinates direct supply, import clearance, and technical training for industrial hygiene teams in Mumbai. Contact our support office for technical dossiers and customized commercial quotes.'
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
    'title' => 'Supply Vacuum Testing Equipment to Mumbai, India',
    'desc' => 'Reliable pan-India delivery and technical support for all your vacuum testing requirements in Mumbai.'
];

$custom_sidebar_html = '
<div class="sidebar-box p-4 bg-white rounded shadow-sm" style="border-top: 5px solid #1e3a8a;">
  <h4 class="mb-3" style="font-weight:700;">Mumbai Industrial Hubs</h4>
  <ul class="list-unstyled mb-4">
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Thane-Belapur TTC Area</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Taloja MIDC Estate</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Andheri East (MIDC)</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Patalganga Industrial Belt</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> JNPT Port Logistics Zone</li>
  </ul>
  <h4 class="mb-3" style="font-weight:700;">Regional Links</h4>
  <div class="d-flex flex-wrap gap-1">
    <a href="' . url('locations/asia/india/pune/') . '" class="btn btn-sm btn-outline-secondary">Pune, India</a>
    <a href="' . url('locations/asia/india/nashik/') . '" class="btn btn-sm btn-outline-secondary">Nashik, India</a>
    <a href="' . url('locations/asia/india/surat/') . '" class="btn btn-sm btn-outline-secondary">Surat, India</a>
    <a href="' . url('locations/asia/india/ahmedabad/') . '" class="btn btn-sm btn-outline-secondary">Ahmedabad, India</a>
  </div>
</div>';

require_once ABSPATH . 'includes/location-template.php';
