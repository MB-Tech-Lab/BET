<?php
/**
 * Product Image Gallery – Reusable Include
 * Displays all products as clickable image buttons with name + links
 */
$gallery_products = [
    [
        'img'      => asset('img/bubble-emmission-leak-test-chamber.webp'),
        'name'     => 'Bubble Emission Leak Test Chamber',
        'subtitle' => 'ASTM F2096 Internal Pressurization',
        'internal' => url('products/Vacuum_Leak_Test_Machine/Vacuum_Leak_Test_Machine.php'),
        'bhf'      => 'https://bhfvacuum.com/bubble-emmission-leak-test-chamber.html',
        'badge'    => 'Leak Testing',
    ],
    [
        'img'      => asset('img/Glove Box\acrylic-vacuum-glove-box.webp'),
        'name'     => 'Acrylic Vacuum Glove Box',
        'subtitle' => 'Inert Atmosphere Workstation',
        'internal' => url('products/vacuum_glove_box/vacuum_glove_box.php'),
        'bhf'      => 'https://bhfvacuum.com/acrylic-vacuum-glove-box.html',
        'badge'    => 'Glove Box',
    ],
    [
        'img'      => asset('img/Vacuum Degassing Chamber/Stainless steel Vacuum Degassing Chamber.jpeg'),
        'name'     => 'Stainless Steel Vacuum Degassing Chamber',
        'subtitle' => 'Heavy-Duty Degassing Solution',
        'internal' => url('products/vacuum_degassing_chamber/Vacuum_Degassing_Chamber.php'),
        'bhf'      => 'https://bhfvacuum.com/vacuum-degassing-chamber.html',
        'badge'    => 'Degassing',
    ],
    [
        'img'      => asset('img/acrylic-vacuum-chamber-cylinder.webp'),
        'name'     => 'Acrylic Vacuum Chamber – Cylinder',
        'subtitle' => 'Transparent Cylindrical Degassing',
        'internal' => url('products/vacuum_degassing_chamber/product-category/avdccylinder.php'),
        'bhf'      => 'https://bhfvacuum.com/vacuum-degassing-chamber.html',
        'badge'    => 'Degassing',
    ],
    [
        'img'      => asset('img\ATS Pressure Aging Vessle\ATS Pressure Aging Vessle1.png'),
        'name'     => 'Heated Vacuum Chamber / Oven',
        'subtitle' => 'Temperature-Controlled Degassing',
        'internal' => url('products/vacuum_degassing_chamber/product-category/hvdc.php'),
        'bhf'      => 'https://bhfvacuum.com/vacuum-degassing-chamber.html',
        'badge'    => 'Heated',
    ],
    [
        'img'      => asset('img/Vacuum Box Weld Testing/Flat Bottom Vacuum box for testing butt welds on flat surfaces.jpeg'),
        'name'     => 'Flat Bottom Vacuum Box – Butt Weld Testing',
        'subtitle' => 'NDT Weld Integrity Inspection',
        'internal' => url('products/flat-vacuum-box-weld-testing/flat-vacuum-box-weld-testing.php'),
        'bhf'      => 'https://bhfvacuum.com/vacuum-box-weld-testing-equipment.html',
        'badge'    => 'Weld Testing',
    ],
    [
        'img'      => asset('img\Glove Box\Globe Box Dome 360°Glove Chamber\Compact Laboratory Glove Box.png'),
        'name'     => 'Compact Laboratory Glove Box',
        'subtitle' => 'Controlled Laboratory Environments for Academic & Industrial Research',
        'internal' => url('products/vacuum-glove-box/product-category/compact-university-glove-box.php'),
        'bhf'      => 'https://bhfvacuum.com/vacuum-degassing-chamber.html',
        'badge'    => 'Silicone',
    ],
    [
        'img'      => asset('img/gem-stone-oiling-and-crack-filling-machine.webp'),
        'name'     => 'Gem Stone Oiling & Crack Filling Machine',
        'subtitle' => 'Vacuum Impregnation System',
        'internal' => url('products/vacuum_degassing_chamber/Vacuum_Degassing_Chamber.php'),
        'bhf'      => 'https://bhfvacuum.com/vacuum-degassing-chamber.html',
        'badge'    => 'Specialty',
    ],
    [
        'img'      => asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle.png'),
        'name'     => 'ATS Pressure Aging Vessel',
        'subtitle' => 'Asphalt Binder Long-Term Aging',
        'internal' => url('products/ats-pressure-aging-vessel/'),
        'bhf'      => 'https://bhfvacuum.com/ats-pressure-aging-vessel-asphalt-binding-testing.html',
        'badge'    => 'Asphalt Testing',
    ],
    [
        'img'      => asset('img/Compact PCR Chambers/Compact PCR Chambers 5.jpg'),
        'name'     => 'PCR Chambers',
        'subtitle' => 'Sterile Contamination-Free Environment',
        'internal' => url('products/pcr-chambers/pcr_chambers.php'),
        'bhf'      => 'https://bhfvacuum.com/',
        'badge'    => 'Laboratory',
    ],
];
?>

