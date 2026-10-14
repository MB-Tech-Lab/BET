<?php
include_once(__DIR__ . '/../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page) {
    $meta_title = "Perovskite Solar Cell Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Perovskite Solar Cell Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_url('perovskite-solar-cell-glove-box');
} else {
    $meta_title = "Perovskite Solar Cell Glove Box | Thin-Film Photovoltaics | Burhani Engineering Technology";
$meta_description = "Specialized Perovskite Solar Cell Glove Boxes with integrated spin coaters, thermal evaporators, and ultra-dry Nitrogen atmospheres. Optimize photovoltaic research.";
$canonical_url = url('products/vacuum-glove-box/perovskite-solar-cell-glove-box/');
}
include_once(__DIR__ . '/../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "<?php echo url(''); ?>"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Products",
      "item": "<?php echo product_url('vacuum_glove_box'); ?>"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Perovskite Solar Cell Glove Box",
      "item": "<?php echo $canonical_url; ?>"
    }
  ]
}
</script>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Why are halide perovskites highly sensitive to ambient humidity?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Halide perovskite materials (like Methylammonium Lead Iodide - MAPbI3) are highly hygroscopic. Water molecules break the ionic bonds, causing the perovskite structure to decompose into Lead Iodide (PbI2) and methylammonium salts, which destroys the solar cell's photovoltaic properties."
      }
    },
    {
      "@type": "Question",
      "name": "Can a spin coater be integrated directly inside the glove box?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We integrate spin coaters by using flush-mounted bowls, custom vibration-damping mounts, and solvent drains that safely route liquid waste out of the main chamber to protect the internal atmosphere."
      }
    },
    {
      "@type": "Question",
      "name": "Which inert gas is recommended for perovskite research: Argon or Nitrogen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "High-purity Nitrogen (N2) is the standard and most economical gas choice for perovskite solar cell research. Nitrogen is fully inert to perovskites and enables continuous solvent vapor trapping without reaction hazards."
      }
    }
  ]
}
</script>

