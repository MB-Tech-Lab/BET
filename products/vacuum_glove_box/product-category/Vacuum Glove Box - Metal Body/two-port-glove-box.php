<?php
include_once(__DIR__ . '/../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Stainless Steel Vacuum Glove Box 2 Port in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Stainless Steel Vacuum Glove Box 2 Port available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = product_category_url('vacuum_glove_box', 'Vacuum Glove Box - Metal Body/two-port-glove-box');
} else {
    $meta_title = "Stainless Steel Vacuum Glove Box 2 Port | Controlled Environments | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Stainless Steel Vacuum Glove Box 2 Port providing reliable controlled-environment handling for laboratory and industrial applications.";
    $canonical_url = product_category_url('vacuum_glove_box', 'Vacuum Glove Box - Metal Body/two-port-glove-box');
}
include_once(__DIR__ . '/../../../../includes/header.php');
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
    /* Hide scrollbar for cleaner look but keep functionality */
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
    /* Force single row */
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

/* Split Layout Section */
.split-layout {
    display: flex;
    align-items: center;
    gap: 40px;
}
.split-content {
    flex: 1;
}
.split-visual {
    flex: 1;
    background: linear-gradient(135deg, var(--bet-navy), var(--bet-blue));
    border-radius: 12px;
    padding: 40px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(0, 71, 171, 0.15);
}
.split-visual h1, .split-visual h2, .split-visual h3, .split-visual h4, .split-visual h5, .split-visual h6, .split-visual p, .split-visual span {
    color: #ffffff !important;
}
.split-visual .icon-box {
    font-size: 3rem;
    color: var(--bet-cyan);
    margin-bottom: 20px;
}
@media (max-width: 991px) {
    .split-layout {
        flex-direction: column;
    }
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

/* Process Steps */
.process-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 50px;
    position: relative;
}
/* Line connecting steps on desktop */
.process-container::before {
    content: '';
    position: absolute;
    top: 30px;
    left: 40px;
    right: 40px;
    height: 2px;
    background: var(--bet-border);
    z-index: 1;
}
.process-step {
    flex: 1;
    min-width: 150px;
    text-align: center;
    position: relative;
    z-index: 2;
    padding: 0 15px;
    margin-bottom: 30px;
}
.step-number {
    width: 60px;
    height: 60px;
    background: white;
    border: 2px solid var(--bet-cyan);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--bet-navy);
    margin: 0 auto 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}
