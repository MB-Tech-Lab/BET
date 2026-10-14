<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

$meta_title       = "Burhani Engineering Technology | Advanced Vacuum Testing & Chambers";
$meta_description = "Manufacturer of precision vacuum leak test machines, degassing chambers, and glove boxes. Serving industrial, research, and semiconductor sectors globally.";

$stats_file = __DIR__ . '/data/website_stats.json';
$site_stats = [
    'projects_delivered' => 0,
    'returning_clients' => 0,
    'countries_served' => 0,
    'industry_awards' => 0
];
if (file_exists($stats_file)) {
    $content = file_get_contents($stats_file);
    if (!empty($content)) {
        $loaded_stats = json_decode($content, true);
        if (is_array($loaded_stats)) {
            $site_stats = array_merge($site_stats, $loaded_stats);
        }
    }
}

require_once __DIR__ . '/includes/config.php';

$canonical_url = BASE_URL;

require_once __DIR__ . '/includes/product-catalog.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section id="hero" class="hero section">
  <div class="banner-wrapper" data-aos="fade-in">
    <img src="<?php echo asset('img/hero-section.webp'); ?>"
        alt="Vacuum Testing Equipment Banner">
  </div>

  <style>
      .hero {
        position: relative;
        overflow: hidden;
        padding: 100px 0;
        display: flex;
        align-items: center;
        background-color: #f8f9fa;
      }

      .banner-wrapper {
        position: absolute;
        inset: 0;
        z-index: 1;
      }

      .banner-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.8) contrast(1.1);
      }

      /* Dark overlay for better text contrast */
      .banner-wrapper::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.1));
        pointer-events: none;
      }

      .hero .container {
        position: relative;
        z-index: 2;
      }

      .welcome {
        background: rgba(255, 255, 255, 0.95);
        padding: 30px 40px;
        border-radius: 8px;
        border-left: 6px solid var(--accent-color);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        display: inline-block;
        margin-bottom: 40px;
        max-width: 700px;
      }

      .welcome h2 {
        color: var(--heading-color);
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 10px;
        letter-spacing: 1px;
      }

      .welcome p {
        color: #444;
        font-size: 1.25rem;
        margin: 0;
        line-height: 1.5;
      }

      .hero .why-box {
        background: var(--heading-color) !important;
        border-radius: 8px !important;
        padding: 40px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
      }

      .hero .icon-box {
        background: rgba(255, 255, 255, 1) !important;
        border-radius: 8px !important;
        border-bottom: 5px solid var(--accent-color) !important;
        padding: 30px !important;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: all 0.3s ease;
      }

      .hero .icon-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      }

      @media (max-width: 768px) {
        .hero { padding: 60px 0; }
        .welcome { padding: 20px; }
        .welcome h2 { font-size: 1.8rem; }
        .welcome p { font-size: 1rem; }
      }
  </style>

  <div class="container">

    <div class="welcome" data-aos="fade-down" data-aos-delay="100">
      <h2>PRECISION VACUUM ENGINEERING</h2>
      <p>Delivering high-performance vacuum chambers and leak testing solutions for critical industries.</p>
    </div><!-- End Welcome -->

    <div class="content row gy-4">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
          <h3>Why Choose Burhani Engineering Technology?</h3>
          <p>
            In the demanding worlds of aerospace, automotive, and semiconductor manufacturing, integrity is non-negotiable. Burhani Engineering Technology engineers robust vacuum environments that ensure your products meet the highest standards of leak tightness and durability.
          </p>
          <div class="text-center">
            <a href="#about" class="more-btn"><span>Our Expertise</span> <i class="bi bi-chevron-right"></i></a>
          </div>
        </div>
      </div><!-- End Why Box -->

      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="d-flex flex-column justify-content-center w-100">
          <div class="row gy-4">

            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                <i class="bi bi-speedometer2"></i>
                <h4>Leak Detection</h4>
                <p>Advanced helium and air decay leak testing for sealed components and packaging.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                <i class="bi bi-box-seam"></i>
                <h4>Custom Chambers</h4>
                <p>Bespoke vacuum chambers designed for degassing, drying, and altitude simulation.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                <i class="bi bi-gear-wide-connected"></i>
                <h4>Process Automation</h4>
                <p>Fully automated vacuum control systems integrated with your production line.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>
      </div>
    </div><!-- End  Content-->

  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4 gx-5">
      <div class="col-lg-6 align-self-start" data-aos="fade-up" data-aos-delay="200">
        <div class="video-thumbnail-wrapper position-relative d-inline-block overflow-hidden rounded shadow">
          <img src="<?php echo asset('img/gem-stone-oiling-and-crack-filling-machine.webp'); ?>" class="img-fluid" alt="Gem Stone Oiling and Crack Filling Machine" loading="lazy">
          <a href="https://www.youtube.com/watch?v=-v8mCeA6708" class="glightbox video-play-corner-btn" aria-label="Watch Video Demonstration">
            <i class="bi bi-play-fill"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <h3>Engineering the Vacuum of Tomorrow</h3>
        <p>
          Burhani Engineering Technology is a premier manufacturer specializing in the design and fabrication of vacuum process equipment. With a foundation built on rigorous engineering principles, we serve laboratories and factories that require absolute precision.
        </p>
        <p>
          From removing air bubbles in resin casting to verifying the seal integrity of pharmaceutical packaging, our systems are the silent guardians of quality.
        </p>
        <ul>
          <li>
            <i class="fa-solid fa-industry"></i>
            <div>
              <h5>Manufacturing Excellence</h5>
              <p>ISO-9001 compliant fabrication ensuring long-term reliability and safety.</p>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-flask"></i>
            <div>
              <h5>R&D Support</h5>
              <p>Collaborating with universities and research institutes on experimental vacuum setups.</p>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <div>
              <h5>Lifecycle Service</h5>
              <p>Comprehensive installation, calibration, and maintenance support globally.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section><!-- /About Section -->

