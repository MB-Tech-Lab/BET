<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "O₂ & Moisture RH Monitoring Acrylic Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance O₂ & Moisture RH Monitoring Acrylic Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/o2-moisture-rh-monitoring-acrylic-glove-box.php');
} else {
    $meta_title = "O₂ & Moisture / RH Monitoring Acrylic Glove Box Manufacturer in Chennai | Burhani Engineering Technology";
    $meta_description = "Discover Burhani Engineering Technology's O₂ & Moisture / RH Monitoring Acrylic Glove Box, model AD600PC. Clear PMMA construction, dual glove ports, vacuum-capable pass box, and reliable environmental monitoring for laboratory and research applications in Chennai, India.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/o2-moisture-rh-monitoring-acrylic-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">O₂ & Moisture RH Monitoring Acrylic Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>O₂ & Moisture / RH Monitoring Acrylic Glove Box</h1>
                    <p class="subtitle">Clear Monitoring. Controlled Handling. Reliable Performance. - Model AD600PC</p>
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
                        Burhani Engineering Technology's <strong>O₂ & Moisture / RH Monitoring Acrylic Glove Box</strong> (Model AD600PC) is a precision-engineered transparent workstation designed for applications that demand controlled handling, excellent visibility, and reliable monitoring of environmental conditions inside the working chamber.
                    </p>
                    <p class="lead-text">
                        Built using a clear PMMA acrylic body, this glove box is ideal for laboratories, research centers, electronics workspaces, pharmaceutical environments, and material-handling applications where observation, isolation, and condition tracking are essential.
                    </p>
                    <p class="lead-text">
                        This model is especially suitable for processes where oxygen presence, moisture level, and relative humidity (RH) must be monitored while handling sensitive materials, components, or samples.
                    </p>
                    <p class="lead-text mb-0">
                        The clear acrylic enclosure allows operators to work comfortably while maintaining a closed environment, and the integrated glove ports support secure manipulation without direct contact with the internal chamber atmosphere.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 1.png'); ?>" alt="O₂ & Moisture RH Monitoring Acrylic Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 1.png',
                                    'O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 2.png',
                                    'O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 3.png',
                                    'O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 4.png',
                                    'O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 5.png',
                                    'O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 6.png',
                                    'O₂ & Moisture  RH Monitoring Acrylic Glove Box Main 7.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box/';
                                
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
                    <span class="feature-text">High-Clarity PMMA Acrylic Construction</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <span class="feature-text">Integrated Environmental Monitoring Concept</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Two Glove Ports for Safe Handling</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-door-open feature-icon"></i>
                    <span class="feature-text">Removable Front Access with O-ring Sealing</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Vacuum-Capable Pass Box / Lock System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-plug feature-icon"></i>
                    <span class="feature-text">Internal Utility Support (2 AC100V Outlets)</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-grid feature-icon"></i>
                    <span class="feature-text">Stainless-Steel Floor Plate</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gear feature-icon"></i>
                    <span class="feature-text">Supplied Accessories (THA-01M Monitor, Vacuum Gauge, Gloves)</span>
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
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product Type</td>
                            <td>O₂ & Moisture / RH Monitoring Acrylic Glove Box</td>
                        </tr>
                        <tr>
                            <td>Model No.</td>
                            <td>AD600PC</td>
                        </tr>
                        <tr>
                            <td>Main Material</td>
                            <td>Clear PMMA (Acrylic Plastic)</td>
                        </tr>
                        <tr>
                            <td>Dimensions</td>
                            <td>485 × 847 × 450 mm</td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td>Approx. 19.4–20 kg</td>
                        </tr>
                        <tr>
                            <td>Power Supply</td>
                            <td>AC100V, 50/60 Hz</td>
                        </tr>
                        <tr>
                            <td>Outlet Specs</td>
                            <td>2 AC100V outlets</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>2 glove rings, 200 mm diameter</td>
                        </tr>
                        <tr>
                            <td>Lock / Pass Box</td>
                            <td>Stainless-steel lock, Ø200 mm, length 300 mm</td>
                        </tr>
                        <tr>
                            <td>Vacuum Capability of Pass Box</td>
                            <td>1 Torr (approx. 133 Pa)</td>
                        </tr>
                        <tr>
                            <td>Mounted Instruments</td>
                            <td>1 manometer, 2 ball valves</td>
                        </tr>
                        <tr>
                            <td>Accessories</td>
                            <td>THA-01M digital temperature & humidity monitor, vacuum gauge, 1 pair large gloves</td>
                        </tr>
                        <tr>
                            <td>Manufacturer</td>
                            <td>Burhani Engineering Technology</td>
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
                This acrylic glove box is suitable for a wide range of applications where sample protection, visibility, and atmosphere monitoring are important: Electronics and semiconductor component handling, Moisture-sensitive sample preparation, Oxygen-sensitive laboratory procedures, Research and development work, Pharmaceutical and life-science applications, Advanced material handling, Small-scale inert or monitored-environment workflows, Quality inspection and testing tasks, and Clean sample transfer and protected bench work.
            </p>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title">Customization Options</h2>
            <p class="lead-text">
                At Burhani Engineering Technology, we understand that many users require a glove box tailored to their process. This product can be offered with customization options based on operational needs, including chamber size modifications, glove port size and placement options, additional monitoring or display integration, utility port changes, vacuum/inlet/outlet arrangement modifications, optional accessories and internal fixtures, and material and configuration adjustments for specific industry use.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE BET -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Why Choose Burhani Engineering Technology</h2>
            <p class="lead-text">
                Burhani Engineering Technology is committed to delivering practical, high-quality glove box solutions for laboratories, research facilities, and industrial users. Our products are designed with a focus on usability, clarity, durability, and professional presentation. We aim to provide systems that are not only functional, but also suitable for modern, high-performance work environments.
            </p>
            <p class="lead-text mb-0">
                Clients choose BET because of professional glove box manufacturing expertise, application-focused design, clear product visibility and user-friendly layouts, support for customization, strong quality orientation, reliable solutions for research, testing, and controlled handling applications, and Chennai-based manufacturing and customer support presence.
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
                        Get detailed technical specifications, dimensions, and features in our comprehensive product catalogue for the AD600PC.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box/Catalogue.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the O₂ & Moisture / RH Monitoring Acrylic Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>