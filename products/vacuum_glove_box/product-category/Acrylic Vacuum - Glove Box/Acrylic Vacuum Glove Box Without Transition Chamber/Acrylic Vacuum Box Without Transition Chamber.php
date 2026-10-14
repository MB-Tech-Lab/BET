<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Acrylic Vacuum Box Without Transition Chamber in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Acrylic Vacuum Box Without Transition Chamber available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/acrylic-vacuum-glove-box-without-transition-chamber.php');
} else {
    $meta_title = "Acrylic Vacuum Box Without Transition Chamber | Transparent Controlled Environment System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Acrylic Vacuum Boxes Without Transition Chambers providing transparent acrylic construction, customizable thickness, dual glove ports, SS or brass fittings, vacuum/gas connections, multiple sizes and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/acrylic-vacuum-glove-box-without-transition-chamber.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Acrylic Vacuum Box Without Transition Chamber</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Acrylic Vacuum Box Without Transition Chamber</h1>
                    <p class="subtitle">Transparent Controlled Environment System for Laboratory and Industrial Applications</p>
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
                        Burhani Engineering Technology designs and manufactures high-quality <strong>Acrylic Vacuum Boxes Without Transition Chambers</strong> for laboratory, research, pharmaceutical, electronics, material science, university and industrial R&D applications worldwide.
                    </p>
                    <p class="lead-text">
                        Designed for applications where a separate transfer or transition chamber is not required, this system provides a spacious, transparent and enclosed working environment for controlled material handling, gas displacement and contamination-sensitive processes.
                    </p>
                    <p class="lead-text">
                        The chamber is manufactured from high-transparency acrylic, allowing clear observation of samples, instruments and processes from multiple viewing angles. Integrated glove ports enable operators to handle materials inside the chamber while maintaining separation between the internal working environment and surrounding atmosphere.
                    </p>
                    <p class="lead-text">
                        The standard BET-GS-A series is manufactured using 6 mm acrylic chamber construction, while custom acrylic thicknesses can also be provided according to chamber size, structural requirements, operating conditions and customer specifications.
                    </p>
                    <p class="lead-text mb-0">
                        The system can be supplied with suitable vacuum and gas connections for evacuation, nitrogen purging, argon purging and controlled gas displacement according to the intended application.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Acrylic Vacuum Glove Box Without Transition Chamber/Acrylic Vacuum Glove Box Without Transition Chamber Main 1.png'); ?>" alt="Acrylic Vacuum Box Without Transition Chamber" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Acrylic Vacuum Glove Box Without Transition Chamber Main 1.png',
                                    'Acrylic Vacuum Glove Box Without Transition Chamber  2.png',
                                    'Acrylic Vacuum Glove Box Without Transition Chamber 3.png',
                                    'Acrylic Vacuum Glove Box Without Transition Chamber  4.png',
                                    'Acrylic Vacuum Glove Box Without Transition Chamber  5.png',
                                    'Acrylic Vacuum Glove Box Without Transition Chamber  6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Acrylic Vacuum Glove Box Without Transition Chamber/';
                                
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
                    <i class="bi bi-rulers feature-icon"></i>
                    <span class="feature-text">6 mm standard acrylic thickness with customization options</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-x-circle feature-icon"></i>
                    <span class="feature-text">Without transition chamber for compact, economical design</span>
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
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Vacuum / gas connection support</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">SS 304 or brass fitting options</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-plug feature-icon"></i>
                    <span class="feature-text">Electrical feedthrough provision available</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Dustproof sealed working environment</span>
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
                        The chamber is manufactured from premium clear acrylic for excellent internal visibility. Operators can continuously monitor samples, instruments and working processes without opening the enclosure.
                    </p>
                    <p class="lead-text mb-0">
                        The transparent construction is particularly valuable for laboratory research, educational applications, process observation and operations requiring accurate visual monitoring.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">6 mm Standard Acrylic Thickness – Customizable Construction</h3>
                    <p class="lead-text">
                        The standard BET-GS-A models use 6 mm acrylic chamber thickness.
                    </p>
                    <p class="lead-text">
                        However, Burhani Engineering Technology can also manufacture the chamber using a customized acrylic thickness based on the customer's project requirements. Acrylic thickness selection can depend on:
                    </p>
                    <p class="lead-text mb-0">
                        <strong>Chamber dimensions | Structural rigidity | Operating conditions | Process requirement | Equipment integration | Customer specification</strong>
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Without Transition Chamber</h3>
                    <p class="lead-text">
                        This model is specifically designed without a transition box or antechamber, providing a straightforward enclosed working system.
                    </p>
                    <p class="lead-text mb-0">
                        Removing the transition chamber makes the overall equipment more compact and can reduce system complexity where frequent transfer under preserved atmosphere is not required. Materials, instruments and samples can instead be introduced through the side access door before the required internal environment is established.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Dual Ergonomic Glove Ports</h3>
                    <p class="lead-text">
                        Two integrated glove ports provide comfortable access to the internal working area. Flexible gloves enable operators to manipulate samples, tools, components and process materials while the chamber remains closed.
                    </p>
                    <p class="lead-text mb-0">
                        Depending on the selected model, the standard flange diameter is approximately <strong>165 mm or 200 mm</strong> to provide convenient operator access for different chamber sizes.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Side Access Door</h3>
                    <p class="lead-text">
                        A transparent acrylic side access door provides convenient loading and unloading of materials, samples and equipment. Standard door sizes include:
                    </p>
                    <ul class="lead-text" style="margin-bottom: 0;">
                        <li>260 × 260 mm</li>
                        <li>300 × 350 mm</li>
                        <li>400 × 400 mm</li>
                    </ul>
                    <p class="lead-text mb-0">
                        The door configuration can also be customized according to project requirements.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Vacuum / Gas Connection</h3>
                    <p class="lead-text">
                        The Acrylic Vacuum Box can be provided with suitable ports for connection to an external vacuum system or compatible gas supply.
                    </p>
                    <p class="lead-text mb-0">
                        <strong>Vacuum evacuation | Nitrogen purging | Argon purging | Gas displacement | Controlled atmosphere preparation</strong>
                    </p>
                    <p class="lead-text mb-0">
                        The exact operating procedure and vacuum level should be selected according to the supplied chamber configuration and intended process.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">SS 304 or Brass Fitting Options</h3>
                    <p class="lead-text">
                        Burhani Engineering Technology provides customers with the option to select SS 304 stainless steel fittings or brass fittings for compatible valves, vacuum lines and gas connections.
                    </p>
                    <p class="lead-text">
                        The preferred material can be chosen depending on:
                    </p>
                    <p class="lead-text mb-0">
                        <strong>Process compatibility | Corrosion resistance | Operating environment | Customer preference | Project requirement</strong>
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Electrical Feedthrough Provision</h3>
                    <p class="lead-text mb-0">
                        Depending on customer requirements, an electrical feedthrough or internal power provision can be incorporated into the chamber to support suitable electrical instruments or devices required during operation. This helps reduce unnecessary cable routing through chamber openings and creates a cleaner internal working setup.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Dustproof Sealed Working Environment</h3>
                    <p class="lead-text mb-0">
                        The enclosed acrylic chamber helps isolate samples and process materials from surrounding dust and environmental contamination. When integrated with appropriate gas-handling equipment, the chamber can also support gas displacement and controlled-atmosphere applications.
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
                            <th>Acrylic Chamber Thickness</th>
                            <th>Side Door Size (mm)</th>
                            <th>Flange Port</th>
                            <th>Transition Box</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BET-GS-001-A</td>
                            <td>300 × 400 × 500</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>260 × 260</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-002-A</td>
                            <td>700 × 450 × 550</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-003-A</td>
                            <td>800 × 550 × 600</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-004-A</td>
                            <td>900 × 500 × 500</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>300 × 350</td>
                            <td>165 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-005-A</td>
                            <td>900 × 600 × 700</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-006-A</td>
                            <td>1000 × 750 × 700</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>BET-GS-008-A</td>
                            <td>1200 × 800 × 700</td>
                            <td>6 mm Standard / Customizable</td>
                            <td>400 × 400</td>
                            <td>200 mm</td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="custom-box">
                        <h4 style="color: var(--bet-navy); margin-bottom: 20px;">General Specifications</h4>
                        <ul class="custom-list">
                            <li><i class="bi bi-check-circle"></i> Chamber Material: High-Transparency Acrylic</li>
                            <li><i class="bi bi-check-circle"></i> Standard Chamber Thickness: 6 mm</li>
                            <li><i class="bi bi-check-circle"></i> Custom Acrylic Thickness: Available according to requirement</li>
                            <li><i class="bi bi-check-circle"></i> Glove Ports: Dual sealed glove ports</li>
                            <li><i class="bi bi-check-circle"></i> Flange Port: 165 mm / 200 mm</li>
                            <li><i class="bi bi-check-circle"></i> Side Access Door: Model dependent / customizable</li>
                            <li><i class="bi bi-check-circle"></i> Transition Chamber: Not provided</li>
                            <li><i class="bi bi-check-circle"></i> Fitting Material: SS 304 Stainless Steel / Brass</li>
                            <li><i class="bi bi-check-circle"></i> Vacuum / Gas Connections: Available</li>
                            <li><i class="bi bi-check-circle"></i> Electrical Feedthrough: Available according to configuration</li>
                            <li><i class="bi bi-check-circle"></i> Custom Chamber Sizes: Available</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <p class="lead-text mt-4 mb-0" style="font-style: italic;">
                Final chamber thickness, fitting material, operating vacuum conditions and accessories should be selected according to the intended application and system configuration.
            </p>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Acrylic Vacuum Box Without Transition Chamber is suitable for a wide range of applications. The absence of a transition chamber makes this configuration particularly suitable for applications where materials can be loaded before the working atmosphere is established and frequent material transfer during operation is not necessary.
            </p>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-flask"></i> Laboratory Research</div>
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical R&D</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material Science</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics Handling</div>
                <div class="app-card"><i class="bi bi-battery-charging"></i> Battery Research</div>
                <div class="app-card"><i class="bi bi-droplet"></i> Chemical Research</div>
                <div class="app-card"><i class="bi bi-box"></i> Powder Handling</div>
                <div class="app-card"><i class="bi bi-collection"></i> Sample Preparation</div>
                <div class="app-card"><i class="bi bi-shield-check"></i> Sensitive Component Handling</div>
                <div class="app-card"><i class="bi bi-wind"></i> Nitrogen Purging</div>
                <div class="app-card"><i class="bi bi-cloud"></i> Argon Purging</div>
                <div class="app-card"><i class="bi bi-gear"></i> Controlled Atmosphere Experiments</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> University Laboratories</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Quality Control</div>
                <div class="app-card"><i class="bi bi-building"></i> Industrial R&D</div>
                <div class="app-card"><i class="bi bi-dust"></i> Dust-Sensitive Processes</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Multiple Standard Sizes & Custom Engineering</h2>
            <p class="lead-text">
                The BET-GS-A series is available in multiple standard sizes, allowing customers to select a chamber according to workspace, sample dimensions and internal equipment requirements.
            </p>
            <p class="lead-text mb-0">
                For specialized projects, Burhani Engineering Technology can also customize:
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-rulers"></i> Chamber dimensions</li>
                    <li><i class="bi bi-aspect-ratio"></i> Acrylic thickness</li>
                    <li><i class="bi bi-circle"></i> Number and position of glove ports</li>
                    <li><i class="bi bi-arrows-angle-expand"></i> Flange dimensions</li>
                    <li><i class="bi bi-door-open"></i> Side access door</li>
                    <li><i class="bi bi-plug"></i> Vacuum connections</li>
                    <li><i class="bi bi-wind"></i> Gas connections</li>
                    <li><i class="bi bi-tools"></i> SS or brass fittings</li>
                    <li><i class="bi bi-lightning"></i> Electrical feedthroughs</li>
                    <li><i class="bi bi-speedometer"></i> Instrumentation provisions</li>
                    <li><i class="bi bi-plus-circle"></i> Additional accessories</li>
                </ul>
            </div>
            
            <p class="lead-text mt-4 mb-0">
                This allows the glove box to be engineered around the process rather than requiring the customer's process to fit a fixed standard chamber.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="section-premium">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Why Choose Burhani Engineering Technology?</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology focuses on providing practical, customizable and dependable pressure, vacuum and controlled-environment equipment for laboratory and industrial applications.
                    </p>
                    <p class="lead-text mb-0">
                        Our Acrylic Vacuum Box Without Transition Chamber offers a combination of:
                    </p>
                    <p class="lead-text mt-3 mb-0">
                        <strong>Crystal-clear visibility | 6 mm standard acrylic with customizable thickness | Dual glove access | Multiple standard sizes | SS or brass fitting options | Vacuum and gas connections | Side material access | Custom engineering capability</strong>
                    </p>
                    <p class="lead-text mt-4 mb-0">
                        Whether you require a compact laboratory glove box or a larger customized acrylic enclosure, our team can develop an appropriate configuration according to your project requirements.
                    </p>
                </div>
                <div class="split-visual">
                    <i class="bi bi-award icon-box"></i>
                    <h3>Quality & Reliability</h3>
                    <p class="mb-0 mt-3" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6;">
                        Engineered for dependable performance with customizable configurations to meet your specific laboratory and industrial requirements.
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
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Acrylic Vacuum Glove Box Without Transition Chamber/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
                        <i class="bi bi-file-earmark-pdf me-2"></i> Download PDF
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Worldwide Supply & Delivery</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology supplies Acrylic Vacuum Boxes Without Transition Chambers to customers worldwide, supporting laboratories, universities, research institutions, pharmaceutical facilities, electronics industries, engineering organizations and industrial users across international markets.
                    </p>
                    <p class="lead-text mb-0">
                        From technical consultation and model selection through customization, manufacturing, inspection, packing and dispatch, our focus is on dependable engineering, consistent product quality and customer satisfaction.
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
                <p>Interested in the Acrylic Vacuum Box Without Transition Chamber? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>