<!-- Products Section -->
<section id="products" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Products</h2>
    <p>State-of-the-art vacuum solutions for testing and processing.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4 justify-content-center">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
          <a href="<?php echo url('products/Vacuum_Leak_Test_Machine/Vacuum_Leak_Test_Machine.php'); ?>" class="stretched-link">
            <h3>Vacuum Leak Test Machine</h3>
          </a>
          <p>Advanced vacuum and leak testing solutions designed to detect leaks and evaluate the integrity of packaging, sealed products, and components across multiple testing standards and applications.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-border-all"></i>
          </div>
          <a href="<?php echo url('products/flat-vacuum-box-weld-testing/flat-vacuum-box-weld-testing.php'); ?>" class="stretched-link">
            <h3>Flat Vacuum Box Weld Testing</h3>
          </a>
          <p>Professional weld testing solutions for storage tanks and pipelines. Our precision-engineered vacuum boxes facilitate rapid, accurate bubble leak detection for critical infrastructure.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-wind"></i>
          </div>
          <a href="<?php echo url('products/vacuum_degassing_chamber/Vacuum_Degassing_Chamber.php'); ?>" class="stretched-link">
            <h3>Vacuum Degassing Chamber</h3>
          </a>
          <p>Remove trapped air bubbles from silicones, resins, and epoxies efficiently. Our rugged chambers feature clear lids for process monitoring and heavy-duty valves for rapid cycle times.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-hand"></i>
          </div>
          <a href="<?php echo url('products/vacuum_glove_box/vacuum_glove_box.php'); ?>" class="stretched-link">
            <h3>Vacuum Glove Box</h3>
          </a>
          <p>Create an inert atmosphere for handling sensitive materials. Ideal for lithium-ion battery research and pharmaceutical handling, providing a hermetically sealed environment with integrated pass-through antechambers.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-vial"></i>
          </div>
          <a href="<?php echo url('products/Vacuum_Chamber_Sampler_VC20/Vacuum_Chamber_Sampler_VC20.php'); ?>" class="stretched-link">
            <h3>Vacuum Chamber Sampler VC20</h3>
          </a>
          <p>Compact portable vacuum chamber designed for contamination-free gas and air sample collection for environmental monitoring, odor sampling, industrial hygiene, emissions testing, and laboratory applications.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-eye"></i>
          </div>
          <a href="<?php echo url('products/Transparent_Vacuum_and_Pressure_Vessels/Transparent_Vacuum_and_Pressure_Vessels.php'); ?>" class="stretched-link">
            <h3>Transparent Vacuum &amp; Pressure Vessel</h3>
          </a>
          <p>Advanced transparent vessel for packaging integrity and leak testing of plastic pouches, beverage containers, and industrial sealing systems under controlled vacuum and pressure conditions.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-temperature-high"></i>
          </div>
          <a href="<?php echo url('products/ats-pressure-aging-vessel/'); ?>" class="stretched-link">
            <h3>ATS Pressure Aging Vessel</h3>
          </a>
          <p>Advanced asphalt binder aging testing equipment engineered for laboratory simulation of long-term oxidative aging under controlled pressure and temperature conditions. Designed for high-precision asphalt durability and performance evaluation.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="bi bi-beaker"></i>
          </div>
          <a href="<?php echo url('products/pcr-chambers/pcr_chambers.php'); ?>" class="stretched-link">
            <h3>PCR Chambers</h3>
          </a>
          <p>HEPA-filtered PCR workstations designed for contamination-free DNA/RNA preparation, molecular biology, biotechnology, pharmaceutical research, and clinical laboratory applications.</p>
        </div>
      </div><!-- End Product Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
        <div class="service-item position-relative">
          <div class="product-icon">
            <i class="fa-solid fa-cube"></i>
          </div>
          <a href="<?php echo url('products/sealing-testing-chamber/'); ?>" class="stretched-link">
            <h3>Sealing Testing Chamber</h3>
          </a>
          <p>High-performance sealing testing chamber designed for accurate vacuum leak detection, seal integrity verification, and quality control in pharmaceutical, food, medical, and industrial packaging applications.</p>
        </div>
      </div><!-- End Product Item -->

    </div>

  </div>

