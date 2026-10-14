<?php
include_once(__DIR__ . '/../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page) {
    $meta_title = "Vacuum Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Vacuum Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_url('vacuum-glove-box');
} else {
    $meta_title = "Vacuum Glove Box | Inert Atmosphere Handling | Burhani Engineering Technology";
$meta_description = "Burhani Engineering Technology is a leading manufacturer of precision Vacuum Glove Boxes for battery research, chemical handling, and pharmaceuticals. High-purity inert atmosphere systems.";
$canonical_url = product_url('vacuum-glove-box');
}
include_once(__DIR__ . '/../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <!-- 1️⃣ Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <h1>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=VACUUM%20GLOVE%20BOX-,Vacuum%20Glove%20Box,-A%20vacuum%20glove"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Vacuum Glove Box
</a>
</h1>
            <p class="mb-4">Advanced Controlled Environment Systems for Oxygen & Moisture Sensitive applications</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
              <a href="#contact" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
                <i class="bi bi-envelope"></i> Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 2️⃣ Product Overview -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            <h2>Industrial Vacuum Glove Box Overview</h2>
<p>Burhani Engineering Technology is a trusted <strong>Manufacturer of Vacuum Glove Box</strong> systems for laboratory and industrial applications.</p>
<p>As a leading <strong>Supplier of Vacuum Glove Box</strong> equipment, we provide custom solutions for research facilities.</p>
<p>We are also an <strong>Exporter of Vacuum Glove Box</strong> systems serving customers across international markets.</p>
<p>Many clients choose us as their preferred <strong>Importer</strong> and <strong>Dealer of Vacuum Glove Box</strong> equipment.</p>

<p>
              <strong>Burhani Engineering Technology</strong> is a premier global manufacturer of research-grade, industrial-quality <strong>Vacuum Glove Boxes</strong>. These highly controlled, hermetically sealed containment systems are engineered for researchers and manufacturers who require a precise environment with exceptionally low levels of oxygen and moisture.
            </p>
            <p>
              By utilizing vacuum cycles to purge unwanted gases and introducing high-purity inert gases (Nitrogen or Argon), our systems provide a state-of-the-art solution for sensitive material handling.
            </p>
          </div>
        </div>

        <!-- Product Categories Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary" style="background: #fff; border-top: 4px solid var(--accent-color) !important;">
            <h4 class="mb-4" style="color: var(--heading-color); font-weight: 700;">Product Categories</h4>
            <ul class="list-unstyled mb-0">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/../../includes/product-catalog.php';
$catalog = get_product_catalog();
$subcategories = $catalog['vacuum-glove-box']['subcategories'] ?? [];
$count = count($subcategories);
$i = 0;
foreach ($subcategories as $slug => $name):
    $i++;
    $li_class = ($i === $count) ? 'mb-0' : 'mb-3 pb-2 border-bottom';
?>
              <li class="<?php echo $li_class; ?>">
                <a href="<?php echo product_category_url('vacuum_glove_box', $slug); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span><?php echo htmlspecialchars($name); ?></span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
<?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3️⃣ Introduction & 4️⃣ Principles -->
  <section class="section light-background">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h3>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=Introduction%20to%20Vacuum%20Glove%20Boxes"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Introduction to Vacuum Glove Boxes
</a>
</h3>
            <p>
              In cutting-edge research and manufacturing, certain processes require absolute control over environmental conditions. A vacuum glove box prevents contamination and oxidation, making it indispensable for Handling air-sensitive reagents, assembling electronics, and advanced material science.
            </p>
            <p>
              Our systems ensure product quality, operator safety, and research accuracy by maintaining a stable, isolated atmosphere throughout the entire workflow.
            </p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h3>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=Principles%20of%20Vacuum%20Glove%20Boxes%3A"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Working Principles
</a>
</h3>
            <ul>
              <li><strong>Airtight Chamber:</strong> A precision-engineered enclosure that eliminates atmospheric leakage.</li>
              <li><strong>Glove Manipulation:</strong> Ergonomic portals allow interaction with internal materials without breaking the seal.</li>
              <li><strong>Vacuum System:</strong> Efficiently removes air and moisture from the main chamber and antechambers.</li>
              <li><strong>Inert Gas Management:</strong> Replaces evacuated air with Nitrogen or Argon to create a controlled environment.</li>
              <li><strong>Pressure Control:</strong> Maintains a slight positive or negative pressure as per operational needs.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5️⃣ Technical Specifications -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=Specifications%20of%20Glove%20Box"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Technical Specifications
</a>
</h2>
        <p>Engineered for precision, our glove boxes meet the most stringent laboratory and industrial standards.</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          <div class="table-responsive">
            <?php $spec_data = require __DIR__ . '/../../data/products/vacuum_glove_box.php'; ?>
            <table class="bet-spec-table">
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
                    <td data-label="Feature"><?php echo htmlspecialchars($row[0]); ?></td>
                    <td data-label="Detail"><?php echo htmlspecialchars($row[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6️⃣ Key Features & Advantages -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=Applications%20of%20Vacuum%20Glove%20Boxes%3A"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Key Features & Advantages
</a>
</h2>
      </div>
      <div class="row gy-4">
        <div class="col-md-4" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box text-center p-4 bg-white rounded shadow-sm h-100">
            <i class="bi bi-shield-check fs-1 text-primary mb-3"></i>
            <h4>Advanced Sealing</h4>
            <p>Our unique sealing technology enables industry-leading low leakage rates for maximum safety.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
          <div class="icon-box text-center p-4 bg-white rounded shadow-sm h-100">
            <i class="bi bi-cpu fs-1 text-primary mb-3"></i>
            <h4>PLC Automation</h4>
            <p>Intuitive touch-screen interface for real-time monitoring of atmospheric conditions.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-out" data-aos-delay="300">
          <div class="icon-box text-center p-4 bg-white rounded shadow-sm h-100">
            <i class="bi bi-tools fs-1 text-primary mb-3"></i>
            <h4>Customizable</h4>
            <p>Modular designs that can be adapted to specific research or industrial footprint needs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7️⃣ Applications & 8️⃣ Benefits -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-7" data-aos="fade-up">
          <h3>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=Applications%20of%20Vacuum%20Glove%20Boxes%3A"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Critical Industry Applications
</a>
</h3>
          <div class="row gy-3">
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-2 p-3 bg-light rounded">
                <i class="bi bi-battery-charging text-primary"></i> <span>Lithium Battery R&D</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-2 p-3 bg-light rounded">
                <i class="bi bi-flask text-primary"></i> <span>Chemical Research</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-2 p-3 bg-light rounded">
                <i class="bi bi-display text-primary"></i> <span>OLED / PLED Research</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-2 p-3 bg-light rounded">
                <i class="bi bi-capsule text-primary"></i> <span>Pharmaceutical Research</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-2 p-3 bg-light rounded">
                <i class="bi bi-motherboard text-primary"></i> <span>Electronics Manufacturing</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-2 p-3 bg-light rounded">
                <i class="bi bi-precision-calculation text-primary"></i> <span>Nanotechnology</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
          <h3>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=Benefits%20of%20Vacuum%20Glove%20Boxes%3A"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Strategic Benefits
</a>
</h3>
          <ul class="list-unstyled">
            <li class="mb-3 d-flex gap-3">
              <i class="bi bi-check-circle-fill text-success"></i>
              <div><strong>Material Protection:</strong> Prevents oxidation and degradation of sensitive materials.</div>
            </li>
            <li class="mb-3 d-flex gap-3">
              <i class="bi bi-check-circle-fill text-success"></i>
              <div><strong>Contamination Prevention:</strong> Eliminates particles, moisture, and pollutants.</div>
            </li>
            <li class="mb-3 d-flex gap-3">
              <i class="bi bi-check-circle-fill text-success"></i>
              <div><strong>Enhanced Precision:</strong> Stable environment for delicate experimental manipulations.</div>
            </li>
            <li class="mb-3 d-flex gap-3">
              <i class="bi bi-check-circle-fill text-success"></i>
              <div><strong>Reduced Waste:</strong> Maximizes the lifespan and quality of expensive reagents.</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 9️⃣ Safety & Operational Considerations -->
  <section class="section light-background">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-6" data-aos="fade-up">
          <h3>
<a href="https://bhfvacuum.com/vacuum-glove-box.html#:~:text=Considerations%20for%20Using%20Vacuum%20Glove%20Boxes%3A"
   target="_blank"
   rel="noopener noreferrer"
   style="color: inherit; text-decoration: none;">
   Safety & Operational Excellence
</a>
</h3>
          <p>Proper management of environmental conditions is critical for system longevity and operator safety.</p>
          <div class="accordion" id="safetyAccordion">
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                  Gas Handling & Maintenance
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                  Strict adherence to inert gas management protocols is essential to maintain the &lt; 1ppm purity levels required for sensitive R&amp;D.
                </div>
              </div>
            </div>
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                  Glove Integrity & Inspection
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                  Regular inspection of the chemical-resistant gloves is a mandatory safety step to prevent atmospheric breaches.
                </div>
              </div>
            </div>
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                  Airlock Protocols
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#safetyAccordion">
                <div class="accordion-body">
                  Utilizing the antechamber airlock system ensures material transfer without compromising the main chamber's atmosphere.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="p-5 bg-white rounded shadow-sm border-top border-4 border-info">
            <h4>Custom Manufacturing Capability</h4>
            <p>Burhani Engineering Technology offers worldwide researchers state-of-the-art glovebox models that can be custom-built as per your unique requirements.</p>
            <p>Our all-weld stainless steel design minimizes points of leakage and allows for an easy, fast initial setup.</p>
            <a href="#contact" class="btn btn-primary mt-3">Request Custom Design</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 1: What is a Vacuum Glove Box? -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up">
          <h2 class="mb-4">What is a Vacuum Glove Box?</h2>
          <p class="lead">
            A <strong>Vacuum Glove Box</strong> (also referred to as an <em>Inert Atmosphere Glove Box</em> or <em>Controlled Atmosphere Chamber</em>) is a hermetically sealed laboratory and industrial containment system designed to isolate sensitive processes from the surrounding ambient atmosphere. 
          </p>
          <p>
            By establishing a controlled physical boundary, these enclosures allow operators to manipulate materials that react dynamically with oxygen, water vapor, or atmospheric particulates. Purity levels are typically brought down to <strong>sub-1 ppm (parts per million)</strong> concentration zones for both oxygen ($O_2$) and moisture ($H_2O$).
          </p>
          
          <div class="row gy-4 mt-2">
            <div class="col-md-6">
              <h5>Controlled Atmosphere &amp; Purge Technology</h5>
              <p>
                The primary mechanism for achieving an ultra-pure environment inside a glove box is the displacement of standard air. This is accomplished using a multi-step vacuum-purge process or a continuous inert gas purge. The air inside the chamber is evacuated via a rotary vane or dry scroll vacuum pump down to a deep vacuum range (typically <strong>$10^{-2}$ to $10^{-3}$ mbar</strong>). Once evacuated, the chamber is backfilled with a high-purity inert gas such as <strong>Nitrogen</strong>, <strong>Argon</strong>, or <strong>Helium</strong>.
              </p>
            </div>
            <div class="col-md-6">
              <h5>Inert Gas Selection Criteria</h5>
              <ul>
                <li><strong>Nitrogen ($N_2$):</strong> The most common and cost-effective gas choice for general chemical handling, powder processing, and organic synthesis. However, it cannot be used for lithium battery research, as lithium reacts with nitrogen to form lithium nitride ($Li_3N$).</li>
                <li><strong>Argon ($Ar$):</strong> An outstanding heavier-than-air noble gas that is completely inert. It is the absolute standard for Lithium-ion battery R&amp;D, titanium welding, and active metal processing.</li>
                <li><strong>Helium ($He$):</strong> Frequently utilized in aerospace and specialized physical research requiring high thermal conductivity and low leak detection test capabilities.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 2: Key Features of BET Vacuum Glove Boxes -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Key Features of BET Vacuum Glove Boxes</h2>
        <p>Expertly built containment systems engineered for safety, reliability, and precision control.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h5 class="text-primary"><i class="bi bi-box-seam me-2"></i>Heavy-Duty Construction</h5>
            <p class="small text-muted">Available in high-grade <strong>Stainless Steel SS304 or SS316L</strong> for chemical resistance and vacuum structural integrity, as well as clear <strong>heavy-gauge Acrylic</strong> configurations for full visibility.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h5 class="text-primary"><i class="bi bi-speedometer2 me-2"></i>Deep Vacuum Capability</h5>
            <p class="small text-muted">Chambers are certified to withstand negative pressure limits down to <strong>$10^{-3}$ mbar</strong>, allowing fast and efficient evacuation-backfill cycles without structural distortion.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h5 class="text-primary"><i class="bi bi-filter-circle me-2"></i>Integrated Gas Purification</h5>
            <p class="small text-muted">Closed-loop gas circulation paired with a catalyst column constantly removes trace oxygen and moisture to maintain purity levels under <strong>1 ppm</strong>.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h5 class="text-primary"><i class="bi bi-cpu me-2"></i>PLC &amp; Touch Screen Automation</h5>
            <p class="small text-muted">Siemens or Delta PLC control units track internal pressure, purge cycles, gas regeneration, and trigger safety interlocks dynamically.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h5 class="text-primary"><i class="bi bi-activity me-2"></i>Real-time Purity Monitoring</h5>
            <p class="small text-muted">Integrated electro-chemical Oxygen and capacitive Moisture sensors provide accurate, continuous ppm tracking of the internal atmosphere.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h5 class="text-primary"><i class="bi bi-door-closed me-2"></i>Integrated Airlocks</h5>
            <p class="small text-muted">Standard cylindrical or square antechambers with dual interlocking doors and independent purge controls enable safe, contamination-free sample transfer.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 3: Technical Specifications Table -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Engineering Specifications Table</h2>
        <p>Review the comprehensive mechanical and environmental parameters of our standardized models.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="bet-spec-table table table-bordered">
              <thead class="bg-dark text-white">
                <tr>
                  <th>Technical Parameter</th>
                  <th>Stainless Steel Series (SS-GBox)</th>
                  <th>Acrylic Series (AC-GBox)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Chamber Material</strong></td>
                  <td>SS304, SS316, or SS316L (Acid &amp; corrosion resistant)</td>
                  <td>Optically clear PMMA Acrylic (20mm - 25mm thickness)</td>
                </tr>
                <tr>
                  <td><strong>Internal Atmosphere</strong></td>
                  <td>Argon, Nitrogen, Helium (High-purity grade)</td>
                  <td>Argon or Nitrogen (Low pressure purge only)</td>
                </tr>
                <tr>
                  <td><strong>Vacuum Level</strong></td>
                  <td>Up to $10^{-3}$ mbar (Antechamber and Main Chamber)</td>
                  <td>Mainly used for gas purge (Antechamber vacuum up to $10^{-1}$ mbar)</td>
                </tr>
                <tr>
                  <td><strong>O₂ &amp; H₂O Purity</strong></td>
                  <td>&lt; 1 ppm (with active gas purification loop)</td>
                  <td>&lt; 100 ppm (via continuous purge methods)</td>
                </tr>
                <tr>
                  <td><strong>Glove Port Sleeves</strong></td>
                  <td>High-resistance Butyl, Hypalon, or Neoprene gloves</td>
                  <td>Hypalon or Nitrile chemical-resistant gloves</td>
                </tr>
                <tr>
                  <td><strong>Chamber Leak Rate</strong></td>
                  <td>&lt; 0.05 vol%/h (verified by helium mass spec)</td>
                  <td>&lt; 0.1 vol%/h (verified by pressure drop test)</td>
                </tr>
                <tr>
                  <td><strong>Airlock Transfer Chamber</strong></td>
                  <td>380mm Diameter x 600mm Length (Independent vacuum gauge)</td>
                  <td>150mm Diameter x 300mm Length (Standard acrylic tube)</td>
                </tr>
                <tr>
                  <td><strong>System Voltage</strong></td>
                  <td>220V/110V AC, 50Hz/60Hz, Single Phase</td>
                  <td>Not required (Unless optional LED/Sensor active)</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 4: Gas Purification Technology -->
  <section class="section light-background">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-6" data-aos="fade-up">
          <h2 class="mb-4">Gas Purification &amp; Catalyst Technology</h2>
          <p>
            To achieve and sustain a pristine environment where oxygen and moisture concentrations remain below <strong>1 ppm</strong>, the glove box is connected to a closed-loop gas purification system. This loop constantly circulates the inert gas inside the main chamber through a purification column.
          </p>
          <h5>Purity Control Mechanisms</h5>
          <ul>
            <li><strong>Oxygen Removal:</strong> A highly active copper catalyst bed reacts with oxygen molecules, converting them into copper oxide and trapping them within the column.</li>
            <li><strong>Moisture Absorption:</strong> A synthetic molecular sieve column adsorbs water molecules from the circulating gas flow.</li>
            <li><strong>Closed-Loop Circulation:</strong> High-efficiency blower fans push the gas through the column and return clean gas back into the chamber in a continuous cycle.</li>
          </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-primary">
            <h5>Catalyst Column Regeneration Process</h5>
            <p class="small text-muted">
              Over time, the purification catalyst bed becomes saturated with trapped molecules. The system features an automated <strong>Regeneration Program</strong> executed through the PLC touch screen:
            </p>
            <ol class="small text-muted">
              <li>The column is isolated from the main chamber.</li>
              <li>A regeneration gas mixture (typically 95% Nitrogen/Argon and 5% Hydrogen) is introduced.</li>
              <li>The column is heated to approximately 200°C–250°C.</li>
              <li>Hydrogen reacts with copper oxide to form water vapor, which is vented out along with the moisture.</li>
              <li>The column is cooled down, evacuated, and put back into the circulation loop.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 5: Industry Applications -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Targeted Industry Applications</h2>
        <p>BET glove boxes are used across critical global industries for sensitive processes.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm bg-light">
            <h5 class="text-dark"><i class="bi bi-battery-charging me-2 text-primary"></i>Battery Research</h5>
            <p class="small text-muted">Provides a pure Argon environment to handle metallic lithium and sodium anode materials without oxidation during coin-cell, pouch-cell, and solid-state battery assembly.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm bg-light">
            <h5 class="text-dark"><i class="bi bi-cpu me-2 text-primary"></i>Semiconductor &amp; OLED</h5>
            <p class="small text-muted">Protects wafer processing, OLED pixel encapsulation, MEMS assembly, and microelectronics from ambient humidity and dust particles.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm bg-light">
            <h5 class="text-dark"><i class="bi bi-capsule me-2 text-primary"></i>Pharmaceutical &amp; API</h5>
            <p class="small text-muted">Designed for aseptic handling of Active Pharmaceutical Ingredients (APIs), sterile compound processing, and containing hazardous materials.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm bg-light">
            <h5 class="text-dark"><i class="bi bi-funnel me-2 text-primary"></i>Chemical Synthesis</h5>
            <p class="small text-muted">Indispensable for organometallic synthesis, handling pyrophoric metals, and storing air-sensitive reagents safely.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-4 h-100 border-0 shadow-sm bg-light">
            <h5 class="text-dark"><i class="bi bi-printer me-2 text-primary"></i>Additive Manufacturing</h5>
            <p class="small text-muted">Ensures safe handling, sieving, and recycling of reactive metal powders (Titanium, Aluminum) for high-grade industrial 3D printing.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-4 h-100 border-0 shadow-sm bg-light">
            <h5 class="text-dark"><i class="bi bi-sun me-2 text-primary"></i>Perovskite Solar Research</h5>
            <p class="small text-muted">Offers clean conditions for thin-film spin coating, solar cell deposition, and evaluation of photovoltaic materials.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 6: Product Variants Available -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Available Product Variants</h2>
        <p>Explore our wide array of glove box types tailored to unique budgets and applications.</p>
      </div>
      <div class="row gy-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <img src="<?php echo asset('img/Stainless Steel Vacuum Glove Box.webp'); ?>" loading="lazy" alt="Standard Stainless Steel Glove Box" class="img-fluid rounded mb-3">
            <h6>Standard Stainless Steel Glove Box</h6>
            <p class="small text-muted">A rugged, general-purpose SS304 glove box utilizing vacuum-backfill purge for basic air-sensitive operations.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <img src="<?php echo asset('img/Glove Box/high vacuum glove box.jpg'); ?>" loading="lazy" alt="High Vacuum Glove Box" class="img-fluid rounded mb-3">
            <h6>High Vacuum Glove Box</h6>
            <p class="small text-muted">Reinforced chamber design suited for deep vacuum operations below $10^{-3}$ mbar, matching physical research specs.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <img src="<?php echo asset('img/Glove Box/gas purification glove box.jpg'); ?>" loading="lazy" alt="Gas Purification Glove Box" class="img-fluid rounded mb-3">
            <h6>Gas Purification Glove Box</h6>
            <p class="small text-muted">Equipped with active copper catalyst and molecular sieve towers for long-term sub-1 ppm O₂ &amp; H₂O atmosphere control.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <img src="<?php echo asset('img/Glove Box\Acrylic Vacuum Glove Box.webp'); ?>" loading="lazy" alt="Acrylic Vacuum Glove Box" class="img-fluid rounded mb-3">
            <h6>Acrylic Vacuum Glove Box</h6>
            <p class="small text-muted">Cost-effective PMMA chamber offering 360-degree clarity, suitable for academic teaching and low-purity work.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <img src="<?php echo asset('img/Glove Box/Mini Glove Box.jpg'); ?>" loading="lazy" alt="Mini Glove Box" class="img-fluid rounded mb-3">
            <h6>Mini Glove Box</h6>
            <p class="small text-muted">A compact, space-saving design suitable for small-scale material transfer and space-restricted labs.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <img src="<?php echo asset('img/Glove Box/Anaerobic Glove Box.jpg'); ?>" loading="lazy" alt="Anaerobic Glove Box" class="img-fluid rounded mb-3">
            <h6>Anaerobic Glove Box</h6>
            <p class="small text-muted">Specialized configuration designed to eliminate oxygen for microbiology research and anaerobic bacterial cultivation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 7: Airlock Chamber System -->
  <section class="section">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-6" data-aos="fade-up">
          <h2 class="mb-4">Advanced Airlock Chamber System</h2>
          <p>
            An airlock (or antechamber) is a crucial interface that allows samples and tools to pass in and out of the main chamber without exposing the ultra-pure internal atmosphere to external ambient air. 
          </p>
          <h5>Operational Steps for Material Transfer</h5>
          <ol class="small text-muted">
            <li><strong>Loading:</strong> Open the outer door of the airlock, place materials inside, and secure the outer door seal.</li>
            <li><strong>Evacuation:</strong> Evacuate the airlock using the auxiliary vacuum valve down to target levels.</li>
            <li><strong>Refilling:</strong> Backfill the airlock with inert gas from the main chamber line.</li>
            <li><strong>Repeat:</strong> Perform at least 3 vacuum-refill purge cycles to ensure all oxygen and moisture are removed from the sample surfaces.</li>
            <li><strong>Transfer:</strong> Open the inner sliding door from inside the glove box, pull the transfer tray into the main chamber, retrieve items, and close the inner door.</li>
          </ol>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-light rounded border-start border-4 border-info">
            <h5>Antechamber Core Specifications</h5>
            <ul class="small text-muted">
              <li><strong>Type:</strong> Cylindrical (Standard) or Custom Square.</li>
              <li><strong>Vacuum Tolerance:</strong> Down to $10^{-2}$ mbar.</li>
              <li><strong>Door Mechanism:</strong> Swivel-type quick-clamp doors with silicone o-rings.</li>
              <li><strong>Sliding Tray:</strong> Standard Stainless Steel SS304 tray with smooth linear rails.</li>
              <li><strong>Purge System:</strong> Manual three-way ball valves or automated solenoid PLC purge valves.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 8: Why Choose Burhani Engineering Technology? -->
  <section class="section light-background">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up">
          <h2 class="mb-4">Why Choose Burhani Engineering Technology?</h2>
          <p>
            As a global leader in precision vacuum and containment engineering, we are committed to delivering systems that meet the highest standards of reliability.
          </p>
          <div class="row gy-4 mt-2">
            <div class="col-md-4">
              <h5>Custom Engineering</h5>
              <p class="small text-muted">We don't just sell off-the-shelf boxes. Our engineering team designs custom glove configurations, special chamber dimensions, and integrated ovens or feedthroughs to fit your precise workflow.</p>
            </div>
            <div class="col-md-4">
              <h5>Rigorous Quality Control</h5>
              <p class="small text-muted">Every glovebox undergoes pressure decay tests and Helium leak testing to ensure hermetic sealing before packaging and dispatch.</p>
            </div>
            <div class="col-md-4">
              <h5>Global Delivery &amp; Support</h5>
              <p class="small text-muted">We support installation, calibration, and provide after-sales assistance worldwide, ensuring your laboratory maintains peak uptime.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 9: Maintenance & Service Guide -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up">
          <h2 class="mb-4">Maintenance &amp; Service Guide</h2>
          <p>
            Regular maintenance of your vacuum glove box is essential for operator safety and maintaining consistent sub-1 ppm atmospheric purity. Follow this simple schedule:
          </p>
          <div class="row gy-4 mt-2">
            <div class="col-md-4">
              <h6>1. Glove Integrity Inspection</h6>
              <p class="small text-muted">Inspect the butyl/Hypalon gloves daily for micro-tears, punctures, or chemical degradation. Conduct regular pressure-leak checks on the ports.</p>
            </div>
            <div class="col-md-4">
              <h6>2. Vacuum Pump Care</h6>
              <p class="small text-muted">Monitor oil levels in rotary vane pumps weekly. Change oil every 3–6 months depending on usage, or verify dry scroll pump seals annually.</p>
            </div>
            <div class="col-md-4">
              <h6>3. Catalyst Regeneration</h6>
              <p class="small text-muted">Regenerate the copper catalyst and molecular sieve columns if O₂ and H₂O levels remain above 1 ppm despite continuous loop circulation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section 10: Frequently Asked Questions (FAQ) -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions about selecting, operating, and maintaining vacuum glove boxes.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
            
            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What is a vacuum glove box and how does it work?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A vacuum glove box is an airtight chamber that allows operators to manipulate sensitive materials under a controlled, inert atmosphere (such as Argon or Nitrogen). It works by evacuating the air using a vacuum pump and backfilling the chamber with high-purity inert gas.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  What is the difference between a glove box and a fume hood?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A fume hood is an open-front ventilation system that draws laboratory air in to protect the operator from fumes. A glove box is a completely sealed, closed loop system that protects both the operator (from toxic/hazardous materials) and the product (from reacting with oxygen or moisture).
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  Why is oxygen control important inside a glove box?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Many materials, such as metallic lithium in batteries or organometallic catalysts, oxidize instantly in the presence of oxygen. Maintaining O₂ levels below 1 ppm is critical to prevent unwanted reactions, chemical degradation, or fire hazards.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  Which inert gas should I use: Argon or Nitrogen?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Nitrogen is economical and suitable for most general chemical handling and synthetic applications. However, for lithium battery R&amp;D, Argon is required because lithium reacts with nitrogen. Argon is also preferred for titanium welding due to its complete inertness.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                  Can an acrylic glove box hold a full vacuum?
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Acrylic is prone to structural stress under full vacuum. Standard acrylic glove boxes are designed for gas purging, though their transfer chambers (antechambers) are made of thick acrylic/metal tubes that can tolerate vacuum cycles to purge incoming samples. For full vacuum in the main chamber, a stainless steel model is recommended.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                  How often should I regenerate the purification catalyst column?
                </button>
              </h2>
              <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Typically every 6 to 12 months, or whenever you notice that O₂ or H₂O levels cannot be brought down below 1 ppm under normal closed-loop circulation.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                  What leak rate is standard for a stainless steel glovebox?
                </button>
              </h2>
              <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our high-purity stainless steel glove boxes feature an industry-standard leak rate of less than 0.05 vol%/h (ISO 10648-2 Class 1).
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                  What type of gloves are available?
                </button>
              </h2>
              <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer Butyl gloves (excellent gas impermeability), Hypalon gloves (superior chemical and mechanical resistance), and Neoprene/Nitrile options for general laboratory applications.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                  Why is moisture control important inside a glove box?
                </button>
              </h2>
              <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Moisture (water vapor) reacts violently with lithium, sodium, organometallic compounds, and active metals. Furthermore, even trace moisture can disrupt electrical measurements, cause oxidation, or compromise the stability of perovskite solar cells and OLED displays. Maintaining H₂O &lt; 1 ppm is crucial for experimental reproducibility.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                  What vacuum level can be achieved in a BET Stainless Steel Glove Box?
                </button>
              </h2>
              <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our heavy-duty stainless steel (SS304/SS316L) chambers are structurally certified to achieve deep vacuums down to 10⁻² mbar or 10⁻³ mbar in the antechamber and main chamber (depending on the installed vacuum pump system). This level is optimal for rapid gas evacuation and moisture desorption.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11">
                  What is the difference between positive pressure and negative pressure operation?
                </button>
              </h2>
              <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Positive pressure (typically +2 to +5 mbar) is used to protect the product inside by ensuring that any microscopic leak forces inert gas outwards, preventing ambient air from entering. Negative pressure is employed when handling hazardous, toxic, or radioactive substances, ensuring that any containment breach draws air inward to protect the operator.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq12">
                  What are the standard classes of glove boxes under ISO 10648-2?
                </button>
              </h2>
              <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  ISO 10648-2 classifies glove boxes based on their hourly leak rate:
                  <ul>
                    <li><strong>Class 1:</strong> Leak rate &lt; 0.05 vol%/h (highest containment, suitable for hazardous materials and ultra-pure inert gas setups).</li>
                    <li><strong>Class 2:</strong> Leak rate &lt; 0.25 vol%/h.</li>
                    <li><strong>Class 3:</strong> Leak rate &lt; 1.0 vol%/h.</li>
                    <li><strong>Class 4:</strong> Leak rate &lt; 10.0 vol%/h.</li>
                  </ul>
                  BET stainless steel glove boxes are manufactured and verified to meet Class 1 standards.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq13">
                  How does a dual-column purification system differ from a single-column system?
                </button>
              </h2>
              <div id="faq13" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  A single-column system must pause purification during the 24-hour regeneration cycle. A dual-column system operates in parallel; while one column undergoes thermal regeneration to purge trapped oxygen and moisture, the second column remains active in the loop, ensuring 24/7 continuous ultra-pure environment uptime.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq14">
                  What are the common types of feedthroughs available for glove boxes?
                </button>
              </h2>
              <div id="faq14" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We customize glove boxes with various hermetic feedthroughs, including power feedthroughs (AC/DC), signal feedthroughs (RJ45, USB, BNC, D-sub), fluidic feedthroughs (gas/liquid compression fittings), vacuum lines, and fiber-optic feedthroughs.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq15">
                  How do safety interlocks protect the user and the environment?
                </button>
              </h2>
              <div id="faq15" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Safety interlocks prevent dual-door opening of the antechamber simultaneously, shutting off vacuum/refill operations if a door is unsecured. Additionally, automatic gas shutoff valves trigger if pressure exceeds safe limits, protecting gloves from bursting or imploding.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq16">
                  What kind of vacuum pumps are suitable for glove boxes?
                </button>
              </h2>
              <div id="faq16" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  For standard applications, rotary vane pumps (oil-sealed) are cost-effective and provide deep vacuum. However, for cleanrooms or applications where oil vapor backstreaming could contaminate samples, oil-free dry scroll pumps are highly recommended.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq17">
                  Can I integrate third-party equipment (like spin coaters or ovens) inside the glove box?
                </button>
              </h2>
              <div id="faq17" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. We frequently integrate spin coaters, thermal evaporators, anti-vibration tables (for analytical balances), microscopes, and heating ovens (either integrated into the side wall or free-standing inside the chamber) with customized seals and feedthrough connections.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq18">
                  What is the purpose of a HEPA or ULPA filter in a glove box?
                </button>
              </h2>
              <div id="faq18" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  HEPA (High-Efficiency Particulate Air) or ULPA filters are installed in the gas circulation loop to trap airborne particulates down to 0.3 or 0.1 microns. This is essential for cleanroom manufacturing (OLED/semiconductors) and to contain fine dust generated during additive manufacturing powder handling.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq19">
                  How do you detect and locate a leak in a glove box system?
                </button>
              </h2>
              <div id="faq19" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Minor leaks are identified by checking pressure drop rates over 24 hours. To locate the exact site of a leak, we perform helium leak detection: helium gas is sprayed around weld joints, seals, and glove ports while a mass spectrometer monitors the evacuated chamber for helium intrusion.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq20">
                  What customization options does Burhani Engineering Technology provide for glove boxes?
                </button>
              </h2>
              <div id="faq20" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer a wide range of customization, including custom dimensions, multiple glove port patterns (2, 3, 4, or more ports), double-sided access, integrated cold wells, solvent vapor traps, customized rack shelving, feedthrough arrays, and integrated process tooling.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section: Related Vacuum Glove Box Resources & Authority Hub -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Related Vacuum Glove Box Resources</h2>
        <p>Explore our in-depth guides and specialized glove box solutions to optimize your research environment.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-battery-charging fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo product_url('battery-research-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Battery Research Glove Box</a></h4>
            <p class="small text-muted mb-0">Learn how our specialized Argon atmosphere systems support lithium-ion, coin cell, pouch cell, and solid-state battery R&amp;D.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-cpu fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo product_url('semiconductor-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Semiconductor Glove Box</a></h4>
            <p class="small text-muted mb-0">Discover our cleanroom-integrated glove boxes designed for silicon wafer handling, OLED production, and MEMS packaging.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-capsule fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo product_url('pharmaceutical-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Pharmaceutical Isolator</a></h4>
            <p class="small text-muted mb-0">Explore our GMP-compliant glove box isolators designed for aseptic processing, sterility testing, and HPAPI containment.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-sun fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo product_url('perovskite-solar-cell-glove-box'); ?>" class="text-decoration-none text-dark hover-accent">Perovskite Solar Cell Glove Box</a></h4>
            <p class="small text-muted mb-0">Optimize your thin-film solar crystallization processes with spin coater and evaporator integrated glove boxes.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-book fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo url('resources/vacuum-glove-box-buying-guide.php'); ?>" class="text-decoration-none text-dark hover-accent">Glove Box Buying Guide</a></h4>
            <p class="small text-muted mb-0">Our comprehensive guide comparing Acrylic vs. Stainless Steel, Argon vs. Nitrogen, and crucial cost factor considerations.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="card p-4 h-100 border-0 shadow-sm text-center">
            <i class="bi bi-tag fs-1 text-primary mb-3"></i>
            <h4><a href="<?php echo url('resources/vacuum-glove-box-price-guide.php'); ?>" class="text-decoration-none text-dark hover-accent">Glove Box Price Guide</a></h4>
            <p class="small text-muted mb-0">Detailed breakdown of equipment prices, customization costs, installation preparation, and ongoing maintenance.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section: Related Industries Served -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Related Industries Served</h2>
        <p>Providing specialized atmospheric containment solutions across critical industrial sectors.</p>
      </div>
      <div class="row gy-3">
        <div class="col-md-4">
          <a href="<?php echo url('industries/battery-manufacturing.php'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <i class="bi bi-battery-charging text-primary fs-4"></i> <strong>Battery R&amp;D &amp; Manufacturing</strong>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo url('industries/semiconductor-manufacturing.php'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <i class="bi bi-cpu text-primary fs-4"></i> <strong>Semiconductor Processing</strong>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo url('industries/pharmaceutical-processing.php'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <i class="bi bi-capsule text-primary fs-4"></i> <strong>Pharmaceutical Isolators</strong>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo url('industries/chemical-research.php'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <i class="bi bi-flask text-primary fs-4"></i> <strong>Chemical Synthesis &amp; R&amp;D</strong>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo url('industries/additive-manufacturing.php'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <i class="bi bi-printer text-primary fs-4"></i> <strong>Additive Manufacturing</strong>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo url('industries/perovskite-solar-cells.php'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <i class="bi bi-sun text-primary fs-4"></i> <strong>Perovskite Photovoltaics</strong>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section: Related Vacuum Products -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Related Industrial Vacuum Products</h2>
        <p>Explore our wider range of high-precision vacuum chambers, pressure vessels, and weld testing systems.</p>
      </div>
      <div class="row gy-3">
        <div class="col-md-3">
          <a href="<?php echo product_url('vacuum_degassing_chamber'); ?>" class="d-flex align-items-center gap-2 p-3 bg-light rounded text-decoration-none text-dark hover-accent">
            <i class="bi bi-gear-fill text-primary"></i> <span>Vacuum Degassing Chamber</span>
          </a>
        </div>
        <div class="col-md-3">
          <a href="<?php echo product_url('Transparent_Vacuum_and_Pressure_Vessels'); ?>" class="d-flex align-items-center gap-2 p-3 bg-light rounded text-decoration-none text-dark hover-accent">
            <i class="bi bi-box-seam-fill text-primary"></i> <span>Transparent Vacuum Vessel</span>
          </a>
        </div>
        <div class="col-md-3">
          <a href="<?php echo product_url('flat-vacuum-box-weld-testing'); ?>" class="d-flex align-items-center gap-2 p-3 bg-light rounded text-decoration-none text-dark hover-accent">
            <i class="bi bi-shield-fill text-primary"></i> <span>Flat Vacuum Box Tester</span>
          </a>
        </div>
        <div class="col-md-3">
          <a href="<?php echo product_url('pressure_aging_vessel'); ?>" class="d-flex align-items-center gap-2 p-3 bg-light rounded text-decoration-none text-dark hover-accent">
            <i class="bi bi-gear-fill text-primary"></i> <span>Pressure Aging Vessel</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 🆕 Section: Technical Guides Center -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Technical Knowledge Hub</h2>
        <p>Read our specialized engineering guides on controlled atmosphere physics, leak detection, and maintenance.</p>
      </div>
      <div class="row gy-3">
        <div class="col-md-4">
          <a href="<?php echo url('resources/how-vacuum-glove-boxes-work.php'); ?>" class="d-flex align-items-center justify-content-between p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <span>How Vacuum Glove Boxes Work</span> <i class="bi bi-chevron-right text-primary"></i>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo url('resources/achieving-sub-1ppm-oxygen.php'); ?>" class="d-flex align-items-center justify-content-between p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <span>Achieving Sub-1 ppm Oxygen &amp; Moisture</span> <i class="bi bi-chevron-right text-primary"></i>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo url('resources/glove-box-vs-fume-hood.php'); ?>" class="d-flex align-items-center justify-content-between p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <span>Glove Box vs. Fume Hood</span> <i class="bi bi-chevron-right text-primary"></i>
          </a>
        </div>
        <div class="col-md-6">
          <a href="<?php echo url('resources/glove-box-maintenance-guide.php'); ?>" class="d-flex align-items-center justify-content-between p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <span>Glove Box Maintenance &amp; Service Guide</span> <i class="bi bi-chevron-right text-primary"></i>
          </a>
        </div>
        <div class="col-md-6">
          <a href="<?php echo url('resources/oxygen-and-moisture-control-guide.php'); ?>" class="d-flex align-items-center justify-content-between p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
            <span>Oxygen &amp; Moisture Control Loop Guide</span> <i class="bi bi-chevron-right text-primary"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 🔟 Final CTA -->
  <section class="section py-5">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Ready to Upgrade Your Laboratory?</h2>
        <p class="mb-4">Get a technical quote for a custom Vacuum Glove Box tailored to your R&D needs.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Get a Quote</a>
          <a href="#contact" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">Talk to Engineering</a>
        </div>
      </div>
    </div>
  </section>

</main>

<style>
    .page-title .heading {
        background-color: var(--heading-color);
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
    .icon-box i {
        color: var(--accent-color) !important;
    }
    .bet-spec-table th {
        background-color: var(--heading-color);
        color: #fff;
    }
    /* Accordion Custom Styling */
    .accordion-button:not(.collapsed) {
        background-color: color-mix(in srgb, var(--accent-color), white 90%);
        color: var(--heading-color);
        box-shadow: none;
    }
    .accordion-button:focus {
        box-shadow: none;
    }
    .btn-outline-primary:hover {
        background-color: rgba(255,255,255,0.1);
        border-color: #fff;
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
        color: var(--accent-color) !important;
    }
    .hover-accent {
        transition: color 0.3s ease;
    }
    .hover-accent:hover {
        color: var(--accent-color) !important;
    }
    @media (max-width: 991px) {
        .sidebar-box {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>


