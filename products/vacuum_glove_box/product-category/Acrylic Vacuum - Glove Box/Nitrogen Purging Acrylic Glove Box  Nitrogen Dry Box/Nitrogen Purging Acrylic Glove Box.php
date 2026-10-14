<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Nitrogen Purging Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Nitrogen Purging Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/nitrogen-purging-acrylic-glove-box-nitrogen-dry-box.php');
} else {
    $meta_title = "Nitrogen Purging Acrylic Glove Box | Nitrogen Dry Box | Worldwide Supply | Burhani Engineering Technology";
    $meta_description = "Nitrogen Purging Acrylic Glove Box / Nitrogen Dry Box by Burhani Engineering Technology featuring transparent acrylic construction, transition chamber, customizable acrylic thickness, SS 304 or brass fittings, pressure monitoring and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/nitrogen-purging-acrylic-glove-box-nitrogen-dry-box.php');
}
include_once(__DIR__ . '/../../../../../includes/header.php');
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<style>
/* Premium B2B Product Page Styles */
:root {
    --bet-navy: #0B2149;
    --bet-blue: #0047AB;
    --bet-cyan: #00A3E0;
    --bet-gray-light: #F8FAFC;
    --bet-gray-mid: #E2E8F0;
    --bet-text: #334155;
    --bet-border: #CBD5E1;
}

body {
    color: var(--bet-text);
}

.hero-premium {
    background: linear-gradient(135deg, var(--bet-navy) 0%, var(--bet-blue) 100%);
    color: white;
    padding: 80px 0 60px;
    position: relative;
    overflow: hidden;
}
.hero-premium::after {
    content: '';
    position: absolute;
    right: -10%;
    top: -20%;
    width: 50%;
    height: 150%;
    background: radial-gradient(circle, rgba(0, 163, 224, 0.1) 0%, transparent 70%);
    pointer-events: none;
}
.breadcrumb-premium {
    background: transparent;
    padding: 0;
    margin-bottom: 30px;
}
.breadcrumb-premium .breadcrumb-item, .breadcrumb-premium .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
    text-decoration: none;
}
.breadcrumb-premium .breadcrumb-item.active {
    color: white;
    font-weight: 500;
}
.breadcrumb-premium .breadcrumb-item + .breadcrumb-item::before {
    content: "→";
    color: rgba(255, 255, 255, 0.5);
}
.hero-premium h1 {
    font-size: 2.8rem;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
    color: #ffffff !important;
}
.hero-premium .subtitle {
    font-size: 1.2rem;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 40px;
    max-width: 800px;
}
.btn-premium {
    background: var(--bet-cyan);
    color: white;
    padding: 12px 30px;
    border-radius: 4px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    border: none;
    box-shadow: 0 4px 15px rgba(0, 163, 224, 0.3);
}
.btn-premium:hover {
    background: white;
    color: var(--bet-navy);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Gallery Styles */
.gallery-container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.05);
    border: 1px solid var(--bet-gray-mid);
}
.main-image-wrapper {
    width: 100%;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    border-radius: 6px;
    overflow: hidden;
    background: var(--bet-gray-light);
}
.main-image-wrapper img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}
.thumbnail-strip-wrapper {
    width: 100%;
    overflow-x: auto;
    -ms-overflow-style: none;
    scrollbar-width: thin;
}
.thumbnail-strip-wrapper::-webkit-scrollbar {
    height: 6px;
}
.thumbnail-strip-wrapper::-webkit-scrollbar-thumb {
    background-color: var(--bet-border);
    border-radius: 4px;
}
.thumbnail-strip {
    display: flex;
    gap: 12px;
    padding-bottom: 10px;
    flex-wrap: nowrap;
    min-width: min-content;
}
.thumbnail {
    flex: 0 0 auto;
    width: 80px;
    height: 80px;
    border: 2px solid transparent;
    border-radius: 6px;
    cursor: pointer;
    overflow: hidden;
    background: var(--bet-gray-light);
    transition: all 0.2s ease;
}
.thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.thumbnail:hover {
    border-color: var(--bet-border);
}
.thumbnail.active {
    border-color: var(--bet-cyan);
    box-shadow: 0 2px 8px rgba(0, 163, 224, 0.2);
}

/* Sections */
.section-premium {
    padding: 80px 0;
}
.section-premium.bg-light {
    background-color: var(--bet-gray-light);
}
.section-title {
    color: var(--bet-navy);
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
}
.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: var(--bet-cyan);
}
.section-title.text-center::after {
    left: 50%;
    transform: translateX(-50%);
}
.lead-text {
    font-size: 1.1rem;
    line-height: 1.7;
    color: var(--bet-text);
    margin-bottom: 20px;
}

