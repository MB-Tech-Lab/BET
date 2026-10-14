<?php
/**
 * Dynamic Location-Product Template
 * Burhani Engineering Technology
 */

// Verify variables exist, otherwise fallback
if (!isset($city)) $city = 'Chennai';
if (!isset($country)) $country = 'India';
if (!isset($continent)) $continent = 'Asia';
if (!isset($hero_gradient)) $hero_gradient = 'linear-gradient(135deg, #0B2545 0%, #134074 100%)';

// Catalog product slug variable $product_slug is passed from the router
require_once ABSPATH . 'includes/product-catalog.php';
$catalog = get_product_catalog();
$product = $catalog[$product_slug] ?? null;

if (!$product) {
    header("HTTP/1.0 404 Not Found");
    exit('Product not found in catalog.');
}

$product_name = $product['name'];
$product_key = $product['key'];
$local_p_data = $products[$product_key] ?? null;

if ($product_slug === 'sealing-testing-chamber' || $product_key === 'sealing-testing-chamber') {
    require ABSPATH . 'products/sealing-testing-chamber/sealing_testing_chamber.php';
    return;
}

// Fallback to custom title/descriptions if not defined in the city file
$page_title = $local_p_data['title'] ?? "$product_name in $city, $country";
$description_paragraphs = $local_p_data['desc'] ?? [
    "Burhani Engineering Technology is a premier manufacturer, supplier, and exporter of high-precision $product_name systems serving industrial operations in $city, $country.",
    "Engineered to meet international quality control standards, our $product_name equipment delivers reliable performance, durability, and accurate measurements for critical quality assurance tests.",
    "As a leading dealer and importer, we supply state-of-the-art laboratory and factory-floor testing solutions to industries throughout $city and surrounding zones."
];

// Set dynamic meta tags
$meta_title = "$product_name Manufacturer in $city, $country | Burhani Engineering Technology";
$meta_description = "Looking for a high-quality $product_name in $city, $country? Burhani Engineering Technology is a leading manufacturer and supplier serving $city's industrial zones.";
$canonical_url = product_url($product_slug);

// Internal Linking URLs — use location-aware product_url() so back buttons respect location context
$_cont_s = normalize_route_path($continent);
$_coun_s = normalize_route_path($country);
$_city_s = normalize_route_path($city);
$product_page_url = product_url($product_slug);
$city_page_url    = url("locations/{$_cont_s}/{$_coun_s}/{$_city_s}/");

// Industries list based on location
$local_industries = [];
if (strcasecmp($city, 'Chennai') === 0 || strcasecmp($country, 'India') === 0) {
    $local_industries = ['Automotive Manufacturing', 'Electronics Assembly', 'Chemical Research', 'Aerospace Engineering'];
} elseif (strcasecmp($city, 'Singapore') === 0) {
    $local_industries = ['Advanced Semiconductor Fab', 'Biotech Laboratories', 'Precision Instruments', 'Aerospace Engineering'];
} elseif (strcasecmp($city, 'Shanghai') === 0 || strcasecmp($country, 'China') === 0) {
    $local_industries = ['Lithium-ion Battery Gigafactories', 'Consumer Electronics', 'Heavy Machinery', 'Automated Assembly Lines'];
} else {
    $local_industries = ['Industrial Manufacturing', 'Research Laboratories', 'Quality Assurance Hubs', 'Material Testing Centers'];
}

