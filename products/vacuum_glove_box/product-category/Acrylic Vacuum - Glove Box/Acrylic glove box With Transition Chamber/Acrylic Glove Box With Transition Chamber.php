<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Acrylic Glove Box With Transition Chamber in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Acrylic Glove Box With Transition Chamber available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/acrylic-glove-box-with-transition-chamber.php');
} else {
    $meta_title = "Acrylic Glove Box With Transition Chamber | Controlled Environment & Vacuum Transfer System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Acrylic Glove Boxes With Transition Chambers providing vacuum transfer chambers, customizable acrylic thickness, pressure monitoring, and worldwide delivery for laboratory and industrial applications.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/acrylic-glove-box-with-transition-chamber.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Acrylic Glove Box With Transition Chamber</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Acrylic Glove Box With Transition Chamber</h1>
                    <p class="subtitle">Controlled Environment & Vacuum Transfer System for Laboratory and Industrial Applications</p>
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
                        Burhani Engineering Technology designs and manufactures high-quality <strong>Acrylic Glove Boxes With Transition Chambers</strong> for laboratories, research institutions, universities, pharmaceutical facilities, electronics industries, material science laboratories and industrial R&D applications worldwide.
                    </p>
                    <p class="lead-text">
                        This system combines a highly transparent acrylic working chamber with an integrated vacuum transition chamber, allowing samples, tools and materials to be introduced or removed while minimizing disturbance to the main controlled environment.
                    </p>
                    <p class="lead-text">
                        The transparent construction provides excellent internal visibility, while sealed glove ports allow operators to safely manipulate materials without directly opening the main chamber. The integrated transition chamber provides a convenient transfer area that can be evacuated and gas-purged according to the application, helping maintain controlled atmospheric conditions inside the primary glove box.
                    </p>
                    <p class="lead-text">
                        Depending on model and chamber dimensions, the main chamber is supplied with 6 mm or 10 mm acrylic as standard, while the acrylic chamber thickness can be customized according to customer requirements, chamber dimensions, structural requirements and intended application. The transition chamber is supplied with approximately 20 mm acrylic construction as standard, with customized configurations available where technically appropriate.
                    </p>
                    <p class="lead-text mb-0">
                        Burhani Engineering Technology also offers the flexibility to choose <strong>SS 304 stainless steel fittings or brass fittings</strong>, depending on customer preference and process compatibility.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Acrylic glove box With Transition Chamber/Acrylic glove box With Transition Chamber Main 1.png'); ?>" alt="Acrylic Glove Box With Transition Chamber" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Acrylic glove box With Transition Chamber Main 1.png',
                                    'Acrylic glove box With Transition Chamber 2.png',
                                    'Acrylic glove box With Transition Chamber 3.png',
                                    'Acrylic glove box With Transition Chamber 4.png',
                                    'Acrylic glove box With Transition Chamber 5.png',
                                    'Acrylic glove box With Transition Chamber 6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Acrylic glove box With Transition Chamber/';
                                
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
                    <span class="feature-text">High-Transparency Acrylic Chamber for excellent visibility</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Integrated 240 × 240 × 240 mm vacuum transition chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Vacuum capability up to approximately -0.1 MPa</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gauge feature-icon"></i>
                    <span class="feature-text">Integrated pressure monitoring system</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual ergonomic glove ports (165 mm / 200 mm)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Transparent side access door for loading</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">SS 304 or brass fittings available</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Vacuum / gas purging connections</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Customizable acrylic thickness (6 mm / 10 mm standard)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-rulers feature-icon"></i>
                    <span class="feature-text">Multiple chamber sizes available</span>
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
                        The main glove box is manufactured from premium transparent acrylic, providing excellent visibility of samples, components, equipment and experimental processes from multiple viewing angles.
                    </p>
                    <p class="lead-text">
                        Standard chamber thickness is 6 mm for selected compact and medium models and 10 mm for larger configurations. However, the acrylic thickness is fully customizable according to chamber size, application and customer specifications.
                    </p>
                    <p class="lead-text mb-0">
                        This makes the system suitable for both standard laboratory requirements and larger customized installations.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Integrated Vacuum Transition Chamber</h3>
                    <p class="lead-text">
                        A major advantage of this model is the integrated 240 × 240 × 240 mm transition chamber, which enables materials to be transferred into or out of the glove box with reduced disturbance to the main chamber atmosphere.
                    </p>
                    <p class="lead-text">
                        The transition box is manufactured with approximately 20 mm acrylic thickness as standard and incorporates secure access doors, sealing arrangements, clamps, pressure monitoring and vacuum/gas connections.
                    </p>
                    <p class="lead-text mb-0">
                        This arrangement allows the transition chamber to be evacuated or purged before materials are transferred into the main working chamber.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Vacuum Capability Up to -0.1 MPa</h3>
                    <p class="lead-text">
                        The transition chamber configuration is designed for vacuum-assisted material transfer and can be configured to reach approximately -0.1 MPa, according to the specified model configuration and operating procedure.
                    </p>
                    <p class="lead-text mb-0">
                        Vacuum operation assists in removing atmospheric air from the transition chamber before gas replacement or sample transfer. Final operating limits should always be confirmed according to the supplied chamber configuration, fittings and intended application.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Pressure Monitoring System</h3>
                    <p class="lead-text">
                        An integrated pressure gauge provides clear monitoring of transition chamber pressure during evacuation, gas displacement and material-transfer operations.
                    </p>
                    <p class="lead-text mb-0">
                        This allows operators to observe pressure conditions before opening the transfer chamber into the main glove box.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Dual Ergonomic Glove Ports</h3>
                    <p class="lead-text">
                        Two front-mounted glove ports provide convenient access to the internal working area. The sealed gloves allow operators to handle samples, tools, components and laboratory materials while maintaining separation between the operator and the enclosed atmosphere.
                    </p>
                    <p class="lead-text mb-0">
                        Depending on the model, 165 mm or 200 mm flange ports are provided for comfortable handling and convenient access.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Side Access Door</h3>
                    <p class="lead-text">
                        A transparent side access door provides additional loading and unloading access when required. Standard door dimensions include:
                    </p>
                    <ul class="lead-text" style="margin-bottom: 0;">
                        <li>300 × 350 mm for smaller models</li>
                        <li>400 × 400 mm for larger models</li>
                    </ul>
                    <p class="lead-text mb-0">
                        Door dimensions can also be customized according to customer and application requirements.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">SS 304 or Brass Fittings</h3>
                    <p class="lead-text">
                        Customers can choose between SS 304 stainless steel fittings and brass fittings for compatible valves, vacuum connections, gas connections and associated components.
                    </p>
                    <p class="lead-text">
                        The selection can be made according to:
                    </p>
                    <p class="lead-text mb-0">
                        <strong>Process compatibility | Corrosion resistance | Operating environment | Customer preference | Project specification</strong>
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Vacuum / Gas Purging Connections</h3>
                    <p class="lead-text">
                        The Acrylic Glove Box With Transition Chamber can be connected to suitable external equipment for:
                    </p>
                    <p class="lead-text mb-0">
                        <strong>Vacuum evacuation | Nitrogen purging | Argon purging | Gas displacement | Controlled atmosphere operation</strong>
                    </p>
                    <p class="lead-text mb-0">
                        Nitrogen or argon can be introduced depending on the customer's process requirements and compatible operating conditions.
                    </p>
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
                            <th>Model</th>
                            <th>Chamber Size W × D × H (mm)</th>
                            <th>Main Chamber Thickness</th>
                            <th>Side Door Size (mm)</th>
                            <th>Flange Port</th>
                            <th>Transition Chamber (mm)</th>
                            <th>Transition Chamber Thickness</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BET-GS-002-B</td>
                            <td>700 × 450 × 550</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>240 × 240 × 240</td>
                            <td>20 mm</td>
                        </tr>
                        <tr>
                            <td>BET-GS-003-B</td>
                            <td>800 × 550 × 600</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>240 × 240 × 240</td>
                            <td>20 mm</td>
                        </tr>
                        <tr>
                            <td>BET-GS-004-B</td>
                            <td>900 × 500 × 500</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>240 × 240 × 240</td>
                            <td>20 mm</td>
                        </tr>
                        <tr>
                            <td>BET-GS-005-B</td>
                            <td>900 × 600 × 700</td>
                            <td>10 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>240 × 240 × 240</td>
                            <td>20 mm</td>
                        </tr>
                        <tr>
                            <td>BET-GS-006-B</td>
                            <td>1000 × 750 × 700</td>
                            <td>10 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>240 × 240 × 240</td>
                            <td>20 mm</td>
                        </tr>
                        <tr>
                            <td>BET-GS-008-B</td>
                            <td>1200 × 800 × 700</td>
                            <td>10 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>240 × 240 × 240</td>
                            <td>20 mm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="custom-box">
                        <h4 style="color: var(--bet-navy); margin-bottom: 20px;">General Specifications</h4>
                        <ul class="custom-list">
                            <li><i class="bi bi-check-circle"></i> Main Chamber Material: High-Transparency Acrylic</li>
                            <li><i class="bi bi-check-circle"></i> Standard Main Chamber Thickness: 6 mm / 10 mm depending on model</li>
                            <li><i class="bi bi-check-circle"></i> Custom Acrylic Thickness: Available according to requirement</li>
                            <li><i class="bi bi-check-circle"></i> Transition Chamber: 240 × 240 × 240 mm</li>
                            <li><i class="bi bi-check-circle"></i> Transition Chamber Thickness: 20 mm standard</li>
                            <li><i class="bi bi-check-circle"></i> Flange Port: 165 mm / 200 mm</li>
                            <li><i class="bi bi-check-circle"></i> Fitting Options: SS 304 Stainless Steel / Brass</li>
                            <li><i class="bi bi-check-circle"></i> Glove Ports: Dual sealed glove ports</li>
                            <li><i class="bi bi-check-circle"></i> Pressure Monitoring: Integrated gauge</li>
                            <li><i class="bi bi-check-circle"></i> Vacuum Capability: Up to approximately -0.1 MPa as specified</li>
                            <li><i class="bi bi-check-circle"></i> Custom Chamber Sizes: Available</li>
                            <li><i class="bi bi-check-circle"></i> Custom Configurations: Available according to application</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Acrylic Glove Box With Transition Chamber is suitable for a wide range of controlled-environment applications. The transition chamber is particularly beneficial where materials need to be regularly introduced or removed while minimizing exposure of the main chamber to the external environment.
            </p>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-flask"></i> Laboratory Research</div>
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical R&D</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material Science</div>
                <div class="app-card"><i class="bi bi-battery-charging"></i> Battery Research</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics Handling</div>
                <div class="app-card"><i class="bi bi-droplet"></i> Chemical Research</div>
                <div class="app-card"><i class="bi bi-collection"></i> Sample Preparation</div>
                <div class="app-card"><i class="bi bi-box"></i> Powder Handling</div>
                <div class="app-card"><i class="bi bi-shield-check"></i> Sensitive Material Transfer</div>
                <div class="app-card"><i class="bi bi-wind"></i> Nitrogen Purging</div>
                <div class="app-card"><i class="bi bi-cloud"></i> Argon Purging</div>
                <div class="app-card"><i class="bi bi-gear"></i> Controlled Atmosphere Experiments</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> University Research</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Quality Control</div>
                <div class="app-card"><i class="bi bi-building"></i> Industrial R&D</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Custom Acrylic Thickness & Chamber Configuration</h2>
            <p class="lead-text">
                Burhani Engineering Technology understands that different applications require different chamber dimensions and structural requirements. Therefore, the main acrylic chamber thickness is customizable instead of being restricted to only the standard 6 mm or 10 mm configuration.
            </p>
            <p class="lead-text mb-0">
                Customers can request customization of:
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-rulers"></i> Acrylic thickness</li>
                    <li><i class="bi bi-aspect-ratio"></i> Chamber size</li>
                    <li><i class="bi bi-circle"></i> Glove port size</li>
                    <li><i class="bi bi-door-open"></i> Door dimensions</li>
                    <li><i class="bi bi-box-seam"></i> Transition chamber configuration</li>
                    <li><i class="bi bi-tools"></i> SS or brass fittings</li>
                    <li><i class="bi bi-plug"></i> Vacuum connections</li>
                    <li><i class="bi bi-wind"></i> Gas connections</li>
                    <li><i class="bi bi-speedometer"></i> Instrumentation</li>
                    <li><i class="bi bi-plus-circle"></i> Additional accessories</li>
                </ul>
            </div>
            
            <p class="lead-text mt-4 mb-0">
                This enables the equipment to be engineered around the customer's process rather than forcing the application into a fixed standard design.
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
                        Get detailed technical specifications, model configurations, and customization options in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Acrylic glove box With Transition Chamber/Acrylic glove box With Transition Chamber Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
                        <i class="bi bi-file-earmark-pdf me-2"></i> Download PDF
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Worldwide Supply & Delivery</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology supplies Acrylic Glove Boxes With Transition Chambers to customers worldwide, supporting laboratories, universities, research organizations, pharmaceutical companies, electronics industries, engineering companies and industrial facilities across international markets.
                    </p>
                    <p class="lead-text mb-0">
                        From technical discussion and model selection to customization, manufacturing, inspection, packing and dispatch, our focus remains on dependable engineering and customer satisfaction.
                    </p>
                    <p class="lead-text mt-4 mb-0" style="font-weight: 700; color: var(--bet-navy);">
                        Engineering Precision. Delivering Quality, Satisfaction & Trust Worldwide.
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

    <!-- CONTACT CTA -->
    <section class="section-premium" id="contact">
        <div class="container">
            <div class="bottom-cta">
                <h2>Request a Quote</h2>
                <p>Interested in the Acrylic Glove Box With Transition Chamber? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>