</section><!-- /Products Section -->

<!-- Industries Section -->
<section id="industries" class="departments section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Industries Served</h2>
    <p>Optimizing vacuum performance across diverse sectors.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#industries-tab-1">Industrial Manufacturing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#industries-tab-2">Research & Labs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#industries-tab-3">Medical Device</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#industries-tab-4">Food Packaging</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="industries-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Industrial Manufacturing</h3>
                <p class="fst-italic">Ensuring component integrity in automotive and aerospace assembly.</p>
                <p>Vacuum technology is pivotal in composite molding, leak testing of fuel systems, and checking engine components. Our rugged systems are built to withstand the harsh environments of the factory floor while delivering laboratory-grade precision.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo asset('img/Glove Box\acrylic-vacuum-glove-box.webp'); ?>" alt="Acrylic Vacuum Glove Box" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="industries-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Research & Laboratories</h3>
                <p class="fst-italic">Pushing the boundaries of physics and material science.</p>
                <p>University labs and national research institutes rely on Burhani Engineering Technology for reliable experimental setups. Whether it's thin-film deposition or simulating high-altitude conditions, our chambers provide the clean, controlled vacuum needed for accurate data.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo asset('img/gem-stone-oiling-and-crack-filling-machine.webp'); ?>" alt="gem stone oiling & crack filling machine" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="industries-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Medical Device Manufacturing</h3>
                <p class="fst-italic">Critical validation for life-saving equipment.</p>
                <p>Sterility is paramount. Our ASTM-compliant leak testers are used to verify the integrity of sterile barrier pouches and blister packs, ensuring that medical devices remain safe from contamination until point of use.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo asset('img/bubble-emmission-leak-test-chamber.webp'); ?>" alt="bubble emmission leak test chamber" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="industries-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Food Packaging</h3>
                <p class="fst-italic">Extending shelf life through seal integrity.</p>
                <p>Leaky packaging leads to spoilage. Food processors use our bubble emission testers to rapidly identify seal defects in MAP (Modified Atmosphere Packaging), reducing waste and protecting brand reputation.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo asset('img\cylindrical Vacuum leak tester.jpg'); ?>" alt="horizontal industrial vacuum chamber" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Industries Section -->

