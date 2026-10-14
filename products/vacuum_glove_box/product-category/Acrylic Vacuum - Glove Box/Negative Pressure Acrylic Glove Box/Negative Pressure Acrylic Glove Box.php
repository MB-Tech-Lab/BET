<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Negative Pressure Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Negative Pressure Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/negative-pressure-acrylic-glove-box.php');
} else {
    $meta_title = "Negative Pressure Acrylic Glove Box | Controlled Ventilation & Exhaust Containment | Burhani Engineering Technology";
    $meta_description = "Negative Pressure Acrylic Glove Box by Burhani Engineering Technology with clear acrylic construction, 2 glove ports, solvent-welded seams, ISO 7 / ISO 8 design options and worldwide delivery for laboratory and industrial applications.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/negative-pressure-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Negative Pressure Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Negative Pressure Acrylic Glove Box</h1>
                    <p class="subtitle">Clear Visibility. Reliable Containment. Trusted Engineering Worldwide.</p>
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
                        Burhani Engineering Technology manufactures high-quality <strong>Negative Pressure Acrylic Glove Boxes</strong> for laboratories, research centres, clean handling environments, industrial testing facilities and controlled process applications worldwide.
                    </p>
                    <p class="lead-text">
                        Designed for safe and controlled handling, this glove box helps create a contained work zone under negative pressure, making it suitable for operations where inward airflow and controlled exhaust are important for process safety, contamination control and operator protection.
                    </p>
                    <p class="lead-text">
                        Built with a clear acrylic chamber, this glove box offers excellent visibility, durable construction and convenient handling access. The system is ideal for applications involving ventilation, exhaust handling, clean observation, sample manipulation and controlled containment processes.
                    </p>
                    <p class="lead-text mb-0">
                        The Negative Pressure Acrylic Glove Box is specially designed for applications where the internal chamber must be maintained under negative pressure. The chamber pressure is kept below the surrounding atmosphere, helping to control the direction of airflow and reduce outward escape of internal contaminants.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Negative Pressure Acrylic Glove Box/Negative Pressure Acrylic Glove Box Main 1.png'); ?>" alt="Negative Pressure Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Negative Pressure Acrylic Glove Box Main 1.png',
                                    'Negative Pressure Acrylic Glove Box  2.png',
                                    'Negative Pressure Acrylic Glove Box  3.png',
                                    'Negative Pressure Acrylic Glove Box  4.png',
                                    'Negative Pressure Acrylic Glove Box  5.png',
                                    'Negative Pressure Acrylic Glove Box  6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Negative Pressure Acrylic Glove Box/';
                                
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
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Negative Pressure Operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Clear Acrylic Construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">Solvent-Welded Seam Construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Two Round Arm Ports</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Transition Chamber / Side Chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Certified ISO Grade Design (ISO 7, ISO 8)</span>
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
                            <td>Negative Pressure Acrylic Glove Box</td>
                        </tr>
                        <tr>
                            <td>Manufacturer</td>
                            <td>Burhani Engineering Technology</td>
                        </tr>
                        <tr>
                            <td>Certified Design Availability</td>
                            <td>ISO 7, ISO 8</td>
                        </tr>
                        <tr>
                            <td>Operating Type</td>
                            <td>Negative Pressure</td>
                        </tr>
                        <tr>
                            <td>Ventilation / Exhaust Suitability</td>
                            <td>Approx. -5" WC (&lt;0.5% vacuum)</td>
                        </tr>
                        <tr>
                            <td>Construction Type</td>
                            <td>Solvent-welded continuous seam construction</td>
                        </tr>
                        <tr>
                            <td>Window Material</td>
                            <td>Acrylic</td>
                        </tr>
                        <tr>
                            <td>Body Material</td>
                            <td>Acrylic</td>
                        </tr>
                        <tr>
                            <td>Chamber Width</td>
                            <td>34"</td>
                        </tr>
                        <tr>
                            <td>Chamber Depth</td>
                            <td>23"</td>
                        </tr>
                        <tr>
                            <td>Chamber Height</td>
                            <td>24.5"</td>
                        </tr>
                        <tr>
                            <td>Number of Glove Ports</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Port Size</td>
                            <td>10" (254 mm) round arm ports</td>
                        </tr>
                        <tr>
                            <td>Design Use</td>
                            <td>Controlled containment, ventilation &amp; exhaust applications</td>
                        </tr>
                        <tr>
                            <td>Customization</td>
                            <td>Available on request</td>
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
                The Negative Pressure Acrylic Glove Box is suitable for a wide range of uses, including laboratory research and controlled experiments, ventilation and exhaust containment applications, clean handling and controlled observation tasks, environmental and industrial testing, sample isolation and manipulation, process containment operations, research laboratories and industrial R&D, and safety-focused controlled handling environments.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology</h2>
            <p class="lead-text">
                At Burhani Engineering Technology, we focus on delivering glove box systems that combine clear visibility, dependable containment, practical usability and customized engineering. Our Negative Pressure Acrylic Glove Boxes are manufactured for customers who need effective process control, cleaner operation and professional-quality equipment.
            </p>
            <p class="lead-text mb-0">
                We serve clients around the world, and our goal is to provide engineering quality, customer satisfaction and trust all over the world through precise manufacturing, customization support and dependable delivery.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Worldwide Manufacturing & Delivery</h2>
            <p class="lead-text">
                Burhani Engineering Technology manufactures and supplies Negative Pressure Acrylic Glove Boxes worldwide. From inquiry and design discussion to production and final dispatch, we support customers globally with glove box systems made for laboratory, research and industrial use.
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
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Negative Pressure Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Negative Pressure Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>