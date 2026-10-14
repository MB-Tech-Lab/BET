<?php
include_once(__DIR__ . '/../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Eight Port Glove Box Two Sided Manufacturer in $city, $country | Burhani Engineering Technology";
    $meta_description = "Burhani Engineering Technology manufactures customizable two-sided Eight Port Glove Boxes with four glove ports on each side in $city, $country.";
    $canonical_url = product_file_url('vacuum-glove-box', 'vacuum-gbmb', 'eight-port-glove-box-two-sided');
} else {
    $meta_title = "Eight Port Glove Box Two Sided Manufacturer in India | Burhani Engineering Technology";
    $meta_description = "Burhani Engineering Technology manufactures customizable two-sided Eight Port Glove Boxes with four glove ports on each side in Chennai, India.";
    $canonical_url = product_file_url('vacuum-glove-box', 'vacuum-gbmb', 'eight-port-glove-box-two-sided');
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
                    <li class="breadcrumb-item active" aria-current="page">Eight Port Glove Box Two Sided</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Eight Port Glove Box Two Sided</h1>
                    <p class="subtitle">Four Glove Ports on Each Side for Large Controlled Workspaces</p>
                    <a href="#contact" class="btn-premium text-decoration-none">REQUEST A QUOTE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT INTRODUCTION & GALLERY -->
    <section class="section-premium">
        <div class="container">
            <div class="row gy-5">
                <!-- Left: Description -->
                <div class="col-lg-6 pe-lg-5">
                    <h2 class="section-title">Product Introduction</h2>
                    <p class="lead-text">
                        The Eight Port Glove Box Two Sided from Burhani Engineering Technology is an extended controlled-environment enclosure designed with four glove ports on each of its two working sides. With eight glove ports in total, the system provides broad access to a large internal workspace for handling, processing, assembling and inspecting sensitive materials.
                    </p>
                    <p class="lead-text">
                        Its dual-sided arrangement is suitable for complex operations involving long components, multiple work zones or coordinated handling from opposite sides of the chamber. Materials and tools can remain inside the enclosed workspace while operators carry out different process stages without frequently opening the main chamber.
                    </p>
                    <p class="lead-text">
                        The system is manufactured using quality stainless steel for structural strength, corrosion resistance and dependable performance in laboratory, research and industrial environments. Large transparent viewing sections provide clear observation of internal activities from both working sides.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Vacuum Glove Box – Metal Body/Eight Port Glove Box (Two Sided x 4Glove Ports) Main/8 Port Stainless Steel Glove Box.jpg'); ?>" alt="Eight Port Glove Box Two Sided – Main View" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    '8 Port Stainless Steel Glove Box.jpg' => 'Main View',
                                    'Eight Port Glove Box (Two Sided x 4Glove Ports) Main pic 1.png' => 'View 1',
                                    'Eight Port Glove Box (Two Sided x 4Glove Ports ) pic 2.png' => 'View 2',
                                    'Eight Port Glove Box (Two Sided x 4Glove Ports ) pic 3.png' => 'View 3',
                                    'Eight Port Glove Box (Two Sided x 4Glove Ports ) pic 4.png' => 'View 4'
                                ];
                                $base_img_path = 'img/Glove Box/Vacuum Glove Box – Metal Body/Eight Port Glove Box (Two Sided x 4Glove Ports) Main/';
                                
                                $index = 0;
                                foreach ($images as $img => $alt) {
                                    $active_class = $index === 0 ? 'active' : '';
                                    $img_src = asset($base_img_path . $img);
                                    echo "<div class='thumbnail $active_class' onclick='updateMainImage(this, \"$img_src\")'>
                                            <img src='$img_src' alt='Eight Port Glove Box Two Sided – $alt' loading='lazy'>
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

    <!-- DESIGNED FOR LARGE AND MULTI-STAGE PROCESSES -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Designed for Large and Multi-Stage Processes</h2>
                    <p class="lead-text">
                        Four glove ports on each side allow operators to reach different areas across the chamber’s length and depth. This arrangement reduces inaccessible spaces and supports the organized positioning of samples, instruments, tools and process materials.
                    </p>
                    <p class="lead-text">
                        The internal workspace can be divided into functional zones for material preparation, processing, assembly, testing and inspection. Depending on the chamber configuration and established operating procedure, the glove box can also support coordinated access by multiple users.
                    </p>
                    <p class="lead-text mb-0">
                        The Two-Sided Eight Port Glove Box is therefore well suited for processes that require more working space and accessibility than conventional two-port or four-port systems.
                    </p>
                </div>
                <div class="split-visual">
                    <i class="bi bi-diagram-3 icon-box"></i>
                    <h3>Expansive Internal Workspace</h3>
                    <p class="mb-0 mt-3" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6;">
                        Maximize operational capacity and multi-user coordination across a large, isolated environment built for complex laboratory and industrial applications.
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
                    <i class="bi bi-hand-index-thumb feature-icon"></i>
                    <span class="feature-text">Eight glove ports in total</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-align-middle feature-icon"></i>
                    <span class="feature-text">Four glove ports on each working side</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-symmetry-horizontal feature-icon"></i>
                    <span class="feature-text">Dual-sided access to an extended chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Strong stainless steel enclosure</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Clear viewing windows on both sides</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-lock-fill feature-icon"></i>
                    <span class="feature-text">Secure sealing for controlled operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Suitable for vacuum and inert-gas configurations</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-plugin feature-icon"></i>
                    <span class="feature-text">Provision for a compatible vacuum pump</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Pressure-monitoring and control options</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-arrow-left-right feature-icon"></i>
                    <span class="feature-text">Nitrogen or argon purging connections</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-stars feature-icon"></i>
                    <span class="feature-text">Smooth internal surfaces for convenient cleaning</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Custom chamber dimensions and glove spacing</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Optional material-transfer airlock</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Heavy-duty supporting structure</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-geo-alt feature-icon"></i>
                    <span class="feature-text">Manufactured in Chennai by Burhani Engineering Technology</span>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW DOES IT WORK? -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="section-title text-center">How Does the Eight-Port Glove Box Work?</h2>
                    
                    <div class="mt-5">
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <div class="step-number" style="width: 40px; height: 40px; font-size: 1rem; margin-bottom: 0;">01</div>
                            </div>
                            <div>
                                <h4 style="color: var(--bet-navy); font-size: 1.2rem; font-weight: 600;">Material Introduction & Handling</h4>
                                <p class="lead-text text-muted">Samples, components and process materials are placed inside the enclosed working chamber directly or through an optional material-transfer airlock. Operators access the internal workspace using the four glove ports provided on each side while the chamber remains isolated from the external environment.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <div class="step-number" style="width: 40px; height: 40px; font-size: 1rem; margin-bottom: 0;">02</div>
                            </div>
                            <div>
                                <h4 style="color: var(--bet-navy); font-size: 1.2rem; font-weight: 600;">Atmosphere Control</h4>
                                <p class="lead-text text-muted">For vacuum applications, a compatible pump removes air from the chamber to establish the required reduced-pressure condition. For inert-atmosphere processing, the system can be configured for purging with nitrogen, argon or another compatible process gas.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="me-3">
                                <div class="step-number" style="width: 40px; height: 40px; font-size: 1rem; margin-bottom: 0;">03</div>
                            </div>
                            <div>
                                <h4 style="color: var(--bet-navy); font-size: 1.2rem; font-weight: 600;">Process Monitoring</h4>
                                <p class="lead-text text-muted">Valves, vacuum gauges and optional digital instruments allow operators to establish and monitor the internal operating conditions. Actual vacuum performance and atmospheric quality depend on the chamber construction, sealing arrangement, pump capacity, gas-purging method and selected accessories.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STAINLESS STEEL & DUAL-SIDED VIEWING -->
    <section class="section-premium">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6 pe-lg-5">
                    <h2 class="section-title">Strong Stainless Steel Construction</h2>
                    <p class="lead-text">
                        The stainless steel enclosure provides the mechanical strength required for a large glove box while offering resistance to corrosion and regular industrial use. Smooth internal surfaces support easier cleaning and maintenance where process cleanliness is important.
                    </p>
                    <p class="lead-text text-muted">
                        The stainless steel grade, wall thickness, surface finish and chamber reinforcement can be selected according to the size and application. Final specifications should be determined based on the required operating vacuum, process materials, installed accessories and working environment.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h2 class="section-title">Clear Viewing and Dual-Sided Accessibility</h2>
                    <p class="lead-text">
                        Transparent viewing panels on both sides provide a clear view of samples, tools and internal process activities. Operators can observe material movement and coordinate work across the chamber without opening the enclosure.
                    </p>
                    <p class="lead-text text-muted">
                        Glove-port height, spacing and position can be customized according to the chamber dimensions and intended workflow. Suitable glove materials and sizes can also be selected based on flexibility, chemical compatibility and operating conditions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- TYPICAL APPLICATIONS & CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-7 pe-lg-5">
                    <h2 class="section-title">Typical Applications</h2>
                    <div class="app-grid mt-4">
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Pharmaceutical and chemical research</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Lithium-ion battery development</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Battery material preparation and assembly</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Electronics and semiconductor processing</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Moisture-sensitive material handling</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Powder processing and sample preparation</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Nitrogen or argon atmosphere experiments</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Material science and nanotechnology research</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Controlled assembly of long components</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Vacuum testing and process development</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Prototype manufacturing and inspection</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Multi-stage laboratory operations</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Research and development facilities</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Educational and institutional laboratories</div>
                        <div class="app-card"><i class="bi bi-check-circle-fill"></i> Specialized industrial production</div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="custom-box">
                        <h3 style="color: var(--bet-navy); font-size: 1.5rem; font-weight: 700; margin-bottom: 20px;">
                            Customization & Optional Accessories
                        </h3>
                        <p class="text-muted mb-4" style="font-size: 0.95rem;">
                            Accessories are selected according to chamber volume, target vacuum range, process gas, material properties and workflow:
                        </p>
                        <ul class="custom-list">
                            <li><i class="bi bi-plus-circle"></i> Rotary-vane or dry vacuum pump</li>
                            <li><i class="bi bi-plus-circle"></i> Vacuum or compound pressure gauge</li>
                            <li><i class="bi bi-plus-circle"></i> Digital pressure and vacuum display</li>
                            <li><i class="bi bi-plus-circle"></i> Vacuum-control and isolation valves</li>
                            <li><i class="bi bi-plus-circle"></i> Inert gas inlet and outlet connections</li>
                            <li><i class="bi bi-plus-circle"></i> Material-transfer chamber or airlock</li>
                            <li><i class="bi bi-plus-circle"></i> Viewing windows on both working sides</li>
                            <li><i class="bi bi-plus-circle"></i> Internal LED lighting</li>
                            <li><i class="bi bi-plus-circle"></i> Electrical and instrumentation feedthroughs</li>
                            <li><i class="bi bi-plus-circle"></i> Additional vacuum and utility ports</li>
                            <li><i class="bi bi-plus-circle"></i> Gas-purification system connections</li>
                            <li><i class="bi bi-plus-circle"></i> Internal shelves or working platforms</li>
                            <li><i class="bi bi-plus-circle"></i> Application-compatible glove materials</li>
                            <li><i class="bi bi-plus-circle"></i> Heavy-duty support frame</li>
                            <li><i class="bi bi-plus-circle"></i> Process-specific control panel</li>
                            <li><i class="bi bi-plus-circle"></i> Customized chamber dimensions</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12">
                    <div class="p-4" style="background: white; border-radius: 8px; border-left: 4px solid var(--bet-cyan); box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h3 style="color: var(--bet-navy); font-size: 1.4rem; font-weight: 700; margin-bottom: 15px;">Operational Flexibility</h3>
                        <p class="mb-2 text-muted">The large chamber and dual-sided access make it possible to organize tools and materials across several working areas. Separate zones can be assigned for receiving, processing, inspection and finished components, helping create a more structured workflow.</p>
                        <p class="mb-0 text-muted">When multiple operators use the chamber, a documented operating procedure should be followed to coordinate hand movement, material transfer and tool placement inside the shared enclosure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE BET & FAQ -->
    <section class="section-premium">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title text-center">Why Choose Burhani Engineering Technology?</h2>
                    <p class="lead-text mx-auto" style="max-width: 800px;">
                        Burhani Engineering Technology manufactures vacuum glove boxes, stainless steel vacuum chambers and customized controlled-atmosphere systems in Chennai, Tamil Nadu, India. We serve laboratories, research organizations, educational institutions and industrial customers throughout India.
                    </p>
                    <p class="lead-text mx-auto text-muted" style="max-width: 800px;">
                        Each system can be engineered according to the required chamber dimensions, eight-port layout, operating vacuum, process gas, material-transfer method and instrumentation. This application-focused approach helps ensure that the glove box matches the customer’s process and installation requirements.
                    </p>
                </div>
            </div>

            <h2 class="section-title text-center mt-5 mb-5">Frequently Asked Questions</h2>
            <div class="accordion faq-accordion mx-auto" id="faqAccordion" style="max-width: 900px;">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What is an eight-port two-sided glove box?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            It is an enclosed chamber with eight glove ports distributed across two working sides, normally with four glove ports on each side. It provides broad access to a large controlled workspace.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Why use four glove ports on each side?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Four ports on each side improve reach across an extended chamber and make it easier to access separate processing zones, long components and large assemblies.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Can multiple operators use the glove box?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The system can support coordinated access by multiple operators when permitted by the chamber design and operating procedure. Appropriate safety and process instructions should always be followed.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Can the system use nitrogen or argon?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. It can be configured with suitable gas inlet, outlet, purging and pressure-control connections for nitrogen, argon or another compatible gas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Can an airlock be added?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. A customized airlock can allow samples and tools to enter or leave the system while minimizing disturbance to the main chamber environment.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            Who manufactures eight-port glove boxes in India?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Burhani Engineering Technology manufactures customized two-sided eight-port glove boxes in Chennai, India, for laboratory, research and industrial applications.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM CTA -->
    <div class="container">
        <div class="bottom-cta">
            <h2>Need a Custom Eight Port Glove Box Two Sided?</h2>
            <p>Contact Burhani Engineering Technology for a customized Eight Port Glove Box Two Sided with Four Glove Ports on Each Side. Share your chamber dimensions, operating conditions, process gas, application and preferred accessories to receive a suitable technical configuration.</p>
            <a href="#contact" class="btn btn-premium text-decoration-none bg-white text-dark">REQUEST A QUOTE</a>
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


