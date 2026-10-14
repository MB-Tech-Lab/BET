<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Low-Oxygen Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Low-Oxygen Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/low-oxygen-acrylic-glove-box.php');
} else {
    $meta_title = "Low-Oxygen Acrylic Glove Box | BET-BX128(A)-N2 Ultra-Low Oxygen System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of BET-BX128(A)-N2 Low-Oxygen Acrylic Glove Boxes in Chennai, India with nitrogen-controlled atmosphere, transparent acrylic construction, humidity and temperature monitoring for oxygen-sensitive laboratory and industrial applications.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/low-oxygen-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Low-Oxygen Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Low-Oxygen Acrylic Glove Box</h1>
                    <p class="subtitle">Lower Oxygen. Greater Control. Better Research. - Model BET-BX128(A)-N2</p>
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
                        The <strong>Low-Oxygen Acrylic Glove Box</strong> (Model BET-BX128(A)-N2) manufactured by Burhani Engineering Technology is a precision-engineered controlled-atmosphere enclosure designed for laboratory, research, electronics, pharmaceutical, material science and industrial applications where exposure to atmospheric oxygen and moisture must be minimized.
                    </p>
                    <p class="lead-text">
                        Designed around a highly transparent acrylic working chamber and a nitrogen-controlled atmosphere, the system provides operators with a clearly visible, enclosed workspace for safely handling oxygen-sensitive and environment-sensitive materials.
                    </p>
                    <p class="lead-text">
                        The BET-BX128(A)-N2 Ultra Low Oxygen Glove Box System is suitable for processes requiring a stable low-oxygen working environment and can be configured for applications targeting ultra-low oxygen conditions below 1 ppm, subject to the complete operating configuration, gas quality, sealing, purification and process conditions.
                    </p>
                    <p class="lead-text mb-0">
                        The chamber combines transparent construction, ergonomic glove access, environmental monitoring and nitrogen atmosphere management to provide a practical workstation for demanding laboratory procedures.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Low-Oxygen Acrylic Glove Box/Low-Oxygen Acrylic Glove Box Main 1.png'); ?>" alt="Low-Oxygen Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Low-Oxygen Acrylic Glove Box Main 1.png',
                                    'Low-Oxygen Acrylic Glove Box 2.png',
                                    'Low-Oxygen Acrylic Glove Box 3.png',
                                    'Low-Oxygen Acrylic Glove Box 4.png',
                                    'Low-Oxygen Acrylic Glove Box 5.png',
                                    'Low-Oxygen Acrylic Glove Box 6.png',
                                    'Low-Oxygen Acrylic Glove Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Low-Oxygen Acrylic Glove Box/';
                                
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
                    <span class="feature-text">Nitrogen-Controlled Atmosphere</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-thermometer-half feature-icon"></i>
                    <span class="feature-text">Environmental Monitoring and Control</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Ergonomic Glove Port Arrangement</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Access and Storage Openings</span>
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
                            <th>Parameter</th>
                            <th>Specification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product Name</td>
                            <td>Low-Oxygen Acrylic Glove Box</td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td>BET-BX128(A)-N2</td>
                        </tr>
                        <tr>
                            <td>Atmosphere</td>
                            <td>Nitrogen Controlled Atmosphere</td>
                        </tr>
                        <tr>
                            <td>Target Application</td>
                            <td>Ultra-Low Oxygen Controlled Handling</td>
                        </tr>
                        <tr>
                            <td>External Dimensions</td>
                            <td>700 W × 600 D × 500 H mm</td>
                        </tr>
                        <tr>
                            <td>Internal Dimensions</td>
                            <td>680 W × 470 D × 480 H mm</td>
                        </tr>
                        <tr>
                            <td>Box Material</td>
                            <td>Transparent Acrylic</td>
                        </tr>
                        <tr>
                            <td>Door Opening</td>
                            <td>350 W × 350 H mm</td>
                        </tr>
                        <tr>
                            <td>Storage Opening</td>
                            <td>300 W × 300 H mm</td>
                        </tr>
                        <tr>
                            <td>Glove Sleeve / Port Size</td>
                            <td>Ø150 mm</td>
                        </tr>
                        <tr>
                            <td>Humidity Control Range</td>
                            <td>1%–60% RH</td>
                        </tr>
                        <tr>
                            <td>Humidity Display</td>
                            <td>0%–99.9% RH</td>
                        </tr>
                        <tr>
                            <td>Temperature Display</td>
                            <td>1°C–60°C</td>
                        </tr>
                        <tr>
                            <td>Electrical Supply</td>
                            <td>100–240 VAC, 50/60 Hz</td>
                        </tr>
                        <tr>
                            <td>Manufacturer</td>
                            <td>Burhani Engineering Technology</td>
                        </tr>
                        <tr>
                            <td>Manufacturing Location</td>
                            <td>Chennai, Tamil Nadu, India</td>
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
                The Ultra Low Oxygen Acrylic Glove Box can be used for a broad range of laboratory and industrial applications where atmospheric exposure needs to be controlled. Typical applications include battery research, material science, semiconductor and electronics work, moisture-sensitive sample preparation, oxygen-sensitive chemical handling, pharmaceutical R&D, university research, precision component assembly, catalyst research, powder handling and advanced material development.
            </p>
            <p class="lead-text text-center mb-0">
                For electronics and semiconductor-related applications, the glove box provides an isolated area for components that can be affected by oxidation or moisture. In material research, it provides a stable environment for preparing or examining sensitive compounds. In battery development, it can support controlled handling of materials that require reduced exposure to normal laboratory air.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology?</h2>
            <p class="lead-text">
                The BET-BX128(A)-N2 combines a transparent acrylic workspace, nitrogen-controlled atmosphere, humidity monitoring, temperature monitoring, sealed glove access and compact laboratory design in one practical system.
            </p>
            <p class="lead-text mb-0">
                Burhani Engineering Technology focuses on developing equipment that balances visibility, controlled operation, durability and customization. Our objective is to provide glove box solutions that can be adapted to research, laboratory and industrial applications while maintaining professional manufacturing standards.
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
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue for the BET-BX128(A)-N2.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Low-Oxygen Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Low-Oxygen Acrylic Glove Box? Contact us for pricing, technical specifications, and customization options tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>