// Renders header
require_once ABSPATH . 'includes/header.php';
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<?php if ($product_key === 'vc20'): ?>
<style>
  /* Premium VC20 Layout Tweaks */
  .vc20-hero {
    background: linear-gradient(135deg, #1a2a4a 0%, #0d1b2e 60%, #1a3a5c 100%);
    color: #fff;
    padding: 60px 0;
    position: relative;
    overflow: hidden;
  }
  .vc20-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    opacity: 0.4;
    pointer-events: none;
  }
  .vc20-hero h1 {
    font-size: 2.2rem;
    font-weight: 800;
    line-height: 1.2;
    color: #ffffff !important;
    margin-bottom: 15px;
  }
  .vc20-hero p {
    color: rgba(255,255,255,0.85);
    font-size: 1.05rem;
    line-height: 1.6;
  }
  .vc20-hero .badge-standard {
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.2);
    color: #fff;
    padding: 4px 12px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    display: inline-block;
  }
  .vc20-hero .hero-bullets {
    margin-top: 20px;
    padding-left: 0;
    list-style: none;
  }
  .vc20-hero .hero-bullets li {
    margin-bottom: 10px;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .vc20-hero .hero-bullets i {
    color: var(--accent-color);
  }
  .vc20-hero .btn-primary:hover {
    background: #00bcd4 !important;
    color: #ffffff !important;
    border-color: #00bcd4 !important;
  }
  .vc20-hero .btn-outline-light {
    color: #ffffff !important;
    border: 1px solid #ffffff !important;
  }
  .vc20-hero .btn-outline-light:hover {
    background: #0ea5c6 !important;
    color: #ffffff !important;
    border-color: #0ea5c6 !important;
  }
  .vc20-container {
    max-width: 1200px;
    width: 100%;
    margin: auto;
    padding: 0 15px;
    position: relative;
    z-index: 10;
  }
  .section-padding {
    padding: 40px 0;
  }
  .feature-icon-card {
    background: #fff;
    border: 1px solid #eaecf0;
    border-radius: 12px;
    padding: 24px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    border-top: 3px solid transparent;
  }
  .feature-icon-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    border-top-color: var(--accent-color);
  }
  .feature-icon-card .icon-box {
    width: 60px;
    height: 60px;
    background: #f0f7ff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
  }
  .feature-icon-card .icon-box i {
    font-size: 1.5rem;
    color: var(--accent-color);
  }
  .feature-icon-card h5 {
    font-weight: 700;
    color: var(--heading-color);
    margin-bottom: 8px;
    font-size: 1.1rem;
  }
  .feature-icon-card p {
    font-size: 0.88rem;
    color: #6b7280;
    margin-bottom: 0;
    line-height: 1.5;
  }
  .gallery-main-img {
    width: 100%;
    height: 400px;
    object-fit: contain;
    border-radius: 12px;
    background: #f8f9fa;
    border: 1px solid #eaecf0;
    padding: 20px;
  }
  .thumb-container {
    display: flex;
    gap: 10px;
    overflow-x: auto;
    padding: 10px 0;
    scrollbar-width: thin;
  }
  .thumb-img {
    width: 80px;
    height: 60px;
    object-fit: contain;
    border-radius: 6px;
    border: 2px solid #eaecf0;
    background: #fff;
    cursor: pointer;
    transition: all 0.2s ease;
    flex-shrink: 0;
    padding: 5px;
  }
  .thumb-img:hover, .thumb-img.active {
    border-color: var(--accent-color);
    transform: scale(1.05);
  }
  .bet-spec-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  }
  .bet-spec-table th {
    background-color: var(--heading-color);
    color: #fff;
    padding: 14px 20px;
    font-size: 0.95rem;
    font-weight: 600;
    text-align: left;
  }
  .bet-spec-table td {
    padding: 14px 20px;
    border-bottom: 1px solid #f0f4f8;
    font-size: 0.95rem;
    color: #374151;
  }
  .bet-spec-table tbody tr:nth-of-type(even) {
    background-color: #f9fafb;
  }
  .bet-spec-table tbody tr:hover td {
    background-color: #f0f7ff;
  }
  .process-step-vc20 {
    display: flex;
    gap: 20px;
    align-items: flex-start;
    padding: 20px;
    background: #fff;
    border-radius: 12px;
    border: 1px solid #eaecf0;
    margin-bottom: 15px;
    transition: 0.3s;
  }
  .process-step-vc20:hover {
    box-shadow: 0 8px 25px rgba(0,0,0,0.05);
    transform: translateX(5px);
  }
  .process-step-vc20 .step-num {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    background: var(--accent-color);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.1rem;
  }
  .process-step-vc20 h6 {
    font-weight: 700;
    margin-bottom: 4px;
    color: var(--heading-color);
  }
  .process-step-vc20 p {
    font-size: 0.88rem;
    color: #6b7280;
    margin: 0;
  }
