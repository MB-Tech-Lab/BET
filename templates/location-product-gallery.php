<?php
/**
 * Dynamic Location-Product Gallery Template
 * Burhani Engineering Technology
 */

require_once ABSPATH . 'includes/gallery-helper.php';
require_once ABSPATH . 'includes/product-catalog.php';

// Fallbacks
if (!isset($city)) $city = 'Chennai';
if (!isset($country)) $country = 'India';
if (!isset($continent)) $continent = 'Asia';

$catalog = get_product_catalog();
$product = $catalog[$product_slug] ?? null;

if (!$product) {
    // Check if product_slug is actually a standalone page
    foreach ($catalog as $key => $p) {
        foreach ($p['standalone_pages'] ?? [] as $sa_slug => $label) {
            if ($sa_slug === $product_slug) {
                $product = $p;
                $product_slug = $key;
                break 2;
            }
        }
    }
}

if (!$product) {
    header("HTTP/1.0 404 Not Found");
    exit('Product not found.');
}

$product_name = $product['name'];
$product_key = $product['key'];

// Discover images automatically
$images = discover_gallery_images($product_slug, $category_slug);

// Discover brochures automatically
$product_dir = dirname($product['internal_url']);
$brochures = [];
$brochure_files = glob(ABSPATH . 'brochers/' . basename($product_dir) . '/*.pdf');
if ($brochure_files) {
    foreach ($brochure_files as $bf) {
        $bf_rel = str_replace(ABSPATH, '', $bf);
        $bf_rel = str_replace('\\', '/', $bf_rel);
        $brochures[] = [
            'url' => '/' . ltrim($bf_rel, '/'),
            'name' => ucwords(str_replace(['-', '_'], ' ', pathinfo($bf, PATHINFO_FILENAME)))
        ];
    }
}

// SEO Meta Setup
$meta_title = "$product_name Gallery in $city, $country | Burhani Engineering Technology";
$meta_description = "Explore high-quality images and technical schematics of the $product_name in $city, $country. View specs, features, and download brochures.";

// Canonical generation
$_cont_s = normalize_route_path($continent);
$_coun_s = normalize_route_path($country);
$_city_s = normalize_route_path($city);
$clean_p_slug = strtolower(str_replace(['_', ' '], '-', $product_slug));
$gallery_url = "/locations/{$_cont_s}/{$_coun_s}/{$_city_s}/products/{$clean_p_slug}/gallery/";
$canonical_url = url(trim($gallery_url, '/'));

// Breadcrumbs
$breadcrumbs = [
    ['url' => url(), 'label' => 'Home'],
    ['url' => url("locations/{$_cont_s}/{$_coun_s}/{$_city_s}/"), 'label' => $city],
    ['url' => url("locations/{$_cont_s}/{$_coun_s}/{$_city_s}/products/{$clean_p_slug}/"), 'label' => $product_name],
    ['url' => $canonical_url, 'label' => 'Gallery']
];

// Localized industries for description
$local_industries = ['Automotive Manufacturing', 'Electronics Assembly', 'Chemical Research', 'Aerospace Engineering'];

