<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Temperature And Humidity Controlled Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Temperature And Humidity Controlled Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/temperature-and-humidity-controlled-acrylic-glove-box.php');
} else {
    $meta_title = "Temperature And Humidity Controlled Acrylic Glove Box Manufacturer India | BET-PMMA/PP | Burhani Engineering Technology";
    $meta_description = "BET-PMMA/PP Temperature And Humidity Controlled Acrylic Glove Box by Burhani Engineering Technology features 10 mm heat-treated Plexiglas, dual 200 mm glove ports, stainless steel vacuum airlock, pressure monitoring, vacuum evacuation, and customizable environmental control for laboratory and industrial applications.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/temperature-and-humidity-controlled-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Temperature And Humidity Controlled Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Temperature And Humidity Controlled Acrylic Glove Box</h1>
                    <p class="subtitle">Control Temperature. Control Humidity. Control Your Process. - Model BET-PMMA/PP</p>
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
                    <h2 class="section-title">Product Overview</h2>
                    <p class="lead-text">
                        The <strong>Temperature And Humidity Controlled Acrylic Glove Box</strong> manufactured by Burhani Engineering Technology is a precision-engineered controlled-environment workstation designed for laboratory, research, pharmaceutical, electronics, material science, chemical, and industrial applications where temperature stability, humidity control, clean handling, and environmental isolation are important.
                    </p>
                    <p class="lead-text">
                        The system combines a high-transparency acrylic / Plexiglas chamber, sealed glove access, a dedicated stainless steel transfer lock, pressure monitoring, valves, vacuum-assisted airlock evacuation, and an external temperature and humidity control arrangement.
                    </p>
                    <p class="lead-text mb-0">
                        Manufactured in Chennai, Tamil Nadu, India, the BET-PMMA/PP glove box is intended for laboratories and industrial facilities that require a durable, highly visible chamber together with controlled environmental operation and convenient sample transfer.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Temperature & Huidity controlled Acrylic Glove Box/Temperature & Huidity controlled Acrylic Glove Box Main 1.png'); ?>" alt="Temperature And Humidity Controlled Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Temperature & Huidity controlled Acrylic Glove Box Main 1.png',
                                    'Temperature & Huidity controlled Acrylic Glove Box 2.png',
                                    'Temperature & Huidity controlled Acrylic Glove Box 3.png',
                                    'Temperature & Huidity controlled Acrylic Glove Box 4.png',
                                    'Temperature & Huidity controlled Acrylic Glove Box 5.png',
                                    'Temperature & Huidity controlled Acrylic Glove Box 6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Temperature & Huidity controlled Acrylic Glove Box/';
                                
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
                    <span class="feature-text">High-Transparency 10 mm Plexiglas Chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-thermometer-half feature-icon"></i>
                    <span class="feature-text">Temperature and Humidity Controlled Environment</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Polycarbonate Windscreen with O-Ring Seal</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual 200 mm Glove Ports</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Electro-Polished Stainless Steel Transfer Lock</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-layers feature-icon"></i>
                    <span class="feature-text">Radial-Sealing Removable Lids</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Manometer and Ball Valve Arrangement</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-pump feature-icon"></i>
                    <span class="feature-text">Vacuum Pump for Airlock Evacuation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-grid feature-icon"></i>
                    <span class="feature-text">Stainless Steel Internal Floor Plate</span>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SPECIFICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Technical Specifications</h2>
            
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
                            <td>Product Name</td>
                            <td>Temperature And Humidity Controlled Acrylic Glove Box</td>
                        </tr>
                        <tr>
                            <td>Model No.</td>
                            <td>BET-PMMA/PP</td>
                        </tr>
                        <tr>
                            <td>Chamber Material</td>
                            <td>Heat-Treated Plexiglas / Acrylic</td>
                        </tr>
                        <tr>
                            <td>Material Thickness</td>
                            <td>10 mm</td>
                        </tr>
                        <tr>
                            <td>External Dimensions</td>
                            <td>1100 mm L × 700 mm D × 700 mm H</td>
                        </tr>
                        <tr>
                            <td>Windscreen</td>
                            <td>Polycarbonate</td>
                        </tr>
                        <tr>
                            <td>Seal</td>
                            <td>Removable O-Ring Seal</td>
                        </tr>
                        <tr>
                            <td>Glove Rings</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Glove Ring Diameter</td>
                            <td>200 mm</td>
                        </tr>
                        <tr>
                            <td>Gloves</td>
                            <td>2 Glove Box Gloves</td>
                        </tr>
                        <tr>
                            <td>Transfer Lock Material</td>
                            <td>Electro-Polished Stainless Steel</td>
                        </tr>
                        <tr>
                            <td>Airlock Diameter</td>
                            <td>200 mm</td>
                        </tr>
                        <tr>
                            <td>Airlock Length</td>
                            <td>300 mm</td>
                        </tr>
                        <tr>
                            <td>Airlock Lids</td>
                            <td>2 Radial-Sealing Removable Lids</td>
                        </tr>
                        <tr>
                            <td>Pressure Monitoring</td>
                            <td>1 Manometer on Lock</td>
                        </tr>
                        <tr>
                            <td>Valves</td>
                            <td>2 Ball Valves on Lock</td>
                        </tr>
                        <tr>
                            <td>Floor Plate</td>
                            <td>Stainless Steel</td>
                        </tr>
                        <tr>
                            <td>Airlock Evacuation</td>
                            <td>Vacuum Pump</td>
                        </tr>
                        <tr>
                            <td>Environmental Control</td>
                            <td>Temperature and Humidity Control System</td>
                        </tr>
                        <tr>
                            <td>Manufacturer</td>
                            <td>Burhani Engineering Technology</td>
                        </tr>
                        <tr>
                            <td>Origin</td>
                            <td>India</td>
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
                The Temperature And Humidity Controlled Acrylic Glove Box is suitable for a wide variety of laboratory, academic, research, and industrial applications, including pharmaceutical research and development, material science laboratories, electronics and semiconductor handling, temperature-sensitive material processing, moisture-sensitive sample preparation, controlled-environment experiments, chemical research, battery-related research, precision component assembly, quality-control laboratories, university and institutional research, industrial R&D, and laboratory testing and inspection.
            </p>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Customization Options</h2>
            <p class="lead-text">
                Burhani Engineering Technology can customize the glove box according to customer application requirements. Available customization may include custom chamber dimensions, alternative acrylic thickness, additional glove ports, modified glove-port positioning, different transfer-lock dimensions, temperature-controller configuration, humidity-controller configuration, gas inlet and outlet connections, additional valves and fittings, monitoring instrumentation, utility feedthroughs, internal shelves or trays, electrical provisions, vacuum system integration, and process-specific accessories.
            </p>
            <p class="lead-text mb-0">
                This allows the glove box to be configured around the customer's workflow rather than forcing the process to fit a fixed standard system.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology?</h2>
            <p class="lead-text">
                Burhani Engineering Technology manufactures pressure, vacuum, acrylic glove box, and controlled-environment systems for laboratory and industrial applications. Our approach focuses on clear visibility, functional engineering, practical customization, durable construction, and customer-specific configuration.
            </p>
            <p class="lead-text mb-0">
                For customers searching for a Temperature And Humidity Controlled Acrylic Glove Box manufacturer in Chennai, controlled environment glove box supplier in Tamil Nadu, or custom acrylic glove box manufacturer in India, Burhani Engineering Technology provides application-based solutions for research institutions, industries, laboratories, universities, and technical facilities.
            </p>
        </div>
    </section>

    <!-- INDIA & WORLDWIDE SUPPLY -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">India & Worldwide Supply</h2>
            <p class="lead-text">
                Based in Chennai, Tamil Nadu, Burhani Engineering Technology supports customers across India, including Bengaluru, Hyderabad, Mumbai, Pune, Ahmedabad, Delhi, Kolkata, Coimbatore, and other industrial and research locations.
            </p>
            <p class="lead-text mb-0">
                Customized systems can also be manufactured for international project requirements, subject to application specifications and supply arrangements.
            </p>
        </div>
    </section>

    <!-- CATALOGUE DOWNLOAD -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Download Catalogue</h2>
                    <p class="lead-text">
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue for the BET-PMMA/PP.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Temperature & Huidity controlled Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Temperature And Humidity Controlled Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>