<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

include_once(__DIR__ . '/../../includes/config.php');

$location_name = "Global";
if (!empty($is_location_page) && $is_location_page) {
    $meta_title = "ATS Pressure Aging Vessel in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance ATS Pressure Aging Vessel available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_url('ats-pressure-aging-vessel');
} else {
    $meta_title = "ATS Pressure Aging Vessel Asphalt Binding Testing Equipment | PAV4";
$meta_description = "Manufacturer of ATS Pressure Aging Vessel (PAV4). High-precision Asphalt Binding Testing Equipment to simulate long-term oxidative aging. Burhani Engineering Technology.";
$canonical_url = url('products/ats-pressure-aging-vessel/');
}

include_once(__DIR__ . '/../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <!-- Hero Section -->
  <div class="page-title" data-aos="fade" style="background: linear-gradient(rgba(12, 43, 89, 0.8), rgba(12, 43, 89, 0.8)), url('<?php echo asset('img/hero-section.webp'); ?>'); background-size: cover; background-position: center;">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="product-title" style="margin-bottom: 20px;">
               <a href="<?php echo $canonical_url; ?>" class="seo-product-link text-white" style="color: #fff; text-decoration: none;">
                  ATS Pressure Aging Vessel Asphalt Binding Testing
               </a>
            </h1>
            <p class="mb-4 text-white">Pressure Aging Vessel (PAV4) by Burhani Engineering Technology</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-chat-dots"></i> Request a Quote
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
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            <div class="row align-items-center mb-4">
              <div class="col-lg-7">
                <h2 class="product-title">
                    <a href="https://bhfvacuum.com/ats-pressure-aging-vessel-asphalt-binding-testing.html#:~:text=Asphalt%20Binding%20Testing-,ATS%20Pressure%20Aging%20Vessel%20Asphalt%20Binding%20Testing,Download%20Broucher,-Burhani%20Engineering%20Technology"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="seo-product-link"> ATS Pressure Aging Vessel Asphalt Binding Testing</a>
                </h2>
                
                <p>The Pressure Aging Vessel (PAV4), manufactured by Burhani Engineering Technology, is a high-precision laboratory instrument designed to simulate the long-term oxidative aging of asphalt binders. As a premier ATS Pressure Aging Vessel Manufacturer, we have engineered this system to be essential for road construction research and quality control, replicating approximately 7 to 10 years of environmental exposure in a compressed 20-hour timeframe.</p>
                
                <p>Our system is specifically designed for high-precision Asphalt Binding Testing Equipment applications in modern laboratories. By subjecting binders to extreme pressure and heat, this advanced setup allows engineers to reliably evaluate long-term performance against fatigue and thermal cracking over its actual service life.</p>
              </div>
              <div class="col-lg-5">
                <!-- Primary hero image -->
                <a href="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle.png'); ?>" class="glightbox" data-gallery="product-gallery" data-title="ATS Pressure Aging Vessel">
                  <img src="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle.png'); ?>" alt="ATS Pressure Aging Vessel Asphalt Binding Testing Machine" class="img-fluid rounded shadow-sm mb-3" loading="lazy" style="width:100%;object-fit:contain;background:#f8f9fa;padding:8px;border-radius:8px;">
                </a>
                <!-- Thumbnail strip -->
                <div class="d-flex gap-2 flex-wrap justify-content-center">
                  <a href="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle1.png'); ?>" class="glightbox" data-gallery="product-gallery" data-title="ATS Pressure Aging Vessel – View 2">
                    <img src="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle1.png'); ?>" alt="ATS PAV View 2" loading="lazy" style="width:70px;height:55px;object-fit:cover;border-radius:6px;border:2px solid #e9ecef;cursor:zoom-in;">
                  </a>
                  <a href="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle2.png'); ?>" class="glightbox" data-gallery="product-gallery" data-title="ATS Pressure Aging Vessel – View 3">
                    <img src="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle2.png'); ?>" alt="ATS PAV View 3" loading="lazy" style="width:70px;height:55px;object-fit:cover;border-radius:6px;border:2px solid #e9ecef;cursor:zoom-in;">
                  </a>
                  <a href="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle3.png'); ?>" class="glightbox" data-gallery="product-gallery" data-title="ATS Pressure Aging Vessel – View 4">
                    <img src="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle3.png'); ?>" alt="ATS PAV View 4" loading="lazy" style="width:70px;height:55px;object-fit:cover;border-radius:6px;border:2px solid #e9ecef;cursor:zoom-in;">
                  </a>
                  <a href="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle4.png'); ?>" class="glightbox" data-gallery="product-gallery" data-title="ATS Pressure Aging Vessel – View 5">
                    <img src="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle4.png'); ?>" alt="ATS PAV View 5" loading="lazy" style="width:70px;height:55px;object-fit:cover;border-radius:6px;border:2px solid #e9ecef;cursor:zoom-in;">
                  </a>
                </div>
              </div>
            </div>

            <h3 class="mt-4">Technical Design and Innovation</h3>
            <p>The Burhani Engineering PAV4 features a compact, benchtop design with an integrated vessel and oven system. As a trusted Pressure Aging Vessel Supplier, we build this equipment for extreme durability and ease of use, incorporating advanced technical elements much like our robust <a href="<?php echo url('products/vacuum_chamber/vacuum_chamber.php'); ?>">Vacuum Chamber</a> solutions.</p>
            <ul>
              <li><strong>Touchscreen Interface:</strong> This sophisticated Asphalt Aging Testing Machine is equipped with an industrial-strength touchscreen and intuitive software, providing real-time monitoring of critical parameters including time, temperature, and pressure.</li>
              <li><strong>Precision Performance:</strong> Using a platinum RTD sensor, the system maintains high temperature accuracy. It also boasts an industry-leading recovery time of 30 minutes or less, significantly increasing laboratory throughput.</li>
              <li><strong>Connectivity:</strong> A front-mounted USB port allows for seamless data acquisition and software upgrades.</li>
            </ul>

            <h3 class="mt-4">Operational Specifications</h3>
            <p>When utilizing our advanced PAV4 Equipment, laboratories benefit from the same precise control found in our <a href="<?php echo url('products/vacuum_degassing_chamber/Vacuum_Degassing_Chamber.php'); ?>">Vacuum Degassing Chamber</a> or <a href="<?php echo url('products/vacuum_glove_box/vacuum_glove_box.php'); ?>">Vacuum Glove Box</a>. The system delivers exceptionally reliable conditions:</p>
            <ol>
              <li>The unit is engineered to meet rigorous international standards including AASHTO R28, ASTM D6521, and EN 14769, cementing our role as a leading Pressure Aging Vessel Exporter committed to global quality.</li>
              <li><strong>Operating Pressure:</strong> 2.10 ± to 0.05Mpa (304 psi).</li>
              <li><strong>Temperature Flexibility:</strong> Programmable from 50º C to 150º C, with standard test ranges between 90 ºC and 115 ºC.</li>
              <li><strong>Capacity:</strong> The unit includes a precision holder capable of holding 10 specimen pans simultaneously.</li>
            </ol>

            <h3 class="mt-4">Safety and Reliability</h3>
            <p>When configuring premium Asphalt Laboratory Testing Equipment, Burhani Engineering Technology emphasizes operational safety and data integrity across all product lines. This commitment extends from our <a href="<?php echo url('products/Vacuum_Leak_Test_Machine/Vacuum_Leak_Test_Machine.php'); ?>">Bubble Emission Leak Test Chamber</a> systems to <a href="<?php echo url('products/flat-vacuum-box-weld-testing/flat-vacuum-box-weld-testing.php'); ?>">Vacuum Box Weld Testing Equipment</a> and <a href="<?php echo url('products/pressure_pot_for_resin_casting/pressure_pot_for_resin_casting.php'); ?>">Pressure Pot for Resin Casting</a>.</p>
            <ul>
              <li><strong>Battery Backup:</strong> An optional system that prevents test interruption or data loss during power failures.</li>
              <li><strong>Robust Construction:</strong> A durable, black powder-coated exterior ensures the unit withstands harsh laboratory environments.</li>
            </ul>

            <p>By providing this state-of-the-art Asphalt Binder Testing System, Burhani Engineering Technology enables laboratories to conduct high-level evaluations that comply with the Superpave Performance Grading (PG) framework, ultimately ensuring the longevity and safety of modern infrastructure.</p>

          </div>
        </div>

        <!-- Product Categories Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box category-sidebar">
            <h4 class="sidebar-title">Product Categories</h4>
            <ul class="list-unstyled mb-0 category-list">
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Acrylic_Vacuum_Chamber_Cube'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Acrylic Vacuum Chamber Cube</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Acrylic_Vacuum_Chamber_Cylinder'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Acrylic Vacuum Chamber Cylinder</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Stainless_Steel_Cube_Vacuum_Chamber'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Stainless Steel Cube Vacuum Chamber</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Stainless_Steel_Cylinder_Vacuum_Chamber'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Stainless Steel Cylinder Vacuum Chamber</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Horizontal_Industrial_Vacuum_Chamber'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Stainless Steel Vacuum Degassing Chamber</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Vacuum_Degassing_Chamber'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Vacuum Degassing Chamber</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Heated_Vacuum_Chamber-Oven'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Heated Vacuum Chamber / Oven</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-0">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Heated_Vacuum_Degassing_Chamber'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Stainless Steel Vacuum Degassing Chamber</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-0">
                <a href="#" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link-active">
                  <span class="fw-bold" style="color: var(--accent-color);">ATS Pressure Aging Vessel Asphalt Binding Testing</span>
                  <i class="bi bi-arrow-left-circle-fill" style="color: var(--accent-color);"></i>
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
      <div class="section-title" data-aos="fade-up">
        <h2>Product Gallery</h2>
        <p>ATS Pressure Aging Vessel – Official Product Images</p>
      </div>
      <div class="row gy-4 justify-content-center" data-aos="fade-up">
        <?php
        $ats_gallery = [
          ['img' => asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle.png'),  'alt' => 'ATS Pressure Aging Vessel'],
          ['img' => asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle1.png'), 'alt' => 'ATS Pressure Aging Vessel – View 2'],
          ['img' => asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle2.png'), 'alt' => 'ATS Pressure Aging Vessel – View 3'],
          ['img' => asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle3.png'), 'alt' => 'ATS Pressure Aging Vessel – View 4'],
          ['img' => asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle4.png'), 'alt' => 'ATS Pressure Aging Vessel – View 5'],
        ];
        foreach ($ats_gallery as $gimg): ?>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="<?php echo $gimg['img']; ?>" class="glightbox" data-gallery="ats-gallery" data-title="<?php echo htmlspecialchars($gimg['alt']); ?>">
            <div style="background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 4px 15px rgba(0,0,0,.07);padding:10px;height:160px;display:flex;align-items:center;justify-content:center;">
              <img src="<?php echo $gimg['img']; ?>" alt="<?php echo htmlspecialchars($gimg['alt']); ?>" loading="lazy" style="max-width:100%;max-height:140px;object-fit:contain;">
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  </main>

<style>
    .seo-product-link {
        color: var(--heading-color);
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 700;
    }
    .seo-product-link:hover {
        color: var(--accent-color);
        text-decoration: none;
    }
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
    /* Premium Sidebar Design */
    .category-sidebar {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.06);
        border: 1px solid rgba(0,0,0,0.03);
        border-top: 4px solid var(--accent-color);
        padding: 30px;
        position: sticky;
        top: 100px;
        z-index: 10;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .category-sidebar:hover {
        box-shadow: 0 15px 50px rgba(0,0,0,0.1);
    }
    .sidebar-title {
        color: var(--heading-color);
        font-weight: 700;
        font-size: 1.25rem;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 2px solid rgba(0,0,0,0.05);
        padding-bottom: 15px;
    }
    .category-list li {
        border-bottom: 1px solid rgba(0,0,0,0.05) !important;
        margin-bottom: 8px !important;
        padding-bottom: 8px !important;
    }
    .category-list li:last-child {
        border-bottom: none !important;
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
    }
    .category-link {
        transition: all 0.3s ease;
        font-weight: 500;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 8px;
        color: #444 !important;
        background: transparent;
    }
    .category-link:hover {
        background: rgba(0,0,0,0.02);
        color: var(--accent-color) !important;
        transform: translateX(5px);
    }
    .category-link span {
        flex: 1;
        line-height: 1.4;
    }
    .category-link i {
        font-size: 0.85rem;
        transition: transform 0.3s ease;
    }
    .category-link:hover i {
        transform: translateX(3px);
    }
    .category-link-active {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 15px;
        background: var(--accent-color);
        border-radius: 8px;
        color: #ffffff !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-top: 15px;
    }
    .category-link-active span, .category-link-active i {
        color: #ffffff !important;
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
        .category-sidebar {
            position: static;
            margin-top: 40px;
        }
    }
</style>

<?php include_once(__DIR__ . '/../../includes/contact-section.php'); ?>
<?php include_once(__DIR__ . '/../../includes/footer.php'); ?>
