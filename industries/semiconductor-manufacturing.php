<?php
include_once(__DIR__ . '/../includes/config.php');
$location_name = "Global";
$meta_title = "Inert Glove Boxes for Semiconductor Manufacturing | Burhani Engineering Technology";
$meta_description = "Cleanroom-integrated glove boxes and controlled atmosphere enclosures for semiconductor, wafer handling, and display manufacturing.";
$canonical_url = url('industries/semiconductor-manufacturing/');
include_once(__DIR__ . '/../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Semiconductor &amp; Display Manufacturing</h1>
            <p class="mb-4">Cleanroom-Grade Enclosures and Particulate-Controlled Environments for Advanced Wafer Handling</p>
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
            <h2>Micro-Particulate and Gaseous Contamination Mitigation</h2>
            <p>
              In semiconductor microchip fabrication and OLED panel assembly, contamination is measured at the nanometer and sub-ppm level. A single micro-particle of airborne dust landing on a photoresist wafer layer can cause path breakages, reducing wafer yield.
            </p>
            
            <h3>Industry Challenges</h3>
            <ul>
              <li><strong>Particulate Control:</strong> Maintaining an environment free from microscopic airborne dust during substrate transport.</li>
              <li><strong>Electrostatic Build-up:</strong> Dry nitrogen environments generate static charges, attracting dust and causing ESD damage to sensitive microchips.</li>
              <li><strong>Interface Integration:</strong> Safely transferring samples between atmospheric glove boxes and ultra-high vacuum ALD or deposition chambers.</li>
            </ul>

            <h3>The BET Solution</h3>
            <p>
              We manufacture cleanroom-grade <strong>Semiconductor Glove Boxes</strong> equipped with internal HEPA or ULPA filtration loops, delivering localized ISO Class 1 to Class 3 cleanliness levels. Our designs feature brushed or mirror-polished stainless steel structures to minimize particle shedding, active static-neutralizing ionizing bars to mitigate ESD risks, and custom flanges matching PVD/sputtering ports for seamless wafer transfers.
            </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-light rounded border-top border-4 border-primary">
            <h4>Recommended Products</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2">
                <a href="<?php echo url('products/vacuum_glove_box/semiconductor-glove-box.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-cpu me-2"></i> Semiconductor Glove Box
                </a>
              </li>
              <li class="mb-2">
                <a href="<?php echo url('products/Transparent_Vacuum_and_Pressure_Vessels/Transparent_Vacuum_and_Pressure_Vessels.php'); ?>" class="text-decoration-none text-dark hover-accent">
                  <i class="bi bi-box-seam me-2"></i> Transparent Vacuum Vessel
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
        <h2 class="text-white mb-3">Optimize Your Fabrication Yield</h2>
        <p class="mb-4">Consult with our cleanroom containment specialists to design a customized semiconductor glove box matching your tool integration needs.</p>
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
