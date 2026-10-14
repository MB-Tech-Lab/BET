<?php
include_once(__DIR__ . '/../../../includes/config.php');

$location_name = "Global";

if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "ASTM D3078 Vacuum Leak Tester in $city, $country | Flexible Packaging Leak Test Apparatus | Burhani Engineering Technology";
    $meta_description = "High-performance ASTM D3078 Vacuum Leak Test Apparatus available in $city, $country. Professional package integrity testing equipment by Burhani Engineering Technology.";
    $canonical_url = product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Flexible_Packaging_ASTM_D3078');
} else {
    $meta_title = "ASTM D3078 Vacuum Leak Tester | Flexible Packaging Leak Test Apparatus | Burhani Engineering Technology";
    $meta_description = "ASTM D3078 Vacuum Leak Test Apparatus for bubble emission testing of flexible packaging, pouches and sealed packs. Professional package integrity testing equipment manufactured by Burhani Engineering Technology.";
    $canonical_url = product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Flexible_Packaging_ASTM_D3078');
}

include_once(__DIR__ . '/../../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <!-- Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>ASTM D3078 Vacuum Leak Testing Method for Flexible Packaging</h1>
            <p class="mb-4">Flexible Packaging Leak Detection & Package Integrity Testing System by Burhani Engineering Technology</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
              <a href="<?php echo url('brochers/Vacuum_Leak_Test_Machine/astm-d3078-vacuum-leak-tester.pdf'); ?>" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;" target="_blank">
                <i class="bi bi-file-earmark-pdf"></i> Download Technical PDF
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content Section -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <!-- Main Content -->
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            
            <div class="mb-5">
              <h2>ASTM D3078 Vacuum Leak Tester for Flexible Packaging</h2>
              <p>Burhani Engineering Technology manufactures professional vacuum leak-testing equipment for flexible packaging using the vacuum chamber bubble-emission method. The <strong>ASTM D3078</strong> method is specifically designed for evaluating gross leaks in flexible packaging containing headspace gas.</p>
              <p>By applying an external vacuum to a submerged package, this apparatus enables operators to visually detect leakage paths through bubble emission, verifying the integrity of seals and packaging materials.</p>
            </div>

            <!-- Product Gallery -->
            <div class="product-gallery mb-5">
              <div class="main-image mb-3">
                <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Main Pic 1.png'); ?>" class="glightbox d-block" data-gallery="d3078-gallery">
                  <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Main Pic 1.png'); ?>" loading="lazy" alt="ASTM D3078 Vacuum Leak Tester for Flexible Packaging" class="w-100 h-100" style="object-fit: scale-down;">
                  </div>
                </a>
              </div>
              <div class="row g-2 thumbnail-gallery">
                <div class="col-4">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Pic 2.png'); ?>" class="glightbox d-block" data-gallery="d3078-gallery">
                    <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                      <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Pic 2.png'); ?>" loading="lazy" alt="ASTM D3078 Vacuum Leak Test Apparatus" class="w-100 h-100" style="object-fit: scale-down;">
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Pic 3.png'); ?>" class="glightbox d-block" data-gallery="d3078-gallery">
                    <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                      <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Pic 3.png'); ?>" loading="lazy" alt="ASTM D3078 Flexible Packaging Leak Tester" class="w-100 h-100" style="object-fit: scale-down;">
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Pic catalog.png'); ?>" class="glightbox d-block" data-gallery="d3078-gallery">
                    <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                      <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Pic catalog.png'); ?>" loading="lazy" alt="ASTM D3078 Package Integrity Testing Equipment Catalog" class="w-100 h-100" style="object-fit: scale-down;">
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <h3 class="mt-5">What is ASTM D3078?</h3>
            <p>ASTM D3078 is a standard test method used for determining gross leaks in suitable flexible packages containing headspace gas. It relies on bubble emission under controlled vacuum conditions to provide immediate visual confirmation of package integrity.</p>

            <h3 class="mt-5">How Does the ASTM D3078 Vacuum Leak Test Work?</h3>
            <p>The testing process is straightforward and relies on pressure differentials:</p>
            <div class="row g-3 mt-2 mb-4">
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">01 — Package Placement</h6>
                  <p class="small mb-0">The flexible package is placed inside the transparent chamber.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">02 — Liquid Immersion</h6>
                  <p class="small mb-0">The package is submerged in test liquid (typically water) beneath a porous plate.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">03 — Chamber Sealing</h6>
                  <p class="small mb-0">The chamber lid is closed and properly sealed.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">04 — Controlled Vacuum</h6>
                  <p class="small mb-0">Controlled vacuum is applied to the chamber, lowering external pressure.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">05 — Bubble Observation</h6>
                  <p class="small mb-0">Gas inside the package expands. If there is a leakage path, gas escapes.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">06 — Leak Identification</h6>
                  <p class="small mb-0">The operator visually observes bubble formation to locate the leak.</p>
                </div>
              </div>
            </div>

            <h3 class="mt-5">Test Results: PASS / FAIL</h3>
            <div class="row g-4 mt-2">
              <div class="col-md-6">
                <div class="card h-100 border-success">
                  <div class="card-header bg-success text-white fw-bold"><i class="bi bi-check-circle me-2"></i> PASS</div>
                  <div class="card-body">
                    <p class="card-text">No evidence of leakage under the established test conditions, subject to the manufacturer's approved acceptance criteria.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100 border-danger">
                  <div class="card-header bg-danger text-white fw-bold"><i class="bi bi-x-circle me-2"></i> FAIL</div>
                  <div class="card-body">
                    <p class="card-text">Continuous or consistent bubble formation from a particular location. This may indicate a leakage path, pinhole, puncture, seal channel, or other package defect.</p>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="mt-5">Key Features of ASTM D3078 Vacuum Leak Tester</h3>
            <div class="row g-4 mt-2 mb-4">
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-box-seam text-primary fs-3"></i>
                  <div>
                    <h5>Transparent Vacuum Chamber</h5>
                    <p class="text-muted small">Provides full 360-degree visibility for accurate bubble observation.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-speedometer2 text-primary fs-3"></i>
                  <div>
                    <h5>Controlled Vacuum Generation</h5>
                    <p class="text-muted small">Precise vacuum application with a digital control system and high-quality vacuum components.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-search text-primary fs-3"></i>
                  <div>
                    <h5>Visual Bubble Leak Detection</h5>
                    <p class="text-muted small">Easily detect and locate approximate leak locations through bubble streams.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-tools text-primary fs-3"></i>
                  <div>
                    <h5>Durable & Easy Operation</h5>
                    <p class="text-muted small">Durable construction with easy operation, maintenance, and available custom chamber sizes.</p>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="mt-5">Applications of ASTM D3078 Vacuum Leak Testing</h3>
            <ul class="row list-unstyled gy-2 mt-3">
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Food Packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Coffee & Tea Packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Pharmaceutical Packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Pet Food Packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Consumer Product Packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Flexible Packaging Manufacturing</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Packaging R&D</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Quality Control Laboratories</li>
            </ul>

            <h3 class="mt-5">Package Seal Integrity Testing</h3>
            <p>ASTM D3078 is instrumental in supporting the investigation of packaging defects during quality control and packaging-process analysis. By identifying exactly where a package is leaking, manufacturers can diagnose and resolve issues such as:</p>
            <ul class="row list-unstyled gy-2 mt-3 mb-4 text-muted">
              <li class="col-md-6"><i class="bi bi-dash"></i> Improper heat sealing</li>
              <li class="col-md-6"><i class="bi bi-dash"></i> Seal channels</li>
              <li class="col-md-6"><i class="bi bi-dash"></i> Punctures & Material damage</li>
              <li class="col-md-6"><i class="bi bi-dash"></i> Pinholes</li>
              <li class="col-md-6"><i class="bi bi-dash"></i> Contamination in seal areas</li>
              <li class="col-md-6"><i class="bi bi-dash"></i> Wrinkled or folded seals</li>
              <li class="col-md-6"><i class="bi bi-dash"></i> Handling damage</li>
              <li class="col-md-6"><i class="bi bi-dash"></i> Manufacturing defects</li>
            </ul>

            <h3 class="mt-5">Advantages of the Vacuum Bubble Emission Method</h3>
            <div class="row g-3 mt-2 mb-4">
              <div class="col-md-4">
                <div class="p-3 border rounded shadow-sm text-center h-100">
                  <h6 class="fw-bold">Visual Results</h6>
                  <p class="small text-muted mb-0">Immediate visual confirmation of integrity.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-3 border rounded shadow-sm text-center h-100">
                  <h6 class="fw-bold">Approximate Leak Localization</h6>
                  <p class="small text-muted mb-0">Pinpoint exactly where the packaging failed.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-3 border rounded shadow-sm text-center h-100">
                  <h6 class="fw-bold">Simple & Fast</h6>
                  <p class="small text-muted mb-0">Simple test principle allowing rapid evaluation.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-3 border rounded shadow-sm text-center h-100">
                  <h6 class="fw-bold">Broad Applications</h6>
                  <p class="small text-muted mb-0">Suitable for a wide variety of flexible packaging.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-3 border rounded shadow-sm text-center h-100">
                  <h6 class="fw-bold">Process Optimization</h6>
                  <p class="small text-muted mb-0">Identify root causes to optimize the sealing process.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-3 border rounded shadow-sm text-center h-100">
                  <h6 class="fw-bold">Quality Assurance</h6>
                  <p class="small text-muted mb-0">Reliable QA support for production lines.</p>
                </div>
              </div>
            </div>

            <h3 class="mt-5">High-Visibility Transparent Test Chamber</h3>
            <p>Our clear chamber construction is crucial for bubble-emission testing. The transparent design allows operators to easily and accurately observe bubble streams, package expansion, seal-area leakage, and material punctures. It also provides a clear view of package positioning and test-liquid conditions, ensuring accurate test execution.</p>

            <h3 class="mt-5">Custom ASTM D3078 Vacuum Leak Test Chambers</h3>
            <p>Burhani Engineering Technology can manufacture custom chamber sizes and configurations according to your specific requirements. We can tailor solutions based on factors such as package dimensions, chamber capacity, testing volume, laboratory space, vacuum requirements, control-system preferences, and production QC workflow.</p>

          </div>
        </div>

        <!-- Product Categories Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary" style="background: #fff; border-top: 4px solid var(--accent-color) !important;">
            <h4 class="mb-4" style="color: var(--heading-color); font-weight: 700;">Product Categories</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo url('products/Vacuum_Leak_Test_Machine/Vacuum_Leak_Test_Machine.php'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span class="fw-bold"><i class="bi bi-arrow-return-left me-2"></i> Vacuum Leak Test Machine (Parent)</span>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Internal_Pressurization_Bubble_Testing_System_for_ASTM_F2096'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>ASTM F2096 — Internal Pressurization Bubble Leak Test</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Flexible_Packaging_ASTM_D3078'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link-active">
                  <span class="fw-bold" style="color: var(--accent-color);">ASTM D3078 — Vacuum Leak Test for Flexible Packaging</span>
                  <i class="bi bi-arrow-left-circle-fill" style="color: var(--accent-color);"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Rigid_Bottles_ASTM_D4991'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>ASTM D4991 — Vacuum Leak Test for Rigid Bottles &amp; Containers</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Rigid_Containers_ASTM_D5094'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>ASTM D5094 — Vacuum Leak Test for Rigid Containers &amp; Closures</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-0">
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'High_Altitude_Vacuum_Packaging_Test_ASTM_D6653'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>ASTM D6653 — High-Altitude / Vacuum Packaging Test</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Video Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>ASTM D3078 Vacuum Leak Testing Demonstration</h2>
        <p>Watch how the ASTM D3078 method is performed to evaluate flexible packaging integrity.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                <iframe
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/cvrmiQwGV9s"
                    title="ASTM D3078 Vacuum Leak Testing Demonstration"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Section -->
  <section class="section">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>Why Choose Burhani Engineering Technology?</h2>
      </div>
      <div class="row justify-content-center text-center gy-4" data-aos="fade-up">
        <div class="col-md-3">
          <i class="bi bi-shield-check text-primary fs-1 mb-2"></i>
          <h6 class="fw-bold">Reliable Engineering</h6>
        </div>
        <div class="col-md-3">
          <i class="bi bi-layers text-primary fs-1 mb-2"></i>
          <h6 class="fw-bold">Durable Build Quality</h6>
        </div>
        <div class="col-md-3">
          <i class="bi bi-eye text-primary fs-1 mb-2"></i>
          <h6 class="fw-bold">Clear Visual Inspection</h6>
        </div>
        <div class="col-md-3">
          <i class="bi bi-speedometer text-primary fs-1 mb-2"></i>
          <h6 class="fw-bold">Controlled Vacuum Testing</h6>
        </div>
        <div class="col-md-3">
          <i class="bi bi-hand-index-thumb text-primary fs-1 mb-2"></i>
          <h6 class="fw-bold">User-Friendly Operation</h6>
        </div>
        <div class="col-md-3">
          <i class="bi bi-gear text-primary fs-1 mb-2"></i>
          <h6 class="fw-bold">Custom Manufacturing</h6>
        </div>
        <div class="col-md-3">
          <i class="bi bi-building text-primary fs-1 mb-2"></i>
          <h6 class="fw-bold">Industrial & Laboratory Solutions</h6>
        </div>
      </div>
    </div>
  </section>

  <!-- D3078 vs F2096 Comparison -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>ASTM D3078 vs ASTM F2096</h2>
        <p>Understanding the difference between testing principles within the Vacuum Leak Test Machine family.</p>
      </div>
      <div class="row justify-content-center g-4" data-aos="fade-up">
        <div class="col-md-5">
          <div class="p-4 bg-white rounded shadow-sm border-top border-4 border-primary h-100">
            <h4 class="text-primary fw-bold">ASTM D3078</h4>
            <p><strong>Method:</strong> External vacuum + bubble emission.</p>
            <p class="text-muted small mb-0">The test relies on applying a vacuum to the chamber, causing the internal headspace gas of the flexible package to expand and escape through any leakage paths. Ideal for suitable flexible packages containing headspace gas.</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="p-4 bg-white rounded shadow-sm border-top border-4 border-secondary h-100">
            <h4 class="text-secondary fw-bold">ASTM F2096</h4>
            <p><strong>Method:</strong> Internal package pressurization + bubble observation.</p>
            <p class="text-muted small mb-0">The test involves puncturing the package to supply controlled internal positive pressure. If a leak exists, bubbles will emanate from the defect. A destructive test suitable for a wider variety of packages regardless of headspace gas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section & SEO Answers -->
  <section class="section">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Common questions about the ASTM D3078 method.</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is an ASTM D3078 Vacuum Leak Tester?
                </button>
              </h3>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  An ASTM D3078 Vacuum Leak Tester is a specialized apparatus designed for evaluating gross leaks in flexible packaging containing headspace gas through the bubble emission method under a controlled vacuum.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What is ASTM D3078 used for?
                </button>
              </h3>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  It is used to determine the integrity of seals and packaging materials by identifying leakage paths, pinholes, punctures, and channel leaks in flexible pouches and sealed packs.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How are leaks detected using ASTM D3078?
                </button>
              </h3>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A package is submerged in test liquid and subjected to an external vacuum. This causes the internal gas within the package to expand. If there is a leak, the gas escapes, creating an observable stream of bubbles.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What does bubble formation indicate?
                </button>
              </h3>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Continuous or consistent bubble formation from a specific location indicates a failure in the package integrity, such as a seal channel, pinhole, or material puncture.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Can ASTM D3078 identify where a package is leaking?
                </button>
              </h3>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, one of the primary advantages of this visual bubble emission method is its ability to identify the approximate location of the leak, aiding in root cause analysis.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  What packages can be tested?
                </button>
              </h3>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  It is highly suitable for flexible pouches and packages containing headspace gas, commonly found in food, coffee, pharmaceutical, and pet food packaging industries.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Can the vacuum chamber size be customized?
                </button>
              </h3>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, Burhani Engineering Technology can manufacture custom ASTM D3078 vacuum leak test chambers tailored to specific package dimensions, testing volumes, and laboratory space requirements.
                </div>
              </div>
            </div>
            
            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Who manufactures ASTM D3078 vacuum leak test equipment?
                </button>
              </h3>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Burhani Engineering Technology is a leading manufacturer of professional, industrial-grade ASTM D3078 Vacuum Leak Testers and package integrity testing equipment.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Section -->
  <section class="section">
    <div class="container">
      <div class="bg-white p-5 rounded text-center shadow-sm border-top border-4 border-primary" data-aos="zoom-in">
        <h3>Require an ASTM D3078 Vacuum Leak Tester?</h3>
        <p class="mb-4">Contact us today to discuss your flexible packaging testing requirements and get a custom quote.</p>
        <a href="#contact" class="btn btn-primary d-inline-flex align-items-center gap-2">
          <i class="bi bi-envelope"></i> Contact Our Sales Team
        </a>
      </div>
    </div>
  </section>

</main>

<style>
    .page-title .heading {
        background: linear-gradient(rgba(11, 37, 69, 0.8), rgba(19, 64, 116, 0.8)), url('<?php echo asset("img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Main Pic 1.png"); ?>') no-repeat center center / cover;
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
    .category-link {
        transition: all 0.3s ease;
        font-weight: 500;
        display: block;
    }
    .category-link:hover {
        color: var(--accent-color) !important;
        padding-left: 5px;
    }
    .category-link i {
        font-size: 0.8rem;
    }
    .category-link-active {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
    }
    .category-link-active i {
        font-size: 1.2rem;
    }
    .glightbox {
        cursor: zoom-in;
        display: block;
    }
    .glightbox img {
        transition: transform 0.3s ease;
    }
    .glightbox:hover img {
        transform: scale(1.02);
    }
    @media (max-width: 991px) {
        .sidebar-box {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<?php require_once __DIR__ . '/../../../includes/footer.php'; ?>
