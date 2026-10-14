<?php
include_once(__DIR__ . '/../../includes/config.php');

$location_name = "Global";

if (!empty($is_location_page) && $is_location_page) {
    $meta_title = "Vacuum Leak Test Machine in $city, $country | Burhani Engineering Technology";
    $meta_description = "Advanced Vacuum Leak Test Machine available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_url('vacuum-leak-test-machine');
} else {
    $meta_title = "Vacuum Leak Test Machine | Burhani Engineering Technology";
    $meta_description = "Advanced vacuum and leak testing solutions designed to detect leaks and evaluate the integrity of packaging and components across multiple testing standards.";
    $canonical_url = product_url('vacuum-leak-test-machine');
}

include_once(__DIR__ . '/../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <!-- Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Vacuum Leak Test Machine</h1>
            <p class="mb-4">Advanced Vacuum & Leak Testing Solutions for Packaging Integrity</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
              <a href="<?php echo url('brochers/F2096_Bubble_Leak_Test_Machine/bubble-emission-leak-testing-systems-for-astm-d3078.pdf'); ?>" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;" target="_blank">
                <i class="bi bi-file-earmark-pdf"></i> Product Specifications PDF
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
        
        <!-- Left Content -->
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            
            <!-- Introduction -->
            <div class="mb-5">
                <h2 class="mb-3">Vacuum Leak Testing Systems</h2>
                <p><strong>Burhani Engineering Technology</strong> provides advanced vacuum and leak testing systems engineered to evaluate the integrity of flexible packaging, rigid containers, bottles, closures, and sealed product systems. Identifying microscopic leaks and seal vulnerabilities is critical to maintaining sterility, preventing contamination, and ensuring product shelf life.</p>
                <p>Because there is no single solution for every package type, our Vacuum Leak Test Machine product family is designed to support a wide array of standardized ASTM testing methods. Depending on your packaging type and testing objectives—whether you need bubble-emission leak determination for flexible pouches, vacuum evaluation for rigid empty containers, or high-altitude simulation for transit validation—we offer precision-built instruments tailored to your requirements.</p>
            </div>

            <!-- Supported ASTM Testing Methods -->
            <h3 class="mt-5 mb-4">Supported ASTM Testing Methods</h3>
            <p class="mb-4">Our testing systems are configured to support the following international standards:</p>
            
            <div class="card mb-3 shadow-sm border-0 bg-light">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-check-circle-fill me-2"></i>ASTM F2096</h5>
                <h6 class="card-subtitle mb-2 text-muted">Internal Pressurization Bubble Leak Test</h6>
                <p class="card-text mb-0">Used for detecting and locating leaks in suitable non-porous rigid and flexible packages using internal pressurization and bubble emission principles.</p>
              </div>
            </div>

            <div class="card mb-3 shadow-sm border-0 bg-light">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-check-circle-fill me-2"></i>ASTM D3078</h5>
                <h6 class="card-subtitle mb-2 text-muted">Vacuum Leak Test for Flexible Packaging</h6>
                <p class="card-text mb-0">For evaluating leaks in suitable flexible packaging using a vacuum leak test chamber and evaluating bubble-emission at progressively different vacuum levels.</p>
              </div>
            </div>

            <div class="card mb-3 shadow-sm border-0 bg-light">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-check-circle-fill me-2"></i>ASTM D4991</h5>
                <h6 class="card-subtitle mb-2 text-muted">Vacuum Leak Test for Rigid Bottles & Containers</h6>
                <p class="card-text mb-0">Designed for the vacuum-based leakage evaluation of suitable rigid empty containers and bottles.</p>
              </div>
            </div>

            <div class="card mb-3 shadow-sm border-0 bg-light">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-check-circle-fill me-2"></i>ASTM D5094</h5>
                <h6 class="card-subtitle mb-2 text-muted">Vacuum Leak Test for Rigid Containers & Closures</h6>
                <p class="card-text mb-0">Used for evaluating gross leakage of liquids from suitable rigid containers and threaded/lug-style closure systems.</p>
              </div>
            </div>

            <div class="card mb-3 shadow-sm border-0 bg-light">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-check-circle-fill me-2"></i>ASTM D6653</h5>
                <h6 class="card-subtitle mb-2 text-muted">High-Altitude / Vacuum Packaging Test</h6>
                <p class="card-text mb-0">For evaluating the effects of reduced atmospheric pressure and high-altitude conditions on packaging systems, addressing deformation, seal failure, and product leakage.</p>
              </div>
            </div>
            
            <!-- Which Testing Method Do You Need? -->
            <div class="mt-5 mb-5 p-4 bg-white border rounded shadow-sm">
                <h3 class="mb-4">Which Testing Method Do You Need?</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Testing Requirement</th>
                                <th>Recommended ASTM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Internal pressurization / bubble leak detection</td>
                                <td><strong>ASTM F2096</strong></td>
                            </tr>
                            <tr>
                                <td>Flexible packaging vacuum leak testing</td>
                                <td><strong>ASTM D3078</strong></td>
                            </tr>
                            <tr>
                                <td>Rigid bottles & containers</td>
                                <td><strong>ASTM D4991</strong></td>
                            </tr>
                            <tr>
                                <td>Rigid containers & closures</td>
                                <td><strong>ASTM D5094</strong></td>
                            </tr>
                            <tr>
                                <td>High-altitude / reduced-pressure packaging simulation</td>
                                <td><strong>ASTM D6653</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-4">
                    <p class="mb-2"><strong>Not sure which testing method is right for your application?</strong></p>
                    <a href="#contact" class="btn btn-outline-primary">Request a Consultation</a>
                </div>
            </div>

          </div>
        </div>

        <!-- Product Categories Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary" style="background: #fff; border-top: 4px solid var(--accent-color) !important;">
            <h4 class="mb-4" style="color: var(--heading-color); font-weight: 700;">Product Categories</h4>
            <ul class="list-unstyled mb-0">
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
                  <span>ASTM D4991 — Vacuum Leak Test for Rigid Bottles & Containers</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Rigid_Containers_ASTM_D5094'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>ASTM D5094 — Vacuum Leak Test for Rigid Containers & Closures</span>
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

  <!-- Product Gallery Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>Product Gallery</h2>
        <p>A comprehensive visual overview of our vacuum leak testing configurations.</p>
      </div>

      <div class="row gy-4 justify-content-center product-gallery">
        <!-- Main Featured Image -->
        <div class="col-lg-6 col-md-12" data-aos="fade-up">
          <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 1.png'); ?>" class="glightbox gallery-item shadow rounded overflow-hidden h-100 main-gallery-item" data-gallery="product-gallery" title="ASTM F2096 vacuum leak test machine for packaging">
            <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 1.png'); ?>" alt="ASTM F2096 vacuum leak test machine for packaging" loading="lazy" class="img-fluid w-100">
          </a>
        </div>
        
        <!-- Thumbnails -->
        <div class="col-lg-6 col-md-12">
            <div class="row gy-4 h-100">
                <div class="col-6" data-aos="fade-up" data-aos-delay="100">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Main Pic 1.png'); ?>" class="glightbox gallery-item shadow rounded overflow-hidden h-100" data-gallery="product-gallery" title="ASTM D3078 vacuum leak test chamber for flexible packaging">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Main Pic 1.png'); ?>" loading="lazy" alt="ASTM D3078 vacuum leak test chamber for flexible packaging" class="img-fluid">
                  </a>
                </div>
                <div class="col-6" data-aos="fade-up" data-aos-delay="200">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D4991/ASTM D4991 Main Pic 1.png'); ?>" class="glightbox gallery-item shadow rounded overflow-hidden h-100" data-gallery="product-gallery" title="ASTM D4991 vacuum leak testing machine for rigid containers">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D4991/ASTM D4991 Main Pic 1.png'); ?>" alt="ASTM D4991 vacuum leak testing machine for rigid containers" loading="lazy" class="img-fluid">
                  </a>
                </div>
                <div class="col-6" data-aos="fade-up" data-aos-delay="300">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D5094/ASTM D5094  Main Pic 1.png'); ?>" class="glightbox gallery-item shadow rounded overflow-hidden h-100" data-gallery="product-gallery" title="ASTM D5094 vacuum leak testing system for rigid containers and closures">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D5094/ASTM D5094  Main Pic 1.png'); ?>" loading="lazy" alt="ASTM D5094 vacuum leak testing system for rigid containers and closures" class="img-fluid">
                  </a>
                </div>
                <div class="col-6" data-aos="fade-up" data-aos-delay="400">
                  <a href="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png'); ?>" class="glightbox gallery-item shadow rounded overflow-hidden h-100" data-gallery="product-gallery" title="ASTM D6653 high altitude packaging test chamber">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png'); ?>" loading="lazy" alt="ASTM D6653 high altitude packaging test chamber" class="img-fluid">
                  </a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Explore Our Vacuum Leak Testing Solutions (Visual Gateway) -->
  <section class="section">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Explore Our Vacuum Leak Testing Solutions</h2>
            <p>Select a testing standard to view detailed specifications, capabilities, and configurations.</p>
        </div>
        <div class="row justify-content-center gy-4">
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 product-visual-card">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 1.png'); ?>" class="card-img-top" alt="ASTM F2096 vacuum leak test machine for packaging" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold">ASTM F2096</h4>
                        <h6 class="card-subtitle mb-3 text-muted">Internal Pressurization Bubble Leak Test</h6>
                        <p class="card-text flex-grow-1">Submersion testing using internal pressurization to visually pinpoint microscopic leaks in sealed packages.</p>
                        <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Internal_Pressurization_Bubble_Testing_System_for_ASTM_F2096'); ?>" class="btn btn-outline-primary mt-auto">View Product <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0 product-visual-card">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D3078/ASTM D3078 Main Pic 1.png'); ?>" class="card-img-top" alt="ASTM D3078 vacuum leak test chamber for flexible packaging" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold">ASTM D3078</h4>
                        <h6 class="card-subtitle mb-3 text-muted">Flexible Packaging Vacuum Leak Test</h6>
                        <p class="card-text flex-grow-1">Determine the integrity of flexible packaging materials through bubble emission in a specialized vacuum chamber.</p>
                        <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Flexible_Packaging_ASTM_D3078'); ?>" class="btn btn-outline-primary mt-auto">View Product <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm border-0 product-visual-card">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D4991/ASTM D4991 Main Pic 1.png'); ?>" class="card-img-top" alt="ASTM D4991 vacuum leak testing machine for rigid containers" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold">ASTM D4991</h4>
                        <h6 class="card-subtitle mb-3 text-muted">Rigid Bottle & Container Vacuum Leak Test</h6>
                        <p class="card-text flex-grow-1">Specifically designed for testing empty rigid containers to ensure they can withstand vacuum without leakage.</p>
                        <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Rigid_Bottles_ASTM_D4991'); ?>" class="btn btn-outline-primary mt-auto">View Product <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-sm border-0 product-visual-card">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D5094/ASTM D5094  Main Pic 1.png'); ?>" class="card-img-top" alt="ASTM D5094 vacuum leak testing system for rigid containers and closures" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold">ASTM D5094</h4>
                        <h6 class="card-subtitle mb-3 text-muted">Rigid Container & Closure Leak Test</h6>
                        <p class="card-text flex-grow-1">Assess the seal integrity and gross leakage of liquids from containers equipped with threaded or lug-style closures.</p>
                        <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'Vacuum_Leak_Test_for_Rigid_Containers_ASTM_D5094'); ?>" class="btn btn-outline-primary mt-auto">View Product <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 shadow-sm border-0 product-visual-card">
                    <img src="<?php echo asset('img/Vacuum Leak Test Machine/ASTM D6653/ASTM D6653 Main Pic 1.png'); ?>" class="card-img-top" alt="ASTM D6653 high altitude packaging test chamber" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold">ASTM D6653</h4>
                        <h6 class="card-subtitle mb-3 text-muted">High-Altitude / Vacuum Packaging Test</h6>
                        <p class="card-text flex-grow-1">Simulate reduced atmospheric pressure environments during transit to prevent seal failure and product spoilage.</p>
                        <a href="<?php echo product_category_url('Vacuum_Leak_Test_Machine', 'High_Altitude_Vacuum_Packaging_Test_ASTM_D6653'); ?>" class="btn btn-outline-primary mt-auto">View Product <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </section>

  <!-- Applications Section -->
  <section class="section light-background">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6" data-aos="fade-right">
            <h2>Industrial Applications</h2>
            <p class="lead">Versatile testing configurations designed for rigorous quality control across critical sectors.</p>
            <p>Our vacuum and leak testing systems are employed across a broad spectrum of industries where packaging integrity is non-negotiable. Whether you require testing during R&D, continuous manufacturing QA/QC, or final distribution validation, we provide configurable solutions adapted to your unique use case.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <div class="row gy-3">
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent"><i class="bi bi-capsule text-primary me-2"></i> Pharmaceutical Packaging</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-heart-pulse text-primary me-2"></i> Medical Device Packaging</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-cup-straw text-primary me-2"></i> Food & Beverage Packaging</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-box-seam text-primary me-2"></i> Flexible Packaging</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-bottle text-primary me-2"></i> Rigid Container Mfg.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent"><i class="bi bi-bag text-primary me-2"></i> Consumer Products</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-clipboard-check text-primary me-2"></i> Quality Assurance</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-graph-up text-primary me-2"></i> Packaging R&D</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-truck text-primary me-2"></i> Transportation Testing</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-gear text-primary me-2"></i> Packaging Engineering</li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="section">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Why Choose Burhani Engineering Technology?</h2>
            <p>Industrial testing equipment built for precision, durability, and standard compliance.</p>
        </div>
        <div class="row gy-4 mt-2">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center p-4">
                    <div class="fs-1 text-primary mb-3"><i class="bi bi-crosshair"></i></div>
                    <h4>Precision Testing</h4>
                    <p class="text-muted">Designed around controlled and measurable testing conditions. Digital pressure measurement and programmable durations ensure highly repeatable, objective evaluations.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center p-4">
                    <div class="fs-1 text-primary mb-3"><i class="bi bi-diagram-3"></i></div>
                    <h4>Multiple ASTM Methods</h4>
                    <p class="text-muted">One cohesive product family supporting multiple packaging-testing requirements, empowering laboratories and QA departments with standardized operational procedures.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center p-4">
                    <div class="fs-1 text-primary mb-3"><i class="bi bi-tools"></i></div>
                    <h4>Custom Engineering</h4>
                    <p class="text-muted">Systems can be fully configured according to package dimensions, required vacuum ranges, sample quantities, and application needs, offering uncompromised testing capabilities.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center p-4">
                    <div class="fs-1 text-primary mb-3"><i class="bi bi-building"></i></div>
                    <h4>Industrial & Laboratory Ready</h4>
                    <p class="text-muted">Built for both robust manufacturing floor environments and precision-focused laboratory settings spanning QC, QA, and advanced packaging development.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center p-4">
                    <div class="fs-1 text-primary mb-3"><i class="bi bi-eye"></i></div>
                    <h4>Professional Test Visibility</h4>
                    <p class="text-muted">Where applicable, highly durable transparent acrylic chamber configurations allow for continuous, 360-degree visual observation during active testing cycles.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="text-center p-4">
                    <div class="fs-1 text-primary mb-3"><i class="bi bi-lightning-charge"></i></div>
                    <h4>Application-Focused Solutions</h4>
                    <p class="text-muted">System selection can be directly aligned with packaging type and specific testing objectives, ensuring you possess the exact diagnostic capabilities required.</p>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item mb-3 border-0 shadow-sm">
              <h2 class="accordion-header" id="faqHeading1">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                  What is a vacuum leak test machine?
                </button>
              </h2>
              <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A vacuum leak test machine is an industrial testing instrument designed to evaluate the integrity of packaging and sealed systems. By placing a sample within a chamber and creating a vacuum (often while the sample is submerged), operators can observe escaping air bubbles or measure pressure decay to pinpoint microscopic leaks, compromised seals, or material defects.
                </div>
              </div>
            </div>

            <div class="accordion-item mb-3 border-0 shadow-sm">
              <h2 class="accordion-header" id="faqHeading2">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                  What types of packaging can be tested?
                </button>
              </h2>
              <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our systems are capable of testing a vast range of packaging types, including flexible packaging (pouches, medical bags, snack bags), rigid containers (bottles, jars, vials), packages with threaded or lug-style closures, and complete transit packaging systems depending on the chosen ASTM method.
                </div>
              </div>
            </div>

            <div class="accordion-item mb-3 border-0 shadow-sm">
              <h2 class="accordion-header" id="faqHeading3">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                  Which ASTM standards are supported?
                </button>
              </h2>
              <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The Vacuum Leak Test Machine family supports several primary ASTM methods: <strong>ASTM F2096</strong>, <strong>ASTM D3078</strong>, <strong>ASTM D4991</strong>, <strong>ASTM D5094</strong>, and <strong>ASTM D6653</strong>.
                </div>
              </div>
            </div>

            <div class="accordion-item mb-3 border-0 shadow-sm">
              <h2 class="accordion-header" id="faqHeading4">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                  What is the difference between ASTM F2096, D3078, D4991, D5094, and D6653?
                </button>
              </h2>
              <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <ul class="mb-0 ps-3">
                      <li><strong>ASTM F2096:</strong> Internally pressurizes flexible/rigid packages submerged in water to detect bubble emission.</li>
                      <li><strong>ASTM D3078:</strong> Focuses specifically on flexible packaging using a vacuum chamber for bubble emission.</li>
                      <li><strong>ASTM D4991:</strong> Evaluates empty rigid containers under vacuum for leakage.</li>
                      <li><strong>ASTM D5094:</strong> Tests gross leakage of liquid from rigid containers utilizing closures.</li>
                      <li><strong>ASTM D6653:</strong> Simulates high-altitude and reduced-pressure environments to evaluate transit-related packaging effects.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item mb-3 border-0 shadow-sm">
              <h2 class="accordion-header" id="faqHeading5">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                  How do I choose the correct ASTM testing method?
                </button>
              </h2>
              <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Choosing the correct method depends on your package material (flexible vs. rigid), contents (empty vs. filled), and testing goal (gross leak location vs. high-altitude transit simulation). We encourage referencing our "Which Testing Method Do You Need?" table above, or contacting our technical team for application-specific guidance.
                </div>
              </div>
            </div>

            <div class="accordion-item mb-3 border-0 shadow-sm">
              <h2 class="accordion-header" id="faqHeading6">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                  Can the testing system be customized?
                </button>
              </h2>
              <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, Burhani Engineering Technology provides custom-engineered solutions. Chambers can be configured based on sample dimensions, required vacuum range, pump capacities, programmable testing durations, and specialized digital control interfaces.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA Section -->
  <section class="section">
    <div class="container">
      <div class="bg-white p-5 rounded text-center shadow-sm border-top border-4 border-primary" data-aos="zoom-in">
        <h3 class="mb-3">Ready to Validate Your Packaging Integrity?</h3>
        <p class="mb-4 lead">Consult with our technical experts to select the ideal vacuum leak testing configuration for your specific ASTM requirements.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#contact" class="btn btn-primary d-inline-flex align-items-center gap-2">
                <i class="bi bi-envelope"></i> Request a Quote
            </a>
            <a href="<?php echo url('brochers/F2096_Bubble_Leak_Test_Machine/bubble-emission-leak-testing-systems-for-astm-d3078.pdf'); ?>" class="btn btn-outline-primary d-inline-flex align-items-center gap-2" target="_blank">
                <i class="bi bi-file-earmark-pdf"></i> Download Specifications
            </a>
        </div>
      </div>
    </div>
  </section>

