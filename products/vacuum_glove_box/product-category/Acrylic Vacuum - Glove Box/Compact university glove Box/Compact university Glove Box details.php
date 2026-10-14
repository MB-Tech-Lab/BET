<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Compact University Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Compact University Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/compact-university-glove-box.php');
} else {
    $meta_title = "Compact University Glove Box with Side Transfer Chamber | BET810 Series | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Compact University Glove Boxes (BET810-SG10, SG20, SG30, SG40) providing sealed contamination-free operation, side transfer chamber, HEPA filtration, hospital-grade electrical outlets and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/compact-university-glove-box.php');
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
}
.model-card h3 {
    color: var(--bet-navy);
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
}
.model-badge {
    background: var(--bet-cyan);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 15px;
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
                    <li class="breadcrumb-item active" aria-current="page">Compact University Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Compact University Glove Box with Side Transfer Chamber</h1>
                    <p class="subtitle">BET810 Series - Sealed Contamination-Free Operation for Research Laboratories</p>
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
                    <h2 class="section-title">Product Series Overview</h2>
                    <p class="lead-text">
                        The <strong>BET810 Compact University Glove Box Series</strong> is designed for research laboratories, universities, pharmaceutical facilities, and industrial applications requiring a clean, controlled working environment. Manufactured by Burhani Engineering Technology, these models provide reliable isolation from atmospheric contaminants while ensuring excellent operator visibility through crystal-clear enclosures.
                    </p>
                    <p class="lead-text">
                        Equipped with an integrated 12-inch side transfer chamber, the glove boxes enable safe and contamination-free transfer of samples, instruments, and materials without disturbing the internal atmosphere. Large front access doors simplify loading of laboratory equipment, while sealed construction minimizes gas consumption and operating costs.
                    </p>
                    <p class="lead-text mb-0">
                        The BET810 series features multiple glove ports (2-4 depending on model), built-in purging valves, vacuum gauge, pressure relief valve with HEPA filtration, and internal hospital-grade electrical outlets for powering laboratory instruments. Manufactured under ISO-certified quality standards, these glove boxes offer dependable performance, enhanced operator safety, and long service life.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Compact university glove Box/Compact University Glove Box 2.png'); ?>" alt="Compact University Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Compact University Glove Box 2.png',
                                    'Compact University Glove Box 3.png',
                                    'Compact University Glove Box 4.png',
                                    'Compact University Glove Box 5.jpg',
                                    'Compact University Glove Box 6.png',
                                    'Compact University Glove Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Compact university glove Box/';
                                
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

    <!-- MODELS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Available Models</h2>
            
            <!-- BET810-SG10 -->
            <div class="model-card">
                <span class="model-badge">Compact Size</span>
                <h3>BET810-SG10 – Compact University Glove Box</h3>
                <p class="lead-text">
                    Space-efficient sealed glove box designed for research laboratories, universities, and industrial applications requiring a clean, controlled working environment.
                </p>
                <div class="feature-grid" style="margin-top: 20px;">
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Compact, fully sealed glove box</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Two glove ports for single-user handling</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">12-inch side transfer chamber</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Large front access door</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Four key cock valves for purging</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Pressure relief valve with HEPA filter</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Built-in vacuum gauge</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Hospital-grade electrical outlet</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Crystal-clear viewing panels</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Low gas consumption design</span></div>
                </div>
            </div>

            <!-- BET810-SG20 -->
            <div class="model-card">
                <span class="model-badge">Medium Size</span>
                <h3>BET810-SG20 – Medium Size Compact University Glove Box</h3>
                <p class="lead-text">
                    Medium-capacity sealed containment system engineered for laboratories requiring additional workspace while maintaining complete environmental isolation.
                </p>
                <div class="feature-grid" style="margin-top: 20px;">
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Medium-capacity sealed glove box</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Two ergonomic glove ports</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">12-inch side transfer chamber</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Large flat access door</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Four integrated purging valves</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Pressure relief valve with HEPA</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Vacuum gauge for monitoring</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Internal hospital-grade outlet</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Excellent optical clarity</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Gas-saving sealed construction</span></div>
                </div>
            </div>

            <!-- BET810-SG30 -->
            <div class="model-card">
                <span class="model-badge">Large Size</span>
                <h3>BET810-SG30 – Large University Glove Box with Triple Glove Ports</h3>
                <p class="lead-text">
                    High-capacity sealed glove box designed for advanced laboratory processes requiring expanded working area and multiple operator access points.
                </p>
                <div class="feature-grid" style="margin-top: 20px;">
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Large working chamber</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Three glove ports for flexibility</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Integrated 12-inch transfer chamber</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Large front loading access door</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Fully sealed chamber</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Four key cock valves</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Pressure relief with HEPA filter</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Built-in vacuum gauge</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Hospital-grade electrical outlet</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Low inert gas consumption</span></div>
                </div>
            </div>

            <!-- BET810-SG40 -->
            <div class="model-card">
                <span class="model-badge">Extra Large Size</span>
                <h3>BET810-SG40 – Extra Large University Glove Box with Four Glove Ports</h3>
                <p class="lead-text">
                    Largest model in the BET810 series, engineered for high-volume laboratory operations and industrial research requiring maximum workspace and multiple operator access.
                </p>
                <div class="feature-grid" style="margin-top: 20px;">
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Extra-large sealed glove box</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Four glove ports for multi-operator</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">12-inch side transfer chamber</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Large access door for bulky items</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Complete airtight construction</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Four key cock valves</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Pressure relief with HEPA</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Integrated vacuum gauge</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Hospital-grade outlet strip</span></div>
                    <div class="feature-card"><i class="bi bi-check-circle feature-icon"></i><span class="feature-text">Reduced inert gas consumption</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY FEATURES -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Key Features Across All Models</h2>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Fully sealed contamination-free operation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">12-inch side transfer chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Large front access doors</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Four key cock valves for purging</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-funnel feature-icon"></i>
                    <span class="feature-text">Pressure relief valve with HEPA filter</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gauge feature-icon"></i>
                    <span class="feature-text">Built-in vacuum gauge</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-plug feature-icon"></i>
                    <span class="feature-text">Hospital-grade internal electrical outlet</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">Crystal-clear viewing panels</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-currency-dollar feature-icon"></i>
                    <span class="feature-text">Low gas consumption design</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-hand feature-icon"></i>
                    <span class="feature-text">Premium ambidextrous gloves included</span>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-mortarboard"></i> University Laboratories</div>
                <div class="app-card"><i class="bi bi-flask"></i> Research Laboratories</div>
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical Facilities</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics Assembly</div>
                <div class="app-card"><i class="bi bi-battery-charging"></i> Battery Research</div>
                <div class="app-card"><i class="bi bi-droplet"></i> Chemical Handling</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material Science</div>
                <div class="app-card"><i class="bi bi-shield"></i> Moisture-Sensitive Experiments</div>
                <div class="app-card"><i class="bi bi-building"></i> Industrial R&D</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Quality Control</div>
                <div class="app-card"><i class="bi bi-gear"></i> Controlled Atmosphere</div>
                <div class="app-card"><i class="bi bi-stars"></i> Nanotechnology</div>
            </div>
        </div>
    </section>

    <!-- CATALOGUE DOWNLOAD -->
    <section class="section-premium">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Download Catalogue</h2>
                    <p class="lead-text">
                        Get detailed technical specifications, model configurations, and customization options for the BET810 Compact University Glove Box series.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Compact university glove Box/compact-university-glove-box-with-side-transfer-chamber.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Compact University Glove Box series? Contact us for pricing, model selection, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>
