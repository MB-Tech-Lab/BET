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
            'title' => 'Grandes Chambres PCR à ' . $city . ', ' . $country . ' | Station de Travail à Contamination Contrôlée',
            'desc' => 'Grandes Chambres PCR BET disponibles à ' . $city . ', ' . $country . '. Station de travail à grande échelle avec filtration HEPA et stérilisation UV pour la manipulation d\'ADN/ARN.'
        ],
        'ar' => [
            'title' => 'غرف PCR الكبيرة في ' . $city . '، ' . $country . ' | محطة عمل محكومة التلوث',
            'desc' => 'غرف PCR الكبيرة من BET متوفرة في ' . $city . '، ' . $country . '. محطة عمل واسعة النطاق مع ترشيح HEPA وتعقيم بالأشعة فوق البنفسجية للتعامل مع الحمض النووي (DNA/RNA).'
        ],
        'pt' => [
            'title' => 'Câmaras PCR Grandes em ' . $city . ', ' . $country . ' | Estação de Trabalho de Contaminação Controlada',
            'desc' => 'Câmaras PCR Grandes BET disponíveis em ' . $city . ', ' . $country . '. Estação de trabalho em grande escala com filtração HEPA e esterilização UV para manuseamento de ADN/ARN.'
        ],
        'sw' => [
            'title' => 'Vyumba Vikubwa vya PCR huko ' . $city . ', ' . $country . ' | Kituo cha Kazi Kilichodhibitiwa Kuzuia Uchafuzi',
            'desc' => 'Vyumba Vikubwa vya PCR vya BET vinapatikana ' . $city . ', ' . $country . '. Kituo kikubwa cha kazi chenye kichujio cha HEPA na uzuiaji viini vya UV kwa ushughulikiaji wa DNA/RNA.'
        ],
        'zh' => [
            'title' => '大型 PCR 实验室操作台位于 ' . $city . ', ' . $country . ' | 污染控制工作站',
            'desc' => 'BET 大型 PCR 实验室操作台在 ' . $city . ', ' . $country . ' 提供。具有 HEPA 过滤和紫外线消毒功能的大型污染控制工作站，用于 DNA/RNA 处理。'
        ],
        'ja' => [
            'title' => $city . ', ' . $country . ' の大型PCRチャンバー | コンタミネーション制御ワークステーション',
            'desc' => 'BET大型PCRチャンバーは ' . $city . ', ' . $country . ' で利用可能です。DNA/RNA取り扱いのための、HEPAフィルターとUV滅菌を備えた大規模なコンタミネーション制御ワークステーション。'
        ],
        'ko' => [
            'title' => $city . ', ' . $country . ' 의 대형 PCR 챔버 | 오염 통제 워크스테이션',
            'desc' => 'BET 대형 PCR 챔버를 ' . $city . ', ' . $country . ' 에서 이용할 수 있습니다. DNA/RNA 처리를 위한 HEPA 여과 및 UV 살균 기능이 있는 대규모 오염 통제 워크스테이션.'
        ],
        'th' => [
            'title' => 'ตู้ PCR ขนาดใหญ่ใน ' . $city . ', ' . $country . ' | สถานีงานควบคุมการปนเปื้อน',
            'desc' => 'ตู้ PCR ขนาดใหญ่ของ BET มีจำหน่ายใน ' . $city . ', ' . $country . ' สถานีงานควบคุมการปนเปื้อนขนาดใหญ่พร้อมระบบกรอง HEPA และการฆ่าเชื้อด้วยรังสี UV สำหรับการจัดการ DNA/RNA'
        ],
        'vi' => [
            'title' => 'Buồng PCR Lớn tại ' . $city . ', ' . $country . ' | Trạm làm việc kiểm soát ô nhiễm',
            'desc' => 'Buồng PCR Lớn BET có sẵn tại ' . $city . ', ' . $country . '. Trạm làm việc kiểm soát ô nhiễm quy mô lớn với lọc HEPA và khử trùng UV để xử lý DNA/RNA.'
        ],
        'id' => [
            'title' => 'Bilik PCR Besar di ' . $city . ', ' . $country . ' | Stasiun Kerja Terkendali Kontaminasi',
            'desc' => 'Bilik PCR Besar BET tersedia di ' . $city . ', ' . $country . '. Stasiun kerja terkendali kontaminasi skala besar dengan penyaringan HEPA dan sterilisasi UV untuk penanganan DNA/RNA.'
        ],
        'ms' => [
            'title' => 'Kebuk PCR Besar di ' . $city . ', ' . $country . ' | Stesen Kerja Terkawal Pencemaran',
            'desc' => 'Kebuk PCR Besar BET tersedia di ' . $city . ', ' . $country . '. Stesen kerja terkawal pencemaran skala besar dengan penapisan HEPA dan pensterilan UV untuk pengendalian DNA/RNA.'
        ],
        'hi' => [
            'title' => $city . ', ' . $country . ' में बड़े पीसीआर चैंबर | प्रदूषण-नियंत्रित वर्कस्टेशन',
            'desc' => 'BET बड़े पीसीआर चैंबर ' . $city . ', ' . $country . ' में उपलब्ध हैं। डीएनए/आरएनए हैंडलिंग के लिए HEPA निस्पंदन और यूवी नसबंदी के साथ बड़े पैमाने पर प्रदूषण-नियंत्रित वर्कस्टेशन।'
        ],
        'ur' => [
            'title' => $city . ', ' . $country . ' میں بڑے پی سی آر چیمبرز | آلودگی سے کنٹرول شدہ ورک اسٹیشن',
            'desc' => 'بی ای ٹی کے بڑے پی سی آر چیمبرز ' . $city . ', ' . $country . ' میں دستیاب ہیں۔ ڈی این اے/آر این اے کو سنبھالنے کے لیے HEPA فلٹریشن اور UV جراثیم کشی کے ساتھ بڑے پیمانے پر آلودگی سے کنٹرول شدہ ورک اسٹیشن۔'
        ],
        'ta' => [
            'title' => $city . ', ' . $country . ' இல் பெரிய பிசிஆர் சேம்பர்கள் | மாசு-கட்டுப்படுத்தப்பட்ட ஒர்க்ஸ்டேஷன்',
            'desc' => 'BET பெரிய பிசிஆர் சேம்பர்கள் ' . $city . ', ' . $country . ' இல் கிடைக்கின்றன. DNA/RNA கையாளுதலுக்கான HEPA வடிகட்டுதல் மற்றும் UV ஸ்டெரிலைசேஷன் கொண்ட பெரிய அளவிலான மாசு-கட்டுப்படுத்தப்பட்ட ஒர்க்ஸ்டேஷன்.'
        ],
        'de' => [
            'title' => 'Große PCR-Kammern in ' . $city . ', ' . $country . ' | Kontaminationskontrollierte Arbeitsstation',
            'desc' => 'BET Große PCR-Kammern sind in ' . $city . ', ' . $country . ' erhältlich. Großflächige kontaminationskontrollierte Arbeitsstation mit HEPA-Filtration und UV-Sterilisation für DNA/RNA-Handhabung.'
        ],
        'es' => [
            'title' => 'Cámaras PCR Grandes en ' . $city . ', ' . $country . ' | Estación de Trabajo de Contaminación Controlada',
            'desc' => 'Cámaras PCR Grandes de BET disponibles en ' . $city . ', ' . $country . '. Estación de trabajo a gran escala de contaminación controlada con filtración HEPA y esterilización UV para manejo de ADN/ARN.'
        ],
        'it' => [
            'title' => 'Grandi Camere PCR a ' . $city . ', ' . $country . ' | Stazione di Lavoro a Contaminazione Controllata',
            'desc' => 'Grandi Camere PCR BET disponibili a ' . $city . ', ' . $country . '. Stazione di lavoro su larga scala a contaminazione controllata con filtrazione HEPA e sterilizzazione UV per la manipolazione di DNA/ARN.'
        ],
        'nl' => [
            'title' => 'Grote PCR-Kamers in ' . $city . ', ' . $country . ' | Contaminatiegecontroleerd Werkstation',
            'desc' => 'BET Grote PCR-Kamers beschikbaar in ' . $city . ', ' . $country . '. Grootschalig contaminatiegecontroleerd werkstation met HEPA-filtratie en UV-sterilisatie voor DNA/RNA-behandeling.'
        ],
        'pl' => [
            'title' => 'Duże Komory PCR w ' . $city . ', ' . $country . ' | Stacja Robocza o Kontrolowanym Zanieczyszczeniu',
            'desc' => 'Duże Komory PCR BET dostępne w ' . $city . ', ' . $country . '. Wielkoskalowa stacja robocza o kontrolowanym zanieczyszczeniu z filtracją HEPA i sterylizacją UV do obsługi DNA/RNA.'
        ],
        'cs' => [
            'title' => 'Velké PCR Komory v ' . $city . ', ' . $country . ' | Pracovní Stanice s Kontrolovanou Kontaminací',
            'desc' => 'Velké PCR Komory BET dostupné v ' . $city . ', ' . $country . '. Velkoplošná pracovní stanice s kontrolovanou kontaminací, HEPA filtrací a UV sterilizací pro manipulaci s DNA/RNA.'
        ],
        'ro' => [
            'title' => 'Camere PCR Mari în ' . $city . ', ' . $country . ' | Stație de Lucru cu Contaminare Controlată',
            'desc' => 'Camere PCR Mari BET disponibile în ' . $city . ', ' . $country . '. Stație de lucru la scară largă cu contaminare controlată, filtrare HEPA și sterilizare UV pentru manipularea ADN/ARN.'
        ],
        'el' => [
            'title' => 'Μεγάλοι Θάλαμοι PCR σε ' . $city . ', ' . $country . ' | Σταθμός Εργασίας Ελεγχόμενης Μόλυνσης',
            'desc' => 'Μεγάλοι Θάλαμοι PCR BET διαθέσιμοι σε ' . $city . ', ' . $country . '. Σταθμός εργασίας μεγάλης κλίμακας ελεγχόμενης μόλυνσης με φιλτράρισμα HEPA και αποστείρωση UV για χειρισμό DNA/RNA.'
        ]
    ];

    if (isset($local_terms[$lang])) {
        $meta_title = $local_terms[$lang]['title'];
        $meta_description = $local_terms[$lang]['desc'];
    } else {
        $meta_title = "PCR Chambers Big in $city, $country | Contamination-Controlled Workstation | DNA RNA Handling";
        $meta_description = "BET PCR Chambers Big available in $city, $country. Large scale contamination-controlled workstation with HEPA filtration and UV sterilization for DNA/RNA handling.";
    }
    $canonical_url = product_category_url('pcr-chambers', 'pcr-chambers-big');
} else {
    $meta_title = "PCR Chambers Big | Contamination-Controlled Workstation | DNA RNA Handling";
    $meta_description = "BET PCR Chambers Big. Large scale contamination-controlled workstation with HEPA filtration and UV sterilization for PCR preparation and DNA/RNA handling.";
    $canonical_url = product_category_url('pcr-chambers', 'pcr-chambers-big');
}

