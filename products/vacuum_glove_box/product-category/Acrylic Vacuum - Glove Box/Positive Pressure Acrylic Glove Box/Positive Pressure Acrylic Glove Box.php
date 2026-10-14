<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Positive Pressure Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Positive Pressure Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/positive-pressure-acrylic-glove-box.php');
} else {
    $meta_title = "Positive Pressure Acrylic Glove Box | Clear Acrylic Controlled Handling Chamber | Burhani Engineering Technology";
    $meta_description = "Burhani Engineering Technology offers Positive Pressure Acrylic Glove Boxes with clear acrylic panels, dual glove ports, sloped viewing panel, customizable sizes and worldwide delivery for laboratory and industrial applications.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/positive-pressure-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Positive Pressure Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Positive Pressure Acrylic Glove Box</h1>
                    <p class="subtitle">Clear Visibility. Controlled Protection. Trusted Engineering Worldwide.</p>
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
                        Burhani Engineering Technology manufactures high-quality <strong>Positive Pressure Acrylic Glove Boxes</strong> for laboratories, research centres, universities, pharmaceutical applications, electronics handling, quality-control environments and industrial process work worldwide.
                    </p>
                    <p class="lead-text">
                        This system is designed to create a clean, enclosed and controlled handling environment where the internal chamber is maintained at positive pressure, helping reduce the entry of dust, airborne particles and external contaminants during sensitive operations.
                    </p>
                    <p class="lead-text">
                        Built with a high-transparency clear acrylic chamber, this glove box offers excellent internal visibility, user convenience and reliable containment for precision work. The sloped front viewing section improves operator ergonomics, while the dual glove-port arrangement enables safe and comfortable material handling inside the chamber.
                    </p>
                    <p class="lead-text mb-0">
                        The Positive Pressure Acrylic Glove Box is designed for applications where the internal working environment must remain cleaner than the surrounding room atmosphere. By maintaining positive internal pressure, the glove box helps minimize contamination ingress when handling sensitive products, laboratory materials and process samples.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Positive Pressure Acrylic Glove Box/Positive Pressure Acrylic Glove Box Main 1.png'); ?>" alt="Positive Pressure Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Positive Pressure Acrylic Glove Box Main 1.png',
                                    'Positive Pressure Acrylic Glove Box 2.png',
                                    'Positive Pressure Acrylic Glove Box 3.png',
                                    'Positive Pressure Acrylic Glove Box 4.png',
                                    'Positive Pressure Acrylic Glove Box 5.png',
                                    'Positive Pressure Acrylic Glove Box 6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Positive Pressure Acrylic Glove Box/';
                                
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
                    <span class="feature-text">High-Transparency Clear Acrylic Chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Positive Pressure Operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-display feature-icon"></i>
                    <span class="feature-text">Sloped Acrylic Viewing Panel</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Glove Ports</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Side Access Door</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Gas Inlet / Outlet Provision</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">Customizable Acrylic Thickness</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gear feature-icon"></i>
                    <span class="feature-text">Optional SS or Brass Fittings</span>
                </div>
            </div>
        </div>
    </section>

    <!-- STANDARD MODELS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Standard Models & Dimensions</h2>
            
            <div class="table-responsive">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Model No.</th>
                            <th>Product</th>
                            <th>Dimensions (L × W × H) mm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BET-LAGB-A10</td>
                            <td>Acrylic Glove Box</td>
                            <td>300 × 400 × 500 mm</td>
                        </tr>
                        <tr>
                            <td>BET-LAGB-A11</td>
                            <td>Acrylic Glove Box</td>
                            <td>700 × 450 × 550 mm</td>
                        </tr>
                        <tr>
                            <td>BET-LAGB-A12</td>
                            <td>Acrylic Glove Box</td>
                            <td>800 × 550 × 600 mm</td>
                        </tr>
                        <tr>
                            <td>BET-LAGB-A13</td>
                            <td>Acrylic Glove Box</td>
                            <td>900 × 500 × 500 mm</td>
                        </tr>
                        <tr>
                            <td>BET-LAGB-A14</td>
                            <td>Acrylic Glove Box</td>
                            <td>900 × 600 × 700 mm</td>
                        </tr>
                        <tr>
                            <td>BET-LAGB-A15</td>
                            <td>Acrylic Glove Box</td>
                            <td>1000 × 750 × 700 mm</td>
                        </tr>
                        <tr>
                            <td>BET-LAGB-A16</td>
                            <td>Acrylic Glove Box</td>
                            <td>1200 × 800 × 700 mm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="lead-text mt-3">Custom sizes are also available on request.</p>
        </div>
    </section>

    <!-- TECHNICAL HIGHLIGHTS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Technical Highlights</h2>
            
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
                            <td>Product Type</td>
                            <td>Positive Pressure Acrylic Glove Box</td>
                        </tr>
                        <tr>
                            <td>Manufacturer</td>
                            <td>Burhani Engineering Technology</td>
                        </tr>
                        <tr>
                            <td>Chamber Material</td>
                            <td>High-Transparency Clear Acrylic Panels</td>
                        </tr>
                        <tr>
                            <td>Viewing Panel</td>
                            <td>Sloped Acrylic Viewing Panel</td>
                        </tr>
                        <tr>
                            <td>Operation Type</td>
                            <td>Positive Pressure Handling System</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Dual Glove Ports</td>
                        </tr>
                        <tr>
                            <td>Access Door</td>
                            <td>Side Access Door</td>
                        </tr>
                        <tr>
                            <td>Gas Connection</td>
                            <td>Inlet / Outlet Provision Available</td>
                        </tr>
                        <tr>
                            <td>Fittings Option</td>
                            <td>SS / Brass as per customer preference</td>
                        </tr>
                        <tr>
                            <td>Acrylic Thickness</td>
                            <td>Customizable according to model size and application</td>
                        </tr>
                        <tr>
                            <td>Application Type</td>
                            <td>Controlled atmosphere handling, cleaner sample management, process isolation and laboratory use</td>
                        </tr>
                        <tr>
                            <td>Availability</td>
                            <td>Standard Models + Custom Manufacturing</td>
                        </tr>
                        <tr>
                            <td>Supply Scope</td>
                            <td>Worldwide manufacturing and delivery</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Positive Pressure Acrylic Glove Box is suitable for a wide range of industries and laboratory applications, including clean sample handling, laboratory research, inspection and quality control, process isolation, educational and demonstration use, pharmaceutical and biotech handling, electronics and precision-component handling, powder and material handling, controlled environment operations, and industrial testing and R&D applications.
            </p>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Custom Manufacturing by Burhani Engineering Technology</h2>
            <p class="lead-text">
                At Burhani Engineering Technology, we understand that every application has different handling, space and performance requirements. That is why we manufacture custom Positive Pressure Acrylic Glove Boxes with flexible configuration options. Customers can request custom chamber size, custom acrylic thickness, different glove-port size or arrangement, SS or brass fittings, additional inlet / outlet points, custom access-door dimensions, and application-specific modifications.
            </p>
            <p class="lead-text mb-0">
                This makes the system suitable not only for standard laboratory use, but also for specialized industrial and research applications.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Worldwide Manufacturing & Delivery</h2>
            <p class="lead-text">
                Burhani Engineering Technology manufactures and supplies Positive Pressure Acrylic Glove Boxes worldwide. We are committed to delivering engineering quality, customer satisfaction and trust all around the world. From compact bench-top systems to larger custom acrylic glove boxes, our solutions are designed to support customers globally with reliable manufacturing, careful finishing and application-focused design.
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
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Positive Pressure Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Positive Pressure Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>