<!-- Stats Section -->
<section id="stats" class="stats section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <div class="stats-item w-100">
          <div class="stat-circle">
            <span class="stat-number"><?php echo htmlspecialchars($site_stats['projects_delivered'] ?? 0); ?></span>
          </div>
          <p>Projects Delivered</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <div class="stats-item w-100">
          <div class="stat-circle">
            <span class="stat-number"><?php echo htmlspecialchars($site_stats['returning_clients'] ?? 0); ?></span>
          </div>
          <p>Returning Clients</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <div class="stats-item w-100">
          <div class="stat-circle">
            <span class="stat-number"><?php echo htmlspecialchars($site_stats['countries_served'] ?? 0); ?></span>
          </div>
          <p>Countries Served</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <div class="stats-item w-100">
          <div class="stat-circle">
            <span class="stat-number"><?php echo htmlspecialchars($site_stats['industry_awards'] ?? 0); ?></span>
          </div>
          <p>Industry Awards</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->

<!-- Industries We Serve Section -->
<section id="industries-serve" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Industries We Serve</h2>
    <p>Providing precision-engineered vacuum systems and testing equipment for specialized sectors globally.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4 justify-content-center">

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-rocket-takeoff"></i>
          </div>
          <h3>Aerospace</h3>
          <p>High-vacuum simulation chambers, altitude testing, and leak detection for spacecraft and avionics components.</p>
        </div>
      </div><!-- End Industry Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-car-front"></i>
          </div>
          <h3>Automotive</h3>
          <p>Leak testing systems for fuel tanks, battery packs, manifolds, and high-performance mechanical components.</p>
        </div>
      </div><!-- End Industry Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-cpu"></i>
          </div>
          <h3>Semiconductor</h3>
          <p>Hermetic glove boxes and vacuum chambers optimized for wafer processing, chemical deposition, and cleanroom integration.</p>
        </div>
      </div><!-- End Industry Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-capsule"></i>
          </div>
          <h3>Pharmaceuticals</h3>
          <p>ASTM-compliant package integrity leak testers to ensure absolute product sterility, barrier reliability, and extended shelf life.</p>
        </div>
      </div><!-- End Industry Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-flask"></i>
          </div>
          <h3>Research Laboratories</h3>
          <p>Custom experimental vacuum chambers, high-precision degassing units, and custom systems for academic and scientific labs.</p>
        </div>
      </div><!-- End Industry Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <h3>Defense &amp; Government</h3>
          <p>Secure glove boxes, hermetic seal validation systems, and high-spec vacuum testing apparatus built to stringent standards.</p>
        </div>
      </div><!-- End Industry Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-gear-wide-connected"></i>
          </div>
          <h3>Manufacturing</h3>
          <p>Fully automated vacuum process lines, industrial degassing units, and bubble emission systems for assembly lines.</p>
        </div>
      </div><!-- End Industry Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-lightning-charge"></i>
          </div>
          <h3>Energy &amp; Process Industries</h3>
          <p>Weld testing vacuum boxes, pipeline leak validation, and heavy-duty chambers for oil, gas, and power distribution systems.</p>
        </div>
      </div><!-- End Industry Item -->

    </div>

  </div>

</section><!-- /Industries We Serve Section -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>
