<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Three Port Acrylic Vacuum Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Three Port Acrylic Vacuum Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/three-port-acrylic-vacuum-glove-box.php');
} else {
    $meta_title = "Three Port Acrylic Vacuum Glove Box Manufacturer in India | Burhani Engineering Technology";
    $meta_description = "Explore the Three Port Acrylic Vacuum Glove Box by Burhani Engineering Technology. Designed for controlled handling, clear visibility, and vacuum-compatible laboratory operations. Custom manufactured in Chennai, India.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/three-port-acrylic-vacuum-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Three Port Acrylic Vacuum Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Three Port Acrylic Vacuum Glove Box</h1>
                    <p class="subtitle">Engineered Acrylic Vacuum Glove Box Solutions for Clear, Safe, and Controlled Laboratory Handling - Model BET-TPGB-300</p>
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
                        Burhani Engineering Technology presents the <strong>Three Port Acrylic Vacuum Glove Box</strong> (Model BET-TPGB-300), a high-clarity controlled environment workstation specially designed for safe handling, vacuum-assisted isolation, contamination-sensitive processes, and precise laboratory operations.
                    </p>
                    <p class="lead-text">
                        This model is engineered for applications where visibility, controlled access, and enclosed manipulation are essential. With its three glove ports, transparent acrylic chamber, vacuum-compatible configuration, and practical material transfer arrangement, this glove box offers an ideal solution for research laboratories, pharmaceutical facilities, electronics handling, material science applications, chemical processing, and advanced industrial environments.
                    </p>
                    <p class="lead-text">
                        The Three Port Acrylic Vacuum Glove Box is developed for users who need a larger working configuration than a standard two-port system while still maintaining efficient handling in a compact and professional format. The three-port arrangement gives added operational flexibility, supports smoother work movement inside the chamber, and improves accessibility during controlled tasks.
                    </p>
                    <p class="lead-text mb-0">
                        Its transparent acrylic body ensures clear observation of every internal activity, making it highly suitable for environments where process visibility, operator precision, and chamber cleanliness matter.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box Main 1.png'); ?>" alt="Three Port Acrylic Vacuum Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Three Port Acrylic Vacuum Glove Box Main 1.png',
                                    'Three Port Acrylic Vacuum Glove Box 2.png',
                                    'Three Port Acrylic Vacuum Glove Box 3.png',
                                    'Three Port Acrylic Vacuum Glove Box 4.png',
                                    'Three Port Acrylic Vacuum Glove Box 5.png',
                                    'Three Port Acrylic Vacuum Glove Box 6.png',
                                    'Three Port Acrylic Vacuum Glove Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box/';
                                
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
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Three Glove Ports for Increased Handling Coverage</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">High-Clarity Acrylic Chamber for Excellent Visibility</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Vacuum-Compatible Construction for Controlled Operations</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-display feature-icon"></i>
                    <span class="feature-text">Smooth Transparent Body for Clean Presentation</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Strong Chamber Structure for Stable and Reliable Use</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Optional Side Transfer Chamber / Antechamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-lock feature-icon"></i>
                    <span class="feature-text">Airtight Access Arrangement with Sealing Support</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-droplet feature-icon"></i>
                    <span class="feature-text">Suitable for Moisture-Sensitive and Dust-Sensitive Applications</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-brush feature-icon"></i>
                    <span class="feature-text">Easy-to-Clean Interior Working Space</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gear feature-icon"></i>
                    <span class="feature-text">Customizable Fittings (Gauges, Valves, Inlet/Outlet)</span>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Three Port Acrylic Vacuum Glove Box is highly versatile and can be used across multiple industries and laboratory segments. Common applications include controlled material handling, research and development activities, chemical sample preparation, pharmaceutical laboratory work, moisture-sensitive material handling, powder handling and isolation, electronics and semiconductor component handling, battery research and material preparation, advanced material science work, academic and institutional laboratory applications, product inspection in enclosed environments, and sample transfer under controlled conditions.
            </p>
            <p class="lead-text text-center mb-0">
                Its three-port design makes it especially suitable for operations where standard two-port access may be limiting, but a larger multi-port glove box is not necessary. This makes it a practical middle-range solution for laboratories seeking both convenience and space efficiency.
            </p>
        </div>
    </section>

    <!-- CONSTRUCTION AND DESIGN -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Construction and Design</h2>
            <p class="lead-text">
                This glove box is manufactured using clear acrylic / PMMA material, offering high transparency, a clean finish, and a professional visual appearance. Acrylic is widely preferred in many laboratory glove box applications because it provides excellent visibility, lightweight handling compared to metal alternatives, and attractive presentation for both functional and commercial use.
            </p>
            <p class="lead-text">
                The chamber is designed to support vacuum glove box operations with compatible ports, sealing features, and optional transfer systems. The three glove ports are positioned to improve operator reach and multi-point access during internal procedures.
            </p>
            <p class="lead-text mb-0">
                Depending on project requirements, the glove box can also be configured with additional accessories such as vacuum gauges, gas inlet and outlet valves, regulators, pass boxes, internal electrical points, lighting options, and more.
            </p>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Customization Options</h2>
            <p class="lead-text">
                Burhani Engineering Technology offers full customization support for the Three Port Acrylic Vacuum Glove Box. Available customization options include chamber dimensions and internal working area, acrylic thickness selection, glove port size and placement, type and material of gloves, side transfer chamber dimensions, vacuum and pressure fittings, gas inlet / gas outlet provisions, pressure gauge / vacuum gauge mounting, moisture or oxygen monitoring compatibility, internal shelves, trays, and working platforms, stainless steel or other internal work surface options, branding, labeling, and application-specific modifications.
            </p>
            <p class="lead-text mb-0">
                This allows customers to order a glove box that precisely matches their process, laboratory layout, and handling requirements.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology</h2>
            <p class="lead-text">
                Burhani Engineering Technology is committed to delivering high-quality engineered glove box systems designed for practical industrial and laboratory use. Our focus is on product clarity, structural precision, customization flexibility, and functional reliability. We understand that every customer application is different, which is why we provide configurable solutions rather than one-size-fits-all equipment.
            </p>
            <p class="lead-text mb-0">
                Reasons customers choose BET include specialized experience in glove box and vacuum chamber solutions, professional and application-oriented product design, custom manufacturing support, clear and attractive acrylic product construction, practical features for laboratory and industrial use, responsive support for custom specifications, reliable India-based manufacturing, and capability to serve research labs, industrial facilities, and institutions.
            </p>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="section-premium" id="contact">
        <div class="container">
            <div class="bottom-cta">
                <h2>Request a Quote</h2>
                <p>Interested in the Three Port Acrylic Vacuum Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>