.step-title {
    font-weight: 600;
    color: var(--bet-navy);
    font-size: 1rem;
}
@media (max-width: 768px) {
    .process-container {
        flex-direction: column;
        align-items: flex-start;
        padding-left: 30px;
    }
    .process-container::before {
        left: 29px;
        top: 0;
        bottom: 0;
        width: 2px;
        height: 100%;
    }
    .process-step {
        display: flex;
        align-items: center;
        text-align: left;
        width: 100%;
        margin-bottom: 25px;
    }
    .step-number {
        margin: 0 20px 0 0;
        width: 50px;
        height: 50px;
        flex-shrink: 0;
    }
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
    width: 35%;
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

/* Compatibility Note */
.compatibility-note {
    background: rgba(0, 163, 224, 0.05);
    border-left: 5px solid var(--bet-cyan);
    padding: 25px;
    border-radius: 0 8px 8px 0;
    margin-top: 30px;
}
.compatibility-note h4 {
    color: var(--bet-navy);
    margin-bottom: 10px;
    font-size: 1.2rem;
    font-weight: 600;
}
.compatibility-note p {
    margin-bottom: 0;
    color: var(--bet-text);
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

/* Related Products */
.related-card {
    border: 1px solid var(--bet-gray-mid);
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
    background: white;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.related-card:hover {
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    border-color: var(--bet-cyan);
}
.related-card h4 {
    color: var(--bet-navy);
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 15px;
    margin-top: auto;
}
.related-card a {
    text-decoration: none;
}
</style>

<main class="main">

    <!-- HERO SECTION -->
    <section class="hero-premium">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-premium">
                    <li class="breadcrumb-item"><a href="<?php echo url(''); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo url('products'); ?>">Products</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo url('products/vacuum-glove-box'); ?>">Vacuum Glove Box</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo url('products/vacuum-glove-box/product-category/vacuum-gbmb'); ?>">Vacuum Glove Box – Metal Body</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Stainless Steel Vacuum Glove Box 2 Port</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Stainless Steel Vacuum Glove Box 2 Port</h1>
                    <p class="subtitle">Reliable Controlled-Environment Handling for Laboratory and Industrial Applications</p>
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
                        The <strong>Stainless Steel Vacuum Glove Box 2 Port</strong> manufactured by Burhani Engineering Technology is a professionally engineered enclosed workstation for handling sensitive materials under vacuum, inert gas or other controlled-atmosphere conditions.
                    </p>
                    <p class="lead-text">
                        It enables an operator to work inside an isolated chamber through two integrated glove ports without directly exposing the process or material to the surrounding environment. The glove box is manufactured with a strong stainless steel body that provides structural stability, corrosion resistance and long-term durability.
                    </p>
                    <p class="lead-text">
                        The spacious internal working area and transparent viewing panel allow clear visibility while carrying out sample preparation, testing, assembly, research, and material handling.
                    </p>
                    <p class="lead-text">
                        The system is suitable for laboratories, research institutions, pharmaceutical facilities, battery development units, electronics industries, and specialized manufacturing environments. It can be configured according to customer requirements, including chamber dimensions, operating conditions, process gas, vacuum level and accessories.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Two Port Glove Box Main/Two Port Glove Box Main pic 1.png'); ?>" alt="Stainless Steel Vacuum Glove Box 2 Port" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip (Single Row) -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Two Port Glove Box Main pic 1.png',
                                    'Two Port Glove Box pic 2.png',
                                    'Two Port Glove Box pic 3.png',
                                    'Two Port Glove Box pic 4.png',
                                    'Two Port Glove Box pic 5.png',
                                    'Two Port Glove Box pic 6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Vacuum Glove Box – Metal Body/Two Port Glove Box Main/';
                                
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

    <!-- DESIGNED FOR SENSITIVE PROCESSES -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Designed for Controlled and Sensitive Processes</h2>
                    <p class="lead-text">
                        Many laboratory and industrial materials can be affected by oxygen, humidity, dust or direct contact with the surrounding atmosphere. The 2 Port Stainless Steel Vacuum Glove Box creates an enclosed workspace in which these environmental conditions can be reduced or controlled.
                    </p>
                    <p class="lead-text">
                        The two ergonomically positioned glove ports allow a single operator to comfortably handle samples, tools and components inside the chamber. Depending on the selected configuration, the chamber may be connected to a suitable vacuum pump or supplied with an inert gas such as nitrogen or argon.
                    </p>
                    <p class="lead-text mb-0">
                        <strong>This controlled arrangement supports improved process consistency, cleaner material handling and better protection for atmosphere-sensitive samples.</strong>
                    </p>
                </div>
                <div class="split-visual">
                    <i class="bi bi-shield-check icon-box"></i>
                    <h3>Protection & Precision</h3>
                    <p class="mb-0 mt-3" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6;">
                        Isolate your critical processes from atmospheric contamination. Ensure reliability in research, testing, and advanced manufacturing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY FEATURES -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Key Features</h2>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="bi bi-box feature-icon"></i>
                    <span class="feature-text">Durable stainless steel chamber construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-fill feature-icon"></i>
                    <span class="feature-text">Two glove ports for convenient single-operator use</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Large transparent panel for clear internal visibility</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-lock feature-icon"></i>
                    <span class="feature-text">Secure sealing arrangement for controlled operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Suitable for vacuum and inert-atmosphere applications</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-stars feature-icon"></i>
                    <span class="feature-text">Smooth internal surfaces for easier cleaning</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Robust structure for laboratory and industrial use</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Provision for vacuum pump and pressure instrumentation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-arrow-left-right feature-icon"></i>
                    <span class="feature-text">Inlet and outlet connections for gas purging</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Convenient access for loading samples and equipment</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Customizable chamber dimensions and port locations</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Optional material-transfer chamber or airlock</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">Application-specific valves, gauges and accessories</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-geo-alt feature-icon"></i>
                    <span class="feature-text">Designed and manufactured in Chennai, India</span>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">How Does a Two-Port Vacuum Glove Box Work?</h2>
            
            <div class="process-container">
                <div class="process-step">
                    <div class="step-number">01</div>
                    <div class="step-title">Load Materials</div>
                    <p class="mt-2 text-muted small">Samples, components or tools are placed inside the enclosed working chamber.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">02</div>
                    <div class="step-title">Seal Chamber</div>
                    <p class="mt-2 text-muted small">The chamber is sealed and connected to the appropriate vacuum or gas-control system.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">03</div>
                    <div class="step-title">Establish Vacuum / Atmosphere</div>
                    <p class="mt-2 text-muted small">A compatible pump removes air, or the chamber is purged with nitrogen/argon process gas.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">04</div>
                    <div class="step-title">Handle Through Gloves</div>
                    <p class="mt-2 text-muted small">The operator handles the internal materials through the attached gloves safely.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">05</div>
                    <div class="step-title">Observe Process</div>
                    <p class="mt-2 text-muted small">Monitor operations clearly through the transparent viewing panel.</p>
                </div>
            </div>

            <div class="text-center mt-5">
                <p class="text-muted fst-italic">
                    Note: The achievable vacuum level and atmospheric purity depend on the chamber design, sealing system, pump selection, gas arrangement and process requirements.
                </p>
            </div>
        </div>
    </section>

    <!-- STAINLESS STEEL & APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-5">
                    <h2 class="section-title">Durable Stainless Steel Construction</h2>
                    <p class="lead-text">
                        The stainless steel enclosure provides high mechanical strength and excellent resistance to corrosion. Its smooth, cleanable surfaces make the chamber suitable for applications where cleanliness and dependable operation are important.
                    </p>
                    <p class="lead-text">
                        Different stainless steel grades and surface finishes may be offered based on customer process, environmental and maintenance requirements. A suitable transparent viewing panel can also be selected to provide clear observation while maintaining chamber integrity.
                    </p>
                </div>
                
                <div class="col-lg-7">
                    <h2 class="section-title">Applications</h2>
                    <div class="app-grid">
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Laboratory research and development</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Pharmaceutical and chemical processing</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Lithium-ion battery material handling</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Electronics & semiconductor assembly</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Moisture-sensitive sample preparation</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Powder handling and controlled mixing</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Material science and nanotechnology</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Inert gas experiments and testing</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Vacuum-based research applications</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Specialized industrial assembly</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Educational and institutional laboratories</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Controlled packaging and inspection</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION & TECH CONFIG -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row gy-5">
                <!-- Specs -->
                <div class="col-lg-7">
                    <h2 class="section-title">Technical Configuration</h2>
                    <table class="tech-table">
                        <tbody>
                            <tr>
                                <th>Construction Material</th>
                                <td>Configured according to process requirements (Stainless Steel)</td>
                            </tr>
                            <tr>
                                <th>Glove Ports</th>
                                <td>2 Ports (Standard)</td>
                            </tr>
                            <tr>
                                <th>Chamber Dimensions</th>
                                <td>Available according to application requirements</td>
                            </tr>
                            <tr>
                                <th>Vacuum Level</th>
                                <td>Configured according to process requirements</td>
                            </tr>
                            <tr>
                                <th>Operating Pressure</th>
                                <td>Final specifications confirmed during quotation</td>
                            </tr>
                            <tr>
                                <th>Viewing Panel</th>
                                <td>Transparent viewing panel selection available</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="compatibility-note">
                        <h4><i class="bi bi-exclamation-triangle-fill me-2 text-warning"></i> Customer Compatibility Responsibility</h4>
                        <p>
                            Customers should confirm the compatibility of the chamber, gloves, seals and accessories with the chemicals, gases and materials involved in their specific process before use. We recommend consultation with the appropriate process or safety engineer when selecting materials and configuration options for the application.
                        </p>
                    </div>
                </div>

                <!-- Customization -->
                <div class="col-lg-5">
                    <div class="custom-box">
                        <h3 style="color: var(--bet-navy); font-size: 1.5rem; font-weight: 700; margin-bottom: 20px;">
                            Customization & Optional Accessories
                        </h3>
                        <p class="text-muted mb-4">
                            Burhani Engineering Technology can configure the glove box according to the customer's specific process requirements.
                        </p>
                        <h4 class="h6 font-weight-bold text-uppercase mb-3" style="color: var(--bet-text);">Standard / Product Features</h4>
                        <ul class="custom-list mb-4">
                            <li><i class="bi bi-check2"></i> 2 Port Stainless Steel Chamber</li>
                            <li><i class="bi bi-check2"></i> Transparent Viewing Panel</li>
                            <li><i class="bi bi-check2"></i> Smooth internal surfaces</li>
                        </ul>
                        
                        <h4 class="h6 font-weight-bold text-uppercase mb-3" style="color: var(--bet-text);">Optional / Configurable</h4>
                        <ul class="custom-list">
                            <li><i class="bi bi-plus-circle"></i> Vacuum pump provision</li>
                            <li><i class="bi bi-plus-circle"></i> Pressure/vacuum instrumentation</li>
                            <li><i class="bi bi-plus-circle"></i> Gas inlet and outlet connections</li>
                            <li><i class="bi bi-plus-circle"></i> Nitrogen/argon purging configuration</li>
                            <li><i class="bi bi-plus-circle"></i> Material-transfer chamber or airlock</li>
                            <li><i class="bi bi-plus-circle"></i> Application-specific valves and gauges</li>
                            <li><i class="bi bi-plus-circle"></i> Custom chamber dimensions & port locations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM CTA -->
    <div class="container">
        <div class="bottom-cta">
            <h2>Interested in the Stainless Steel Vacuum Glove Box 2 Port?</h2>
            <p>Talk to our engineering team about your application requirements and configuration options. We'll help you select the right chamber dimensions, materials and accessories for your specific process.</p>
            <a href="#contact" class="btn btn-premium text-decoration-none bg-white text-dark">Request a Quote</a>
        </div>
    </div>

    <!-- RELATED PRODUCTS -->
    <section class="section-premium pt-0">
        <div class="container">
            <h2 class="section-title text-center mb-5">Related Vacuum Glove Box Products</h2>
            <div class="row g-4 justify-content-center">
                <?php
                $related_products = [
                    'two-port-glove-box.php' => '2 Port Glovebox',
                    'three-port-glove-box.php' => '3 Port Glovebox',
                    'four-port-glove-box.php' => '4 Port Glovebox',
                    'four-port-glove-box-modular.php' => '4 Port Modular',
                    'four-port-glove-box-two-sided.php' => '4 Port (2 Side)',
                    'six-port-glove-box-two-sided.php' => '6 Port Glovebox',
                    'eight-port-glove-box-two-sided.php' => '8 Port Glovebox'
                ];
                $current_file = basename(__FILE__);
                foreach ($related_products as $filename => $title) {
                    if ($filename === $current_file) continue;
                    echo '<div class="col-md-4 col-sm-6">';
                    echo '<div class="related-card">';
                    echo '<h4>' . htmlspecialchars($title) . '</h4>';
                    echo '<a href="' . url('products/vacuum-glove-box/product-category/vacuum-gbmb/' . $filename) . '" class="btn btn-outline-primary btn-sm mt-3">View Details</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

</main>

<!-- Include Contact Section -->
<?php include_once(__DIR__ . '/../../../../includes/contact-section.php'); ?>

<!-- Gallery Script -->
<script>
function updateMainImage(thumbnailElement, newSrc) {
    // Update main image source
    document.getElementById('main-product-image').src = newSrc;
    
    // Update active class on thumbnails
    const thumbnails = document.querySelectorAll('.thumbnail');
    thumbnails.forEach(thumb => {
        thumb.classList.remove('active');
    });
    thumbnailElement.classList.add('active');
}
</script>

<?php include_once(__DIR__ . '/../../../../includes/footer.php'); ?>