// Render header
require_once ABSPATH . 'includes/header.php';
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">
<style>
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    .gallery-item {
        background: #fff;
        border: 1px solid #eaecf0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }
    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .gallery-item-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background: #f8f9fa;
        transition: transform 0.3s ease;
    }
    .gallery-item:hover .gallery-item-img {
        transform: scale(1.05);
    }
    .gallery-item-info {
        padding: 15px;
        background: #fff;
    }
    .gallery-item-title {
        font-size: 1rem;
        font-weight: 700;
        color: var(--heading-color);
        margin-bottom: 5px;
    }
    .gallery-item-size {
        font-size: 0.8rem;
        color: #6b7280;
    }
    /* Lightbox modal stylings */
    .lightbox-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        inset: 0;
        background: rgba(0, 0, 0, 0.9);
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .lightbox-modal.active {
        display: flex;
    }
    .lightbox-content-wrapper {
        position: relative;
        max-width: 90%;
        max-height: 80%;
    }
    .lightbox-img {
        max-width: 100%;
        max-height: 80vh;
        object-fit: contain;
        transition: transform 0.2s ease;
        border-radius: 8px;
    }
    .lightbox-img.zoomed {
        transform: scale(1.5);
        cursor: zoom-out;
    }
    .lightbox-close, .lightbox-prev, .lightbox-next {
        position: absolute;
        color: #fff;
        font-size: 2.5rem;
        cursor: pointer;
        user-select: none;
        transition: color 0.2s;
    }
    .lightbox-close {
        top: 20px;
        right: 30px;
    }
    .lightbox-close:hover { color: #e63946; }
    .lightbox-prev {
        left: -60px;
        top: 50%;
        transform: translateY(-50%);
    }
    .lightbox-next {
        right: -60px;
        top: 50%;
        transform: translateY(-50%);
    }
    .lightbox-prev:hover, .lightbox-next:hover { color: var(--accent-color); }
    .lightbox-caption {
        color: #fff;
        margin-top: 15px;
        font-size: 1.1rem;
        text-align: center;
        font-weight: 600;
    }
    .lightbox-counter {
        color: rgba(255,255,255,0.7);
        font-size: 0.9rem;
        margin-top: 5px;
    }
    .zoom-btn {
        background: rgba(255,255,255,0.2);
        border: none;
        color: #fff;
        padding: 5px 12px;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
        font-size: 0.9rem;
    }
    .zoom-btn:hover { background: rgba(255,255,255,0.3); }

    @media (max-width: 768px) {
        .lightbox-prev { left: 10px; }
        .lightbox-next { right: 10px; }
    }
</style>

<!-- JSON-LD Structured Data Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        <?php
        $idx = 1;
        foreach ($breadcrumbs as $bc) {
            echo ($idx > 1 ? ',' : '') . json_encode([
                "@type" => "ListItem",
                "position" => $idx++,
                "name" => $bc['label'],
                "item" => $bc['url']
            ]);
        }
        ?>
      ]
    },
    {
      "@type": "Product",
      "name": "<?php echo htmlspecialchars($product_name); ?> Gallery",
      "image": [
        <?php
        $img_urls = [];
        foreach ($images as $img) {
            $img_urls[] = url(ltrim($img['url'], '/'));
        }
        echo implode(',', array_map('json_encode', $img_urls));
        ?>
      ],
      "description": "<?php echo htmlspecialchars($meta_description); ?>",
      "brand": {
        "@type": "Brand",
        "name": "Burhani Engineering Technology"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can I view technical specifications of the <?php echo $product_name; ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, detailed technical parameters, dimensions, and materials options are available on this gallery page."
          }
        },
        {
          "@type": "Question",
          "name": "Are brochures available for download?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, official PDF catalogs and brochures can be downloaded directly from the resources section of the gallery."
          }
        }
      ]
    }
  ]
}
</script>

