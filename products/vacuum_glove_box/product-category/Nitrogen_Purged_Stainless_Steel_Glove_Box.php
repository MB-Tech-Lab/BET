<?php
include_once(__DIR__ . '/../../../includes/config.php');

$product_name = "Nitrogen Purged Stainless Steel Glove Box";
$slug = "nitrogen-purged-stainless-steel-glove-box";
$image_dir_relative = "img/Glove Box/Nitrogen Purged Stainless Steel Glove Box Manufacturer Stainless Steel Controlled Atmosphere/";
$image_dir_absolute = __DIR__ . '/../../../assets/' . $image_dir_relative;

$images = [];

// Dynamically scan all product images
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

// Reorder: natural sort to handle 1, 2, 10 etc. correctly
usort($images, function($a, $b) {
    return strnatcasecmp($a, $b);
});

// Dynamically scan brochure catalogue PDF
$pdf_file       = null;
$pdf_name       = '';
$pdf_size_formatted = '';

$brochure_dir_name = "Nitrogen Purged Stainless Steel Glove Box Manufacturer Stainless Steel Controlled Atmosphere";
$brochure_dir_absolute = __DIR__ . '/../../../brochers/vacuum_glove_box/' . $brochure_dir_name . '/';

if (is_dir($brochure_dir_absolute)) {
    $b_files = scandir($brochure_dir_absolute);
    foreach ($b_files as $b_file) {
        if ($b_file !== '.' && $b_file !== '..') {
            if (strtolower(pathinfo($b_file, PATHINFO_EXTENSION)) === 'pdf') {
                $full_relative = 'brochers/vacuum_glove_box/' . $brochure_dir_name . '/' . $b_file;
                $encoded = implode('/', array_map('rawurlencode', explode('/', $full_relative)));
                $pdf_file = url($encoded);
                $pdf_name = $b_file;
                $abs_path = $brochure_dir_absolute . $b_file;
                if (file_exists($abs_path)) {
                    $bytes = filesize($abs_path);
                    if ($bytes >= 1048576) {
                        $pdf_size_formatted = number_format($bytes / 1048576, 2) . ' MB';
                    } elseif ($bytes >= 1024) {
                        $pdf_size_formatted = number_format($bytes / 1024, 2) . ' KB';
                    } else {
                        $pdf_size_formatted = $bytes . ' bytes';
                    }
                }
                break;
            }
        }
    }
}

// SEO Meta
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title       = "Nitrogen Purged Stainless Steel Glove Box Manufacturer in $city, $country | SS304 Controlled Atmosphere";
    $meta_description = "Buy SS304 Nitrogen Purged Stainless Steel Glove Box in $city, $country. Vacuum-compatible controlled atmosphere workstation by Burhani Engineering Technology.";
    $canonical_url    = product_category_url('vacuum_glove_box', 'nitrogen-purged-stainless-steel-glove-box');
} else {
    $meta_title       = "Nitrogen Purged Stainless Steel Glove Box Manufacturer | SS304 Controlled Atmosphere Workstation | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Nitrogen Purged SS304 Glove Boxes. Vacuum-compatible, positive pressure controlled atmosphere workstations for pharma, research, and semiconductor labs.";
    $canonical_url    = product_category_url('vacuum_glove_box', 'nitrogen-purged-stainless-steel-glove-box');
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
    {"@type":"ListItem","position":1,"name":"Home","item":"<?php echo url(''); ?>"},
    {"@type":"ListItem","position":2,"name":"Products","item":"<?php echo product_url('vacuum_glove_box'); ?>"},
    {"@type":"ListItem","position":3,"name":"Nitrogen Purged Stainless Steel Glove Box","item":"<?php echo $canonical_url; ?>"}
  ]
}
</script>

