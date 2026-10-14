<?php
include_once(__DIR__ . '/../../../includes/config.php');

$product_name = "Compact University Glove Box";
$slug = "compact-university-glove-box";
$image_dir_relative = "img/Glove Box/Compact university glove Box/";
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

// Reorder images so that a BET810-SG40 image is first (making it the default featured image)
usort($images, function($a, $b) {
    $a_is_sg40 = (stripos($a, 'SG40') !== false || stripos($a, 'S40') !== false) ? 1 : 0;
    $b_is_sg40 = (stripos($b, 'SG40') !== false || stripos($b, 'S40') !== false) ? 1 : 0;
    return $b_is_sg40 <=> $a_is_sg40;
});

// Default PDF fallback if not scanned in folder
if (!$pdf_file && file_exists(__DIR__ . '/../../../assets/img/Glove Box/Compact university glove Box/compact-university-glove-box-with-side-transfer-chamber.pdf')) {
    $pdf_file = asset('img/Glove Box/Compact university glove Box/compact-university-glove-box-with-side-transfer-chamber.pdf');
}

$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Compact University Glove Box Manufacturer in $city, $country | Laboratory Inert Environments";
    $meta_description = "Premium Compact University Glove Box Manufacturer in $city, $country. Custom airtight laboratory glove boxes with transfer chambers and HEPA filtration for academic R&D.";
    $canonical_url = product_category_url('vacuum_glove_box', 'compact-university-glove-box');
} else {
    $meta_title = "Compact University Glove Box Manufacturer | Laboratory Inert Atmosphere Glove Box | BET";
    $meta_description = "Burhani Engineering Technology manufactures Compact University Glove Boxes with side transfer chambers, airtight construction, HEPA filtration, integrated purging system and multiple size options including BET810-SG10, SG20, SG30 and SG40.";
    $canonical_url = product_category_url('vacuum_glove_box', 'compact-university-glove-box');
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
      "name": "Compact University Glove Box",
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
  "name": "Compact University Glove Box",
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
      "name": "What is a Compact University Glove Box?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Compact University Glove Box is an airtight containment system designed for academic and laboratory research. Built using optically clear materials, it features integrated purging valves, a side transfer chamber, and safety filtration to provide a controlled draft-free atmosphere for moisture-sensitive and reactive materials."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between SG10 and SG20?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The primary difference lies in their capacity and dimensions. The BET810-SG10 is space-efficient with internal dimensions of 28\"w x 23\"d x 29\"h, whereas the BET810-SG20 is a medium-capacity system measuring 35\"w x 29\"d x 30\"h, providing a larger workspace."
      }
    },
    {
      "@type": "Question",
      "name": "Which model is suitable for battery research?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "All models in the SG range are suitable depending on the equipment size. The BET810-SG30 is a popular choice for battery research because it features three glove ports, allowing improved operator accessibility for assembling coin cells, pouch cells, and handling reactive lithium materials."
      }
    },
    {
      "@type": "Question",
      "name": "Can the glove box operate with Argon?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the glove box is designed to operate with inert gases including Argon and Nitrogen. It features purging valves that allow the atmosphere to be fully purged and replaced with high-purity Argon gas."
      }
    },
    {
      "@type": "Question",
      "name": "Can it operate with Nitrogen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Nitrogen is commonly used for cost-effective atmosphere control where Argon is not chemically required (e.g., standard moisture control, electronics assembly, and general chemical handling)."
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
            <h1>Compact University Glove Box Manufacturer</h1>
            <p class="mb-4">Compact Controlled Atmosphere Glove Boxes for Universities, Research Laboratories and Industrial Applications</p>
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
            <h2>Controlled Laboratory Environments for Academic & Industrial Research</h2>
            <p>
              In university research and academic laboratories, space efficiency, affordability, and containment performance are critical. The <strong>Compact University Glove Box</strong>, designed and manufactured by Burhani Engineering Technology, is a versatile containment system that provides a highly stable, controlled draft-free environment for handling moisture-sensitive materials, chemical compounds, and advanced electronics.
            </p>
            <p>
              Built using optically clear materials, this <strong>University Glove Box</strong> delivers excellent visibility and ergonomic operator handling. It serves as an indispensable tool for multiple disciplines, including <strong>laboratory glove box</strong> research in nanotechnology, biotechnology, and material sciences. By using integrated purging valves, oxygen and humidity are easily purged using inert gases like Nitrogen or Argon, ensuring a pristine environment for active metal manipulation and <strong>battery research</strong>.
            </p>
            <p>
              As a global <strong>laboratory equipment manufacturer</strong>, we integrate essential safety and operational utilities into this system. Every unit features a built-in side transfer chamber that allows instruments and materials to be imported without disrupting the internal atmosphere. With models ranging from two-port research configurations to larger four-port options (BET810-SG10, SG20, SG30, and SG40), our systems offer universities and industrial R&D facilities the gold standard of airtight isolation.
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
              <div class="category-nav-item active">
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
  function get_compact_university_caption(string $image_url): string {
      $filename = urldecode(basename($image_url));
      $clean_name = pathinfo($filename, PATHINFO_FILENAME);
      return ucwords($clean_name);
  }
  
  if (!empty($images)): 
      $featured_image = $images[0];
  ?>
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT GALLERY</h2>
        <p>Explore High-Resolution Images of our Compact University Glove Box Series</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          
          <!-- Featured Image Display -->
          <div class="featured-image-container mb-4 text-center p-4 bg-white rounded-3 shadow-sm position-relative">
            <a href="<?php echo $featured_image; ?>" id="featured-image-link" class="glightbox" data-gallery="product-gallery">
              <img src="<?php echo $featured_image; ?>" id="featured-image-display" loading="lazy" decoding="async" alt="Compact University Glove Box Featured View" title="Compact University Glove Box" class="img-fluid rounded" style="max-height: 500px; object-fit: contain; transition: opacity 0.2s ease;" width="800" height="600">
            </a>
            <div id="featured-image-caption" class="mt-3 fw-bold text-primary">
              <?php echo get_compact_university_caption($featured_image); ?>
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
                <?php foreach ($images as $index => $img): 
                    $caption = get_compact_university_caption($img);
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

      // Center the active card in the carousel track viewport
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
                  targetTranslate = diff * 0.3; // Elastic resistance boundary
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

          // Mouse wheel scrolling support
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



  <!-- 3️⃣ Why Choose Our Compact University Glove Box -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Why Choose Our Compact University Glove Box</h2>
        <p>Premium features tailored for academic budget constraints and high-precision laboratory testing.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Fully Airtight Construction</h4>
            <p class="small text-muted mb-0">Completely sealed enclosure design eliminates trace ambient drafts and isolates moisture/oxygen-sensitive samples.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Side Transfer Chamber</h4>
            <p class="small text-muted mb-0">Features an integrated 12-inch transfer chamber with independent purging valves for contamination-free sample loading.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">HEPA Filtered Pressure Relief</h4>
            <p class="small text-muted mb-0">Protects operators and materials during pressure spikes via a compact HEPA-filtered pressure relief valve.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Low Gas Consumption</h4>
            <p class="small text-muted mb-0">Optimized internal volume and airtight integrity minimize inert gas consumption, reducing university running costs.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Large Front Access Door</h4>
            <p class="small text-muted mb-0">Enables easy loading of larger laboratory instruments, spin coaters, and test equipment before sealing the workspace.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Excellent Optical Visibility</h4>
            <p class="small text-muted mb-0">Optically clear acrylic structure provides distortion-free, 360-degree visibility for detailed experimental observations.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Vacuum Monitoring</h4>
            <p class="small text-muted mb-0">Equipped with a built-in vacuum gauge on the side transfer chamber for precise atmosphere monitoring during purging.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Hospital Grade Electrical Outlet</h4>
            <p class="small text-muted mb-0">Integrated hospital-grade outlet strip inside the chamber allows safe powering of analytical tools and hot plates.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-3">Multiple Standard Sizes</h4>
            <p class="small text-muted mb-0">Available in four standard sizes (SG10, SG20, SG30, SG40) accommodating 2, 3, or 4 glove port requirements.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ Model Comparison Section -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Model Range &amp; Comparison</h2>
        <p>Explore technical dimensions and application recommendations across the BET810 series.</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-12">
          <div class="table-responsive shadow-sm rounded">
            <table class="table table-hover mb-0 bg-white">
              <thead class="bg-primary text-white">
                <tr>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Model</th>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Glove Ports</th>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Inside Dimensions</th>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Outside Dimensions</th>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Access Door Opening</th>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Transfer Chamber</th>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Working Capacity</th>
                  <th scope="col" class="py-3 px-3" style="background-color: var(--heading-color); color: #fff;">Recommended Applications</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 px-3 fw-bold">BET810-SG10</td>
                  <td class="py-3 px-3">Two (2)</td>
                  <td class="py-3 px-3">28"w x 23"d x 29"h<br><small class="text-muted">(710 x 580 x 740mm)</small></td>
                  <td class="py-3 px-3">43"w x 24"d x 31"h<br><small class="text-muted">(1,100 x 610 x 790mm)</small></td>
                  <td class="py-3 px-3">15.5" x 22"h<br><small class="text-muted">(400 x 560mm)</small></td>
                  <td class="py-3 px-3">12" Length</td>
                  <td class="py-3 px-3">Compact / Space-Efficient</td>
                  <td class="py-3 px-3">Academic R&amp;D, general chemistry, student training</td>
                </tr>
                <tr>
                  <td class="py-3 px-3 fw-bold">BET810-SG20</td>
                  <td class="py-3 px-3">Two (2)</td>
                  <td class="py-3 px-3">35"w x 29"d x 30"h<br><small class="text-muted">(890 x 740 x 760mm)</small></td>
                  <td class="py-3 px-3">49"w x 30"d x 31"h<br><small class="text-muted">(1,250 x 760 x 790mm)</small></td>
                  <td class="py-3 px-3">21.5" x 22"h<br><small class="text-muted">(546 x 560mm)</small></td>
                  <td class="py-3 px-3">12" Length</td>
                  <td class="py-3 px-3">Medium Capacity</td>
                  <td class="py-3 px-3">Pharmaceutical research, biotechnology, electronics manufacturing</td>
                </tr>
                <tr>
                  <td class="py-3 px-3 fw-bold">BET810-SG30</td>
                  <td class="py-3 px-3">Three (3)</td>
                  <td class="py-3 px-3">48"w x 29"d x 32"h<br><small class="text-muted">(1,220 x 740 x 810mm)</small></td>
                  <td class="py-3 px-3">63"w x 31"d x 35"h<br><small class="text-muted">(1,600 x 790 x 860mm)</small></td>
                  <td class="py-3 px-3">21.5" x 24"h<br><small class="text-muted">(546 x 610mm)</small></td>
                  <td class="py-3 px-3">12" Length</td>
                  <td class="py-3 px-3">High Capacity</td>
                  <td class="py-3 px-3">Lithium battery R&amp;D, semiconductor, catalyst prep</td>
                </tr>
                <tr>
                  <td class="py-3 px-3 fw-bold">BET810-SG40</td>
                  <td class="py-3 px-3">Four (4)</td>
                  <td class="py-3 px-3">60"w x 29"d x 32"h<br><small class="text-muted">(1,524 x 740 x 810mm)</small></td>
                  <td class="py-3 px-3">76"w x 32"d x 35"h<br><small class="text-muted">(1,930 x 812 x 890mm)</small></td>
                  <td class="py-3 px-3">21.5" x 24"h<br><small class="text-muted">(546 x 610mm)</small></td>
                  <td class="py-3 px-3">12" Length</td>
                  <td class="py-3 px-3">Maximum Capacity</td>
                  <td class="py-3 px-3">Multi-operator use, aerospace research, industrial R&amp;D</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5️⃣ Applications Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Laboratory &amp; Industry Applications</h2>
        <p>Enabling contamination-free scientific discovery and production across specialized sectors.</p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-mortarboard fs-2 text-primary mb-2"></i>
            <h5>Universities &amp; Colleges</h5>
            <p class="small text-muted mb-0">Cost-effective containment system for physics, chemistry, and engineering education.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-battery-charging fs-2 text-primary mb-2"></i>
            <h5>Battery Research</h5>
            <p class="small text-muted mb-0">Safe handling of reactive lithium metal foils and electrolyte materials.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-cpu fs-2 text-primary mb-2"></i>
            <h5>Semiconductor Labs</h5>
            <p class="small text-muted mb-0">Protection of organic substrates, solar cells, and thin-film devices.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-capsule fs-2 text-primary mb-2"></i>
            <h5>Pharmaceutical Industry</h5>
            <p class="small text-muted mb-0">Enclosures for weighing toxic powders, compounding, and sterile product handling.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-diagram-3 fs-2 text-primary mb-2"></i>
            <h5>Nanotechnology</h5>
            <p class="small text-muted mb-0">Isolation chamber for high-precision nanoparticle manipulation and testing.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-flask fs-2 text-primary mb-2"></i>
            <h5>Chemical Laboratories</h5>
            <p class="small text-muted mb-0">Safe synthesis of oxygen-sensitive organometallics and active catalysts.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-gear fs-2 text-primary mb-2"></i>
            <h5>Material Science</h5>
            <p class="small text-muted mb-0">Supports additive manufacturing, powder processing, and polymer research.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-airplane-fill fs-2 text-primary mb-2"></i>
            <h5>Aerospace Research</h5>
            <p class="small text-muted mb-0">Hermetic assembly of micro-sensors, satellites, and precision laser instrumentation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6️⃣ Standard Features -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Standard Features</h2>
        <p>Premium components integrated as standard to guarantee performance and reliability.</p>
      </div>
      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-shield-fill-check text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Completely Sealed Design</h5>
              <p class="small text-muted mb-0">Engineered with leak-tight gaskets to minimize gas consumption and lower operational expenses.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-box-arrow-in-right text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Integrated Transfer Chamber</h5>
              <p class="small text-muted mb-0">12-inch side chamber equipped with purging valves and a vacuum gauge for controlled sample entry.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-door-open-fill text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Flat Side Access Door</h5>
              <p class="small text-muted mb-0">Large opening allows easy introduction of bulky instruments and experimental equipment.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-valve text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Four (4) Purging Valves</h5>
              <p class="small text-muted mb-0">High-efficiency key cock valves configured for rapid chamber purging and gas replacement.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-plug-fill text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Hospital-Grade Outlet Strip</h5>
              <p class="small text-muted mb-0">Internal electrical outlet strip for clean and safe power connections inside the chamber.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-patch-check-fill text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">HEPA Pressure Relief Canister</h5>
              <p class="small text-muted mb-0">Fitted pressure relief valve integrated with a HEPA filter for optimal contamination control.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-award-fill text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">24-Month Warranty</h5>
              <p class="small text-muted mb-0">Standard 24-month warranty provided on all parts, excluding standard consumables like gloves.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-hand-index-thumb-fill text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">White Ambidextrous Gloves</h5>
              <p class="small text-muted mb-0">Supplied with premium quality, chemical-resistant white gloves for operator comfort and safety.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="bi bi-sliders2 text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1">Custom Configurations</h5>
              <p class="small text-muted mb-0">Available in custom dimensions, port configurations, and specialty materials upon request.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7️⃣ Technical Specifications (Cards) -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Technical Construction Parameters</h2>
        <p>Precision-engineered specifications for academic research isolation workstations.</p>
      </div>

      <div class="row gy-4 justify-content-center">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <h5 class="text-primary fw-bold mb-3 border-bottom pb-2">Atmosphere Purge</h5>
            <ul class="list-unstyled mb-0 small text-muted">
              <li class="mb-2"><strong>Purging Valves:</strong> Four (4) key cock valves</li>
              <li class="mb-2"><strong>Inert Compatibility:</strong> Nitrogen, Argon, Helium</li>
              <li><strong>Gas Consumption:</strong> Low consumption airtight seals</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <h5 class="text-primary fw-bold mb-3 border-bottom pb-2">Transfer System</h5>
            <ul class="list-unstyled mb-0 small text-muted">
              <li class="mb-2"><strong>Transfer Chamber:</strong> 12" cylindrical chamber</li>
              <li class="mb-2"><strong>Valves:</strong> Independent purge control</li>
              <li><strong>Monitoring:</strong> Integrated analog vacuum gauge</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <h5 class="text-primary fw-bold mb-3 border-bottom pb-2">Chamber &amp; Safety</h5>
            <ul class="list-unstyled mb-0 small text-muted">
              <li class="mb-2"><strong>Pressure Relief:</strong> Integrated relief valve</li>
              <li class="mb-2"><strong>Filtration:</strong> Compact HEPA filter canister</li>
              <li><strong>Electrical:</strong> Hospital-grade internal outlet strip</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <h5 class="text-primary fw-bold mb-3 border-bottom pb-2">Ergonomics</h5>
            <ul class="list-unstyled mb-0 small text-muted">
              <li class="mb-2"><strong>Glove Ports:</strong> 2, 3, or 4 port options</li>
              <li class="mb-2"><strong>Glove Quality:</strong> Premium white ambidextrous</li>
              <li><strong>Viewing Panel:</strong> Optically clear transparent body</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <h5 class="text-primary fw-bold mb-3 border-bottom pb-2">Mechanical Entry</h5>
            <ul class="list-unstyled mb-0 small text-muted">
              <li class="mb-2"><strong>Access Door:</strong> Flat side-loading door</li>
              <li class="mb-2"><strong>Door Seal:</strong> High-performance compression latch</li>
              <li><strong>Footprint:</strong> Space-saving benchtop setup</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <h5 class="text-primary fw-bold mb-3 border-bottom pb-2">Quality &amp; Certifications</h5>
            <ul class="list-unstyled mb-0 small text-muted">
              <li class="mb-2"><strong>ISO Standards:</strong> ISO 9001, ISO 14001, ISO 13485</li>
              <li class="mb-2"><strong>Safety Compliance:</strong> CE and WHO-GMP</li>
              <li><strong>Warranty:</strong> 24-Month structural warranty</li>
            </ul>
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
      display: none !important; /* Chrome, Safari, Opera */
  }
  .scroll-behavior-smooth {
      scroll-behavior: smooth;
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

  <!-- 9️⃣ Product Catalogue Section -->
  <?php if (!empty($catalogue_images) || $pdf_file): ?>
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT CATALOGUE</h2>
        <p>Download our detailed Compact University Glove Box catalog containing model drawings, dimensions, standard utilities, and operational instructions.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-6 col-md-8">
          <div class="card border-0 shadow-lg rounded-4 p-4 text-center catalogue-card">
            <?php if (!empty($catalogue_images)): ?>
            <div class="catalogue-img-container mb-4 overflow-hidden rounded-3 shadow-sm bg-light p-3">
              <a href="<?php echo $catalogue_images[0]; ?>" class="glightbox" data-gallery="catalogue-gallery">
                <img src="<?php echo $catalogue_images[0]; ?>" loading="lazy" decoding="async" alt="Compact University Glove Box Catalog Cover" title="Product Catalogue Preview" class="img-fluid rounded" style="max-height: 400px; object-fit: contain;" width="600" height="800">
              </a>
            </div>
            <?php endif; ?>
            <h4 class="mb-3 text-primary fw-bold">Compact University Glove Box Brochure</h4>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <?php if (!empty($catalogue_images)): ?>
              <a href="<?php echo $catalogue_images[0]; ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-medium glightbox" data-gallery="catalogue-gallery-btn">
                <i class="bi bi-eye"></i> View Catalogue Preview
              </a>
              <?php endif; ?>
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
        <p>Get quick answers to common queries regarding academic laboratory containment systems.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What is a Compact University Glove Box?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A Compact University Glove Box is an airtight containment system designed for academic and laboratory research. Built using optically clear materials, it features integrated purging valves, a side transfer chamber, and safety filtration to provide a controlled draft-free atmosphere for moisture-sensitive and reactive materials.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  What is the difference between SG10 and SG20?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The primary difference lies in their capacity and dimensions. The BET810-SG10 is space-efficient with internal dimensions of 28"w x 23"d x 29"h, whereas the BET810-SG20 is a medium-capacity system measuring 35"w x 29"d x 30"h, providing a larger workspace.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  Which model is suitable for battery research?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  All models in the SG range are suitable depending on the equipment size. The BET810-SG30 is a popular choice for battery research because it features three glove ports, allowing improved operator accessibility for assembling coin cells, pouch cells, and handling reactive lithium materials.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  Can the glove box operate with Argon?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, the glove box is designed to operate with inert gases including Argon and Nitrogen. It features purging valves that allow the atmosphere to be fully purged and replaced with high-purity Argon gas.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                  Can it operate with Nitrogen?
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, Nitrogen is commonly used for cost-effective atmosphere control where Argon is not chemically required (e.g., standard moisture control, electronics assembly, and general chemical handling).
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                  What industries use this glove box?
                </button>
              </h2>
              <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  It is primarily used in university physics/chemistry labs, pharmaceutical weighing/compounding, electronics assembly, biotechnology research, semiconductor testing, and nanotechnology.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                  Can it be customized?
                </button>
              </h2>
              <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. As a custom laboratory equipment manufacturer, Burhani Engineering Technology can customize the dimensions, glove port numbers, electrical outlet types, and feedthrough ports to meet specific experimental needs.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                  What is the transfer chamber?
                </button>
              </h2>
              <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The side transfer chamber (antechamber) is a 12-inch cylindrical chamber equipped with purging valves and a vacuum gauge. It allows the safe transfer of tools, samples, and materials in and out of the main compartment without exposing the internal inert atmosphere to ambient air.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                  How does the HEPA filter work?
                </button>
              </h2>
              <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The glove box pressure relief valve is fitted with a compact HEPA filter canister. During pressure adjustments, gas passing through the relief valve is filtered, trapping airborne particulates and preventing contaminants from entering or escaping the enclosure.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                  Why choose BET?
                </button>
              </h2>
              <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Burhani Engineering Technology offers ISO-certified manufacturing quality, a robust 24-month structural warranty, completely sealed gas-saving designs, and customizable setups designed to fit academic budgets without compromising performance.
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
        <h2>Related Glove Box Categories</h2>
        <p>Explore our complete range of specialized atmospheric containment enclosures.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-wind fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'argon-gas-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Argon Gas Glove Box</a></h4>
            <p class="small text-muted mb-0">Closed-loop inert gas purification systems maintaining sub-1 ppm environment for active battery R&amp;D.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-box fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'Acrylic_Vacuum_Glove_Box'); ?>" class="text-decoration-none text-dark hover-accent">Acrylic Glove Box</a></h4>
            <p class="small text-muted mb-0">Optically clear acrylic containment enclosures for general vacuum and inert gas applications.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-shield fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box', 'Vacuum_GBMB'); ?>" class="text-decoration-none text-dark hover-accent">Metal Body Glove Box</a></h4>
            <p class="small text-muted mb-0">Heavy-duty stainless steel bodies designed for structural stability and high-purity isolation.</p>
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

  <!-- 11️⃣ CTA Section -->
  <section class="section py-5">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Need a Compact University Glove Box for Your Laboratory?</h2>
        <p class="mb-4">Consult our design engineers to select the ideal model or request a custom dimension configuration.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Request a Quote</a>
          <a href="https://wa.me/919677296252?text=Hello%20Burhani%20Engineering%20Technology,%20I%20am%20interested%20in%20a%20Compact%20University%20Glove%20Box." target="_blank" rel="noopener" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Contact Our Engineers</a>
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
