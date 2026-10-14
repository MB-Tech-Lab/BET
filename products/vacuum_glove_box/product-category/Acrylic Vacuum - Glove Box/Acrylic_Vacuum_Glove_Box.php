<?php
include_once(__DIR__ . '/../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Acrylic Vacuum Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Acrylic Vacuum Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_category_url('vacuum_glove_box', 'Acrylic_Vacuum_Glove_Box');
} else {
    $meta_title = "Acrylic Vacuum Glove Box | Precision Controlled Environments | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Acrylic Vacuum Glove Boxes providing controlled environments for sensitive operations, scientific research, and advanced manufacturing. Custom configurations available.";
    $canonical_url = product_category_url('vacuum_glove_box', 'Acrylic_Vacuum_Glove_Box');
}
include_once(__DIR__ . '/../../../../includes/header.php');

$gallery_images = [
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Acrylic Vacuum Glove Box.webp'), 'caption' => 'Acrylic Vacuum Glove Box Overview'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Two Port Acrylic Vacuum Glove Box/Two Port Acrylic Vacuum Glove Box 6.png'), 'caption' => 'Two Port Acrylic Vacuum Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Acrylic glove box With Transition Chamber/Acrylic glove box With Transition Chamber Main 1.png'), 'caption' => 'Acrylic Glove Box with Transition Chamber'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Acrylic Vacuum Glove Box Without Transition Chamber/Acrylic Vacuum Glove Box Without Transition Chamber Main 1.png'), 'caption' => 'Acrylic Glove Box Without Transition Chamber'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box Main 1.png'), 'caption' => 'Three Port Acrylic Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Four Port Acrylic Vacuum Glove Box/Four Port Acrylic Vacuum Glove Box Main 1.png'), 'caption' => 'Four Port Acrylic Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Controlled Atmosphere Glove Box/Controlled Atmosphere Glove Box Main 1.png'), 'caption' => 'Controlled Atmosphere Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box Main 1.png'), 'caption' => 'Argon Gas Purging Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box Main 1.png'), 'caption' => 'Nitrogen Purging Dry Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Humidity-Controlled Acrylic Glove Box/Humidity-Controlled Acrylic Glove Box Main 1.png'), 'caption' => 'Humidity-Controlled Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Low-Oxygen Acrylic Glove Box/Low-Oxygen Acrylic Glove Box Main 1.png'), 'caption' => 'Low-Oxygen Glove Box System'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/HEPA Filtered Acrylic Glove Box/HEPA Filtered Acrylic Glove Box Main 1.png'), 'caption' => 'HEPA Filtered Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Vacuum Cycling Acrylic Glove Box/Vacuum Cycling Acrylic Glove Box Main 1.png'), 'caption' => 'Vacuum Cycling Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Compact university glove Box/Compact University Glove Box 2.png'), 'caption' => 'Compact University Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Laboratory Anaerobic Glove Box with Controlled Atmosphere Chamber for Bacterial Culture/Laboratory Anaerobic Workstation with Controlled Atmosphere Chamber for Bacterial Culture Main 1.png'), 'caption' => 'Laboratory Anaerobic Workstation'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Positive Pressure Acrylic Glove Box/Positive Pressure Acrylic Glove Box Main 1.png'), 'caption' => 'Positive Pressure Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Negative Pressure Acrylic Glove Box/Negative Pressure Acrylic Glove Box Main 1.png'), 'caption' => 'Negative Pressure Glove Box'],
    ['src' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Custom Vacuum Glove Box/custom vacuum glove box 1.png'), 'caption' => 'Custom Vacuum Glove Box']
];
$featured_image = $gallery_images[0]['src'];
$featured_caption = $gallery_images[0]['caption'];