<!-- Product Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Nitrogen Purged Stainless Steel Glove Box – BET-GB/SS304",
  "image": "<?php echo !empty($images) ? $images[0] : asset('img/logo.svg'); ?>",
  "description": "<?php echo htmlspecialchars($meta_description); ?>",
  "brand": {"@type":"Brand","name":"Burhani Engineering Technology"},
  "manufacturer": {"@type":"Organization","name":"Burhani Engineering Technology"},
  "model": "BET-GB/SS304",
  "material": "SS304 Stainless Steel",
  "offers": {"@type":"AggregateOffer","priceCurrency":"INR"}
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
      "name": "What is a Nitrogen Purged Stainless Steel Glove Box?",
      "acceptedAnswer": {"@type":"Answer","text":"A Nitrogen Purged Stainless Steel Glove Box is a sealed, heavy-duty SS304 controlled-atmosphere workstation that uses nitrogen gas purging to displace oxygen and moisture inside the chamber. It enables safe handling of oxygen-sensitive, moisture-sensitive, or reactive materials in an inert environment."}
    },
    {
      "@type": "Question",
      "name": "Why is SS304 used for glove box construction?",
      "acceptedAnswer": {"@type":"Answer","text":"SS304 (Type 304 Stainless Steel) offers outstanding corrosion resistance, excellent chemical compatibility, low out-gassing properties, and superior structural strength. Unlike acrylic or polymer-based enclosures, SS304 does not absorb solvents or react with common laboratory reagents, ensuring a neutral, non-reactive work environment for decades."}
    },
    {
      "@type": "Question",
      "name": "How does nitrogen purging work in a glove box?",
      "acceptedAnswer": {"@type":"Answer","text":"Nitrogen gas is introduced through dedicated stainless steel purge valves, which displace ambient air containing oxygen and moisture. The lighter oxygen molecules are gradually replaced by inert nitrogen, bringing oxygen levels below 1 ppm and humidity to near-zero, creating a perfectly controlled inert atmosphere for reactive sample handling."}
    },
    {
      "@type": "Question",
      "name": "Can the BET-GB/SS304 operate with Argon gas?",
      "acceptedAnswer": {"@type":"Answer","text":"Yes. The BET-GB/SS304 is fully compatible with both nitrogen and argon atmospheres. Argon is preferred for highly reactive metals such as lithium, sodium, and alkali compounds where even nitrogen may react with the sample."}
    },
    {
      "@type": "Question",
      "name": "Is the BET-GB/SS304 vacuum compatible?",
      "acceptedAnswer": {"@type":"Answer","text":"Yes. The fully welded unitized SS304 construction, combined with heavy-duty neoprene gasketing and adjustable stainless steel clamping hardware, provides complete vacuum compatibility. The transfer chamber is also independently vacuum-compatible for contamination-free sample transfer."}
    },
    {
      "@type": "Question",
      "name": "What industries use this glove box?",
      "acceptedAnswer": {"@type":"Answer","text":"Key applications include pharmaceutical research, chemical processing, battery material handling, electronics assembly, semiconductor research, powder handling, moisture-sensitive material processing, anaerobic sample transfer, and academic and industrial laboratory research."}
    },
    {
      "@type": "Question",
      "name": "What are Hypalon gloves and why are they used?",
      "acceptedAnswer": {"@type":"Answer","text":"Hypalon (chlorosulfonated polyethylene) gloves offer exceptional chemical resistance to acids, bases, solvents, and oxidizing agents. They are ambidextrous for convenience, provide excellent dexterity, and maintain flexibility at low temperatures, making them the preferred glove material for demanding laboratory containment applications."}
    },
    {
      "@type": "Question",
      "name": "How is oxygen reduced inside the chamber?",
      "acceptedAnswer": {"@type":"Answer","text":"Oxygen is removed through repeated purge-and-backfill cycles using the four stainless steel purge valves. The chamber is evacuated and refilled with dry nitrogen or argon multiple times until oxygen levels reach less than 1 ppm, as confirmed with an optional inline oxygen monitor."}
    },
    {
      "@type": "Question",
      "name": "How does the transfer chamber work?",
      "acceptedAnswer": {"@type":"Answer","text":"The transparent cylindrical antechamber (305 mm × 280 mm) serves as an airlock between the atmosphere and the main workspace. Materials are placed inside, the outer door is sealed, the chamber is purged with inert gas, and then the inner door is opened, preventing atmospheric contamination of the main glove box during sample transfers."}
    },
    {
      "@type": "Question",
      "name": "Can humidity be controlled inside the glove box?",
      "acceptedAnswer": {"@type":"Answer","text":"Yes. Through continuous nitrogen purging, internal humidity can be reduced to near-zero. An optional digital humidity monitor accessory allows real-time display of relative humidity inside the chamber, and optional gas purification upgrades can reach sub-ppm moisture levels."}
    },
    {
      "@type": "Question",
      "name": "Can the BET-GB/SS304 be customized?",
      "acceptedAnswer": {"@type":"Answer","text":"Yes. Burhani Engineering Technology manufactures customized glove boxes including 4-port configurations, additional transfer chambers, rapid transfer ports, oxygen and humidity monitors, HEPA filtration, PLC automation, integrated vacuum pumps, LED data logging, and custom dimensional requirements."}
    },
    {
      "@type": "Question",
      "name": "What is the internal volume of the BET-GB/SS304?",
      "acceptedAnswer": {"@type":"Answer","text":"The BET-GB/SS304 has an internal chamber volume of 489 litres (17.3 ft³), with internal dimensions of 1020 mm (W) × 740 mm (D) × 690 mm (H), providing a spacious working area for complex laboratory setups and bulky equipment."}
    },
    {
      "@type": "Question",
      "name": "Is it suitable for pharmaceutical manufacturing?",
      "acceptedAnswer": {"@type":"Answer","text":"Yes. The SS304 construction, hospital-grade electrical outlets, controlled inert atmosphere, and airtight sealing system meet the requirements for pharmaceutical powder compounding, sterile transfer, and GMP-compliant research operations."}
    },
    {
      "@type": "Question",
      "name": "How are HEPA filters integrated?",
      "acceptedAnswer": {"@type":"Answer","text":"HEPA filtration is an optional accessory that can be installed on the gas inlet, ensuring that all purge gas entering the chamber is particle-free at H14 efficiency (99.995% at 0.3 microns). This is critical for semiconductor and pharmaceutical cleanroom applications."}
    },
    {
      "@type": "Question",
      "name": "What is the warranty and service support?",
      "acceptedAnswer": {"@type":"Answer","text":"Burhani Engineering Technology provides comprehensive after-sales service, on-site installation assistance, technical documentation, and spare parts availability for all BET-GB/SS304 series glove boxes supplied globally."}
    }
  ]
}
</script>

