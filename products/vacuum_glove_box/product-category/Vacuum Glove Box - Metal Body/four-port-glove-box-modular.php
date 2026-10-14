<?php
include_once(__DIR__ . '/../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Stainless Steel Vacuum Glove Box 4 Port Modular in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Stainless Steel Vacuum Glove Box 4 Port Modular available in $city, $country. Flexible controlled-atmosphere system for advanced processing.";
    $canonical_url = product_file_url('vacuum-glove-box', 'vacuum-gbmb', 'four-port-glove-box-modular');
} else {
    $meta_title = "Stainless Steel Vacuum Glove Box 4 Port Modular | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Stainless Steel Vacuum Glove Box 4 Port Modular providing flexible controlled-atmosphere handling for laboratory and industrial applications.";
    $canonical_url = product_file_url('vacuum-glove-box', 'vacuum-gbmb', 'four-port-glove-box-modular');
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

/* Customization Box */
.custom-box {
    background: #fff;
    border: 1px solid var(--bet-border);
    border-radius: 8px;
    padding: 30px;
    height: 100%;
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

/* FAQ Styles */
.faq-accordion .accordion-item {
    border: 1px solid var(--bet-border);
    border-radius: 8px;
    margin-bottom: 15px;
    overflow: hidden;
}
.faq-accordion .accordion-button {
    font-weight: 600;
    color: var(--bet-navy);
    background-color: white;
    box-shadow: none;
    padding: 20px;
}
.faq-accordion .accordion-button:not(.collapsed) {
    color: var(--bet-cyan);
    background-color: var(--bet-gray-light);
}
.faq-accordion .accordion-body {
    background-color: white;
    color: var(--bet-text);
    padding: 20px;
    border-top: 1px solid var(--bet-border);
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
                    <li class="breadcrumb-item active" aria-current="page">Stainless Steel Vacuum Glove Box 4 Port Modular</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Stainless Steel Vacuum Glove Box 4 Port Modular</h1>
                    <p class="subtitle">Flexible Controlled-Atmosphere System for Advanced Processing</p>
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
                        The <strong>Stainless Steel Vacuum Glove Box 4 Port Modular</strong> is a flexible enclosed workstation for handling sensitive materials under vacuum, inert gas or other controlled-atmosphere conditions.
                    </p>
                    <p class="lead-text">
                        Its modular architecture allows the chamber to be configured for larger workspaces, process-specific layouts, different glove-port arrangements, material-transfer requirements, and accessory integration.
                    </p>
                    <p class="lead-text">
                        Four integrated glove ports provide extended working access. Built with stainless-steel construction for dependable strength, corrosion resistance, and long operating life. Clear viewing windows allow operators to observe internal activities while handling samples, components and tools.
                    </p>
                    <p class="lead-text">
                        Depending on the final configuration, the system can help reduce exposure to oxygen, moisture, dust, and external contamination, making it suitable for laboratory and industrial processes requiring controlled environmental conditions.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box (modular)/4 Port Stainless Steel Glove box (Modular).jpg'); ?>" alt="Stainless Steel Vacuum Glove Box 4 Port Modular – Main View" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip (Single Row) -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    '4 Port Stainless Steel Glove box (Modular).jpg' => 'Main View',
                                    'Four Port Glove Box (modular)Main pic 1.png' => 'View 1',
                                    'Four Port Glove Box (modular) pic 2.png' => 'View 2',
                                    'Four Port Glove Box (modular) pic 3.png' => 'View 3',
                                    'Four Port Glove Box (modular) pic 4.png' => 'View 4'
                                ];
                                $base_img_path = 'img/Glove Box/Vacuum Glove Box – Metal Body/Four Port Glove Box (modular)/';
                                
                                $index = 0;
                                foreach ($images as $img => $alt) {
                                    $active_class = $index === 0 ? 'active' : '';
                                    $img_src = asset($base_img_path . $img);
                                    echo "<div class='thumbnail $active_class' onclick='updateMainImage(this, \"$img_src\")'>
                                            <img src='$img_src' alt='Stainless Steel Vacuum Glove Box 4 Port Modular – $alt' loading='lazy'>
                                          </div>";
                                    $index++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT IS A MODULAR VACUUM GLOVE BOX -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">What Is a Modular Vacuum Glove Box?</h2>
                    <p class="lead-text">
                        A modular vacuum glove box uses coordinated chamber sections that can be configured to create a larger or process-specific controlled workspace.
                    </p>
                    <p class="lead-text">
                        Compared with a fixed single-chamber design, modular construction provides greater flexibility for chamber layout, glove-port positioning, material transfer, and accessory integration.
                    </p>
                    <p class="lead-text">
                        Where permitted by the final engineering design, modular construction can simplify transportation, installation, maintenance, and future system reconfiguration.
                    </p>
                    <p class="lead-text mb-0">
                        <strong>Note: Each module connection must be properly engineered and sealed to maintain the required vacuum or controlled-atmosphere conditions.</strong>
                    </p>
                </div>
                <div class="split-visual">
                    <i class="bi bi-diagram-3 icon-box"></i>
                    <h3>Configurable Workspace</h3>
                    <p class="mb-0 mt-3" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6;">
                        Adapt your controlled environment to match your specific multi-stage processing needs with modular chamber sections.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ADVANTAGES -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Advantages of the Four-Port Modular Design</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="bi bi-arrows-expand feature-icon"></i>
                    <div>
                        <span class="feature-text">Extended Working Access</span>
                        <p class="mt-2 mb-0 text-muted small">Four integrated glove ports provide convenient access across an extended internal workspace.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <i class="bi bi-grid-1x2 feature-icon"></i>
                    <div>
                        <span class="feature-text">Configurable Workspace</span>
                        <p class="mt-2 mb-0 text-muted small">The modular arrangement can divide the system into practical working zones.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <i class="bi bi-arrow-repeat feature-icon"></i>
                    <div>
                        <span class="feature-text">Multi-Stage Processing</span>
                        <p class="mt-2 mb-0 text-muted small">The workspace can support sample preparation, processing, assembly, testing, and inspection.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <i class="bi bi-bezier2 feature-icon"></i>
                    <div>
                        <span class="feature-text">Flexible System Configuration</span>
                        <p class="mt-2 mb-0 text-muted small">Depending on the final design, connected sections can accommodate different process workflows.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <i class="bi bi-truck feature-icon"></i>
                    <div>
                        <span class="feature-text">Easier Installation Planning</span>
                        <p class="mt-2 mb-0 text-muted small">The modular format can be useful where transportation through doors, corridors or restricted facility spaces needs to be considered.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wrench-adjustable feature-icon"></i>
                    <div>
                        <span class="feature-text">Future Flexibility</span>
                        <p class="mt-2 mb-0 text-muted small">The modular structure can allow future reconfiguration where supported by the engineering design.</p>
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
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Durable stainless steel modular construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-lines-fill feature-icon"></i>
                    <span class="feature-text">Four glove ports for extended working access</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-collection feature-icon"></i>
                    <span class="feature-text">Configurable chamber sections and workspace layout</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Clear viewing windows for process observation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-lock-fill feature-icon"></i>
                    <span class="feature-text">Securely sealed connections between modules</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Suitable for vacuum and inert-gas applications</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-plugin feature-icon"></i>
                    <span class="feature-text">Provision for vacuum pump connection</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Pressure monitoring and control options</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-arrow-left-right feature-icon"></i>
                    <span class="feature-text">Nitrogen or argon purging connections</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-stars feature-icon"></i>
                    <span class="feature-text">Smooth internal surfaces for easier cleaning</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Optional airlock or material-transfer chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Custom glove-port positions and chamber dimensions</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">Application-specific utility connections</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Strong supporting structure for stable operation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">How Does the Modular Vacuum Glove Box Work?</h2>
            
            <div class="process-container">
                <div class="process-step">
                    <div class="step-number">01</div>
                    <div class="step-title">Introduction</div>
                    <p class="mt-2 text-muted small">Samples/process materials/components are introduced through the main chamber or optional material-transfer airlock.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">02</div>
                    <div class="step-title">Operation</div>
                    <p class="mt-2 text-muted small">Operators work through the four integrated glove ports while the chamber remains isolated according to the configured system.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">03</div>
                    <div class="step-title">Vacuum / Atmosphere</div>
                    <p class="mt-2 text-muted small">A compatible vacuum pump can remove air. For controlled-atmosphere processing, the system can be configured for nitrogen or argon.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">04</div>
                    <div class="step-title">Modular Integrity</div>
                    <p class="mt-2 text-muted small">Properly engineered module connections allow connected chamber sections to function as one controlled system.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">05</div>
                    <div class="step-title">Monitoring</div>
                    <p class="mt-2 text-muted small">Valves, gauges and optional digital instruments help establish and monitor internal conditions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STAINLESS STEEL & APPLICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-5">
                    <h2 class="section-title">Durable Stainless Steel Chamber Construction</h2>
                    <p class="lead-text">
                        Stainless steel provides mechanical strength, corrosion resistance, long operating life, and smooth surfaces that support cleaning and maintenance.
                    </p>
                    <p class="lead-text">
                        Final material selection can depend on the required vacuum level, chamber size, process materials, and environmental conditions.
                    </p>
                </div>
                
                <div class="col-lg-7">
                    <h2 class="section-title">Typical Applications</h2>
                    <div class="app-grid">
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Pharmaceutical and chemical research</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Lithium-ion battery development</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Battery material preparation and assembly</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Electronics and semiconductor processing</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Moisture-sensitive material handling</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Powder processing and sample preparation</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Nitrogen or argon atmosphere experiments</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Material science and nanotechnology research</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Vacuum testing and process development</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Controlled assembly of sensitive components</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Prototype manufacturing and inspection</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Multi-stage laboratory processes</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Research and development facilities</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Specialized industrial production</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INSTALLATION & CUSTOMIZATION -->
    <section class="section-premium">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Installation & Future Flexibility</h2>
                    <p class="lead-text">
                        The modular format can make a larger glove box easier to transport and install when facility access is restricted.
                    </p>
                    <p class="lead-text">
                        Connected sections may be assembled at the installation location according to the specified sealing and fastening arrangement. Proper sealing is necessary for vacuum/controlled-atmosphere operation.
                    </p>
                    <p class="lead-text text-muted fst-italic">
                        Depending on the final engineering design, future reconfiguration may be supported.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="custom-box">
                        <h3 style="color: var(--bet-navy); font-size: 1.5rem; font-weight: 700; margin-bottom: 20px;">
                            Customization & Optional Accessories
                        </h3>
                        <p class="text-muted mb-4">
                            Accessory/system selection depends on chamber volume, required vacuum, process gas, material characteristics, and operating workflow. Available options may include:
                        </p>
                        <ul class="custom-list">
                            <li><i class="bi bi-plus-circle"></i> Suitable rotary-vane or dry vacuum pump</li>
                            <li><i class="bi bi-plus-circle"></i> Vacuum or compound pressure gauge</li>
                            <li><i class="bi bi-plus-circle"></i> Digital vacuum and pressure display</li>
                            <li><i class="bi bi-plus-circle"></i> Vacuum-control and isolation valves</li>
                            <li><i class="bi bi-plus-circle"></i> Inert gas inlet and outlet connections</li>
                            <li><i class="bi bi-plus-circle"></i> Material-transfer chamber or airlock</li>
                            <li><i class="bi bi-plus-circle"></i> Additional interconnected chamber modules</li>
                            <li><i class="bi bi-plus-circle"></i> Internal LED illumination</li>
                            <li><i class="bi bi-plus-circle"></i> Electrical and instrumentation feedthroughs</li>
                            <li><i class="bi bi-plus-circle"></i> Additional vacuum and utility ports</li>
                            <li><i class="bi bi-plus-circle"></i> Gas-purification system connections</li>
                            <li><i class="bi bi-plus-circle"></i> Internal shelves or working platforms</li>
                            <li><i class="bi bi-plus-circle"></i> Application-compatible glove materials</li>
                            <li><i class="bi bi-plus-circle"></i> Heavy-duty modular support frame</li>
                            <li><i class="bi bi-plus-circle"></i> Process-specific control panel</li>
                            <li><i class="bi bi-plus-circle"></i> Customized chamber dimensions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>
            <div class="accordion faq-accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What is a 4 Port Modular Vacuum Glove Box?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            It is a flexible enclosed workstation for handling sensitive materials. The modular construction allows the chamber to be configured from separate sections, providing four glove ports for extended access.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            What makes the modular design different from a conventional glove box?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Unlike fixed single-chamber systems, a modular vacuum glove box uses coordinated chamber sections. This provides greater flexibility for chamber layout, material transfer, and accessory integration, and can simplify installation in restricted facility spaces.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Can the chamber layout be customized?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. The modular architecture enables customized chamber dimensions, process-specific layouts, and different glove-port arrangements to suit your workflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Can the system operate under vacuum?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, the system is designed to be properly sealed between modules, allowing it to maintain reduced-pressure conditions when connected to a compatible vacuum pump.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Can the system be configured for nitrogen or argon?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. The system can be configured with appropriate inlet and outlet connections for controlled-atmosphere processing using inert gases like nitrogen or argon.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            Can an airlock/material-transfer chamber be added?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, an optional material-transfer chamber or airlock can be integrated depending on the final engineering configuration.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                            What industries can use this glove box?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Typical applications include pharmaceutical research, lithium-ion battery development, electronics processing, nanotechnology, and other advanced laboratory or industrial production processes.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM CTA -->
    <div class="container">
        <div class="bottom-cta">
            <h2>Need a Custom 4 Port Modular Vacuum Glove Box?</h2>
            <p>Discuss your chamber size, glove-port layout, vacuum requirements, process gas and accessory requirements with Burhani Engineering Technology.</p>
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
    document.getElementById('main-product-image').src = newSrc;
    const thumbnails = document.querySelectorAll('.thumbnail');
    thumbnails.forEach(thumb => {
        thumb.classList.remove('active');
    });
    thumbnailElement.classList.add('active');
}
</script>

<?php include_once(__DIR__ . '/../../../../includes/footer.php'); ?>


