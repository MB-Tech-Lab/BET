<?php
include_once(__DIR__ . '/../../../includes/config.php');

$location_name = "Global";

if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "ASTM D6653 High-Altitude Packaging Test in $city, $country | Vacuum Leak Test Machine";
    $meta_description = "ASTM D6653 high-altitude and vacuum packaging testing equipment available in $city, $country for evaluating package integrity, deformation, seals and closures under reduced-pressure conditions.";
    $canonical_url = product_category_url('Vacuum_Leak_Test_Machine', 'High_Altitude_Vacuum_Packaging_Test_ASTM_D6653');
} else {
    $meta_title = "ASTM D6653 High-Altitude Packaging Test | Vacuum Leak Test Machine";
    $meta_description = "ASTM D6653 high-altitude and vacuum packaging testing equipment for evaluating package integrity, deformation, seals and closures under reduced-pressure conditions.";
    $canonical_url = product_category_url('Vacuum_Leak_Test_Machine', 'High_Altitude_Vacuum_Packaging_Test_ASTM_D6653');
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
            <h1>High-Altitude / Vacuum Packaging Test for ASTM D6653</h1>
            <p class="mb-4">Advanced Vacuum Packaging and High-Altitude Simulation Testing System</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
              <a href="#" class="btn btn-outline-light d-flex align-items-center gap-2">
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
              <h2>ASTM D6653 High-Altitude &amp; Vacuum Packaging Test</h2>
              <p>Burhani Engineering Technology provides professional vacuum testing systems designed to evaluate packaging systems under reduced-pressure and high-altitude conditions using the vacuum method. The <strong>ASTM D6653</strong> standard is specifically intended to simulate the effects of high elevation during transportation and distribution.</p>
              <p>Unlike standard vacuum leak testing which focuses primarily on pinholes (such as ASTM D3078), ASTM D6653 evaluates how packages respond to severe pressure differentials. It helps QA teams and packaging engineers evaluate package deformation, seal integrity, closure performance, and structural weaknesses caused by altitude changes.</p>
            </div>

            <!-- Product Gallery -->
            <div class="product-gallery mb-5">
              <div class="main-image mb-3">
                <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png'); ?>" class="glightbox d-block" data-gallery="d6653-gallery">
                  <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png'); ?>" loading="lazy" alt="ASTM D6653 vacuum packaging test machine" class="w-100 h-100" style="object-fit: scale-down;">
                  </div>
                </a>
              </div>
              <div class="row g-2 thumbnail-gallery">
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png'); ?>" class="glightbox d-block" data-gallery="d6653-gallery">
                    <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                      <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png'); ?>" loading="lazy" alt="ASTM D6653 high altitude packaging test chamber" class="w-100 h-100" style="object-fit: scale-down;">
                    </div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Pic 2.png'); ?>" class="glightbox d-block" data-gallery="d6653-gallery">
                    <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                      <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Pic 2.png'); ?>" loading="lazy" alt="ASTM D6653 vacuum packaging testing equipment" class="w-100 h-100" style="object-fit: scale-down;">
                    </div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Pic 3.png'); ?>" class="glightbox d-block" data-gallery="d6653-gallery">
                    <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                      <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Pic 3.png'); ?>" loading="lazy" alt="ASTM D6653 package integrity testing system" class="w-100 h-100" style="object-fit: scale-down;">
                    </div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Pic 4.png'); ?>" class="glightbox d-block" data-gallery="d6653-gallery">
                    <div class="ratio ratio-16x9 bg-light rounded shadow-sm overflow-hidden">
                      <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Pic 4.png'); ?>" loading="lazy" alt="ASTM D6653 high altitude testing system" class="w-100 h-100" style="object-fit: scale-down;">
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <h3 class="mt-5">What is ASTM D6653?</h3>
            <p>ASTM D6653 is a specialized testing standard that simulates the effects of reduced atmospheric pressure on packaging systems. When packages are transported over high mountain passes or in unpressurized aircraft, the external pressure drops, causing the internal gas inside the package to expand. This pressure differential can lead to significant package deformation, seal failure, closure separation, and loss of product integrity.</p>
            <p>By using a controlled vacuum chamber, the ASTM D6653 method recreates these high-altitude conditions in a laboratory setting, allowing packaging engineers to observe how the package responds and identify potential failures before distribution.</p>

            <h3 class="mt-5">How ASTM D6653 Testing Works</h3>
            <p>The high-altitude simulation test is conducted in a structured, repeatable sequence:</p>
            <div class="row g-3 mt-2 mb-4">
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">01 — Package Placement</h6>
                  <p class="small mb-0">Place the packaged product or test specimen securely inside the vacuum chamber.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">02 — Secure Chamber</h6>
                  <p class="small mb-0">Close and secure the chamber lid to ensure an airtight seal for the test.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">03 — Apply Vacuum</h6>
                  <p class="small mb-0">Establish the required reduced-pressure or vacuum condition to simulate the target altitude.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">04 — Hold & Observe</h6>
                  <p class="small mb-0">Maintain the test condition for the required period while observing the package for deformation or seal issues.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">05 — Release Pressure</h6>
                  <p class="small mb-0">Carefully return the vacuum chamber to standard atmospheric pressure.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm bg-light h-100">
                  <h6 class="text-primary fw-bold">06 — Final Inspection</h6>
                  <p class="small mb-0">Remove the specimen, inspect its condition, and document any structural failures or leakage.</p>
                </div>
              </div>
            </div>

            <h3 class="mt-5">Test Purpose &amp; Acceptance Criteria</h3>
            <p>The primary purpose of ASTM D6653 testing is to reveal how pressure differentials affect a package's structural integrity. During and after the test, operators monitor for critical observations including:</p>
            <ul class="row list-unstyled gy-2 mt-3 mb-4 text-muted">
              <li class="col-md-6"><i class="bi bi-x-circle text-danger me-2"></i> Excessive package deformation</li>
              <li class="col-md-6"><i class="bi bi-x-circle text-danger me-2"></i> Seal separation or bursting</li>
              <li class="col-md-6"><i class="bi bi-x-circle text-danger me-2"></i> Closure problems (caps popping off)</li>
              <li class="col-md-6"><i class="bi bi-x-circle text-danger me-2"></i> Gross leakage of contents</li>
              <li class="col-md-6"><i class="bi bi-x-circle text-danger me-2"></i> Structural weakness or material failure</li>
              <li class="col-md-6"><i class="bi bi-x-circle text-danger me-2"></i> Loss of overall package integrity</li>
            </ul>
            <p><strong>Note:</strong> ASTM D6653 does not define a universal "Pass/Fail" threshold. Acceptance criteria depend strictly on the applicable packaging specification, product requirements, and the specific distribution protocol.</p>

            <h3 class="mt-5">Key Features</h3>
            <div class="row g-4 mt-2 mb-4">
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-cloud-arrow-up text-primary fs-3"></i>
                  <div>
                    <h5>High-Altitude Simulation</h5>
                    <p class="text-muted small">Capable of accurately simulating reduced atmospheric pressures encountered during transportation.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-eye text-primary fs-3"></i>
                  <div>
                    <h5>Transparent Chamber</h5>
                    <p class="text-muted small">Clear acrylic construction allows full visual observation of package deformation in real-time.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-arrow-repeat text-primary fs-3"></i>
                  <div>
                    <h5>Repeatable Test Conditions</h5>
                    <p class="text-muted small">Controlled vacuum environments ensure consistent and reliable testing for R&amp;D and quality control.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-gear text-primary fs-3"></i>
                  <div>
                    <h5>Robust Construction</h5>
                    <p class="text-muted small">Industrial-grade chamber and control interface designed to withstand continuous laboratory use.</p>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="mt-5">Advantages of ASTM D6653 Testing</h3>
            <p>Utilizing high-altitude and reduced-pressure testing provides significant advantages for manufacturers:</p>
            <ul class="row list-unstyled gy-2 mt-3 mb-4 text-muted">
              <li class="col-md-6"><i class="bi bi-check2-circle text-success me-2"></i> Identifies pressure-related package weaknesses.</li>
              <li class="col-md-6"><i class="bi bi-check2-circle text-success me-2"></i> Validates new package designs effectively.</li>
              <li class="col-md-6"><i class="bi bi-check2-circle text-success me-2"></i> Supports comprehensive transportation risk assessment.</li>
              <li class="col-md-6"><i class="bi bi-check2-circle text-success me-2"></i> Protects product and package integrity during transit.</li>
              <li class="col-md-6"><i class="bi bi-check2-circle text-success me-2"></i> Minimizes costly failures during high-elevation distribution.</li>
              <li class="col-md-6"><i class="bi bi-check2-circle text-success me-2"></i> Provides controlled, predictive laboratory simulation.</li>
            </ul>

            <h3 class="mt-5">Applications &amp; Industries</h3>
            <p>ASTM D6653 is crucial across multiple industries where products are shipped across diverse geographic elevations. Common applications include:</p>
            <ul class="row list-unstyled gy-2 mt-3">
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Pharmaceutical &amp; Medical packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Food &amp; Beverage packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Consumer product packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Flexible, rigid, and semi-rigid containers</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Chemical and industrial products</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Logistics, distribution, and transportation</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Packaging R&amp;D laboratories</li>
            </ul>

            <h3 class="mt-5">Equipment Customization</h3>
            <p>Burhani Engineering Technology offers customizable Vacuum Leak Test Machine configurations. Depending on your packaging requirements, chambers can be adapted for varying package dimensions, product types, and specific production or laboratory environments to ensure accurate ASTM D6653 high-altitude simulations.</p>

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
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Flexible_Packaging_ASTM_D3078'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>ASTM D3078 — Vacuum Leak Test for Flexible Packaging</span>
                  <i class="bi bi-chevron-right text-primary"></i>
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
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'High_Altitude_Vacuum_Packaging_Test_ASTM_D6653'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link-active">
                  <span class="fw-bold" style="color: var(--accent-color);">ASTM D6653 — High-Altitude / Vacuum Packaging Test</span>
                  <i class="bi bi-arrow-left-circle-fill" style="color: var(--accent-color);"></i>
                </a>
              </li>
            </ul>
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
        <p>Common questions about the ASTM D6653 method.</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is ASTM D6653?
                </button>
              </h3>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  ASTM D6653 is a standard test method designed to determine the effects of high altitude and reduced atmospheric pressure on packaging systems using a vacuum chamber.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What does ASTM D6653 test?
                </button>
              </h3>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  It tests a package's ability to withstand significant pressure differentials without suffering from deformation, seal separation, closure failure, or gross leakage.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why is high-altitude packaging testing important?
                </button>
              </h3>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Products distributed via ground over mountain passes or transported in unpressurized cargo holds experience severe pressure drops. Testing ensures packages won't burst or leak during transit.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  How does a vacuum chamber simulate reduced atmospheric pressure?
                </button>
              </h3>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  By mechanically withdrawing air from a sealed chamber, the equipment lowers the ambient pressure surrounding the package. This precisely mirrors the pressure drop experienced at higher physical altitudes.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  What types of packaging can be evaluated?
                </button>
              </h3>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The test is suitable for a wide range of packaging types including flexible pouches, rigid bottles, medical packaging, and consumer goods containers.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Is ASTM D6653 the same as a conventional vacuum leak test?
                </button>
              </h3>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  No. While both use vacuum chambers, conventional leak tests (like D3078) often submerge packages to find pinhole leaks via bubble emission. D6653 focuses on the mechanical response and structural integrity of a package exposed to extreme pressure differentials (often tested dry).
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h3 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Can the Vacuum Leak Test Machine be customized?
                </button>
              </h3>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, vacuum chambers can be manufactured in customized dimensions to accommodate specific package geometries and distribution testing requirements.
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
        <h3>Require an ASTM D6653 High-Altitude Packaging Tester?</h3>
        <p class="mb-4">Contact us today to discuss your package simulation testing requirements and get a custom quote.</p>
        <a href="#contact" class="btn btn-primary d-inline-flex align-items-center gap-2">
          <i class="bi bi-envelope"></i> Contact Our Sales Team
        </a>
      </div>
    </div>
  </section>

</main>

<style>
    .page-title .heading {
        background: linear-gradient(rgba(11, 37, 69, 0.8), rgba(19, 64, 116, 0.8)), url('<?php echo asset("img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png"); ?>') no-repeat center center / cover;
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
