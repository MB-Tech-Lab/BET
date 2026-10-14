<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Standard Acrylic Vacuum Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Standard Acrylic Vacuum Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/standard-acrylic-vacuum-glove-box.php');
} else {
    $meta_title = "Standard Acrylic Vacuum Glove Box | Custom Thickness & Worldwide Delivery | Burhani Engineering Technology";
    $meta_description = "Standard Acrylic Vacuum Glove Box by Burhani Engineering Technology with 6 mm standard or customizable acrylic thickness, dual glove ports, SS or brass fittings, vacuum/gas connections, multiple sizes and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/standard-acrylic-vacuum-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Standard Acrylic Vacuum Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Standard Acrylic Vacuum Glove Box</h1>
                    <p class="subtitle">Clear Visibility. Custom Construction. Controlled Environment. Precision Engineered.</p>
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
                        Burhani Engineering Technology designs and manufactures high-quality <strong>Standard Acrylic Vacuum Glove Boxes</strong> for laboratories, research institutions, universities, pharmaceutical facilities, electronics industries, material science laboratories and industrial R&D applications worldwide.
                    </p>
                    <p class="lead-text">
                        The system provides a transparent, enclosed and well-sealed workspace for applications requiring isolation from dust, external contamination and uncontrolled atmospheric conditions.
                    </p>
                    <p class="lead-text">
                        The Standard Acrylic Vacuum Glove Box is manufactured using high-quality transparent acrylic panels that provide excellent visibility of the internal working area while maintaining a practical enclosed environment for handling samples, components, powders, instruments and sensitive materials.
                    </p>
                    <p class="lead-text mb-0">
                        The standard chamber configuration uses 6 mm thick acrylic, while the acrylic chamber thickness can also be customized according to customer requirements, chamber dimensions and application needs.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Standard Acylic Vacuum Glove Box/Standard Vacuum Glove Box  Main 1.png'); ?>" alt="Standard Acrylic Vacuum Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Standard Vacuum Glove Box  Main 1.png',
                                    'Standard Vacuum Glove Box  2.png',
                                    'Standard Vacuum Glove Box  3.png',
                                    'Standard Vacuum Glove Box  4.png',
                                    'Standard Vacuum Glove Box  5.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Standard Acylic Vacuum Glove Box/';
                                
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
                    <span class="feature-text">Crystal-Clear Acrylic Construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">6 mm Standard Acrylic Thickness – Custom Available</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Ergonomic Glove Ports</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Side Access Door</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Vacuum / Gas Inlet and Outlet Connections</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gear feature-icon"></i>
                    <span class="feature-text">SS 304 or Brass Fittings</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-grid feature-icon"></i>
                    <span class="feature-text">Flange Port Options (165 mm / 200 mm)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Dustproof Sealed Working Environment</span>
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
                            <th>Model</th>
                            <th>Chamber Size W × D × H (mm)</th>
                            <th>Acrylic Chamber Thickness</th>
                            <th>Side Door Size (mm)</th>
                            <th>Flange Port</th>
                            <th>Transition Box</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BET-GS-001-A</td>
                            <td>300 × 400 × 500</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>260 × 260</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-002-A</td>
                            <td>700 × 450 × 550</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-003-A</td>
                            <td>800 × 550 × 600</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-004-A</td>
                            <td>900 × 500 × 500</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-005-A</td>
                            <td>900 × 600 × 700</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-006-A</td>
                            <td>1000 × 750 × 700</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-008-A</td>
                            <td>1200 × 800 × 700</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="lead-text mt-3">
                <strong>Chamber Material:</strong> High-Transparency Acrylic | 
                <strong>Standard Acrylic Thickness:</strong> 6 mm | 
                <strong>Custom Acrylic Thickness:</strong> Available according to customer and application requirements | 
                <strong>Fitting Options:</strong> SS 304 Stainless Steel / Brass | 
                <strong>Glove Ports:</strong> Dual Glove Ports | 
                <strong>Flange Port Options:</strong> 165 mm / 200 mm | 
                <strong>Side Access Door:</strong> Model dependent / Customizable | 
                <strong>Transition Chamber:</strong> Not included in standard BET-GS configuration | 
                <strong>Custom Chamber Sizes:</strong> Available | 
                <strong>Custom Configuration:</strong> Available according to application requirements
            </p>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Standard Acrylic Vacuum Glove Box is suitable for a wide range of laboratory, research and industrial applications including Laboratory Research, Material Science, Pharmaceutical R&D, Electronics Handling, Battery Research, Powder Handling, Sample Preparation, Chemical Research, Sensitive Component Handling, Controlled Atmosphere Experiments, University Laboratories, Industrial R&D, Quality Control, Nitrogen Purging, Argon Purging, and Dust-Sensitive Processes.
            </p>
            <p class="lead-text text-center mb-0">
                The system is particularly useful where operators require excellent visibility combined with an enclosed and controllable working environment.
            </p>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Multiple Standard Sizes & Custom Solutions</h2>
            <p class="lead-text">
                The BET-GS series is available in multiple standard chamber dimensions ranging from compact laboratory models to larger working chambers. Customers can choose an appropriate model depending on sample size, available laboratory space, internal equipment, required working area, glove access, and process conditions.
            </p>
            <p class="lead-text">
                For specialized applications, Burhani Engineering Technology can also manufacture customized Acrylic Vacuum Glove Boxes with application-specific chamber dimensions and construction. Customization can include acrylic chamber thickness, chamber dimensions, glove-port quantity, glove-port position, side access-door size, flange dimensions, vacuum connections, gas connections, SS or brass fittings, instrumentation provisions, electrical feedthroughs, and additional accessories.
            </p>
            <p class="lead-text mb-0">
                This allows customers to obtain a glove box configuration specifically designed around their process instead of being limited to a fixed standard design.
            </p>
        </div>
    </section>

    <!-- CUSTOM THICKNESS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Customizable Acrylic Thickness for Larger & Specialized Chambers</h2>
            <p class="lead-text">
                Although 6 mm acrylic is the standard thickness used in the BET-GS series, larger or specialized glove box systems may require a different panel thickness. Burhani Engineering Technology can therefore manufacture glove boxes using custom acrylic thicknesses selected according to chamber size, structural stability and operating requirements.
            </p>
            <p class="lead-text mb-0">
                This becomes particularly useful for large-volume glove boxes, multi-port systems, customized chambers, equipment-integrated systems, specialized laboratory installations, and industrial research applications. The chamber construction can therefore be optimized for the actual application rather than applying one fixed acrylic thickness to every system.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology?</h2>
            <p class="lead-text">
                Burhani Engineering Technology focuses on combining precision engineering, quality construction, customization and dependable performance across its pressure, vacuum and controlled-environment equipment.
            </p>
            <p class="lead-text">
                Our Standard Acrylic Vacuum Glove Box provides customers with excellent transparency, dependable enclosure design, multiple chamber sizes, 6 mm standard acrylic construction with customizable thickness, SS or brass fitting options, convenient side access, dual glove ports, gas and vacuum connections and application-specific customization.
            </p>
            <p class="lead-text mb-0">
                Whether your requirement is for a compact research system or a larger customized controlled-environment chamber, our team can develop a suitable configuration according to your operational requirements.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Worldwide Supply & Delivery</h2>
            <p class="lead-text">
                Burhani Engineering Technology supplies Standard Acrylic Vacuum Glove Boxes to customers worldwide, supporting laboratories, universities, pharmaceutical companies, electronics industries, engineering organizations, research institutions and industrial facilities across international markets.
            </p>
            <p class="lead-text mb-0" style="font-weight: 700; color: var(--bet-navy);">
                Engineering Precision. Delivering Quality, Satisfaction & Trust Worldwide.
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
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue for the BET-GS series.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Standard Acylic Vacuum Glove Box/Standard Vacuum Glove Box  Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Standard Acrylic Vacuum Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>