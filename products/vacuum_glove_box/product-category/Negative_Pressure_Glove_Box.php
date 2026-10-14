<?php
include_once(__DIR__ . '/../../../includes/config.php');

$product_name = "Negative Pressure Glove Box";
$slug = "negative-pressure-glove-box";
$image_dir_relative = "img/Glove Box/Negative Pressure Glove Box/";
$image_dir_absolute = __DIR__ . '/../../../assets/' . $image_dir_relative;

$images = [];
$pdf_file = null;

// Scan images
if (is_dir($image_dir_absolute)) {
    $files = scandir($image_dir_absolute);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                $images[] = asset($image_dir_relative . $file);
            }
        }
    }
}

// Reorder images to make BET-NGB-CLC or BET-NGB-D appear first as default featured image
usort($images, function($a, $b) {
    $a_is_feat = (stripos($a, 'BET-NGB-CLC') !== false || stripos($a, 'BET-NGB-D') !== false) ? 1 : 0;
    $b_is_feat = (stripos($b, 'BET-NGB-CLC') !== false || stripos($b, 'BET-NGB-D') !== false) ? 1 : 0;
    return $b_is_feat <=> $a_is_feat;
});

// Scan catalogue brochure
$brochure_dir_relative = "brochers/vacuum_glove_box/Negative Pressure Glove Box/";
$brochure_dir_absolute = __DIR__ . '/../../../' . $brochure_dir_relative;
if (is_dir($brochure_dir_absolute)) {
    $b_files = scandir($brochure_dir_absolute);
    foreach ($b_files as $b_file) {
        if ($b_file !== '.' && $b_file !== '..') {
            $ext = strtolower(pathinfo($b_file, PATHINFO_EXTENSION));
            if ($ext === 'pdf') {
                // Build a correctly-encoded URL: each path segment encoded separately
                $full_relative = $brochure_dir_relative . $b_file;
                $encoded = implode('/', array_map('rawurlencode', explode('/', $full_relative)));
                $pdf_file = url($encoded);
            }
        }
    }
}

$pdf_name = "";
$pdf_size_formatted = "";
if ($pdf_file) {
    $pdf_absolute_path = __DIR__ . '/../../../' . str_replace(url(''), '', rawurldecode($pdf_file));
    if (file_exists($pdf_absolute_path)) {
        $pdf_name = basename($pdf_absolute_path);
        $bytes = filesize($pdf_absolute_path);
        if ($bytes >= 1048576) {
            $pdf_size_formatted = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $pdf_size_formatted = number_format($bytes / 1024, 2) . ' KB';
        } else {
            $pdf_size_formatted = $bytes . ' bytes';
        }
    }
}