$product_schema = [
    "@context" => "https://schema.org/",
    "@type" => "Product",
    "name" => "PCR Chambers Big",
    "image" => url("assets/img/PCR Chambers Big/PCR Chambers Big (4) Catelog.png"),
    "description" => "Large scale contamination-controlled workstation with HEPA filtration and UV sterilization for PCR preparation and DNA/RNA handling.",
    "brand" => [
        "@type" => "Brand",
        "name" => "Burhani Engineering Technology"
    ],
    "sku" => "BET-PCR-BIG",
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
  <div class="page-title" data-aos="fade" style="background: linear-gradient(rgba(12, 43, 89, 0.8), rgba(12, 43, 89, 0.8)), url('<?php echo asset('img/PCR Chambers Big/PCR Chambers Big (4) Catelog.png'); ?>'); background-size: cover; background-position: center;">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="mb-4">
              <a href="<?php echo $canonical_url; ?>" class="seo-product-link text-white">
                PCR Chambers Big
              </a>
            </h1>
            <p class="mb-4 text-white">Contamination-controlled workstation for PCR preparation and DNA/RNA handling</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#contact" class="btn btn-outline-primary d-flex align-items-center gap-2" style="color: #fff; border-color: #fff;">
                <i class="bi bi-chat-dots"></i> Request a Quote
              </a>
              <a href="<?php echo asset('pdf/BET-PCR-Chambers-Big.pdf'); ?>" class="btn btn-primary d-flex align-items-center gap-2" download>
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
            <p>Our <strong>PCR Chambers Big</strong> provide an advanced, large-scale <strong>contamination-controlled workstation</strong> for critical laboratory tasks. These spacious enclosures are optimized for high-throughput <strong>PCR preparation</strong> and precise <strong>DNA/RNA handling</strong>, ensuring zero cross-contamination between complex batches.</p>
            <p>Featuring a state-of-the-art <strong>HEPA filtration</strong> system alongside powerful <strong>UV sterilization</strong> and bright <strong>LED lighting</strong>, these chambers deliver a pristine, shadow-free ISO-compliant environment. Built with thick, durable <strong>transparent acrylic</strong>, they offer unimpeded visibility across the entire workspace.</p>
            <p>They are the ultimate workstation upgrade for <strong>research laboratories</strong>, <strong>pharmaceutical laboratories</strong>, large-scale <strong>biotechnology</strong> operations, <strong>hospitals</strong>, and <strong>universities</strong> requiring extra space for bulky instruments and complex sample staging.</p>

            <h3 class="mt-4">Key Features</h3>
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li><strong>HEPA filtration:</strong> Removes 99.99% of particulate matter</li>
                  <li><strong>UV sterilization:</strong> Programmable cycles for rapid decontamination</li>
                  <li><strong>LED illumination:</strong> Bright, shadow-free internal lighting</li>
                  <li><strong>Transparent acrylic:</strong> High durability and excellent visibility</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li><strong>Ergonomic access:</strong> Wide front opening for loading bulky equipment</li>
                  <li><strong>Independent controls:</strong> Separate switches for blower, UV, and LED</li>
                  <li><strong>Low maintenance:</strong> Easy to clean internal surfaces</li>
                  <li><strong>Laboratory-grade construction:</strong> Engineered for continuous usage</li>
                </ul>
              </div>
            </div>

            <h3 class="mt-4">Technical Specifications</h3>
            <div class="table-responsive my-4">
              <table class="table bet-spec-table table-bordered table-striped">
                <tbody>
                  <tr><th>Manufacturer</th><td>Burhani Engineering Technology</td></tr>
                  <tr><th>External Dimensions</th><td>1003 × 635 × 813 mm</td></tr>
                  <tr><th>Internal Dimensions</th><td>953 × 572 × 597 mm</td></tr>
                  <tr><th>Construction</th><td>Transparent Acrylic</td></tr>
                  <tr><th>HEPA Efficiency</th><td>99.99%</td></tr>
                  <tr><th>Lighting</th><td>LED</td></tr>
                  <tr><th>Sterilization</th><td>UV</td></tr>
                  <tr><th>Control Panel</th><td>Independent</td></tr>
                </tbody>
              </table>
            </div>

            <h3 class="mt-5">Applications</h3>
            <div class="row gy-3">
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>PCR Preparation</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>DNA Handling</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>RNA Handling</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>Molecular Biology</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>Biotechnology</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>Pharmaceutical Research</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>Clinical Diagnostics</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>Universities</div></div></div>
              <div class="col-md-6"><div class="card p-3 shadow-sm border-0 bg-light"><div class="fw-bold"><i class="bi bi-check-circle-fill text-primary me-2"></i>Research Institutes</div></div></div>
            </div>

            <h3 class="mt-5">Why Choose BET</h3>
            <p>Burhani Engineering Technology (BET) is a trusted name in laboratory infrastructure. Our large-scale PCR chambers are built from the highest quality laboratory-grade materials, ensuring longevity, uncompromised sterility, and safety for your personnel. With comprehensive warranty coverage and reliable performance metrics, BET remains the premier choice for research and pharmaceutical facilities globally.</p>

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
                
                $active_cat = 'pcr-chambers-big';

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
        <p>PCR Chambers Big</p>
      </div>
      <div class="row gy-4 justify-content-center" data-aos="fade-up">
        <?php
        $gallery = [
          ['img' => asset('img/PCR Chambers Big/PCR Chambers Big (1).png'), 'alt' => 'Large PCR Chamber Workspace'],
          ['img' => asset('img/PCR Chambers Big/PCR Chambers Big (5).png'), 'alt' => 'PCR Chamber Big Technical Render'],
          ['img' => asset('img/PCR Chambers Big/PCR Chambers Big (6).png'), 'alt' => 'Large PCR Chamber Front Operation'],
          ['img' => asset('img/PCR Chambers Big/PCR Chambers Big (2).png'), 'alt' => 'BET PCR Chamber Big Detail'],
          ['img' => asset('img/PCR Chambers Big/PCR Chambers Big (3).png'), 'alt' => 'Large PCR Workstation Setup'],
          ['img' => asset('img/PCR Chambers Big/PCR Chambers Big (4) Catelog.png'), 'alt' => 'Large Scale Contamination Controlled Chamber']
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
