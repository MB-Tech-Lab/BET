<?php
// ============================================================
// BET Product Listing Page
// ============================================================
$meta_title       = "Our Products | Burhani Engineering Technology";
$meta_description = "Browse our full range of industrial testing equipment including vacuum chambers, leak testers, glove boxes, and customized engineering solutions.";

require_once __DIR__ . '/config.php';
$canonical_url = url('products/');

require_once __DIR__ . '/product-catalog.php';
$catalog = get_product_catalog();

require_once __DIR__ . '/header.php';
?>

<style>
  .products-hero {
    background: linear-gradient(135deg, var(--heading-color, #1a1a1a) 0%, #2a2a2a 100%);
    color: #fff;
    padding: 80px 0 60px;
    text-align: center;
    position: relative;
  }
  .products-hero h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    color: #fff !important;
  }
  .products-hero p {
    font-size: 1.15rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
  }
  .product-grid-section {
    padding: 60px 0;
  }
  .product-card-item {
    background: #fff;
    border: 1px solid #eaecf0;
    border-radius: 12px;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;
  }
  .product-card-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  }
  .product-card-img-wrapper {
    height: 220px;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-bottom: 1px solid #eaecf0;
  }
  .product-card-img-wrapper img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
  }
  .product-card-content {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }
  .product-card-category {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--accent-color);
    margin-bottom: 8px;
    letter-spacing: 0.5px;
  }
  .product-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 12px;
    color: var(--heading-color);
  }
  .product-card-desc {
    font-size: 0.9rem;
    color: #6b7280;
    line-height: 1.5;
    margin-bottom: 20px;
    flex-grow: 1;
  }
  .product-card-btn {
    background: var(--heading-color);
    color: #fff;
    text-align: center;
    padding: 10px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.2s;
  }
  .product-card-btn:hover {
    background: var(--accent-color);
    color: #fff;
  }
</style>

<main class="main">

  <!-- Hero Section -->
  <section class="products-hero">
    <div class="container">
      <h1>Our Products</h1>
      <p>High-Precision Vacuum and Industrial Material Testing Equipment Manufactured to ASME & International Standards.</p>
    </div>
  </section>

  <!-- Product Listing Grid -->
  <section class="product-grid-section">
    <div class="container">
      <div class="row g-4">
        <?php foreach ($catalog as $slug => $prod): ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="product-card-item">
              <div class="product-card-img-wrapper">
                <?php
                  $img_src = str_starts_with($prod['image'], 'http') ? $prod['image'] : asset($prod['image']);
                ?>
                <img src="<?php echo $img_src; ?>" alt="<?php echo htmlspecialchars($prod['name']); ?>" loading="lazy">
              </div>
              <div class="product-card-content">
                <div class="product-card-category"><?php echo htmlspecialchars($prod['category'] ?? 'Testing Equipment'); ?></div>
                <h4 class="product-card-title"><?php echo htmlspecialchars($prod['name']); ?></h4>
                <p class="product-card-desc"><?php echo htmlspecialchars($prod['overview']); ?></p>
                <a href="<?php echo url($prod['internal_url']); ?>" class="product-card-btn">Learn More</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>