$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Negative Pressure Glove Box Manufacturer in $city, $country | Biosafety Containment";
    $meta_description = "Premium Negative Pressure Glove Box Manufacturer in $city, $country. Double HEPA-filtered containment glove boxes for safe hazardous powder and material handling.";
    $canonical_url = product_category_url('vacuum_glove_box', 'negative-pressure-glove-box');
} else {
    $meta_title = "Negative Pressure Glove Box Manufacturer | HEPA Filtered Laboratory Containment Systems | Burhani Engineering Technology";
    $meta_description = "Burhani Engineering Technology manufactures high-performance Negative Pressure Glove Boxes with HEPA H14 filtration, BSL-3 ready containment chambers, and closed-loop setups.";
    $canonical_url = product_category_url('vacuum_glove_box', 'negative-pressure-glove-box');
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
      "name": "Negative Pressure Glove Box",
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
  "name": "Negative Pressure Glove Box",
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
      "name": "What is a Negative Pressure Glove Box?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Negative Pressure Glove Box is a sealed containment chamber maintained at a lower atmospheric pressure than the surrounding room. This ensures that in the event of a breach, ambient air flows inward, preventing hazardous powders, biological agents, and toxic substances from leaking into the laboratory."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between Single and Double HEPA filtration?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Single HEPA systems filter either the inlet or exhaust air depending on requirements. Double HEPA systems filter both the incoming air and the outgoing exhaust air, providing two layers of high-efficiency particulate containment for maximum biosafety."
      }
    },
    {
      "@type": "Question",
      "name": "What is a Closed-Loop Negative Pressure Glove Box?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Closed-Loop system continuously recirculates the internal atmosphere through HEPA filters without exhausting air into the laboratory environment. It is ideal for complete isolation of volatile hazardous materials and BSL-3 laboratory containment."
      }
    },
    {
      "@type": "Question",
      "name": "What is the efficiency of a HEPA H14 filter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "HEPA H14 filters deliver a filtration efficiency of 99.995% for particulates down to 0.3 microns, offering medical-grade air purification."
      }
    },
    {
      "@type": "Question",
      "name": "Can these containment chambers be customized?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Burhani Engineering Technology customizes structural dimensions, materials (SS304 or SS316), glove ports, lighting, UV sterilizers, pass boxes, and automated PLC control systems based on customer requirements."
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
            <h1>Negative Pressure Glove Box Manufacturer</h1>
            <p class="mb-4">Advanced HEPA Filtered Containment Systems for Hazardous Material Handling</p>
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
            <h2>Ultimate Operator Protection and Particulate Containment Workstations</h2>
            <p>
              When working with hazardous biological pathogens, volatile chemical reagents, or toxic pharmaceutical powders, laboratory safety standards demand absolute containment. The <strong>Negative Pressure Glove Box</strong>, designed and manufactured by Burhani Engineering Technology, provides an engineered physical barrier that maintains a lower internal pressure than the surrounding room. This ensures that in the event of a structural leak or glove breach, air flows exclusively inward, preventing hazardous materials from escaping into the workspace.
            </p>
            <p>
              Our <strong>HEPA filter glove box</strong> systems utilize high-efficiency H14 HEPA filters to deliver exceptional particle containment, making them ideal for Biosafety Level 3 (BSL-3) containment structures. Fabricated from premium quality <strong>SS304 or SS316 stainless steel</strong> and combined with optically clear front viewing panels, these glove boxes provide maximum durability, outstanding visibility, and complete chemical compatibility. By implementing advanced <strong>operator protection</strong> protocols, our containment chambers protect laboratory personnel during complex sample manipulations.
            </p>
            <p>
              From basic <strong>single HEPA filtration</strong> setups to double HEPA and <strong>closed-loop</strong> recirculating models, Burhani Engineering Technology manufactures glove boxes tailored to meet specific industrial demands. These systems are widely used for pharmaceutical powder compounding, nanotechnology R&amp;D, cell virology, biotechnology research, and nuclear laboratories.
            </p>
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
              <div class="category-nav-item active">
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
  function get_negative_pressure_caption(string $image_url): string {
      $filename = urldecode(basename($image_url));
      if (stripos($filename, 'CLC') !== false) {
          return "BET-NGB-CLC Closed Loop HEPA System";
      }
      if (stripos($filename, 'BET-NGB-D') !== false) {
          return "BET-NGB-D Double HEPA Filtration";
      }
      if (stripos($filename, 'BET-NGB-S') !== false) {
          return "BET-NGB-S Single HEPA Filtration";
      }
      if (stripos($filename, 'HEPA') !== false) {
          return "HEPA Filtration System";
      }
      if (stripos($filename, 'Chamber') !== false || stripos($filename, 'Containment') !== false) {
          return "Containment Glove Box Workspace";
      }
      
      $clean = preg_replace('/[-_]/', ' ', pathinfo($filename, PATHINFO_FILENAME));
      return ucwords($clean);
  }
  
  if (!empty($images)): 
      $featured_image = $images[0];
  ?>
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT GALLERY</h2>
        <p>Explore High-Resolution Images of our Negative Pressure Glove Box Series</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          
          <!-- Featured Image Display -->
          <div class="featured-image-container mb-4 text-center p-4 bg-white rounded-3 shadow-sm position-relative">
            <a href="<?php echo $featured_image; ?>" id="featured-image-link" class="glightbox" data-gallery="product-gallery">
              <img src="<?php echo $featured_image; ?>" id="featured-image-display" loading="lazy" decoding="async" alt="Negative Pressure Glove Box Featured View" title="Negative Pressure Glove Box" class="img-fluid rounded" style="max-height: 500px; object-fit: contain; transition: opacity 0.2s ease;" width="800" height="600">
            </a>
            <div id="featured-image-caption" class="mt-3 fw-bold text-primary">
              <?php echo get_negative_pressure_caption($featured_image); ?>
            </div>
          </div>

          <!-- Thumbnail Row/Grid with Navigation Arrows (Overflow Hidden) -->
          <div class="thumbnail-carousel-container position-relative px-4 mb-4">
            <!-- Left Arrow -->
            <button class="carousel-arrow carousel-arrow-left btn btn-light rounded-circle shadow-sm position-absolute start-0 top-50 translate-middle-y" onclick="scrollThumbnails('left')" aria-label="Scroll left">
              <i class="bi bi-chevron-left"></i>
            </button>
            
            <div class="thumbnail-wrapper" id="thumbnailWrapper" style="overflow: hidden; width: 100%;">
              <div class="row gx-2 gy-0 thumbnail-row flex-nowrap py-2" id="thumbnailRow" style="transition: transform 0.3s ease-out; display: flex; width: max-content; transform: translate3d(0px, 0px, 0px);">
                <?php foreach ($images as $index => $img): 
                    $caption = get_negative_pressure_caption($img);
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
            <span><i class="bi bi-camera text-primary"></i> <?php echo count($images); ?> High Resolution Images</span>
            <span>&bull;</span>
            <span><i class="bi bi-zoom-in text-primary"></i> Click to Enlarge</span>
            <span>&bull;</span>
            <span><i class="bi bi-play-circle text-primary"></i> Auto Scrolling Gallery</span>
          </div>

        </div>
      </div>
    </div>
  </section>
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
          let nextCol = parentCol.nextElementSibling;
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

      // Center the active card in the carousel viewport
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
                  targetTranslate = diff * 0.3; // elastic boundary
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

          // Mouse wheel support
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

          // Mouse events
          slider.addEventListener('mousedown', startDrag);
          window.addEventListener('mousemove', moveDrag);
          window.addEventListener('mouseup', endDrag);
          
          // Touch events
          slider.addEventListener('touchstart', startDrag, { passive: true });
          slider.addEventListener('touchmove', moveDrag, { passive: true });
          slider.addEventListener('touchend', endDrag);
      }
  });
  </script>



  <!-- 3️⃣ Three Product Variants -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Engineered Product Variants</h2>
        <p>Choose the containment specification that matches your biosafety protocol level.</p>
      </div>

      <div class="row gy-4 justify-content-center">
        <!-- Variant 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <div class="badge bg-primary rounded-pill mb-3 mx-auto px-3 py-2">BET-NGB-S</div>
            <h4 class="fw-bold mb-3">Single HEPA Filtration</h4>
            <p class="small text-muted mb-4">
              Designed with a single HEPA H14 filtration system, where either the incoming air or outgoing exhaust is filtered according to operational needs. Highly cost-effective and ideal for standard containment.
            </p>
            <div class="border-top pt-3 mt-auto text-start">
              <span class="d-block small text-muted"><strong>Best For:</strong> Chemical compounding &amp; general lab safety</span>
            </div>
          </div>
        </div>
        <!-- Variant 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <div class="badge bg-primary rounded-pill mb-3 mx-auto px-3 py-2">BET-NGB-D</div>
            <h4 class="fw-bold mb-3">Double HEPA Filtration</h4>
            <p class="small text-muted mb-4">
              Both inlet and exhaust air are passed through independent HEPA H14 filters with a 99.995% efficiency. Delivers superior operator protection and prevents ambient cross-contamination in critical labs.
            </p>
            <div class="border-top pt-3 mt-auto text-start">
              <span class="d-block small text-muted"><strong>Best For:</strong> BSL-3 laboratory containment &amp; active pathogens</span>
            </div>
          </div>
        </div>
        <!-- Variant 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <div class="badge bg-primary rounded-pill mb-3 mx-auto px-3 py-2">BET-NGB-CLC</div>
            <h4 class="fw-bold mb-3">Closed-Loop Double HEPA</h4>
            <p class="small text-muted mb-4">
              Features continuous internal atmosphere recirculation through dual HEPA H14 stages without exhausting gas into the laboratory environment. Offers maximum biosafety and containment security.
            </p>
            <div class="border-top pt-3 mt-auto text-start">
              <span class="d-block small text-muted"><strong>Best For:</strong> Highly toxic powder handling &amp; volatile compounds</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ Why Choose Our Negative Pressure Glove Box -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Why Choose Our Containment Systems</h2>
        <p>Premium components and structural designs built for extreme laboratory biosafety.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Negative Pressure Isolation</h4>
            <p class="small text-muted mb-0">Continuously maintains inward airflow to guarantee zero particle escape, protecting operator breathing zones.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">HEPA H14 Filtration</h4>
            <p class="small text-muted mb-0">Standardized with medical-grade HEPA H14 filtration ensuring 99.995% containment efficiency at 0.3 microns.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Closed-Loop Airflow</h4>
            <p class="small text-muted mb-0">Closed-loop models maintain complete internal circulation, preventing any ambient air exhaust into the laboratory.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Premium SS304/SS316</h4>
            <p class="small text-muted mb-0">Heavy-duty stainless steel base and body structures offer high resistance to chemicals and cleaning solvents.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Pressure Monitoring</h4>
            <p class="small text-muted mb-0">Fitted with analog Magnehelic pressure gauges for real-time differential pressure verification.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Custom Manufacturing</h4>
            <p class="small text-muted mb-0">As a custom laboratory equipment manufacturer, we tailor dimensions, pass box, and sensors to your workspace specs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5️⃣ Working Principle -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Working Principle of Negative Pressure Glove Boxes</h2>
        <p>A continuous cycles of pressure monitoring and high-efficiency filtration to guarantee safety.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="p-3 bg-white rounded shadow-sm h-100 border-top border-3 border-primary">
            <h5 class="text-primary">1. Negative Pressure Generation</h5>
            <p class="small text-muted mb-0">An internal blower or external exhaust fan creates a lower pressure inside the chamber relative to the surrounding room.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="p-3 bg-white rounded shadow-sm h-100 border-top border-3 border-primary">
            <h5 class="text-primary">2. Continuous Inward Flow</h5>
            <p class="small text-muted mb-0">Due to the pressure difference, any leak point or opened valve pulls air inward, physically preventing pathogends from escaping.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="p-3 bg-white rounded shadow-sm h-100 border-top border-3 border-primary">
            <h5 class="text-primary">3. Dual HEPA H14 Filtration</h5>
            <p class="small text-muted mb-0">Inlet air is purified to protect the sample, while contaminated air passes through an outlet HEPA filter before venting.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="p-3 bg-white rounded shadow-sm h-100 border-top border-3 border-primary">
            <h5 class="text-primary">4. Monitoring &amp; Equalization</h5>
            <p class="small text-muted mb-0">Analog Magnehelic gauges show pressure parameters, and manual valves let operators equalize pressure safely.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6️⃣ Applications Section -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Containment Applications</h2>
        <p>Deploying airtight biological safety containment solutions across specialized scientific fields.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-capsule fs-2 text-primary mb-2"></i>
            <h5>Pharmaceutical Industry</h5>
            <p class="small text-muted mb-0">Handling reactive dry powders and active pharmaceutical ingredients (APIs) safely.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-shield-lock fs-2 text-primary mb-2"></i>
            <h5>BSL-3 Containment</h5>
            <p class="small text-muted mb-0">Working with high-consequence pathogens and infectious virus specimens.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-flask fs-2 text-primary mb-2"></i>
            <h5>Chemical Laboratories</h5>
            <p class="small text-muted mb-0">Safe compounding of volatile chemicals and toxic organic compounds.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-mortarboard fs-2 text-primary mb-2"></i>
            <h5>Research Universities</h5>
            <p class="small text-muted mb-0">Academic material testing setups requiring reliable operator isolation.</p>
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
        <p>Performance and construction dimensions for the BET Negative Pressure series.</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="table-responsive shadow-sm rounded">
            <table class="table table-hover mb-0 bg-white">
              <thead class="bg-primary text-white">
                <tr>
                  <th scope="col" class="py-3 px-4" style="background-color: var(--heading-color); color: #fff;">Parameters</th>
                  <th scope="col" class="py-3 px-4" style="background-color: var(--heading-color); color: #fff;">Specifications</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 px-4 fw-medium">Chamber Construction</td>
                  <td class="py-3 px-4">SS304 or SS316 premium grade stainless steel base &amp; back wall</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Viewing Panel Window</td>
                  <td class="py-3 px-4">Optically clear acrylic / toughened safety glass with gas-tight seals</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Glove Ports</td>
                  <td class="py-3 px-4">Ergonomic circular ports with chemical-resistant butyl rubber gloves</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Pressure Monitoring</td>
                  <td class="py-3 px-4">Analog Magnehelic pressure gauge / optional digital pressure sensor</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">HEPA Filters</td>
                  <td class="py-3 px-4">HEPA H14 filters offering 99.995% efficiency at 0.3 microns</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Pass Box</td>
                  <td class="py-3 px-4">Integrated transfer chamber with interlocking door safety systems</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Illumination</td>
                  <td class="py-3 px-4">Internal LED lighting strip / cool run safety lighting</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Utility Ports</td>
                  <td class="py-3 px-4">Gas purging quick-connect valves / vacuum ports / electrical outlets</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Customization Options</td>
                  <td class="py-3 px-4">Custom dimensions, oxygen monitors, humidity control, UV lamps</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8️⃣ Optional Accessories -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Optional Accessories</h2>
        <p>Integrate specialized utilities into your dome chamber to expand research capabilities.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-speedometer text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Pressure Transmitters</h5>
              <p class="small text-muted mb-0">Integrates digital pressure monitoring and alarm systems for differential pressure controls.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-plus-circle text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Pass Box Antechamber</h5>
              <p class="small text-muted mb-0">Fitted with standard rectangular or cylindrical pass boxes with mechanical interlocking doors.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-filter-circle text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">UV Sterilization Lamp</h5>
              <p class="small text-muted mb-0">Add an overhead germicidal UV-C light with programmatic safety timer controls.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-moisture text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Humidity &amp; Oxygen Monitors</h5>
              <p class="small text-muted mb-0">Real-time digital meters reading active relative humidity and PPM oxygen parameters.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-sliders text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">PLC Automation</h5>
              <p class="small text-muted mb-0">Touchscreen controller handling automated air balancing, alarms, and purging cycles.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-shield-plus text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">VHP Decontamination</h5>
              <p class="small text-muted mb-0">Compatible construction with Vaporized Hydrogen Peroxide (VHP) sterilizing gas systems.</p>
            </div>
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
  .thumbnail-carousel-container {
      user-select: none;
  }
  .thumbnail-wrapper {
      overflow-x: hidden !important;
      overflow-y: hidden;
      scrollbar-width: none !important; /* Firefox */
      -ms-overflow-style: none !important; /* IE and Edge */
  }
  .thumbnail-wrapper::-webkit-scrollbar {
      display: none !important; /* Chrome, Safari */
  }
  .carousel-arrow {
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 5;
      border: 1px solid #e9ecef;
      background-color: #ffffff;
      color: var(--heading-color);
      transition: all 0.2s ease;
      padding: 0;
  }
  .carousel-arrow:hover {
      background-color: var(--accent-color);
      color: #ffffff;
      border-color: var(--accent-color);
  }
  .thumbnail-card {
      border: 2px solid transparent !important;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      background-color: #ffffff;
      min-width: 136px;
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
  </style>
  <?php endif; ?>

  <!-- 10️⃣ Product Catalogue Section -->
  <?php if ($pdf_file): ?>
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT CATALOGUE</h2>
        <p>Download our detailed Negative Pressure Glove Box catalog containing model drawings, biosafety parameters, and operational instructions.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-6 col-md-8">
          <div class="card border-0 shadow-lg rounded-4 p-4 text-center catalogue-card">
            <h4 class="mb-3 text-primary fw-bold">Negative Pressure Glove Box brochure</h4>
            <div class="p-3 bg-light rounded mb-4 text-start border-start border-3 border-primary">
              <p class="mb-2 small text-muted"><i class="bi bi-file-earmark-pdf text-danger fs-5"></i> <strong>File Name:</strong> <?php echo htmlspecialchars($pdf_name); ?></p>
              <?php if ($pdf_size_formatted): ?>
              <p class="mb-0 small text-muted"><i class="bi bi-sd-card text-primary"></i> <strong>File Size:</strong> <?php echo htmlspecialchars($pdf_size_formatted); ?></p>
              <?php endif; ?>
            </div>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-medium">
                <i class="bi bi-eye"></i> View Catalogue
              </a>
              <a href="<?php echo $pdf_file; ?>" download class="btn btn-primary px-4 py-2 rounded-pill fw-medium">
                <i class="bi bi-file-earmark-pdf"></i> Download Catalogue PDF
              </a>
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
  </style>
  <?php endif; ?>

  <!-- 1️⃣1️⃣ Frequently Asked Questions (FAQ) -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Get quick answers to common queries regarding biological safety containment enclosures.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What is a Negative Pressure Glove Box?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A Negative Pressure Glove Box is a sealed containment chamber maintained at a lower atmospheric pressure than the surrounding room. This ensures that in the event of a breach, ambient air flows inward, preventing hazardous powders, biological agents, and toxic substances from leaking into the laboratory.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  How does negative pressure work?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  An internal blower or exhaust fan extracts air from the workspace, creating a slight vacuum (negative pressure). Differential pressure gauges allow operators to continuously monitor this inward airflow velocity.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  What is HEPA H14 filtration?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  HEPA H14 is a medical-grade particulate filter that traps 99.995% of airborne particles, aerosols, bacteria, and virus vectors down to 0.3 microns.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  What is the difference between Single and Double HEPA?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Single HEPA systems filter either the inlet or exhaust air depending on requirements. Double HEPA systems filter both the incoming air and the outgoing exhaust air, providing two layers of high-efficiency particulate containment for maximum biosafety.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                  What is Closed-Loop Double HEPA filtration?
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  In a Closed-Loop system, air continuously recirculates through dual HEPA filters inside the sealed chamber, meaning no contaminated air is exhausted into the laboratory atmosphere, making it BSL-3 ready.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                  What industries use negative pressure glove boxes?
                </button>
              </h2>
              <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  They are widely used in pharmaceutical production (compounding APIs), chemical research, microbiology laboratories, vaccine centers, and nuclear testing environments.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                  Can it handle hazardous powders?
                </button>
              </h2>
              <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, the negative pressure containment and H14 filtration are specifically designed to trap toxic powder particulates, protecting operators from inhalation hazards.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                  Is it suitable for pharmaceutical manufacturing?
                </button>
              </h2>
              <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, the stainless steel SS304/SS316 body and airtight seal comply with international GMP guidelines for sterile pharmaceutical compounding.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                  Can it be customized?
                </button>
              </h2>
              <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. Burhani Engineering Technology can customize dimensions, glove count, VHP compatibility, UV lamps, and integrate pass boxes to meet specialized requirements.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                  How often should HEPA filters be replaced?
                </button>
              </h2>
              <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Hepa filter life depends on particulate loading. Typically, they should be tested or replaced every 12 to 24 months, or when the pressure drop across the filter exceeds the recommended threshold.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contextual Internal Linking / Resource Hub -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Related Glove Box Enclosures</h2>
        <p>Explore our complete range of custom laboratory isolation systems.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-box fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'Acrylic_Vacuum_Glove_Box'); ?>" class="text-decoration-none text-dark hover-accent">Acrylic Glove Box</a></h4>
            <p class="small text-muted mb-0">Optically clear acrylic containment enclosures for general vacuum and inert gas applications.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-wind fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'argon-gas-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Argon Gas Glove Box</a></h4>
            <p class="small text-muted mb-0">Closed-loop inert gas purification systems maintaining sub-1 ppm environment for active battery R&amp;D.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-mortarboard fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'compact-university-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Compact University</a></h4>
            <p class="small text-muted mb-0">Space-saving, cost-effective glove boxes with integrated transfer chambers for university research.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-globe fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'globe-box-dome-360-glove-chamber'); ?>" class="text-decoration-none text-dark hover-accent">Globe Box Dome</a></h4>
            <p class="small text-muted mb-0">Spherical transparent dome glove boxes offering a seamless 360-degree panoramic viewing viewport.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 12️⃣ CTA Section -->
  <section class="section py-5">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Need a Negative Pressure Glove Box for Your Lab?</h2>
        <p class="mb-4">Consult our design engineers to customize your dimensions, HEPA filtration levels, and utility configurations.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Request a Quote</a>
          <a href="https://wa.me/919677296252?text=Hello%20Burhani%20Engineering%20Technology,%20I%20am%20interested%20in%20a%20Negative%20Pressure%20Glove%20Box." target="_blank" rel="noopener" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Contact Our Engineers</a>
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