<main class="main">

  <!-- 1️⃣ Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-10">
            <h1>Perovskite Solar Cell Glove Box</h1>
            <p class="mb-4">Specialized Controlled Atmosphere Processing Systems for Thin-Film Photovoltaics &amp; Advanced Solar Energy Research</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-chat-dots"></i> Request Technical Consultation
              </a>
              <a href="<?php echo product_url('vacuum_glove_box'); ?>" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
                <i class="bi bi-arrow-left"></i> Core Glove Box Page
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 2️⃣ Context & Introduction -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            <h2>Precision Enclosures for High-Efficiency Photovoltaic Fabrication</h2>
            <p>
              The development of metal halide perovskite solar cells has revolutionized photovoltaic research, driving power conversion efficiencies (PCE) past 26% in record time. However, halide perovskite crystals are extremely sensitive to ambient moisture, oxygen, and thermal fluctuations. Exposure to humidity causes the material to hydrolyze and decompose into non-conductive precursors, degrading device performance in minutes.
            </p>
            <p>
              The <strong>Perovskite Solar Cell Glove Box</strong> by <strong>Burhani Engineering Technology</strong> is an engineered controlled-atmosphere processing system designed to isolate thin-film fabrication steps. Backfilled with ultra-pure Nitrogen or Argon, our systems maintain $O_2$ and $H_2O$ levels at <strong>sub-1 ppm</strong>. We specialize in integrating thin-film processing tools, including spin coaters, slot-die coaters, hot plates, and thermal evaporators, within a single, unbroken inert atmosphere.
            </p>
            <p>
              By preventing moisture-induced degradation during crystallization and sealing, our glove boxes ensure high reproducibility and device stability for solar energy researchers.
            </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary" style="background: #fff; border-top: 4px solid var(--accent-color) !important;">
            <h4 class="mb-4" style="color: var(--heading-color); font-weight: 700;">Glove Box Cluster</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_url('vacuum_glove_box'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Flagship Glove Box</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-3 pb-2 border-bottom">
                <a href="<?php echo product_url('battery-research-glove-box'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Battery Research Glove Box</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-0">
                <a href="<?php echo product_url('semiconductor-glove-box'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Semiconductor Glove Box</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
              <li class="mb-0">
                <a href="<?php echo product_url('pharmaceutical-glove-box'); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span>Pharmaceutical Isolator</span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3️⃣ Thin-Film Deposition Challenges -->
  <section class="section light-background">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up">
          <h3>Process Flow Integration for Perovskite Film Casting</h3>
          <p>
            Fabricating high-efficiency perovskite cells requires a series of delicate film deposition and annealing stages:
          </p>
          <div class="row gy-4 my-2">
            <div class="col-md-6">
              <div class="p-4 bg-white rounded shadow-sm h-100">
                <h5>1. Solution Preparation &amp; Spin Coating</h5>
                <p class="small text-muted">
                  Perovskite precursor solutions are prepared using polar aprotic solvents (like DMF, DMSO, or GBL). These solvents are highly hygroscopic. Spin coating must be carried out in an ultra-dry Nitrogen atmosphere to prevent water adsorption during the spin-cast stage. 
                </p>
                <p class="small text-muted">
                  During spinning, an anti-solvent (like Chlorobenzene or Ethyl Acetate) is dripped onto the wafer to induce rapid crystallization, requiring active solvent vapor filtration.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-4 bg-white rounded shadow-sm h-100">
                <h5>2. Thermal Annealing &amp; Evaporation</h5>
                <p class="small text-muted">
                  The spun film is transferred to an integrated hot plate to anneal at 100°C–150°C, forming the black perovskite phase. 
                </p>
                <p class="small text-muted">
                  Finally, the substrate is transferred to a vacuum thermal evaporator, connected via a hermetic wall flange, to deposit metal cathode contacts (such as Gold, Silver, or Aluminum) without breaking the inert atmosphere.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4️⃣ Features: Solvent Vapor Adsorption & Spin Coater Integration -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Perovskite R&amp;D Integration Features</h2>
        <p>Providing specialized engineering options for thin-film photovoltaic processes.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h4 class="text-primary">Spin Coater Integration</h4>
            <p class="small">
              Spin coaters generate rotational vibrations and throw off solvent waste. We offer:
            </p>
            <ul class="small text-muted">
              <li>Flush-mounted spin bowls embedded into the glove box floor plate for ergonomic operation.</li>
              <li>Heavy-duty vibration isolation plates to prevent balances or microscope displacement.</li>
              <li>Liquid waste drain lines that route spin-off solvent safely to an external waste container.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h4 class="text-primary">Solvent Carbon Adsorbers</h4>
            <p class="small">
              Polar solvents (DMF, DMSO, Chlorobenzene) poison standard copper catalysts:
            </p>
            <ul class="small text-muted">
              <li>Inline activated carbon solvent traps adsorb volatile gases.</li>
              <li>Dual bypass valve configurations enable media change without breaking chamber seals.</li>
              <li>Continuous pressure monitoring displays trap capacity metrics.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card p-4 h-100 border-0 shadow-sm">
            <h4 class="text-primary">Deposition System Interfaces</h4>
            <p class="small">
              Integrating high-vacuum thermal deposition systems:
            </p>
            <ul class="small text-muted">
              <li>Custom side flanges match standard thermal evaporator chambers.</li>
              <li>Pneumatic lift gates allow samples to slide into deposition zones.</li>
              <li>Electrical feedthroughs support thermal monitoring and control lines.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5️⃣ Technical Specifications Table -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Perovskite Glove Box Specifications</h2>
        <p>Review standard setups designed for photovoltaic laboratories.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="table-responsive">
            <table class="bet-spec-table table table-bordered">
              <thead class="bg-dark text-white">
                <tr>
                  <th>Technical Parameter</th>
                  <th>Standard Thin-Film Setup</th>
                  <th>High-Integration Evaporator Model</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Chamber Material</strong></td>
                  <td>SS304 Stainless Steel (Ra &lt; 0.8 µm)</td>
                  <td>SS304 Stainless Steel (Ra &lt; 0.8 µm)</td>
                </tr>
                <tr>
                  <td><strong>Internal Gas</strong></td>
                  <td>High-Purity Nitrogen (N₂)</td>
                  <td>High-Purity Nitrogen or Argon</td>
                </tr>
                <tr>
                  <td><strong>Atmospheric Purity</strong></td>
                  <td>O₂ &lt; 1 ppm, H₂O &lt; 1 ppm</td>
                  <td>O₂ &lt; 1 ppm, H₂O &lt; 1 ppm</td>
                </tr>
                <tr>
                  <td><strong>Solvent Filtering</strong></td>
                  <td>Inline Activated Charcoal (5kg)</td>
                  <td>Inline Activated Charcoal (10kg with bypass)</td>
                </tr>
                <tr>
                  <td><strong>Spin Coater Prep</strong></td>
                  <td>Integrated 1x Spin Coater bowl cut-out</td>
                  <td>Integrated 2x Spin Coater bowls with drain lines</td>
                </tr>
                <tr>
                  <td><strong>Evaporator Flange</strong></td>
                  <td>Not included (Upgradable)</td>
                  <td>Custom Kf40 / Kf50 flange with slide-gate</td>
                </tr>
                <tr>
                  <td><strong>Glass Window</strong></td>
                  <td>Safety glass with anti-reflective coating</td>
                  <td>Safety glass with UV-filtering laminate</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6️⃣ FAQ Section -->
  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Technical answers to common questions about perovskite processing glove boxes.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  Why are halide perovskites highly sensitive to ambient humidity?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Halide perovskite materials (like Methylammonium Lead Iodide - MAPbI3) are highly hygroscopic. Water molecules break the ionic bonds, causing the perovskite structure to decompose into Lead Iodide ($PbI_2$) and methylammonium salts, which destroys the solar cell's photovoltaic properties.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  Can a spin coater be integrated directly inside the glove box?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. We integrate spin coaters by using flush-mounted bowls, custom vibration-damping mounts, and solvent drains that safely route liquid waste out of the main chamber to protect the internal atmosphere.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  Which inert gas is recommended for perovskite research: Argon or Nitrogen?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  High-purity Nitrogen ($N_2$) is the standard and most economical gas choice for perovskite solar cell research. Nitrogen is fully inert to perovskites and enables continuous solvent vapor trapping without reaction hazards.
                </div>
              </div>
            </div>

            <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  What is the role of the UV-filtering glass window?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Halide perovskites can undergo photocatalytic degradation when exposed to UV light in the presence of trace oxygen. The UV-filtering safety glass window blocks wavelengths below 400nm, protecting the materials during preparation and measurements.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7️⃣ Cross Linking / Related Products -->
  <section class="section light-background">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <h4>Related Products &amp; Solutions</h4>
          <div class="row gy-3">
            <div class="col-md-3">
              <a href="<?php echo product_url('vacuum_degassing_chamber'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
                <i class="bi bi-gear-fill text-primary"></i> <span>Vacuum Degassing Chamber</span>
              </a>
            </div>
            <div class="col-md-3">
              <a href="<?php echo product_url('Transparent_Vacuum_and_Pressure_Vessels'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
                <i class="bi bi-box-seam-fill text-primary"></i> <span>Transparent Vacuum Vessel</span>
              </a>
            </div>
            <div class="col-md-3">
              <a href="<?php echo product_url('semiconductor-glove-box'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
                <i class="bi bi-cpu-fill text-primary"></i> <span>Semiconductor Glove Box</span>
              </a>
            </div>
            <div class="col-md-3">
              <a href="<?php echo product_url('vacuum_glove_box'); ?>" class="d-flex align-items-center gap-2 p-3 bg-white rounded text-decoration-none text-dark hover-accent shadow-sm">
                <i class="bi bi-box-seam-fill text-primary"></i> <span>Main Vacuum Glove Box</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8️⃣ Call to Action -->
  <section class="section py-5">
    <div class="container" data-aos="zoom-in">
      <div class="bg-primary p-5 rounded-4 text-center text-white shadow-lg">
        <h2 class="text-white mb-3">Elevate Your Solar Cell Efficiency</h2>
        <p class="mb-4">Consult with our thin-film integration engineers to design a custom Perovskite Solar Cell Glove Box tailored to your tool configuration and floor plan.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact" class="btn btn-lg btn-light px-5 py-3 rounded-pill fw-bold">Request Technical Quote</a>
          <a href="<?php echo product_url('semiconductor-glove-box'); ?>" class="btn btn-lg btn-outline-light px-5 py-3 rounded-pill fw-bold">View Semiconductor Glove Box</a>
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
    .bet-spec-table th {
        background-color: var(--heading-color);
        color: #fff;
    }
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
        transition: all 0.3s ease;
    }
    .hover-accent:hover {
        color: var(--accent-color) !important;
        background-color: #e9ecef !important;
    }
    @media (max-width: 991px) {
        .sidebar-box {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
