<?php
if (defined('METADATA_ONLY') && METADATA_ONLY) {
    return;
}

// Resolve metadata fallback
if (!isset($meta_title)) {
    $meta_title = "Manufacturer, Supplier, Exporter of Vacuum Testing Equipment in $city, $country";
}
if (!isset($meta_description)) {
    $meta_description = "Precision vacuum leak testing, degassing chambers, and weld inspection systems — serving the industrial needs of $city by Burhani Engineering Technology.";
}
if (!isset($canonical_url)) {
    $canonical_url = url("locations/" . normalize_route_path($continent) . "/" . normalize_route_path($country) . "/" . normalize_route_path($city) . "/");
}

require_once ABSPATH . 'includes/header.php';
require_once ABSPATH . 'includes/product-catalog.php';
$catalog = get_product_catalog();
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<main class="main">

  <!-- Hero Section -->
  <div class="page-title" data-aos="fade">
    <div class="heading" style="background: <?php echo $hero_gradient; ?>; padding: 80px 0; color: #fff;">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-9">
            <h1>Manufacturer, Supplier, Exporter of Vacuum Testing Equipment in <?php echo "$city, $country"; ?></h1>
            <p class="mb-4" style="font-size:1.15rem;opacity:0.92;">
              Precision vacuum leak testing, degassing chambers, and weld inspection systems — serving the industrial needs of <?php echo $city; ?> by Burhani Engineering Technology.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a href="#products" class="btn btn-light fw-bold px-4 py-2">
                <i class="bi bi-grid me-1"></i> Explore Products
              </a>
              <a href="#contact" class="btn btn-outline-light px-4 py-2">
                <i class="bi bi-chat-dots me-1"></i> Request a Quote
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Intro Section -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8" data-aos="fade-up">
          <h2>Vacuum Testing Equipment in <?php echo "$city, $country"; ?></h2>
          <p><?php echo $intro_p1; ?></p>
          <p><?php echo $intro_p2; ?></p>

          <!-- Products Anchor -->
          <div id="products"></div>

          <div class="mt-5 mb-4">
            <h3 style="font-weight: 700; color: var(--heading-color);">Products & Solutions Available in <?php echo htmlspecialchars($city); ?></h3>
          </div>

          <?php
          // Dynamically iterate over the product catalog instead of a static array
          // Exclude Metal Body sub-products from the general location page listing
          $excluded_sub_products = [
              'two-port-glove-box',
              'three-port-glove-box',
              'four-port-glove-box',
              'four-port-glove-box-modular',
              'four-port-glove-box-two-sided',
              'six-port-glove-box-two-sided',
              'eight-port-glove-box-two-sided'
          ];
          
          $filtered_catalog = array_filter($catalog, function($slug) use ($excluded_sub_products) {
              return !in_array($slug, $excluded_sub_products);
          }, ARRAY_FILTER_USE_KEY);
          
          $keys = array_keys($filtered_catalog);
          $last_slug = end($keys);

          foreach ($filtered_catalog as $slug => $prod):
              // Get dynamic text from location data if it exists, otherwise use fallback text
              $p_key = $prod['key'] ?? '';
              $p_data = $products[$p_key] ?? null;
              
              if ($p_data) {
                  $title = $p_data['title'];
                  $desc = $p_data['desc'];
              } else {
                  // Fallback content for products that don't have location-specific SEO text yet
                  $title = htmlspecialchars($prod['name']) . " Supplier in " . htmlspecialchars($city);
                  $desc = [
                      "Burhani Engineering Technology is a trusted <strong>" . htmlspecialchars($prod['name']) . " Supplier</strong> in " . htmlspecialchars($city) . ", " . htmlspecialchars($country) . ". " . htmlspecialchars($prod['overview'])
                  ];
              }

              $is_last = ($slug === $last_slug);
              $border_class = $is_last ? "" : " pb-4 border-bottom";
              
              $dynamic_url = url("locations/" . strtolower(str_replace(' ', '-', $continent)) . "/" . strtolower(str_replace(' ', '-', $country)) . "/" . strtolower(str_replace(' ', '-', $city)) . "/products/" . $slug . "/");
              $img_src = str_starts_with($prod['image'], 'http') ? $prod['image'] : asset($prod['image']);
              ?>
          <!-- <?php echo htmlspecialchars($prod['name']); ?> -->
          <div class="row gy-4 align-items-center my-4<?php echo $border_class; ?>">
            <div class="col-lg-8" data-aos="fade-up">
              <h2><a href="<?php echo $dynamic_url; ?>" style="color:inherit;text-decoration:none;"><?php echo $title; ?></a></h2>
              <?php foreach ($desc as $paragraph): ?>
                <p><?php echo $paragraph; ?></p>
              <?php endforeach; ?>
              <a href="<?php echo $dynamic_url; ?>" class="btn btn-primary mt-3">
                <i class="bi bi-arrow-right-circle me-1"></i> View Full Product Details
              </a>
            </div>
            <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="100">
              <img src="<?php echo $img_src; ?>" alt="<?php echo htmlspecialchars($title); ?>" class="img-fluid rounded shadow" loading="lazy">
            </div>
          </div>
          <?php endforeach; ?>

          <!-- Location CTA Banner -->
          <?php if (isset($cta_banner)): ?>
          <!-- Location CTA Banner -->
          <div class="py-5 px-4 rounded text-center text-white my-4 shadow-sm" style="background: <?php echo $hero_gradient; ?>;" data-aos="zoom-in">
            <h2 class="text-white mb-3"><?php echo $cta_banner['title']; ?></h2>
            <p class="mb-4" style="opacity:0.9;"><?php echo $cta_banner['desc']; ?></p>
            <a href="#contact" class="btn btn-lg btn-light fw-bold px-5 py-3 rounded-pill">
              <i class="bi bi-envelope me-2"></i> Contact Us Today
            </a>
          </div>
          <?php endif; ?>

        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <?php
          if (isset($custom_sidebar_html)) {
              echo $custom_sidebar_html;
          } else {
              $sidebar_slug = strtolower(str_replace(' ', '-', $continent));
              $sidebar_file = ABSPATH . 'includes/sidebars/' . $sidebar_slug . '.php';
              if (file_exists($sidebar_file)) {
                  include $sidebar_file;
              }
          }
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once ABSPATH . 'includes/contact-section.php'; ?>
<?php require_once ABSPATH . 'includes/footer.php'; ?>

