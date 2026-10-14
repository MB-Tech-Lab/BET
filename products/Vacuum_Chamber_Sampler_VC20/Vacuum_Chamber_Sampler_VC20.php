<?php
include_once(__DIR__ . '/../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page) {
    $meta_title = "Vacuum Chamber Sampler VC20 in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Vacuum Chamber Sampler VC20 available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_url('vacuum-chamber-sampler-vc20');
} else {
    $meta_title = "Vacuum Chamber Sampler VC20 – Portable Air Sampling Chamber | BET";
    $meta_description = "The Vacuum Chamber Sampler VC20 is a compact portable air sampling chamber designed for contamination-free gas and air sample collection in laboratory and field applications.";
    $canonical_url = product_url('vacuum-chamber-sampler-vc20');
}

include_once(__DIR__ . '/../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

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

<main class="main">

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
          <h1>Vacuum Chamber Sampler VC20 – Portable Air Sampling Chamber</h1>
          <p>
            The Vacuum Chamber Sampler VC20 is a compact portable air sampling chamber designed for contamination-free gas and air sample collection in laboratory and field applications.
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
          <img src="<?php echo asset('img/Vacuum Chamber Sampler VC20/Remote Vacuum Chamber for Gas and Air Sampling.webp'); ?>" alt="Vacuum Chamber Sampler VC20 Hero View" class="img-fluid rounded-4 shadow-lg" style="max-height: 380px; object-fit: contain;">
        </div>
      </div>
    </div>
  </div>

  <!-- 2️⃣ About Product Section -->
  <section class="section-padding">
    <div class="vc20-container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-12" data-aos="fade-up">
          <h2>About the Vacuum Chamber Sampler VC20</h2>
          <p class="mt-3">
            Burhani Engineering Technology is a trusted <strong>Manufacturer of Vacuum Chamber Sampler VC20 – Portable Air Sampling Chamber</strong> systems designed for high-efficiency field and laboratory operations. As a leading <strong>Supplier of Vacuum Chamber Sampler VC20</strong>, we deliver contamination-free gas and air collection solutions for environmental monitoring, industrial hygiene, and emissions testing.
          </p>
          <p>
            Our company serves as a prominent <strong>Exporter of Vacuum Chamber Sampler VC20</strong> systems to clients globally, adhering to top industry standards. We are a reliable <strong>Importer</strong> and <strong>Dealer of Vacuum Chamber Sampler VC20</strong> setups, providing comprehensive technical support and custom options.
          </p>
          <p>
            The Vacuum Chamber Sampler VC20 works on the principle of <strong>indirect vacuum bag sampling</strong> (often called the "lung principle" or "vacuum bag sampler"). By placing a Tedlar or other gas sampling bag inside the airtight chamber and evacuating the chamber with the built-in miniature vacuum pump, a negative pressure differential is created. The bag expands, drawing the target sample directly from the source through the PTFE bulkhead fitting and tubing, completely bypassing the pump, valves, or internal components. This ensures zero cross-contamination and maintains sample purity.
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- 5️⃣ Product Gallery Section (Premium layout with thumbs) -->
  <section class="section-padding light-background">
    <div class="vc20-container">
      <div class="text-center mb-4" data-aos="fade-up">
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



  <!-- 3️⃣ Key Features Section (Grid with Icon Cards) -->
  <section class="section-padding light-background">
    <div class="vc20-container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2>Key Features</h2>
        <p class="text-muted">Designed for field reliability, precision, and ease of use.</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="feature-icon-card">
            <div class="icon-box"><i class="fas fa-wind"></i></div>
            <h5>Built-in Pump</h5>
            <p>Integrated miniature pump provides active vacuum force for fast bag expansion and air drawing.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-icon-card">
            <div class="icon-box"><i class="fas fa-compress-arrows-alt"></i></div>
            <h5>18" Hg Vacuum</h5>
            <p>Delivers powerful vacuum performance greater than 18" Hg to handle tough sampling scenarios.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="feature-icon-card">
            <div class="icon-box"><i class="fas fa-tachometer-alt"></i></div>
            <h5>12 LPM Flow</h5>
            <p>High flow capability up to 12 LPM ensures rapid sample capture and cycle efficiency in the field.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-icon-card">
            <div class="icon-box"><i class="fas fa-battery-full"></i></div>
            <h5>12 Hour Battery</h5>
            <p>Extended 12+ hours battery life supports up to 75+ sample collections on a single charge.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="feature-icon-card">
            <div class="icon-box"><i class="fas fa-vial"></i></div>
            <h5>PTFE Tubing</h5>
            <p>Inert PTFE material flow path avoids sample gas interaction or chemical contamination.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-icon-card">
            <div class="icon-box"><i class="fas fa-sync-alt"></i></div>
            <h5>Purge System</h5>
            <p>Built-in system to purge lines between cycles, ensuring zero carryover from previous samples.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ How It Works Section -->
  <section class="section-padding">
    <div class="vc20-container">
      <div class="text-center mb-4" data-aos="fade-up">
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

  <!-- 

  <!-- 6️⃣ Technical Specifications Section (Full width, Zebra table) -->
  <section class="section-padding" id="specifications">
    <div class="vc20-container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2>Technical Specifications</h2>
        <p class="text-muted">Comprehensive specifications for model VC20</p>
      </div>
      <div class="row">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="table-responsive">
            <?php $spec_data = require __DIR__ . '/../../data/products/Vacuum_Chamber_Sampler_VC20.php'; ?>
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
    </div>
  </section>

  <!-- 7️⃣ Applications Section -->
  <section class="section-padding light-background">
    <div class="vc20-container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2>Target Applications</h2>
        <p class="text-muted">Where the Vacuum Chamber Sampler VC20 is commonly applied.</p>
      </div>
      <div class="row gy-3">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="p-3 bg-white rounded shadow-sm h-100">
            <strong>Ambient Air Sampling</strong>
            <p class="mb-0 small text-muted mt-1">Collecting surrounding air patterns to verify quality compliance and identify airborne particulates.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="p-3 bg-white rounded shadow-sm h-100">
            <strong>Industrial Hygiene Monitoring</strong>
            <p class="mb-0 small text-muted mt-1">Monitoring factories, assembly plants, and work yards for employee safety and organic chemical limits.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="p-3 bg-white rounded shadow-sm h-100">
            <strong>Odor Sampling</strong>
            <p class="mb-0 small text-muted mt-1">Capturing gas mixtures without degradation for standard sensory olfactometry lab tests.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="p-3 bg-white rounded shadow-sm h-100">
            <strong>Wastewater Treatment Plants</strong>
            <p class="mb-0 small text-muted mt-1">Sampling volatile gas emissions around open tanks, clarifiers, and pipeline exhausts.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
          <div class="p-3 bg-white rounded shadow-sm h-100">
            <strong>Landfill Monitoring</strong>
            <p class="mb-0 small text-muted mt-1">Evaluating methane buildup and ground gas emissions around containment fields.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="p-3 bg-white rounded shadow-sm h-100">
            <strong>Compost Facilities</strong>
            <p class="mb-0 small text-muted mt-1">Monitoring gas emissions from decomposition process to prevent environmental nuisance.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8️⃣ Industries Served Section -->
  <section class="section-padding">
    <div class="vc20-container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2>Industries Served</h2>
        <p class="text-muted">A vital tool across primary manufacturing, compliance, and scientific sectors.</p>
      </div>
      <div class="row gy-3">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="p-3 bg-light rounded h-100">
            <strong>Oil & Gas Industry</strong>
            <p class="mb-0 small text-muted mt-1">Spot-checking pipelines, refineries, and vapor storage lines for trace leaks and organic emissions.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="p-3 bg-light rounded h-100">
            <strong>Research Laboratories</strong>
            <p class="mb-0 small text-muted mt-1">Ensuring pure, uncompromised gas research and sample analyses in academic and private labs.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="p-3 bg-light rounded h-100">
            <strong>Environmental Monitoring</strong>
            <p class="mb-0 small text-muted mt-1">Assisting environmental consultants and regulatory bodies in verifying strict clean air standards.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9️⃣ Contact CTA Section -->
  <section class="section-padding py-5">
    <div class="vc20-container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Ready to Upgrade Your Field Sampling Operations?</h2>
        <p class="mb-4">Contact our engineering team to get pricing and custom options for the Vacuum Chamber Sampler VC20.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact-enquiry" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Inquire About Pricing</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
