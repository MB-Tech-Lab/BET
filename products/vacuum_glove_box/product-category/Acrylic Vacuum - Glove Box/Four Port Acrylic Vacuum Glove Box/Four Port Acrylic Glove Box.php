<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Four Port Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Four Port Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/four-port-acrylic-glove-box.php');
} else {
    $meta_title = "Four Port Acrylic Glove Box | BET-FPGB-400 | Controlled Environment Workstation | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Four Port Acrylic Glove Boxes (BET-FPGB-400) providing high-clarity acrylic chamber, four glove ports, side transfer chamber, spacious working area and customizable dimensions.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/four-port-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Four Port Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Four Port Acrylic Glove Box</h1>
                    <p class="subtitle">BET-FPGB-400 - High-Clarity Controlled Environment Workstation</p>
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
                        Burhani Engineering Technology presents the <strong>Four Port Acrylic Glove Box (BET-FPGB-400)</strong>, a high-clarity controlled environment workstation designed for safe material handling, process isolation, contamination control, and precision laboratory operations.
                    </p>
                    <p class="lead-text">
                        Built using durable transparent acrylic, this glove box is ideal for applications where visibility, operator access, and controlled handling are essential. With its four glove ports, spacious chamber, integrated side transfer chamber, and airtight sealing system, this model is suitable for laboratories, research centres, pharmaceutical environments, electronics handling, advanced material studies, and industrial process applications requiring secure manual manipulation inside an enclosed workspace.
                    </p>
                    <p class="lead-text">
                        The BET-FPGB-400 is engineered to provide a practical and efficient enclosure for handling moisture-sensitive, dust-sensitive, and contamination-sensitive materials. The transparent acrylic chamber allows operators to clearly monitor internal activities from multiple angles, while the four-port configuration supports multi-step handling or two-person operation depending on the application requirement.
                    </p>
                    <p class="lead-text mb-0">
                        The approximate chamber dimensions of this model are: <strong>58.5" W x 23.5" D x 24.5" H (approximately 1486 mm x 597 mm x 622 mm)</strong>. The four-port format makes this glove box especially useful where larger workspace coverage is needed compared to two-port systems.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Four Port Acrylic Vacuum Glove Box/Four Port Acrylic Vacuum Glove Box Main 1.png'); ?>" alt="Four Port Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Four Port Acrylic Vacuum Glove Box Main 1.png',
                                    'Four Port Acrylic Vacuum Glove Box 2.png',
                                    'Four Port Acrylic Vacuum Glove Box 3.png',
                                    'Four Port Acrylic Vacuum Glove Box 4.png',
                                    'Four Port Acrylic Vacuum Glove Box 5.png',
                                    'Four Port Acrylic Vacuum Glove Box 6.png',
                                    'Four Port Acrylic Vacuum Glove Box 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Four Port Acrylic Vacuum Glove Box/';
                                
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
                    <span class="feature-text">High-clarity acrylic chamber construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Four glove ports for expanded handling capability</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-aspect-ratio feature-icon"></i>
                    <span class="feature-text">Spacious chamber for controlled operation and sample work</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Integrated side transfer chamber / antechamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-closed feature-icon"></i>
                    <span class="feature-text">Airtight access door and secure sealing arrangement</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-brush feature-icon"></i>
                    <span class="feature-text">Smooth internal working space for easy cleaning and maintenance</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Strong frame-supported structure for stable usage</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Customizable dimensions, acrylic thickness, fittings, and access arrangements</span>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-flask"></i> Chemical sample handling</div>
                <div class="app-card"><i class="bi bi-box-arrow-right"></i> Controlled material transfer</div>
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical process handling</div>
                <div class="app-card"><i class="bi bi-box"></i> Powder and fine material isolation</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics and component assembly</div>
                <div class="app-card"><i class="bi bi-flask"></i> Research and development work</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> Academic and institutional laboratory applications</div>
                <div class="app-card"><i class="bi bi-eye"></i> Clean observation and manipulation tasks</div>
                <div class="app-card"><i class="bi bi-shield"></i> Moisture-sensitive and contamination-sensitive operations</div>
                <div class="app-card"><i class="bi bi-tools"></i> Advanced materials handling and testing</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Customization Options</h2>
            <p class="lead-text">
                At Burhani Engineering Technology, we understand that every application is different. The Four Port Acrylic Glove Box can be customized according to client requirements.
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-rulers"></i> Chamber size and internal working dimensions</li>
                    <li><i class="bi bi-aspect-ratio"></i> Acrylic thickness selection</li>
                    <li><i class="bi bi-circle"></i> Glove port size and arrangement</li>
                    <li><i class="bi bi-hand"></i> Type of gloves and glove materials</li>
                    <li><i class="bi bi-box-seam"></i> Side transfer chamber dimensions</li>
                    <li><i class="bi bi-door-open"></i> Additional access doors</li>
                    <li><i class="bi bi-fan"></i> Pressure/vacuum-related fittings if required</li>
                    <li><i class="bi bi-wind"></i> Gas inlet and outlet provisions</li>
                    <li><i class="bi bi-lightbulb"></i> Internal lighting or accessories</li>
                    <li><i class="bi bi-grid"></i> Material tray, rack, or work surface options</li>
                    <li><i class="bi bi-tag"></i> Branding and model labeling as per customer requirement</li>
                </ul>
            </div>
            
            <p class="lead-text mt-4 mb-0">
                This flexibility makes the BET-FPGB-400 a strong solution for customers looking for a reliable acrylic glove box manufacturer in India who can supply custom-built equipment based on actual process needs.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology</h2>
            <p class="lead-text">
                Burhani Engineering Technology is committed to delivering professional laboratory and process equipment with practical engineering value, clean finish, and customer-focused customization. Our glove boxes are designed to balance visual clarity, operator convenience, and application-specific functionality.
            </p>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="bi bi-gear feature-icon"></i>
                    <span class="feature-text">Application-oriented product development</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">Strong focus on structure and component practicality</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Custom manufacturing support</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-display feature-icon"></i>
                    <span class="feature-text">Clear product presentation and commercial design quality</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-telephone feature-icon"></i>
                    <span class="feature-text">Reliable communication and after-sales coordination</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-geo-alt feature-icon"></i>
                    <span class="feature-text">India-based manufacturing and support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="section-premium bg-light" id="contact">
        <div class="container">
            <div class="bottom-cta">
                <h2>Request a Quote</h2>
                <p>Interested in the Four Port Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>


