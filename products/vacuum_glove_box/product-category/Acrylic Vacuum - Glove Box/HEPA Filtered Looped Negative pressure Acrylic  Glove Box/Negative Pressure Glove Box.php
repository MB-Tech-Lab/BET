<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Negative Pressure Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Negative Pressure Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/hepa-filtered-looped-negative-pressure-glove-box.php');
} else {
    $meta_title = "Negative Pressure Glove Box | HEPA Filtration & Controlled Containment System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Negative Pressure Glove Boxes with single HEPA, double HEPA and closed-loop dual HEPA filtration, pressure monitoring, customizable SS 304 or brass fittings and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/hepa-filtered-looped-negative-pressure-glove-box.php');
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

/* Model Cards */
.model-card {
    background: white;
    border: 1px solid var(--bet-border);
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.model-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border-color: var(--bet-cyan);
}
.model-badge {
    display: inline-block;
    background: var(--bet-cyan);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 15px;
}
.model-tagline {
    color: var(--bet-blue);
    font-weight: 600;
    font-style: italic;
    margin-top: 15px;
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

/* Applications Cards */
.app-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 40px;
}
.app-card {
    background: white;
    border-radius: 8px;
    padding: 20px;
    border-left: 4px solid var(--bet-blue);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    font-weight: 500;
    color: var(--bet-navy);
    display: flex;
    align-items: center;
    gap: 15px;
}
.app-card i {
    color: var(--bet-cyan);
    font-size: 1.2rem;
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
    width: 25%;
}
.tech-table td {
    color: var(--bet-text);
}
.tech-table tr:last-child th, .tech-table tr:last-child td {
    border-bottom: none;
}

/* Customization Box */
.custom-box {
    background: #fff;
    border: 1px solid var(--bet-border);
    border-radius: 8px;
    padding: 30px;
}
.custom-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.custom-list li {
    padding: 10px 0;
    border-bottom: 1px dashed var(--bet-gray-mid);
    display: flex;
    align-items: center;
    gap: 10px;
}
.custom-list li:last-child {
    border-bottom: none;
}
.custom-list li i {
    color: var(--bet-cyan);
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
                    <li class="breadcrumb-item active" aria-current="page">Negative Pressure Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Negative Pressure Glove Box</h1>
                    <p class="subtitle">HEPA Filtration & Controlled Containment System - Single, Double & Closed-Loop HEPA Filtration</p>
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
                        Burhani Engineering Technology designs and manufactures high-performance <strong>Negative Pressure Glove Box systems</strong> for laboratories, research institutions, pharmaceutical environments, chemical processing, powder handling, material science, industrial R&D and other applications requiring controlled containment and filtered airflow.
                    </p>
                    <p class="lead-text">
                        Our Negative Pressure Glove Box is engineered to maintain the internal chamber at a pressure below the surrounding environment, helping reduce the possibility of contaminants, powders or process materials escaping from the enclosure during operation. Combined with HEPA-filtered airflow, pressure monitoring, secure glove ports and controlled inlet/exhaust arrangements, the system provides a practical solution for applications where operator protection, contamination control and process isolation are important.
                    </p>
                    <p class="lead-text mb-0">
                        Burhani Engineering Technology offers three primary configurations: <strong>Single HEPA Filtration, Double HEPA Filtration and Closed-Loop Double HEPA Filtration</strong>, allowing customers to select the system best suited to their process and containment requirements. Each glove box can also be customized according to chamber dimensions, glove-port quantity, filtration arrangement, fittings, access chamber, instrumentation and process requirements.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/HEPA Filtered Looped Negative pressure Acrylic  Glove Box/Negative Pressure Glove Box 1.jpg'); ?>" alt="Negative Pressure Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Negative Pressure Glove Box 1.jpg',
                                    'Negative Pressure Glove Box 2.jpg',
                                    'Negative Pressure Glove Box 3.jpg',
                                    'Negative Pressure Glove Box 4.jpg',
                                    'HEPA Filtered Looped Negative pressure Acrylic Glove Box 5.jpg',
                                    'Negative Pressure Glove Box 6.jpg',
                                    'Negative Pressure Glove Box 7.jpg',
                                    'Negative Pressure Glove Box 8.jpg',
                                    'Negative Pressure Glove Box 9.jpg',
                                    'Negative Pressure Glove Box 10.jpg',
                                    'HEPA Filtered Looped Negative pressure Acrylic Glove Box 11.jpg',
                                    'HEPA Filtered Looped Negative pressure Acrylic Glove Box 12.jpg',
                                    'HEPA Filtered Looped Negative pressure Acrylic Glove Box 13.png',
                                    'HEPA Filtered Looped Negative pressure Acrylic Glove Box 14.jpg',
                                    'HEPA Filtered Looped Negative pressure Acrylic Glove Box 15.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/HEPA Filtered Looped Negative pressure Acrylic  Glove Box/';
                                
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

    <!-- MODEL VARIANTS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Model Configurations</h2>
            
            <!-- BET-NGB-S -->
            <div class="model-card">
                <span class="model-badge">BET-NGB-S</span>
                <h3 style="color: var(--bet-navy); font-weight: 700; margin-bottom: 15px;">Single HEPA Filtration Negative Pressure Glove Box</h3>
                <p class="lead-text">
                    The BET-NGB-S Single HEPA Filtration Negative Pressure Glove Box is designed for applications requiring controlled negative pressure combined with HEPA-filtered airflow. Depending on the required configuration, the system can provide HEPA-filtered inlet air or HEPA-filtered exhaust air, helping control contamination entering or leaving the chamber.
                </p>
                <p class="lead-text mb-0">
                    This configuration provides a practical and efficient containment solution for laboratory and industrial processes requiring a controlled negative-pressure working environment without the complexity of a complete recirculation system.
                </p>
                <p class="model-tagline">Safe. Ergonomic. Efficient. Engineered for Maximum Protection.</p>
            </div>

            <!-- BET-NGB-D -->
            <div class="model-card">
                <span class="model-badge">BET-NGB-D</span>
                <h3 style="color: var(--bet-navy); font-weight: 700; margin-bottom: 15px;">Double HEPA Filtration Negative Pressure Glove Box</h3>
                <p class="lead-text">
                    The BET-NGB-D Double HEPA Filtration Glove Box provides an enhanced level of filtration by incorporating HEPA filtration for both incoming and outgoing airflow. HEPA-filtered air can be introduced into the chamber while exhaust air is also passed through a separate HEPA filtration arrangement.
                </p>
                <p class="lead-text mb-0">
                    This dual-filtration configuration provides improved contamination control for applications requiring greater isolation between the internal process and surrounding environment. The BET-NGB-D is particularly suitable for research, powder processing and sensitive applications where filtration of both inlet and exhaust air is preferred.
                </p>
                <p class="model-tagline">Dual Protection. Clean Air In & Out. Superior Filtration for Critical Applications.</p>
            </div>

            <!-- BET-NGB-CLC -->
            <div class="model-card">
                <span class="model-badge">BET-NGB-CLC</span>
                <h3 style="color: var(--bet-navy); font-weight: 700; margin-bottom: 15px;">Closed-Loop Double HEPA Filtration Glove Box</h3>
                <p class="lead-text">
                    For applications requiring a more advanced containment arrangement, Burhani Engineering Technology offers the BET-NGB-CLC Closed-Loop Double HEPA Filtration Negative Pressure Glove Box. The system is designed to continuously recirculate the internal atmosphere through two 8-inch round HEPA filters, creating a closed-loop filtration arrangement.
                </p>
                <p class="lead-text mb-0">
                    Instead of relying only on a single-pass inlet and exhaust configuration, the internal atmosphere can be continuously circulated and filtered. This configuration provides enhanced filtration and contamination control for demanding research and industrial applications where continuous internal air circulation is beneficial.
                </p>
                <p class="model-tagline">Continuous Protection. Maximum Safety. Closed-Loop Filtration for High-Security Applications.</p>
            </div>
        </div>
    </section>

    <!-- MODEL COMPARISON TABLE -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Model Comparison & Technical Configuration</h2>
            
            <div class="table-responsive">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th>BET-NGB-S</th>
                            <th>BET-NGB-D</th>
                            <th>BET-NGB-CLC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>System Type</td>
                            <td>Single HEPA</td>
                            <td>Double HEPA</td>
                            <td>Closed-Loop Double HEPA</td>
                        </tr>
                        <tr>
                            <td>Negative Pressure Operation</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>HEPA Filtered Inlet</td>
                            <td>Optional / As Configured</td>
                            <td>Yes</td>
                            <td>Closed-Loop System</td>
                        </tr>
                        <tr>
                            <td>HEPA Filtered Exhaust</td>
                            <td>Optional / As Configured</td>
                            <td>Yes</td>
                            <td>Closed-Loop System</td>
                        </tr>
                        <tr>
                            <td>Number of HEPA Filters</td>
                            <td>Single System</td>
                            <td>Two Filters</td>
                            <td>Two 8" Round Filters</td>
                        </tr>
                        <tr>
                            <td>Internal Recirculation</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Continuous Filtration</td>
                            <td>Application Dependent</td>
                            <td>Dual Pass</td>
                            <td>Continuous Closed Loop</td>
                        </tr>
                        <tr>
                            <td>Pressure Monitoring</td>
                            <td>Available</td>
                            <td>Available</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>Transparent Chamber</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Ergonomic Sealed Ports</td>
                            <td>Ergonomic Sealed Ports</td>
                            <td>Ergonomic Sealed Ports</td>
                        </tr>
                        <tr>
                            <td>Customization</td>
                            <td>Available</td>
                            <td>Available</td>
                            <td>Available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="lead-text mt-4 mb-0" style="font-style: italic;">
                Filtration arrangement, chamber dimensions, airflow capacity, negative-pressure range and instrumentation can be engineered according to customer requirements.
            </p>
        </div>
    </section>

    <!-- KEY FEATURES -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Key Features</h2>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Controlled Negative Pressure Operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-fan feature-icon"></i>
                    <span class="feature-text">HEPA Filtration System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gauge feature-icon"></i>
                    <span class="feature-text">Pressure Monitoring System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Transparent Chamber for Clear Visibility</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Ergonomic Glove Ports with Secure Sealing</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">SS 304 or Brass Fittings Options</span>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                Our Negative Pressure Glove Box systems are suitable for a wide range of applications. The Negative Pressure Glove Box is particularly useful when the primary objective is to help contain materials inside the chamber while maintaining filtered airflow and controlled operating conditions.
            </p>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical research</div>
                <div class="app-card"><i class="bi bi-box"></i> Powder handling</div>
                <div class="app-card"><i class="bi bi-flask"></i> Chemical research</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material science</div>
                <div class="app-card"><i class="bi bi-collection"></i> Sample preparation</div>
                <div class="app-card"><i class="bi bi-flask"></i> Laboratory R&D</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics</div>
                <div class="app-card"><i class="bi bi-battery-charging"></i> Battery research</div>
                <div class="app-card"><i class="bi bi-shield"></i> Contamination-sensitive processing</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Industrial quality control</div>
                <div class="app-card"><i class="bi bi-layers"></i> Composite materials</div>
                <div class="app-card"><i class="bi bi-hammer"></i> Metallurgy</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> University research</div>
                <div class="app-card"><i class="bi bi-gear"></i> Specialized controlled-environment applications</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Custom Negative Pressure Glove Box Solutions</h2>
            <p class="lead-text">
                Every application has different requirements. Burhani Engineering Technology can therefore develop Customized Negative Pressure Glove Boxes according to chamber size, number of glove stations, filtration level, airflow arrangement, access requirements and instrumentation.
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-shield-check"></i> Single or Double HEPA Filtration</li>
                    <li><i class="bi bi-arrow-repeat"></i> Closed-Loop HEPA Recirculation</li>
                    <li><i class="bi bi-rulers"></i> Custom Chamber Dimensions</li>
                    <li><i class="bi bi-circle"></i> Multiple Glove Ports</li>
                    <li><i class="bi bi-gauge"></i> Pressure Monitoring</li>
                    <li><i class="bi bi-fan"></i> Vacuum Monitoring</li>
                    <li><i class="bi bi-tools"></i> SS 304 or Brass Fittings</li>
                    <li><i class="bi bi-box-seam"></i> Custom Access Chamber</li>
                    <li><i class="bi bi-sliders"></i> Integrated Controls</li>
                    <li><i class="bi bi-arrow-left-right"></i> Process Connections</li>
                    <li><i class="bi bi-cpu"></i> Custom Instrumentation</li>
                </ul>
            </div>
            
            <p class="lead-text mt-4 mb-0">
                From compact laboratory systems to larger customized containment installations, our engineering team can develop a configuration around the customer's actual process requirements.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Worldwide Supply & Delivery</h2>
            <p class="lead-text">
                Burhani Engineering Technology supplies Negative Pressure Glove Box systems to customers worldwide, supporting laboratories, universities, pharmaceutical organizations, research institutes, engineering companies and industrial facilities requiring dependable containment and filtration solutions.
            </p>
            <p class="lead-text mb-0">
                From initial technical discussions and system configuration through manufacturing, assembly, inspection, packing and dispatch, our focus remains on delivering dependable engineered equipment and long-term customer satisfaction. Whether your requirement is for a Single HEPA Negative Pressure Glove Box, Double HEPA Glove Box or Closed-Loop HEPA Filtration Glove Box, Burhani Engineering Technology can provide a customized solution according to your process.
            </p>
            <p class="lead-text mt-4 mb-0" style="font-weight: 700; color: var(--bet-navy);">
                Engineering Precision. Delivering Quality, Satisfaction & Trust Worldwide.
            </p>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="section-premium bg-light" id="contact">
        <div class="container">
            <div class="bottom-cta">
                <h2>Request a Quote</h2>
                <p>Interested in a Negative Pressure Glove Box? Contact us for engineering consultation, filtration options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>

