<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Humidity Controlled Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Humidity Controlled Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/humidity-controlled-acrylic-glove-box.php');
} else {
    $meta_title = "Humidity Controlled Acrylic Glove Box | Moisture Control System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Humidity Controlled Acrylic Glove Boxes for moisture-sensitive laboratory and industrial applications with customizable design options, high-clarity acrylic construction and humidity controller integration.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/humidity-controlled-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Humidity Controlled Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Humidity Controlled Acrylic Glove Box</h1>
                    <p class="subtitle">Precision Humidity Control for Clear, Safe, and Reliable Laboratory Handling</p>
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
                        The <strong>Humidity Controlled Acrylic Glove Box</strong> manufactured by Burhani Engineering Technology is a precision-engineered containment workstation designed for applications where moisture control, clean handling, and a stable internal environment are essential.
                    </p>
                    <p class="lead-text">
                        Built using high-clarity acrylic for excellent visibility and a robust enclosure structure, this glove box is ideal for laboratories, research facilities, electronics handling areas, pharmaceutical development spaces, material science environments, and controlled production workflows. It is specifically developed for users who need a clean and enclosed working chamber with regulated humidity conditions for sensitive processes.
                    </p>
                    <p class="lead-text">
                        At Burhani Engineering Technology, we understand that many laboratory materials, hygroscopic chemicals, specialty powders, electronic components, research samples, and precision assemblies can be negatively affected by atmospheric moisture. This is why our Humidity Controlled Acrylic Glove Box is designed to create a more controlled internal atmosphere that helps reduce exposure to ambient humidity while allowing safe and convenient manual operation through integrated glove ports.
                    </p>
                    <p class="lead-text mb-0">
                        The transparent acrylic construction enables full visual monitoring of the process without compromising containment and operator convenience.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Humidity-Controlled Acrylic Glove Box/Humidity-Controlled Acrylic Glove Box Main 1.png'); ?>" alt="Humidity Controlled Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Humidity-Controlled Acrylic Glove Box Main 1.png',
                                    'Humidity-Controlled Acrylic Glove Box 2.png',
                                    'Humidity-Controlled Acrylic Glove Box 3.png',
                                    'Humidity-Controlled Acrylic Glove Box 4.png',
                                    'Humidity-Controlled Acrylic Glove Box 5.png',
                                    'Humidity-Controlled Acrylic Glove Box 6.png',
                                    'Humidity-Controlled Acrylic Glove Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Humidity-Controlled Acrylic Glove Box/';
                                
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
                    <span class="feature-text">High-clarity acrylic chamber for excellent internal visibility</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-droplet-half feature-icon"></i>
                    <span class="feature-text">Humidity controlled working environment for moisture-sensitive applications</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Integrated glove ports for safe and convenient manual handling</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Robust enclosure design for laboratory and industrial use</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-cpu feature-icon"></i>
                    <span class="feature-text">Compatible with controller integration for humidity/moisture management</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Customizable chamber sizes and configurations</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-flask feature-icon"></i>
                    <span class="feature-text">Suitable for research, testing, storage, and controlled handling</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-display feature-icon"></i>
                    <span class="feature-text">Clean and professional appearance for lab environments</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Optional transfer/access chamber and accessories available</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-geo-alt feature-icon"></i>
                    <span class="feature-text">Manufactured by Burhani Engineering Technology, Chennai, India</span>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical laboratories</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics and component handling</div>
                <div class="app-card"><i class="bi bi-flask"></i> Chemical and analytical laboratories</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material science research</div>
                <div class="app-card"><i class="bi bi-dna"></i> Biotechnology and life science research</div>
                <div class="app-card"><i class="bi bi-droplet"></i> Moisture-sensitive sample preparation</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Quality control and inspection</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> Educational and institutional laboratories</div>
                <div class="app-card"><i class="bi bi-flask"></i> R&D and pilot process setups</div>
                <div class="app-card"><i class="bi bi-shield"></i> Controlled environment handling tasks</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Customization Options</h2>
            <p class="lead-text">
                Burhani Engineering Technology can customize this product based on your specific requirements:
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-rulers"></i> Chamber size</li>
                    <li><i class="bi bi-circle"></i> Number of glove ports</li>
                    <li><i class="bi bi-droplet-half"></i> Humidity control range</li>
                    <li><i class="bi bi-box-seam"></i> Access chamber design</li>
                    <li><i class="bi bi-display"></i> Controller type and display</li>
                    <li><i class="bi bi-grid"></i> Internal shelves or trays</li>
                    <li><i class="bi bi-plug"></i> Ports and fittings</li>
                    <li><i class="bi bi-aspect-ratio"></i> Acrylic thickness</li>
                    <li><i class="bi bi-tools"></i> Special utility integration</li>
                    <li><i class="bi bi-flask"></i> Lab-specific workflow requirements</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology</h2>
            <p class="lead-text">
                Burhani Engineering Technology is a Chennai-based manufacturer of pressure, vacuum, and controlled atmosphere equipment known for delivering practical, high-clarity, and customizable engineering solutions. Our glove box systems are made to support real laboratory and industrial requirements with careful attention to usability, structure, and presentation.
            </p>
            <p class="lead-text">
                The Humidity Controlled Acrylic Glove Box can be supplied in multiple sizes and configurations depending on chamber dimensions, glove port count, access door arrangement, transfer chamber requirements, humidity control range, and optional instrumentation. Whether you require a compact bench-top unit or a larger custom design, our engineering team can tailor the product to your process.
            </p>
            <p class="lead-text mb-0">
                Additional options may include single-user or multi-user configurations, integrated humidity display, moisture controller unit, access chamber, internal tray systems, lighting support, utility feedthroughs, and custom thickness requirements including under and above 6 mm based on the design need.
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
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Humidity-Controlled Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Humidity Controlled Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>