</style>
<?php endif; ?>

<!-- Structured Data Schemas -->
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
      "name": "Locations",
      "item": "<?php echo url('locations/asia/'); // default locations catalog page fallback ?>"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "<?php echo $city; ?>",
      "item": "<?php echo $city_page_url; ?>"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "<?php echo $product_name; ?>",
      "item": "<?php echo $canonical_url; ?>"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "<?php echo $product_name; ?> in <?php echo $city; ?>",
  "image": "<?php echo $product['image']; ?>",
  "description": "<?php echo htmlspecialchars($meta_description); ?>",
  "brand": {
    "@type": "Brand",
    "name": "Burhani Engineering Technology"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "USD",
    "lowPrice": "1500",
    "highPrice": "25000",
    "offerCount": "1",
    "url": "<?php echo $canonical_url; ?>"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Where can I buy a <?php echo $product_name; ?> in <?php echo $city; ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Burhani Engineering Technology is a premier manufacturer and supplier of <?php echo $product_name; ?> systems, offering custom configurations and shipping directly to industrial facilities and laboratories in <?php echo $city; ?>, <?php echo $country; ?>."
      }
    },
    {
      "@type": "Question",
      "name": "What industries in <?php echo $city; ?> utilize <?php echo $product_name; ?> systems?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Industries in <?php echo $city; ?> such as <?php echo implode(', ', $local_industries); ?> utilize our equipment to ensure strict quality validation, NDT testing, and leak-free performance."
      }
    },
    {
      "@type": "Question",
      "name": "Does BET provide calibration and maintenance services for <?php echo $product_name; ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Burhani Engineering Technology provides comprehensive technical support, remote troubleshooting, calibration checks, and spare parts supply for all our installation sites."
      }
    }
  ]
}
</script>

<main class="main">

