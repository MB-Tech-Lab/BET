<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../includes/product-catalog.php';

$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $lang = 'en';
    if (strtolower($continent) === 'africa') {
        $country_slug = strtolower(str_replace(' ', '-', $country));
        $lang_map = [
            'algeria'=>'ar','egypt'=>'ar','libya'=>'ar','morocco'=>'ar','sudan'=>'ar','tunisia'=>'ar','mauritania'=>'ar','somalia'=>'ar','somaliland'=>'ar',
            'benin'=>'fr','burkina-faso'=>'fr','burundi'=>'fr','cameroon'=>'fr','central-african-republic'=>'fr','chad'=>'fr','comoros'=>'fr','congo-brazzaville'=>'fr','congo-drc'=>'fr','djibouti'=>'fr','equatorial-guinea'=>'fr','gabon'=>'fr','guinea'=>'fr','ivory-coast'=>'fr','madagascar'=>'fr','mali'=>'fr','niger'=>'fr','rwanda'=>'fr','senegal'=>'fr','togo'=>'fr',
            'angola'=>'pt','cape-verde'=>'pt','guinea-bissau'=>'pt','mozambique'=>'pt','sao-tome'=>'pt',
            'kenya'=>'sw','tanzania'=>'sw'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    } elseif (strtolower($continent) === 'asia') {
        $country_slug = strtolower(str_replace(' ', '-', $country));
        $lang_map = [
            'bahrain'=>'ar','iraq'=>'ar','jordan'=>'ar','kuwait'=>'ar','lebanon'=>'ar','oman'=>'ar','palestine'=>'ar','qatar'=>'ar','saudi-arabia'=>'ar','syria'=>'ar','united-arab-emirates'=>'ar','yemen'=>'ar',
            'china'=>'zh','taiwan'=>'zh','singapore'=>'zh',
            'japan'=>'ja',
            'south-korea'=>'ko','north-korea'=>'ko',
            'thailand'=>'th',
            'vietnam'=>'vi',
            'indonesia'=>'id',
            'malaysia'=>'ms','brunei'=>'ms',
            'india'=>'hi',
            'pakistan'=>'ur',
            'sri-lanka'=>'ta'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    }

    if ($lang === 'fr') {
        $meta_title = "Chambres PCR à $city, $country | Stations de Travail PCR";
        $meta_description = "Chambres PCR BET disponibles à $city, $country. Environnement stérile et contrôlé pour la préparation PCR et la manipulation d'ADN/ARN sans contamination.";
    } elseif ($lang === 'ar') {
        $meta_title = "غرف PCR في $city، $country | محطات عمل PCR المخبرية";
        $meta_description = "غرف PCR من BET متوفرة في $city، $country. بيئة معقمة ومحكومة لتحضير PCR والتعامل مع الحمض النووي (DNA/RNA) خالية من التلوث.";
    } elseif ($lang === 'pt') {
        $meta_title = "Câmaras PCR em $city, $country | Estações de Trabalho PCR";
        $meta_description = "Câmaras PCR BET disponíveis em $city, $country. Ambiente estéril e controlado para preparação de PCR e manuseamento de ADN/ARN sem contaminação.";
    } elseif ($lang === 'sw') {
        $meta_title = "Vyumba vya PCR huko $city, $country | Vituo vya Kazi vya PCR vya Maabara";
        $meta_description = "Vyumba vya PCR vya BET vinapatikana $city, $country. Mazingira safi na yaliyodhibitiwa kwa maandalizi ya PCR na ushughulikiaji wa DNA/RNA bila uchafuzi.";
    } elseif ($lang === 'zh') {
        $meta_title = "PCR 实验室操作台位于 $city, $country | PCR Chambers";
        $meta_description = "BET PCR 实验室操作台在 $city, $country 提供。无污染 PCR 准备和 DNA/RNA 处理的无菌可控环境。";
    } elseif ($lang === 'ja') {
        $meta_title = "$city, $country の PCRチャンバー | PCR ワークステーション";
        $meta_description = "BET PCRチャンバーは $city, $country で利用可能です。コンタミネーションのない PCR 準備および DNA/RNA 取り扱いのための無菌制御環境。";
    } elseif ($lang === 'ko') {
        $meta_title = "$city, $country 의 PCR 챔버 | PCR 워크스테이션";
        $meta_description = "BET PCR 챔버를 $city, $country 에서 이용할 수 있습니다. 오염 없는 PCR 준비 및 DNA/RNA 처리를 위한 멸균 통제 환경.";
    } elseif ($lang === 'th') {
        $meta_title = "ตู้ PCR ใน $city, $country | สถานีงาน PCR";
        $meta_description = "ตู้ PCR ของ BET มีจำหน่ายใน $city, $country สภาพแวดล้อมที่ปราศจากเชื้อและควบคุมได้สำหรับการเตรียม PCR และการจัดการ DNA/RNA";
    } elseif ($lang === 'vi') {
        $meta_title = "Buồng PCR tại $city, $country | Trạm làm việc PCR";
        $meta_description = "Buồng PCR BET có sẵn tại $city, $country. Môi trường vô trùng, được kiểm soát để chuẩn bị PCR không bị nhiễm chéo và xử lý DNA/RNA.";
    } elseif ($lang === 'id') {
        $meta_title = "Bilik PCR di $city, $country | Stasiun Kerja PCR";
        $meta_description = "Bilik PCR BET tersedia di $city, $country. Lingkungan steril dan terkendali untuk persiapan PCR bebas kontaminasi dan penanganan DNA/RNA.";
    } elseif ($lang === 'ms') {
        $meta_title = "Kebuk PCR di $city, $country | Stesen Kerja PCR";
        $meta_description = "Kebuk PCR BET tersedia di $city, $country. Persekitaran steril yang dikawal untuk penyediaan PCR bebas pencemaran dan pengendalian DNA/RNA.";
    } elseif ($lang === 'hi') {
        $meta_title = "$city, $country में पीसीआर चैंबर | पीसीआर वर्कस्टेशन";
        $meta_description = "BET पीसीआर चैंबर $city, $country में उपलब्ध हैं। संदूषण-मुक्त पीसीआर तैयारी और डीएनए/आरएनए हैंडलिंग के लिए बाँझ, नियंत्रित वातावरण।";
    } elseif ($lang === 'ur') {
        $meta_title = "$city, $country میں پی سی آر چیمبرز | پی سی آر ورک اسٹیشن";
        $meta_description = "بی ای ٹی پی سی آر چیمبرز $city, $country میں دستیاب ہیں۔ آلودگی سے پاک پی سی آر کی تیاری اور ڈی این اے/آر این اے کو سنبھالنے کے لیے جراثیم سے پاک، کنٹرول شدہ ماحول۔";
    } elseif ($lang === 'ta') {
        $meta_title = "$city, $country இல் பிசிஆர் சேம்பர்கள் | பிசிஆர் ஒர்க்ஸ்டேஷன்கள்";
        $meta_description = "BET பிசிஆர் சேம்பர்கள் $city, $country இல் கிடைக்கின்றன. மாசு இல்லாத பிசிஆர் தயாரிப்பு மற்றும் டிஎன்ஏ/ஆர்என்ஏ கையாளுதலுக்கான மலட்டு, கட்டுப்படுத்தப்பட்ட சூழல்.";
    } else {
        $meta_title = "PCR Chambers in $city, $country | Laboratory PCR Workstations";
        $meta_description = "BET PCR Chambers available in $city, $country. High-performance, sterile, controlled environment for contamination-free PCR preparation and DNA/RNA handling.";
    }
    $canonical_url = product_url('pcr-chambers');
} else {
    $meta_title = "PCR Chambers | Laboratory PCR Workstations | Burhani Engineering Technology";
    $meta_description = "BET PCR Chambers provide a sterile, controlled environment for contamination-free PCR preparation and DNA/RNA handling. Featuring HEPA filtration and UV sterilization.";
    $canonical_url = product_url('pcr-chambers');
}

$product_schema = [
    "@context" => "https://schema.org/",
    "@type" => "Product",
    "name" => "PCR Chambers",
    "image" => url("assets/img/Compact PCR Chambers/Compact PCR Chambers 5.jpg"),
    "description" => "A sterile, controlled environment for contamination-free PCR preparation and DNA/RNA handling.",
    "brand" => [
        "@type" => "Brand",
        "name" => "Burhani Engineering Technology"
    ],
    "sku" => "BET-PCR-SERIES",
    "offers" => [
        "@type" => "AggregateOffer",
        "url" => $canonical_url,
        "priceCurrency" => "USD",
        "availability" => "https://schema.org/InStock"
    ]
];

require_once __DIR__ . '/../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo asset('css/products.css'); ?>">

<!-- Open Graph / SEO Meta -->
<script type="application/ld+json">
<?php echo json_encode($product_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

<main class="main">

  <!-- Hero Section -->
  <div class="page-title" data-aos="fade" style="background: linear-gradient(rgba(12, 43, 89, 0.8), rgba(12, 43, 89, 0.8)), url('<?php echo asset('img/Compact PCR Chambers/Compact PCR Chambers 5.jpg'); ?>'); background-size: cover; background-position: center;">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="mb-4">
              <a href="<?php echo $canonical_url; ?>" class="seo-product-link text-white">
                PCR Chambers
              </a>
            </h1>
            <p class="mb-4 text-white">Provide a sterile, controlled environment for contamination-free PCR preparation and DNA/RNA handling.</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content Section -->
  <section class="section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="content">
            <div class="row align-items-center mb-4">
              <div class="col-lg-7">
                <h2 class="product-title">
                    <a href="<?php echo $canonical_url; ?>" class="seo-product-link">PCR Chambers</a>
                </h2>
                
                <p>BET PCR Chambers provide a sterile, controlled environment for contamination-free PCR preparation and DNA/RNA handling. Featuring advanced HEPA filtration and powerful UV sterilization, these chambers ensure the highest level of protection for your sensitive samples against airborne contaminants.</p>
                
                <p>Our systems are designed for clinical diagnostics, biotechnology, and research laboratories. With low noise operation and a compact bench-top design, they fit seamlessly into your workflow while maintaining optimal sterile conditions.</p>
              </div>
              <div class="col-lg-5">
                <!-- Primary hero image -->
                <a href="<?php echo asset('img/Compact PCR Chambers/Compact PCR Chambers 5.jpg'); ?>" class="glightbox" data-gallery="product-gallery" data-title="PCR Chambers">
                  <img src="<?php echo asset('img/Compact PCR Chambers/Compact PCR Chambers 5.jpg'); ?>" alt="PCR Chambers" class="img-fluid rounded shadow-sm mb-3" loading="lazy" style="width:100%;object-fit:contain;background:#f8f9fa;padding:8px;border-radius:8px;">
                </a>
              </div>
            </div>

            <h3 class="mt-4">Technical Design and Features</h3>
            <ul>
              <li><strong>HEPA Filtration system:</strong> High-efficiency particulate air filtration ensures an ultra-clean working environment.</li>
              <li><strong>UV Sterilization lamp:</strong> Built-in UV-C light rapidly decontaminates the workspace before and after operations.</li>
              <li><strong>LED Illumination:</strong> Bright, energy-efficient lighting provides excellent visibility of the work area.</li>
              <li><strong>Transparent Acrylic body:</strong> High-quality, durable construction allows for clear monitoring and chemical resistance.</li>
              <li><strong>Low Noise operation:</strong> Quiet performance minimizes laboratory distractions.</li>
              <li><strong>Bench-top Design:</strong> Space-saving footprint perfect for any laboratory bench.</li>
            </ul>

            <h3 class="mt-4">Applications</h3>
            <p>Our PCR Chambers are trusted across a variety of scientific fields:</p>
            <ul>
              <li>PCR Preparation</li>
              <li>DNA Extraction</li>
              <li>RNA Handling</li>
              <li>Clinical Diagnostics</li>
              <li>Biotechnology</li>
            </ul>

            <p>By investing in a BET PCR Chamber, you guarantee sample integrity, reduce the risk of cross-contamination, and meet the strict demands of modern molecular biology protocols.</p>

          </div>
        </div>

        <!-- Product Categories Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-box category-sidebar">
            <h4 class="sidebar-title">Product Categories</h4>
            <ul class="list-unstyled mb-0 category-list">
              <?php
                $catalog = get_product_catalog();
                $subcats = $catalog['pcr-chambers']['subcategories'] ?? [];
                
                $current_uri = $_SERVER['REQUEST_URI'] ?? '';
                $active_cat = '';

                $total = count($subcats);
                $i = 0;
                foreach($subcats as $slug => $name):
                    $i++;
                    $is_active = ($slug === $active_cat);
                    $border_class = ($i < $total) ? 'mb-3 pb-2 border-bottom' : 'mb-0';
              ?>
              <li class="<?php echo $border_class; ?>">
                <?php if ($is_active): ?>
                <a href="#" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link active">
                  <span class="fw-bold" style="color: #fff;"><?php echo htmlspecialchars($name); ?></span>
                  <i class="bi bi-arrow-left-circle-fill" style="color: #fff;"></i>
                </a>
                <?php else: ?>
                <a href="<?php echo product_category_url('pcr-chambers', $slug); ?>" class="d-flex justify-content-between align-items-center text-dark text-decoration-none category-link">
                  <span><?php echo htmlspecialchars($name); ?></span>
                  <i class="bi bi-chevron-right text-primary"></i>
                </a>
                <?php endif; ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Product Gallery Section -->
  <section class="section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Product Gallery</h2>
        <p>PCR Chambers – Official Product Images</p>
      </div>
      <div class="row gy-4 justify-content-center" data-aos="fade-up">
        <?php
        $ats_gallery = [
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 5.jpg'),  'alt' => 'Compact PCR Chambers 5'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 4.jpg'), 'alt' => 'Compact PCR Chambers 4'],
        ];
        foreach ($ats_gallery as $gimg): ?>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="<?php echo $gimg['img']; ?>" class="glightbox" data-gallery="ats-gallery" data-title="<?php echo htmlspecialchars($gimg['alt']); ?>">
            <div style="background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 4px 15px rgba(0,0,0,.07);padding:10px;height:160px;display:flex;align-items:center;justify-content:center;">
              <img src="<?php echo $gimg['img']; ?>" alt="<?php echo htmlspecialchars($gimg['alt']); ?>" loading="lazy" style="max-width:100%;max-height:140px;object-fit:contain;">
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>