$acrylic_products = [
    [
        'title' => 'Acrylic Glove Box With Transition Chamber',
        'desc' => 'Combines a transparent acrylic working chamber with an integrated vacuum transition chamber for safe sample transfer without disturbing the main controlled environment.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Acrylic glove box With Transition Chamber/Acrylic glove box With Transition Chamber Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Acrylic glove box With Transition Chamber/Acrylic Glove Box With Transition Chamber.php')
    ],
    [
        'title' => 'Acrylic Vacuum Glove Box Without Transition Chamber',
        'desc' => 'Spacious, transparent and enclosed working environment for controlled material handling, gas displacement and contamination-sensitive processes.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Acrylic Vacuum Glove Box Without Transition Chamber/Acrylic Vacuum Glove Box Without Transition Chamber Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Acrylic Vacuum Glove Box Without Transition Chamber/Acrylic Vacuum Box Without Transition Chamber.php')
    ],
    [
        'title' => 'Argon Gas Purging Acrylic Vacuum Glove Box',
        'desc' => 'Engineered for atmospheric air displacement using high-purity argon gas, combining a sealed acrylic chamber and an integrated vacuum transition chamber.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box.php')
    ],
    [
        'title' => 'Compact University Glove Box (BET810-SG10)',
        'desc' => 'Space-efficient sealed glove box equipped with an integrated 12-inch side transfer chamber, built-in purging valves, vacuum gauge, and electrical outlet.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Compact university glove Box/Compact University Glove Box 2.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Compact university glove Box/Compact university Glove Box details.php')
    ],
    [
        'title' => 'Controlled Atmosphere Acrylic Glove Box',
        'desc' => 'Precision-engineered workstation supporting nitrogen or argon gas purging, pressure monitoring, and transition chamber for oxygen- and moisture-sensitive materials.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Controlled Atmosphere Glove Box/Controlled Atmosphere Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Controlled Atmosphere Glove Box/Controlled Atmosphere Acrylic Glove Box.php')
    ],
    [
        'title' => 'Custom Vacuum Glove Box',
        'desc' => 'Customized according to process requirements, with configurable chamber dimensions, glove ports, steel or aluminium supporting frames, and vacuum systems.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Custom Vacuum Glove Box/custom vacuum glove box 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Custom Vacuum Glove Box/Custom Vacuum Glove Box.php')
    ],
    [
        'title' => 'Four Port Acrylic Glove Box (BET-FPGB-400)',
        'desc' => 'High-clarity workstation with four glove ports for multi-step handling or two-person operation, integrated side transfer chamber, and airtight door sealing.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Four Port Acrylic Vacuum Glove Box/Four Port Acrylic Vacuum Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Four Port Acrylic Vacuum Glove Box/Four Port Acrylic Glove Box.php')
    ],
    [
        'title' => 'HEPA Filtered Acrylic Vacuum Glove Box',
        'desc' => 'Top-mounted integrated HEPA filtration housing designed to reduce airborne particulate contamination for sensitive samples, pharmaceutical, and electronic assemblies.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/HEPA Filtered Acrylic Glove Box/HEPA Filtered Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/HEPA Filtered Acrylic Glove Box/HEPA Filtered Acrylic Vacuum Glove Box.php')
    ],
    [
        'title' => 'HEPA Filtered Looped Negative Pressure Glove Box',
        'desc' => 'Maintains internal chamber at negative pressure with Single, Double, or Closed-Loop HEPA filtration for operator protection and particulate containment.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/HEPA Filtered Looped Negative pressure Acrylic  Glove Box/Negative Pressure Glove Box 1.jpg'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/HEPA Filtered Looped Negative pressure Acrylic  Glove Box/Negative Pressure Glove Box.php')
    ],
    [
        'title' => 'Humidity-Controlled Acrylic Glove Box',
        'desc' => 'Regulated internal humidity chamber with optical clarity and glove port access for moisture-sensitive chemical, electronic, pharmaceutical, and lithium handling.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Humidity-Controlled Acrylic Glove Box/Humidity-Controlled Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Humidity-Controlled Acrylic Glove Box/Humidity Controlled Acrylic Glove Box.php')
    ],
    [
        'title' => 'Inert Purging Gas Acrylic Vacuum Glove Box',
        'desc' => 'Non-vacuum isolation chamber utilizing continuous nitrogen or argon purging to displace oxygen and moisture in a cost-effective transparent workstation.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box/Inert Gas Acrylic Glove Box.php')
    ],
    [
        'title' => 'Laboratory Anaerobic Workstation (BET-AW-300-SG)',
        'desc' => 'Oxygen-free microbiological incubation and handling chamber with 300 Petri dish capacity, strict environmental controls, and dual glove ports.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Laboratory Anaerobic Glove Box with Controlled Atmosphere Chamber for Bacterial Culture/Laboratory Anaerobic Workstation with Controlled Atmosphere Chamber for Bacterial Culture Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Laboratory Anaerobic Glove Box with Controlled Atmosphere Chamber for Bacterial Culture/laboratory anaerobic chamber for microbiology research.php')
    ],
    [
        'title' => 'Low-Moisture Acrylic Glove Box',
        'desc' => 'Generous 250-liter controlled workspace designed for low-humidity handling, sample preparation, and material testing with integrated glove ports.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Low -Moisture Acrylic Glove Box/Low -Moisture Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Low -Moisture Acrylic Glove Box/Low- Moisture Acrylic Glove Box.php')
    ],
    [
        'title' => 'Low-Oxygen Acrylic Glove Box (BET-BX128(A)-N2)',
        'desc' => 'Ultra-low oxygen controlled environment system using nitrogen management and transparent acrylic construction for oxidation-sensitive research.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Low-Oxygen Acrylic Glove Box/Low-Oxygen Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Low-Oxygen Acrylic Glove Box/Low-Oxygen Acrylic Glove Box – Ultra-Low Oxygen Controlled Atmosphere System.php')
    ],
    [
        'title' => 'Negative Pressure Acrylic Glove Box',
        'desc' => 'Solvent-welded acrylic chamber operating under negative pressure for ventilation, exhaust handling, inward airflow containment, and operator safety.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Negative Pressure Acrylic Glove Box/Negative Pressure Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Negative Pressure Acrylic Glove Box/Negative Pressure Acrylic Glove Box.php')
    ],
    [
        'title' => 'Nitrogen Purging Acrylic Glove Box / Dry Box',
        'desc' => 'Controlled atmosphere dry box with dedicated nitrogen inlet and outlet connections, pressure monitoring, and integrated transfer pass box.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box/Nitrogen Purging Acrylic Glove Box.php')
    ],
    [
        'title' => 'O₂ & Moisture / RH Monitoring Acrylic Glove Box (AD600PC)',
        'desc' => 'Clear PMMA acrylic enclosure equipped with real-time oxygen, moisture, and relative humidity monitoring for condition-critical laboratory workflows.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box.php')
    ],
    [
        'title' => 'Positive Pressure Acrylic Glove Box',
        'desc' => 'Maintains internal pressure above ambient levels to prevent particulate and dust ingress, with sloped front viewing panel and dual glove ports.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Positive Pressure Acrylic Glove Box/Positive Pressure Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Positive Pressure Acrylic Glove Box/Positive Pressure Acrylic Glove Box.php')
    ],
    [
        'title' => 'Standard Acrylic Vacuum Glove Box',
        'desc' => 'Standard 6 mm crystal-clear acrylic chamber with vacuum and gas purge capabilities for general laboratory isolation and sample handling.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Standard Acylic Vacuum Glove Box/Standard Vacuum Glove Box  Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Standard Acylic Vacuum Glove Box/Standard Acrylic Vacuum Glove Box.php')
    ],
    [
        'title' => 'Temperature & Humidity Controlled Glove Box (BET-PMMA/PP)',
        'desc' => 'Heavy-duty 10 mm heat-treated Plexiglas chamber with stainless steel transfer lock, external temperature/humidity controllers, and airlock evacuation.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Temperature & Huidity controlled Acrylic Glove Box/Temperature & Huidity controlled Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Temperature & Huidity controlled Acrylic Glove Box/Temperature And Humidity Controlled Acrylic Glove Box.php')
    ],
    [
        'title' => 'Three Port Acrylic Vacuum Glove Box (BET-TPGB-300)',
        'desc' => 'Expanded three-port configuration offering superior manipulation flexibility, wider working reach, and vacuum-compatible material transfer.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Three Port Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box.php')
    ],
    [
        'title' => 'Two Port Acrylic Vacuum Glove Box',
        'desc' => 'Classic dual-port transparent glove box with double O-ring sealed glove ports and airtight connections for versatile controlled atmosphere tasks.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Two Port Acrylic Vacuum Glove Box/Two Port Acrylic Vacuum Glove Box 6.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Two Port Acrylic Vacuum Glove Box/Acrylic Vacuum Glove Box.php')
    ],
    [
        'title' => 'Vacuum Cycling Acrylic Glove Box (BET-GB0010)',
        'desc' => '10 mm PMMA acrylic chamber with repeated evacuation and inert gas cycling capability down to -0.1 MPa, airlock transfer chamber, and multi-gas support.',
        'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Vacuum Cycling Acrylic Glove Box/Vacuum Cycling Acrylic Glove Box Main 1.png'),
        'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Vacuum Cycling Acrylic Glove Box/Vacuum Cycling Acrylic Glove Box.php')
    ],
    [
      'title' => 'Explosion Proof Acrylic Vacuum Glove Box (EXPGB-500)',
      'desc' => 'Safe transparent containment with a clear acrylic chamber, vacuum transfer antechamber, secure sealing, and custom-built options for laboratory and industrial applications.',
      'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Explosion proof glove box/Explosion Proof Acrylic Vacuum Glove Box main 1.png'),
      'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Explosion proof glove box/Explosion Proof Acrylic Vacuum Glove Box.php')
    ],
    [
      'title' => 'Mobile Lightweight Vacuum Glove Box for Small Labs',
      'desc' => 'Compact acrylic / PMMA glove box with dual glove ports, airtight sealing, and vacuum-compatible operation for small laboratories and controlled material handling.',
      'image' => asset('img/Glove Box/Acrylic Vacuum Glove Box/Mobile Light Weight Vacuum Glove Box For Small Labs/Mobile Light Weight Vacuum Glove Box For Small Labs main 1.png'),
      'url' => url('products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Mobile Light Weight Vacuum Glove Box For Small Labs/Mobile Light Weight Vacuum Glove Box For Small Labs.php')
    ]
];
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <!-- 1️⃣ Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>
              <a href="https://bhfvacuum.com/acrylic-vacuum-glove-box.html#:~:text=Acrylic%20Vacuum%20Glove%20Box,Download%20Broucher"
                 target="_blank"
                 rel="noopener noreferrer"
                 style="color: inherit; text-decoration: none;">
                 Acrylic Vacuum Glove Box
              </a>
            </h1>
            <p class="mb-4">Precision, Safety, and Contamination-Free conditions for Critical Tasks</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="https://bhfvacuum.com/downloads/acrylic-vacuum-glove-box.pdf" target="_blank" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-file-earmark-pdf"></i> Download Technical PDF
              </a>
              <a href="#contact" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 2️⃣ Introduction & Product Overview -->
  <section class="section">
    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            <h2>Introduction</h2>
            <p>Burhani Engineering Technology is a trusted <strong>Manufacturer of Acrylic Vacuum Glove Box</strong> systems for laboratory and industrial applications.</p>
            <p>As a leading <strong>Supplier of Acrylic Vacuum Glove Box</strong> equipment, we provide custom solutions for research facilities.</p>
            <p>We are also an <strong>Exporter of Acrylic Vacuum Glove Box</strong> systems serving customers across international markets.</p>
            <p>Many clients choose us as their preferred <strong>Importer</strong> and <strong>Dealer of Acrylic Vacuum Glove Box</strong> equipment.</p>

            <p>
              In scientific research, advanced manufacturing, and various industrial processes, precision and control are paramount. Enter the <strong>Acrylic Vacuum Glove Box</strong>, a versatile and essential tool that provides a controlled environment for sensitive operations. This comprehensive guide explores the world of Acrylic Vacuum Glove Boxes, shedding light on their principles, applications, and the transformative role they play in ensuring precision, safety, and contamination-free conditions for critical tasks.
            </p>
            <p>
              Glove Box supports vacuum and degassing operations. Vacuum cycling provides a fast, economical way to achieve extremely low moisture and oxygen levels inside the chamber. During each cycle, a vacuum pump connected to the glove box removes the chamber environment, and with it moisture and oxygen. At the end of the vacuum cycle, the chamber is backfilled with a clean, dry process gas (commonly nitrogen or argon) to restore neutral pressure. This cycle can be repeated as many times as necessary to attain the desired low humidity, low oxygen conditions.
            </p>
          </div>
        </div>
        
        <!-- Sidebar Navigation -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary">
            <h4 class="mb-4" style="color: var(--heading-color); font-weight: 700;">Product Categories</h4>
            <div class="category-nav-list">
              <div class="category-nav-item active">
                <a href="<?php echo product_category_url('vacuum_glove_box', 'Acrylic_Vacuum_Glove_Box'); ?>" class="category-link">
                  <span>Acrylic Vacuum Glove Box</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box', 'Vacuum_GBMB'); ?>" class="category-link">
                  <span>Metal Body Glove Box</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box', 'argon-gas-glove-box'); ?>" class="category-link">
                  <span>Argon Gas Glove Box</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box', 'compact-university-glove-box'); ?>" class="category-link">
                  <span>Compact University Glove Box</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box', 'globe-box-dome-360-glove-chamber'); ?>" class="category-link">
                  <span>Globe Box Dome 360° Chamber</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box', 'negative-pressure-glove-box'); ?>" class="category-link">
                  <span>Negative Pressure Glove Box</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box', 'nitrogen-purged-stainless-steel-glove-box'); ?>" class="category-link">
                  <span>Nitrogen Purged Glove Box</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3️⃣ Product Categories Gallery -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT GALLERY</h2>
        <p>Explore High-Resolution Images of our Acrylic Vacuum Glove Box Series</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          
          <!-- Featured Image Display -->
          <div class="featured-image-container mb-4 text-center p-4 bg-white rounded-3 shadow-sm position-relative">
            <a href="<?php echo $featured_image; ?>" id="featured-image-link" class="glightbox" data-gallery="product-gallery">
              <img src="<?php echo $featured_image; ?>" id="featured-image-display" loading="lazy" decoding="async" alt="<?php echo $featured_caption; ?>" title="<?php echo $featured_caption; ?>" class="img-fluid rounded" style="max-height: 500px; object-fit: contain; transition: opacity 0.2s ease;" width="800" height="600">
            </a>
            <div id="featured-image-caption" class="mt-3 fw-bold text-primary">
              <?php echo $featured_caption; ?>
            </div>
          </div>

          <!-- Thumbnail Row/Grid with Navigation Arrows -->
          <div class="thumbnail-carousel-container position-relative px-4 mb-4">
            <!-- Left Arrow -->
            <button class="carousel-arrow carousel-arrow-left btn btn-light rounded-circle shadow-sm position-absolute start-0 top-50 translate-middle-y" onclick="scrollThumbnails('left')" aria-label="Scroll left">
              <i class="bi bi-chevron-left"></i>
            </button>
            
            <div class="thumbnail-wrapper" id="thumbnailWrapper" style="overflow: hidden; width: 100%;">
              <div class="row gx-2 gy-0 thumbnail-row flex-nowrap py-2" id="thumbnailRow" style="transition: transform 0.3s ease-out; display: flex; width: max-content; transform: translate3d(0px, 0px, 0px);">
                <?php foreach ($gallery_images as $index => $item): 
                    $img = $item['src'];
                    $caption = $item['caption'];
                    $active_class = ($index === 0) ? 'active' : '';
                ?>
                <div class="col-auto thumbnail-col">
                  <div class="thumbnail-card card p-2 h-100 border-0 shadow-sm text-center cursor-pointer <?php echo $active_class; ?>" 
                       data-large-src="<?php echo $img; ?>" 
                       data-caption="<?php echo htmlspecialchars($caption); ?>" 
                       onclick="updateFeaturedImage(this, true)">
                    <div class="thumbnail-img-wrap mb-2">
                      <img src="<?php echo $img; ?>" loading="lazy" decoding="async" alt="<?php echo htmlspecialchars($caption); ?>" title="<?php echo htmlspecialchars($caption); ?>" class="img-fluid rounded" style="height: 80px; object-fit: contain; width: 120px;">
                    </div>
                    <div class="thumbnail-caption small text-muted text-truncate fw-medium" style="max-width: 120px;" title="<?php echo htmlspecialchars($caption); ?>">
                      <?php echo htmlspecialchars($caption); ?>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Right Arrow -->
            <button class="carousel-arrow carousel-arrow-right btn btn-light rounded-circle shadow-sm position-absolute end-0 top-50 translate-middle-y" onclick="scrollThumbnails('right')" aria-label="Scroll right">
              <i class="bi bi-chevron-right"></i>
            </button>
          </div>

          <!-- Gallery Metadata/Footer -->
          <div class="d-flex justify-content-center gap-4 mt-2 text-muted small fw-bold flex-wrap border-top pt-3">
            <span><i class="bi bi-camera text-primary"></i> <?php echo count($gallery_images); ?> High Resolution Images</span>
            <span>&bull;</span>
            <span><i class="bi bi-zoom-in text-primary"></i> Click to Enlarge</span>
            <span>&bull;</span>
            <span><i class="bi bi-play-circle text-primary"></i> Auto Scrolling Gallery</span>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ Product Categories Carousel -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>PRODUCT CATEGORIES</h2>
        <p>Explore Our Acrylic Vacuum Glove Box Range</p>
      </div>

      <div class="product-categories-carousel" data-aos="fade-up" data-aos-delay="100">
        <div class="carousel-layout">
          <!-- Previous Product -->
          <div class="carousel-side carousel-prev-side" id="prevProduct">
            <div class="side-product-card">
              <a href="#" class="side-image-link" id="prevImageLink">
                <img src="" alt="" class="side-product-image" id="prevImage">
              </a>
              <div class="side-product-name" id="prevName"></div>
              <button class="side-nav-btn prev-btn" id="prevBtn" aria-label="Previous product">
                <i class="bi bi-chevron-left"></i>
              </button>
            </div>
          </div>

          <!-- Active Product -->
          <div class="carousel-center" id="activeProduct">
            <div class="active-product-card">
              <a href="#" class="active-image-link" id="activeImageLink">
                <img src="" alt="" class="active-product-image" id="activeImage">
              </a>
              <div class="active-product-details">
                <h3 class="active-product-title" id="activeTitle"></h3>
                <p class="active-product-description" id="activeDesc"></p>
                <a href="#" class="btn btn-primary active-view-btn" id="activeViewBtn">
                  View Product <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Next Product -->
          <div class="carousel-side carousel-next-side" id="nextProduct">
            <div class="side-product-card">
              <a href="#" class="side-image-link" id="nextImageLink">
                <img src="" alt="" class="side-product-image" id="nextImage">
              </a>
              <div class="side-product-name" id="nextName"></div>
              <button class="side-nav-btn next-btn" id="nextBtn" aria-label="Next product">
                <i class="bi bi-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Counter -->
        <div class="carousel-counter">
            <button class="mobile-nav-btn mobile-prev" id="mobilePrevBtn" aria-label="Previous product">
                <i class="bi bi-chevron-left"></i>
            </button>
            <span id="currentIndex">01</span> / <span id="totalIndex">25</span>
            <button class="mobile-nav-btn mobile-next" id="mobileNextBtn" aria-label="Next product">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
      </div>
    </div>
  </section>

  <!-- 5️⃣ Understanding Acrylic Vacuum Glove Boxes -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="content">
            <h2>
              <a href="https://bhfvacuum.com/acrylic-vacuum-glove-box.html#:~:text=Understanding%20Acrylic%20Vacuum%20Glove%20Boxes"
                 target="_blank"
                 rel="noopener noreferrer"
                 style="color: inherit; text-decoration: none;">
                 Understanding Acrylic Vacuum Glove Boxes
              </a>
            </h2>
            <h3>The Art of Controlled Environments</h3>
            <p>
              Before we delve into the depths of Acrylic Vacuum Glove Boxes, let's establish the fundamental concept behind these specialized enclosures. A glove box is a sealed container with built-in gloves, typically made of acrylic, that allows operators to manipulate objects or substances in a controlled environment. When combined with a vacuum system, the Acrylic Vacuum Glove Box ensures even greater control over the environment, making it ideal for tasks that demand precision, cleanliness, and containment.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6️⃣ Models Available Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Standard Models & Customization</h2>
        <p>Explore standard benchtop configurations and customized systems engineered for diverse research and industrial requirements.</p>
      </div>

      <div class="row gy-4 justify-content-center">
        <!-- Model 1: BHFAGB53-106 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card h-100 border-0 shadow-sm p-4">
            <div class="text-center mb-4">
              <a href="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box.webp'); ?>" class="glightbox gallery-item shadow-sm rounded overflow-hidden" data-gallery="product-gallery" title="Acrylic Vacuum Glove Box BHFAGB53-106">
                <img src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box.webp'); ?>" loading="lazy" decoding="async" alt="BHFAGB53-106 Acrylic Vacuum Glove Box" class="img-fluid rounded" style="max-height: 220px; object-fit: contain;">
              </a>
            </div>
            <h3 class="text-primary fs-4 fw-bold">BHFAGB53-106</h3>
            <p><strong>Burhani Engineering Technology Acrylic Vacuum Box with 106 Liters Working Space.</strong></p>
            <p class="small text-muted">Compact chamber with 2 Glove Ports and 300x300mm Wide Door Opening. Ideal for standalone use or stacked desiccators in university research, biomedical, electronic, pharmaceutical, and R&D applications. Supports PID controllers for heating, cooling, humidification, and dehumidification.</p>
            
            <h4 class="mt-3 fs-6 fw-bold">Features:</h4>
            <ul class="list-unstyled small">
              <li><i class="bi bi-check2-circle text-primary me-2"></i> 106 Liters working space</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Size: 61 x 46 x 38 cm</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Construction Material: Clear Acrylic</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Door: Left side or Right side</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Seal: High Quality Rubber Seal</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Gloves: Latex Rubber for 6-inch Ports</li>
            </ul>
          </div>
        </div>

        <!-- Model 2: BHFAGB53-225 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card h-100 border-0 shadow-sm p-4">
            <div class="text-center mb-4">
              <a href="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box.webp'); ?>" class="glightbox gallery-item shadow-sm rounded overflow-hidden" data-gallery="product-gallery" title="Acrylic Vacuum Glove Box BHFAGB53-225">
                <img src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box.webp'); ?>" loading="lazy" decoding="async" alt="BHFAGB53-225 Acrylic Vacuum Glove Box" class="img-fluid rounded" style="max-height: 220px; object-fit: contain;">
              </a>
            </div>
            <h3 class="text-primary fs-4 fw-bold">BHFAGB53-225</h3>
            <p><strong>Burhani Engineering Technology Acrylic Vacuum Box with 225 Liters Working Space.</strong></p>
            <p class="small text-muted">Spacious chamber with 2 Glove Ports and 300x300mm Wide Door Opening. Accommodates larger benchtop instrumentation and multi-stage testing. Features complete PID temperature and humidity control options with robust rubber sealing.</p>
            
            <h4 class="mt-3 fs-6 fw-bold">Features:</h4>
            <ul class="list-unstyled small">
              <li><i class="bi bi-check2-circle text-primary me-2"></i> 225 Liters working space</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Size: 92 x 61 x 46 cm</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Construction Material: Clear Acrylic</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Door: Left side or Right side</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Seal: High Quality Rubber Seal</li>
              <li><i class="bi bi-check2-circle text-primary me-2"></i> Gloves: Latex Rubber for 6-inch Ports</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row mt-5" data-aos="fade-up">
        <div class="col-lg-12">
          <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-primary">
            <h4 class="fw-bold">Operating Range & Customization</h4>
            <div class="row mt-3">
              <div class="col-md-6">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><strong>Temperature Range:</strong> 32–122°F (0–50°C)</li>
                  <li class="mb-2"><strong>Humidity Range:</strong> 1–100% RH</li>
                  <li class="mb-2"><strong>Power Supply:</strong> 115 VAC or 230 VAC operation</li>
                  <li class="mb-2"><strong>Access Door:</strong> 300 mm x 300 mm wide opening standard</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><strong>Glove Ports:</strong> Available with 150 mm / 200 mm ports or portless</li>
                  <li class="mb-2"><strong>Control Packages:</strong> Temperature and Humidity control modules</li>
                  <li class="mb-2"><strong>Portability:</strong> Stackable and portable benchtop formats</li>
                  <li class="mb-2"><strong>Engineering:</strong> Full custom dimensions and port layouts on request</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7️⃣ The Need for Precision & Containment -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="section-title">
            <h2>The Need for Precision and Containment</h2>
            <p>Critical applications requiring precise environmental control and contamination prevention.</p>
          </div>
          <div class="row gy-3 mt-2">
            <div class="col-md-6">
              <div class="d-flex align-items-start gap-3 p-4 bg-light rounded shadow-sm h-100">
                <span class="fs-4 fw-bold text-primary">1.</span>
                <div>
                  <strong class="fs-5">Scientific Research:</strong>
                  <p class="mb-0 text-muted small mt-1">Laboratories utilize Acrylic Vacuum Glove Boxes for experiments involving sensitive materials, such as chemicals or biological samples.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-start gap-3 p-4 bg-light rounded shadow-sm h-100">
                <span class="fs-4 fw-bold text-primary">2.</span>
                <div>
                  <strong class="fs-5">Advanced Manufacturing:</strong>
                  <p class="mb-0 text-muted small mt-1">Industries like electronics, aerospace, and pharmaceuticals employ these boxes for manufacturing components that demand contamination-free conditions.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-start gap-3 p-4 bg-light rounded shadow-sm h-100">
                <span class="fs-4 fw-bold text-primary">3.</span>
                <div>
                  <strong class="fs-5">Nuclear Research:</strong>
                  <p class="mb-0 text-muted small mt-1">Radioactive materials and isotopes are safely handled within glove boxes to minimize radiation exposure.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-start gap-3 p-4 bg-light rounded shadow-sm h-100">
                <span class="fs-4 fw-bold text-primary">4.</span>
                <div>
                  <strong class="fs-5">Pharmaceuticals:</strong>
                  <p class="mb-0 text-muted small mt-1">Drug formulation and handling of potent compounds require controlled environments to prevent cross-contamination.</p>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="d-flex align-items-start gap-3 p-4 bg-light rounded shadow-sm">
                <span class="fs-4 fw-bold text-primary">5.</span>
                <div>
                  <strong class="fs-5">Semiconductor Fabrication:</strong>
                  <p class="mb-0 text-muted small mt-1">In cleanroom environments, Acrylic Vacuum Glove Boxes ensure the utmost cleanliness and precision during microelectronic assembly.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8️⃣ Components & Applications -->
  <section class="section light-background">
    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-6" data-aos="fade-up">
          <div class="card p-4 h-100 border-0 shadow-sm bg-white">
            <h3 class="fw-bold mb-3">
              <a href="https://bhfvacuum.com/acrylic-vacuum-glove-box.html#:~:text=Acrylic%20Vacuum%20Glove%20Box%20Components"
                 target="_blank"
                 rel="noopener noreferrer"
                 style="color: inherit; text-decoration: none;">
                 Acrylic Vacuum Glove Box Components
              </a>
            </h3>
            <ul class="list-unstyled">
              <li class="mb-3"><i class="bi bi-shield-check text-primary me-2"></i> <strong>1. Acrylic Enclosure:</strong> Transparent acrylic walls provide full visibility while maintaining a sealed environment.</li>
              <li class="mb-3"><i class="bi bi-shield-check text-primary me-2"></i> <strong>2. Gloves:</strong> Built-in ergonomic gloves allow operators to interact with materials without breaking containment.</li>
              <li class="mb-3"><i class="bi bi-shield-check text-primary me-2"></i> <strong>3. Vacuum System:</strong> Vacuum pump maintains low pressure within the box, removing contaminants and air.</li>
              <li class="mb-3"><i class="bi bi-shield-check text-primary me-2"></i> <strong>4. Gas Purification System:</strong> Maintains a clean and controlled atmosphere via inert gas purging.</li>
              <li class="mb-3"><i class="bi bi-shield-check text-primary me-2"></i> <strong>5. Pressure Controls:</strong> Operators can adjust internal chamber pressure to meet precise experimental criteria.</li>
              <li class="mb-3"><i class="bi bi-shield-check text-primary me-2"></i> <strong>6. Access Ports:</strong> Side/front ports enable sample and tool introduction without exposing the main enclosure.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm bg-white">
            <h3 class="fw-bold mb-3">
              <a href="https://bhfvacuum.com/acrylic-vacuum-glove-box.html#:~:text=Applications%20of%20Acrylic%20Vacuum%20Glove%20Boxes"
                 target="_blank"
                 rel="noopener noreferrer"
                 style="color: inherit; text-decoration: none;">
                 Applications of Acrylic Vacuum Glove Boxes
              </a>
            </h3>
            <p class="text-muted"><em>Versatile Environments for Precision Work</em></p>
            <ul class="list-unstyled">
              <li class="mb-3"><i class="bi bi-arrow-right-short text-primary fs-5"></i> <strong>Chemical Research:</strong> Safe handling of reactive or hazardous chemicals.</li>
              <li class="mb-3"><i class="bi bi-arrow-right-short text-primary fs-5"></i> <strong>Biology and Biotechnology:</strong> Sensitive biological experiments and DNA/RNA handling.</li>
              <li class="mb-3"><i class="bi bi-arrow-right-short text-primary fs-5"></i> <strong>Pharmaceuticals:</strong> Drug formulation and compounding of active ingredients.</li>
              <li class="mb-3"><i class="bi bi-arrow-right-short text-primary fs-5"></i> <strong>Nuclear Research:</strong> Containment and manipulation of radioactive samples.</li>
              <li class="mb-3"><i class="bi bi-arrow-right-short text-primary fs-5"></i> <strong>Electronics and Cleanrooms:</strong> Semiconductor fabrication and electronics assembly.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9️⃣ Advantages & Considerations -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-7" data-aos="fade-up">
          <h3 class="fw-bold mb-3">
            <a href="https://bhfvacuum.com/acrylic-vacuum-glove-box.html#:~:text=Advantages%20of%20Acrylic%20Vacuum%20Glove%20Boxes"
               target="_blank"
               rel="noopener noreferrer"
               style="color: inherit; text-decoration: none;">
               Advantages
            </a>
          </h3>
          <div class="row gy-3">
            <div class="col-md-12">
              <div class="d-flex gap-3 p-3 bg-light rounded">
                <i class="bi bi-lightning-fill text-primary mt-1"></i>
                <div><strong>Contamination Control:</strong> Particle-free environment for sensitive processes.</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="d-flex gap-3 p-3 bg-light rounded">
                <i class="bi bi-lightning-fill text-primary mt-1"></i>
                <div><strong>Operator Safety:</strong> Shielded from hazardous substances or radioactive materials.</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="d-flex gap-3 p-3 bg-light rounded">
                <i class="bi bi-lightning-fill text-primary mt-1"></i>
                <div><strong>Precision Handling:</strong> Tactile interface for delicate experimental operations.</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="d-flex gap-3 p-3 bg-light rounded">
                <i class="bi bi-lightning-fill text-primary mt-1"></i>
                <div><strong>Flexibility:</strong> Adaptable and customizable for specific industry requirements.</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="d-flex gap-3 p-3 bg-light rounded">
                <i class="bi bi-lightning-fill text-primary mt-1"></i>
                <div><strong>Reduced Environmental Impact:</strong> Minimal waste and emissions through vacuum efficiency.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-white rounded shadow-sm border-top border-4 border-warning h-100">
            <h3 class="fw-bold mb-3">
              <a href="https://bhfvacuum.com/acrylic-vacuum-glove-box.html#:~:text=Challenges%20and%20Considerations"
                 target="_blank"
                 rel="noopener noreferrer"
                 style="color: inherit; text-decoration: none;">
                 Challenges & Considerations
              </a>
            </h3>
            <p>While Acrylic Vacuum Glove Boxes offer substantial benefits, challenges include regular maintenance, proper training for operators, and ensuring a reliable vacuum system. Adherence to safety protocols and periodic equipment checks are essential for maintaining the integrity of the controlled environment over its operational lifespan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🔟 Final CTA -->
  <section class="section py-5">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Download Full Specifications</h2>
        <p class="mb-4">Get the detailed technical datasheet for Acrylic Vacuum Glove Boxes (BHFAGB Series).</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="https://bhfvacuum.com/downloads/acrylic-vacuum-glove-box.pdf" target="_blank" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">
            <i class="bi bi-file-earmark-pdf"></i> Download Technical PDF
          </a>
          <a href="#contact" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Request a Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<script>