<?php if ($product_key === 'vc20'): ?>
  <!-- 1️⃣ Hero Section (2-Column Premium layout) -->
  <div class="vc20-hero">
    <div class="vc20-container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-7" data-aos="fade-right">
          <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge-standard">Indirect Sampling</span>
            <span class="badge-standard">Portable Chamber</span>
            <span class="badge-standard">12+ hr Battery</span>
            <span class="badge-standard">PTFE Tubing</span>
          </div>
          <h1><?php echo $page_title; ?></h1>
          <p>
            The Vacuum Chamber Sampler VC20 is a compact portable air sampling chamber designed for contamination-free gas and air sample collection in laboratory and field applications. Now available for environmental and industrial compliance in <?php echo "$city, $country"; ?>.
          </p>
          <ul class="hero-bullets">
            <li><i class="bi bi-check-circle-fill"></i> Indirect vacuum bag sampling eliminates pump cross-contamination</li>
            <li><i class="bi bi-check-circle-fill"></i> Built-in miniature pump achieving greater than 18" Hg vacuum</li>
            <li><i class="bi bi-check-circle-fill"></i> 12+ hours battery backup (75+ samples per charge)</li>
            <li><i class="bi bi-check-circle-fill"></i> Transparent viewing chamber with integrated LED lighting</li>
          </ul>
          <div class="d-flex gap-3 mt-4 flex-wrap">
            <a href="#contact-enquiry" class="btn btn-primary px-4 py-2 d-flex align-items-center gap-2">
              <i class="bi bi-chat-dots"></i> Get Quote
            </a>
            <a href="/brochers/Vacuum_Chamber_Sampler_VC20/air-sample-collection-chamber-with-vacuum-pump-for-environmental-analysis-portable-odor-sampling.pdf" target="_blank" class="btn btn-outline-light px-4 py-2 d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
              <i class="bi bi-file-earmark-pdf"></i> Product Specifications PDF
            </a>
          </div>
        </div>
        <div class="col-lg-5 text-center" data-aos="fade-left">
          <img src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Vacuum Chamber Sampler VC20.png'); ?>" alt="Vacuum Chamber Sampler VC20 Hero View" class="img-fluid rounded-4 shadow-lg" style="max-height: 380px; object-fit: contain;">
        </div>
      </div>
    </div>
  </div>

  <!-- 2️⃣ Localized SEO Content & Product Deep Overview -->
  <section class="section-padding">
    <div class="vc20-container">
      <div class="row gy-5">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            
            <h2>Localized Environmental Sampling in <?php echo "$city, $country"; ?></h2>
            <p>
              <?php echo $intro_p1; ?>
            </p>
            <?php foreach ($description_paragraphs as $para): ?>
              <p><?php echo $para; ?></p>
            <?php endforeach; ?>
            <p>
              By utilizing the advanced Vacuum Chamber Sampler VC20, operations in <?php echo $city; ?> can successfully execute environmental field research, municipal wastewater gas testing, and air pollution compliance audits with zero risk of carryover contamination.
            </p>

            <hr class="my-5">

            <h3>About the Vacuum Chamber Sampler VC20</h3>
            <p>
              The Vacuum Chamber Sampler VC20 works on the principle of <strong>indirect vacuum bag sampling</strong> (often called the "lung principle" or "vacuum bag sampler"). By placing a Tedlar or other gas sampling bag inside the airtight chamber and evacuating the chamber with the built-in miniature vacuum pump, a negative pressure differential is created. The bag expands, drawing the target sample directly from the source through the PTFE bulkhead fitting and tubing, completely bypassing the pump, valves, or internal components. This ensures zero cross-contamination and maintains sample purity.
            </p>

            <hr class="my-5">

            <!-- Specs Table -->
            <h3>Technical Specifications</h3>
            <div class="table-responsive my-4">
              <?php $spec_data = require ABSPATH . 'data/products/Vacuum_Chamber_Sampler_VC20.php'; ?>
              <table class="bet-spec-table">
                <thead>
                  <tr>
                    <?php foreach ($spec_data['headers'] as $header): ?>
                      <th><?php echo htmlspecialchars($header); ?></th>
                    <?php endforeach; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($spec_data['rows'] as $row): ?>
                    <tr>
                      <td style="font-weight: 600; width: 35%;"><?php echo htmlspecialchars($row[0]); ?></td>
                      <td><?php echo htmlspecialchars($row[1]); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary mb-4" style="background: #fff; border-top: 4px solid var(--accent-color) !important;">
            <h4 class="mb-3" style="font-weight: 700; color: var(--heading-color);">VC20 Key Features</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> Indirect vacuum bag sampling</li>
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> Greater than 18" Hg vacuum</li>
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> Flow rate up to 12 LPM</li>
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> Inert PTFE flow path tubing</li>
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> 12+ hours battery backup</li>
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> 75+ sample collections/charge</li>
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> Integrated purge system</li>
              <li class="mb-2"><i class="bi bi-check-lg text-primary me-2"></i> LED chamber viewing light</li>
            </ul>
          </div>
          <div class="sidebar-box p-4 bg-dark text-white rounded shadow-sm">
            <h4 class="text-white mb-3" style="font-weight:700;">Request a Custom Proposal</h4>
            <p class="small" style="opacity:0.85;">
              Need a custom layout, special port feedthroughs, or specific chamber dimensions for your site in <?php echo $city; ?>? Contact our sales engineers for a fast technical proposal.
            </p>
            <ul class="list-unstyled small mb-4">
              <li class="mb-2"><i class="bi bi-telephone text-primary me-2"></i> <?php echo PHONE_NUMBER; ?></li>
              <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i> <?php echo EMAIL_ADDRESS; ?></li>
            </ul>
            <a href="#contact" class="btn btn-primary w-100 fw-bold">Send Quote Request</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3️⃣ How It Works Section -->
  <section class="section-padding light-background">
    <div class="vc20-container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2>How It Works</h2>
        <p class="text-muted">A streamlined, contamination-free sampling cycle in 3 steps.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="process-step-vc20" data-aos="fade-up" data-aos-delay="50">
            <div class="step-num">1</div>
            <div class="step-content">
              <h6>Insert & Connect the Bag</h6>
              <p>Place an empty, clean Tedlar or other sampling bag inside the VC20 vacuum chamber. Connect the bag's inlet valve to the chamber's pass-through PTFE bulkhead fitting.</p>
            </div>
          </div>
          <div class="process-step-vc20" data-aos="fade-up" data-aos-delay="100">
            <div class="step-num">2</div>
            <div class="step-content">
              <h6>Seal & Evacuate the Chamber</h6>
              <p>Close and lock the transparent chamber lid. Switch on the built-in miniature vacuum pump. The pump rapidly evacuates the air surrounding the bag inside the chamber, creating a negative pressure differential.</p>
            </div>
          </div>
          <div class="process-step-vc20" data-aos="fade-up" data-aos-delay="150">
            <div class="step-num">3</div>
            <div class="step-content">
              <h6>Collect Sample & Retrieve Bag</h6>
              <p>The vacuum causes the sample bag to expand, drawing the target air sample directly from the source through the PTFE inlet tube. Once filled, shut the bag valve, release chamber vacuum, and open the lid to retrieve the sample.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ Product Gallery Section (Premium layout with thumbs) -->
  <section class="section-padding">
    <div class="vc20-container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2>Product Gallery</h2>
        <p class="text-muted">Click on the thumbnails below to view detail angles.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <img id="main-preview" src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Remote Vacuum Chamber for Gas and Air Sampling.webp'); ?>" alt="Main Product Preview" class="gallery-main-img shadow-sm mb-3">
          <div class="thumb-container">
            <img class="thumb-img active" src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Remote Vacuum Chamber for Gas and Air Sampling.webp'); ?>" alt="Remote Vacuum Chamber" onclick="updatePreview(this)">
            <img class="thumb-img" src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Vacuum Chamber Sampler VC20.png'); ?>" alt="Front View" onclick="updatePreview(this)">
            <img class="thumb-img" src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Vacuum Chamber Sampler VC20-1.png'); ?>" alt="Side View 1" onclick="updatePreview(this)">
            <img class="thumb-img" src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Vacuum Chamber Sampler VC20-2.png'); ?>" alt="Field View" onclick="updatePreview(this)">
            <img class="thumb-img" src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Vacuum Chamber Sampler VC20-3.png'); ?>" alt="Control Panel" onclick="updatePreview(this)">
            <img class="thumb-img" src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Vacuum Chamber Sampler VC20-4.png'); ?>" alt="Inside View" onclick="updatePreview(this)">
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function updatePreview(thumb) {
      document.getElementById('main-preview').src = thumb.src;
      document.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active'));
      thumb.classList.add('active');
    }
  </script>
