<?php
include_once(__DIR__ . '/../includes/config.php');
$location_name = "Global";
$meta_title = "Inert Glove Boxes for Chemical Research | Burhani Engineering Technology";
$meta_description = "Industrial inert atmosphere glove boxes for chemical synthesis, organometallic research, and safe handling of air-sensitive/pyrophoric compounds.";
$canonical_url = url('industries/chemical-research/');
include_once(__DIR__ . '/../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Chemical Research &amp; Synthesis</h1>
            <p class="mb-4">Hermetically Sealed Inert Atmosphere Glove Boxes for Handling Air-Sensitive and Pyrophoric Compounds</p>
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
            <h2>Isolating Reactive Chemical Reactions</h2>
            <p>
              In synthetic chemistry laboratories, handling air-sensitive catalysts, reactive organometallic compounds (such as Grignard reagents or alkyl lithiums), and pyrophoric metals requires reliable environmental isolation. Exposing these chemicals to water vapor or oxygen leads to instant oxidation, catalyst deactivation, or violent combustion.
            </p>
            
            <h3>Industry Challenges</h3>
            <ul>
              <li><strong>Pyrophoric Containment:</strong> Safely storing and manipulating metals that ignite spontaneously in standard air.</li>
              <li><strong>Acid &amp; Solvent Corrosion:</strong> Protecting chamber weld joints and glove portals from corrosive chemical vapors.</li>
              <li><strong>Solvent Vapor Poisoning:</strong> Preventing volatile organic compounds from poisoning gas purification catalyst beds.</li>
            </ul>

            <h3>The BET Solution</h3>
            <p>
              We manufacture robust <strong>Chemical Research Glove Boxes</strong> with SS304 or SS316L stainless steel enclosures. Our systems are equipped with inline activated charcoal solvent adsorption traps to scrub organic vapor compounds before they circulate to the main copper/zeolite purification column, ensuring a long-lasting sub-1 ppm purity.
            </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-light rounded border-top border-4 border-primary">
            <h4>Recommended Products</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2">
                <a href="<?php echo url('products/vacuum_glove_box/vacuum_glove_box.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-box-seam me-2"></i> Flagship Vacuum Glove Box
                </a>
              </li>
              <li class="mb-2">
                <a href="<?php echo url('products/vacuum_degassing_chamber/vacuum_degassing_chamber.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-gear me-2"></i> Vacuum Degassing Chamber
                </a>
              </li>
              <li class="mb-2">
                <a href="<?php echo url('products/Transparent_Vacuum_and_Pressure_Vessels/Transparent_Vacuum_and_Pressure_Vessels.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-box-seam me-2"></i> Transparent Vacuum Vessel
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
        <h2 class="text-white mb-3">Upgrade Chemical Safety</h2>
        <p class="mb-4">Consult with our chemical process engineers to design a custom inert glove box matching your solvent and temperature requirements.</p>
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