/* Features Grid */
.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 40px;
}
.feature-card {
    background: white;
    border: 1px solid var(--bet-border);
    border-radius: 8px;
    padding: 25px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    border-color: var(--bet-cyan);
}
.feature-icon {
    color: var(--bet-cyan);
    font-size: 1.5rem;
    flex-shrink: 0;
}
.feature-text {
    font-weight: 500;
    color: var(--bet-navy);
    line-height: 1.4;
}

/* Tech Config Specs */
.tech-table {
    width: 100%;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    border-collapse: collapse;
}
.tech-table th, .tech-table td {
    padding: 16px 20px;
    border-bottom: 1px solid var(--bet-gray-mid);
    text-align: left;
}
.tech-table th {
    background: var(--bet-gray-light);
    color: var(--bet-navy);
    font-weight: 600;
    width: 35%;
}
.tech-table td {
    color: var(--bet-text);
}
.tech-table tr:last-child th, .tech-table tr:last-child td {
    border-bottom: none;
}

/* Bottom CTA */
.bottom-cta {
    background: var(--bet-navy);
    color: white;
    text-align: center;
    padding: 60px 20px;
    border-radius: 12px;
    margin: 60px 0;
}
.bottom-cta h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 20px;
}
.bottom-cta p {
    font-size: 1.1rem;
    opacity: 0.9;
    max-width: 700px;
    margin: 0 auto 30px;
}
</style>

<script>
function updateMainImage(thumbnail, imgSrc) {
    document.getElementById('main-product-image').src = imgSrc;
    document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
    thumbnail.classList.add('active');
}
</script>

