<?php
include_once(__DIR__ . '/../../../includes/config.php');

$location_name = "Global";

if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "ASTM F2096 Leak Tester — Bubble Leak Test in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance ASTM F2096 Internal Pressurization Leak Tester available in $city, $country. Contact Burhani Engineering Technology for packaging integrity testing.";
    $canonical_url = product_category_url('Vacuum_Leak_Test_Machine', 'Internal_Pressurization_Bubble_Testing_System_for_ASTM_F2096');
} else {
    $meta_title = "ASTM F2096 Leak Tester — Internal Pressurization Bubble Leak Test | Burhani";
    $meta_description = "Reliable internal pressurization bubble testing system for detecting gross leaks in packaging according to ASTM F2096. Ideal for flexible packaging and medical pouches.";
    $canonical_url = product_category_url('Vacuum_Leak_Test_Machine', 'Internal_Pressurization_Bubble_Testing_System_for_ASTM_F2096');
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
            <h1>ASTM F2096 — Internal Pressurization Bubble Leak Test</h1>
            <p class="mb-4">Package Integrity & Gross Leak Detection System by Burhani Engineering Technology</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
              <a href="<?php echo url('brochers/F2096_Bubble_Leak_Test_Machine/bubble-emission-leak-testing-systems-for-astm-d3078.pdf'); ?>" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;" target="_blank">
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
              <h2>What is ASTM F2096?</h2>
              <p>The <strong>ASTM F2096 Internal Pressurization Bubble Leak Test</strong> is a highly reliable, destructive test method designed to detect gross leaks in packaging. Unlike external vacuum testing, ASTM F2096 uses <strong>internal positive pressurization</strong> to evaluate package seal integrity and identify microscopic defects down to 250-micron holes.</p>
              <p>By submerging a sealed package in a transparent water-filled test chamber and introducing controlled internal pressure, operators can visually observe bubble emission to rapidly identify and localize packaging defects.</p>
            </div>

            <!-- Product Gallery (Replaces single image) -->
            <div class="product-gallery mb-5">
              <div class="main-image mb-3">
                <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 1.png'); ?>" class="glightbox" data-gallery="f2096-gallery">
                  <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 1.png'); ?>" loading="lazy" alt="ASTM F2096 Internal Pressurization Bubble Leak Test Machine" class="img-fluid rounded shadow-sm w-100 object-fit-scale-down" style="height: 400px;">
                </a>
              </div>
              <div class="row g-2 thumbnail-gallery">
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 2.png'); ?>" class="glightbox" data-gallery="f2096-gallery">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 2.png'); ?>" loading="lazy" alt="ASTM F2096 Bubble Leak Testing System" class="img-fluid rounded shadow-sm w-100 object-fit-scale-down" style="height: 100px;">
                  </a>
                </div>
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 3.png'); ?>" class="glightbox" data-gallery="f2096-gallery">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 3.png'); ?>" loading="lazy" alt="ASTM F2096 Package Integrity Testing Equipment" class="img-fluid rounded shadow-sm w-100 object-fit-scale-down" style="height: 100px;">
                  </a>
                </div>
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/BUBBLE EMISSION LEAK TEST CHAMBER.jpeg'); ?>" class="glightbox" data-gallery="f2096-gallery">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/BUBBLE EMISSION LEAK TEST CHAMBER.jpeg'); ?>" loading="lazy" alt="Bubble Emission Leak Test Chamber" class="img-fluid rounded shadow-sm w-100 object-fit-scale-down" style="height: 100px;">
                  </a>
                </div>
                <div class="col-3">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/Vacuum Leak Tester catalog.png'); ?>" class="glightbox" data-gallery="f2096-gallery">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/Vacuum Leak Tester catalog.png'); ?>" loading="lazy" alt="ASTM F2096 Leak Tester" class="img-fluid rounded shadow-sm w-100 object-fit-scale-down" style="height: 100px;">
                  </a>
                </div>
              </div>
            </div>

            <h3 class="mt-4">How Does the Test Work?</h3>
            <p>The internal pressurization method requires the package to be punctured to create an air connection. Controlled positive air pressure is then supplied to the inside of the package while it is submerged in a clear acrylic tank. If the package's sterile barrier or seal is compromised, a steady stream of bubbles will emanate from the defect location.</p>
            <p>The system provides visual test results within 10 to 30 seconds. A major advantage of this method is that it allows operators to rapidly identify and pinpoint the exact location of the leak, distinguishing between material defects and seal failures.</p>

            <h3 class="mt-4">Key Features</h3>
            <div class="row g-4 mt-2 mb-4">
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-speedometer2 text-primary fs-3"></i>
                  <div>
                    <h5>Controlled Internal Pressurization</h5>
                    <p class="text-muted small">Precise air pressure regulation to test packages without bursting them.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-box-seam text-primary fs-3"></i>
                  <div>
                    <h5>Transparent Test Chamber</h5>
                    <p class="text-muted small">Clear acrylic tank allows for 360-degree visual leak identification.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-search text-primary fs-3"></i>
                  <div>
                    <h5>Defect Localization</h5>
                    <p class="text-muted small">Instantly locate the exact point of seal or material failure.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex gap-3">
                  <i class="bi bi-check-circle text-primary fs-3"></i>
                  <div>
                    <h5>Flexible Package Compatibility</h5>
                    <p class="text-muted small">Ideal for testing pouches, sealed trays, and flexible packaging.</p>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="mt-4">Applications</h3>
            <p>The ASTM F2096 Bubble Leak Test Apparatus is a critical tool for ensuring package seal evaluation and integrity. It is widely used across multiple industries for packaging R&D and production Quality Control.</p>
            <ul class="row list-unstyled gy-2 mt-3">
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Medical-device packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Pharmaceutical packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Flexible pouches</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Heat-sealed packages</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Sterile barrier packaging</li>
              <li class="col-md-6"><i class="bi bi-check2-all text-primary me-2"></i> Food packaging</li>
            </ul>
            
            <h3 class="mt-5">Test Sensitivity & Packaging Defects</h3>
            <p>This gross leak detection system is highly sensitive and helps prevent catastrophic failures in the supply chain by identifying packaging defects early. It verifies that the sterile barrier is intact, ensuring protection against environmental contamination.</p>
            
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
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Internal_Pressurization_Bubble_Testing_System_for_ASTM_F2096'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link-active">
                  <span class="fw-bold" style="color: var(--accent-color);">ASTM F2096 — Internal Pressurization Bubble Leak Test</span>
                  <i class="bi bi-arrow-left-circle-fill" style="color: var(--accent-color);"></i>
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
        <h2>ASTM F2096 Leak Testing Demonstration</h2>
        <p>Watch the ASTM F2096 internal pressurization bubble leak testing process and see how the system is used for package-integrity and gross-leak detection.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                <iframe
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/MMpXxJ5nErA?start=12"
                    title="ASTM F2096 Internal Pressurization Leak Testing"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Models & Specifications Section -->
  <section class="section">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>Models & Specifications</h2>
        <p>Choose from our standard range or request a custom size tailored to your requirements.</p>
      </div>

      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <h4 class="mb-3">Clear Chamber – Cube</h4>
          <div class="table-responsive">
            <table class="bet-spec-table table table-bordered table-hover text-center align-middle">
              <thead class="table-light">
                <tr>
                  <th>Model No</th>
                  <th>Capacity (Gallon)</th>
                  <th>Capacity (Litres)</th>
                  <th>Size (Inches)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Model No">BHFGCB080606</td>
                  <td data-label="Capacity (Gal)">1.2</td>
                  <td data-label="Capacity (L)">4.5</td>
                  <td data-label="Size">8x6x6</td>
                </tr>
                <tr>
                  <td data-label="Model No">BHFGCB110808</td>
                  <td data-label="Capacity (Gal)">3</td>
                  <td data-label="Capacity (L)">12</td>
                  <td data-label="Size">11x8x8</td>
                </tr>
                <tr>
                  <td data-label="Model No">BHFGCB181210</td>
                  <td data-label="Capacity (Gal)">10</td>
                  <td data-label="Capacity (L)">36</td>
                  <td data-label="Size">18x12x10</td>
                </tr>
                <tr>
                  <td data-label="Model No">BHFGCB242015</td>
                  <td data-label="Capacity (Gal)">31</td>
                  <td data-label="Capacity (L)">118</td>
                  <td data-label="Size">24x20x15</td>
                </tr>
                <tr>
                  <td data-label="Model No">BHFGCB302016</td>
                  <td data-label="Capacity (Gal)">41</td>
                  <td data-label="Capacity (L)">157</td>
                  <td data-label="Size">30x20x16</td>
                </tr>
                <tr>
                  <td data-label="Model No">BHFGCB322620</td>
                  <td data-label="Capacity (Gal)">72</td>
                  <td data-label="Capacity (L)">272</td>
                  <td data-label="Size">32x26x20</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="mt-2 text-muted small">* Custom Sizes Manufactured on Demand.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Common questions about the ASTM F2096 test method.</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is ASTM F2096?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  ASTM F2096 is the standard test method for detecting gross leaks in packaging by internal pressurization (also known as the bubble test). It is widely used to evaluate the seal and material integrity of sterile barrier packaging.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does ASTM F2096 work?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The test involves submersing a package in a transparent water-filled chamber and introducing controlled internal positive air pressure. If there is a leak, a steady stream of bubbles will escape from the package, allowing operators to locate the defect instantly.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Is ASTM F2096 a vacuum leak test?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  No. While often grouped with vacuum leak testers, ASTM F2096 specifically uses <strong>internal positive pressurization</strong> rather than an external vacuum to detect leaks.
                </div>
              </div>
            </div>
            
            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Is ASTM F2096 destructive?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, ASTM F2096 is considered a destructive test. To perform the test, the package must be punctured to insert an air probe/connection for internal pressurization.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  What packaging can be tested?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  This method is ideal for flexible packaging, medical pouches, pharmaceutical packaging, food packaging, and heat-sealed pouches.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  What defects can ASTM F2096 identify?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The test identifies gross leaks, weak seals, channel leaks, pinholes (down to 250 microns), and material punctures that compromise the sterile barrier.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Where is ASTM F2096 testing commonly used?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  It is extensively used in Research & Development (R&D), production Quality Control (QC), and Quality Assurance (QA) laboratories to ensure packages can withstand storage and transit environments.
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
        <h3>Need an ASTM F2096 Leak Tester?</h3>
        <p class="mb-4">Contact us today to discuss your package testing requirements and get a custom quote.</p>
        <a href="#contact" class="btn btn-primary d-inline-flex align-items-center gap-2">
          <i class="bi bi-envelope"></i> Contact Our Sales Team
        </a>
      </div>
    </div>
  </section>

</main>

<style>
    .page-title .heading {
        background: linear-gradient(rgba(11, 37, 69, 0.8), rgba(19, 64, 116, 0.8)), url('<?php echo asset("img/Vacuum Leak Test Machine/ASTM F2096/BUBBLE EMISSION LEAK TEST CHAMBER.jpeg"); ?>') no-repeat center center / cover;
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
    .bet-spec-table th {
        background-color: #f8f9fa;
        color: var(--heading-color);
    }
    @media (max-width: 991px) {
        .sidebar-box {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<?php require_once __DIR__ . '/../../../includes/footer.php'; ?>