<main class="main">

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 1 ▸ HERO ━━ -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Nitrogen Purged Stainless Steel Glove Box Manufacturer</h1>
            <p class="mb-4">Heavy-Duty SS304 Controlled Atmosphere Workstations for Laboratory and Industrial Applications</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <?php if ($pdf_file): ?>
              <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-file-earmark-pdf"></i> Download Catalogue
              </a>
              <?php endif; ?>
              <a href="#contact" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color:#fff;border-color:#fff;">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 2 ▸ OVERVIEW ━━ -->
  <section class="section">
    <div class="container">



      <div class="row gy-4">
        <!-- Main content -->
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            <h2>Integrity™ SS304 Controlled Atmosphere Workstation – Model BET-GB/SS304</h2>
            <p>
              When laboratory procedures demand absolute atmosphere control, structural robustness, and decade-long reliability, the choice of enclosure material defines the quality of results. Burhani Engineering Technology introduces the <strong>Integrity™ Nitrogen Purged Stainless Steel Glove Box</strong> (Model: <strong>BET-GB/SS304</strong>), a heavy-duty controlled atmosphere workstation fabricated entirely from premium-grade Stainless Steel 304. Designed to serve pharmaceutical research, chemical processing, electronics assembly, material science, and semiconductor fabrication, this system represents the highest standard of professional-grade containment engineering.
            </p>
            <p>
              At the core of the BET-GB/SS304 is a fully welded, unitized stainless steel chamber that eliminates the out-gassing risks and chemical absorption concerns inherent in acrylic or polycarbonate enclosures. The welded construction delivers structural integrity under both positive pressure and vacuum conditions, allowing seamless switching between nitrogen purged, argon-filled, and vacuum-evacuated operating modes within a single enclosed system. This tri-mode operational flexibility makes the BET-GB/SS304 uniquely versatile among commercially available laboratory glove boxes.
            </p>
            <p>
              Nitrogen purging is achieved through four dedicated stainless steel purge valves positioned for optimal flow distribution across the working volume. When inert gas is introduced, the heavier nitrogen molecules displace ambient oxygen and moisture through repeated purge-and-backfill cycles. Within a standard purging sequence, internal oxygen levels drop below 1 ppm and internal humidity approaches near-zero — establishing a perfectly dry, oxygen-free controlled atmosphere. This environment is essential for handling lithium battery materials, reactive catalysts, pyrophoric reagents, ultra-dry pharmaceutical compounds, and high-purity semiconductor precursors.
            </p>
            <p>
              The <strong>SS304 Glove Box</strong> is also fully compatible with argon purging for applications where nitrogen reactivity with certain active metals, alkali compounds, or specialty chemicals poses a scientific concern. The same four-valve system handles both gas types without modification, making the BET-GB/SS304 adaptable to any inert atmosphere requirement.
            </p>
            <p>
              Sample transfer into and out of the controlled environment is handled by a transparent cylindrical antechamber measuring 305 mm in length and 280 mm in internal diameter. This purpose-designed airlock prevents atmospheric breakthrough during the transfer process — a critical operational requirement for contamination-sensitive workflows. The outer door is sealed before the antechamber is independently purged, and only once the atmosphere inside the antechamber is verified as inert is the inner door opened to access the main workspace.
            </p>
            <p>
              Operator ergonomics are addressed with a large front access panel that accommodates bulky laboratory equipment — chromatography setups, balance systems, or electrode fabrication rigs — without the limitations of a narrow entry. The two-port glove configuration uses ambidextrous white Hypalon gloves (254 mm diameter) that provide exceptional dexterity and outstanding chemical resistance against acids, bases, oxidizing agents, and organic solvents. An optional four-port configuration is available for multi-operator or dual-arm procedures.
            </p>
            <p>
              Visibility through the large safety glass viewing window ensures clear, undistorted observation of every process stage. A bright internal LED illumination system eliminates shadows across the 489-litre (17.3 ft³) workspace, enabling intricate procedures under all laboratory lighting conditions. A hospital-grade internal electrical outlet strip provides in-chamber power for hotplates, magnetic stirrers, balances, and other laboratory instruments without compromising chamber integrity.
            </p>
            <p>
              As a trusted <strong>Nitrogen Purged Stainless Steel Glove Box Manufacturer</strong> in India, Burhani Engineering Technology ensures every BET-GB/SS304 unit undergoes rigorous quality inspection, leak testing, and performance verification before dispatch. Custom variants are available with 4-port configurations, additional transfer chambers, rapid transfer ports (RTP), oxygen monitors, humidity monitors, PLC automation controllers, integrated vacuum pumps, and HEPA inlet filters.
            </p>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary">
            <h4 class="mb-4" style="color:var(--heading-color);font-weight:700;">Product Categories</h4>
            <div class="category-nav-list">
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box','Acrylic_Vacuum_Glove_Box'); ?>" class="category-link">
                  <span>Acrylic Vacuum Glove Box</span><i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box','Vacuum_GBMB'); ?>" class="category-link">
                  <span>Metal Body Glove Box</span><i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box','argon-gas-glove-box'); ?>" class="category-link">
                  <span>Argon Gas Glove Box</span><i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box','compact-university-glove-box'); ?>" class="category-link">
                  <span>Compact University Glove Box</span><i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box','globe-box-dome-360-glove-chamber'); ?>" class="category-link">
                  <span>Globe Box Dome 360° Chamber</span><i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item">
                <a href="<?php echo product_category_url('vacuum_glove_box','negative-pressure-glove-box'); ?>" class="category-link">
                  <span>Negative Pressure Glove Box</span><i class="bi bi-chevron-right"></i>
                </a>
              </div>
              <div class="category-nav-item active">
                <a href="<?php echo product_category_url('vacuum_glove_box','nitrogen-purged-stainless-steel-glove-box'); ?>" class="category-link">
                  <span>Nitrogen Purged Glove Box</span><i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /row -->
    </div>
  </section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 9 ▸ DYNAMIC GALLERY ━━ -->
  <?php
  function get_nitrogen_ss_caption(string $url): string {
      return pathinfo(urldecode(basename($url)), PATHINFO_FILENAME);
  }

  if (!empty($images)):
      $featured = $images[0];
  ?>
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUCT GALLERY</h2>
        <p>High-resolution images of the BET-GB/SS304 Nitrogen Purged Stainless Steel Glove Box series.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">

          <!-- Featured Image -->
          <div class="featured-image-container mb-4 text-center p-4 bg-white rounded-3 shadow-sm">
            <a href="<?php echo $featured; ?>" id="featured-image-link" class="glightbox" data-gallery="gallery-nitrogen">
              <img src="<?php echo $featured; ?>" id="featured-image-display" loading="lazy" decoding="async"
                   alt="Nitrogen Purged Stainless Steel Glove Box BET-GB/SS304"
                   title="BET-GB/SS304 Nitrogen Purged SS Glove Box"
                   class="img-fluid rounded"
                   style="max-height:500px;object-fit:contain;transition:opacity 0.2s ease;" width="800" height="600">
            </a>
            <div id="featured-image-caption" class="mt-3 fw-bold text-primary">
              <?php echo get_nitrogen_ss_caption($featured); ?>
            </div>
          </div>

          <!-- Thumbnail Carousel -->
          <div class="thumbnail-carousel-container position-relative px-4 mb-4">
            <button class="carousel-arrow carousel-arrow-left btn btn-light rounded-circle shadow-sm position-absolute start-0 top-50 translate-middle-y"
                    onclick="scrollThumbnails('left')" aria-label="Scroll left">
              <i class="bi bi-chevron-left"></i>
            </button>

            <div class="thumbnail-wrapper" id="thumbnailWrapper" style="overflow:hidden;width:100%;">
              <div class="thumbnail-row flex-nowrap py-2" id="thumbnailRow"
                   style="transition:transform 0.3s ease-out;display:flex;width:max-content;transform:translate3d(0px,0px,0px);">
                <?php foreach ($images as $idx => $img):
                    $cap   = get_nitrogen_ss_caption($img);
                    $active = ($idx === 0) ? 'active' : '';
                ?>
                <div class="col-auto thumbnail-col" style="padding:0 4px;">
                  <div class="thumbnail-card card p-2 border-0 shadow-sm text-center cursor-pointer <?php echo $active; ?>"
                       data-large-src="<?php echo $img; ?>"
                       data-caption="<?php echo htmlspecialchars($cap); ?>"
                       onclick="updateFeaturedImage(this, true)">
                    <div class="thumbnail-img-wrap mb-2">
                      <img src="<?php echo $img; ?>" loading="lazy" decoding="async"
                           alt="<?php echo htmlspecialchars($cap); ?>"
                           title="<?php echo htmlspecialchars($cap); ?>"
                           class="img-fluid rounded"
                           style="height:80px;object-fit:contain;width:120px;">
                    </div>
                    <div class="thumbnail-caption small text-muted text-truncate fw-medium"
                         style="max-width:120px;"
                         title="<?php echo htmlspecialchars($cap); ?>">
                      <?php echo htmlspecialchars($cap); ?>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>

            <button class="carousel-arrow carousel-arrow-right btn btn-light rounded-circle shadow-sm position-absolute end-0 top-50 translate-middle-y"
                    onclick="scrollThumbnails('right')" aria-label="Scroll right">
              <i class="bi bi-chevron-right"></i>
            </button>
          </div>

          <!-- Gallery footer -->
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
  (function () {
      let autoplayInterval, currentTranslate = 0, prevTranslate = 0, startX = 0, isDragging = false;

      function getCardWidth()    { const c = document.querySelector('.thumbnail-col'); return c ? c.offsetWidth + 0 : 144; }
      function getTrackWidth()   { const t = document.getElementById('thumbnailRow');    return t ? t.scrollWidth   : 0; }
      function getWrapperWidth() { const w = document.getElementById('thumbnailWrapper');return w ? w.clientWidth    : 0; }
      function getMaxTranslate() { const m = getTrackWidth() - getWrapperWidth(); return m > 0 ? -m : 0; }

      function setTranslate(v) {
          const t = document.getElementById('thumbnailRow');
          if (t) t.style.transform = `translate3d(${v}px,0,0)`;
          currentTranslate = v;
      }

      function stopAutoplay()  { if (autoplayInterval) clearInterval(autoplayInterval); }
      function startAutoplay() {
          stopAutoplay();
          autoplayInterval = setInterval(() => {
              const a = document.querySelector('.thumbnail-card.active');
              if (!a) return;
              let next = a.closest('.thumbnail-col').nextElementSibling;
              if (!next) next = document.querySelector('.thumbnail-col');
              if (next) { const c = next.querySelector('.thumbnail-card'); if (c) updateFeaturedImage(c, false); }
          }, 4000);
      }

      window.scrollThumbnails = function (dir) {
          stopAutoplay();
          const step = getCardWidth() * 2, min = getMaxTranslate();
          let t = currentTranslate + (dir === 'left' ? step : -step);
          t = Math.min(0, Math.max(min, t));
          const tr = document.getElementById('thumbnailRow');
          if (tr) tr.style.transition = 'transform 0.3s ease-out';
          setTranslate(t); prevTranslate = t;
      };

      window.updateFeaturedImage = function (el, manual) {
          if (manual) stopAutoplay();
          document.querySelectorAll('.thumbnail-card').forEach(c => c.classList.remove('active'));
          el.classList.add('active');

          const src  = el.getAttribute('data-large-src');
          const cap  = el.getAttribute('data-caption');
          const img  = document.getElementById('featured-image-display');
          const lnk  = document.getElementById('featured-image-link');
          const txt  = document.getElementById('featured-image-caption');

          img.style.opacity = '0';
          setTimeout(() => { img.src = src; lnk.href = src; txt.textContent = cap; img.style.opacity = '1'; }, 200);

          const col = el.closest('.thumbnail-col');
          if (col) {
              const cw = getCardWidth(), ww = getWrapperWidth();
              const idx = Array.from(col.parentNode.children).indexOf(col);
              let t = -(idx * cw) + ww / 2 - cw / 2;
              t = Math.min(0, Math.max(getMaxTranslate(), t));
              const tr = document.getElementById('thumbnailRow');
              if (tr) tr.style.transition = 'transform 0.3s ease-out';
              setTranslate(t); prevTranslate = t;
          }
      };

      document.addEventListener('DOMContentLoaded', () => {
          startAutoplay();
          const slider = document.getElementById('thumbnailWrapper');
          const track  = document.getElementById('thumbnailRow');
          if (!slider || !track) return;

          const posX = e => e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;

          slider.addEventListener('mousedown',  e => { isDragging = true; startX = posX(e); stopAutoplay(); track.style.transition = 'none'; slider.style.cursor = 'grabbing'; });
          window.addEventListener('mousemove',  e => {
              if (!isDragging) return;
              e.preventDefault();
              const diff = posX(e) - startX, min = getMaxTranslate();
              let t = prevTranslate + diff;
              if (t > 0) t = diff * 0.3; else if (t < min) t = min + (t - min) * 0.3;
              setTranslate(t);
          });
          window.addEventListener('mouseup',    () => { if (!isDragging) return; isDragging = false; slider.style.cursor = 'pointer'; snap(); });
          slider.addEventListener('touchstart', e => { isDragging = true; startX = posX(e); stopAutoplay(); track.style.transition = 'none'; }, {passive:true});
          slider.addEventListener('touchmove',  e => { if (!isDragging) return; const diff = posX(e) - startX, min = getMaxTranslate(); let t = prevTranslate + diff; if (t > 0) t = diff * 0.3; else if (t < min) t = min + (t - min) * 0.3; setTranslate(t); }, {passive:true});
          slider.addEventListener('touchend',   () => { if (!isDragging) return; isDragging = false; snap(); });
          slider.addEventListener('wheel',      e => {
              e.preventDefault(); stopAutoplay();
              const min = getMaxTranslate();
              let t = currentTranslate - Math.sign(e.deltaY) * getCardWidth();
              t = Math.min(0, Math.max(min, t));
              track.style.transition = 'transform 0.2s ease-out';
              setTranslate(t); prevTranslate = t;
          }, {passive:false});

          function snap() {
              track.style.transition = 'transform 0.3s ease-out';
              const min = getMaxTranslate();
              let t = currentTranslate;
              if (t > 0) t = 0; else if (t < min) t = min;
              else t = Math.round(t / getCardWidth()) * getCardWidth();
              setTranslate(t); prevTranslate = t;
          }
      });
  }());
  </script>



  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 3 ▸ KEY FEATURES ━━ -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Key Features of the BET-GB/SS304</h2>
        <p>Every component selected for maximum performance, durability, and laboratory compliance.</p>
      </div>
      <div class="row gy-4">
        <?php
        $features = [
            ['icon'=>'bi-shield-check',   'title'=>'Fully Welded SS304 Construction',  'desc'=>'Unitized heavy-duty stainless steel chamber with zero polymer out-gassing and superior structural integrity for both vacuum and positive pressure use.'],
            ['icon'=>'bi-eye',            'title'=>'Safety Glass Viewing Window',       'desc'=>'Crystal-clear safety glass viewing panel providing undistorted, wide-angle observation of all procedures inside the controlled workspace.'],
            ['icon'=>'bi-wind',           'title'=>'Controlled Nitrogen Atmosphere',    'desc'=>'Four dedicated SS purge valves establish a stable inert nitrogen atmosphere with oxygen levels below 1 ppm and near-zero humidity.'],
            ['icon'=>'bi-activity',       'title'=>'Vacuum Compatible Operation',       'desc'=>'Heavy-duty neoprene gasketing and stainless steel clamping hardware enable full vacuum evacuation for advanced sample processing workflows.'],
            ['icon'=>'bi-speedometer',    'title'=>'Positive Pressure System',          'desc'=>'Configurable positive pressure operation prevents ambient air ingress and maintains a clean inert workspace under all operating conditions.'],
            ['icon'=>'bi-box-arrow-right','title'=>'Transparent Transfer Chamber',      'desc'=>'305 mm × 280 mm transparent cylindrical antechamber with dual-door sealing for contamination-free sample introduction and removal.'],
            ['icon'=>'bi-hand-index-thumb','title'=>'White Hypalon Gloves',            'desc'=>'Ambidextrous 254 mm Hypalon gloves deliver excellent dexterity and broad chemical resistance to acids, solvents, and oxidizing agents.'],
            ['icon'=>'bi-plug',           'title'=>'Hospital Grade Electrical Outlet',  'desc'=>'Internal hospital-grade outlet strip provides safe, shielded in-chamber power for balances, stirrers, hotplates, and instruments.'],
            ['icon'=>'bi-door-open',      'title'=>'Large Front Access Panel',          'desc'=>'Oversized front door panel accommodates bulky laboratory equipment and complex multi-instrument setups without operational restrictions.'],
            ['icon'=>'bi-valve',          'title'=>'Four Stainless Steel Purge Valves', 'desc'=>'Optimally positioned valves ensure even gas distribution, efficient purging cycle completion, and rapid atmosphere changeover.'],
            ['icon'=>'bi-lightbulb',      'title'=>'Bright LED Illumination',           'desc'=>'High-lumen LED lighting eliminates internal shadows across the full 489-litre workspace for precision visual monitoring.'],
            ['icon'=>'bi-lock',           'title'=>'Leak Tight Construction',           'desc'=>'Precision engineered seals and clamping mechanisms deliver continuous gas-tight containment under all operational conditions.'],
        ];
        foreach ($features as $i => $f): $delay = ($i % 3 + 1) * 100; ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <i class="<?php echo $f['icon']; ?> fs-2 text-primary mb-3"></i>
            <h4 class="text-primary mb-2"><?php echo $f['title']; ?></h4>
            <p class="small text-muted mb-0"><?php echo $f['desc']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 4 ▸ WHY CHOOSE BET ━━ -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Why Choose BET Stainless Steel Glove Boxes</h2>
        <p>Precision engineering and reliable manufacturing, backed by decades of laboratory equipment expertise.</p>
      </div>
      <div class="row gy-4">
        <?php
        $reasons = [
            ['title'=>'Precision Engineering',    'desc'=>'Every BET-GB/SS304 is machined and welded to exacting tolerances, ensuring gas-tight structural integrity from day one.'],
            ['title'=>'Corrosion Resistant',      'desc'=>'SS304 construction provides outstanding resistance to oxidising chemicals, cleaning solvents, and laboratory reagents.'],
            ['title'=>'Controlled Atmosphere',    'desc'=>'Reliable nitrogen purging reaches &lt;1 ppm oxygen within standard cycle times, suitable for the most reactive materials.'],
            ['title'=>'Chemical Resistant',       'desc'=>'The internal stainless steel surfaces resist staining, etching, and absorption from strong acids, alkalis, and organic solvents.'],
            ['title'=>'Vacuum Ready',             'desc'=>'The sealed construction accommodates full vacuum evacuation without structural deformation or seal failure.'],
            ['title'=>'Long Service Life',        'desc'=>'Stainless steel construction outlasts polymer alternatives by decades, delivering superior return on investment.'],
            ['title'=>'Reliable Performance',     'desc'=>'Tested under demanding laboratory conditions before delivery. Every system is verified for leak-tightness and vacuum performance.'],
            ['title'=>'Industrial Grade Build',   'desc'=>'Designed for continuous daily operation in pharmaceutical GMP environments, industrial R&amp;D, and academic research facilities.'],
            ['title'=>'Easy Maintenance',         'desc'=>'Smooth electropolished internal surfaces, accessible filter ports, and replaceable seals minimise maintenance time and cost.'],
            ['title'=>'Custom Configurations',    'desc'=>'Burhani Engineering Technology tailors dimensions, glove ports, transfer chambers, and accessories to your exact requirements.'],
        ];
        foreach ($reasons as $i => $r): $delay = ($i % 3 + 1) * 100; ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
          <div class="card p-4 h-100 border-0 shadow-sm transition-card">
            <h4 class="text-primary mb-2"><?php echo $r['title']; ?></h4>
            <p class="small text-muted mb-0"><?php echo $r['desc']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 5 ▸ WORKING PRINCIPLE ━━ -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Working Principle</h2>
        <p>How the BET-GB/SS304 creates and maintains a controlled inert atmosphere.</p>
      </div>
      <div class="row gy-4">
        <?php
        $steps = [
            ['step'=>'01','title'=>'Chamber Sealing',        'desc'=>'The main chamber door and all utility ports are closed and clamped using adjustable stainless steel hardware with neoprene gasketing, creating an airtight enclosure.'],
            ['step'=>'02','title'=>'Initial Evacuation',     'desc'=>'An external vacuum pump (optional) evacuates residual atmospheric air from the chamber, reducing the baseline oxygen and moisture loading significantly before purging.'],
            ['step'=>'03','title'=>'Nitrogen Purging',       'desc'=>'Dry nitrogen gas is introduced through the four stainless steel purge valves, flooding the workspace with inert gas. Repeated purge-backfill cycles reduce oxygen to below 1 ppm.'],
            ['step'=>'04','title'=>'Atmosphere Verification','desc'=>'An optional inline oxygen monitor and humidity sensor verify that the controlled atmosphere meets the required thresholds before sample handling commences.'],
            ['step'=>'05','title'=>'Transfer Chamber Airlock','desc'=>'Samples are introduced through the antechamber airlock. The external door is sealed, the antechamber is independently purged to match the main chamber atmosphere, then the inner door is opened.'],
            ['step'=>'06','title'=>'Positive Pressure Hold', 'desc'=>'During operation, a slight positive pressure differential is maintained to prevent atmospheric ingress through any micro-leaks, ensuring sustained containment throughout the workflow.'],
        ];
        foreach ($steps as $i => $s): $delay = ($i % 3 + 1) * 100; ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
          <div class="p-4 bg-white rounded shadow-sm h-100 border-top border-3 border-primary">
            <div class="fw-bold text-primary fs-4 mb-2"><?php echo $s['step']; ?></div>
            <h5 class="fw-bold mb-2"><?php echo $s['title']; ?></h5>
            <p class="small text-muted mb-0"><?php echo $s['desc']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 6 ▸ APPLICATIONS ━━ -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Industry Applications</h2>
        <p>Delivering controlled atmosphere containment across the most demanding scientific and industrial sectors.</p>
      </div>
      <div class="row gy-4">
        <?php
        $apps = [
            ['icon'=>'bi-capsule',           'title'=>'Pharmaceutical Research',      'desc'=>'GMP-compliant compounding, powder weighing, and sterile transfer of active pharmaceutical ingredients.'],
            ['icon'=>'bi-flask',             'title'=>'Chemical Processing',          'desc'=>'Synthesis and storage of moisture-sensitive reagents, pyrophoric compounds, and reactive catalysts.'],
            ['icon'=>'bi-battery-charging',  'title'=>'Battery Material Handling',    'desc'=>'Electrode fabrication, electrolyte compounding, and cell assembly for lithium-ion battery research.'],
            ['icon'=>'bi-cpu',               'title'=>'Electronics Assembly',         'desc'=>'Precision soldering, component handling, and encapsulation in dry, inert, particle-controlled environments.'],
            ['icon'=>'bi-diagram-3',         'title'=>'Semiconductor Research',       'desc'=>'Wafer handling, thin-film deposition preparation, and semiconductor surface treatment in ultra-dry atmospheres.'],
            ['icon'=>'bi-snow',              'title'=>'Powder Handling',              'desc'=>'Safe processing of nanomaterials, metal powders, reactive fine powders, and toxic particulate compounds.'],
            ['icon'=>'bi-droplet-half',      'title'=>'Moisture-Sensitive Materials', 'desc'=>'Handling of hygroscopic chemicals, anhydrous solvents, and air-sensitive organometallic compounds.'],
            ['icon'=>'bi-arrow-left-right',  'title'=>'Anaerobic Sample Transfer',   'desc'=>'Contamination-free transfer of anaerobic cultures, biological samples, and oxygen-sensitive specimens.'],
            ['icon'=>'bi-mortarboard',       'title'=>'Academic Laboratories',        'desc'=>'University research applications requiring inert atmosphere conditions for chemistry, materials, and physics.'],
            ['icon'=>'bi-building',          'title'=>'Industrial Laboratories',      'desc'=>'Quality assurance, failure analysis, process development, and industrial R&amp;D in controlled environments.'],
            ['icon'=>'bi-check2-circle',     'title'=>'Quality Control',             'desc'=>'Testing and verification of raw materials and finished products under standardised inert atmosphere conditions.'],
            ['icon'=>'bi-gem',               'title'=>'Material Science',             'desc'=>'Crystal growth, thin film preparation, and characterisation of air-sensitive materials and alloy specimens.'],
        ];
        foreach ($apps as $i => $a): $delay = ($i % 4 + 1) * 100; ?>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
          <div class="card p-3 h-100 border-0 shadow-sm text-center">
            <i class="<?php echo $a['icon']; ?> fs-2 text-primary mb-2"></i>
            <h5 class="fw-bold mb-2"><?php echo $a['title']; ?></h5>
            <p class="small text-muted mb-0"><?php echo $a['desc']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 7 ▸ TECHNICAL SPECIFICATIONS ━━ -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Technical Specifications – BET-GB/SS304</h2>
        <p>Detailed engineering parameters for the Integrity™ Stainless Steel Glove Box.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="table-responsive shadow-sm rounded">
            <table class="table table-hover mb-0 bg-white">
              <thead>
                <tr>
                  <th class="py-3 px-4" style="background-color:var(--heading-color);color:#fff;width:38%;">Parameter</th>
                  <th class="py-3 px-4" style="background-color:var(--heading-color);color:#fff;">Specification</th>
                </tr>
              </thead>
              <tbody>
                <tr><td class="py-3 px-4 fw-medium">Model Number</td><td class="py-3 px-4">BET-GB/SS304</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Construction Material</td><td class="py-3 px-4">Stainless Steel 304 — Fully Welded Unitized Construction</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Viewing Window</td><td class="py-3 px-4">Safety Glass Viewing Panel</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Glove Configuration</td><td class="py-3 px-4">2-Port Standard; Optional 4-Port Configuration</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Glove Material</td><td class="py-3 px-4">Ambidextrous White Hypalon</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Glove Port Diameter</td><td class="py-3 px-4">254 mm (10&quot;)</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Transfer Chamber</td><td class="py-3 px-4">Transparent Cylindrical — 305 mm Length × 280 mm Internal Diameter</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Internal Dimensions</td><td class="py-3 px-4">1020 mm (W) × 740 mm (D) × 690 mm (H)</td></tr>
                <tr><td class="py-3 px-4 fw-medium">External Dimensions</td><td class="py-3 px-4">1350 mm (W) × 765 mm (D) × 864 mm (H)</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Chamber Volume</td><td class="py-3 px-4">489 Litres (17.3 ft³)</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Approximate Weight</td><td class="py-3 px-4">125 kg</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Pressure Control</td><td class="py-3 px-4">Vacuum Compatible; Controlled Positive Pressure Operation</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Purge System</td><td class="py-3 px-4">Four Stainless Steel Purge Valves — Nitrogen / Argon Compatible</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Sealing System</td><td class="py-3 px-4">Heavy-Duty Neoprene Gasketing + Adjustable SS Clamping Hardware</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Electrical Supply</td><td class="py-3 px-4">230 VAC, 50 Hz — Internal Hospital-Grade Outlet Strip</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Illumination</td><td class="py-3 px-4">Bright Internal LED Lighting System</td></tr>
                <tr><td class="py-3 px-4 fw-medium">Customization</td><td class="py-3 px-4">4-Port, Additional Transfer Chambers, RTP, Oxygen Monitor, HEPA Filters</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 8 ▸ OPTIONAL ACCESSORIES ━━ -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Optional Accessories</h2>
        <p>Extend the capability of your BET-GB/SS304 with purpose-built add-ons.</p>
      </div>
      <div class="row gy-4">
        <?php
        $accessories = [
            ['icon'=>'bi-filter-circle',   'title'=>'HEPA Inlet Filtration',      'desc'=>'H14 HEPA filter on the gas inlet ensures particle-free atmosphere at 99.995% efficiency — critical for semiconductor and pharmaceutical applications.'],
            ['icon'=>'bi-box-arrow-right', 'title'=>'Additional Transfer Chamber','desc'=>'A second antechamber allows separate inlet and outlet material flow, reducing purge cycle overhead in high-throughput workflows.'],
            ['icon'=>'bi-circle-square',   'title'=>'Rapid Transfer Port (RTP)',  'desc'=>'ISO-standard RTP flanges enable rapid contamination-free connections with compatible containers and other glove box systems.'],
            ['icon'=>'bi-graph-up',        'title'=>'Oxygen Monitor',             'desc'=>'Digital in-line oxygen sensor displays real-time O₂ concentration (ppm) inside the chamber with audible high-O₂ alarm capability.'],
            ['icon'=>'bi-moisture',        'title'=>'Humidity Monitor',           'desc'=>'Precision digital hygrometer with continuous display of internal dew point and relative humidity for moisture-critical processes.'],
            ['icon'=>'bi-sliders',         'title'=>'PLC Automation Control',     'desc'=>'Programmable controller automates purge cycles, pressure regulation, alarm management, and data logging via touchscreen interface.'],
            ['icon'=>'bi-tools',           'title'=>'Integrated Vacuum Pump',     'desc'=>'Factory-installed oil-free or rotary-vane vacuum pump with isolation valves for rapid chamber evacuation without external equipment.'],
            ['icon'=>'bi-wind',            'title'=>'Gas Purification System',    'desc'=>'Inline molecular sieve or catalytic purifier columns reduce O₂ and H₂O to sub-ppm levels in a fully recirculating closed-loop setup.'],
            ['icon'=>'bi-lightbulb',       'title'=>'Enhanced LED Lighting',      'desc'=>'High-CRI LED strip upgrade for colour-accurate, shadow-free illumination of critical inspection and synthesis procedures.'],
            ['icon'=>'bi-database',        'title'=>'Data Logging Module',        'desc'=>'USB / Ethernet data logging of pressure, O₂, humidity, temperature, and event timestamps for GMP compliance records.'],
        ];
        foreach ($accessories as $i => $a): $delay = ($i % 3 + 1) * 100; ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
          <div class="d-flex align-items-start gap-3 p-3 bg-light rounded shadow-sm h-100">
            <i class="<?php echo $a['icon']; ?> text-primary fs-3"></i>
            <div>
              <h5 class="fw-bold mb-1"><?php echo $a['title']; ?></h5>
              <p class="small text-muted mb-0"><?php echo $a['desc']; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 
  <?php endif; ?>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 10 ▸ CATALOGUE ━━ -->
  <?php if ($pdf_file): ?>
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Product Catalogue</h2>
        <p>Download the complete BET-GB/SS304 technical brochure including specifications, drawings, and application notes.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-6 col-md-8">
          <div class="card border-0 shadow-lg rounded-4 p-4 text-center catalogue-card">
            <i class="bi bi-file-earmark-pdf text-danger fs-1 mb-3"></i>
            <h4 class="mb-3 text-primary fw-bold">Nitrogen Purged Stainless Steel Glove Box Brochure</h4>
            <div class="p-3 bg-light rounded mb-4 text-start border-start border-3 border-primary">
              <p class="mb-2 small text-muted"><strong>File Name:</strong> <?php echo htmlspecialchars($pdf_name); ?></p>
              <?php if ($pdf_size_formatted): ?>
              <p class="mb-0 small text-muted"><strong>File Size:</strong> <?php echo htmlspecialchars($pdf_size_formatted); ?></p>
              <?php endif; ?>
            </div>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-medium">
                <i class="bi bi-eye"></i> View Catalogue
              </a>
              <a href="<?php echo $pdf_file; ?>" download class="btn btn-primary px-4 py-2 rounded-pill fw-medium">
                <i class="bi bi-download"></i> Download Catalogue
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 11 ▸ FAQs ━━ -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Technical and commercial answers about the BET-GB/SS304 Nitrogen Purged Stainless Steel Glove Box.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
            <?php
            $faqs = [
                ['q'=>'What is a Nitrogen Purged Stainless Steel Glove Box?',
                 'a'=>'A Nitrogen Purged Stainless Steel Glove Box is a sealed, heavy-duty SS304 controlled-atmosphere workstation that uses nitrogen gas purging to displace oxygen and moisture inside the chamber. It enables safe handling of oxygen-sensitive, moisture-sensitive, or reactive materials in a stable inert environment.'],
                ['q'=>'Why is SS304 used for glove box construction?',
                 'a'=>'SS304 offers outstanding corrosion resistance, excellent chemical compatibility, zero out-gassing, and superior structural strength compared to acrylic or polymer-based enclosures. This makes it ideal for long-term use in demanding laboratory and industrial environments.'],
                ['q'=>'How does nitrogen purging work?',
                 'a'=>'Nitrogen gas is introduced through four stainless steel purge valves. Repeated purge-backfill cycles displace ambient oxygen and moisture until internal O₂ levels drop below 1 ppm and humidity approaches near-zero, creating a perfectly inert controlled atmosphere.'],
                ['q'=>'Can the BET-GB/SS304 operate with Argon gas?',
                 'a'=>'Yes. The BET-GB/SS304 is fully compatible with both nitrogen and argon atmospheres. Argon is often preferred for highly reactive metals such as lithium, sodium, and alkali-metal compounds where even nitrogen may react with the sample.'],
                ['q'=>'Is the BET-GB/SS304 vacuum compatible?',
                 'a'=>'Yes. The fully welded construction, heavy-duty neoprene gasketing, and adjustable stainless steel clamping hardware provide complete vacuum compatibility for both the main chamber and the transfer antechamber.'],
                ['q'=>'What industries use this glove box?',
                 'a'=>'Key industries include pharmaceutical research, chemical processing, battery material handling, electronics assembly, semiconductor research, powder handling, moisture-sensitive material processing, anaerobic sample transfer, and academic and industrial laboratory research.'],
                ['q'=>'What are Hypalon gloves and why are they used?',
                 'a'=>'Hypalon gloves offer exceptional resistance to acids, bases, solvents, and oxidising agents. They are ambidextrous, highly dexterous, and maintain flexibility at low temperatures — making them the preferred choice for demanding laboratory containment applications.'],
                ['q'=>'How is oxygen reduced inside the chamber?',
                 'a'=>'Oxygen is removed through repeated purge-and-backfill cycles using the four stainless steel purge valves. The chamber is evacuated and refilled with dry nitrogen or argon multiple times until oxygen levels reach below 1 ppm, confirmed with an optional inline oxygen monitor.'],
                ['q'=>'How does the transfer chamber work?',
                 'a'=>'The 305 mm × 280 mm transparent antechamber serves as an airlock. Materials are placed inside, the outer door sealed, the antechamber independently purged to match the main chamber atmosphere, and only then is the inner door opened — preventing any contamination of the main workspace.'],
                ['q'=>'Can humidity be controlled inside the glove box?',
                 'a'=>'Yes. Through continuous nitrogen purging, internal humidity is reduced to near-zero. An optional digital humidity monitor accessory allows real-time display, and a gas purification upgrade can achieve sub-ppm moisture levels.'],
                ['q'=>'Can the BET-GB/SS304 be customised?',
                 'a'=>'Yes. Burhani Engineering Technology manufactures customised configurations including 4-port setups, additional transfer chambers, rapid transfer ports, oxygen monitors, humidity monitors, HEPA filtration, PLC automation, integrated vacuum pumps, and custom dimensional requirements.'],
                ['q'=>'What is the internal volume of the BET-GB/SS304?',
                 'a'=>'The BET-GB/SS304 has an internal chamber volume of 489 litres (17.3 ft³) with internal dimensions of 1020 mm (W) × 740 mm (D) × 690 mm (H), providing ample space for complex laboratory setups and bulky instruments.'],
                ['q'=>'Is it suitable for pharmaceutical manufacturing?',
                 'a'=>'Yes. The SS304 construction, hospital-grade electrical outlets, controlled inert atmosphere, and airtight sealing system meet the requirements for pharmaceutical powder compounding, sterile transfer, and GMP-compliant research operations.'],
                ['q'=>'How often should seals and filters be replaced?',
                 'a'=>'Neoprene door gaskets should be inspected every 6 months and replaced if signs of compression set or cracking appear. HEPA inlet filters (if fitted) should be replaced annually or when the pressure drop across the filter exceeds the rated threshold.'],
                ['q'=>'Does BET provide installation and training support?',
                 'a'=>'Yes. Burhani Engineering Technology provides comprehensive after-sales support including on-site installation assistance, operational training, technical documentation, and global spare parts availability for all BET-GB/SS304 series glove boxes.'],
            ];
            foreach ($faqs as $i => $faq): $id = 'nsfaq' . ($i + 1); ?>
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>">
                  <?php echo htmlspecialchars($faq['q']); ?>
                </button>
              </h2>
              <div id="<?php echo $id; ?>" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body"><?php echo $faq['a']; ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 12 ▸ RELATED PRODUCTS ━━ -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Related Glove Box Enclosures</h2>
        <p>Explore our complete range of laboratory isolation and controlled atmosphere workstations.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-wind fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box','argon-gas-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Argon Gas Glove Box</a></h4>
            <p class="small text-muted mb-0">Closed-loop inert gas recirculation systems with sub-1 ppm O₂/H₂O control for advanced battery research.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-mortarboard fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box','compact-university-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Compact University Glove Box</a></h4>
            <p class="small text-muted mb-0">Space-saving glove boxes with integrated transfer chambers for academic and R&amp;D labs.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-shield-lock fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box','negative-pressure-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Negative Pressure Glove Box</a></h4>
            <p class="small text-muted mb-0">HEPA-filtered containment chambers for hazardous powder and biological agent handling.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-globe fs-2 text-primary mb-3"></i>
            <h4><a href="<?php echo product_category_url('vacuum_glove_box','globe-box-dome-360-glove-chamber'); ?>" class="text-decoration-none text-dark hover-accent">Globe Box Dome 360°</a></h4>
            <p class="small text-muted mb-0">Transparent spherical PMMA isolation chambers offering seamless 360° panoramic visibility.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ 13 ▸ CTA ━━ -->
  <section class="section py-5">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Ready to Order the BET-GB/SS304?</h2>
        <p class="mb-4">Speak to our engineers for custom dimensions, optional accessories, and delivery timeline.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Request a Quote</a>
          <a href="https://wa.me/919677296252?text=Hello%20Burhani%20Engineering%20Technology%2C%20I%20am%20interested%20in%20the%20BET-GB%2FSS304%20Nitrogen%20Purged%20Stainless%20Steel%20Glove%20Box."
             target="_blank" rel="noopener"
             class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Contact Our Engineers</a>
        </div>
      </div>
    </div>
  </section>

