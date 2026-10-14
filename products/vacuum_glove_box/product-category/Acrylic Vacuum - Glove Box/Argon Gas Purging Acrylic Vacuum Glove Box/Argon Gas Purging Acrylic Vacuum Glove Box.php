<?php
include_once(__DIR__ . '/../../../../../includes/config.php');
$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $meta_title = "Argon Gas Purging Acrylic Vacuum Glove Box in $city, $country | Burhani Engineering Technology";
    $meta_description = "High-performance Argon Gas Purging Acrylic Vacuum Glove Box available in $city, $country. Contact Burhani Engineering Technology for industrial testing equipment.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/argon-gas-purging-acrylic-vacuum-glove-box.php');
} else {
    $meta_title = "Argon Gas Purging Acrylic Vacuum Glove Box | Controlled Atmosphere Glove Box with Vacuum Transition Chamber | Burhani Engineering Technology";
    $meta_description = "Manufacturer of Argon Gas Purging Acrylic Vacuum Glove Boxes providing transparent acrylic chamber, vacuum transition chamber, customizable acrylic thickness, SS 304 or brass fittings and worldwide delivery.";
    $canonical_url = url('products/vacuum-glove-box/product-category/acrylic-vacuum-glove-box/argon-gas-purging-acrylic-vacuum-glove-box.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Argon Gas Purging Acrylic Vacuum Glove Box</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Argon Gas Purging Acrylic Vacuum Glove Box</h1>
                    <p class="subtitle">Controlled Atmosphere Glove Box with Vacuum Transition Chamber</p>
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
                        Burhani Engineering Technology designs and manufactures high-quality <strong>Argon Gas Purging Acrylic Vacuum Glove Boxes</strong> for laboratories, universities, research centres, pharmaceutical R&D, electronics, battery research, material science, chemical processing and specialized industrial applications worldwide.
                    </p>
                    <p class="lead-text">
                        Engineered for applications requiring isolation from normal atmospheric conditions, this transparent glove box combines argon gas purging, a sealed acrylic working chamber and an integrated vacuum transition chamber to provide a controlled environment for sensitive materials and processes.
                    </p>
                    <p class="lead-text">
                        The system is designed to allow atmospheric air inside the glove box to be displaced using high-purity argon gas, helping reduce exposure of sensitive samples to oxygen, moisture and airborne contamination. Its highly transparent acrylic construction provides excellent visibility of the entire working area, while the integrated gloves allow operators to handle materials without directly opening the chamber.
                    </p>
                    <p class="lead-text">
                        A dedicated vacuum-capable transition chamber / antechamber enables samples, tools and components to be introduced or removed while minimizing disturbance to the atmosphere inside the main glove box. This arrangement makes the system particularly useful for operations requiring repeated material transfer while maintaining an argon-rich controlled environment.
                    </p>
                    <p class="lead-text mb-0">
                        The glove box can be customized according to chamber dimensions, required acrylic thickness, glove-port arrangement, transition chamber size, vacuum configuration, valves, instrumentation and process requirements.
                    </p>
                </div>

                <!-- Right: Gallery -->
                <div class="col-lg-6">
                    <div class="gallery-container">
                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <img id="main-product-image" src="<?php echo asset('img/Glove Box/Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box Main 1.png'); ?>" alt="Argon Gas Purging Acrylic Vacuum Glove Box" class="img-fluid">
                        </div>
                        
                        <!-- Thumbnail Filmstrip -->
                        <div class="thumbnail-strip-wrapper">
                            <div class="thumbnail-strip">
                                <?php
                                $images = [
                                    'Argon Gas Purging Acrylic Vacuum Glove Box Main 1.png',
                                    'Argon Gas Purging Acrylic Vacuum Glove Box 2.png',
                                    'Argon Gas Purging Acrylic Vacuum Glove Box 3.png',
                                    'Argon Gas Purging Acrylic Vacuum Glove Box 4.png',
                                    'Argon Gas Purging Acrylic Vacuum Glove Box 5.png',
                                    'Argon Gas Purging Acrylic Vacuum Glove Box 6.png'
                                ];
                                $base_img_path = 'img/Glove Box/Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box/';
                                
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
                    <span class="feature-text">High-Transparency Acrylic Working Chamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-wind feature-icon"></i>
                    <span class="feature-text">Argon Gas Purging for controlled atmosphere</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-box-seam feature-icon"></i>
                    <span class="feature-text">Integrated Vacuum Transition Chamber / Antechamber</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-gauge feature-icon"></i>
                    <span class="feature-text">Integrated Pressure Monitoring</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-person-workspaces feature-icon"></i>
                    <span class="feature-text">Dual Sealed Glove Ports</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-tools feature-icon"></i>
                    <span class="feature-text">SS 304 or Brass Fitting Options</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-sliders feature-icon"></i>
                    <span class="feature-text">Customizable Acrylic Thickness</span>
                </div>
                <div class="feature-card">
                    <i class="bi bi-rulers feature-icon"></i>
                    <span class="feature-text">Standard & Custom Chamber Sizes</span>
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
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">High-Transparency Acrylic Working Chamber</h3>
                    <p class="lead-text">
                        The main chamber is manufactured using premium transparent acrylic, providing crystal-clear visibility from multiple viewing angles. This helps operators continuously observe samples, tools, instruments and experimental procedures without opening the enclosure.
                    </p>
                    <p class="lead-text">
                        The acrylic chamber is designed with smooth internal surfaces for convenient cleaning and maintenance and offers an excellent combination of visibility, structural rigidity and professional laboratory appearance.
                    </p>
                    <p class="lead-text mb-0">
                        Acrylic thickness is customizable according to chamber dimensions, operating conditions, structural requirements and customer preference. Rather than restricting every system to a single fixed acrylic thickness, Burhani Engineering Technology can engineer the construction according to the specific application.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Argon Gas Purging for Controlled Atmosphere Applications</h3>
                    <p class="lead-text">
                        This glove box incorporates dedicated provisions for argon gas inlet and outlet connections, allowing atmospheric air within the system to be displaced with argon.
                    </p>
                    <p class="lead-text">
                        Argon is commonly selected for applications involving materials that may react with oxygen or atmospheric moisture. During purging, argon is introduced through the designated inlet while the existing atmosphere is progressively displaced through the outlet.
                    </p>
                    <p class="lead-text mb-0">
                        The final internal oxygen and moisture levels depend on several factors including argon purity, purge flow rate, chamber volume, sealing performance, purge duration, transfer frequency and operating procedure.
                    </p>
                    <p class="lead-text mb-0">
                        For applications requiring quantified ultra-low oxygen or moisture levels, optional monitoring or purification equipment can be incorporated according to customer requirements.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Integrated Vacuum Transition Chamber / Antechamber</h3>
                    <p class="lead-text">
                        One of the major features of the system is its transparent vacuum transition chamber, also commonly referred to as an antechamber, pass box or load-lock chamber.
                    </p>
                    <p class="lead-text">
                        This separate chamber enables materials to be transferred between the external laboratory environment and the main glove box without requiring the complete main chamber to be opened.
                    </p>
                    <p class="lead-text mb-0">
                        The transition chamber can be configured for evacuation and argon backfilling before the inner transfer door is opened. This procedure helps reduce the amount of atmospheric oxygen and moisture introduced into the main controlled chamber during sample transfer.
                    </p>
                    <p class="lead-text mb-0">
                        The transition chamber includes robust acrylic construction, sealing arrangement, secure clamps, valves, process connections and pressure monitoring.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Integrated Pressure Monitoring</h3>
                    <p class="lead-text">
                        An analog pressure gauge provides convenient visual monitoring of pressure conditions during evacuation, purging and transfer-chamber operation.
                    </p>
                    <p class="lead-text mb-0">
                        Additional digital pressure instrumentation, vacuum sensors, oxygen monitoring or humidity monitoring can also be incorporated where required.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">Dual Sealed Glove Ports</h3>
                    <p class="lead-text">
                        Two ergonomically positioned glove ports allow operators to safely manipulate materials and instruments inside the enclosed workspace.
                    </p>
                    <p class="lead-text mb-0">
                        Industrial-grade flexible gloves are securely mounted to the glove-port flanges to maintain separation between the operator and the controlled internal environment. Glove material, port diameter and port arrangement can be customized according to handling requirements and chamber dimensions.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <h3 style="color: var(--bet-navy); font-weight: 600; margin-bottom: 15px;">SS 304 or Brass Fitting Options</h3>
                    <p class="lead-text">
                        Burhani Engineering Technology provides both SS 304 stainless steel fittings and brass fittings, allowing customers to select the preferred configuration according to their process, budget and compatibility requirements.
                    </p>
                    <p class="lead-text">
                        This option can apply to suitable gas connections, valves, vacuum connections, pipe fittings and associated process hardware.
                    </p>
                    <p class="lead-text mb-0">
                        Customers may therefore choose: <strong>SS 304 fittings for enhanced corrosion resistance and laboratory-grade construction, or brass fittings for suitable applications where brass is preferred.</strong>
                    </p>
                    <p class="lead-text mb-0">
                        Final material selection can be made according to the customer's process requirements.
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
                            <td>Argon Gas Purging Acrylic Vacuum Glove Box</td>
                        </tr>
                        <tr>
                            <td>Main Chamber Material</td>
                            <td>High-Transparency Acrylic</td>
                        </tr>
                        <tr>
                            <td>Acrylic Thickness</td>
                            <td>Customizable according to chamber size and application</td>
                        </tr>
                        <tr>
                            <td>Atmosphere Control</td>
                            <td>Argon Gas Purging</td>
                        </tr>
                        <tr>
                            <td>Transition Chamber</td>
                            <td>Integrated Vacuum Antechamber / Pass Box</td>
                        </tr>
                        <tr>
                            <td>Glove Ports</td>
                            <td>Dual Sealed Glove Ports</td>
                        </tr>
                        <tr>
                            <td>Gloves</td>
                            <td>Industrial-Grade Flexible Protective Gloves</td>
                        </tr>
                        <tr>
                            <td>Pressure Monitoring</td>
                            <td>Analog Pressure Gauge</td>
                        </tr>
                        <tr>
                            <td>Gas Connections</td>
                            <td>Argon Inlet / Outlet</td>
                        </tr>
                        <tr>
                            <td>Fitting Options</td>
                            <td>SS 304 Stainless Steel / Brass</td>
                        </tr>
                        <tr>
                            <td>Vacuum Connections</td>
                            <td>Provided according to configuration</td>
                        </tr>
                        <tr>
                            <td>Main Chamber Size</td>
                            <td>Standard & Custom Sizes Available</td>
                        </tr>
                        <tr>
                            <td>Transition Chamber Size</td>
                            <td>Customizable</td>
                        </tr>
                        <tr>
                            <td>Glove Port Diameter</td>
                            <td>Customizable according to requirement</td>
                        </tr>
                        <tr>
                            <td>Access Doors</td>
                            <td>Gasket-Sealed Acrylic Construction</td>
                        </tr>
                        <tr>
                            <td>Instrumentation</td>
                            <td>Customizable</td>
                        </tr>
                        <tr>
                            <td>Worldwide Supply</td>
                            <td>Available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="lead-text mt-4 mb-0" style="font-style: italic;">
                Final dimensions, acrylic thickness, vacuum rating, operating pressure, fittings and instrumentation are selected according to the ordered configuration and application.
            </p>
        </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="section-premium">
        <div class="container">
            <h2 class="section-title text-center">Applications</h2>
            <p class="lead-text text-center" style="max-width: 800px; margin: 0 auto 40px;">
                The Argon Gas Purging Acrylic Vacuum Glove Box is suitable for a wide range of controlled-atmosphere applications. Its combination of transparent construction, argon purging and controlled material transfer makes it especially useful for laboratory processes where materials should have reduced exposure to normal room atmosphere.
            </p>
            
            <div class="app-grid">
                <div class="app-card"><i class="bi bi-battery-charging"></i> Battery Research</div>
                <div class="app-card"><i class="bi bi-lightning"></i> Lithium-Ion Battery Development</div>
                <div class="app-card"><i class="bi bi-atom"></i> Material Science</div>
                <div class="app-card"><i class="bi bi-cpu"></i> Semiconductor Research</div>
                <div class="app-card"><i class="bi bi-circuit-board"></i> Electronics Handling</div>
                <div class="app-card"><i class="bi bi-shield-check"></i> Oxygen-Sensitive Sample Preparation</div>
                <div class="app-card"><i class="bi bi-droplet"></i> Moisture-Sensitive Material Handling</div>
                <div class="app-card"><i class="bi bi-flask"></i> Chemical Research</div>
                <div class="app-card"><i class="bi bi-box"></i> Powder Handling</div>
                <div class="app-card"><i class="bi bi-stars"></i> Catalyst Research</div>
                <div class="app-card"><i class="bi bi-capsule"></i> Pharmaceutical R&D</div>
                <div class="app-card"><i class="bi bi-mortarboard"></i> University Laboratories</div>
                <div class="app-card"><i class="bi bi-building"></i> Industrial Research</div>
                <div class="app-card"><i class="bi bi-check2-circle"></i> Quality-Control Laboratories</div>
                <div class="app-card"><i class="bi bi-gear"></i> Controlled-Atmosphere Experiments</div>
                <div class="app-card"><i class="bi bi-tools"></i> Sensitive Component Assembly</div>
            </div>
        </div>
    </section>

    <!-- CUSTOMIZATION -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title">Fully Customizable Glove Box Solutions</h2>
            <p class="lead-text">
                Burhani Engineering Technology can customize the complete glove box according to individual application requirements.
            </p>
            <p class="lead-text mb-0">
                Customization can include:
            </p>
            
            <div class="custom-box mt-4">
                <ul class="custom-list">
                    <li><i class="bi bi-rulers"></i> Chamber size</li>
                    <li><i class="bi bi-aspect-ratio"></i> Acrylic chamber thickness</li>
                    <li><i class="bi bi-box-seam"></i> Transition chamber dimensions</li>
                    <li><i class="bi bi-circle"></i> Number and positioning of glove ports</li>
                    <li><i class="bi bi-hand"></i> Glove material</li>
                    <li><i class="bi bi-tools"></i> SS 304 or brass fittings</li>
                    <li><i class="bi bi-wind"></i> Argon inlet/outlet connections</li>
                    <li><i class="bi bi-plug"></i> Vacuum connections</li>
                    <li><i class="bi bi-gauge"></i> Pressure gauges</li>
                    <li><i class="bi bi-activity"></i> Oxygen monitoring</li>
                    <li><i class="bi bi-droplet"></i> Humidity monitoring</li>
                    <li><i class="bi bi-lightning"></i> Electrical feedthroughs</li>
                    <li><i class="bi bi-plus-circle"></i> Additional process accessories</li>
                </ul>
            </div>
            
            <p class="lead-text mt-4 mb-0">
                This enables the system to be engineered around the customer's process rather than requiring the customer to adapt their operation to a fixed standard design.
            </p>
        </div>
    </section>

    <!-- WORLDWIDE DELIVERY -->
    <section class="section-premium">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2 class="section-title">Worldwide Manufacturing & Delivery</h2>
                    <p class="lead-text">
                        Burhani Engineering Technology engineers and manufactures Argon Gas Purging Acrylic Vacuum Glove Boxes for customers around the world, supporting laboratories, research institutions, universities, pharmaceutical organizations, electronics industries, battery-development facilities and industrial R&D operations across international markets.
                    </p>
                    <p class="lead-text mb-0">
                        From initial technical consultation and customization through manufacturing, inspection, professional packing and dispatch, our objective is to provide dependable equipment and responsive support.
                    </p>
                    <p class="lead-text mt-4 mb-0" style="font-weight: 700; color: var(--bet-navy);">
                        We Deliver Engineering Quality, Satisfaction & Trust Around the World.
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
                        Get detailed technical specifications, model configurations, and customization options in our comprehensive product catalogue.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo asset('brochers/vacuum_glove_box/Acrylic Vacuum - Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box/Catalogue (1).pdf'); ?>" class="btn-premium text-decoration-none" target="_blank" download>
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
                <p>Interested in the Argon Gas Purging Acrylic Vacuum Glove Box? Contact us for pricing, customization options, and technical specifications tailored to your requirements.</p>
                <a href="<?php echo url('contact'); ?>" class="btn-premium text-decoration-none">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include_once(__DIR__ . '/../../../../../includes/footer.php'); ?>

