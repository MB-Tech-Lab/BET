<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Vacuum Cycling Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Vacuum Cycling Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/vacuum-cycling-acrylic-glove-box.php');
} else {
    $meta_title = "Vacuum Cycling Acrylic Glove Box Manufacturer India | BET-GB0010 | Burhani Engineering Technology";
    $meta_description = "BET-GB0010 Vacuum Cycling Acrylic Glove Box by Burhani Engineering Technology, Chennai, India, featuring 10 mm PMMA acrylic, airlock transfer chamber, vacuum cycling, gas control, humidity and oxygen monitoring options for battery research, R&D and controlled-atmosphere applications.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/vacuum-cycling-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Vacuum Cycling Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Vacuum Cycling Acrylic Glove Box</h1>
                    <p class="subtitle">Vacuum Control. Clear Visibility. Precision Atmosphere Engineering. - Model BET-GB0010</p>
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
                    <h2 class="section-title">Product Overview</h2>
                    <p class="lead-text">
                        The <strong>BET-GB0010 Vacuum Cycling Acrylic Glove Box</strong> manufactured by Burhani Engineering Technology is a precision-engineered controlled-atmosphere workstation designed for laboratory research, battery development, material handling, electronics, moisture-sensitive processes and other applications requiring a clean and isolated working environment.
                    </p>
                    <p class="lead-text">
                        Manufactured in Chennai, India, the system combines a highly transparent PMMA acrylic chamber, vacuum capability, gas purging provisions, an airlock transfer chamber, glove access and atmospheric monitoring options in one versatile laboratory platform.
                    </p>
                    <p class="lead-text">
                        The glove box is designed for processes where samples or components need to be handled without repeatedly exposing the main working chamber to the surrounding atmosphere. Its transparent acrylic construction provides excellent visibility of the complete internal workspace, allowing researchers and operators to monitor processes from multiple directions while using the integrated gloves for controlled manipulation.
                    </p>
                    <p class="lead-text mb-0">
                        With provisions for vacuum cycling, inert gas introduction and atmospheric monitoring, the BET-GB0010 can support applications involving Argon, Helium, Nitrogen and other process gases depending on the required configuration.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Vacuum Cycling Acrylic Glove Box/Vacuum Cycling Acrylic Glove Box Main 1.png'); ?>" alt="Vacuum Cycling Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Vacuum Cycling Acrylic Glove Box Main 1.png',
                                    'Vacuum Cycling Acrylic Glove Box  2.png',
                                    'Vacuum Cycling Acrylic Glove Box  3.png',
                                    'Vacuum Cycling Acrylic Glove Box  4.png',
                                    'Vacuum Cycling Acrylic Glove Box  5.png',
                                    'Vacuum Cycling Acrylic Glove Box  6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Vacuum Cycling Acrylic Glove Box/';
                                
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
                    <span class="feature-text">High-Transparency 10 mm PMMA Acrylic Chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Vacuum Cycling Capability (-0.1 MPa)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gas-pump feature-icon"></i>
                    <span class="feature-text">Controlled Gas Environment (Argon, Helium, Nitrogen)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Airlock Transfer Chamber (240 × 240 × 240 mm)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Glove Port System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Pressure and Atmosphere Monitoring</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gear feature-icon"></i>
                    <span class="feature-text">Gas and Vacuum Connections (Ø8 mm SUS304 Valves)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-plug feature-icon"></i>
                    <span class="feature-text">Internal Power Socket</span>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SPECIFICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Technical Specifications</h2>
            
            <div class="table-responsive">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th>BET-GB0010</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product</td>
                            <td>Vacuum Cycling Acrylic Glove Box</td>
                        </tr>
                        <tr>
                            <td>Model No.</td>
                            <td>BET-GB0010</td>
                        </tr>
                        <tr>
                            <td>Main Material</td>
                            <td>PMMA Acrylic</td>
                        </tr>
                        <tr>
                            <td>Material Thickness</td>
                            <td>10 mm</td>
                        </tr>
                        <tr>
                            <td>Chamber Dimensions</td>
                            <td>900 W × 600 D × 700 H mm</td>
                        </tr>
                        <tr>
                            <td>Door Size</td>
                            <td>400 × 400 mm Square Door</td>
                        </tr>
                        <tr>
                            <td>Glove Dimensions</td>
                            <td>145 × 600 × 1.1 mm</td>
                        </tr>
                        <tr>
                            <td>Ball Valves</td>
                            <td>Ø8 mm – 2 pcs</td>
                        </tr>
                        <tr>
                            <td>Ball Valve Material</td>
                            <td>SUS304</td>
                        </tr>
                        <tr>
                            <td>Power Socket</td>
                            <td>1 Inside</td>
                        </tr>
                        <tr>
                            <td>Airlock Transfer Chamber</td>
                            <td>240 × 240 × 240 H mm</td>
                        </tr>
                        <tr>
                            <td>Maximum Vacuum Degree</td>
                            <td>-0.1 MPa</td>
                        </tr>
                        <tr>
                            <td>Pressure Gauge</td>
                            <td>1 pc</td>
                        </tr>
                        <tr>
                            <td>Compatible Gases</td>
                            <td>Argon, Helium, Nitrogen and others</td>
                        </tr>
                        <tr>
                            <td>Nitrogen Purity Configuration</td>
                            <td>Up to 99.95% as specified</td>
                        </tr>
                        <tr>
                            <td>Vacuum Pump Option</td>
                            <td>BET-MA0757</td>
                        </tr>
                        <tr>
                            <td>Humidity Display</td>
                            <td>1–99% RH</td>
                        </tr>
                        <tr>
                            <td>Oxygen Display</td>
                            <td>100 ppm–21%</td>
                        </tr>
                        <tr>
                            <td>Pressure Automatic Controller</td>
                            <td>±2500 Pa</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Vacuum Cycling Acrylic Glove Box is particularly suitable for battery research, lithium-ion battery development, material science, controlled-atmosphere experiments, electronics research, moisture-sensitive component handling, oxygen-sensitive processes, laboratory R&D, sample preparation, powder handling and advanced materials research.
            </p>
            <p class="lead-text text-center mb-0">
                It can also be used in university laboratories, research institutions, pharmaceutical development environments, industrial R&D departments and specialized manufacturing facilities where a transparent controlled-atmosphere enclosure is required.
            </p>
        </div>
    </section>

    <!-- BATTERY RESEARCH -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Battery Research and Advanced Material Development</h2>
            <p class="lead-text">
                Battery research is one of the important applications for a controlled-atmosphere glove box. Certain electrode materials, electrolytes and battery components can be sensitive to atmospheric moisture or oxygen during preparation and testing.
            </p>
            <p class="lead-text mb-0">
                The BET-GB0010 provides researchers with an enclosed workspace in which the atmosphere can be conditioned using vacuum and suitable process gases. The transparent acrylic chamber also allows researchers to visually monitor experimental procedures without compromising workspace isolation.
            </p>
        </div>
    </section>

    <!-- CUSTOM MANUFACTURING -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Custom Vacuum Glove Box Manufacturer in India</h2>
            <p class="lead-text">
                Burhani Engineering Technology manufactures custom Acrylic Vacuum Glove Boxes in Chennai, Tamil Nadu, India for laboratory, research and industrial customers.
            </p>
            <p class="lead-text">
                Depending on the project, customers can discuss different chamber dimensions, glove-port arrangements, vacuum pump capacities, gas connections, monitoring instruments, transfer chamber configurations and other application-specific modifications.
            </p>
            <p class="lead-text mb-0">
                This makes the BET glove box range suitable for both standard laboratory installations and specialized research projects requiring custom engineering.
            </p>
        </div>
    </section>

    <!-- CHENNAI MANUFACTURER -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Vacuum Cycling Acrylic Glove Box Manufacturer in Chennai</h2>
            <p class="lead-text">
                For organizations searching for a Vacuum Cycling Acrylic Glove Box manufacturer in Chennai, Acrylic Vacuum Glove Box manufacturer in Tamil Nadu, or controlled atmosphere glove box supplier in India, Burhani Engineering Technology provides locally manufactured equipment with customization support.
            </p>
            <p class="lead-text">
                From our manufacturing operations in Chennai, Tamil Nadu, we serve laboratories, industries, educational institutions and research organizations across India, including Chennai, Bengaluru, Hyderabad, Mumbai, Pune, Ahmedabad, Delhi, Kolkata and other major industrial and research locations.
            </p>
            <p class="lead-text mb-0">
                Burhani Engineering Technology also supports enquiries from international customers looking for custom glove box manufacturers and exporters from India, with worldwide supply capability.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology?</h2>
            <p class="lead-text">
                The BET-GB0010 combines clear visibility, controlled atmosphere capability, vacuum cycling, gas purging, airlock transfer and environmental monitoring in a single laboratory platform. Burhani Engineering Technology focuses on delivering practical engineering, professional construction and customization according to customer applications.
            </p>
            <p class="lead-text mb-0">
                Our goal is to provide engineering quality, customer satisfaction and trust all around the world, supporting researchers and industries with reliable glove box solutions for demanding controlled-environment applications.
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
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue for the BET-GB0010.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Vacuum Cycling Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Vacuum Cycling Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>