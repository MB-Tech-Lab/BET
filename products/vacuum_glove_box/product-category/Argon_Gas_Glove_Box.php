<?php
include_once(__DIR__ . '/../../../includes/config.php');

$product_name = "Argon Gas Glove Box";
$slug = "argon-gas-glove-box";
$image_dir_relative = "img/Glove Box/Argon Gas Glove Box/";
$image_dir_absolute = __DIR__ . '/../../../assets/' . $image_dir_relative;

$images = [];
$catalogue_images = [];
$pdf_file = null;

if (is_dir($image_dir_absolute)) {
    $files = scandir($image_dir_absolute);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                $file_url = asset($image_dir_relative . $file);
                
                if ($file === 'BET810-SG20 1.1.png') {
                    continue;
                }

                if (preg_match('/(catalogue|catalog|brochure)/i', $file)) {
                    $catalogue_images[] = $file_url;
                } else {
                    $images[] = $file_url;
                }
            } elseif ($ext === 'pdf') {
                $pdf_file = asset($image_dir_relative . $file);
            }
        }
    }
}

$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Argon Gas Glove Box Manufacturer in $city, $country | Inert Atmosphere Systems";
    $meta_description = "Premium Argon Gas Glove Box Manufacturer in $city, $country. Custom oxygen & moisture-free glove boxes with gas purification systems for battery & material research.";
    $canonical_url = product_category_url('vacuum_glove_box', 'argon-gas-glove-box');
} else {
    $meta_title = "Argon Gas Glove Box Manufacturer | Inert Atmosphere Systems | BET";
    $meta_description = "Looking for a reliable Argon Gas Glove Box Manufacturer? We supply high-purity hermetically sealed inert atmosphere glove boxes with gas purification for laboratory research.";
    $canonical_url = product_category_url('vacuum_glove_box', 'argon-gas-glove-box');
}
include_once(__DIR__ . '/../../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "<?php echo url(''); ?>"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Products",
      "item": "<?php echo product_url('vacuum_glove_box'); ?>"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Argon Gas Glove Box",
      "item": "<?php echo $canonical_url; ?>"
    }
  ]
}
</script>

<!-- Product Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Argon Gas Glove Box",
  "image": "<?php echo !empty($images) ? $images[0] : asset('img/logo.svg'); ?>",
  "description": "<?php echo htmlspecialchars($meta_description); ?>",
  "brand": {
    "@type": "Brand",
    "name": "Burhani Engineering Technology"
  },
  "manufacturer": {
    "@type": "Organization",
    "name": "Burhani Engineering Technology"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "priceSpecification": {
      "@type": "PriceSpecification",
      "valueAddedTaxIncluded": "http://schema.org/True"
    }
  }
}
</script>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is an Argon Gas Glove Box?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An Argon Gas Glove Box is a sealed containment chamber filled with high-purity argon gas. It provides a controlled, inert environment for handling materials that are sensitive to oxygen and moisture, protecting them from oxidation and contamination."
      }
    },
    {
      "@type": "Question",
      "name": "Why use argon instead of nitrogen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Argon is preferred over nitrogen for certain applications, such as lithium battery research, because lithium reacts chemically with nitrogen at room temperature. Argon is completely inert and does not react with active metals."
      }
    },
    {
      "@type": "Question",
      "name": "How does the transfer chamber work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The transfer chamber (or antechamber) allows operators to move tools and samples in and out of the main chamber without compromising the pure inert environment. It uses a vacuum and gas purging process to eliminate air before opening the inner door."
      }
    },
    {
      "@type": "Question",
      "name": "What industries use argon glove boxes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Argon glove boxes are widely used in lithium-ion and solid-state battery manufacturing, semiconductor production, pharmaceutical research, chemical synthesis, and nanotechnology development."
      }
    },
    {
      "@type": "Question",
      "name": "Can chamber sizes be customized?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Burhani Engineering Technology manufactures customized Argon Gas Glove Boxes, adjusting the dimensions, glove port configurations, and integration options to match specific customer needs."
      }
    },
    {
      "@type": "Question",
      "name": "How is oxygen removed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oxygen is removed through a series of vacuum purging and argon refilling cycles. The chamber is evacuated to pull out air, then refilled with ultra-pure argon gas until the oxygen and moisture levels drop below the desired threshold (often sub-1 ppm)."
      }
    }
  ]
}
</script>

