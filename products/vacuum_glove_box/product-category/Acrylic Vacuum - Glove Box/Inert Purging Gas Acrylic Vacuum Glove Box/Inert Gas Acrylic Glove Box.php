<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Inert Gas Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Inert Gas Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/inert-purging-gas-acrylic-vacuum-glove-box.php');
} else {
    $meta_title = "Inert Gas Acrylic Glove Box | Nitrogen & Argon Purging | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Inert Gas Acrylic Glove Boxes for nitrogen and argon purging, featuring transparent acrylic construction, customizable thickness, dual glove ports, SS or brass fittings, multiple chamber sizes and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/inert-purging-gas-acrylic-vacuum-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Inert Gas Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Inert Gas Acrylic Glove Box</h1>
                    <p class="subtitle">Controlled Atmosphere. Clear Visibility. Reliable Isolation. Engineered Worldwide.</p>
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
                        Burhani Engineering Technology designs and manufactures high-quality <strong>Inert Gas Acrylic Glove Boxes</strong> for laboratories, research institutions, universities, pharmaceutical R&D, electronics, material science, chemical research and industrial applications worldwide.
                    </p>
                    <p class="lead-text">
                        Designed as a non-vacuum controlled-atmosphere isolation chamber, this glove box enables operators to handle sensitive samples and materials inside a transparent enclosed workspace while using inert-gas purging to displace the surrounding air inside the chamber.
                    </p>
                    <p class="lead-text">
                        The system can be connected to a suitable nitrogen, argon or other compatible inert-gas supply, depending on the application. Controlled gas purging helps reduce the presence of atmospheric oxygen, moisture and airborne contaminants inside the enclosure while maintaining excellent visibility and convenient operator access.
                    </p>
                    <p class="lead-text mb-0">
                        Unlike a vacuum glove box, this model is primarily designed for inert-gas displacement and controlled-atmosphere operation rather than deep-vacuum evacuation. This makes it a practical and cost-effective solution for laboratories and industries that require an isolated working environment without the complexity of a full vacuum or gas-purification system.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box Main 1.png'); ?>" alt="Inert Gas Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Inert Purging Gas Acrylic Vacuum Glove Box Main 1.png',
                                    'Inert Purging Gas Acrylic Vacuum Glove Box 2.png',
                                    'Inert Purging Gas Acrylic Vacuum Glove Box 3.png',
                                    'Inert Purging Gas Acrylic Vacuum Glove Box 4.png',
                                    'Inert Purging Gas Acrylic Vacuum Glove Box 5.png',
                                    'Inert Purging Gas Acrylic Vacuum Glove Box 6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box/';
                                
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
                    <span class="feature-text">Inert Gas Purging System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">SS 304 or Brass Fitting Options</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Glove Ports for Convenient Material Handling</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Gasket-Sealed Side Access Door</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-stars feature-icon"></i>
                    <span class="feature-text">Smooth, Easy-to-Clean Interior</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MODEL TABLE -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Available Models & Chamber Sizes</h2>
            
            <div class="table-responsive">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Model</th>
                            <th>Chamber Size (L × W × H)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BET-A02</td>
                            <td>50 × 40 × 40 cm</td>
                        </tr>
                        <tr>
                            <td>BET-A03</td>
                            <td>60 × 50 × 50 cm</td>
                        </tr>
                        <tr>
                            <td>BET-A04</td>
                            <td>70 × 50 × 50 cm</td>
                        </tr>
                        <tr>
                            <td>BET-A05</td>
                            <td>80 × 60 × 60 cm</td>
                        </tr>
                        <tr>
                            <td>BET-A06</td>
                            <td>90 × 60 × 60 cm</td>
                        </tr>
                        <tr>
                            <td>BET-A07</td>
                            <td>100 × 60 × 60 cm</td>
                        </tr>
                        <tr>
                            <td>BET-A08</td>
                            <td>120 × 70 × 70 cm</td>
                        </tr>
                    </tbody>
                </table>
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
                            <td>Chamber Material</td>
                            <td>High-Transparency Acrylic</td>
                        </tr>
                        <tr>
                            <td>Acrylic Thickness</td>
                            <td>Customizable according to chamber size and application</td>
                        </tr>
                        <tr>
                            <td>Operating Type</td>
                            <td>Non-Vacuum / Inert Gas Purging</td>
                        </tr>
                        <tr>
                            <td>Gas Compatibility</td>
                            <td>Nitrogen / Argon / Other compatible inert gas as specified</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Dual sealed glove ports</td>
                        </tr>
                        <tr>
                            <td>Gloves</td>
                            <td>Industrial-grade flexible gloves</td>
                        </tr>
                        <tr>
                            <td>Access</td>
                            <td>Gasket-sealed acrylic side door</td>
                        </tr>
                        <tr>
                            <td>Fitting Options</td>
                            <td>SS 304 Stainless Steel / Brass</td>
                        </tr>
                        <tr>
                            <td>Gas Connections</td>
                            <td>Inlet and outlet provision</td>
                        </tr>
                        <tr>
                            <td>Custom Chamber Sizes</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>Custom Configurations</td>
                            <td>Available according to application requirements</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="lead-text mt-4 mb-0" style="font-style: italic;">
                Final dimensions, acrylic thickness, fittings, valves, gas connections and operating configuration can be customized according to customer specifications.
            </p>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Inert Gas Acrylic Glove Box is suitable for applications involving laboratory research, sensitive sample handling, material science, electronics, chemical research, pharmaceutical R&D, moisture-sensitive materials, oxygen-sensitive samples, controlled-atmosphere experiments, sample preparation, powder handling, battery research, university laboratories, quality-control laboratories and industrial R&D.
            </p>
            <p class="lead-text text-center mb-0">
                It can be particularly useful where the main process requires gas displacement and atmospheric isolation but does not require the high-vacuum capability or continuous purification system associated with advanced vacuum glove boxes.
            </p>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Custom Engineered to Your Requirement</h2>
            <p class="lead-text">
                Burhani Engineering Technology can customize the complete system according to the customer's operational requirements. Available customization can include chamber dimensions, acrylic chamber thickness, number and position of glove ports, side-door dimensions, SS or brass fittings, gas inlet/outlet arrangement, monitoring provisions, electrical feedthroughs and additional accessories.
            </p>
            <p class="lead-text mb-0">
                This enables customers to obtain a glove box designed around their process rather than adapting their application to a fixed standard configuration.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Worldwide Supply & Delivery</h2>
            <p class="lead-text">
                Burhani Engineering Technology supplies Inert Gas Acrylic Glove Boxes to customers worldwide, supporting laboratories, universities, research centres, pharmaceutical organizations, electronics industries, engineering companies and industrial facilities across global markets.
            </p>
            <p class="lead-text mb-0">
                From initial technical discussion and model selection through customization, manufacturing, inspection, packing and dispatch, our focus remains on delivering dependable equipment, professional service and long-term customer satisfaction.
            </p>
            <p class="lead-text mt-4 mb-0" style="font-weight: 700; color: var(--bet-navy);">
                Engineering Precision. Delivering Quality, Satisfaction & Trust Worldwide.
            </p>
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
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box/Catalogue (1).pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Inert Gas Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>