</main>

<style>
    .seo-product-link {
        color: var(--heading-color);
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 700;
    }
    .seo-product-link:hover {
        color: var(--accent-color);
        text-decoration: none;
    }
    .page-title .heading {
        background-color: var(--heading-color);
        padding: 80px 0;
        color: #fff;
    }
    .page-title h1 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .page-title p {
        font-size: 1.25rem;
        opacity: 0.9;
    }
    /* Premium Sidebar Design */
    .category-sidebar {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.06);
        border: 1px solid rgba(0,0,0,0.03);
        border-top: 4px solid var(--accent-color);
        padding: 30px;
        position: sticky;
        top: 100px;
        z-index: 10;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .category-sidebar:hover {
        box-shadow: 0 15px 50px rgba(0,0,0,0.1);
    }
    .sidebar-title {
        color: var(--heading-color);
        font-weight: 700;
        font-size: 1.25rem;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 2px solid rgba(0,0,0,0.05);
        padding-bottom: 15px;
    }
    .category-list li {
        border-bottom: 1px solid rgba(0,0,0,0.05) !important;
        margin-bottom: 8px !important;
        padding-bottom: 8px !important;
    }
    .category-list li:last-child {
        border-bottom: none !important;
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
    }
    .category-link {
        transition: all 0.3s ease;
        font-weight: 500;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 8px;
        color: #444 !important;
        background: transparent;
    }
    .category-link:hover {
        background: rgba(0,0,0,0.02);
        color: var(--accent-color) !important;
        transform: translateX(5px);
    }
    .category-link.active {
        background: var(--accent-color);
        color: #ffffff !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transform: translateX(5px);
    }
    .category-link span {
        flex: 1;
        line-height: 1.4;
    }
    .category-link i {
        font-size: 0.85rem;
        transition: transform 0.3s ease;
    }
    .category-link:hover i {
        transform: translateX(3px);
    }
    .category-link.active i {
        color: #ffffff !important;
    }
    .glightbox {
        cursor: zoom-in;
        display: block;
    }
    .glightbox img {
        transition: transform 0.3s ease;
    }
    .glightbox:hover img {
        transform: scale(1.02);
    }
    @media (max-width: 991px) {
        .category-sidebar {
            position: static;
            margin-top: 40px;
        }
    }
</style>

<?php require_once __DIR__ . '/../../includes/contact-section.php'; ?>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