</main><!-- /main -->

<style>
/* ── Page-specific styles ── */
.page-title .heading   { background-color:var(--heading-color);padding:80px 0;color:#fff; }
.page-title h1         { color:#fff;font-weight:700;margin-bottom:20px; }
.page-title p          { font-size:1.25rem;opacity:.9; }

.sidebar-box           { position:sticky;top:100px;z-index:10; }
.category-nav-list     { display:flex;flex-direction:column;gap:10px; }
.category-nav-item     { transition:all .3s cubic-bezier(.4,0,.2,1);border-radius:8px;border:1px solid #f1f3f5;background:#fdfdfd; }
.category-nav-item:hover { background:#f8f9fa;border-color:var(--accent-color);transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.05); }
.category-nav-item.active { background:linear-gradient(135deg,var(--accent-color),color-mix(in srgb,var(--accent-color),black 10%));border-color:var(--accent-color);box-shadow:0 4px 15px rgba(0,0,0,.1); }
.category-nav-item .category-link { display:flex;align-items:center;justify-content:space-between;padding:14px 18px;font-weight:600;font-size:.95rem;color:var(--heading-color)!important;text-decoration:none;width:100%; }
.category-nav-item.active .category-link { color:#fff!important; }
.category-nav-item .category-link i.bi-chevron-right { font-size:.8rem;transition:transform .3s ease;color:var(--accent-color)!important; }
.category-nav-item.active .category-link i.bi-chevron-right { color:#fff!important; }
.category-nav-item:hover .category-link i.bi-chevron-right { transform:translateX(4px); }
.transition-card       { transition:all .3s cubic-bezier(.4,0,.2,1); }
.transition-card:hover { transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,.10)!important; }
.hover-accent:hover    { color:var(--accent-color)!important; }
.accordion-button:not(.collapsed) { background-color:color-mix(in srgb,var(--accent-color),white 90%);color:var(--heading-color);box-shadow:none; }
.accordion-button:focus { box-shadow:none; }
.catalogue-card        { transition:all .3s cubic-bezier(.4,0,.2,1);border-top:4px solid var(--accent-color)!important; }
.catalogue-card:hover  { transform:translateY(-5px);box-shadow:0 15px 40px rgba(0,0,0,.1)!important; }
/* Gallery */
.featured-image-container { border:1px solid #f1f3f5;background:#fff;overflow:hidden; }
.featured-image-container img { max-width:100%;height:auto;display:block;margin:0 auto; }
.cursor-pointer          { cursor:pointer; }
.thumbnail-carousel-container { user-select:none; }
.thumbnail-wrapper       { overflow-x:hidden!important;overflow-y:hidden;scrollbar-width:none!important;-ms-overflow-style:none!important; }
.thumbnail-wrapper::-webkit-scrollbar { display:none!important; }
.carousel-arrow          { width:32px;height:32px;display:flex;align-items:center;justify-content:center;z-index:5;border:1px solid #e9ecef;background:#fff;color:var(--heading-color);transition:all .2s ease;padding:0; }
.carousel-arrow:hover    { background:var(--accent-color);color:#fff;border-color:var(--accent-color); }
.thumbnail-card          { border:2px solid transparent!important;transition:all .3s cubic-bezier(.4,0,.2,1);background:#fff;min-width:136px; }
.thumbnail-card:hover    { border-color:color-mix(in srgb,var(--accent-color),transparent 50%)!important;transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.08)!important; }
.thumbnail-card.active   { border-color:var(--accent-color)!important;box-shadow:0 0 10px rgba(13,110,253,.15)!important;background:#f8f9fa; }
.thumbnail-card.active .thumbnail-caption { color:var(--accent-color)!important;font-weight:700; }
.thumbnail-img-wrap      { overflow:hidden;border-radius:4px;background:#f8f9fa; }
@media (max-width:991px) { .sidebar-box { position:static;margin-top:20px; } }
</style>

<?php require_once __DIR__ . '/../../../includes/footer.php'; ?>
