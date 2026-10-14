<?php
include_once(__DIR__ . '/../../../includes/config.php');

$product_name = "Globe Box Dome 360° Glove Chamber";
$slug = "globe-box-dome-360-glove-chamber";
$image_dir_relative = "img/Glove Box/Globe Box Dome 360°Glove Chamber/";
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
                if (preg_match('/(catalogue|catalog|brochure|leaflet|pamphlet|preview)/i', $file)) {
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

// Reorder images to have "Globe Box Dome.png" or "360 View" first as default featured image
usort($images, function($a, $b) {
    $a_is_featured = (stripos($a, '360 View') !== false || stripos($a, 'Dome.png') !== false) ? 1 : 0;
    $b_is_featured = (stripos($b, '360 View') !== false || stripos($b, 'Dome.png') !== false) ? 1 : 0;
    return $b_is_featured <=> $a_is_featured;
});

// Default PDF fallback if not scanned
if (!$pdf_file && file_exists(__DIR__ . '/../../../assets/img/Glove Box/Globe Box Dome 360°Glove Chamber/Scientific Research Dome Chamber.pdf')) {
    $pdf_file = asset('img/Glove Box/Globe Box Dome 360°Glove Chamber/Scientific Research Dome Chamber.pdf');
}

$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Globe Box Dome 360° Glove Chamber Manufacturer in $city, $country | Transparent Isolation Chambers";
    $meta_description = "Premium Globe Box Dome 360° Glove Chamber Manufacturer in $city, $country. Crystal-clear PMMA acrylic dome glove boxes with HEPA filtration and gas ports for laboratory isolation.";
    $canonical_url = product_category_url('vacuum_glove_box', 'globe-box-dome-360-glove-chamber');
} else {
    $meta_title = "Globe Box Dome 360° Glove Chamber Manufacturer | Transparent PMMA Glove Box | BET";
    $meta_description = "Looking for a reliable 360 Degree Glove Box Manufacturer? We design and manufacture high-performance Globe Box Dome 360° Glove Chambers from transparent PMMA acrylic for academic R&D.";
    $canonical_url = product_category_url('vacuum_glove_box', 'globe-box-dome-360-glove-chamber');
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
      "name": "Globe Box Dome 360° Glove Chamber",
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
  "name": "Globe Box Dome 360° Glove Chamber",
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
      "name": "What is a Globe Box Dome 360° Chamber?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Globe Box Dome 360° Glove Chamber is a spherical or dome-shaped containment system made of highly transparent crystal-clear PMMA acrylic. It provides complete 360-degree panoramic visibility for detailed observation of sensitive sample manipulations under an isolated, controlled atmosphere."
      }
    },
    {
      "@type": "Question",
      "name": "Why use a transparent dome glove chamber instead of a rectangular one?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The transparent dome design eliminates blind spots and visual distortion common in rectangular box corners. This ensures complete panoramic visibility, which is highly beneficial for complex research procedures, quality control, and academic demonstrations."
      }
    },
    {
      "@type": "Question",
      "name": "What materials are used in construction?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The chamber is manufactured using high-quality PMMA (polymethyl methacrylate) acrylic. This material is chosen for its excellent optical clarity, impact resistance, and durability against basic laboratory chemical exposures."
      }
    },
    {
      "@type": "Question",
      "name": "Is this glove box portable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Globe Box Dome is designed as a portable laboratory glove box. Its lightweight and compact benchtop footprint allow it to be easily moved and reinstalled on standard laboratory workbenches."
      }
    },
    {
      "@type": "Question",
      "name": "Can it be customized with gas ports or monitors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Burhani Engineering Technology is a custom laboratory equipment manufacturer. We can integrate gas inlet/outlet ports, pressure gauges, HEPA filtration, UV sterilizers, and internal sensors for oxygen and humidity monitoring based on your specifications."
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
            <h1>Globe Box Dome 360° Glove Chamber Manufacturer</h1>
            <p class="mb-4">Crystal-Clear Spherical Isolation Chambers for Full 360° Visibility and Precision Sample Containment</p>
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
            <h2>Seamless Panoramic Views for Controlled Environment Applications</h2>
            <p>
              In high-precision research environments, visual clarity can make the difference between a successful experiment and a compromised batch. The <strong>Globe Box Dome 360° Glove Chamber</strong>, designed and manufactured by Burhani Engineering Technology, provides a unique solution by combining a spherical, seamless transparent dome structure with professional gas-tight containment.
            </p>
            <p>
              Unlike traditional rectangular glove boxes that contain corners, weld seams, and blind spots, this specialized <strong>360 Degree Glove Box</strong> is fabricated from premium quality PMMA (polymethyl methacrylate) acrylic. Its dome structure delivers exceptional optical clarity and distortion-free 360° panoramic visibility. This transparent glove chamber is perfect for educational demonstrations, multi-operator observations, quality control inspections, and research glove chamber applications where complete visual monitoring is necessary.
            </p>
            <p>
              The compact, lightweight benchtop installation format makes this <strong>portable laboratory glove box</strong> highly versatile. It can be easily integrated into cleanrooms, research labs, or university classrooms. By isolating sensitive chemical compounds, biological cultures, and material samples, it provides essential protection against particulate contamination. Equipped with two ergonomic glove ports and chemical-resistant sealing, it supports safe, comfortable operations for extended hours.
            </p>
            <p>
              As a premier <strong>laboratory equipment manufacturer</strong> in India, Burhani Engineering Technology offers complete customization for the Globe Box Dome. It can be outfitted with gas purging ports, HEPA filtration systems, UV sterilizers, and digital monitors to establish a fully controlled atmosphere.
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
              <div class="category-nav-item active">
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
  function get_globe_dome_caption(string $image_url): string {
      $filename = urldecode(basename($image_url));
      
      if (stripos($filename, '360 Degree') !== false || stripos($filename, '360 View') !== false) {
          return "360° Globe Chamber Front View";
      }
      if (stripos($filename, 'Compact') !== false) {
          return "Compact Laboratory Glove Box";
      }
      if (stripos($filename, 'Dome') !== false) {
          return "360° Visibility Dome Isolation Chamber";
      }
      if (stripos($filename, 'globe shape') !== false || stripos($filename, 'Spherical') !== false) {
          return "Spherical Glove Box Chamber";
      }
      if (stripos($filename, 'Sample') !== false) {
          return "Laboratory Sample Handling Chamber";
      }
      if (stripos($filename, 'Portable') !== false) {
          return "Portable Research Glove Box";
      }
      if (stripos($filename, 'globe chamber') !== false) {
          return "Transparent PMMA Isolation Chamber";
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
        <p>Explore High-Resolution Images of our Globe Box Dome 360° Glove Chamber Series</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          
          <!-- Featured Image Display -->
          <div class="featured-image-container mb-4 text-center p-4 bg-white rounded-3 shadow-sm position-relative">
            <a href="<?php echo $featured_image; ?>" id="featured-image-link" class="glightbox" data-gallery="product-gallery">
              <img src="<?php echo $featured_image; ?>" id="featured-image-display" loading="lazy" decoding="async" alt="Globe Box Dome 360 Glove Chamber Featured View" title="Globe Box Dome 360 Glove Chamber" class="img-fluid rounded" style="max-height: 500px; object-fit: contain; transition: opacity 0.2s ease;" width="800" height="600">
            </a>
            <div id="featured-image-caption" class="mt-3 fw-bold text-primary">
              <?php echo get_globe_dome_caption($featured_image); ?>
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
                    $caption = get_globe_dome_caption($img);
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



  <!-- 3️⃣ Why Choose Our Globe Box Dome -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Why Choose Our Globe Box Dome</h2>
        <p>Advanced engineering solutions integrated into our spherical transparent glove chambers.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">360° Panoramic Visibility</h4>
            <p class="small text-muted mb-0">Seamless dome geometry provides distortion-free observation from every angle, perfect for complex monitoring and recording.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Crystal Clear PMMA</h4>
            <p class="small text-muted mb-0">Manufactured using high-grade optical Polymethyl Methacrylate (PMMA) offering premium clarity and impact resistance.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Chemical Resistant Body</h4>
            <p class="small text-muted mb-0">Engineered to withstand basic laboratory chemical reactions, cleaning reagents, and sterilizing sprays.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Portable Compact Design</h4>
            <p class="small text-muted mb-0">Features a compact footprint that easily fits on benchtop workstations and can be moved across lab rooms as needed.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Ergonomic Gloves</h4>
            <p class="small text-muted mb-0">Integrated port sleeves with premium ambidextrous laboratory gloves reduce wrist fatigue during extended usage.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Leak Resistant Construction</h4>
            <p class="small text-muted mb-0">Precision compression gaskets and airtight seals ensure absolute environment containment and contamination prevention.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Easy Cleaning</h4>
            <p class="small text-muted mb-0">Seamless inner walls eliminate corners and crevices, preventing residue build-up and simplifying sterilization.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Long Service Life</h4>
            <p class="small text-muted mb-0">Rigid construction resistant to aging, discoloration, and structural cracking under standard laboratory conditions.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Made in India</h4>
            <p class="small text-muted mb-0">Designed and manufactured locally in India by Burhani Engineering Technology, complying with global standards.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ Applications Section -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Laboratory &amp; Industry Applications</h2>
        <p>Empowering research, safety, and sample integrity across multiple professional disciplines.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-capsule fs-2 text-primary mb-2"></i>
            <h5>Pharmaceutical Labs</h5>
            <p class="small text-muted mb-0">Weighing reactive dry powders and preparing formulations in isolated conditions.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-diagram-3 fs-2 text-primary mb-2"></i>
            <h5>Biotechnology</h5>
            <p class="small text-muted mb-0">Manipulation of sensitive enzymes, nucleic acids, and bio-molecular test vectors.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-virus fs-2 text-primary mb-2"></i>
            <h5>Microbiology</h5>
            <p class="small text-muted mb-0">Culturing bacterial strains and cellular samples away from ambient drafts.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-mortarboard fs-2 text-primary mb-2"></i>
            <h5>Educational Institutions</h5>
            <p class="small text-muted mb-0">Providing safe, high-visibility classroom setups for chemical and physics experiments.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-mortarboard-fill fs-2 text-primary mb-2"></i>
            <h5>Universities</h5>
            <p class="small text-muted mb-0">Cost-effective sample isolation and atmosphere purge chambers for thesis R&amp;D.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-hospital fs-2 text-primary mb-2"></i>
            <h5>Hospitals &amp; Clinics</h5>
            <p class="small text-muted mb-0">Safe handling and analysis of biological fluid specimens and hazardous agents.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-search fs-2 text-primary mb-2"></i>
            <h5>Forensic Science</h5>
            <p class="small text-muted mb-0">Analyzing sensitive physical evidence samples without cross-contamination risk.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-cpu fs-2 text-primary mb-2"></i>
            <h5>Electronics Assembly</h5>
            <p class="small text-muted mb-0">Inspecting micro-circuits, assembling sensors, and soldering parts in low-dust zones.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5️⃣ Technical Specifications -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Technical Specifications</h2>
        <p>Technical parameters for our standard spherical dome glove chambers.</p>
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
                  <td class="py-3 px-4 fw-medium">Body Material</td>
                  <td class="py-3 px-4">Crystal-clear PMMA (Polymethyl Methacrylate) Acrylic</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Atmosphere Visibility</td>
                  <td class="py-3 px-4">360° panoramic viewing angle, seamless corner-free dome</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Glove Port Quantity</td>
                  <td class="py-3 px-4">Two (2) ports configured with ergonomic port rings</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Glove Type</td>
                  <td class="py-3 px-4">Premium ambidextrous laboratory gloves (neoprene/latex)</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Working Pressure</td>
                  <td class="py-3 px-4">Positive pressure / purging compatibility (not for deep vacuum)</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Airtight Integrity</td>
                  <td class="py-3 px-4">Compression latches with gas-tight silicone gaskets</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Installation Footprint</td>
                  <td class="py-3 px-4">Compact benchtop installation format</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Weight class</td>
                  <td class="py-3 px-4">Lightweight and highly portable</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Ventilation</td>
                  <td class="py-3 px-4">Equipped with adjustable air equalization vent</td>
                </tr>
                <tr>
                  <td class="py-3 px-4 fw-medium">Customization</td>
                  <td class="py-3 px-4">Custom dimensions, extra gas ports, UV sterilization setups available</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6️⃣ Optional Accessories -->
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
              <h5 class="fw-bold mb-1">Pressure Gauge</h5>
              <p class="small text-muted mb-0">Integrates an analog dial pressure gauge for real-time chamber monitoring.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-plus-circle text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Gas Purging Ports</h5>
              <p class="small text-muted mb-0">Add two or more quick-connect gas ports for Nitrogen or Argon purging loops.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-filter-circle text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">HEPA Filtration</h5>
              <p class="small text-muted mb-0">Includes gas exhaust connection canisters fitted with active HEPA filters.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-brightness-high text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">UV Sterilization</h5>
              <p class="small text-muted mb-0">Mounts an internal UV germicidal light fixture for biohazard containment sterilization.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-lightbulb text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">LED Illumination</h5>
              <p class="small text-muted mb-0">Safe, cool-run LED lighting strip mounted along the base ring for interior illumination.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-moisture text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Humidity Monitor</h5>
              <p class="small text-muted mb-0">Integrates a digital hygrometer to read absolute moisture levels inside the dome.</p>
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

  <!-- 8️⃣ Frequently Asked Questions (FAQ) -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Get quick answers to common technical queries about Globe Box Dome 360° Glove Chambers.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What is a Globe Box Dome 360° Chamber?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A Globe Box Dome 360° Glove Chamber is a spherical or dome-shaped containment system made of highly transparent crystal-clear PMMA acrylic. It provides complete 360-degree panoramic visibility for detailed observation of sensitive sample manipulations under an isolated, controlled atmosphere.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  Why use a transparent glove chamber?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Traditional rectangular glove boxes contain corners, joint seams, and structural panels that block visibility. The seamless dome design eliminates these blind spots and ensures distortion-free visual monitoring from all sides.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  What materials are used in construction?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The primary chamber is fabricated from premium crystal-clear PMMA (acrylic). It offers outstanding optical clarity, impact resistance, and basic chemical resistance, suitable for standard laboratory research operations.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  Can the dome chamber be customized?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, Burhani Engineering Technology specializes in customization. We can modify the dimensions, number of glove ports, integrate HEPA/carbon filters, UV sterilizers, gas inlet/outlet ports, and customize glove types.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                  Is it suitable for pharmaceutical laboratories?
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, it is highly suitable for weighing toxic dry powders, compounding, and sterile transfers in pharmaceutical research laboratories while isolating the operator from the samples.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                  Is it suitable for biotechnology research?
                </button>
              </h2>
              <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, it provides a sterile, isolated chamber environment that protects enzymes, cultures, and biological samples from trace ambient contamination.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                  Can it be used in universities?
                </button>
              </h2>
              <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, its 360-degree transparent design makes it ideal for educational demonstrations and university R&amp;D projects where multiple students need to view the experiment simultaneously.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                  How is contamination prevented?
                </button>
              </h2>
              <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Contamination is prevented through an airtight compression sealing system, gas-tight silicone gaskets, and the ability to purge the chamber with dry nitrogen or argon. Optional HEPA filters can also be fitted.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                  Does BET manufacture custom glove chambers?
                </button>
              </h2>
              <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, Burhani Engineering Technology is a leading manufacturer of custom laboratory containment enclosures and glove boxes in India, supplying products globally.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                  Can it hold a deep vacuum?
                </button>
              </h2>
              <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  No, the Globe Box Dome is designed for positive pressure purging and atmosphere control. For deep vacuum applications, please refer to our Acrylic Vacuum Glove Box or Metal Body Glove Box.
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
            <i class="bi bi-arrow-down-left-square fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'negative-pressure-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Negative Pressure</a></h4>
            <p class="small text-muted mb-0">Containment chambers engineered to prevent biohazardous substances from leaking into laboratory spaces.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9️⃣ CTA Section -->
  <section class="section py-5">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Need a Globe Box Dome 360° Glove Chamber for Your Lab?</h2>
        <p class="mb-4">Consult our design engineers to customize your dimensions, UV settings, and port configuration.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Request a Quote</a>
          <a href="https://wa.me/919677296252?text=Hello%20Burhani%20Engineering%20Technology,%20I%20am%20interested%20in%20a%20Globe%20Box%20Dome%20360%20Glove%20Chamber." target="_blank" rel="noopener" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Contact Our Engineers</a>
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
