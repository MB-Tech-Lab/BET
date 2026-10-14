<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Controlled Atmosphere Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Controlled Atmosphere Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/controlled-atmosphere-acrylic-glove-box.php');
} else {
    $meta_title = "Controlled Atmosphere Acrylic Glove Box | BET-MT011-C | Precision Controlled Environment System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Controlled Atmosphere Acrylic Glove Boxes (BET-MT011-C) providing clear acrylic construction, dual glove ports, integrated antechamber, nitrogen or argon atmosphere options, SS or brass fittings, custom sizes and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/controlled-atmosphere-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Controlled Atmosphere Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Controlled Atmosphere Acrylic Glove Box</h1>
                    <p class="subtitle">BET-MT011-C - Precision Controlled Environment System</p>
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
                        The <strong>BET-MT011-C Controlled Atmosphere Acrylic Glove Box</strong> manufactured by Burhani Engineering Technology is a precision-engineered enclosed workstation designed for laboratories, research centres, universities, pharmaceutical facilities, electronics industries, material science laboratories and industrial R&D applications that require a stable and protected working environment.
                    </p>
                    <p class="lead-text">
                        The system combines a high-transparency acrylic chamber, glove access, gas-control provisions, pressure monitoring and an integrated transition chamber to provide reliable handling of oxygen-sensitive, moisture-sensitive and contamination-sensitive materials.
                    </p>
                    <p class="lead-text">
                        The BET-MT011-C is designed to help isolate sensitive processes from normal room conditions while providing excellent visibility of the complete working area. Depending on the application, the chamber can be operated with suitable gases such as nitrogen or argon to create a controlled internal atmosphere for research, handling, testing and material preparation.
                    </p>
                    <p class="lead-text mb-0">
                        Its transparent construction allows researchers and operators to clearly observe samples, components and instruments from multiple angles while using the integrated glove ports for safe internal manipulation. This makes the equipment ideal for processes that require better environmental control than ordinary open laboratory working conditions.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Controlled Atmosphere Glove Box/Controlled Atmosphere Glove Box Main 1.png'); ?>" alt="Controlled Atmosphere Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Controlled Atmosphere Glove Box Main 1.png',
                                    'Controlled Atmosphere Glove Box 2.png',
                                    'Controlled Atmosphere Glove Box 3.png',
                                    'Controlled Atmosphere Glove Box 4.png',
                                    'Controlled Atmosphere Glove Box 5.png',
                                    'Controlled Atmosphere Glove Box 6.png',
                                    'Controlled Atmosphere Glove Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Controlled Atmosphere Glove Box/';
                                
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
                    <span class="feature-text">Controlled Atmosphere Operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Integrated Transition Chamber / Antechamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gauge feature-icon"></i>
                    <span class="feature-text">Pressure Monitoring and Process Control</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Ergonomic Dual Glove Ports</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">SS 304 or Brass Fitting Options</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Customizable Acrylic Thickness</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-rulers feature-icon"></i>
                    <span class="feature-text">Standard and Custom Chamber Sizes</span>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILED FEATURES -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Detailed Features</h2>
            
            <div class="row gy-4">
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">High-Transparency Acrylic Chamber</h3>
                    <p class="lead-text">
                        The primary working chamber is manufactured using premium clear acrylic, providing excellent optical visibility and a clean professional appearance.
                    </p>
                    <p class="lead-text">
                        The transparent design enables operators to monitor internal operations continuously without opening the chamber and unnecessarily disturbing the controlled atmosphere. This is particularly valuable during sensitive laboratory procedures, component assembly, sample preparation and materials research.
                    </p>
                    <p class="lead-text mb-0">
                        The acrylic chamber thickness can be customized according to chamber dimensions, structural requirements, operating conditions and customer specifications. Burhani Engineering Technology can manufacture different chamber sizes and configurations depending on the intended application.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Controlled Atmosphere Operation</h3>
                    <p class="lead-text">
                        The glove box is designed to support a controlled internal atmosphere using suitable process gases.
                    </p>
                    <p class="lead-text mb-0">
                        Depending on the process requirement, the chamber can be configured for: <strong>Nitrogen Purging | Argon Purging | Inert Gas Handling | Reduced Oxygen Operation | Low-Humidity Processes | Controlled Sample Handling</strong>
                    </p>
                    <p class="lead-text mb-0">
                        The gas inlet and outlet arrangement allows the original atmosphere within the enclosure to be progressively replaced with the required process gas. The final oxygen and humidity conditions achieved depend on factors including gas purity, purge flow rate, chamber sealing, operating procedure, chamber volume and material-transfer frequency.
                    </p>
                    <p class="lead-text mb-0">
                        Optional atmospheric monitoring equipment can also be integrated for applications requiring quantitative control.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Integrated Transition Chamber / Antechamber</h3>
                    <p class="lead-text">
                        The system incorporates a side-mounted transition chamber, also commonly known as an antechamber, load-lock or transfer chamber.
                    </p>
                    <p class="lead-text">
                        This allows samples, tools and materials to be introduced into or removed from the primary glove box while helping minimize disturbance to the atmosphere inside the main chamber.
                    </p>
                    <p class="lead-text mb-0">
                        Before opening the inner transfer door, the transition chamber can be conditioned according to the selected process arrangement. This feature is particularly useful for laboratories that need to transfer materials frequently while maintaining greater atmospheric stability inside the main glove box.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Pressure Monitoring and Process Control</h3>
                    <p class="lead-text">
                        Integrated pressure-monitoring provisions allow operators to observe chamber conditions during operation.
                    </p>
                    <p class="lead-text mb-0">
                        Depending on configuration, the system can be supplied with suitable: <strong>Pressure Gauges | Gas Flow Controls | Oxygen Monitoring | Humidity Monitoring | Temperature Monitoring | Additional Process Instrumentation</strong>
                    </p>
                    <p class="lead-text mb-0">
                        This provides greater process visibility and allows the system to be adapted for more demanding laboratory and industrial research applications.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Ergonomic Dual Glove Ports</h3>
                    <p class="lead-text">
                        The Controlled Atmosphere Acrylic Glove Box incorporates two sealed glove ports positioned for convenient access to the internal workspace.
                    </p>
                    <p class="lead-text mb-0">
                        Flexible protective gloves allow operators to manipulate samples, tools, laboratory equipment and process materials while maintaining physical separation from the chamber environment. Glove material, port diameter and positioning can be customized according to chamber dimensions and application requirements.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">SS 304 or Brass Fitting Options</h3>
                    <p class="lead-text">
                        Burhani Engineering Technology provides customers with the choice of SS 304 stainless steel fittings or brass fittings, depending on process compatibility and customer preference.
                    </p>
                    <p class="lead-text mb-0">
                        Compatible fittings may include: <strong>Gas Inlet Connections | Outlet Connections | Vacuum Connections | Valves | Pressure Connections | Process Fittings</strong>
                    </p>
                    <p class="lead-text mb-0">
                        This flexibility allows customers to select a configuration appropriate for their laboratory or industrial operating conditions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SPECIFICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Technical Configuration</h2>
            
            <div class="table-responsive">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th>Configuration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product Name</td>
                            <td>Controlled Atmosphere Acrylic Glove Box</td>
                        </tr>
                        <tr>
                            <td>Model No.</td>
                            <td>BET-MT011-C</td>
                        </tr>
                        <tr>
                            <td>Chamber Material</td>
                            <td>High-Transparency Acrylic</td>
                        </tr>
                        <tr>
                            <td>Atmosphere Type</td>
                            <td>Controlled / Inert Atmosphere</td>
                        </tr>
                        <tr>
                            <td>Compatible Gas Options</td>
                            <td>Nitrogen / Argon / Other Compatible Gas</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Dual Sealed Glove Ports</td>
                        </tr>
                        <tr>
                            <td>Transition Chamber</td>
                            <td>Integrated Side Antechamber</td>
                        </tr>
                        <tr>
                            <td>Pressure Monitoring</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>Gas Connections</td>
                            <td>Inlet / Outlet Provision</td>
                        </tr>
                        <tr>
                            <td>Fitting Options</td>
                            <td>SS 304 Stainless Steel / Brass</td>
                        </tr>
                        <tr>
                            <td>Acrylic Thickness</td>
                            <td>Customizable according to chamber size and application</td>
                        </tr>
                        <tr>
                            <td>Chamber Dimensions</td>
                            <td>Standard and Custom Sizes Available</td>
                        </tr>
                        <tr>
                            <td>Monitoring Options</td>
                            <td>Oxygen / Humidity / Temperature / Pressure as required</td>
                        </tr>
                        <tr>
                            <td>Custom Configuration</td>
                            <td>Available according to customer application</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="lead-text mt-4 mb-0" style="font-style: italic;">
                Final dimensions, acrylic thickness, instrumentation, valves, fittings and operating configuration can be customized according to the customer's technical requirements.
            </p>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Controlled Atmosphere Acrylic Glove Box is suitable for a wide range of research, laboratory and industrial applications. The system is especially useful wherever samples or components may be affected by exposure to oxygen, moisture, dust or uncontrolled room atmosphere.
            </p>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-battery-charging"></i> Battery Research</div>
                <div class="app-card"><i class="bi bi-lightning"></i> Lithium-Ion Battery Development</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material Science</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics Handling</div>
                <div class="app-card"><i class="bi bi-circuit-board"></i> Semiconductor Research</div>
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical R&D</div>
                <div class="app-card"><i class="bi bi-flask"></i> Chemical Research</div>
                <div class="app-card"><i class="bi bi-box"></i> Powder Handling</div>
                <div class="app-card"><i class="bi bi-collection"></i> Sample Preparation</div>
                <div class="app-card"><i class="bi bi-tools"></i> Sensitive Component Assembly</div>
                <div class="app-card"><i class="bi bi-shield"></i> Oxygen-Sensitive Material Handling</div>
                <div class="app-card"><i class="bi bi-droplet"></i> Moisture-Sensitive Material Handling</div>
                <div class="app-card"><i class="bi bi-gear"></i> Controlled Atmosphere Experiments</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Quality Control</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> University Laboratories</div>
                <div class="app-card"><i class="bi bi-building"></i> Industrial R&D</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Customized Controlled Atmosphere Glove Box Solutions</h2>
            <p class="lead-text">
                Different processes require different chamber dimensions and environmental configurations. For this reason, Burhani Engineering Technology offers customized Controlled Atmosphere Acrylic Glove Boxes according to individual project requirements.
            </p>
            <p class="lead-text mb-0">
                Customization options can include:
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-rulers"></i> Custom Chamber Dimensions</li>
                    <li><i class="bi bi-aspect-ratio"></i> Acrylic Thickness</li>
                    <li><i class="bi bi-circle"></i> Glove Port Quantity</li>
                    <li><i class="bi bi-arrows-angle-expand"></i> Glove Port Position</li>
                    <li><i class="bi bi-box-seam"></i> Transition Chamber Size</li>
                    <li><i class="bi bi-wind"></i> Gas Inlet / Outlet Arrangement</li>
                    <li><i class="bi bi-tools"></i> SS or Brass Fittings</li>
                    <li><i class="bi bi-gauge"></i> Pressure Monitoring</li>
                    <li><i class="bi bi-activity"></i> Oxygen Monitoring</li>
                    <li><i class="bi bi-droplet"></i> Humidity Monitoring</li>
                    <li><i class="bi bi-lightning"></i> Electrical Feedthroughs</li>
                    <li><i class="bi bi-plus-circle"></i> Additional Process Accessories</li>
                </ul>
            </div>
            
            <p class="lead-text mt-4 mb-0">
                This allows customers to obtain a glove box engineered around their process instead of adapting their work to a fixed standard configuration.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Worldwide Manufacturing, Supply & Delivery</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology manufactures and supplies Controlled Atmosphere Acrylic Glove Boxes for customers across India and international markets.
                    </p>
                    <p class="lead-text">
                        Our equipment is suitable for research laboratories, universities, pharmaceutical companies, electronics industries, material science laboratories, battery-development facilities, engineering organizations and industrial R&D centres worldwide.
                    </p>
                    <p class="lead-text mb-0">
                        From initial technical consultation and configuration selection through customization, manufacturing, inspection, professional packing and dispatch, our focus remains on providing dependable engineering solutions and long-term customer satisfaction.
                    </p>
                    <p class="lead-text mt-4 mb-0" style="font-weight: 700; color: var(--bet-navy);">
                        We Deliver Engineering Quality, Satisfaction & Trust Around the World.
                    </p>
                </div>
                <div class="split-visual">
                    <i class="bi bi-globe icon-box"></i>
                    <h3>Global Delivery</h3>
                    <p class="mb-0 mt-3" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6;">
                        Shipping to laboratories and industrial facilities worldwide with professional packaging and reliable logistics partners.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CATALOGUE DOWNLOAD -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Download Catalogue</h2>
                    <p class="lead-text">
                        Get detailed technical specifications, model configurations, and customization options in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Controlled Atmosphere Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Controlled Atmosphere Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>