<?php else: ?>
  <!-- 1️⃣ Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading" style="background: <?php echo $hero_gradient; ?>; padding: 80px 0; color: #fff;">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1><?php echo $page_title; ?></h1>
            <p class="mb-4" style="font-size:1.2rem; opacity:0.95;">
              Industrial-grade <?php echo $product_name; ?> solutions engineered for quality control and containment validation in <?php echo "$city, $country"; ?>.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a href="#contact" class="btn btn-light fw-bold px-4 py-2">
                <i class="bi bi-envelope-fill me-1"></i> Request Quote
              </a>
              <a href="<?php echo $city_page_url; ?>" class="btn btn-outline-light px-4 py-2">
                <i class="bi bi-geo-alt-fill me-1"></i> View all <?php echo $city; ?> Products
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 2️⃣ Content Core Layout -->
  <section class="section">
    <div class="container">
      <div class="row gy-5">
        
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            
            <!-- Introduction Section -->
            <h2>Localized Industrial Solutions for <?php echo "$city, $country"; ?></h2>
            <p>
              <?php echo $intro_p1; ?>
            </p>
            <?php foreach ($description_paragraphs as $para): ?>
              <p><?php echo $para; ?></p>
            <?php endforeach; ?>
            <p>
              By offering custom port configurations, automated controls, and rugged industrial enclosures, Burhani Engineering Technology guarantees that our systems integrate seamlessly into the high-technology workflows of <?php echo $city; ?>.
            </p>

            <hr class="my-5">

            <!-- Product Deep Overview -->
            <h3><?php echo $product_name; ?> Design &amp; Technology</h3>
            <p><?php echo $product['overview']; ?></p>
            
            <h5 class="mt-4 text-primary">Key Engineering Features</h5>
            <ul>
              <?php foreach ($product['features'] as $feat): ?>
                <li><strong><?php echo $feat; ?></strong></li>
              <?php endforeach; ?>
            </ul>

            <hr class="my-5">

            <!-- Technical Specifications Section -->
            <h3>Technical Specifications</h3>
            <div class="table-responsive my-4">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr class="bg-dark text-white">
                    <th>Technical Parameter</th>
                    <th>Specification Range / Value</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($product['specs'] as $label => $val): ?>
                    <tr>
                      <td><strong><?php echo htmlspecialchars($label); ?></strong></td>
                      <td><?php echo htmlspecialchars($val); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

            <hr class="my-5">

            <!-- Localized Applications Section -->
            <h3>Targeted Applications in <?php echo $city; ?></h3>
            <p>
              Our <?php echo $product_name; ?> systems are optimized for the key manufacturing clusters, laboratories, and industrial zones surrounding <?php echo $city; ?>. Primary applications include:
            </p>
            <ul>
              <?php foreach ($product['applications'] as $app): ?>
                <li><strong><?php echo $app; ?></strong>: Critical safety validation and testing.</li>
              <?php endforeach; ?>
            </ul>

            <hr class="my-5">

            <!-- Why Choose BET Section -->
            <h3>Why Choose Burhani Engineering Technology?</h3>
            <p>
              Burhani Engineering Technology designs, manufactures, and commissions custom vacuum testing systems that deliver consistent repeatability. When you select our equipment for your facility in <?php echo $city; ?>, you benefit from:
            </p>
            <ul>
              <li><strong>Certified Quality:</strong> Built in accordance with global standards (ASTM, API, ASME, ISO).</li>
              <li><strong>Dynamic Customization:</strong> Tailored chambers, feedthroughs, valves, and automated controllers to match your footprint.</li>
              <li><strong>Global Support:</strong> Direct remote troubleshooting, setup guidance, and localized delivery logistics.</li>
            </ul>

            <!-- Internal Link back to Product Page -->
            <div class="p-4 bg-light rounded mt-5 border-start border-4 border-primary">
              <h5>Looking for standard technical documentation?</h5>
              <p class="small text-muted mb-3">
                Read our definitive flagship documentation, download brochures, and explore detailed schemas for this product.
              </p>
              <a href="<?php echo $product_page_url; ?>" class="btn btn-sm btn-primary">
                View Flagship <?php echo $product_name; ?> Pillar Page
              </a>
            </div>

          </div>
        </div>

        <!-- Sidebar Options -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          
          <?php
            $subcats = $product['subcategories'] ?? [];
            if (!empty($subcats)):
          ?>
            <!-- Product Categories Sidebar Block -->
            <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary mb-4" style="background: #fff; border-top: 3px solid var(--accent-color) !important; box-shadow:0 8px 20px rgba(0,0,0,.05); padding: 25px; border-radius: 8px;">
              <h4 class="mb-3" style="font-weight: 700; color: var(--heading-color);">Product Categories</h4>
              <ul class="list-unstyled mb-0">
                <?php
                $total_subcats = count($subcats);
                $i = 0;
                foreach($subcats as $slug => $name):
                    $i++;
                    $border_class = ($i < $total_subcats) ? 'mb-3 pb-2 border-bottom' : 'mb-0';
                    $cat_url = product_category_url($product_slug, $slug);
                ?>
                <li class="<?php echo $border_class; ?>">
                  <a href="<?php echo $cat_url; ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                    <span><?php echo htmlspecialchars($name); ?></span>
                    <i class="bi bi-chevron-right text-primary"></i>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
          
          <!-- Custom Sidebar HTML if defined, otherwise generic locations navigation -->
          <?php if (isset($custom_sidebar_html) && !empty($custom_sidebar_html)): ?>
            <?php echo $custom_sidebar_html; ?>
          <?php else: ?>
            <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary mb-4" style="background: #fff; border-top: 4px solid var(--accent-color) !important;">
              <h4 class="mb-3" style="font-weight: 700; color: var(--heading-color);">Regional Industrial Sectors</h4>
              <ul class="list-unstyled mb-0">
                <?php foreach ($local_industries as $ind): ?>
                  <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i> <?php echo $ind; ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <!-- Contact Sidebar Callout -->
          <div class="sidebar-box p-4 bg-dark text-white rounded shadow-sm">
            <h4 class="text-white mb-3" style="font-weight:700;">Request a Custom Proposal</h4>
            <p class="small" style="opacity:0.85;">
              Need a custom layout, special port feedthroughs, or specific chamber dimensions for your site in <?php echo $city; ?>? Contact our sales engineers for a fast technical proposal.
            </p>
            <ul class="list-unstyled small mb-4">
              <li class="mb-2"><i class="bi bi-telephone text-primary me-2"></i> <?php echo PHONE_NUMBER; ?></li>
              <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i> <?php echo EMAIL_ADDRESS; ?></li>
            </ul>
            <a href="#contact" class="btn btn-primary w-100 fw-bold">Send Quote Request</a>
          </div>

        </div>

      </div>
    </div>
  </section>