<main class="main">

    <!-- HERO SECTION -->
    <section class="hero-premium">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-premium">
                    <li class="breadcrumb-item"><a href="<?php echo url(''); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo url('products'); ?>">Products</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo url('products/vacuum-glove-box'); ?>">Vacuum Glove Box</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box'); ?>">Acrylic Vacuum Glove Box</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nitrogen Purging Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Nitrogen Purging Acrylic Glove Box / Nitrogen Dry Box</h1>
                    <p class="subtitle">Purge. Protect. Control. A Cleaner, Drier Environment for Sensitive Research.</p>
                    <a href="#contact" class="btn-premium text-decoration-none">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT OVERVIEW & GALLERY -->
    <section class="section-premium">
        <div class="container">
            <div class="row gy-5">
                <!-- Left: Description -->
                <div class="col-lg-6 pe-lg-5">
                    <h2 class="section-title">Product Introduction</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology designs and manufactures high-quality <strong>Nitrogen Purging Acrylic Glove Boxes / Nitrogen Dry Boxes</strong> for laboratories, research institutions, universities, pharmaceutical R&D, electronics, battery research, material science, chemical processing and industrial applications worldwide.
                    </p>
                    <p class="lead-text">
                        Engineered to provide an enclosed and controlled working environment, this glove box uses dry nitrogen gas purging to displace normal atmospheric air and help reduce oxygen, moisture and airborne contamination around sensitive materials and processes.
                    </p>
                    <p class="lead-text">
                        The system combines a high-transparency acrylic main chamber, dual sealed glove ports, gas inlet and outlet provisions, pressure monitoring and an integrated transition chamber / pass box for convenient material transfer.
                    </p>
                    <p class="lead-text mb-0">
                        Unlike a complete closed-loop purification glove box, this configuration primarily achieves atmospheric control through continuous or controlled nitrogen purging. The actual oxygen and humidity levels obtained depend on nitrogen purity, purge flow rate, chamber sealing, chamber volume, operating procedure and frequency of material transfer.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box Main 1.png'); ?>" alt="Nitrogen Purging Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box Main 1.png',
                                    'Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box 2.png',
                                    'Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box 3.png',
                                    'Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box 4.png',
                                    'Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box 5.png',
                                    'Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box 6.png',
                                    'Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box/';
                                
                                foreach ($images as $index => $img) {
                                    $active_class = $index === 0 ? 'active' : '';
                                    $img_src = asset($base_img_path . $img);
                                    echo "<div class='thumbnail $active_class' onclick='updateMainImage(this, \"$img_src\")'>
                                            <img src='$img_src' alt='" . htmlspecialchars(urldecode(pathinfo($img, PATHINFO_FILENAME))) . "'>
                                          </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY FEATURES -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Key Features</h2>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">High-Transparency Acrylic Chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Nitrogen Gas Purging System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Integrated Transition Chamber / Pass Box</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Pressure Monitoring</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Sealed Glove Ports</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">SS 304 or Brass Fitting Options</span>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SPECIFICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Technical Specifications – BET-LAGB-A11</h2>
            
            <div class="table-responsive">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Model</td>
                            <td>BET-LAGB-A11</td>
                        </tr>
                        <tr>
                            <td>Product Type</td>
                            <td>Nitrogen Purging Acrylic Glove Box / Nitrogen Dry Box</td>
                        </tr>
                        <tr>
                            <td>Main Chamber Internal Size</td>
                            <td>700 W × 450 D × 550 H mm (27.5" W × 17.7" D × 21.6" H)</td>
                        </tr>
                        <tr>
                            <td>Transition Chamber / Pass Box</td>
                            <td>240 × 240 × 240 mm (9.4" × 9.4" × 9.4")</td>
                        </tr>
                        <tr>
                            <td>Overall Approx. Footprint</td>
                            <td>1000 W × 750 D × 700 H mm (39.4" W × 29.5" D × 27.5" H)</td>
                        </tr>
                        <tr>
                            <td>Glove Port Diameter</td>
                            <td>Ø 190 mm / Ø 7.5"</td>
                        </tr>
                        <tr>
                            <td>Main Chamber Material</td>
                            <td>High-Transparency Acrylic</td>
                        </tr>
                        <tr>
                            <td>Acrylic Thickness</td>
                            <td>Customizable according to chamber size &amp; application</td>
                        </tr>
                        <tr>
                            <td>Gas Type</td>
                            <td>Dry Nitrogen</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Dual Sealed Ports</td>
                        </tr>
                        <tr>
                            <td>Transition Chamber</td>
                            <td>Integrated Acrylic Pass Box</td>
                        </tr>
                        <tr>
                            <td>Pressure Monitoring</td>
                            <td>Analog Pressure Gauge</td>
                        </tr>
                        <tr>
                            <td>Fitting Options</td>
                            <td>SS 304 Stainless Steel / Brass</td>
                        </tr>
                        <tr>
                            <td>Gas Connections</td>
                            <td>Nitrogen Inlet &amp; Outlet</td>
                        </tr>
                        <tr>
                            <td>Custom Sizes</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>Custom Configuration</td>
                            <td>Available according to application</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Nitrogen Purging Acrylic Glove Box / Nitrogen Dry Box is suitable for applications including Battery Research, Lithium-Ion Battery Development, Electronics Handling, PCB &amp; Semiconductor Work, Moisture-Sensitive Material Handling, Material Science, Chemical Research, Pharmaceutical R&amp;D, Powder Handling, Sample Preparation, Controlled Atmosphere Experiments, Laboratory Research, University Laboratories, Quality Control, Component Assembly, and Industrial R&amp;D.
            </p>
            <p class="lead-text text-center mb-0">
                It is particularly useful where sensitive materials require a dry or reduced-oxygen working environment but a full closed-loop purification system is not necessary.
            </p>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Custom Manufacturing Options</h2>
            <p class="lead-text">
                Burhani Engineering Technology can manufacture the complete nitrogen glove box according to individual project specifications. Customization options include main chamber dimensions, acrylic chamber thickness, transition chamber size, number of glove ports, glove-port diameter, glove material, door configuration, SS 304 or brass fittings, nitrogen inlet/outlet layout, pressure instrumentation, oxygen monitoring, humidity monitoring, electrical feedthroughs and additional process accessories.
            </p>
            <p class="lead-text mb-0">
                This allows customers to select a glove box engineered around their exact laboratory or industrial process.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Worldwide Manufacturing, Supply & Delivery</h2>
            <p class="lead-text">
                Burhani Engineering Technology supplies Nitrogen Purging Acrylic Glove Boxes and Nitrogen Dry Boxes to customers around the world, serving research laboratories, universities, pharmaceutical organizations, electronics manufacturers, battery-development facilities, engineering companies and industrial R&amp;D centres across international markets.
            </p>
            <p class="lead-text mb-0" style="font-weight: 700; color: var(--bet-navy);">
                We Deliver Engineering Quality, Satisfaction &amp; Trust Around the World.
            </p>
        </div>
    </section>

    <!-- CATALOGUE DOWNLOAD -->
    <section class="section-premium">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Download Catalogue</h2>
                    <p class="lead-text">
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue for the BET-LAGB-A11.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
                        <i class="bi bi-file-earmark-pdf me-2"></i> Download PDF
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="section-premium" id="contact">
        <div class="container">
            <div class="bottom-cta">
                <h2>Request a Quote</h2>
                <p>Interested in the Nitrogen Purging Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>