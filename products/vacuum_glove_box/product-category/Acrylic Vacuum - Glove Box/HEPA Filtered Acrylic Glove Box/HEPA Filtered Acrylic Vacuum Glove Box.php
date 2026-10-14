<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "HEPA Filtered Acrylic Vacuum Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance HEPA Filtered Acrylic Vacuum Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/hepa-filtered-acrylic-vacuum-glove-box.php');
} else {
    $meta_title = "HEPA Filtered Acrylic Vacuum Glove Box | BET-HEPAFGB-100 | Clean Environment System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of HEPA Filtered Acrylic Vacuum Glove Boxes (BET-HEPAFGB-100) providing clear acrylic construction, dual glove ports, HEPA filtration, custom dimensions and thickness options under and above 6 mm.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/hepa-filtered-acrylic-vacuum-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">HEPA Filtered Acrylic Vacuum Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>HEPA Filtered Acrylic Vacuum Glove Box</h1>
                    <p class="subtitle">BET-HEPAFGB-100 - Clean Environment System with HEPA Filtration</p>
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
                        The <strong>HEPA Filtered Acrylic Vacuum Glove Box (BET-HEPAFGB-100)</strong> by Burhani Engineering Technology is a professionally engineered controlled-environment enclosure designed for laboratories, pharmaceutical facilities, electronics industries, research institutions, R&D centres, universities, material testing laboratories and contamination-sensitive industrial processes.
                    </p>
                    <p class="lead-text">
                        Manufactured in Chennai, Tamil Nadu, India, the system combines a high-transparency acrylic chamber, integrated HEPA filtration arrangement, dual glove ports and secure access construction to provide a clean, enclosed and highly visible working environment.
                    </p>
                    <p class="lead-text">
                        The BET-HEPAFGB-100 is developed for applications where operators need to handle samples, materials, components or laboratory products inside an isolated workspace while minimizing direct interaction with the surrounding atmosphere. The transparent acrylic enclosure provides excellent visibility of the internal process, while the integrated top-mounted HEPA filtration housing supports cleaner air management within the chamber.
                    </p>
                    <p class="lead-text mb-0">
                        Burhani Engineering Technology manufactures acrylic glove boxes in Chennai for customers throughout India and international markets, with customization available for chamber dimensions, acrylic thickness, glove-port arrangements, access systems and application-specific configurations.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/HEPA Filtered Acrylic Glove Box/HEPA Filtered Acrylic Glove Box Main 1.png'); ?>" alt="HEPA Filtered Acrylic Vacuum Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'HEPA Filtered Acrylic Glove Box Main 1.png',
                                    'HEPA Filtered Acrylic Glove Box 2.png',
                                    'HEPA Filtered Acrylic Glove Box 3.png',
                                    'HEPA Filtered Acrylic Glove Box 4.png',
                                    'HEPA Filtered Acrylic Glove Box 5.png',
                                    'HEPA Filtered Acrylic Glove Box 6.png',
                                    'HEPA Filtered Acrylic Glove Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/HEPA Filtered Acrylic Glove Box/';
                                
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
                    <span class="feature-text">High-Transparency Acrylic Construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Integrated HEPA Filtration System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Glove Port Handling System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-closed feature-icon"></i>
                    <span class="feature-text">Secure Access Door and Clamping Arrangement</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-aspect-ratio feature-icon"></i>
                    <span class="feature-text">Customizable Acrylic Thickness (Under and Above 6 mm)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Custom Chamber Dimensions Available</span>
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
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">High-Transparency Acrylic Construction</h3>
                    <p class="lead-text">
                        The main working chamber is constructed using high-quality clear acrylic, allowing operators to observe internal operations from multiple directions. Transparent acrylic construction is particularly advantageous for laboratory and research applications because it provides excellent visibility without requiring the chamber to be opened during normal handling operations.
                    </p>
                    <p class="lead-text mb-0">
                        The clear acrylic structure also gives the equipment a clean and professional appearance suitable for modern laboratories, pharmaceutical facilities, electronics production environments, research centres and industrial quality-control departments. Burhani Engineering Technology can manufacture the chamber using acrylic thicknesses under and above 6 mm, depending on chamber dimensions, application requirements and customer specifications.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Integrated HEPA Filtration System</h3>
                    <p class="lead-text">
                        A major feature of the HEPA Filtered Acrylic Vacuum Glove Box is the integrated filtration housing mounted above the primary chamber. The HEPA filtration arrangement is designed to support a cleaner internal working environment by reducing airborne particulate contamination entering or circulating through the controlled workspace.
                    </p>
                    <p class="lead-text mb-0">
                        This makes the glove box suitable for processes involving sensitive samples, laboratory materials, electronics components, pharmaceutical handling, precision assemblies and contamination-conscious research applications. The filtration module is incorporated into the overall glove box construction while maintaining a compact and professional equipment profile.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Dual Glove Port Handling System</h3>
                    <p class="lead-text">
                        The system incorporates two glove ports with flexible protective gloves, allowing operators to manipulate products and equipment inside the chamber without opening the main enclosure.
                    </p>
                    <p class="lead-text mb-0">
                        The glove-port arrangement provides convenient hand movement for operations such as: <strong>Sample handling and inspection | Laboratory preparation | Precision component assembly | Material transfer | Research experiments | Sensitive product handling | Pharmaceutical laboratory processes | Electronics and component handling</strong>
                    </p>
                    <p class="lead-text mb-0">
                        The glove ports are securely integrated into the acrylic chamber to support controlled operation and comfortable accessibility.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Secure Access Door and Clamping Arrangement</h3>
                    <p class="lead-text">
                        The glove box incorporates a transparent access door with a secure clamping arrangement. Durable toggle clamps help provide consistent door closure and allow convenient opening when larger materials or equipment need to be placed inside the chamber.
                    </p>
                    <p class="lead-text mb-0">
                        The transparent access design allows the operator to maintain clear visibility of the chamber while preserving the enclosed structure of the system.
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
                            <th>Specification</th>
                            <th>Configuration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product</td>
                            <td>HEPA Filtered Acrylic Vacuum Glove Box</td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td>BET-HEPAFGB-100</td>
                        </tr>
                        <tr>
                            <td>Manufacturer</td>
                            <td>Burhani Engineering Technology</td>
                        </tr>
                        <tr>
                            <td>Manufacturing Location</td>
                            <td>Chennai, Tamil Nadu, India</td>
                        </tr>
                        <tr>
                            <td>Main Chamber Material</td>
                            <td>High-Transparency Acrylic</td>
                        </tr>
                        <tr>
                            <td>Top Module</td>
                            <td>HEPA Filtration Housing</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Dual Glove Ports</td>
                        </tr>
                        <tr>
                            <td>Access System</td>
                            <td>Transparent Access Door with Secure Clamps</td>
                        </tr>
                        <tr>
                            <td>Acrylic Thickness</td>
                            <td>Customizable – Under and Above 6 mm</td>
                        </tr>
                        <tr>
                            <td>Application</td>
                            <td>Clean and Controlled Sample Handling</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Inside Dimensions</h4>
                    <p class="lead-text mb-0">34" W × 24" D × 30" H<br>88 cm × 61 cm × 76 cm H</p>
                </div>
                <div class="col-md-6">
                    <h4 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Outside Dimensions</h4>
                    <p class="lead-text mb-0">Including transfer chamber approximately 12" long:<br>72" W × 30" D × 48" H<br>183 cm × 76 cm × 122 cm H</p>
                </div>
            </div>
            
            <p class="lead-text mt-4 mb-0" style="font-style: italic;">
                Custom dimensions and configurations can also be manufactured according to customer requirements.
            </p>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The BET-HEPAFGB-100 can be used across a variety of laboratory, research and industrial environments. Its combination of clear acrylic visibility, enclosed operation and HEPA filtration makes it particularly suitable for applications where cleanliness and operator accessibility are both important.
            </p>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical laboratories</div>
                <div class="app-card"><i class="bi bi-dna"></i> Biotechnology research</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics manufacturing</div>
                <div class="app-card"><i class="bi bi-tools"></i> Precision component handling</div>
                <div class="app-card"><i class="bi bi-flask"></i> R&D laboratories</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material science</div>
                <div class="app-card"><i class="bi bi-collection"></i> Sample preparation</div>
                <div class="app-card"><i class="bi bi-eye"></i> Contamination-sensitive inspection</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> Educational research</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Quality-control laboratories</div>
                <div class="app-card"><i class="bi bi-shield"></i> Clean process handling</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Customization Options</h2>
            <p class="lead-text">
                Burhani Engineering Technology provides custom Acrylic Glove Box manufacturing in India for customers requiring application-specific dimensions or configurations.
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-rulers"></i> Custom chamber dimensions</li>
                    <li><i class="bi bi-aspect-ratio"></i> Acrylic thickness under and above 6 mm</li>
                    <li><i class="bi bi-arrows-angle-expand"></i> Different glove-port positions</li>
                    <li><i class="bi bi-circle"></i> Additional glove ports</li>
                    <li><i class="bi bi-door-open"></i> Modified access-door dimensions</li>
                    <li><i class="bi bi-arrow-left-right"></i> Different inlet/outlet arrangements</li>
                    <li><i class="bi bi-tools"></i> Application-specific fittings</li>
                    <li><i class="bi bi-shield-check"></i> Custom filtration arrangements</li>
                    <li><i class="bi bi-flask"></i> Laboratory-specific modifications</li>
                </ul>
            </div>
            
            <p class="lead-text mt-4 mb-0">
                This flexibility allows the glove box to be adapted for compact laboratory environments as well as larger industrial and research applications.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology</h2>
            <p class="lead-text">
                Burhani Engineering Technology focuses on designing and manufacturing glove box systems for practical laboratory and industrial applications. Our approach combines transparent construction, functional engineering, configurable dimensions and professional manufacturing.
            </p>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="bi bi-gear feature-icon"></i>
                    <span class="feature-text">Custom Engineering: Equipment can be modified according to specific applications and chamber requirements</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Clear Acrylic Construction: Excellent process visibility for laboratory and industrial handling</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-aspect-ratio feature-icon"></i>
                    <span class="feature-text">Flexible Thickness Options: Acrylic thickness available under and above 6 mm according to design requirements</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Professional Build Quality: Designed for laboratory, research and industrial environments</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-geo-alt feature-icon"></i>
                    <span class="feature-text">Indian Manufacturing: Manufactured in Chennai, Tamil Nadu, India</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-globe feature-icon"></i>
                    <span class="feature-text">Worldwide Supply: Equipment can be supplied for customers in India and international markets</span>
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
                        Get detailed technical specifications, dimensions, and customization options in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/HEPA Filtered Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the HEPA Filtered Acrylic Vacuum Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>