let autoplayInterval;
let currentTranslate = 0;
let prevTranslate = 0;
let startX = 0;
let isDragging = false;

function getCardWidth() {
    const col = document.querySelector('.thumbnail-col');
    return col ? col.offsetWidth + 8 : 144;
}

function getTrackWidth() {
    const track = document.getElementById('thumbnailRow');
    return track ? track.scrollWidth : 0;
}

function getWrapperWidth() {
    const wrapper = document.getElementById('thumbnailWrapper');
    return wrapper ? wrapper.clientWidth : 0;
}

function getMaxTranslate() {
    const maxTrans = getTrackWidth() - getWrapperWidth();
    return maxTrans > 0 ? -maxTrans : 0;
}

function setTranslate(translate) {
    const track = document.getElementById('thumbnailRow');
    if (track) {
        track.style.transform = `translate3d(${translate}px, 0, 0)`;
    }
    currentTranslate = translate;
}

function startAutoplay() {
    stopAutoplay();
    autoplayInterval = setInterval(() => {
        const activeCard = document.querySelector('.thumbnail-card.active');
        if (!activeCard) return;
        const parentCol = activeCard.closest('.thumbnail-col');
        let nextCol = parentCol ? parentCol.nextElementSibling : null;
        if (!nextCol) {
            nextCol = document.querySelector('.thumbnail-col');
        }
        if (nextCol) {
            const nextCard = nextCol.querySelector('.thumbnail-card');
            if (nextCard) {
                updateFeaturedImage(nextCard, false);
            }
        }
    }, 4000);
}

