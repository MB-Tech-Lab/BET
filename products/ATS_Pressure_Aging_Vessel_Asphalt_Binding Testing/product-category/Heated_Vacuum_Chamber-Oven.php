<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/../../../includes/config.php';
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Heated Vacuum Chamber / Oven in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Heated Vacuum Chamber / Oven available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_category_url('ats-pressure-aging-vessel', 'Heated_Vacuum_Chamber-Oven');
} else {
    $meta_title = "Heated Vacuum Chamber / Oven | Burhani Engineering Technology";
$meta_description = "Discover our premium Heated Vacuum Chamber and Oven. Engineered for precision and reliability in removing entrapped gases and curing materials.";
$canonical_url = product_category_url('ats-pressure-aging-vessel', 'Heated_Vacuum_Chamber-Oven');
}

require_once __DIR__ . '/../../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <!-- Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="mb-4">
              <a href="https://bhfvacuum.com/heated-vacuum-chamber-oven.html#:~:text=VACUUM%20CHAMBER%20/%20OVEN-,Heated%20Vacuum%20Chamber%20/%20Oven,Download%20Broucher,-Heated%20Vacuum%20degassing" target="_blank" rel="noopener noreferrer" class="seo-product-link text-white">
                Heated Vacuum Chamber / Oven
              </a>
            </h1>
            <p class="mb-4">Industrial-grade heated vacuum chambers and ovens for complete degassing and processing.</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
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
            
            <p>Heated Vacuum degassing is the process of using vacuum to remove gases from compounds which become entrapped in the mixture when mixing the components. To assure a bubble-free mold when mixing resin and silicone rubbers and slower-setting harder resins, a vacuum chamber is required. A small vacuum chamber is needed to eliminate air bubbles for materials prior to their setting. The process is fairly straightforward. The casting or moulding material is mixed according to the manufacturers directions.</p>

            <div class="text-center my-5">
              <a href="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle2.png'); ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle2.png'); ?>" alt="Heated Vacuum Chamber Oven" class="img-fluid rounded shadow" style="max-width: 100%;" loading="lazy">
              </a>
            </div>

            <h3 class="mt-5">
              <a href="https://bhfvacuum.com/heated-vacuum-chamber-oven.html#:~:text=Product%20Features%20of%20the%20Heated%20Vacuum%20Degassing%20Chamber" target="_blank" rel="noopener noreferrer" class="seo-product-link">
                Product Features of the Stainless Steel Vacuum Degassing Chamber
              </a>
            </h3>
            <ul>
              <li>Stainless steel chamber for long-term air-tightness performance.</li>
              <li>Heavy Duty Industrial Heating System.</li>
              <li>Adjustable Digital Temperature display and Controller.</li>
              <li>Various Temperature Ranges available on request.</li>
              <li>Burhani Vacuum chamber has a rounded edge at the top, for the protection of silicone gasket.</li>
              <li>Vacuum gauge is assembled on a separate port, so that the reading remains accurate even while pumping/venting the chamber.</li>
              <li>Gauge reading in both in Hg and Mpa.</li>
              <li>All kits are vacuum tested for 24 hours before packaging. (leakage less than 2.0 inHg at 24 hours).</li>
              <li>Two-sided flippable vacuum gasket for better durability and reliability.</li>
              <li>The gasket is chemically resistant to butane and other solvents.</li>
              <li>Stainless Steel lid for long life .</li>
              <li>Strong elastic food grade silicone vacuum hose can connect/disconnect easily with the pump/chamber.</li>
              <li>50um air filter on the vent valve to reduce air flow and prevent any dust/powder flowing into the chamber.</li>
              <li>Easy to install and low-cost to maintain: the chamber can be assembled in 5 minutes.</li>
              <li>45 day complimentary warranty and life-long parts support.</li>
            </ul>

            <h3 class="mt-5">Product Specs & Part List of the Chamber.</h3>
            <ul>
              <li><strong>Vacuum Chamber:</strong> stainless steel.</li>
              <li><strong>Lid:</strong> Stainless Steel.</li>
              <li><strong>Controller:</strong> Microprocessor based Digital Temperature controller.</li>
              <li><strong>Vacuum Gasket:</strong> silicone, resistant to Butane and other solvents.</li>
              <li><strong>Vacuum Gauge Assembly:</strong> 0.5 inHg accuracy.</li>
              <li><strong>Valve Assembly:</strong> very high quality air-tight brass valves, with 50um filter on vent port.</li>
              <li><strong>Vacuum Hose:</strong> 3.3' / 1 meter food grade collapse-proof silicone hose, 3mm wall thickness (8mm I.D, 14mm O.D)</li>
              <li><strong>Vacuum Pump Adapter:</strong> 3/8" hose barb to 1/4 SAE flare port.</li>
            </ul>

            <div class="table-responsive my-4">
              <table class="table bet-spec-table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Model No</th>
                    <th>Capacity Gallon</th>
                    <th>Capacity Litres</th>
                    <th>Size Inches</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>BHF2020</td><td>1.7</td><td>6.3</td><td>20x20</td></tr>
                  <tr><td>BHF3030</td><td>5.6</td><td>21</td><td>30x30</td></tr>
                  <tr><td>BHF3045</td><td>8.5</td><td>32</td><td>30x45</td></tr>
                  <tr><td>BHF4040</td><td>13.5</td><td>50</td><td>40x40</td></tr>
                  <tr><td>BHF5050</td><td>27</td><td>100</td><td>50x50</td></tr>
                </tbody>
              </table>
              <p class="text-muted"><em>Custom Sizes Manufactured on Demand.</em></p>
            </div>

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
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Heated_Vacuum_Chamber-Oven'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link active">
                  <span class="fw-bold text-white">Heated Vacuum Chamber / Oven</span>
                  <i class="bi bi-chevron-right text-white"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Heated_Vacuum_Degassing_Chamber'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Stainless Steel Vacuum Degassing Chamber</span>
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
              <li class="mb-0">
                <a href="<?php echo product_category_url('ats-pressure-aging-vessel', 'Vacuum_Degassing_Chamber'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Vacuum Degassing Chamber</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
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
    .category-link.active {
        background: var(--accent-color);
        color: #ffffff !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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
    .category-link.active i {
        color: #ffffff !important;
    }
    
    .bet-spec-table th {
        background-color: var(--heading-color);
        color: #fff;
    }
    @media (max-width: 991px) {
        .category-sidebar {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<?php include_once(__DIR__ . '/../../../includes/contact-section.php'); ?>
<?php include_once(__DIR__ . '/../../../includes/footer.php'); ?>


