<?php
include_once(__DIR__ . '/../includes/config.php');
$location_name = "Global";
$meta_title = "Vacuum Glove Box Maintenance Guide | Preventive Service | Burhani Engineering Technology";
$meta_description = "The comprehensive engineering maintenance guide for Vacuum Glove Boxes. Explaining glove inspections, vacuum pump service, and sensor calibration.";
$canonical_url = url('resources/glove-box-maintenance-guide/');
include_once(__DIR__ . '/../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Vacuum Glove Box Maintenance Guide</h1>
            <p class="mb-4">Preventive Maintenance Protocols, Service Schedules, and Calibration Procedures for Controlled Environments</p>
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
            <h2>Preventive Maintenance Protocols</h2>
            <p>
              To ensure the safety of your operators and maintain a high-purity inert gas atmosphere (sub-1 ppm Oxygen and Moisture), establishing a routine maintenance schedule is critical. Neglecting glove integrity checks or pump maintenance can lead to leaks, poisoned catalysts, and expensive experimental failures.
            </p>
            
            <h3>1. Daily Inspection: Glove Integrity</h3>
            <p>
              Gloves are the thinnest barrier between the laboratory air and the inert interior. They are susceptible to micro-punctures, tears, and chemical degradation.
            </p>
            <ul>
              <li><strong>Physical Inspection:</strong> Check gloves visually for cracking, pinholes, or chemical discoloration before putting hands inside.</li>
              <li><strong>Port Pressure Check:</strong> Fit a tight port cap over the glove port, pressurize the port, and monitor for pressure decay to detect micro-leaks.</li>
            </ul>

            <h3>2. Vacuum Pump Maintenance</h3>
            <p>
              The vacuum pump is essential for purging the antechamber. Standard rotary vane pumps require regular lubrication checks:
            </p>
            <ul>
              <li><strong>Oil Check:</strong> Check pump oil levels and color weekly. Dark or cloudy oil indicates contamination or degradation.</li>
              <li><strong>Oil Replacement:</strong> Replace pump oil every 3 to 6 months depending on usage, or annually for dry scroll pumps to maintain target vacuums of 10⁻³ mbar.</li>
            </ul>

            <h3>3. Sensor Calibration and Replacement</h3>
            <p>
              Oxygen and moisture sensors control gas purification cycles. They require regular calibration to prevent false readings:
            </p>
            <ul>
              <li><strong>Oxygen Sensors:</strong> Electro-chemical sensors must be calibrated annually and replaced every 2–3 years as the internal electrolyte gets consumed.</li>
              <li><strong>Moisture Sensors:</strong> Capacitive ceramic moisture sensors require recalibration or replacement every 12–24 months to ensure accuracy under 1 ppm.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-light rounded border-top border-4 border-primary">
            <h4>Service Schedule Summary</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><strong>Daily:</strong> Glove visual check</li>
              <li class="mb-2"><strong>Weekly:</strong> Pump oil level check</li>
              <li class="mb-2"><strong>Monthly:</strong> Pressure leak rate test</li>
              <li class="mb-2"><strong>6-12 Months:</strong> Catalyst column regeneration</li>
            </ul>
          </div>
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