</main>

<style>
    .page-title .heading {
        background: linear-gradient(rgba(11, 37, 69, 0.8), rgba(19, 64, 116, 0.8)), url('<?php echo asset("img/Vacuum Leak Test Machine/ASTM F2096/ASTM F2096 Main Pic 1.png"); ?>') no-repeat center center / cover;
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
    
    /* Product Gallery Sizing */
    .product-gallery .gallery-item {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        border: 1px solid #eaecf0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-gallery .gallery-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .product-gallery .gallery-item img {
        object-fit: cover;
        object-position: center;
        height: 250px;
        width: 100%;
    }
    .product-gallery .main-gallery-item img {
        height: 524px; /* Double height of thumbnails + gap */
    }

    /* Product Visual Gateway Cards */
    .product-visual-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-visual-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.15) !important;
    }
    .product-visual-card img {
        height: 220px;
        object-fit: cover;
    }

    .glightbox {
        cursor: zoom-in;
        display: block;
    }
    
    @media (max-width: 991px) {
        .sidebar-box {
            position: static;
            margin-top: 20px;
        }
        .product-gallery .main-gallery-item img {
            height: 300px;
        }
        .product-gallery .gallery-item img {
            height: 200px;
        }
    }
    
    .accordion-button:not(.collapsed) {
        background-color: #f1f8ff;
        color: var(--accent-color);
    }
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }
</style>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