<main class="main">

  <!-- 1️⃣ Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Argon Gas Glove Box Manufacturer</h1>
            <p class="mb-4">High-Purity Inert Atmosphere Glove Box for Oxygen and Moisture Sensitive Applications</p>
            <div class="d-flex justify-content-center gap-3">
              <?php if ($pdf_file): ?>
              <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-file-earmark-pdf"></i> Download Catalogue
              </a>
              <?php endif; ?>
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
            <h2>Controlled Atmosphere Argon Filled Glove Box Systems</h2>
            <p>Burhani Engineering Technology is a highly acclaimed global <strong>Argon Gas Glove Box Manufacturer</strong> and leading <strong>Glove Box Supplier</strong>. We engineer premium, hermetically sealed <strong>Inert Atmosphere Glove Box</strong> systems specifically optimized for applications that require an absolute oxygen-free and moisture-free environment. For research and development or high-tech manufacturing, our systems provide the gold standard of contamination-free handling.</p>
            
            <p>Our flagship <strong>Argon Gas Glove Box</strong> utilizes precision vacuum cycles and gas purging to sweep out environmental air, establishing a stable, high-purity argon workspace. By replacing moisture and oxygen with an ultra-pure argon atmosphere, it serves as an indispensable <strong>Glove Box for Battery Research</strong>, solid-state electronics, and advanced <strong>Glove Box for Material Research</strong>. An integrated side transfer chamber allows safe sample movement in and out without compromising the main compartment's integrity, saving gas and maintaining operational quality.</p>
            
            <p>As a leading <strong>Laboratory Equipment Manufacturer</strong>, every system we design is built to strict ISO manufacturing standards. From simple research setups to advanced units with closed-loop <strong>Glove Box with Gas Purification</strong> columns, we deliver reliable, long-lasting performance for universities, industrial facilities, and quality control labs worldwide.</p>
          </div>
        </div>
        
        <!-- Sidebar Navigation -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary">
            <h4 class="mb-4" style="color: var(--heading-color); font-weight: 700;">Product Categories</h4>
            <div class="category-nav-list">
              <div class="category-nav-item">
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
              <div class="category-nav-item active">
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


  <?php
  function get_argon_gallery_caption(string $image_url): string {
      $filename = urldecode(basename($image_url));
      if (stripos($filename, '1.1') !== false && stripos($filename, 'Argon') !== false) {
          return "Argon Gas Glove Box Front View";
      }
      if (stripos($filename, '1.2') !== false && stripos($filename, 'Argon') !== false) {
          return "Argon Gas Glove Box Side View";
      }
      if (stripos($filename, '1.3') !== false && stripos($filename, 'Argon') !== false) {
          return "Argon Gas Glove Box Gas Purification Unit";
      }
      if (stripos($filename, '1.4') !== false && stripos($filename, 'Argon') !== false) {
          return "Argon Gas Glove Box Touchscreen Controller";
      }
      if (stripos($filename, 'BET810-SG20') !== false) {
          return "BET810-SG20 Technical Layout";
      }
      if (stripos($filename, 'Catalogue') !== false) {
          return "Catalogue Technical Datasheet";
      }

      $clean = preg_replace('/[-_]/', ' ', pathinfo($filename, PATHINFO_FILENAME));
      return ucwords($clean);
  }
  
  if (!empty($images)): 
      $featured_image = $images[0];
  ?>
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT GALLERY</h2>
        <p>Explore High-Resolution Images of our Argon Gas Glove Box. View the chamber, glove ports, purification system, control panel, antechamber, and premium stainless-steel construction.</p>
        <div class="d-flex justify-content-center gap-3 mt-2 text-muted small fw-medium flex-wrap">
          <span><i class="bi bi-hd text-primary"></i> High Resolution Images</span>
          <span>&bull;</span>
          <span><i class="bi bi-hand-index-thumb text-primary"></i> Interactive Gallery</span>
          <span>&bull;</span>
          <span><i class="bi bi-zoom-in text-primary"></i> Click to Enlarge</span>
        </div>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          
          <!-- Featured Image Display -->
          <div class="featured-image-container mb-4 text-center p-4 bg-white rounded-3 shadow-sm position-relative">
            <a href="<?php echo $featured_image; ?>" id="featured-image-link" class="glightbox" data-gallery="product-gallery">
              <img src="<?php echo $featured_image; ?>" id="featured-image-display" loading="lazy" decoding="async" alt="Argon Gas Glove Box Featured View" title="Argon Gas Glove Box" class="img-fluid rounded" style="max-height: 500px; object-fit: contain; transition: opacity 0.2s ease;" width="800" height="600">
            </a>
            <div id="featured-image-caption" class="mt-3 fw-bold text-primary">
              <?php echo get_argon_gallery_caption($featured_image); ?>
            </div>
          </div>

          <!-- Thumbnail Row/Grid -->
          <div class="thumbnail-wrapper">
            <div class="row gx-3 gy-3 thumbnail-row justify-content-center">
              <?php foreach ($images as $index => $img): 
                  $caption = get_argon_gallery_caption($img);
                  $active_class = ($index === 0) ? 'active' : '';
              ?>
              <div class="col-6 col-md-3 col-lg-2 thumbnail-col">
                <div class="thumbnail-card card p-2 h-100 border-0 shadow-sm text-center cursor-pointer <?php echo $active_class; ?>" 
                     data-large-src="<?php echo $img; ?>" 
                     data-caption="<?php echo htmlspecialchars($caption); ?>" 
                     onclick="updateFeaturedImage(this)">
                  <div class="thumbnail-img-wrap mb-2">
                    <img src="<?php echo $img; ?>" loading="lazy" decoding="async" alt="<?php echo htmlspecialchars($caption); ?>" title="<?php echo htmlspecialchars($caption); ?>" class="img-fluid rounded" style="height: 80px; object-fit: contain; width: 100%;">
                  </div>
                  <div class="thumbnail-caption small text-muted text-truncate fw-medium" title="<?php echo htmlspecialchars($caption); ?>">
                    <?php echo htmlspecialchars($caption); ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <script>
  function updateFeaturedImage(element) {
      document.querySelectorAll('.thumbnail-card').forEach(card => {
          card.classList.remove('active');
      });
      element.classList.add('active');

      const largeSrc = element.getAttribute('data-large-src');
      const caption = element.getAttribute('data-caption');

      const displayImg = document.getElementById('featured-image-display');
      const displayLink = document.getElementById('featured-image-link');
      const displayCaption = document.getElementById('featured-image-caption');

      displayImg.style.opacity = '0';
      setTimeout(() => {
          displayImg.src = largeSrc;
          displayLink.href = largeSrc;
          displayCaption.textContent = caption;
          displayImg.style.opacity = '1';
          
          if (window.lightboxInstance) {
              window.lightboxInstance.reload();
          }
      }, 200);
  }
  </script>



  <!-- 3️⃣ Why Choose Argon Gas Glove Box (Benefits) -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Why Choose Our Argon Gas Glove Box</h2>
        <p>Engineered for high-purity atmosphere containment and long-term durability in material research.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Inert Atmosphere Glove Box Purity</h4>
            <p class="small text-muted mb-0">Protects materials from ambient reaction by preserving a high-purity argon environment under continuous pressure stabilization.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Oxygen &amp; Moisture Free Glove Box</h4>
            <p class="small text-muted mb-0">Maintains sub-1 ppm oxygen and moisture levels for chemical stability and complete isolation from room contaminants.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Integrated Gas Purification System</h4>
            <p class="small text-muted mb-0">Features active circulation through a copper catalyst and molecular sieve bed to continuously strip trace H₂O and O₂.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Hermetically Sealed Construction</h4>
            <p class="small text-muted mb-0">Welded metal structures with leak-tight gaskets to ensure extremely low leak rates matching ISO Class 1 certification standards.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Digital Touchscreen Control Panel</h4>
            <p class="small text-muted mb-0">Provides operators with intuitive touchscreen control of purging routines, alarms, pressure settings, and gas flows.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Customization &amp; Integration</h4>
            <p class="small text-muted mb-0">Easily integrated with third-party tools, Spin Coaters, Evaporators, and customizable feedthrough ports.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ Working Principle -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Working Principle of Argon Circulation Glove Boxes</h2>
        <p>A step-by-step cycle for achieving and maintaining high-purity inert environments.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="p-3 bg-light rounded shadow-sm h-100 border-top border-3 border-primary">
            <h5 class="text-primary">1. Vacuum Evacuation</h5>
            <p class="small text-muted mb-0">An external vacuum pump removes the internal air down to deep vacuum levels, drawing out oxygen, nitrogen, and moisture.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="p-3 bg-light rounded shadow-sm h-100 border-top border-3 border-primary">
            <h5 class="text-primary">2. Argon Purging Cycle</h5>
            <p class="small text-muted mb-0">High-purity Argon gas is backfilled into the chamber to restore neutral pressure, completing the primary gas purging routine.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="p-3 bg-light rounded shadow-sm h-100 border-top border-3 border-primary">
            <h5 class="text-primary">3. Gas Purification Loop</h5>
            <p class="small text-muted mb-0">Argon is continuously circulated through a closed-loop system containing copper and molecular sieve beds to remove trace impurities.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5️⃣ Key Features -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Key Design Features</h2>
        <p>Advanced engineering solutions integrated into our laboratory equipment.</p>
      </div>
      <div class="row gy-3">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex align-items-center gap-2 p-3 bg-white rounded shadow-sm h-100">
            <i class="bi bi-shield-check text-primary fs-4"></i>
            <div>
              <strong class="d-block">High Purity Atmosphere</strong>
              <span class="small text-muted">Continuous oxygen-free and moisture-free environment.</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex align-items-center gap-2 p-3 bg-white rounded shadow-sm h-100">
            <i class="bi bi-box-arrow-in-right text-primary fs-4"></i>
            <div>
              <strong class="d-block">Side Transfer Chamber</strong>
              <span class="small text-muted">Safe tool transfer without compromising environment.</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="d-flex align-items-center gap-2 p-3 bg-white rounded shadow-sm h-100">
            <i class="bi bi-sliders text-primary fs-4"></i>
            <div>
              <strong class="d-block">Touchscreen Control</strong>
              <span class="small text-muted">Complete PLC automated pressure and purge control.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6️⃣ Applications & Industries Served -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Research &amp; Industrial Applications</h2>
        <p>Empowering scientific breakthrough and manufacturing efficiency with specialized workspaces.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-battery-charging fs-1 text-primary mb-3"></i>
            <h4>Glove Box for Battery Research</h4>
            <p class="small text-muted mb-0">Maintains pure argon environment to prevent highly reactive lithium from oxidizing during battery assembly.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-cpu fs-1 text-primary mb-3"></i>
            <h4>Semiconductor Fabrication</h4>
            <p class="small text-muted mb-0">Protects sensitive thin-films, organic layers, and wafer substrates from ambient humidity.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-flower1 fs-1 text-primary mb-3"></i>
            <h4>Glove Box for Material Research</h4>
            <p class="small text-muted mb-0">Supports advanced chemical synthesis, catalyst preparation, and nanotechnology experiments.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7️⃣ Technical Specifications -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Technical Specifications</h2>
        <p>Detailed performance parameters for our standard model range.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="table-responsive shadow-sm rounded">
            <table class="table table-hover mb-0 bg-white">
              <thead class="bg-primary text-white">
                <tr>
                  <th scope="col" class="py-3 px-4" style="background-color: var(--heading-color); color: #fff;">Specification</th>
                  <th scope="col" class="py-3 px-4" style="background-color: var(--heading-color); color: #fff;">Parameters</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 px-4 fw-medium">Atmosphere Control</td>
                  <td class="py-3 px-4">Argon gas filled / oxygen &amp; moisture &lt; 1 ppm</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Chamber Construction</td>
                  <td class="py-3 px-4">Heavy-duty steel / hermetically sealed metal body</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Antechamber</td>
                  <td class="py-3 px-4">Integrated vacuum transfer chamber</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Gas Purification</td>
                  <td class="py-3 px-4">Integrated closed-loop gas purification system</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Control System</td>
                  <td class="py-3 px-4">Touchscreen PLC interface</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 

  <style>
  .featured-image-container {
      border: 1px solid #f1f3f5;
      background-color: #ffffff;
      overflow: hidden;
  }
  .featured-image-container img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
  }
  .cursor-pointer {
      cursor: pointer;
  }
  .thumbnail-card {
      border: 2px solid transparent !important;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      background-color: #ffffff;
  }
  .thumbnail-card:hover {
      border-color: color-mix(in srgb, var(--accent-color), transparent 50%) !important;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08) !important;
  }
  .thumbnail-card.active {
      border-color: var(--accent-color) !important;
      box-shadow: 0 0 10px rgba(13, 110, 253, 0.15) !important;
      background-color: #f8f9fa;
  }
  .thumbnail-card.active .thumbnail-caption {
      color: var(--accent-color) !important;
      font-weight: 700;
  }
  .thumbnail-img-wrap {
      overflow: hidden;
      border-radius: 4px;
      background: #f8f9fa;
  }
  
  @media (max-width: 575px) {
      .thumbnail-wrapper {
          overflow-x: auto;
          white-space: nowrap;
          padding-bottom: 10px;
          scrollbar-width: thin;
      }
      .thumbnail-row {
          display: flex;
          flex-wrap: nowrap;
          justify-content: flex-start !important;
      }
      .thumbnail-col {
          flex: 0 0 120px;
          max-width: 120px;
      }
  }
  </style>
  <?php endif; ?>

  <!-- 9️⃣ Product Catalogue Section -->
  <?php if (!empty($catalogue_images)): ?>
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT CATALOGUE</h2>
        <p>Download our detailed Argon Gas Glove Box catalogue containing specifications, features, available models, applications, accessories, and technical information.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-6 col-md-8">
          <div class="card border-0 shadow-lg rounded-4 p-4 text-center catalogue-card">
            <div class="catalogue-img-container mb-4 overflow-hidden rounded-3 shadow-sm bg-light p-3">
              <a href="<?php echo $catalogue_images[0]; ?>" class="glightbox" data-gallery="catalogue-gallery">
                <img src="<?php echo $catalogue_images[0]; ?>" loading="lazy" decoding="async" alt="Argon Gas Glove Box Product Catalogue Cover" title="Product Catalogue Preview" class="img-fluid rounded" style="max-height: 400px; object-fit: contain;" width="600" height="800">
              </a>
            </div>
            <h4 class="mb-3 text-primary fw-bold">Argon Gas Glove Box Brochure</h4>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a href="<?php echo $catalogue_images[0]; ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-medium glightbox" data-gallery="catalogue-gallery-btn">
                <i class="bi bi-eye"></i> View Catalogue Preview
              </a>
              <?php if ($pdf_file): ?>
              <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-primary px-4 py-2 rounded-pill fw-medium">
                <i class="bi bi-file-earmark-pdf"></i> Download Catalogue PDF
              </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style>
  .catalogue-card {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      border-top: 4px solid var(--accent-color) !important;
      background-color: #ffffff;
  }
  .catalogue-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1) !important;
  }
  .catalogue-img-container img {
      transition: transform 0.5s ease;
  }
  .catalogue-card:hover .catalogue-img-container img {
      transform: scale(1.03);
  }
  </style>
  <?php endif; ?>

  <!-- 🔟 Frequently Asked Questions (FAQ) -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Get quick answers to common technical queries about Argon Gas Glove Boxes.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What is an Argon Gas Glove Box?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  An Argon Gas Glove Box is a sealed containment chamber filled with high-purity argon gas. It provides a controlled, inert environment for handling materials that are sensitive to oxygen and moisture, protecting them from oxidation and contamination.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  Why use argon instead of nitrogen?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Argon is preferred over nitrogen for certain applications, such as lithium battery research, because lithium reacts chemically with nitrogen at room temperature. Argon is completely inert and does not react with active metals.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  How does the transfer chamber work?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The transfer chamber (or antechamber) allows operators to move tools and samples in and out of the main chamber without compromising the pure inert environment. It uses a vacuum and gas purging process to eliminate air before opening the inner door.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  What industries use argon glove boxes?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Argon glove boxes are widely used in lithium-ion and solid-state battery manufacturing, semiconductor production, pharmaceutical research, chemical synthesis, and nanotechnology development.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                  Can chamber sizes be customized?
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, Burhani Engineering Technology manufactures customized Argon Gas Glove Boxes, adjusting the dimensions, glove port configurations, and integration options to match specific customer needs.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                  How is oxygen removed?
                </button>
              </h2>
              <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Oxygen is removed through a series of vacuum purging and argon refilling cycles. The chamber is evacuated to pull out air, then refilled with ultra-pure argon gas until the oxygen and moisture levels drop below the desired threshold (often sub-1 ppm).
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section: Related Vacuum Glove Box Resources & Authority Hub -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Related Vacuum Glove Box Resources</h2>
        <p>Explore our in-depth guides and specialized glove box solutions to optimize your research environment.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-battery-charging fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'argon-gas-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Argon Gas Glove Box</a></h4>
            <p class="small text-muted mb-0">Learn how our specialized Argon atmosphere systems support lithium-ion, coin cell, pouch cell, and solid-state battery R&amp;D.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-box fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'Acrylic_Vacuum_Glove_Box'); ?>" class="text-decoration-none text-dark hover-accent">Acrylic Vacuum Glove Box</a></h4>
            <p class="small text-muted mb-0">Discover our transparent acrylic glove boxes designed for academic laboratory work and low-purity atmosphere control.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-gear fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'Vacuum_GBMB'); ?>" class="text-decoration-none text-dark hover-accent">Metal Body Glove Box</a></h4>
            <p class="small text-muted mb-0">Explore our heavy-duty metal body glove boxes offering high structural durability and robust vacuum performance.</p>
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
        <p class="mb-4">Get the detailed technical datasheet for Argon Gas Glove Boxes.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <?php if ($pdf_file): ?>
          <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">
            <i class="bi bi-file-earmark-pdf"></i> Download Catalogue
          </a>
          <?php endif; ?>
          <a href="#contact" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Request a Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

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
    .hover-accent {
        transition: color 0.3s ease;
    }
    .hover-accent:hover {
        color: var(--accent-color) !important;
    }
    .accordion-button:not(.collapsed) {
        background-color: color-mix(in srgb, var(--accent-color), white 90%);
        color: var(--heading-color);
        box-shadow: none;
    }
    .accordion-button:focus {
        box-shadow: none;
    }
    @media (max-width: 991px) {
        .sidebar-box {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<?php require_once __DIR__ . '/../../../includes/footer.php'; ?>