function stopAutoplay() {
    if (autoplayInterval) {
        clearInterval(autoplayInterval);
    }
}

function scrollThumbnails(direction) {
    stopAutoplay();
    const step = getCardWidth() * 2;
    const minTrans = getMaxTranslate();
    let targetTranslate = currentTranslate + (direction === 'left' ? step : -step);
    
    if (targetTranslate > 0) targetTranslate = 0;
    if (targetTranslate < minTrans) targetTranslate = minTrans;
    
    const track = document.getElementById('thumbnailRow');
    if (track) {
        track.style.transition = 'transform 0.3s ease-out';
    }
    setTranslate(targetTranslate);
    prevTranslate = targetTranslate;
}

function updateFeaturedImage(element, manual = false) {
    if (manual) {
        stopAutoplay();
    }
    
    document.querySelectorAll('.thumbnail-card').forEach(card => {
        card.classList.remove('active');
    });
    element.classList.add('active');

    const largeSrc = element.getAttribute('data-large-src');
    const caption = element.getAttribute('data-caption');

    const displayImg = document.getElementById('featured-image-display');
    const displayLink = document.getElementById('featured-image-link');
    const displayCaption = document.getElementById('featured-image-caption');

    if (displayImg) {
        displayImg.style.opacity = '0';
        setTimeout(() => {
            displayImg.src = largeSrc;
            if (displayLink) displayLink.href = largeSrc;
            if (displayCaption) displayCaption.textContent = caption;
            displayImg.style.opacity = '1';
            
            if (window.lightboxInstance) {
                window.lightboxInstance.reload();
            }
        }, 200);
    }

    const col = element.closest('.thumbnail-col');
    if (col) {
        const cardWidth = getCardWidth();
        const wrapperWidth = getWrapperWidth();
        const colIndex = Array.from(col.parentNode.children).indexOf(col);
        let targetTranslate = -(colIndex * cardWidth) + (wrapperWidth / 2) - (cardWidth / 2);
        
        const minTrans = getMaxTranslate();
        if (targetTranslate > 0) targetTranslate = 0;
        if (targetTranslate < minTrans) targetTranslate = minTrans;
        
        const track = document.getElementById('thumbnailRow');
        if (track) {
            track.style.transition = 'transform 0.3s ease-out';
        }
        setTranslate(targetTranslate);
        prevTranslate = targetTranslate;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    startAutoplay();
    
    const slider = document.getElementById('thumbnailWrapper');
    const track = document.getElementById('thumbnailRow');
    
    if (slider && track) {
        const getPositionX = (e) => e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
        
        const startDrag = (e) => {
            isDragging = true;
            startX = getPositionX(e);
            stopAutoplay();
            track.style.transition = 'none';
            slider.style.cursor = 'grabbing';
        };
        
        const moveDrag = (e) => {
            if (!isDragging) return;
            if (e.type.includes('mouse')) e.preventDefault();
            const currentX = getPositionX(e);
            const diff = currentX - startX;
            let targetTranslate = prevTranslate + diff;
            
            const minTrans = getMaxTranslate();
            if (targetTranslate > 0) {
                targetTranslate = diff * 0.3; 
            } else if (targetTranslate < minTrans) {
                targetTranslate = minTrans + (targetTranslate - minTrans) * 0.3;
            }
            
            setTranslate(targetTranslate);
        };
        
        const endDrag = () => {
            if (!isDragging) return;
            isDragging = false;
            slider.style.cursor = 'pointer';
            track.style.transition = 'transform 0.3s ease-out';
            
            const minTrans = getMaxTranslate();
            let finalTranslate = currentTranslate;
            
            if (finalTranslate > 0) {
                finalTranslate = 0;
            } else if (finalTranslate < minTrans) {
                finalTranslate = minTrans;
            } else {
                const cardWidth = getCardWidth();
                finalTranslate = Math.round(finalTranslate / cardWidth) * cardWidth;
            }
            
            setTranslate(finalTranslate);
            prevTranslate = finalTranslate;
        };

        slider.addEventListener('wheel', (e) => {
            e.preventDefault();
            stopAutoplay();
            track.style.transition = 'transform 0.2s ease-out';
            const step = getCardWidth();
            const minTrans = getMaxTranslate();
            let targetTranslate = currentTranslate - Math.sign(e.deltaY) * step;
            
            if (targetTranslate > 0) targetTranslate = 0;
            if (targetTranslate < minTrans) targetTranslate = minTrans;
            
            setTranslate(targetTranslate);
            prevTranslate = targetTranslate;
        }, { passive: false });

        slider.addEventListener('mousedown', startDrag);
        window.addEventListener('mousemove', moveDrag);
        window.addEventListener('mouseup', endDrag);
        
        slider.addEventListener('touchstart', startDrag, { passive: true });
        slider.addEventListener('touchmove', moveDrag, { passive: true });
        slider.addEventListener('touchend', endDrag);
    }
});