<main class="main">
    <!-- Hero Section -->
    <section class="page-title dark-background" style="background: linear-gradient(135deg, #0B2545 0%, #134074 100%); padding: 60px 0; color: #fff;">
        <div class="container text-center">
            <h1 class="text-white mb-2"><?php echo htmlspecialchars($product_name); ?> Gallery in <?php echo "$city, $country"; ?></h1>
            <p class="lead" style="opacity: 0.9; max-width: 700px; margin: 0 auto;">
                High-resolution photos, design renders, and technical documentation for the premium <?php echo htmlspecialchars($product_name); ?>.
            </p>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                    <?php foreach ($breadcrumbs as $idx => $bc): ?>
                        <?php if ($idx === count($breadcrumbs) - 1): ?>
                            <li class="breadcrumb-item active text-white" aria-current="page"><?php echo htmlspecialchars($bc['label']); ?></li>
                        <?php else: ?>
                            <li class="breadcrumb-item"><a href="<?php echo $bc['url']; ?>" class="text-white-50 text-decoration-none"><?php echo htmlspecialchars($bc['label']); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Intro -->
                    <h2>Localized Image Showcase for <?php echo "$city, $country"; ?></h2>
                    <p>
                        Burhani Engineering Technology is a premium manufacturer and exporter of standard and custom-engineered <?php echo htmlspecialchars($product_name); ?> systems. Below is an automated compilation of actual machinery builds, structural steel frames, vacuum port integrations, and digital design templates deployed to research laboratories and production plants globally.
                    </p>

                    <!-- Gallery Grid -->
                    <?php if (!empty($images)): ?>
                        <div class="gallery-grid">
                            <?php foreach ($images as $index => $img): ?>
                                <div class="gallery-item" onclick="openLightbox(<?php echo $index; ?>)">
                                    <img src="<?php echo $img['url']; ?>" class="gallery-item-img" alt="<?php echo htmlspecialchars($img['alt']); ?>" loading="lazy">
                                    <div class="gallery-item-info">
                                        <h4 class="gallery-item-title"><?php echo htmlspecialchars($img['title']); ?></h4>
                                        <div class="gallery-item-size"><?php echo $img['width']; ?> × <?php echo $img['height']; ?> px</div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info py-4 text-center">
                            <strong>No specific images found.</strong> We populate our gallery folders dynamically. Check back soon or contact our sales engineering division for catalog drawings.
                        </div>
                    <?php endif; ?>

                    <hr class="my-5">

                    <!-- Technical Specs -->
                    <h3>Technical Specifications</h3>
                    <div class="table-responsive my-4">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-dark text-white">
                                    <th>Parameter</th>
                                    <th>Specification Range / Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($product['specs'] as $label => $val): ?>
                                    <tr>
                                        <td><strong><?php echo htmlspecialchars($label); ?></strong></td>
                                        <td><?php echo htmlspecialchars($val); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Brochure Download block -->
                    <?php if (!empty($brochures)): ?>
                        <div class="sidebar-box p-4 bg-white rounded shadow-sm border-top border-4 border-primary mb-4" style="border-top: 3px solid var(--accent-color) !important;">
                            <h4 class="mb-3" style="font-weight: 700; color: var(--heading-color);">Official Catalog Downloads</h4>
                            <ul class="list-unstyled mb-0">
                                <?php foreach ($brochures as $bro): ?>
                                    <li class="mb-3 pb-2 border-bottom">
                                        <a href="<?php echo $bro['url']; ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none" target="_blank">
                                            <span><i class="bi bi-file-earmark-pdf text-danger me-2"></i> <?php echo htmlspecialchars($bro['name']); ?></span>
                                            <i class="bi bi-download text-primary"></i>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- FAQ Sidebar -->
                    <div class="sidebar-box p-4 bg-white rounded shadow-sm mb-4">
                        <h4 class="mb-3" style="font-weight:700; color:var(--heading-color);">Frequently Asked Questions</h4>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item border-0 border-bottom mb-2">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#faqSide1">
                                        Is customization supported?
                                    </button>
                                </h5>
                                <div id="faqSide1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body p-2 small text-muted">
                                        Yes, every system can be fully customized with bespoke flanges, automated feedthrough controllers, and size modifications to suit your footprint.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="sidebar-box p-4 bg-dark text-white rounded shadow-sm">
                        <h4 class="text-white mb-3" style="font-weight:700;">Request Custom Quote</h4>
                        <p class="small" style="opacity:0.85;">
                            Need detailed schematics, price quotation, or engineering drawings for a <?php echo $product_name; ?> installation in <?php echo $city; ?>?
                        </p>
                        <a href="#contact" class="btn btn-primary w-100 fw-bold">Contact Our Sales Engineers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox-modal">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <span class="lightbox-prev" onclick="changeImage(-1)">&#10094;</span>
    <div class="lightbox-content-wrapper">
        <img id="lightbox-img" class="lightbox-img" src="" alt="Lightbox Showcase" onclick="toggleZoom()">
    </div>
    <span class="lightbox-next" onclick="changeImage(1)">&#10095;</span>
    <div id="lightbox-caption" class="lightbox-caption"></div>
    <button class="zoom-btn" onclick="toggleZoom()">Toggle Zoom</button>
    <div id="lightbox-counter" class="lightbox-counter"></div>
</div>

<script>
    let currentImageIndex = 0;
    const galleryImages = <?php echo json_encode($images); ?>;

    function openLightbox(index) {
        currentImageIndex = index;
        updateLightbox();
        document.getElementById('lightbox').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.remove('active');
        document.getElementById('lightbox-img').classList.remove('zoomed');
        document.body.style.overflow = 'auto';
    }

    function changeImage(direction) {
        currentImageIndex = (currentImageIndex + direction + galleryImages.length) % galleryImages.length;
        document.getElementById('lightbox-img').classList.remove('zoomed');
        updateLightbox();
    }

    function updateLightbox() {
        if (!galleryImages.length) return;
        const img = galleryImages[currentImageIndex];
        const lightboxImg = document.getElementById('lightbox-img');
        lightboxImg.src = img.url;
        lightboxImg.alt = img.alt;
        document.getElementById('lightbox-caption').innerText = img.caption;
        document.getElementById('lightbox-counter').innerText = `Image ${currentImageIndex + 1} of ${galleryImages.length}`;
    }

    function toggleZoom() {
        document.getElementById('lightbox-img').classList.toggle('zoomed');
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('lightbox');
        if (!modal.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') changeImage(-1);
        if (e.key === 'ArrowRight') changeImage(1);
    });
</script>

<?php
require_once ABSPATH . 'includes/contact-section.php';
require_once ABSPATH . 'includes/footer.php';
?>
