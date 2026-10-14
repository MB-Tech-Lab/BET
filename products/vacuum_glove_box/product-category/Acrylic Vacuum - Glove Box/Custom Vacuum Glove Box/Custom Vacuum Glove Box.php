<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Custom Vacuum Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Custom Vacuum Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/custom-vacuum-glove-box.php');
} else {
    $meta_title = "Custom Vacuum Glove Box | Steel or Aluminium Frame | Engineered Controlled Environment System | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Custom Vacuum Glove Boxes providing transparent acrylic chambers, steel or aluminium frames, integrated vacuum systems, SS or brass fittings, gas purging, pressure monitoring and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/custom-vacuum-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Custom Vacuum Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Custom Vacuum Glove Box</h1>
                    <p class="subtitle">Engineered Controlled Environment System - Steel or Aluminium Frame</p>
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
                        Burhani Engineering Technology designs and manufactures high-performance <strong>Custom Vacuum Glove Box systems</strong> for laboratories, research facilities, universities, pharmaceutical applications, material science, electronics, powder processing and industrial R&D environments.
                    </p>
                    <p class="lead-text">
                        Each system is developed according to the customer's exact process requirements, including chamber dimensions, number of glove ports, vacuum requirements, gas purging, pressure monitoring, access arrangements, supporting frame, instrumentation and integrated accessories.
                    </p>
                    <p class="lead-text">
                        Our Customized Vacuum Glove Box solutions are engineered for applications where standard glove box designs may not provide the required working area, access points or process flexibility. From compact laboratory units to large multi-station systems with multiple glove ports and integrated process equipment, Burhani Engineering Technology provides application-specific solutions for controlled and sensitive working environments.
                    </p>
                    <p class="lead-text mb-0">
                        The transparent acrylic chamber provides excellent visibility of the internal workspace, while a robust steel or aluminium supporting frame provides structural stability and dependable support for the complete system. Depending on the process requirement, the glove box can also be integrated with vacuum pumps, gas purging lines, pressure monitoring equipment, valves, fittings, controllers and other accessories.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Custom Vacuum Glove Box/custom vacuum glove box.png'); ?>" alt="Custom Vacuum Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'custom vacuum glove box.png',
                                    'custom vacuum glove box 1.png',
                                    'custom vacuum glove box 1.1.png',
                                    'custom vacuum glove box 1.2.png',
                                    'custom vacuum glove box 1.3.png',
                                    'Customized Glove box with user requirement facilitiy.jpg'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Custom Vacuum Glove Box/';
                                
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
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Fully Customized as Per Application</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-eye feature-icon"></i>
                    <span class="feature-text">High-Transparency Acrylic Chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-building feature-icon"></i>
                    <span class="feature-text">Steel or Aluminium Supporting Frame</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-fan feature-icon"></i>
                    <span class="feature-text">Integrated Vacuum System</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Gas Purging & Controlled Atmosphere</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gauge feature-icon"></i>
                    <span class="feature-text">Pressure & Vacuum Monitoring</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Ergonomic Glove Ports with Secure Sealing</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <span class="feature-text">Leak-Tight Customized Construction</span>
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
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Fully Customized as Per Application</h3>
                    <p class="lead-text">
                        Every Custom Vacuum Glove Box can be designed according to the customer's specific process and operational requirements. The chamber size, glove port quantity, port positioning, access doors, transfer openings, vacuum system, gas connections, monitoring equipment, internal accessories and supporting structure can all be customized.
                    </p>
                    <p class="lead-text mb-0">
                        This makes the system suitable for specialized applications where a standard glove box configuration may not provide sufficient workspace, access or process control.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">High-Transparency Acrylic Chamber</h3>
                    <p class="lead-text">
                        The chamber is manufactured using high-quality transparent acrylic, providing clear and unobstructed visibility of the internal working area.
                    </p>
                    <p class="lead-text mb-0">
                        Operators can continuously observe samples, components, instruments and ongoing processes while working through the glove ports. Excellent visibility is particularly useful for research, testing, material handling and industrial processes where close visual monitoring is required.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Steel or Aluminium Supporting Frame</h3>
                    <p class="lead-text">
                        The Custom Vacuum Glove Box can be supplied with a steel frame or aluminium frame, depending on the customer's preference, structural requirements and application.
                    </p>
                    <p class="lead-text">
                        A steel supporting frame is suitable for installations where greater structural strength and rigidity are required, particularly for larger systems or applications involving multiple integrated components.
                    </p>
                    <p class="lead-text mb-0">
                        An aluminium frame provides a lighter-weight structure with good corrosion resistance and can be preferred where reduced weight, easier handling or modular construction is important. Both frame types can be engineered to support the acrylic chamber along with integrated equipment.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Integrated Vacuum System</h3>
                    <p class="lead-text">
                        The Custom Vacuum Glove Box can be engineered with an integrated vacuum system according to the required operating conditions.
                    </p>
                    <p class="lead-text mb-0">
                        Vacuum pumps, pipelines, isolation valves, pressure regulation components and vacuum monitoring equipment can be incorporated into the complete system where required. The exact vacuum arrangement and operating range are selected according to the chamber dimensions, process requirements and customer specifications.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Gas Purging & Controlled Atmosphere Options</h3>
                    <p class="lead-text">
                        The glove box can be provided with dedicated gas inlet and outlet connections for applications requiring nitrogen, argon or other compatible process gases.
                    </p>
                    <p class="lead-text">
                        Gas purging can help establish a controlled internal environment for processes involving moisture-sensitive, oxygen-sensitive or contamination-sensitive materials.
                    </p>
                    <p class="lead-text mb-0">
                        Burhani Engineering Technology can provide SS 304 stainless steel fittings or brass fittings, depending on the customer's preference and process requirements. Customers can choose the fitting material based on factors such as corrosion resistance, process compatibility, operating environment and budget.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Pressure & Vacuum Monitoring</h3>
                    <p class="lead-text">
                        Suitable pressure and vacuum monitoring instruments can be integrated into the system to provide convenient observation of chamber conditions during operation.
                    </p>
                    <p class="lead-text mb-0">
                        Depending on the application, the system can include pressure gauges, vacuum gauges, sensors, controllers and other monitoring devices. This allows the glove box to be configured for applications requiring controlled pressure, vacuum-assisted processing or gas-purged environments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SPECIFICATIONS -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Technical Specifications & Customization Options</h2>
            
            <div class="table-responsive">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th>Available Configuration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product Type</td>
                            <td>Custom Vacuum Glove Box</td>
                        </tr>
                        <tr>
                            <td>Chamber Material</td>
                            <td>High-Transparency Acrylic</td>
                        </tr>
                        <tr>
                            <td>Supporting Frame</td>
                            <td>Steel / Aluminium</td>
                        </tr>
                        <tr>
                            <td>Chamber Dimensions</td>
                            <td>Customized as per application</td>
                        </tr>
                        <tr>
                            <td>Number of Glove Ports</td>
                            <td>Customized as required</td>
                        </tr>
                        <tr>
                            <td>Glove Port Position</td>
                            <td>Front / Multi-Station / Custom Layout</td>
                        </tr>
                        <tr>
                            <td>Vacuum System</td>
                            <td>Integrated as per process requirement</td>
                        </tr>
                        <tr>
                            <td>Gas Purging</td>
                            <td>Nitrogen / Argon / Compatible Process Gas</td>
                        </tr>
                        <tr>
                            <td>Valve & Fitting Material</td>
                            <td>SS 304 Stainless Steel / Brass</td>
                        </tr>
                        <tr>
                            <td>Pressure Monitoring</td>
                            <td>Gauge / Sensor / Controller</td>
                        </tr>
                        <tr>
                            <td>Vacuum Monitoring</td>
                            <td>As per operating requirement</td>
                        </tr>
                        <tr>
                            <td>Access Door</td>
                            <td>Customized size and position</td>
                        </tr>
                        <tr>
                            <td>Electrical Provision</td>
                            <td>Available as required</td>
                        </tr>
                        <tr>
                            <td>Instrumentation</td>
                            <td>Customized as per process</td>
                        </tr>
                        <tr>
                            <td>Supporting Equipment</td>
                            <td>Vacuum pumps and accessories as required</td>
                        </tr>
                        <tr>
                            <td>System Configuration</td>
                            <td>Laboratory / R&D / Industrial</td>
                        </tr>
                        <tr>
                            <td>Custom Engineering</td>
                            <td>Available according to customer specification</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="lead-text mt-4 mb-0" style="font-style: italic;">
                Final chamber dimensions, frame material, vacuum range, fittings, instrumentation and system configuration are selected according to individual application requirements.
            </p>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Custom Vacuum Glove Box is suitable for a wide range of specialized laboratory and industrial applications. Large multi-port glove box systems are particularly useful for processes that require extended working areas, multiple operator access points or integrated process equipment inside a controlled enclosure.
            </p>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-flask"></i> Advanced Research and Development</div>
                <div class="app-card"><i class="bi bi-box"></i> Powder Handling</div>
                <div class="app-card"><i class="bi bi-layers"></i> Composite Material Processing</div>
                <div class="app-card"><i class="bi bi-hammer"></i> Metallurgy</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material Science</div>
                <div class="app-card"><i class="bi bi-battery-charging"></i> Battery Research</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Electronics</div>
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical Development</div>
                <div class="app-card"><i class="bi bi-droplet"></i> Chemical Research</div>
                <div class="app-card"><i class="bi bi-collection"></i> Sample Preparation</div>
                <div class="app-card"><i class="bi bi-tools"></i> Sensitive Component Handling</div>
                <div class="app-card"><i class="bi bi-shield"></i> Contamination-Sensitive Processes</div>
                <div class="app-card"><i class="bi bi-gear"></i> Controlled-Atmosphere Experiments</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Designed Around Your Process</h2>
            <p class="lead-text">
                One of the major advantages of a Customized Vacuum Glove Box is the ability to design the complete system around the actual process requirement.
            </p>
            <p class="lead-text mb-0">
                Customers can specify chamber size, glove port arrangement, access door dimensions, steel or aluminium frame preference, vacuum system requirements, gas connections, SS or brass fittings, monitoring instruments, internal equipment and additional accessories.
            </p>
            <p class="lead-text mt-4 mb-0">
                Burhani Engineering Technology can then develop a configuration focused on operational convenience, structural stability, process visibility, reliable sealing and long-term performance. Whether the requirement is for a compact research glove box or a large multi-station industrial system, the design can be adapted according to the application.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Worldwide Supply & Custom Engineering Support</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology supplies Custom Vacuum Glove Box systems to customers worldwide. We support laboratories, universities, research organizations, engineering companies, pharmaceutical facilities, material science laboratories and industrial users requiring specialized controlled-environment equipment.
                    </p>
                    <p class="lead-text mb-0">
                        From initial technical discussion and system design to manufacturing, assembly, testing, quality inspection, packing and dispatch, our focus is on providing a reliable solution according to the customer's exact requirement.
                    </p>
                    <p class="lead-text mt-4 mb-0">
                        Whether you require a Custom Vacuum Glove Box with a steel frame, an aluminium-frame glove box, a multi-station acrylic chamber, integrated vacuum equipment or a specialized controlled-atmosphere configuration, Burhani Engineering Technology can develop the system according to your application and provide worldwide delivery support.
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

    <!-- CATALOGUE DOWNLOAD -->
    <section class="section-premium bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Download Catalogue</h2>
                    <p class="lead-text">
                        Get detailed technical specifications, customization options, and engineering capabilities in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Custom Vacuum Glove Box/Customized Glove box with user requirement facilitiy catalouge.pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in a Custom Vacuum Glove Box? Contact us for engineering consultation, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>

