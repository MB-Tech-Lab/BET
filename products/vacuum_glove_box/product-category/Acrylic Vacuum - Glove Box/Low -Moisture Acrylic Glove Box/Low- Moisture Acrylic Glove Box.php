<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Low-Moisture Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Low-Moisture Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/low-moisture-acrylic-glove-box.php');
} else {
    $meta_title = "Low-Moisture Acrylic Glove Box | 250 L Controlled Low-Humidity Workstation | Burhani Engineering Technology";
    $meta_description = "Manufacturer of 250 L Low-Moisture Acrylic Glove Boxes in Chennai, India with models for ≤5% RH, adjustable 1–50% RH, nitrogen-controlled operation, transparent acrylic construction, dual glove ports, and custom configurations.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/low-moisture-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Low-Moisture Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Low-Moisture Acrylic Glove Box</h1>
                    <p class="subtitle">Lower Moisture. Greater Control. Better Results. - 250 Liter Capacity</p>
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
                        The <strong>Low-Moisture Acrylic Glove Box</strong> manufactured by Burhani Engineering Technology is a precision-designed controlled-environment workstation developed for applications where moisture-sensitive materials, components, samples, or processes must be handled inside a protected low-humidity chamber.
                    </p>
                    <p class="lead-text">
                        Built using a high-transparency acrylic enclosure and supported by humidity-control configurations, the system provides a clean, visible, and controlled working space for laboratories, research facilities, pharmaceutical environments, electronics industries, material science applications, and industrial R&D operations.
                    </p>
                    <p class="lead-text">
                        The glove box is designed to reduce exposure of sensitive materials to normal atmospheric humidity while allowing operators to perform internal handling through integrated glove ports. Its transparent acrylic construction provides excellent visibility of the entire workspace.
                    </p>
                    <p class="lead-text mb-0">
                        With an approximate 250-liter chamber capacity, the Low-Moisture Acrylic Glove Box offers a practical combination of usable internal space, compact laboratory installation, and environmental control.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Low -Moisture Acrylic Glove Box/Low -Moisture Acrylic Glove Box Main 1.png'); ?>" alt="Low-Moisture Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Low -Moisture Acrylic Glove Box Main 1.png',
                                    'Low -Moisture Acrylic Glove Box 2.png',
                                    'Low -Moisture Acrylic Glove Box 3.png',
                                    'Low -Moisture Acrylic Glove Box 4.png',
                                    'Low -Moisture Acrylic Glove Box 5.png',
                                    'Low -Moisture Acrylic Glove Box 6.png',
                                    'Low -Moisture Acrylic Glove Box 7.png',
                                    'Low -Moisture Acrylic Glove Box 8.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Low -Moisture Acrylic Glove Box/';
                                
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
                    <i class="bi bi-box feature-icon"></i>
                    <span class="feature-text">250-Liter Controlled Workspace</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Multiple Model Configurations</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-cpu feature-icon"></i>
                    <span class="feature-text">External Humidity & Moisture Controller</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Glove Port Operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Side Access Doors</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MODEL CONFIGURATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Low-Humidity Control Options</h2>
            
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div style="background: white; border: 1px solid var(--bet-border); border-radius: 8px; padding: 25px;">
                        <h3 style="color: var(--bet-navy); font-weight: 700; margin-bottom: 15px;">BET-GB-250X</h3>
                        <p class="lead-text mb-0">
                            Designed for applications requiring ultra-low humidity conditions down to ≤5% RH. This model is suitable for highly moisture-sensitive processes where very dry operating conditions are required.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div style="background: white; border: 1px solid var(--bet-border); border-radius: 8px; padding: 25px;">
                        <h3 style="color: var(--bet-navy); font-weight: 700; margin-bottom: 15px;">BET-GB-250A</h3>
                        <p class="lead-text mb-0">
                            Provides an adjustable humidity range from approximately 1% to 50% RH, allowing users to select operating conditions according to the sensitivity of the material or process. Suitable for applications requiring flexible humidity control.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div style="background: white; border: 1px solid var(--bet-border); border-radius: 8px; padding: 25px;">
                        <h3 style="color: var(--bet-navy); font-weight: 700; margin-bottom: 15px;">BET-GB-250Q</h3>
                        <p class="lead-text mb-0">
                            Uses Nitrogen gas (N₂) for environmental control and requires a suitable nitrogen supply. Nitrogen purging helps reduce moisture inside the chamber by replacing ambient air with dry process gas.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div style="background: white; border: 1px solid var(--bet-border); border-radius: 8px; padding: 25px;">
                        <h3 style="color: var(--bet-navy); font-weight: 700; margin-bottom: 15px;">BET-GB-250</h3>
                        <p class="lead-text mb-0">
                            A base configuration supplied without active humidity-control functionality, suitable for applications where the acrylic chamber and enclosed handling environment are required without integrated moisture regulation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SPECIFICATIONS -->
    <section class="section-premium bg-light">
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
                            <td>Chamber Capacity</td>
                            <td>Approximately 250 liters</td>
                        </tr>
                        <tr>
                            <td>Outside Dimensions</td>
                            <td>Width: 900 mm, Depth: 600 mm, Height: 630 mm</td>
                        </tr>
                        <tr>
                            <td>Internal Dimensions</td>
                            <td>Width: 880 mm, Depth: 580 mm, Height: 510 mm</td>
                        </tr>
                        <tr>
                            <td>Chamber Material</td>
                            <td>High-Transparency Acrylic</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Dual glove ports</td>
                        </tr>
                        <tr>
                            <td>Access</td>
                            <td>Side access doors</td>
                        </tr>
                        <tr>
                            <td>Humidity Control Range</td>
                            <td>Model dependent (≤5% RH, 1-50% RH, or nitrogen-controlled)</td>
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
            
            <div class="row gy-3">
                <div class="col-lg-6">
                    <div style="background: white; padding: 20px; border-radius: 8px; border-left: 4px solid var(--bet-blue);">
                        <strong style="color: var(--bet-navy);">Semiconductor Handling</strong>
                        <p class="mb-0 mt-2">Sensitive electronic and semiconductor components that can be affected by moisture can be handled inside a controlled dry environment.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background: white; padding: 20px; border-radius: 8px; border-left: 4px solid var(--bet-blue);">
                        <strong style="color: var(--bet-navy);">Electronics Research</strong>
                        <p class="mb-0 mt-2">Useful for precision electronic assembly, component inspection, and moisture-sensitive device preparation.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background: white; padding: 20px; border-radius: 8px; border-left: 4px solid var(--bet-blue);">
                        <strong style="color: var(--bet-navy);">Pharmaceutical & Life Sciences</strong>
                        <p class="mb-0 mt-2">Suitable for sample handling, controlled preparation, laboratory R&D, and moisture-conscious processing.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background: white; padding: 20px; border-radius: 8px; border-left: 4px solid var(--bet-blue);">
                        <strong style="color: var(--bet-navy);">Material Science</strong>
                        <p class="mb-0 mt-2">Supports experiments involving powders, compounds, samples, or materials whose properties may change in humid conditions.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background: white; padding: 20px; border-radius: 8px; border-left: 4px solid var(--bet-blue);">
                        <strong style="color: var(--bet-navy);">Battery and Energy Research</strong>
                        <p class="mb-0 mt-2">Can be used for selected battery-related preparation and material handling applications where moisture exposure needs to be reduced.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background: white; padding: 20px; border-radius: 8px; border-left: 4px solid var(--bet-blue);">
                        <strong style="color: var(--bet-navy);">Research Laboratories</strong>
                        <p class="mb-0 mt-2">Ideal for universities, R&D centres, testing laboratories, and technical institutions requiring an enclosed low-humidity working chamber.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Custom Low-Moisture Glove Box Manufacturer in India</h2>
            <p class="lead-text">
                Burhani Engineering Technology manufactures custom acrylic glove box systems in Chennai, Tamil Nadu, India and can provide configurations based on customer application requirements. Customization options may include:
            </p>
            <p class="lead-text mb-0">
                Custom chamber dimensions, Different glove port arrangements, Modified access doors, Different humidity-control ranges, Nitrogen purging configurations, Gas inlet and outlet arrangements, Monitoring instrumentation, Additional fittings and accessories, Application-specific internal layouts.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Worldwide Supply & Custom Engineering</h2>
            <p class="lead-text">
                Burhani Engineering Technology supports customers in India and overseas with application-based glove box solutions. From technical requirement evaluation and model selection through customization, manufacturing, inspection, packing, and dispatch, the focus remains on providing durable, practical, and professional equipment for controlled-environment applications.
            </p>
            <p class="lead-text mb-0" style="font-weight: 700; color: var(--bet-navy);">
                We Deliver Engineering Quality, Reliability & Trust Worldwide.
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
                        Get detailed technical specifications, dimensions, and customization options in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Low -Moisture Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Low-Moisture Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>