// Product Categories Carousel
document.addEventListener('DOMContentLoaded', function() {
    const prevProduct = document.getElementById('prevProduct');
    const nextProduct = document.getElementById('nextProduct');
    const activeProduct = document.getElementById('activeProduct');

    const prevImage = document.getElementById('prevImage');
    const prevImageLink = document.getElementById('prevImageLink');
    const prevName = document.getElementById('prevName');
    const prevBtn = document.getElementById('prevBtn');

    const activeImage = document.getElementById('activeImage');
    const activeImageLink = document.getElementById('activeImageLink');
    const activeTitle = document.getElementById('activeTitle');
    const activeDesc = document.getElementById('activeDesc');
    const activeViewBtn = document.getElementById('activeViewBtn');

    const nextImage = document.getElementById('nextImage');
    const nextImageLink = document.getElementById('nextImageLink');
    const nextName = document.getElementById('nextName');
    const nextBtn = document.getElementById('nextBtn');

    const currentIndexEl = document.getElementById('currentIndex');
    const totalIndexEl = document.getElementById('totalIndex');
    const mobilePrevBtn = document.getElementById('mobilePrevBtn');
    const mobileNextBtn = document.getElementById('mobileNextBtn');

    if (!activeProduct) return;

    let currentIndex = 0;

    // Product data from PHP
    const products = <?php echo json_encode($acrylic_products); ?>;
    const totalItems = products.length;
    totalIndexEl.textContent = totalItems.toString().padStart(2, '0');

    function updateCarousel() {
        // Update active product
        const activeProd = products[currentIndex];
        activeImage.src = activeProd.image;
        activeImage.alt = activeProd.title;
        activeImageLink.href = activeProd.url;
        activeTitle.textContent = activeProd.title;
        activeDesc.textContent = activeProd.desc;
        activeViewBtn.href = activeProd.url;
        currentIndexEl.textContent = (currentIndex + 1).toString().padStart(2, '0');

        // Update previous product
        if (currentIndex > 0) {
            const prevProd = products[currentIndex - 1];
            prevImage.src = prevProd.image;
            prevImage.alt = prevProd.title;
            prevImageLink.href = prevProd.url;
            prevName.textContent = prevProd.title;
            prevProduct.classList.remove('hidden');
            prevBtn.disabled = false;
        } else {
            prevProduct.classList.add('hidden');
            prevBtn.disabled = true;
        }

        // Update next product
        if (currentIndex < totalItems - 1) {
            const nextProd = products[currentIndex + 1];
            nextImage.src = nextProd.image;
            nextImage.alt = nextProd.title;
            nextImageLink.href = nextProd.url;
            nextName.textContent = nextProd.title;
            nextProduct.classList.remove('hidden');
            nextBtn.disabled = false;
        } else {
            nextProduct.classList.add('hidden');
            nextBtn.disabled = true;
        }

        // Update mobile buttons
        if (mobilePrevBtn) mobilePrevBtn.disabled = (currentIndex === 0);
        if (mobileNextBtn) mobileNextBtn.disabled = (currentIndex === totalItems - 1);
    }

    function goToNext() {
        if (currentIndex < totalItems - 1) {
            currentIndex++;
            updateCarousel();
        }
    }

    function goToPrev() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    }

    // Button click handlers
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            goToPrev();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            goToNext();
        });
    }

    // Mobile button click handlers
    if (mobilePrevBtn) {
        mobilePrevBtn.addEventListener('click', function() {
            goToPrev();
        });
    }

    if (mobileNextBtn) {
        mobileNextBtn.addEventListener('click', function() {
            goToNext();
        });
    }

    // Click on side products to navigate
    if (prevImageLink) {
        prevImageLink.addEventListener('click', function(e) {
            e.preventDefault();
            goToPrev();
        });
    }

    if (nextImageLink) {
        nextImageLink.addEventListener('click', function(e) {
            e.preventDefault();
            goToNext();
        });
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            goToPrev();
        } else if (e.key === 'ArrowRight') {
            goToNext();
        }
    });

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    const carouselContainer = document.querySelector('.product-categories-carousel');
    if (carouselContainer) {
        carouselContainer.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        carouselContainer.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
    }

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                goToNext();
            } else {
                goToPrev();
            }
        }
    }

    // Initialize
    updateCarousel();
});
</script>

