<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/../../includes/config.php';

if (!empty($is_location_page) && $is_location_page) {
    $meta_title = "Transparent Vacuum & Pressure Vessel in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Transparent Vacuum & Pressure Vessel available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_url('transparent-vacuum-and-pressure-vessels');
} else {
    $meta_title = "Transparent Vacuum and Pressure Vessel | Leak Testing & Packaging Integrity Equipment";
$meta_description = "High-performance transparent vacuum and pressure vessel for pouch leak testing and packaging integrity analysis. Ideal for beverage and industrial applications.";
$canonical_url = product_url('transparent-vacuum-and-pressure-vessels');
}

require_once __DIR__ . '/../../includes/header.php';
?>

<style>
  /* ========= Transparent Vessel Page Styles ========= */
  .tvp-hero {
    background: linear-gradient(135deg, #0f3443 0%, #12526b 60%, #0f3d56 100%);
    color: #fff;
    padding: 90px 0 70px;
    position: relative;
    overflow: hidden;
  }
  .tvp-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
  .tvp-hero h1 { font-size: 2.4rem; font-weight: 800; line-height: 1.2; color: #ffffff; }
  .tvp-hero h1 a { color: #ffffff; text-decoration: none; }
  .tvp-hero .badge-tag { background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25); color: #fff; padding: 5px 14px; border-radius: 50px; font-size: 0.78rem; font-weight: 600; letter-spacing: 0.5px; }
  .tvp-hero .cta-group { margin-top: 30px; display: flex; gap: 14px; flex-wrap: wrap; }
  .tvp-hero .btn-primary-tvp { background: var(--accent-color); color: #fff; border: none; padding: 13px 30px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.3s; }
  .tvp-hero .btn-primary-tvp:hover { background: #c75a00; transform: translateY(-2px); color: #fff; }
  .tvp-hero .btn-outline-tvp { background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.4); padding: 13px 30px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.3s; }
  .tvp-hero .btn-outline-tvp:hover { background: rgba(255,255,255,0.1); border-color: #fff; color: #fff; }

  /* Highlight Metrics */
  .tvp-metric { background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 22px 16px; text-align: center; }
  .tvp-metric .val { font-size: 1.9rem; font-weight: 800; color: var(--accent-color); line-height: 1; }
  .tvp-metric .lbl { font-size: 0.75rem; color: rgba(255,255,255,0.65); margin-top: 6px; text-transform: uppercase; letter-spacing: 0.5px; }

  /* Shared Section Styles */
  .section-label { font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--accent-color); margin-bottom: 10px; }
  .tvp-section { padding: 70px 0; }
  .tvp-section.bg-alt { background-color: #f8f9fc; }

  /* Feature Cards */
  .feat-card { background: #fff; border: 1px solid #eaecf0; border-radius: 12px; padding: 28px 22px; height: 100%; transition: all 0.3s ease; border-top: 3px solid transparent; }
  .feat-card:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(0,0,0,0.09); border-top-color: var(--accent-color); }
  .feat-card .icon { width: 52px; height: 52px; background: linear-gradient(135deg, #e0f4ff, #b8e6ff); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
  .feat-card .icon i { font-size: 1.4rem; color: #0f7ac5; }
  .feat-card h5 { font-weight: 700; font-size: 1rem; margin-bottom: 8px; color: var(--heading-color); }
  .feat-card p { font-size: 0.88rem; color: #6b7280; margin: 0; line-height: 1.6; }

  /* Process Steps */
  .proc-step { display: flex; gap: 20px; align-items: flex-start; padding: 22px; background: #fff; border-radius: 12px; border: 1px solid #eaecf0; margin-bottom: 16px; transition: 0.3s; }
  .proc-step:hover { box-shadow: 0 8px 25px rgba(0,0,0,0.07); transform: translateX(4px); }
  .proc-step .snum { flex-shrink: 0; width: 44px; height: 44px; background: #0f3443; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; }
  .proc-step .scontent h6 { font-weight: 700; margin-bottom: 5px; color: var(--heading-color); }
  .proc-step .scontent p { font-size: 0.88rem; color: #6b7280; margin: 0; }

  /* Spec Table */
  .tvp-spec-table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); }
  .tvp-spec-table thead th { background: #0f3443; color: #fff; padding: 16px 20px; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.8px; font-weight: 600; text-align: center; }
  .tvp-spec-table thead th:first-child { text-align: left; }
  .tvp-spec-table tbody td { padding: 15px 20px; border-bottom: 1px solid #f0f4f8; font-size: 0.9rem; vertical-align: middle; text-align: center; }
  .tvp-spec-table tbody td:first-child { font-weight: 700; color: var(--heading-color); background: #f8fbff; text-align: left; }
  .tvp-spec-table tbody tr:last-child td { border-bottom: none; }
  .tvp-spec-table tbody tr:hover td { background: #f0faff; }

  /* App Cards */
  .app-card { background: #fff; border-radius: 10px; padding: 22px; border-left: 4px solid #0f7ac5; box-shadow: 0 2px 12px rgba(0,0,0,0.05); height: 100%; }
  .app-card i { font-size: 1.6rem; color: #0f7ac5; margin-bottom: 12px; display: block; }
  .app-card h6 { font-weight: 700; margin-bottom: 6px; color: var(--heading-color); }
  .app-card p { font-size: 0.85rem; color: #6b7280; margin: 0; }

  /* Benefits */
  .benefit-item { display: flex; align-items: flex-start; gap: 14px; padding: 16px; background: #fff; border-radius: 10px; border: 1px solid #eaecf0; height: 100%; transition: 0.3s; }
  .benefit-item:hover { box-shadow: 0 8px 24px rgba(0,0,0,0.07); }
  .benefit-item .bi { font-size: 1.3rem; color: #22c55e; flex-shrink: 0; margin-top: 2px; }
  .benefit-item div h6 { font-weight: 700; margin-bottom: 4px; font-size: 0.95rem; }
  .benefit-item div p { font-size: 0.83rem; color: #6b7280; margin: 0; }

  /* Why Choose */
  .why-row { display: flex; align-items: flex-start; gap: 14px; padding: 18px 0; border-bottom: 1px solid #f0f4f8; }
  .why-row:last-child { border-bottom: none; }
  .why-row .wi { width: 38px; height: 38px; background: #e0f4ff; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .why-row .wi i { color: #0f7ac5; font-size: 1rem; }
  .why-row h6 { font-weight: 700; margin-bottom: 3px; font-size: 0.97rem; }
  .why-row p { font-size: 0.85rem; color: #6b7280; margin: 0; }

  /* CTA */
  .tvp-cta { background: linear-gradient(135deg, #0f3443, #0a293a); padding: 60px 0; color: #fff; text-align: center; }
  .tvp-cta h2 { font-weight: 800; font-size: 2rem; margin-bottom: 12px; }
  .tvp-cta p { color: rgba(255,255,255,0.7); font-size: 1.05rem; margin-bottom: 30px; }
  .dl-btn { display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.25); color: #fff; padding: 13px 24px; border-radius: 8px; font-weight: 600; font-size: 0.9rem; text-decoration: none; transition: 0.3s; }
  .dl-btn:hover { background: rgba(255,255,255,0.2); color: #fff; transform: translateY(-2px); }
</style>

<main class="main">

  <!-- ===== HERO SECTION ===== -->
  <section class="tvp-hero" id="top">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6 order-lg-1 order-2" data-aos="fade-right">
          <div class="d-flex flex-wrap gap-2 mb-4">
            <span class="badge-tag">Leak Testing</span>
            <span class="badge-tag">Packaging Integrity</span>
            <span class="badge-tag">Vacuum & Pressure</span>
            <span class="badge-tag">Industrial Grade</span>
          </div>
          <h1>Transparent Vacuum and Pressure Vessel</h1>
          <p style="color: rgba(255,255,255,0.78); font-size: 1.1rem; margin-top: 18px; line-height: 1.7;">
            Advanced leak testing and packaging integrity solution for beverage, industrial, and laboratory applications. Full visual transparency for real-time observation of pouch deformation and seal failure.
          </p>
          <div class="cta-group">
            <a href="#contact" class="btn-primary-tvp"><i class="bi bi-envelope-fill me-2"></i>Enquiry Now</a>
          </div>
        </div>
        <div class="col-lg-6 order-lg-2 order-1 text-center" data-aos="fade-left">
          <div style="max-width: 500px; margin: auto;">
            <img src="<?php echo asset('img\Transparent Vacuum and Pressure Vessel\Vacuum Leak tester Cylinder.jpg'); ?>" loading="lazy" alt="Acrylic Vacuum Chamber Cylinder" class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== INTRODUCTION ===== -->
  <section class="tvp-section">
    <div class="container">
      <div class="row gy-5 align-items-center">
        <div class="col-lg-6 order-lg-1 order-2" data-aos="fade-right">
          <p class="section-label">Overview</p>
          <h2 style="font-weight: 800; font-size: 2rem; color: var(--heading-color); line-height: 1.3;">The Industrial Standard for Packaging Integrity Testing</h2>
          <p class="mt-3" style="color: #4b5563; line-height: 1.8; font-size: 1rem;">
            Burhani Engineering Technology is a trusted <a href="https://bhfvacuum.com/transparent-vacuum-and-pressure-vessels.html" target="_blank" rel="noopener" style="color: inherit; text-decoration: none;"><em><strong>Manufacturer of Transparent Vacuum and Pressure Vessel</strong></em></a> equipment designed for comprehensive <strong>leak detection</strong> and <strong>packaging integrity testing</strong> across juice, wine, and liquid food pouches. By replicating the vacuum and pressurization stresses encountered during real-world transportation and storage, this <strong>vacuum pressure testing chamber</strong> delivers definitive assessments of seal quality before product ever reaches the consumer.
          </p>
          <p style="color: #4b5563; line-height: 1.8; font-size: 1rem;">
            Unlike opaque testing equipment, our fully transparent cylinder allows operators to visually monitor every stage of the test cycle. Leaks, punctures, deformations, and weak seals become immediately visible — enabling rapid identification and corrective action. This makes the BET vessel an indispensable tool in any <strong>pressure testing</strong> or quality control workflow.
          </p>
          <ul class="list-unstyled mt-4" style="color: #374151;">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Simulates real-world transport and storage conditions</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Tests plastic pouches: juice, wine, liquid packaging</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Suitable for a wide range of pouch sizes and shapes</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Adjustable vacuum and pressure parameters</li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-2 order-1 text-center" data-aos="fade-left">
          <img src="<?php echo asset('img\Transparent Vacuum and Pressure Vessel\transparent pressure vessels.webp'); ?>" loading="lazy"
               alt="Transparent Pressure Vessel Standard Model"
               class="img-fluid shadow"
               style="max-width: 380px; height: auto; object-fit: contain; border-radius: 12px; margin-bottom: 20px;"
               onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
          <div class="bg-light rounded-3 p-5 text-center" style="display:none; border: 2px dashed #d1d5db; flex-direction:column; align-items:center; justify-content:center; min-height: 280px;">
            <i class="fas fa-tint" style="font-size: 4.5rem; color: #0f7ac5; opacity: 0.7;"></i>
            <h5 class="mt-3 fw-bold text-muted">Transparent Vacuum & Pressure Vessel</h5>
            <p class="text-muted small">Models BHFGC Series</p>
          </div>
        </div>
      </div>

      <!-- SECTION 3: Mixing / Internal Process Section -->
      <div class="row gy-5 align-items-center mt-5">
        <div class="col-lg-6 order-lg-2 order-2" data-aos="fade-left">
          <h3 style="font-weight: 700; font-size: 1.75rem; color: var(--heading-color);">Motorized Stirrer & Mixing</h3>
          <p style="color: #4b5563; line-height: 1.8; font-size: 1rem;">
            For specialized internal testing, our vessels support <strong>stirring</strong>, <strong>slurry mixing</strong>, and complex <strong>chemical processing</strong>. The optional motorized stirrer ensures uniform agitation during vacuum or pressure cycles, providing complete visibility into the internal process.
          </p>
        </div>
        <div class="col-lg-6 order-lg-1 order-1 text-center" data-aos="fade-right">
          <img src="<?php echo asset('img\Transparent Vacuum and Pressure Vessel\transparent pressure vessels1.webp'); ?>" loading="lazy"
               alt="Transparent Pressure Vessel with Motorized Stirrer"
               class="img-fluid shadow"
               style="max-width: 380px; height: auto; object-fit: contain; border-radius: 12px; margin-bottom: 20px;">
        </div>
      </div>

      <!-- SECTION 4: Pressure Control / Vacuum Regulation Section -->
      <div class="row gy-5 align-items-center mt-5">
        <div class="col-lg-6 order-lg-1 order-2" data-aos="fade-right">
          <h3 style="font-weight: 700; font-size: 1.75rem; color: var(--heading-color);">Pressure Regulation & Monitoring</h3>
          <p style="color: #4b5563; line-height: 1.8; font-size: 1rem;">
            Precise control is achieved through a dedicated <strong>regulator</strong> and precision <strong>gauge</strong>. The integrated <strong>vacuum line</strong> and valve system enable continuous <strong>pressure monitoring</strong> and rapid <strong>gas purging</strong>, ensuring consistent and reproducible leak testing conditions.
          </p>
        </div>
        <div class="col-lg-6 order-lg-2 order-1 text-center" data-aos="fade-left">
          <img src="<?php echo asset('img\Transparent Vacuum and Pressure Vessel\transparent pressure vessels2.webp'); ?>" loading="lazy"
               alt="Transparent Pressure Vessel Pressure Control System"
               class="img-fluid shadow"
               style="max-width: 380px; height: auto; object-fit: contain; border-radius: 12px; margin-bottom: 20px;">
        </div>
      </div>
    </div>
  </section>

  <!-- ===== KEY FEATURES ===== -->
  <section class="tvp-section bg-alt">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <p class="section-label">Built for Performance</p>
        <h2 style="font-weight: 800; font-size: 1.9rem; color: var(--heading-color);">Key Features</h2>
        <p class="text-muted">As a leading <a href="https://bhfvacuum.com/transparent-vacuum-and-pressure-vessels.html" target="_blank" rel="noopener" style="color: inherit; text-decoration: none;"><em><strong>Supplier of Transparent Vacuum and Pressure Vessel</strong></em></a> equipment, each vessel is engineered for reliable, repeatable, and accurate leak detection.</p>
      </div>
      <div class="row g-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="feat-card">
            <div class="icon"><i class="fas fa-search"></i></div>
            <h5>High Precision Leak Detection</h5>
            <p>Detects even the smallest seal defects by subjecting packaging to controlled vacuum and pressure differentials, revealing micro-leaks invisible to unaided inspection.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="feat-card">
            <div class="icon"><i class="fas fa-eye"></i></div>
            <h5>Transparent Chamber for Visual Monitoring</h5>
            <p>Full 360° optical clarity allows real-time visual observation of pouch deformation, bubble formation, and seal failure during the entire testing cycle.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feat-card">
            <div class="icon"><i class="fas fa-sliders-h"></i></div>
            <h5>Adjustable Vacuum & Pressure Settings</h5>
            <p>Easily programmable vacuum and pressure parameters allow tests to be precisely calibrated for specific pouch materials, fill volumes, and transport standards.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="feat-card">
            <div class="icon"><i class="fas fa-expand-arrows-alt"></i></div>
            <h5>Multi-Size Compatibility</h5>
            <p>Available in 6 standard models from 2.4L to 44L capacity, accommodating a wide variety of pouch dimensions from small retail juice packs to bulk beverage packaging.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="feat-card">
            <div class="icon"><i class="fas fa-hard-hat"></i></div>
            <h5>Industrial Grade Construction</h5>
            <p>Fabricated from high-quality materials built for sustained use in high-volume production and quality control environments, ensuring reliable long-term performance.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
          <div class="feat-card">
            <div class="icon"><i class="fas fa-hand-pointer"></i></div>
            <h5>User-Friendly Operation</h5>
            <p>Intuitive controls and straightforward loading procedures minimize training time and reduce the risk of operator error, keeping testing throughput high.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== HOW IT WORKS ===== -->
  <section class="tvp-section">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-5" data-aos="fade-right">
          <p class="section-label">Operation Flow</p>
          <h2 style="font-weight: 800; font-size: 1.9rem; color: var(--heading-color);">How It Works</h2>
          <p class="text-muted mt-3" style="font-size: 0.97rem; line-height: 1.8;">
            The testing cycle is fast, intuitive, and designed to produce definitive results. Four simple steps take you from sample loading to confirmed pass or fail — no complex setup or specialist training required.
          </p>
          <div class="bg-light rounded-3 p-4 mt-4 border mb-4">
            <p class="fw-bold mb-2" style="color: var(--heading-color);"><i class="bi bi-lightbulb-fill text-warning me-2"></i>Pro Tip</p>
            <p class="text-muted small mb-0">For beverage pouch testing, use a soap/bubble solution on the exterior seam before applying vacuum. Any breach produces highly visible bubbling for instant identification.</p>
          </div>
        </div>
        <div class="col-lg-7" data-aos="fade-left">

          <div class="proc-step">
            <div class="snum">1</div>
            <div class="scontent">
              <h6>Place Sample Inside the Chamber</h6>
              <p>Load the filled or sealed pouch, bottle, or packaging sample into the transparent vessel cylinder. Secure the lid and ensure a complete seal at the chamber opening.</p>
            </div>
          </div>

          <div class="proc-step">
            <div class="snum">2</div>
            <div class="scontent">
              <h6>Apply Vacuum or Pressure</h6>
              <p>Set the desired vacuum or positive pressure level using the adjustable controls. The chamber then rapidly establishes and holds the programmed test condition around the sample.</p>
            </div>
          </div>

          <div class="proc-step">
            <div class="snum">3</div>
            <div class="scontent">
              <h6>Observe Deformation or Bubbles</h6>
              <p>Through the fully transparent vessel wall, directly observe the sample's response. Healthy packaging will expand or contract uniformly. Leaks and weak seals produce visible deformation or bubble streams.</p>
            </div>
          </div>

          <div class="proc-step">
            <div class="snum">4</div>
            <div class="scontent">
              <h6>Identify Leaks or Weak Seals</h6>
              <p>Record the test result. Defective pouches are immediately identified, isolated, and rejected before reaching the supply chain — eliminating costly downstream product recalls.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ===== APPLICATIONS ===== -->
  <section class="tvp-section bg-alt">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <p class="section-label">Industries Served</p>
        <h2 style="font-weight: 800; font-size: 1.9rem; color: var(--heading-color);">Applications</h2>
        <p class="text-muted">The company serves as an <a href="https://bhfvacuum.com/transparent-vacuum-and-pressure-vessels.html" target="_blank" rel="noopener" style="color: inherit; text-decoration: none;"><em><strong>Exporter of Transparent Vacuum and Pressure Vessel</strong></em></a> equipment to food, beverage, pharmaceutical, and packaging industries worldwide.</p>
      </div>
      <div class="row g-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="app-card">
            <i class="fas fa-wine-bottle"></i>
            <h6>Beverage Packaging Testing</h6>
            <p>Specifically designed for juice, wine, and liquid beverage pouches — the primary application for the BET transparent vessel series.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="app-card">
            <i class="fas fa-box"></i>
            <h6>Plastic Pouch Integrity Testing</h6>
            <p>Tests flexible pouch seals for weaknesses that would cause leakage during transport, storage, or consumer handling.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="app-card">
            <i class="fas fa-utensils"></i>
            <h6>Food Packaging Industry</h6>
            <p>Validates modified atmosphere and vacuum-sealed food packs to ensure shelf life is maintained and spoilage from seal failure is eliminated.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="app-card">
            <i class="fas fa-pills"></i>
            <h6>Pharmaceutical Packaging</h6>
            <p>Confirms hermetic sealing of blister packs, IV bags, and medical device pouches for sterility integrity compliance.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="app-card">
            <i class="fas fa-industry"></i>
            <h6>Industrial Leak Detection</h6>
            <p>General-purpose industrial testing for sealed assemblies, gasket systems, and component housings requiring verified pressure retention.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
          <div class="app-card">
            <i class="fas fa-microscope"></i>
            <h6>Laboratory Research & QC</h6>
            <p>Research labs and QC departments use the transparent vessel for standardized packaging material stress-testing and failure analysis studies.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== TECHNICAL SPECIFICATIONS ===== -->
  <section class="tvp-section" id="specifications">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <p class="section-label">Model Lineup</p>
        <h2 style="font-weight: 800; font-size: 1.9rem; color: var(--heading-color);">Technical Specifications</h2>
        <p class="text-muted">Six standard configurations covering a wide range of pouch and container sizes.</p>
      </div>
      <div class="table-responsive shadow-sm rounded-3" data-aos="fade-up">
        <?php $spec_data = require __DIR__ . '/../../data/products/transparent_vacuum_vessels.php'; ?>
        <table class="tvp-spec-table">
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
                <?php foreach ($row as $cell): ?>
                  <td><?php echo htmlspecialchars($cell); ?></td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="text-center mt-4" data-aos="fade-up">
        <div class="d-inline-flex align-items-center gap-3 bg-light rounded-3 px-4 py-3 border">
          <i class="fas fa-tools text-primary fs-5"></i>
          <p class="mb-0 fw-semibold text-muted">Custom sizes manufactured on request — <a href="#contact" class="text-decoration-none fw-bold" style="color: var(--accent-color);">Contact our engineering team</a> with your specifications.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== BENEFITS ===== -->
  <section class="tvp-section bg-alt">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <p class="section-label">Business Impact</p>
        <h2 style="font-weight: 800; font-size: 1.9rem; color: var(--heading-color);">Key Benefits</h2>
        <p class="text-muted">Investing in quality inspection equipment pays dividends across the entire production chain.</p>
      </div>
      <div class="row g-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="benefit-item">
            <i class="bi bi-graph-up-arrow"></i>
            <div>
              <h6>Improves Product Quality</h6>
              <p>Systematic leak testing raises the bar for seal quality before products leave the production floor.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="benefit-item">
            <i class="bi bi-shield-fill-check"></i>
            <div>
              <h6>Reduces Leakage Failures</h6>
              <p>Early detection of weak seals eliminates field failures and customer complaints at the source.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="benefit-item">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div>
              <h6>Prevents Product Recalls</h6>
              <p>Catching seal defects pre-shipment avoids the enormous cost and brand damage of triggered market recalls.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="benefit-item">
            <i class="bi bi-star-fill"></i>
            <div>
              <h6>Enhances Brand Reliability</h6>
              <p>Consistent, leak-free products build lasting consumer trust and protect premium brand positioning.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="benefit-item">
            <i class="bi bi-piggy-bank-fill"></i>
            <div>
              <h6>Saves Cost in Production</h6>
              <p>Identifying and correcting seal failures at the QC stage costs a fraction of downstream rework, waste, and recall handling.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
          <div class="benefit-item">
            <i class="bi bi-speedometer2"></i>
            <div>
              <h6>Fast & Non-Destructive Testing</h6>
              <p>Each test cycle is fast and repeatable. Most samples can be re-used, minimizing material waste during inspection rounds.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== WHY CHOOSE BET ===== -->
  <section class="tvp-section">
    <div class="container">
      <div class="row gy-5 align-items-center">
        <div class="col-lg-5" data-aos="fade-right">
          <p class="section-label">Why Burhani Engineering</p>
          <h2 style="font-weight: 800; font-size: 1.9rem; color: var(--heading-color);">Why Choose BET?</h2>
          <p class="text-muted mt-3" style="font-size: 0.95rem; line-height: 1.8;">
            Many customers choose BET as their preferred <a href="https://bhfvacuum.com/transparent-vacuum-and-pressure-vessels.html" target="_blank" rel="noopener" style="color: inherit; text-decoration: none;"><em><strong>Dealer of Transparent Vacuum and Pressure Vessel</strong></em></a> systems because of their durability and testing accuracy. Burhani Engineering Technology brings decades of precision manufacturing expertise together with a deep understanding of customer requirements.
          </p>
          <a href="#contact" class="btn btn-primary mt-4" style="border-radius: 6px; padding: 13px 28px;">
            Request a Custom Quote
          </a>
        </div>
        <div class="col-lg-7" data-aos="fade-left">
          <div class="bg-white rounded-3 p-4 shadow-sm border">
            <div class="why-row">
              <div class="wi"><i class="fas fa-industry"></i></div>
              <div><h6>Industrial Manufacturing Expertise</h6><p>Years of dedicated experience designing and fabricating vacuum and pressure equipment for demanding production environments worldwide.</p></div>
            </div>
            <div class="why-row">
              <div class="wi"><i class="fas fa-gem"></i></div>
              <div><h6>High-Quality Materials</h6><p>Every vessel is constructed from premium transparent materials and hardware rated for repeated high-pressure cycling without degradation.</p></div>
            </div>
            <div class="why-row">
              <div class="wi"><i class="fas fa-check-double"></i></div>
              <div><h6>Reliable Performance</h6><p>Stringently quality-controlled during manufacturing to ensure performance consistency from the first test cycle to thousands of subsequent uses.</p></div>
            </div>
            <div class="why-row">
              <div class="wi"><i class="fas fa-drafting-compass"></i></div>
              <div><h6>Custom Engineering Solutions</h6><p>Non-standard sizes, pressure ranges, and special configurations are engineered and manufactured on request to meet unique application needs.</p></div>
            </div>
            <div class="why-row">
              <div class="wi"><i class="fas fa-globe"></i></div>
              <div><h6>Trusted by Industry Globally</h6><p>BET vessels are deployed in beverage, pharmaceutical, and industrial facilities across multiple countries, with export-ready documentation available.</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA / ENQUIRY ===== -->
  <section class="tvp-cta" data-aos="fade-up">
    <div class="container">
      <h2>Ready to Upgrade Your Leak Testing Process?</h2>
      <p>BET also supports customers globally as an <a href="https://bhfvacuum.com/transparent-vacuum-and-pressure-vessels.html" target="_blank" rel="noopener" style="color: inherit; text-decoration: none;"><em><strong>Importer of Transparent Vacuum and Pressure Vessel</strong></em></a> and solution provider for advanced vacuum and pressure testing equipment. Contact our team for a product brochure, custom sizing enquiry, or expert consultation.</p>
      <div class="d-flex justify-content-center gap-3 flex-wrap mb-4">
        <a href="#" class="dl-btn"><i class="fas fa-file-pdf"></i> Download Brochure</a>
        <a href="#" class="dl-btn"><i class="fas fa-file-alt"></i> Product Datasheet</a>
      </div>
      <a href="#contact" class="btn-primary-tvp" style="font-size: 1rem; padding: 15px 40px; border-radius: 8px; text-decoration: none; display: inline-block;">
        <i class="bi bi-envelope-fill me-2"></i>Send an Enquiry
      </a>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