<?php endif; ?>

  <!-- 3️⃣ FAQ Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions in <?php echo $city; ?></h2>
        <p>Common technical inquiries from procurement managers and research teams regarding our <?php echo $product_name; ?>.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="locFaqAccordion">
            
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqItem1">
                  Where can I buy a <?php echo $product_name; ?> in <?php echo $city; ?>?
                </button>
              </h2>
              <div id="faqItem1" class="accordion-collapse collapse show" data-bs-parent="#locFaqAccordion">
                <div class="accordion-body">
                  Burhani Engineering Technology is a premier manufacturer and supplier of <?php echo $product_name; ?> systems, offering custom configurations and shipping directly to industrial facilities and laboratories in <?php echo $city; ?>, <?php echo $country; ?>.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqItem2">
                  What industries in <?php echo $city; ?> use <?php echo $product_name; ?> systems?
                </button>
              </h2>
              <div id="faqItem2" class="accordion-collapse collapse" data-bs-parent="#locFaqAccordion">
                <div class="accordion-body">
                  Our systems are used heavily across <?php echo $city; ?>'s main sectors: <?php echo implode(', ', $local_industries); ?>. We build models for cleanroom integration, vacuum degassing, asphalt testing, and weld checks.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqItem3">
                  Does BET provide calibration and maintenance services for <?php echo $product_name; ?>?
                </button>
              </h2>
              <div id="faqItem3" class="accordion-collapse collapse" data-bs-parent="#locFaqAccordion">
                <div class="accordion-body">
                  Yes, Burhani Engineering Technology provides comprehensive technical support, remote troubleshooting, calibration checks, and spare parts supply for all our installation sites.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqItem4">
                  What is the shipping lead time to <?php echo $city; ?>?
                </button>
              </h2>
              <div id="faqItem4" class="accordion-collapse collapse" data-bs-parent="#locFaqAccordion">
                <div class="accordion-body">
                  Lead times vary depending on custom design variables and manufacturing queue. Standard configurations are typically ready for shipping within 3 to 5 weeks. Contact us with your specification checklist to receive an exact delivery schedule.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once ABSPATH . 'includes/contact-section.php'; ?>
<?php require_once ABSPATH . 'includes/footer.php'; ?>