<!-- ===== Product Image Gallery Section ===== -->
<section class="pig-section">
  <style>
    .pig-section {
      padding: 70px 0 60px;
      background: #f0f4f8;
    }
    .pig-title {
      text-align: center;
      margin-bottom: 44px;
    }
    .pig-title h2 {
      font-size: 2rem;
      font-weight: 800;
      color: var(--heading-color, #1a3c5e);
      margin-bottom: 10px;
    }
    .pig-title p {
      font-size: 1.05rem;
      color: #5a6878;
    }
    .pig-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
      gap: 24px;
    }
    .pig-card {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.10);
      background: #fff;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .pig-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 36px rgba(0,0,0,0.18);
    }
    .pig-card img {
      width: 100%;
      height: 210px;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }
    .pig-card:hover img {
      transform: scale(1.06);
    }
    .pig-badge {
      position: absolute;
      top: 12px;
      left: 12px;
      background: var(--accent-color, #e67300);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      padding: 4px 10px;
      border-radius: 20px;
    }
    .pig-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(10,30,60,0.90) 0%, rgba(10,30,60,0.20) 55%, transparent 100%);
      opacity: 0;
      transition: opacity 0.35s ease;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 20px;
      gap: 10px;
    }
    .pig-card:hover .pig-overlay {
      opacity: 1;
    }
    .pig-overlay .pig-btn-row {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }
    .pig-overlay a.pig-btn {
      flex: 1;
      min-width: 100px;
      text-align: center;
      padding: 8px 10px;
      border-radius: 8px;
      font-size: 0.78rem;
      font-weight: 700;
      text-decoration: none;
      transition: 0.2s;
    }
    .pig-btn.primary {
      background: var(--accent-color, #e67300);
      color: #fff;
    }
    .pig-btn.primary:hover { background: #c55d00; }
    .pig-btn.secondary {
      background: rgba(255,255,255,0.15);
      color: #fff;
      border: 1px solid rgba(255,255,255,0.4);
      backdrop-filter: blur(4px);
    }
    .pig-btn.secondary:hover {
      background: rgba(255,255,255,0.30);
    }
    .pig-info {
      padding: 14px 16px 16px;
      border-top: 1px solid #eef2f6;
    }
    .pig-info h4 {
      font-size: 0.92rem;
      font-weight: 700;
      color: var(--heading-color, #1a3c5e);
      margin: 0 0 4px;
      line-height: 1.3;
    }
    .pig-info p {
      font-size: 0.78rem;
      color: #7a8fa6;
      margin: 0;
    }
    @media (max-width: 576px) {
      .pig-grid { grid-template-columns: 1fr 1fr; gap: 14px; }
      .pig-card img { height: 150px; }
    }
    @media (max-width: 380px) {
      .pig-grid { grid-template-columns: 1fr; }
    }
  </style>

  <div class="container">
    <div class="pig-title" data-aos="fade-up">
      <h2>Our Product Gallery</h2>
      <p>Click any product image to explore full specifications, features, and pricing</p>
    </div>

    <div class="pig-grid">
      <?php foreach ($gallery_products as $i => $p): ?>
      <div class="pig-card" data-aos="fade-up" data-aos-delay="<?php echo ($i % 4) * 80; ?>"
           onclick="window.location.href='<?php echo $p['internal']; ?>'">
        <span class="pig-badge"><?php echo htmlspecialchars($p['badge']); ?></span>
        <img src="<?php echo $p['img']; ?>"
             alt="<?php echo htmlspecialchars($p['name']); ?> – Burhani Engineering Technology"
             loading="lazy">
        <div class="pig-overlay">
          <div class="pig-btn-row">
            <a href="<?php echo $p['internal']; ?>" class="pig-btn primary">
              <i class="bi bi-eye me-1"></i> View Details
            </a>
            <a href="<?php echo $p['bhf']; ?>" target="_blank" rel="noopener" class="pig-btn secondary"
               onclick="event.stopPropagation();">
              <i class="bi bi-box-arrow-up-right me-1"></i> BHF Site
            </a>
          </div>
        </div>
        <div class="pig-info">
          <h4><?php echo htmlspecialchars($p['name']); ?></h4>
          <p><?php echo htmlspecialchars($p['subtitle']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- ===== /Product Image Gallery Section ===== -->

