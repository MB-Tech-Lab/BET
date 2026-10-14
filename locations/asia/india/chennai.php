<?php
require_once __DIR__ . '/../../../includes/config.php';

$city = 'Chennai';
$country = 'India';
$continent = 'Asia';
$hero_gradient = 'linear-gradient(135deg, #f97316 0%, #ea580c 100%)';

$meta_title = "Manufacturer, Supplier, Exporter of Vacuum Testing Equipment in Chennai, India";
$meta_description = "Advanced industrial vacuum solutions, bubble leak testers, and NDT inspection systems for Chennai's world-class manufacturing clusters.";

$intro_p1 = "Chennai, widely recognized as the 'Detroit of India', is a global powerhouse for automotive manufacturing, electronics assembly, and maritime engineering. From the massive industrial corridors of Oragadam and Sriperumbudur to the thriving electronics hubs, Chennai's manufacturing sector demands uncompromising quality control.";
$intro_p2 = "Burhani Engineering Technology is proud to support this ecosystem as a leading manufacturer, supplier, and exporter of precision vacuum testing equipment, providing the tools necessary for international-grade industrial automation and product validation. Our systems are engineered to meet the rigorous NDT inspection and testing demands of Chennai's diverse industries — ensuring that every component, package, and weld meets the highest safety and performance standards before reaching the global market.";

$products = [
    'leak_test' => [
        'title' => 'Vacuum Leak Test Machine in Chennai, India',
        'desc' => ['Burhani Engineering Technology is a leading <strong>Vacuum Leak Test Machine Manufacturer</strong> in Chennai, India. The Burhani Vacuum Leak Test system is engineered for Chennai\'s packaging, automotive, and industrial testing sectors, delivering precise seal evaluation.', 'As a trusted <strong>Vacuum Leak Test Machine Supplier</strong> in Chennai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Leak Test Machine Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'glove_box' => [
        'title' => 'Vacuum Glove Box in Chennai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Glove Box Manufacturer</strong> in Chennai, India. Engineered for clarity and durability, our glove boxes serve the specialized needs of Chennai\'s industrial research and manufacturing sectors.', 'As a leading <strong>Vacuum Glove Box Supplier</strong> in Chennai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Glove Box Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'degassing_chamber' => [
        'title' => 'Vacuum Degassing Chamber in Chennai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Vacuum Degassing Chamber Manufacturer</strong> in Chennai, India. In Chennai, our degassing chambers are the preferred choice for laboratory testing and production-scale material processing.', 'As a leading <strong>Vacuum Degassing Chamber Supplier</strong> in Chennai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Vacuum Degassing Chamber Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'weld_testing' => [
        'title' => 'Flat Vacuum Box Weld Testing in Chennai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Flat Vacuum Box Weld Testing Manufacturer</strong> in Chennai, India. Our Flat Vacuum Box Weld Testing equipment is essential for API standard tank inspection and pipeline leak testing in Chennai\'s maritime and heavy engineering sectors.', 'As a leading <strong>Flat Vacuum Box Weld Testing Supplier</strong> in Chennai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Flat Vacuum Box Weld Testing Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'pressure_vessel' => [
        'title' => 'Transparent Vacuum & Pressure Vessel in Chennai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>Transparent Vacuum & Pressure Vessel Manufacturer</strong> in Chennai, India. In Chennai, our clear acrylic vessels are used for submerged leak evaluation of sealed containers and industrial components.', 'As a leading <strong>Transparent Vacuum & Pressure Vessel Supplier</strong> in Chennai, we provide advanced equipment designed for high-precision industrial and laboratory applications.', 'Our company also serves as a prominent <strong>Transparent Vacuum & Pressure Vessel Exporter</strong>, <strong>Importer</strong>, and <strong>Dealer</strong>, delivering quality assurance solutions to partners across India and international markets.']
    ],
    'ats_pav' => [
        'title' => 'ATS Pressure Aging Vessel Asphalt Binding Testing in Chennai, India',
        'desc' => ['Burhani Engineering Technology is a trusted <strong>ATS Pressure Aging Vessel Manufacturer</strong> serving road construction laboratories and asphalt research facilities in Chennai.', 'As a leading <strong>ATS Pressure Aging Vessel Supplier</strong> in Chennai, we provide advanced asphalt binder testing systems for infrastructure testing centers and transportation engineering institutes.', 'Our company also operates as an <strong>ATS Pressure Aging Vessel Exporter</strong> serving highway material testing laboratories and projects requiring precise asphalt binder aging analysis across the region.']
    ],    'vc20' => [
        'title' => 'Industrial VOC Sampler Exporter in Chennai, India',
        'desc' => [
            'For manufacturing plants, textile factories, and environmental engineers in Chennai, India, we supply certified environmental gas monitors. The VC20 supports high-accuracy emissions collection and odor monitoring.',
            'The portable air sampling chamber operates on the lung principle (indirect vacuum bag sampling), pulling a negative pressure of up to 18" Hg within the chamber to expand the Tedlar bag internally. This mechanism ensures that the air sample has zero contact with pump components, eliminating cross-contamination.',
            'As a trusted partner and importer of portable gas samplers, we ensure complete field readiness, technical calibration, and local warranty support for our clients in Chennai.'
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
    'title' => 'Supply Vacuum Testing Equipment to Chennai, India',
    'desc' => 'Reliable technical support and pan-India shipping for all your vacuum testing requirements in Chennai.'
];

$custom_sidebar_html = '
<div class="sidebar-box p-4 bg-white rounded shadow-sm" style="border-top: 5px solid #f97316;">
  <h4 class="mb-3" style="font-weight:700;">Major Industrial Zones</h4>
  <ul class="list-unstyled mb-4">
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Oragadam Industrial Cluster</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Sriperumbudur SEZ</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Ambattur Industrial Estate</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Guindy Industrial Estate</li>
    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Ennore Port Industrial Area</li>
  </ul>
  <h4 class="mb-3" style="font-weight:700;">Regional Links</h4>
  <div class="d-flex flex-wrap gap-1">
    <a href="' . url('locations/asia/india/bangalore/') . '" class="btn btn-sm btn-outline-secondary">Bangalore, India</a>
    <a href="' . url('locations/asia/india/mumbai/') . '" class="btn btn-sm btn-outline-secondary">Mumbai, India</a>
    <a href="' . url('locations/asia/india/hyderabad/') . '" class="btn btn-sm btn-outline-secondary">Hyderabad, India</a>
    <a href="' . url('locations/asia/india/coimbatore/') . '" class="btn btn-sm btn-outline-secondary">Coimbatore, India</a>
  </div>
</div>';

require_once ABSPATH . 'includes/location-template.php';
