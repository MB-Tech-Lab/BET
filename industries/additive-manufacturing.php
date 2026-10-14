<?php
include_once(__DIR__ . '/../includes/config.php');
$location_name = "Global";
$meta_title = "Inert Glove Boxes for Additive Manufacturing | Burhani Engineering Technology";
$meta_description = "Industrial inert gas glove boxes for metal 3D printing and powder handling. Safe management of reactive titanium and aluminum powders.";
$canonical_url = url('industries/additive-manufacturing/');
include_once(__DIR__ . '/../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Additive Manufacturing &amp; Powder Handling</h1>
            <p class="mb-4">Inert Gas Enclosures for Metal 3D Printing, Powder Storage, and Safe Material Recycling</p>
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
            <h2>Industrial Solutions for Metal Powder Handling</h2>
            <p>
              In metal additive manufacturing (3D printing), spherical powders of reactive metals such as Titanium ($Ti$), Aluminum ($Al$), and Cobalt-Chrome ($CoCr$) are utilized. When stored or handled in ambient air, these fine metal powders absorb moisture and oxidize, leading to printing defects, poor mechanical properties, and explosion hazards.
            </p>
            
            <h3>Industry Challenges</h3>
            <ul>
              <li><strong>Combustion Hazards:</strong> Fine reactive metal powders are pyrophoric and can ignite if exposed to trace oxygen in static-prone areas.</li>
              <li><strong>Moisture Absorption:</strong> Moisture causes metal powders to clump, resulting in uneven layers and print failures during powder recoating.</li>
              <li><strong>Powder Recycling:</strong> Reclaiming and sieving unsintered powder without exposing it to atmospheric contamination.</li>
            </ul>

            <h3>The BET Solution</h3>
            <p>
              Our custom <strong>Additive Manufacturing Glove Boxes</strong> are designed to isolate powder storage, sieving, and recycling workflows under a Nitrogen or Argon atmosphere. Systems feature integrated anti-static ESD grounding, gas-tight transfer airlocks, and HEPA particulate filtration loops to capture fine dust particles.
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
        <h2 class="text-white mb-3">Maximize Powder Safety</h2>
        <p class="mb-4">Consult with our additive manufacturing specialists to design an inert gas sieving or storage glove box matching your 3D printing setup.</p>
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
