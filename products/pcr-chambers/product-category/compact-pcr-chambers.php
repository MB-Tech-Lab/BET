<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/product-catalog.php';

$location_name = "Global";
if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
    $lang = 'en';
    $country_slug = strtolower(str_replace(' ', '-', $country));
    
    if (strtolower($continent) === 'africa') {
        $lang_map = [
            'algeria'=>'ar','egypt'=>'ar','libya'=>'ar','morocco'=>'ar','sudan'=>'ar','tunisia'=>'ar','mauritania'=>'ar','somalia'=>'ar','somaliland'=>'ar',
            'benin'=>'fr','burkina-faso'=>'fr','burundi'=>'fr','cameroon'=>'fr','central-african-republic'=>'fr','chad'=>'fr','comoros'=>'fr','congo-brazzaville'=>'fr','congo-drc'=>'fr','djibouti'=>'fr','equatorial-guinea'=>'fr','gabon'=>'fr','guinea'=>'fr','ivory-coast'=>'fr','madagascar'=>'fr','mali'=>'fr','niger'=>'fr','rwanda'=>'fr','senegal'=>'fr','togo'=>'fr',
            'angola'=>'pt','cape-verde'=>'pt','guinea-bissau'=>'pt','mozambique'=>'pt','sao-tome'=>'pt',
            'kenya'=>'sw','tanzania'=>'sw'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    } elseif (strtolower($continent) === 'asia') {
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
    } elseif (strtolower($continent) === 'europe') {
        $lang_map = [
            'austria'=>'de', 'germany'=>'de', 'liechtenstein'=>'de', 'switzerland'=>'de',
            'france'=>'fr', 'belgium'=>'fr', 'luxembourg'=>'fr', 'monaco'=>'fr',
            'spain'=>'es', 'andorra'=>'es',
            'italy'=>'it', 'san-marino'=>'it',
            'portugal'=>'pt',
            'netherlands'=>'nl',
            'poland'=>'pl',
            'czech-republic'=>'cs', 'slovakia'=>'cs',
            'romania'=>'ro', 'moldova'=>'ro',
            'greece'=>'el', 'cyprus'=>'el'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    } elseif (strtolower($continent) === 'north-america') {
        $lang_map = [
            'canada'=>'fr', 'haiti'=>'fr',
            'costa-rica'=>'es', 'cuba'=>'es', 'dominican-republic'=>'es', 'el-salvador'=>'es', 
            'guatemala'=>'es', 'honduras'=>'es', 'mexico'=>'es', 'nicaragua'=>'es', 'panama'=>'es'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    } elseif (strtolower($continent) === 'south-america') {
        $lang_map = [
            'brazil'=>'pt',
            'argentina'=>'es', 'bolivia'=>'es', 'chile'=>'es', 'colombia'=>'es', 
            'ecuador'=>'es', 'paraguay'=>'es', 'peru'=>'es', 'uruguay'=>'es', 'venezuela'=>'es'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    }

    $local_terms = [
        'fr' => [
            'chamber' => 'chambres PCR compactes',
            'mfg' => 'Fabricant de chambres PCR compactes',
            'desc' => 'Les stations de travail PCR compactes BET sont disponibles à ' . $city . ', ' . $country . '. Chambres de préparation PCR conformes ISO avec filtration HEPA et stérilisation UV pour une manipulation sans contamination de l\'ADN/ARN.'
        ],
        'ar' => [
            'chamber' => 'غرف PCR المدمجة',
            'mfg' => 'الشركة المصنعة لغرف PCR المدمجة',
            'desc' => 'تتوفر محطات عمل PCR المدمجة BET في ' . $city . '، ' . $country . '. غرف تحضير PCR متوافقة مع ISO مع ترشيح HEPA وتعقيم بالأشعة فوق البنفسجية للتعامل مع الحمض النووي/الحمض النووي الريبي (DNA/RNA) خالية من التلوث.'
        ],
        'pt' => [
            'chamber' => 'Câmaras PCR Compactas',
            'mfg' => 'Fabricante de Câmaras PCR Compactas',
            'desc' => 'As estações de trabalho PCR compactas BET estão disponíveis em ' . $city . ', ' . $country . '. Câmaras de preparação de PCR em conformidade com ISO com filtração HEPA e esterilização UV para manuseio livre de contaminação de DNA/RNA.'
        ],
        'sw' => [
            'chamber' => 'Vyumba vya PCR vyenye Ufinyanzi',
            'mfg' => 'Mtengenezaji wa Vyumba vya PCR vyenye Ufinyanzi',
            'desc' => 'Kituo cha kazi cha BET Compact PCR kinapatikana katika ' . $city . ', ' . $country . '. Vyumba vya maandalizi ya PCR vinavyofuata ISO vilivyo na uchujaji wa HEPA na ufungaji wa UV kwa kushughulikia DNA/RNA bila uchafu.'
        ],
        'zh' => [
            'chamber' => '紧凑型 PCR 实验室操作台',
            'mfg' => '紧凑型 PCR 实验室操作台制造商',
            'desc' => 'BET 紧凑型 PCR 实验室操作台在 ' . $city . ', ' . $country . ' 提供。符合 ISO 标准的 PCR 准备室，具有 HEPA 过滤和紫外线消毒功能，用于无污染的 DNA/RNA 处理。'
        ],
        'ja' => [
            'chamber' => 'コンパクト PCR チャンバー',
            'mfg' => 'コンパクト PCR チャンバー メーカー',
            'desc' => 'BET コンパクト PCR ワークステーションは ' . $city . ', ' . $country . ' で入手可能です。DNA/RNA のコンタミネーションフリーな取り扱いのための HEPA ろ過および UV 滅菌を備えた ISO 準拠の PCR 準備室。'
        ],
        'ko' => [
            'chamber' => '소형 PCR 챔버',
            'mfg' => '소형 PCR 챔버 제조업체',
            'desc' => 'BET 소형 PCR 워크스테이션은 ' . $city . ', ' . $country . '에서 사용할 수 있습니다. 오염 없는 DNA/RNA 처리를 위한 HEPA 여과 및 UV 살균 기능을 갖춘 ISO 준수 PCR 준비실입니다.'
        ],
        'th' => [
            'chamber' => 'ตู้ PCR ขนาดกะทัดรัด',
            'mfg' => 'ผู้ผลิตตู้ PCR ขนาดกะทัดรัด',
            'desc' => 'สถานีงาน PCR ขนาดกะทัดรัดของ BET มีจำหน่ายใน ' . $city . ', ' . $country . ' ห้องเตรียม PCR ที่ได้มาตรฐาน ISO พร้อมการกรอง HEPA และการฆ่าเชื้อด้วย UV สำหรับการจัดการ DNA/RNA ที่ปราศจากการปนเปื้อน'
        ],
        'vi' => [
            'chamber' => 'Buồng PCR Nhỏ gọn',
            'mfg' => 'Nhà sản xuất Buồng PCR Nhỏ gọn',
            'desc' => 'Các máy trạm PCR Nhỏ gọn của BET có sẵn tại ' . $city . ', ' . $country . '. Các buồng chuẩn bị PCR tuân thủ tiêu chuẩn ISO với khả năng lọc HEPA và tiệt trùng bằng tia cực tím để xử lý DNA/RNA không bị nhiễm khuẩn.'
        ],
        'id' => [
            'chamber' => 'Bilik PCR Kompak',
            'mfg' => 'Produsen Bilik PCR Kompak',
            'desc' => 'Stasiun kerja PCR Kompak BET tersedia di ' . $city . ', ' . $country . '. Bilik persiapan PCR yang sesuai dengan ISO dengan penyaringan HEPA dan sterilisasi UV untuk penanganan DNA/RNA yang bebas kontaminasi.'
        ],
        'ms' => [
            'chamber' => 'Kebuk PCR Kompak',
            'mfg' => 'Pengeluar Kebuk PCR Kompak',
            'desc' => 'Stesen kerja PCR Kompak BET boleh didapati di ' . $city . ', ' . $country . '. Bilik persediaan PCR mematuhi ISO dengan penapisan HEPA dan pensterilan UV untuk pengendalian DNA/RNA tanpa pencemaran.'
        ],
        'hi' => [
            'chamber' => 'कॉम्पैक्ट पीसीआर चैंबर',
            'mfg' => 'कॉम्पैक्ट पीसीआर वर्कस्टेशन निर्माता',
            'desc' => 'BET कॉम्पैक्ट पीसीआर वर्कस्टेशन ' . $city . ', ' . $country . ' में उपलब्ध हैं। संदूषण-मुक्त डीएनए/आरएनए हैंडलिंग के लिए HEPA निस्पंदन और यूवी नसबंदी के साथ आईएसओ-अनुपालक पीसीआर तैयारी कक्ष।'
        ],
        'ur' => [
            'chamber' => 'کومپیکٹ پی سی آر چیمبرز',
            'mfg' => 'کومپیکٹ پی سی آر ورک اسٹیشن تیار کرنے والا',
            'desc' => 'BET کومپیکٹ پی سی آر ورک اسٹیشنز ' . $city . '، ' . $country . ' میں دستیاب ہیں۔ آلودگی سے پاک DNA/RNA کی ہینڈلنگ کے لیے HEPA فلٹریشن اور UV جراثیم کشی کے ساتھ ISO کے مطابق PCR تیاری کے کمرے۔'
        ],
        'ta' => [
            'chamber' => 'கச்சிதமான பிசிஆர் சேம்பர்கள்',
            'mfg' => 'கச்சிதமான பிசிஆர் ஒர்க்ஸ்டேஷன் உற்பத்தியாளர்',
            'desc' => 'BET கச்சிதமான பிசிஆர் ஒர்க்ஸ்டேஷன்கள் ' . $city . ', ' . $country . ' இல் கிடைக்கின்றன. மாசு இல்லாத DNA/RNA கையாளுதலுக்கான HEPA வடிகட்டுதல் மற்றும் UV ஸ்டெரிலைசேஷன் கொண்ட ISO-இணக்கமான பிசிஆர் தயாரிப்பு அறைகள்.'
        ],
        'de' => [
            'chamber' => 'Kompakte PCR-Kammern',
            'mfg' => 'Hersteller von kompakten PCR-Kammern',
            'desc' => 'BET kompakte PCR-Arbeitsstationen sind in ' . $city . ', ' . $country . ' erhältlich. ISO-konforme PCR-Vorbereitungskammern mit HEPA-Filtration und UV-Sterilisation für kontaminationsfreie DNA/RNA-Handhabung.'
        ],
        'es' => [
            'chamber' => 'Cámaras PCR Compactas',
            'mfg' => 'Fabricante de cámaras PCR compactas',
            'desc' => 'Las estaciones de trabajo PCR compactas de BET están disponibles en ' . $city . ', ' . $country . '. Cámaras de preparación de PCR que cumplen con ISO con filtración HEPA y esterilización UV para el manejo de ADN/ARN libre de contaminación.'
        ],
        'it' => [
            'chamber' => 'Camere PCR Compatte',
            'mfg' => 'Produttore di camere PCR compatte',
            'desc' => 'Le postazioni di lavoro PCR compatte BET sono disponibili a ' . $city . ', ' . $country . '. Camere di preparazione PCR conformi ISO con filtrazione HEPA e sterilizzazione UV per la manipolazione di DNA/RNA priva di contaminazioni.'
        ],
        'nl' => [
            'chamber' => 'Compacte PCR-Kamers',
            'mfg' => 'Fabrikant van compacte PCR-kamers',
            'desc' => 'BET compacte PCR-werkstations zijn beschikbaar in ' . $city . ', ' . $country . '. ISO-conforme PCR-voorbereidingskamers met HEPA-filtratie en UV-sterilisatie voor contaminatievrije DNA/RNA-verwerking.'
        ],
        'pl' => [
            'chamber' => 'Kompaktowe Komory PCR',
            'mfg' => 'Producent kompaktowych komór PCR',
            'desc' => 'Kompaktowe stacje robocze PCR BET są dostępne w ' . $city . ', ' . $country . '. Zgodne z ISO komory do przygotowywania PCR z filtracją HEPA i sterylizacją UV dla bezkontaminacyjnej obsługi DNA/RNA.'
        ],
        'cs' => [
            'chamber' => 'Kompaktní PCR Komory',
            'mfg' => 'Výrobce kompaktních PCR komor',
            'desc' => 'Kompaktní pracovní stanice PCR BET jsou k dispozici v ' . $city . ', ' . $country . '. Přípravné komory PCR v souladu s ISO s HEPA filtrací a UV sterilizací pro manipulaci s DNA/RNA bez kontaminace.'
        ],
        'ro' => [
            'chamber' => 'Camere PCR Compacte',
            'mfg' => 'Producător de camere PCR compacte',
            'desc' => 'Stațiile de lucru PCR compacte BET sunt disponibile în ' . $city . ', ' . $country . '. Camere de pregătire PCR conforme cu ISO, cu filtrare HEPA și sterilizare UV pentru manipularea ADN/ARN fără contaminare.'
        ],
        'el' => [
            'chamber' => 'Συμπαγείς Θάλαμοι PCR',
            'mfg' => 'Κατασκευαστής συμπαγών θαλάμων PCR',
            'desc' => 'Οι συμπαγείς σταθμοί εργασίας PCR BET διατίθενται σε ' . $city . ', ' . $country . '. Θάλαμοι προετοιμασίας PCR συμβατοί με ISO με φιλτράρισμα HEPA και αποστείρωση UV για χειρισμό DNA/RNA χωρίς μόλυνση.'
        ]
    ];

    if (isset($local_terms[$lang])) {
        $meta_title = $local_terms[$lang]['mfg'] . " | " . $local_terms[$lang]['chamber'];
        $meta_description = $local_terms[$lang]['desc'];
    } else {
        $meta_title = "Compact PCR Workstation Manufacturer in $city, $country | HEPA Filter PCR Chamber | DNA RNA Preparation Chamber";
        $meta_description = "BET Compact PCR Workstations available in $city, $country. ISO-compliant PCR preparation chamber with HEPA filtration and UV sterilization for contamination-free DNA/RNA handling.";
    }
    
    $canonical_url = product_category_url('pcr-chambers', 'compact-pcr-chambers');
} else {
    $meta_title = "Compact PCR Workstation Manufacturer India | HEPA Filter PCR Workstation | DNA RNA Preparation Chamber";
    $meta_description = "BET Compact PCR Workstations. ISO-compliant PCR preparation chamber with HEPA filtration and UV sterilization for contamination-free DNA/RNA handling.";
    $canonical_url = product_category_url('pcr-chambers', 'compact-pcr-chambers');
}

$product_schema = [
    "@context" => "https://schema.org/",
    "@type" => "Product",
    "name" => "Compact PCR Chambers",
    "image" => url("assets/img/Compact PCR Chambers/Compact PCR Chambers 5.jpg"),
    "description" => "ISO-compliant PCR preparation chamber with HEPA filtration and UV sterilization for contamination-free DNA/RNA handling.",
    "brand" => [
        "@type" => "Brand",
        "name" => "Burhani Engineering Technology"
    ],
    "sku" => "BET-825-PCR/HEPA",
    "offers" => [
        "@type" => "AggregateOffer",
        "url" => $canonical_url,
        "priceCurrency" => "USD",
        "availability" => "https://schema.org/InStock"
    ]
];

require_once __DIR__ . '/../../../includes/header.php';
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
                Compact PCR Chambers
              </a>
            </h1>
            <p class="mb-4 text-white">Compact PCR Workstation Manufacturer India | HEPA Filter PCR Workstation | DNA RNA Preparation Chamber</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
              <a href="<?php echo asset('pdf/BET-PCR-Chambers.pdf'); ?>" class="btn btn-primary d-flex align-items-center gap-2" download>
                <i class="bi bi-file-earmark-pdf"></i> Download Technical PDF
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
            
            <h2>Product Overview</h2>
            <p>Burhani Engineering Technology is a leading manufacturer of Compact PCR Chambers, delivering ISO-compliant environments tailored for high-precision <strong>PCR preparation</strong> and <strong>DNA/RNA handling</strong>. Our workstations are designed to meet the rigorous demands of modern <strong>molecular biology</strong> applications.</p>
            <p>Equipped with an advanced <strong>HEPA filtration</strong> system, these workstations act as a localized cleanroom, effectively keeping your benchtop free from airborne contaminants that could compromise sensitive assays. The built-in <strong>UV sterilization</strong> cycle ensures any residual genomic materials are neutralized, providing zero cross-contamination between test runs.</p>
            <p>Built with robust <strong>transparent acrylic construction</strong>, the chamber provides excellent visibility and durability. It is the perfect compact solution for <strong>pharmaceutical laboratories</strong>, <strong>biotechnology laboratories</strong>, <strong>research institutes</strong>, <strong>hospitals</strong>, <strong>universities</strong>, <strong>diagnostic centers</strong>, and <strong>quality control laboratories</strong>.</p>

            <h3 class="mt-4">Key Features</h3>
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li><strong>HEPA filtration system:</strong> 99.99% @ 0.3 micron</li>
                  <li><strong>UV sterilization:</strong> Rapid decontamination</li>
                  <li><strong>LED illumination:</strong> Bright, shadow-free lighting</li>
                  <li><strong>Transparent acrylic body:</strong> High visibility & chemical resistance</li>
                  <li><strong>Vertical clean airflow:</strong> Unidirectional ISO Class 5 protection</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li><strong>User-friendly controls:</strong> Easy parameter adjustments</li>
                  <li><strong>Low-noise operation:</strong> Whisper-quiet blowers (&lt;65 dB)</li>
                  <li><strong>Energy-efficient design:</strong> Reduced power consumption</li>
                  <li><strong>Compact laboratory footprint:</strong> Fits standard benchtops</li>
                  <li><strong>Easy cleaning and maintenance:</strong> Accessible interior</li>
                </ul>
              </div>
            </div>

            <h3 class="mt-4">Technical Specifications</h3>
            <div class="table-responsive my-4">
              <table class="table bet-spec-table table-bordered table-striped">
                <tbody>
                  <tr><th>Model</th><td>BET-825-PCR/HEPA</td></tr>
                  <tr><th>Product Type</th><td>PCR Chamber with HEPA Filtration</td></tr>
                  <tr><th>Manufacturer</th><td>Burhani Engineering Technology</td></tr>
                  <tr><th>External Dimensions</th><td>1003 × 635 × 813 mm</td></tr>
                  <tr><th>Internal Dimensions</th><td>953 × 572 × 597 mm</td></tr>
                  <tr><th>HEPA Efficiency</th><td>99.99% @ 0.3 micron</td></tr>
                  <tr><th>Power</th><td>230V AC, 50Hz</td></tr>
                  <tr><th>Noise</th><td>&lt;65 dB</td></tr>
                  <tr><th>Construction</th><td>Transparent Acrylic</td></tr>
                  <tr><th>Control Panel</th><td>Independent controls (Blower, UV, LED)</td></tr>
                </tbody>
              </table>
            </div>

            <h3 class="mt-5">Applications</h3>
            <div class="row gy-3">
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">PCR Setup</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">DNA Processing</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">RNA Processing</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">Molecular Biology</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">Biotechnology</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">Pharmaceutical Research</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">Clinical Diagnostics</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">Microbiology</div></div></div>
              <div class="col-md-4"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold">Universities & QC Labs</div></div></div>
            </div>

            <h3 class="mt-5">Advantages</h3>
            <p>Choosing the BET Compact PCR Chamber provides numerous operational advantages:</p>
            <ul>
              <li><strong>Eliminates false-positive PCR results</strong> by physically shielding the master mix from stray DNA/RNA.</li>
              <li><strong>Protects the operator</strong> from biohazardous aerosols during sample preparation.</li>
              <li><strong>Quiet operating environment</strong> thanks to low-noise centrifugal blowers that reduce laboratory fatigue.</li>
              <li><strong>Minimal maintenance downtime</strong> with easy access for cleaning, wipe-downs, and rapid HEPA filter replacement.</li>
            </ul>

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
                
                $active_cat = 'compact-pcr-chambers';

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
        <p>Compact PCR Chambers</p>
      </div>
      <div class="row gy-4 justify-content-center" data-aos="fade-up">
        <?php
        $gallery = [
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 5.jpg'),  'alt' => 'Compact PCR Chambers 5'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 4.jpg'), 'alt' => 'Compact PCR Chambers 4'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 1.png'), 'alt' => 'Compact PCR Chambers 1'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 6.png'), 'alt' => 'Compact PCR Chambers 6'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 2.png'), 'alt' => 'Compact PCR Chambers 2'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 3.png'), 'alt' => 'Compact PCR Chambers 3'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 8.png'), 'alt' => 'Compact PCR Chambers 8'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 9.png'), 'alt' => 'Compact PCR Chambers 9'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 10.png'), 'alt' => 'Compact PCR Chambers 10'],
          ['img' => asset('img/Compact PCR Chambers/Compact PCR Chambers 7.png'), 'alt' => 'Compact PCR Chambers 7']
        ];
        foreach ($gallery as $gimg): ?>
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

<?php require_once __DIR__ . '/../../../includes/contact-section.php'; ?>
<?php require_once __DIR__ . '/../../../includes/footer.php'; ?>