<style>
    .page-title .heading {
        background-color: var(--heading-color);
        padding: 80px 0;
        color: #fff;
    }
    .page-title h1 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .page-title p {
        font-size: 1.25rem;
        opacity: 0.9;
    }

    .sidebar-box {
        position: sticky;
        top: 100px;
        z-index: 10;
    }
    .category-nav-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .category-nav-item {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 8px;
        border: 1px solid #f1f3f5;
        background: #fdfdfd;
    }
    .category-nav-item:hover {
        background: #f8f9fa;
        border-color: var(--accent-color);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .category-nav-item.active {
        background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), black 10%));
        border-color: var(--accent-color);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .category-nav-item .category-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--heading-color) !important;
        text-decoration: none;
        width: 100%;
    }
    .category-nav-item.active .category-link {
        color: #ffffff !important;
    }
    .category-nav-item .category-link i.bi-chevron-right {
        font-size: 0.8rem;
        transition: transform 0.3s ease;
        color: var(--accent-color) !important;
    }
    .category-nav-item.active .category-link i.bi-chevron-right {
        color: #ffffff !important;
    }
    .category-nav-item:hover .category-link i.bi-chevron-right {
        transform: translateX(4px);
    }
    .thumbnail-card {
        transition: all 0.2s ease;
        border: 2px solid transparent !important;
    }
    .thumbnail-card.active {
        border-color: var(--accent-color) !important;
        background-color: #f8f9fa;
    }
    .thumbnail-card:hover {
        transform: translateY(-2px);
    }

    /* Product Categories Carousel Styles */
    .product-categories-carousel {
        position: relative;
        padding: 50px 20px 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .carousel-layout {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        gap: 30px;
        min-height: 550px;
    }

    /* Side Products (Previous/Next) */
    .carousel-side {
        flex: 0 0 auto;
        width: 260px;
        opacity: 0.6;
        transition: opacity 0.4s ease;
    }

    .carousel-side.hidden {
        opacity: 0;
        pointer-events: none;
    }

    .side-product-card {
        background: #fff;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: all 0.4s ease;
    }

    .side-image-link {
        display: block;
        border-radius: 8px;
        overflow: hidden;
        background: #f8f9fa;
        margin-bottom: 12px;
    }

    .side-product-image {
        width: 100%;
        height: 220px;
        object-fit: contain;
        display: block;
        transition: transform 0.3s ease;
    }

    .side-image-link:hover .side-product-image {
        transform: scale(1.05);
    }

    .side-product-name {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--heading-color);
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 2.2em;
        margin-bottom: 12px;
    }

    .side-nav-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: var(--accent-color);
        color: #fff;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        margin: 0 auto;
    }

    .side-nav-btn:hover:not(:disabled) {
        background: var(--heading-color);
        transform: scale(1.1);
    }

    .side-nav-btn:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }

    .side-nav-btn:focus {
        outline: 3px solid var(--accent-color);
        outline-offset: 2px;
    }

    /* Active Product (Center) */
    .carousel-center {
        flex: 0 0 auto;
        width: 520px;
        opacity: 1;
        transition: opacity 0.4s ease;
    }

    .active-product-card {
        background: #fff;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
        text-align: center;
        transition: all 0.4s ease;
    }

    .active-image-link {
        display: block;
        border-radius: 10px;
        overflow: hidden;
        background: #f8f9fa;
        margin-bottom: 20px;
    }

    .active-product-image {
        width: 100%;
        height: 420px;
        object-fit: contain;
        display: block;
        transition: transform 0.3s ease;
    }

    .active-image-link:hover .active-product-image {
        transform: scale(1.03);
    }

    .active-product-details {
        padding: 0 10px;
    }

    .active-product-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--heading-color);
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .active-product-description {
        font-size: 1rem;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 20px;
        min-height: 60px;
    }

    .active-view-btn {
        padding: 12px 35px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .active-view-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    /* Counter */
    .carousel-counter {
        text-align: center;
        margin-top: 25px;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--heading-color);
    }

    #currentIndex {
        color: var(--accent-color);
        font-size: 1.4rem;
        font-weight: 700;
    }

    .mobile-nav-btn {
        display: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--accent-color);
        color: #fff;
        border: none;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .mobile-nav-btn:hover:not(:disabled) {
        background: var(--heading-color);
        transform: scale(1.1);
    }

    .mobile-nav-btn:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .product-categories-carousel {
            padding: 40px 15px 30px;
        }

        .carousel-layout {
            gap: 20px;
            min-height: 500px;
        }

        .carousel-side {
            width: 220px;
        }

        .side-product-image {
            height: 180px;
        }

        .side-product-name {
            font-size: 0.8rem;
        }

        .side-nav-btn {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .carousel-center {
            width: 420px;
        }

        .active-product-image {
            height: 350px;
        }

        .active-product-title {
            font-size: 1.3rem;
        }

        .active-product-description {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 767px) {
        .carousel-layout {
            flex-direction: column;
            align-items: center;
            gap: 25px;
            min-height: auto;
        }

        .carousel-side {
            display: none;
        }

        .carousel-center {
            width: 100%;
            max-width: 380px;
        }

        .active-product-card {
            padding: 20px;
        }

        .active-product-image {
            height: 280px;
        }

        .active-product-title {
            font-size: 1.2rem;
        }

        .active-product-description {
            font-size: 0.9rem;
            min-height: auto;
        }

        .active-view-btn {
            padding: 10px 30px;
            font-size: 0.9rem;
        }

        .carousel-counter {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        #currentIndex {
            font-size: 1.3rem;
        }

        /* Mobile navigation buttons */
        .mobile-nav-btn {
            display: flex;
        }
    }

    /* Reduced motion support */
    @media (prefers-reduced-motion: reduce) {
        .carousel-side,
        .carousel-center,
        .side-product-card,
        .active-product-card,
        .side-product-image,
        .active-product-image,
        .side-nav-btn,
        .active-view-btn {
            transition: none;
        }
    }

    @media (max-width: 991px) {
        .sidebar-box {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<?php require_once __DIR__ . '/../../../../includes/footer.php'; ?>
