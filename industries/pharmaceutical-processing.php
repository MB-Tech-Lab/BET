<?php
include_once(__DIR__ . '/../includes/config.php');
$location_name = "Global";
$meta_title = "Isolators for Pharmaceutical Processing | Burhani Engineering Technology";
$meta_description = "GMP-compliant pharmaceutical processing isolators. High-containment barriers for sterile drug compounding, API weighing, and sterility testing.";
$canonical_url = url('industries/pharmaceutical-processing/');
include_once(__DIR__ . '/../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Pharmaceutical Processing &amp; Isolators</h1>
            <p class="mb-4">GMP-Compliant Barrier Isolators for Aseptic Formulation and High-Containment API Handling</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            <h2>High-Containment Barriers for Safe Drug Formulation</h2>
            <p>
              In pharmaceutical processing, isolation barriers protect two critical targets: the drug product from ambient microbiological contamination and the operator from exposure to highly potent active pharmaceutical ingredients (HPAPIs).
            </p>
            
            <h3>Industry Challenges</h3>
            <ul>
              <li><strong>Regulatory Compliance:</strong> Meeting strict FDA, GMP, and ISO Grade A cleanliness requirements.</li>
              <li><strong>Decontamination Validation:</strong> Requiring complete compatibility with aggressive vaporized sanitizing agents (VHP).</li>
              <li><strong>HPAPI Exposure:</strong> Handling toxic powders with exposure limits below 1 µg/m³ safely.</li>
            </ul>

            <h3>The BET Solution</h3>
            <p>
              Our custom <strong>Pharmaceutical Glove Box Isolators</strong> are engineered with SS316L mirror-polished internal surfaces to prevent microbial buildup, HEPA/ULPA laminar flow loops, and VHP sanitization connections. For hazardous API weighing, we offer negative pressure designs with Bag-In/Bag-Out safe-change filtration, protecting technicians from volatile powder inhalation.
            </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-light rounded border-top border-4 border-primary">
            <h4>Recommended Products</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2">
                <a href="<?php echo url('products/vacuum_glove_box/pharmaceutical-glove-box.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-capsule me-2"></i> Pharmaceutical Glove Box
                </a>
              </li>
              <li class="mb-2">
                <a href="<?php echo url('products/pressure_aging_vessel/pressure_aging_vessel.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-gear me-2"></i> Pressure Aging Vessel
                </a>
              </li>
              <li class="mb-2">
                <a href="<?php echo url('products/vacuum_glove_box/vacuum_glove_box.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-box-seam me-2"></i> Flagship Vacuum Glove Box
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section py-5 light-background">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Optimize Containment Safety</h2>
        <p class="mb-4">Consult with our GMP compliance engineers to customize an aseptic or HPAPI containment isolator matching your cleanroom setup.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Request Technical Quote</a>
          <a href="<?php echo url('resources/vacuum-glove-box-buying-guide.php'); ?>" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Read Buying Guide</a>
        </div>
      </div>
    </div>
  </section>

</main>

<style>
    .page-title .heading { background-color: var(--heading-color); padding: 60px 0; color: #fff; }
    .page-title h1 { color: #fff; font-weight: 700; }
    .hover-accent { transition: all 0.3s ease; }
    .hover-accent:hover { color: var(--accent-color) !important; background-color: #e9ecef !important; }
</style>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
