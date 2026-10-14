<?php
include_once(__DIR__ . '/../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Stainless Steel Vacuum Glove Box 4 Port in $city, $country | Burhani Engineering Technology";
    $meta_description = "Burhani Engineering Technology manufactures customizable Stainless Steel Vacuum Glove Box 4 Port systems in $city, $country for laboratory, research and industrial applications.";
    $canonical_url = product_file_url('vacuum-glove-box', 'vacuum-gbmb', 'four-port-glove-box');
} else {
    $meta_title = "Stainless Steel Vacuum Glove Box 4 Port Manufacturer India";
    $meta_description = "Burhani Engineering Technology manufactures customizable Stainless Steel Vacuum Glove Box 4 Port systems in Chennai for laboratory, research and industrial applications.";
    $canonical_url = product_file_url('vacuum-glove-box', 'vacuum-gbmb', 'four-port-glove-box');
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
    cursor: zoom-in;
    position: relative;
}
.main-image-wrapper img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}
.main-image-wrapper:hover::after {
    content: '\F644';
    font-family: 'bootstrap-icons';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.5);
    color: white;
    padding: 15px;
    border-radius: 50%;
    font-size: 1.5rem;
    opacity: 0;
    animation: fadeIn 0.3s forwards;
    pointer-events: none;
}
@keyframes fadeIn {
    to { opacity: 1; }
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

/* Lightbox Styles */
.lightbox {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(11, 33, 73, 0.95);
    backdrop-filter: blur(5px);
}
.lightbox.active {
    display: flex;
    flex-direction: column;
}
.lightbox-header {
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
}
.lightbox-controls {
    display: flex;
    gap: 15px;
}
.lightbox-btn {
    background: transparent;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    transition: color 0.2s;
    padding: 5px;
}
.lightbox-btn:hover {
    color: var(--bet-cyan);
}
.lightbox-content {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.lightbox-img-wrapper {
    position: relative;
    width: 90%;
    height: 90%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lightbox-img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.2s ease;
    cursor: grab;
}
.lightbox-img:active {
    cursor: grabbing;
}
.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.5);
    color: white;
    border: none;
    padding: 15px 20px;
    font-size: 2rem;
    cursor: pointer;
    border-radius: 50%;
    transition: background 0.3s;
}
.lightbox-nav:hover {
    background: var(--bet-cyan);
}
.lightbox-prev { left: 20px; }
.lightbox-next { right: 20px; }
.lightbox-footer {
    padding: 15px;
    display: flex;
    justify-content: center;
    gap: 10px;
}
.lightbox-thumb {
    width: 50px;
    height: 50px;
    border: 2px solid transparent;
    border-radius: 4px;
    cursor: pointer;
    opacity: 0.6;
    transition: all 0.2s;
    background: white;
}
.lightbox-thumb.active {
    border-color: var(--bet-cyan);
    opacity: 1;
}
.lightbox-thumb img {
    width: 100%;
    height: 100%;
    object-fit: contain;
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

/* FAQ Accordion */
.faq-accordion .accordion-item {
    border: 1px solid var(--bet-border);
    border-radius: 8px !important;
    margin-bottom: 15px;
    overflow: hidden;
}
.faq-accordion .accordion-button {
    font-weight: 600;
    color: var(--bet-navy);
    background-color: white;
    padding: 20px;
    box-shadow: none;
}
.faq-accordion .accordion-button:not(.collapsed) {
    color: var(--bet-cyan);
    background-color: rgba(0, 163, 224, 0.05);
}
.faq-accordion .accordion-body {
    padding: 20px;
    color: var(--bet-text);
    background: white;
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
                    <li class="breadcrumb-item"><a href="<?php echo product_url('vacuum-glove-box'); ?>">Vacuum Glove Box</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo product_category_url('vacuum-glove-box', 'vacuum-gbmb'); ?>">Vacuum Glove Box – Metal Body</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Stainless Steel Vacuum Glove Box 4 Port</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Stainless Steel Vacuum Glove Box 4 Port</h1>
                    <p class="subtitle lead mb-4">Controlled-Atmosphere Processing with Wider Working Access</p>
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
                        The <strong>Stainless Steel Vacuum Glove Box 4 Port</strong> from Burhani Engineering Technology is a durable enclosed workstation designed for handling sensitive materials under vacuum, inert gas or other controlled-atmosphere conditions.
                    </p>
                    <p class="lead-text">
                        Its three glove ports provide improved access across the internal workspace, making it suitable for processes that require a larger working area, multiple handling stages or better reach inside the chamber.
                    </p>
                    <p class="lead-text">
                        Manufactured using quality stainless steel, the glove box offers excellent structural strength, corrosion resistance and long-term durability. A clear viewing window allows operators to observe samples, tools and process activities while working through the integrated glove ports without directly exposing the chamber interior to the surrounding environment.
                    </p>
                    <p class="lead-text">
                        Depending on the chosen configuration, the system can help reduce contact with oxygen, moisture, dust and external contaminants. It is suitable for laboratory research, pharmaceutical processing, electronics, battery development, material science and specialized industrial applications.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper" onclick="openLightbox()">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box Main/4 Port Stainless Steel Glove box.jpg'); ?>" alt="Stainless Steel Vacuum Glove Box 4 Port" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip (Single Row) -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    '4 Port Stainless Steel Glove box.jpg',
                                    'Four Port Glove Box Main pic 1.png',
                                    'Four Port Glove Box pic 2.png',
                                    'Four Port Glove Box pic 3.png',
                                    'Four Port Glove Box pic 4.png'
                                ];
                                $base_img_path = 'img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box Main/';
                                
                                foreach ($images as $index => $img) {
                                    $active_class = $index === 0 ? 'active' : '';
                                    $img_src = asset($base_img_path . $img);
                                    echo "<div class='thumbnail $active_class' onclick='updateMainImage(this, \"$img_src\", $index)'>
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

    <!-- ADVANTAGES -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Advantages of a Three-Port Glove Box</h2>
                    <p class="lead-text">
                        The three-port configuration provides wider and more flexible access than a conventional two-port chamber. The additional glove port can help the operator reach different areas of an extended workspace, handle larger components or complete multiple process stages inside a single enclosed chamber.
                    </p>
                    <p class="lead-text">
                        Its layout can be customized according to the chamber length, operator position and intended application. This makes the 3 Port Stainless Steel Vacuum Glove Box a practical choice for processes where internal accessibility and controlled handling are equally important.
                    </p>
                </div>
                <div class="split-visual">
                    <i class="bi bi-arrows-expand icon-box"></i>
                    <h3>Extended Workspace</h3>
                    <p class="mb-0 mt-3" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6;">
                        Maximize operational efficiency with an additional glove port designed for seamless handling of larger components and multi-stage processes.
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
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Durable and corrosion-resistant stainless steel construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-diagram-3 feature-icon"></i>
                    <span class="feature-text">Three glove ports for extended internal working access</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Clear viewing window for continuous process observation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-lock feature-icon"></i>
                    <span class="feature-text">Secure chamber sealing for maintaining controlled conditions</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Suitable for vacuum and inert-atmosphere applications</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Provision for vacuum pump and pressure-monitoring instruments</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-arrow-down-up feature-icon"></i>
                    <span class="feature-text">Gas inlet and outlet connections available when required</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-stars feature-icon"></i>
                    <span class="feature-text">Smooth internal surfaces for convenient cleaning</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-layers feature-icon"></i>
                    <span class="feature-text">Strong supporting frame for stable operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">User-friendly valves and system controls</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-aspect-ratio feature-icon"></i>
                    <span class="feature-text">Custom chamber dimensions and glove-port positions</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Optional airlock or material-transfer chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-plug feature-icon"></i>
                    <span class="feature-text">Application-specific utility connections available</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Suitable for laboratory, research and industrial processes</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-geo-alt feature-icon"></i>
                    <span class="feature-text">Manufactured in Chennai by Burhani Engineering Technology</span>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">How Does a Three-Port Vacuum Glove Box Work?</h2>
            
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <p class="lead-text text-center">
                        Samples, components or process materials are placed inside the sealed working chamber. Operators handle these items through the three integrated gloves while the main chamber remains isolated from the external atmosphere.
                    </p>
                    <p class="lead-text text-center">
                        A compatible vacuum system can be connected to remove air and establish the required reduced-pressure condition. For controlled-atmosphere applications, the chamber can also be configured for purging with a suitable inert gas such as nitrogen or argon. Valves, gauges and optional digital instruments allow operators to control and observe the internal conditions.
                    </p>
                    <div class="text-center mt-4 p-4 border rounded bg-white">
                        <p class="text-muted fst-italic mb-0">
                            The achievable vacuum range and atmospheric quality depend on the selected chamber construction, sealing arrangement, vacuum pump, gas-purging method and control accessories.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STAINLESS STEEL & VIEWING -->
    <section class="section-premium">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6 pe-lg-4">
                    <h2 class="section-title">Strong Stainless Steel Construction</h2>
                    <p class="lead-text">
                        The main chamber is manufactured from stainless steel to provide mechanical strength, corrosion resistance and a professional industrial finish. Its smooth surfaces make routine cleaning and maintenance easier, particularly in laboratories and production environments where cleanliness is important.
                    </p>
                    <p class="lead-text">
                        The stainless steel grade, sheet thickness, internal finish and external surface treatment can be selected according to the application. Final construction specifications should be determined based on the intended vacuum level, process material and operating environment.
                    </p>
                </div>
                
                <div class="col-lg-6 ps-lg-4">
                    <h2 class="section-title">Clear Viewing and Improved Accessibility</h2>
                    <p class="lead-text">
                        A transparent viewing section provides a clear and wide view of the internal workspace. This helps the operator position samples, use tools, inspect components and observe process activity without opening the chamber.
                    </p>
                    <p class="lead-text">
                        The three glove ports can be arranged to support practical reach across the working area. Glove size and material can also be selected according to the required flexibility, chemical compatibility and operating conditions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- APPLICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Typical Applications</h2>
            <div class="row mt-4">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-capsule fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Pharmaceutical & Chemical</h5>
                        <p class="text-muted small">Pharmaceutical and chemical research</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-battery-charging fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Battery Development</h5>
                        <p class="text-muted small">Battery and energy-storage development, Lithium-ion battery material handling</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-cpu fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Electronics & Semiconductors</h5>
                        <p class="text-muted small">Electronics and semiconductor processing</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-droplet-half fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Moisture-Sensitive Materials</h5>
                        <p class="text-muted small">Moisture-sensitive material preparation, Powder handling and controlled sample transfer</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-wind fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Inert Atmosphere</h5>
                        <p class="text-muted small">Nitrogen or argon atmosphere experiments</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-diagram-3 fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Material Science</h5>
                        <p class="text-muted small">Material science and nanotechnology research</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-gear-wide-connected fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Process Development</h5>
                        <p class="text-muted small">Vacuum testing and process development, Controlled assembly of sensitive components</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-braces-asterisk fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Manufacturing & Inspection</h5>
                        <p class="text-muted small">Prototype manufacturing and inspection, Specialized industrial production processes</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="app-card p-3 border rounded h-100 shadow-sm text-center">
                        <i class="bi bi-building fs-1 text-primary mb-2"></i>
                        <h5 class="mt-2">Research & Education</h5>
                        <p class="text-muted small">Research and development laboratories, Educational and institutional laboratories</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="custom-box border-0 shadow">
                        <h2 class="section-title text-center">Available Customization and Accessories</h2>
                        <p class="text-center lead-text mb-5">
                            Burhani Engineering Technology can customize the three-port vacuum glove box according to specific process requirements. Available configurations and accessories may include:
                        </p>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="custom-list">
                                    <li><i class="bi bi-gear-fill"></i> Suitable rotary-vane or dry vacuum pump</li>
                                    <li><i class="bi bi-gear-fill"></i> Vacuum or compound pressure gauge</li>
                                    <li><i class="bi bi-gear-fill"></i> Digital vacuum display</li>
                                    <li><i class="bi bi-gear-fill"></i> Vacuum-control and isolation valves</li>
                                    <li><i class="bi bi-gear-fill"></i> Nitrogen or argon gas connections</li>
                                    <li><i class="bi bi-gear-fill"></i> Material-transfer chamber or airlock</li>
                                    <li><i class="bi bi-gear-fill"></i> Internal LED lighting</li>
                                    <li><i class="bi bi-gear-fill"></i> Electrical and instrumentation feedthroughs</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="custom-list">
                                    <li><i class="bi bi-gear-fill"></i> Additional vacuum and utility ports</li>
                                    <li><i class="bi bi-gear-fill"></i> Gas-purification system connections</li>
                                    <li><i class="bi bi-gear-fill"></i> Internal shelves or working platforms</li>
                                    <li><i class="bi bi-gear-fill"></i> Chemical-compatible glove materials</li>
                                    <li><i class="bi bi-gear-fill"></i> Adjustable or fixed support stand</li>
                                    <li><i class="bi bi-gear-fill"></i> Customized chamber dimensions</li>
                                    <li><i class="bi bi-gear-fill"></i> Application-specific control panel</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-5 p-4 bg-light rounded text-center">
                            <p class="mb-0 fw-semibold text-muted">
                                The appropriate accessories are selected according to chamber volume, required vacuum level, process gas, material characteristics and operating conditions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US & FAQ -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-5 pe-lg-4">
                    <h2 class="section-title">Why Choose Burhani Engineering Technology?</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology is a manufacturer of stainless steel glove boxes, vacuum chambers and customized engineering systems in Chennai, Tamil Nadu, India. We provide solutions for laboratories, research organizations, educational institutions and industrial customers across India.
                    </p>
                    <p class="lead-text">
                        Each glove box can be developed around the customer’s actual process requirements. Chamber dimensions, glove-port arrangement, operating vacuum, process gas, transfer method and instrumentation can be discussed before manufacturing to create a practical and application-focused system.
                    </p>
                </div>
                
                <div class="col-lg-7">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div class="accordion mt-4" id="faqAccordion">
                        
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What is a four-port stainless steel vacuum glove box?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    It is an enclosed stainless steel chamber equipped with four glove openings. It allows materials to be handled while maintaining an isolated, reduced-pressure or controlled internal environment.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why choose four glove ports?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Four ports provide improved access across a wider chamber. They are suitable for larger components, multiple work stages and applications requiring access from more than one working position.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can this glove box be used with nitrogen or argon?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. The chamber can be configured with suitable gas inlet, outlet, purging and pressure-control connections for nitrogen, argon or another compatible process gas.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is a vacuum pump supplied with the glove box?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    A compatible vacuum pump can be included or recommended based on the chamber volume, required vacuum range and intended application. The final supply scope should be confirmed during quotation.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can an airlock be added?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. An optional airlock or material-transfer chamber can be provided to introduce or remove materials while minimizing disturbance to the main chamber environment.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Can the chamber dimensions be customized?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. Chamber size, glove-port position, viewing window, valves, gauges, airlock and utility connections can be customized according to the application.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Who manufactures four-port vacuum glove boxes in India?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Burhani Engineering Technology manufactures customized stainless steel vacuum glove boxes and vacuum chambers in Chennai, India, for laboratory, research and industrial applications.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why choose three glove ports instead of two?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Three glove ports provide additional reach across a wider chamber and can make it easier to access different working areas. They are useful for handling larger components or performing several processing stages inside one enclosure.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can the glove box operate with nitrogen or argon?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. It can be configured with suitable inlet, outlet, purging and pressure-control connections for nitrogen, argon or another compatible process gas.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is the vacuum pump supplied with the chamber?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    A compatible vacuum pump can be supplied or recommended based on the chamber volume, required vacuum range and application. The final scope should be confirmed during quotation.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can an airlock be added?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. An optional airlock or material-transfer chamber can be provided to introduce or remove samples while minimizing disturbance to the main working environment.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Can the chamber dimensions be customized?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. Chamber size, glove-port position, viewing window, airlock, valves, gauges and utility connections can be customized according to the customer’s process.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Who manufactures three-port vacuum glove boxes in India?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Burhani Engineering Technology manufactures customized stainless steel vacuum glove boxes and vacuum chambers in Chennai, India, for laboratory, research and industrial applications.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM CTA -->
    <div class="container">
        <div class="bottom-cta">
            <h2>Request a Quote</h2>
            <p>Contact Burhani Engineering Technology for a customized Stainless Steel Vacuum Glove Box 4 Port. Share your required chamber size, target vacuum level, process gas, application and preferred accessories so our team can recommend an appropriate configuration.</p>
            <a href="#contact" class="btn btn-premium text-decoration-none bg-white text-dark">Contact our Engineering Team</a>
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

<!-- LIGHTBOX ELEMENT -->
<div id="imageLightbox" class="lightbox">
    <div class="lightbox-header">
        <div>
            <span id="lbCounter" class="fw-bold">1 / 5</span>
            <span class="ms-3 text-muted small"><i class="bi bi-zoom-in"></i> Scroll to zoom, click and drag to pan</span>
        </div>
        <div class="lightbox-controls">
            <button class="lightbox-btn" onclick="zoomIn()" title="Zoom In"><i class="bi bi-zoom-in"></i></button>
            <button class="lightbox-btn" onclick="zoomOut()" title="Zoom Out"><i class="bi bi-zoom-out"></i></button>
            <button class="lightbox-btn" onclick="resetZoom()" title="Reset Zoom"><i class="bi bi-arrows-angle-contract"></i></button>
            <button class="lightbox-btn" onclick="closeLightbox()" title="Close"><i class="bi bi-x-lg"></i></button>
        </div>
    </div>
    
    <div class="lightbox-content" id="lbContent">
        <button class="lightbox-nav lightbox-prev" onclick="prevImage(event)"><i class="bi bi-chevron-left"></i></button>
        
        <div class="lightbox-img-wrapper">
            <img id="lbMainImage" class="lightbox-img" src="" alt="Zoomed Product View">
        </div>
        
        <button class="lightbox-nav lightbox-next" onclick="nextImage(event)"><i class="bi bi-chevron-right"></i></button>
    </div>
    
    <div class="lightbox-footer" id="lbFooter">
        <!-- Thumbnails populated by JS -->
    </div>
</div>

<!-- Gallery & Lightbox Script -->
<script>
// Gallery Data
const galleryImages = [
    "<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box Main/4 Port Stainless Steel Glove box.jpg'); ?>",
    "<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box Main/Four Port Glove Box Main pic 1.png'); ?>",
    "<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box Main/Four Port Glove Box pic 2.png'); ?>",
    "<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box Main/Four Port Glove Box pic 3.png'); ?>",
    "<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box Main/Four Port Glove Box pic 4.png'); ?>"
];

let currentIndex = 0;
let currentZoom = 1;
let isDragging = false;
let startX, startY, translateX = 0, translateY = 0;

// Update Main Page Image
function updateMainImage(thumbnailElement, newSrc, index) {
    document.getElementById('main-product-image').src = newSrc;
    currentIndex = index;
    
    const thumbnails = document.querySelectorAll('.thumbnail-strip .thumbnail');
    thumbnails.forEach(thumb => thumb.classList.remove('active'));
    thumbnailElement.classList.add('active');
}

// Open Lightbox
function openLightbox() {
    const lb = document.getElementById('imageLightbox');
    lb.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent body scroll
    
    populateLightboxThumbs();
    setLightboxImage(currentIndex);
}

// Close Lightbox
function closeLightbox() {
    const lb = document.getElementById('imageLightbox');
    lb.classList.remove('active');
    document.body.style.overflow = '';
    resetZoom();
}

// Set Lightbox Image
function setLightboxImage(index) {
    currentIndex = index;
    const img = document.getElementById('lbMainImage');
    img.src = galleryImages[index];
    
    document.getElementById('lbCounter').textContent = `${index + 1} / ${galleryImages.length}`;
    
    // Update active thumb
    const thumbs = document.querySelectorAll('.lightbox-thumb');
    thumbs.forEach((t, i) => {
        if(i === index) t.classList.add('active');
        else t.classList.remove('active');
    });
    
    resetZoom();
}

function prevImage(e) {
    if(e) e.stopPropagation();
    let newIndex = currentIndex - 1;
    if(newIndex < 0) newIndex = galleryImages.length - 1;
    setLightboxImage(newIndex);
}

function nextImage(e) {
    if(e) e.stopPropagation();
    let newIndex = currentIndex + 1;
    if(newIndex >= galleryImages.length) newIndex = 0;
    setLightboxImage(newIndex);
}

function populateLightboxThumbs() {
    const footer = document.getElementById('lbFooter');
    footer.innerHTML = '';
    
    galleryImages.forEach((src, idx) => {
        const div = document.createElement('div');
        div.className = `lightbox-thumb ${idx === currentIndex ? 'active' : ''}`;
        div.onclick = (e) => { e.stopPropagation(); setLightboxImage(idx); };
        
        const img = document.createElement('img');
        img.src = src;
        div.appendChild(img);
        footer.appendChild(div);
    });
}

// Zoom functionality
const lbImg = document.getElementById('lbMainImage');
const lbContent = document.getElementById('lbContent');

function applyTransform() {
    lbImg.style.transform = `translate(${translateX}px, ${translateY}px) scale(${currentZoom})`;
}

function zoomIn() {
    currentZoom = Math.min(currentZoom + 0.5, 4);
    applyTransform();
}

function zoomOut() {
    currentZoom = Math.max(currentZoom - 0.5, 0.5);
    if(currentZoom === 1) { translateX = 0; translateY = 0; }
    applyTransform();
}

function resetZoom() {
    currentZoom = 1;
    translateX = 0;
    translateY = 0;
    applyTransform();
}

// Wheel zoom
lbContent.addEventListener('wheel', (e) => {
    e.preventDefault();
    if(e.deltaY < 0) zoomIn();
    else zoomOut();
});

// Drag to pan
lbImg.addEventListener('mousedown', (e) => {
    if(currentZoom > 1) {
        isDragging = true;
        startX = e.clientX - translateX;
        startY = e.clientY - translateY;
    }
});
window.addEventListener('mousemove', (e) => {
    if(isDragging && currentZoom > 1) {
        translateX = e.clientX - startX;
        translateY = e.clientY - startY;
        applyTransform();
    }
});
window.addEventListener('mouseup', () => {
    isDragging = false;
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if(!document.getElementById('imageLightbox').classList.contains('active')) return;
    
    if(e.key === 'Escape') closeLightbox();
    if(e.key === 'ArrowLeft') prevImage();
    if(e.key === 'ArrowRight') nextImage();
});

// Close on background click
lbContent.addEventListener('click', (e) => {
    if(e.target === lbContent || e.target.classList.contains('lightbox-img-wrapper')) {
        closeLightbox();
    }
});
</script>

<?php include_once(__DIR__ . '/../../../../includes/footer.php'); ?>


