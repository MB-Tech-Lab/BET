<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../includes/product-catalog.php';

// Generate gallery dynamically
$gallery_dir = ABSPATH . 'assets/img/Sealing Testing Chamber/';
$stc_gallery = [];
if (is_dir($gallery_dir)) {
    $files = array_diff(scandir($gallery_dir), ['.', '..']);
    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
            $stc_gallery[] = [
                'img' => asset('img/Sealing Testing Chamber/' . $file),
                'alt' => pathinfo($file, PATHINFO_FILENAME)
            ];
        }
    }
    // Sort to maintain consistent order
    sort($stc_gallery);
}
$main_image_url = !empty($stc_gallery) ? $stc_gallery[0]['img'] : asset("img/logo.svg");

$location_name = "Global";
$lang = 'en';

if (!empty($is_location_page) && $is_location_page && !empty($continent) && !empty($country) && !empty($city)) {
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
            'saudi-arabia'=>'ar','uae'=>'ar','qatar'=>'ar','kuwait'=>'ar','bahrain'=>'ar','oman'=>'ar','yemen'=>'ar','iraq'=>'ar','syria'=>'ar','jordan'=>'ar','lebanon'=>'ar',
            'india'=>'hi','pakistan'=>'ur','china'=>'zh','taiwan'=>'zh','hong-kong'=>'zh',
            'japan'=>'ja','south-korea'=>'ko','north-korea'=>'ko','thailand'=>'th','vietnam'=>'vi',
            'indonesia'=>'id','malaysia'=>'ms','brunei'=>'ms','sri-lanka'=>'ta'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    } elseif (strtolower($continent) === 'europe') {
        $country_slug = strtolower(str_replace(' ', '-', $country));
        $lang_map = [
            'germany'=>'de','austria'=>'de','switzerland'=>'de','liechtenstein'=>'de',
            'france'=>'fr','belgium'=>'fr','monaco'=>'fr','luxembourg'=>'fr',
            'spain'=>'es','andorra'=>'es',
            'italy'=>'it','san-marino'=>'it','vatican-city'=>'it',
            'portugal'=>'pt',
            'netherlands'=>'nl',
            'poland'=>'pl',
            'czechia'=>'cs','czech-republic'=>'cs',
            'romania'=>'ro','moldova'=>'ro',
            'greece'=>'el','cyprus'=>'el',
            'united-kingdom'=>'en','ireland'=>'en'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    } elseif (strtolower($continent) === 'north-america') {
        $country_slug = strtolower(str_replace(' ', '-', $country));
        $lang_map = [
            'united-states'=>'en','canada'=>'en','mexico'=>'es',
            'cuba'=>'es','dominican-republic'=>'es','guatemala'=>'es',
            'honduras'=>'es','el-salvador'=>'es','nicaragua'=>'es',
            'costa-rica'=>'es','panama'=>'es','puerto-rico'=>'es',
            'haiti'=>'fr'
        ];
        $lang = $lang_map[$country_slug] ?? 'en';
    } elseif (strtolower($continent) === 'south-america') {
        $country_slug = strtolower(str_replace(' ', '-', $country));
        $lang_map = [
            'brazil'=>'pt','argentina'=>'es','colombia'=>'es','chile'=>'es',
            'peru'=>'es','venezuela'=>'es','ecuador'=>'es','bolivia'=>'es',
            'paraguay'=>'es','uruguay'=>'es'
        ];
        $lang = $lang_map[$country_slug] ?? 'es';
    } elseif (strtolower($continent) === 'oceania') {
        $lang = 'en';
    }

    if ($lang === 'fr') {
        $meta_title = "Chambre d'Essai d'Étanchéité à $city, $country | Testeur de Fuite sous Vide";
        $meta_description = "Chambre d'essai d'étanchéité BET disponible à $city, $country. Détection précise des fuites sous vide pour l'emballage pharmaceutique, médical et alimentaire.";
    } elseif ($lang === 'ar') {
        $meta_title = "غرفة اختبار الختم في $city، $country | جهاز اختبار تسرب الفراغ";
        $meta_description = "غرفة اختبار الختم BET متوفرة في $city، $country. اكتشاف دقيق لتسرب الفراغ للتغليف الصيدلاني والطبي والغذائي.";
    } elseif ($lang === 'pt') {
        $meta_title = "Câmara de Teste de Vedação em $city, $country | Testador de Vazamento a Vácuo";
        $meta_description = "Câmara de teste de vedação BET disponível em $city, $country. Detecção precisa de vazamento a vácuo para embalagens farmacêuticas, médicas e de alimentos.";
    } elseif ($lang === 'sw') {
        $meta_title = "Chumba cha Kupima Ufungaji huko $city, $country | Kijaribu Uvujaji cha Utupu";
        $meta_description = "Chumba cha kupima ufungaji cha BET kinapatikana $city, $country. Ugunduzi sahihi wa uvujaji wa utupu kwa ufungaji wa dawa, matibabu, na chakula.";
    } elseif ($lang === 'hi') {
        $meta_title = "$city, $country में सीलिंग परीक्षण कक्ष | वैक्यूम लीक टेस्टर";
        $meta_description = "$city, $country में BET सीलिंग परीक्षण कक्ष उपलब्ध है। पैकेजिंग के लिए सटीक वैक्यूम लीक डिटेक्शन।";
    } elseif ($lang === 'ur') {
        $meta_title = "$city, $country میں سیلنگ ٹیسٹنگ چیمبر | ویکیوم لیک ٹیسٹر";
        $meta_description = "$city, $country میں BET سیلنگ ٹیسٹنگ چیمبر دستیاب ہے۔ پیکیجنگ کے لئے اعلی کارکردگی کا ویکیوم لیک ٹیسٹ۔";
    } elseif ($lang === 'zh') {
        $meta_title = "$country $city 密封测试箱 | 真空检漏仪";
        $meta_description = "BET 密封测试箱在 $country $city 有售。适用于制药和食品包装的高性能真空检漏。";
    } elseif ($lang === 'ja') {
        $meta_title = "$country $city のシール試験チャンバー | 真空リークテスター";
        $meta_description = "BET シール試験チャンバーは $country $city で利用可能です。パッケージング用の高性能真空リーク検出。";
    } elseif ($lang === 'ko') {
        $meta_title = "$country $city 의 밀봉 테스트 챔버 | 진공 누출 테스터";
        $meta_description = "BET 밀봉 테스트 챔버는 $country $city 에서 사용할 수 있습니다. 패키징을 위한 고성능 진공 누출 감지.";
    } elseif ($lang === 'th') {
        $meta_title = "ห้องทดสอบการปิดผนึกใน $city, $country | เครื่องทดสอบรอยรั่วสูญญากาศ";
        $meta_description = "ห้องทดสอบการปิดผนึก BET มีจำหน่ายใน $city, $country การตรวจจับรอยรั่วสูญญากาศสำหรับงานบรรจุภัณฑ์.";
    } elseif ($lang === 'vi') {
        $meta_title = "Buồng kiểm tra độ kín tại $city, $country | Máy kiểm tra rò rỉ chân không";
        $meta_description = "Buồng kiểm tra độ kín BET có sẵn tại $city, $country. Phát hiện rò rỉ chân không hiệu suất cao cho bao bì.";
    } elseif ($lang === 'id') {
        $meta_title = "Ruang Uji Penyegelan di $city, $country | Penguji Kebocoran Vakum";
        $meta_description = "Ruang Uji Penyegelan BET tersedia di $city, $country. Deteksi kebocoran vakum untuk pengemasan.";
    } elseif ($lang === 'ms') {
        $meta_title = "Kebuk Ujian Pengedap di $city, $country | Penguji Kebocoran Vakum";
        $meta_description = "Kebuk Ujian Pengedap BET tersedia di $city, $country. Pengesanan kebocoran vakum untuk pembungkusan.";
    } elseif ($lang === 'ta') {
        $meta_title = "$city, $country இல் சீலிங் சோதனை அறை | வெற்றிட கசிவு சோதனையாளர்";
        $meta_description = "BET சீலிங் சோதனை அறை $city, $country இல் கிடைக்கிறது. பேக்கேஜிங்கிற்கான அதிக செயல்திறன் வெற்றிட கசிவு கண்டறிதல்.";
    } elseif ($lang === 'de') {
        $meta_title = "Siegelnahtprüfgerät in $city, $country | Vakuum-Lecktester";
        $meta_description = "BET Siegelnahtprüfgerät in $city, $country verfügbar. Präzise Vakuum-Leckerkennung für Pharma- und Lebensmittelverpackungen.";
    } elseif ($lang === 'es') {
        $meta_title = "Cámara de prueba de sellado en $city, $country | Probador de fugas por vacío";
        $meta_description = "Cámara de prueba de sellado BET disponible en $city, $country. Detección de fugas por vacío de alto rendimiento.";
    } elseif ($lang === 'it') {
        $meta_title = "Camera di prova di tenuta a $city, $country | Tester per perdite di vuoto";
        $meta_description = "Camera di prova di tenuta BET disponibile a $city, $country. Rilevamento preciso delle perdite per imballaggi.";
    } elseif ($lang === 'nl') {
        $meta_title = "Afdichtingstestkamer in $city, $country | Vacuümlektester";
        $meta_description = "BET afdichtingstestkamer beschikbaar in $city, $country. Nauwkeurige vacuümlekdetectie voor verpakkingen.";
    } elseif ($lang === 'pl') {
        $meta_title = "Komora do testowania uszczelnień w $city, $country | Tester nieszczelności próżniowej";
        $meta_description = "Komora do testowania uszczelnień BET dostępna w $city, $country. Precyzyjne wykrywanie nieszczelności próżniowych.";
    } elseif ($lang === 'cs') {
        $meta_title = "Komora pro testování těsnosti v $city, $country | Vakuový tester netěsností";
        $meta_description = "Komora pro testování těsnosti BET dostupná v $city, $country. Vysoce výkonná detekce úniků pod tlakem.";
    } elseif ($lang === 'ro') {
        $meta_title = "Cameră de testare a etanșeității în $city, $country | Tester de scurgeri cu vid";
        $meta_description = "Cameră de testare a etanșeității BET disponibilă în $city, $country. Detectarea de precizie a scurgerilor cu vid.";
    } elseif ($lang === 'el') {
        $meta_title = "Θάλαμος δοκιμής στεγανότητας σε $city, $country | Ελεγκτής διαρροής κενού";
        $meta_description = "Θάλαμος δοκιμής στεγανότητας BET διαθέσιμος σε $city, $country. Ανίχνευση διαρροής κενού υψηλής απόδοσης.";
    } else {
        $meta_title = "Sealing Testing Chamber in $city, $country | Vacuum Leak Tester";
        $meta_description = "BET Sealing Testing Chamber available in $city, $country. High-performance vacuum leak detection and seal integrity testing for packaging applications.";
    }
    $canonical_url = product_url('sealing-testing-chamber');
    $location_name = "$city, $country";
} else {
    $meta_title = "Sealing Testing Chamber | Vacuum Leak Testing | Burhani Engineering Technology";
    $meta_description = "High-performance sealing testing chamber designed for accurate vacuum leak detection, seal integrity verification, and quality control in pharmaceutical, food, medical, and industrial packaging applications.";
    $canonical_url = product_url('sealing-testing-chamber');
}
$product_schema = [
    "@context" => "https://schema.org/",
    "@type" => "Product",
    "name" => "Sealing Testing Chamber",
    "image" => $main_image_url,
    "description" => $meta_description,
    "brand" => [
        "@type" => "Brand",
        "name" => "Burhani Engineering Technology"
    ],
    "sku" => "BET-STC-SERIES",
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

<!-- Open Graph / Twitter Card Meta -->
<meta property="og:title" content="<?php echo htmlspecialchars($meta_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
<meta property="og:image" content="<?php echo $main_image_url; ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:type" content="product">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($meta_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
<meta name="twitter:image" content="<?php echo $main_image_url; ?>">
<meta name="keywords" content="Sealing Testing Chamber, Vacuum Leak Testing Chamber, Seal Integrity Tester, Packaging Leak Tester, Vacuum Packaging Testing, Airtight Testing Chamber">

<!-- JSON-LD Schemas -->
<?php
$breadcrumb_schema = [
    "@context" => "https://schema.org/",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => url('')
        ]
    ]
];
if (!empty($is_location_page)) {
    $breadcrumb_schema["itemListElement"][] = [
        "@type" => "ListItem",
        "position" => 2,
        "name" => "Locations",
        "item" => url("locations/")
    ];
    $breadcrumb_schema["itemListElement"][] = [
        "@type" => "ListItem",
        "position" => 3,
        "name" => ucfirst($continent),
        "item" => url("locations/" . normalize_route_path($continent) . "/")
    ];
    $breadcrumb_schema["itemListElement"][] = [
        "@type" => "ListItem",
        "position" => 4,
        "name" => ucfirst($country),
        "item" => url("locations/" . normalize_route_path($continent) . "/" . normalize_route_path($country) . "/")
    ];
    $breadcrumb_schema["itemListElement"][] = [
        "@type" => "ListItem",
        "position" => 5,
        "name" => ucfirst($city),
        "item" => url("locations/" . normalize_route_path($continent) . "/" . normalize_route_path($country) . "/" . normalize_route_path($city) . "/")
    ];
    $breadcrumb_schema["itemListElement"][] = [
        "@type" => "ListItem",
        "position" => 6,
        "name" => "Sealing Testing Chamber",
        "item" => $canonical_url
    ];
} else {
    $breadcrumb_schema["itemListElement"][] = [
        "@type" => "ListItem",
        "position" => 2,
        "name" => "Products",
        "item" => url("products/")
    ];
    $breadcrumb_schema["itemListElement"][] = [
        "@type" => "ListItem",
        "position" => 3,
        "name" => "Sealing Testing Chamber",
        "item" => $canonical_url
    ];
}
?>
<script type="application/ld+json">
<?php echo json_encode($product_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>
<script type="application/ld+json">
<?php echo json_encode($breadcrumb_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

<!-- Custom Premium Redesign Styles -->
<style>
  /* Premium Design System Styles */
  .premium-hero {
    background: linear-gradient(135deg, rgba(12, 43, 89, 0.92), rgba(16, 62, 131, 0.95)), url('<?php echo $main_image_url; ?>') no-repeat center center / cover;
    padding: 120px 0 100px;
    color: #fff;
    position: relative;
    overflow: hidden;
  }
  .premium-hero h1 { font-weight: 800; font-size: 3.5rem; letter-spacing: -0.5px; color: #ffffff !important; }
  .premium-hero p.lead { font-size: 1.25rem; font-weight: 300; opacity: 0.9; margin-bottom: 2rem; }
  .premium-btn { padding: 14px 32px; font-weight: 600; border-radius: 8px; transition: all 0.3s ease; text-decoration: none;}
  .premium-btn-primary { background-color: var(--accent-color); border: none; color: #fff; }
  .premium-btn-primary:hover { background-color: #c75a00; transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.15); color:#fff;}
  .premium-btn-outline { border: 2px solid rgba(255,255,255,0.7); color: #fff; }
  .premium-btn-outline:hover { border-color: #fff; background: rgba(255,255,255,0.1); transform: translateY(-3px); color:#fff;}
  
  .section-spacing { padding: 90px 0; }
  .premium-image-card { border-radius: 16px; box-shadow: 0 20px 50px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.4s ease; background: #fff; padding: 20px;}
  .premium-image-card:hover { transform: scale(1.02); }
  
  .feature-card { background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); transition: all 0.3s ease; height: 100%; border-bottom: 4px solid transparent; }
  .feature-card:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-bottom-color: var(--accent-color); }
  .feature-icon { font-size: 2.5rem; color: var(--accent-color); margin-bottom: 20px; }
  .feature-card h4 { font-weight: 700; font-size: 1.2rem; color: var(--heading-color); margin-bottom: 12px;}
  
  .app-card { display: flex; align-items: center; gap: 15px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.03); transition: all 0.3s ease; border: 1px solid rgba(0,0,0,0.05); }
  .app-card:hover { transform: translateX(5px); border-color: var(--accent-color); box-shadow: 0 10px 25px rgba(0,0,0,0.06); }
  .app-icon { width: 45px; height: 45px; background: rgba(var(--accent-color-rgb), 0.1); color: var(--accent-color); display: flex; align-items: center; justify-content: center; border-radius: 8px; font-size: 1.2rem; }
  
  .callout-banner { background: linear-gradient(135deg, var(--heading-color), #0a2044); padding: 80px 0; color: #fff; text-align: center; }
  .callout-banner h2 { font-weight: 800; font-size: 2.5rem; margin-bottom: 20px; }
  
  .spec-table-container { background: #fff; border-radius: 16px; box-shadow: 0 15px 40px rgba(0,0,0,0.06); overflow: hidden; }
  .premium-table { margin-bottom: 0; }
  .premium-table thead th { background: var(--accent-color); color: #fff; font-weight: 600; padding: 18px 25px; border: none; }
  .premium-table tbody td, .premium-table tbody th { padding: 16px 25px; border-color: #f0f0f0; vertical-align: middle; }
  .premium-table tbody th { color: var(--heading-color); font-weight: 600; width: 35%; }
  .premium-table-striped tbody tr:nth-of-type(odd) { background-color: #f8fafc; }
  .premium-table-hover tbody tr:hover { background-color: #f1f5f9; }
  
  .premium-gallery-section { background: #f7f9fc; padding: 80px 0; }
  .gallery-card { position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.04); background: #fff; height: 260px; display: block; transition: all 0.4s ease; cursor: pointer; border: 1px solid rgba(0,0,0,0.06); }
  .gallery-card img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; display: block; }
  .gallery-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(12,43,89,0.85); display: flex; align-items: center; justify-content: center; opacity: 0; transition: all 0.4s ease; }
  .gallery-overlay span { color: #fff; font-weight: 600; font-size: 1.1rem; transform: translateY(20px); transition: all 0.4s ease; display: flex; flex-direction: column; align-items: center; gap: 8px; }
  .gallery-overlay span i { font-size: 1.8rem; }
  .gallery-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.12); }
  .gallery-card:hover img { transform: scale(1.05); }
  .gallery-card:hover .gallery-overlay { opacity: 1; }
  .gallery-card:hover .gallery-overlay span { transform: translateY(0); }
  
  .contact-section-premium { background: #f8fafc; padding: 90px 0; }
  .contact-card { background: #fff; border-radius: 16px; padding: 45px; box-shadow: 0 15px 50px rgba(0,0,0,0.05); height: 100%; border-top: 4px solid var(--accent-color); }
  .contact-icon-box { width: 50px; height: 50px; background: rgba(var(--accent-color-rgb), 0.1); color: var(--accent-color); display: flex; align-items: center; justify-content: center; border-radius: 10px; font-size: 1.5rem; margin-bottom: 20px; }
  
  @media (max-width: 768px) {
    .premium-hero h1 { font-size: 2.5rem; }
    .gallery-card { height: 160px; }
    .gallery-card img { max-height: 120px; }
  }
</style>

<main class="main">

  <!-- Hero Section -->
  <section class="premium-hero">
    <div class="container text-center" data-aos="fade-up">
      <h1 class="mb-3 text-white"><?php echo !empty($is_location_page) ? "Sealing Testing Chamber in " . htmlspecialchars($location_name) : "Sealing Testing Chamber"; ?></h1>
      <p class="lead w-75 mx-auto">Precision Engineered for Reliable Leak Detection & Airtight Performance in Laboratories and Industrial Facilities Worldwide.</p>
      <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
        <a href="<?php echo $canonical_url; ?>#quote" class="premium-btn premium-btn-primary d-inline-flex align-items-center gap-2">
          <i class="bi bi-chat-dots"></i> Request a Quote
        </a>
        <a href="<?php echo $canonical_url; ?>#specs" class="premium-btn premium-btn-outline d-inline-flex align-items-center gap-2">
          <i class="bi bi-file-earmark-pdf"></i> Download Technical PDF
        </a>
      </div>
    </div>
  </section>

  <!-- Product Overview -->
  <section class="section-spacing">
    <div class="container">
      <div class="row gy-5 align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="fw-bold mb-4" style="color: var(--heading-color); font-size: 2.4rem;">Official Sealing Testing Chamber</h2>
          <p class="fs-5 text-muted mb-4" style="line-height: 1.8;">The BET Sealing Testing Chamber is a high-performance instrument designed for accurate vacuum leak detection, seal integrity testing, and airtight inspection. Engineered for demanding industrial and laboratory environments, it ensures your packaging meets the highest quality standards.</p>
          <p class="text-muted" style="line-height: 1.8;">Our systems provide reliable leak detection for pharmaceutical packaging, medical packaging, flexible packaging, and general industrial quality control. With a crystal-clear observation window and precision controls, you can consistently evaluate package performance under simulated stress conditions.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="premium-image-card text-center">
            <a href="<?php echo $main_image_url; ?>" class="glightbox" data-title="Sealing Testing Chamber Front View">
              <img src="<?php echo $main_image_url; ?>" alt="Sealing Testing Chamber Front View" class="img-fluid" loading="lazy" style="width:100%; max-height: 400px; object-fit: contain;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Product Gallery Section -->
  <section class="premium-gallery-section">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold text-dark mb-3" style="font-size: 2.5rem; letter-spacing: -0.5px;">Product Showcase</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 600px;">Explore every angle, component, and engineering detail of the Sealing Testing Chamber.</p>
      </div>
      <div class="row g-4 justify-content-center">
        <?php
        if (empty($stc_gallery)) {
            echo '<p class="text-muted text-center w-100">No images available in the gallery.</p>';
        }
        foreach ($stc_gallery as $index => $gimg): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo ($index % 4) * 100; ?>">
          <a href="<?php echo $gimg['img']; ?>" class="glightbox d-block text-decoration-none" data-gallery="stc-gallery" data-title="<?php echo htmlspecialchars($gimg['alt']); ?>">
            <div class="gallery-card">
              <img src="<?php echo $gimg['img']; ?>" alt="<?php echo htmlspecialchars($gimg['alt']); ?>" loading="lazy">
              <div class="gallery-overlay">
                <span><i class="bi bi-search"></i>View Image</span>
              </div>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>



  <!-- Feature Highlights -->
  <section class="section-spacing bg-light">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold text-dark mb-3">Technical Design & Features</h2>
        <p class="text-muted fs-5">Engineered for maximum reliability and ease of use.</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-card">
            <i class="bi bi-shield-check feature-icon"></i>
            <h4>Airtight Design</h4>
            <p class="text-muted mb-0">100% leak-proof construction precision fabricated to guarantee containment during extreme vacuum cycles.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <i class="bi bi-eye feature-icon"></i>
            <h4>Crystal Clear Acrylic</h4>
            <p class="text-muted mb-0">Maximum visibility enabling 360-degree visual monitoring of package integrity and seal deformation.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <i class="bi bi-person-workspace feature-icon"></i>
            <h4>Industrial Gloves</h4>
            <p class="text-muted mb-0">Premium rubber gloves for safe, tactile handling of internal components without breaking the seal.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-card">
            <i class="bi bi-tools feature-icon"></i>
            <h4>Stainless Hardware</h4>
            <p class="text-muted mb-0">Corrosion-resistant components engineered for a long service life in demanding laboratory settings.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="feature-card">
            <i class="bi bi-speedometer2 feature-icon"></i>
            <h4>Vacuum Connection</h4>
            <p class="text-muted mb-0">Integrates seamlessly with advanced testing instrumentation and pumps for stable testing.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="feature-card">
            <i class="bi bi-droplet feature-icon"></i>
            <h4>Easy Maintenance</h4>
            <p class="text-muted mb-0">Smooth interior surfaces designed for rapid decontamination and simple cleaning procedures.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Applications -->
  <section class="section-spacing">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold text-dark mb-3">Applications</h2>
        <p class="text-muted fs-5"><?php echo !empty($is_location_page) ? "Utilized in " . htmlspecialchars($location_name) . " across critical packaging and QA sectors." : "Utilized globally across critical packaging and QA sectors."; ?></p>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-capsule"></i></div>
            <div class="fw-bold text-dark">Pharmaceutical Packaging</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-cup-hot"></i></div>
            <div class="fw-bold text-dark">Food Packaging</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-heart-pulse"></i></div>
            <div class="fw-bold text-dark">Medical Device Testing</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-box-seam"></i></div>
            <div class="fw-bold text-dark">Flexible Packaging</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-funnel"></i></div>
            <div class="fw-bold text-dark">Research Laboratory</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-globe"></i></div>
            <div class="fw-bold text-dark">Environmental Studies</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-gear"></i></div>
            <div class="fw-bold text-dark">Industrial QA</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800">
          <div class="app-card">
            <div class="app-icon"><i class="bi bi-bar-chart"></i></div>
            <div class="fw-bold text-dark">Material Evaluation</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Visual Callout Banner -->
  <section class="callout-banner" data-aos="fade">
    <div class="container">
      <h2>Built for Accuracy.<br>Designed for Reliability.<br><?php echo !empty($is_location_page) ? "Trusted by Laboratories in " . htmlspecialchars($location_name) . "." : "Trusted by Laboratories Worldwide."; ?></h2>
      <a href="<?php echo $canonical_url; ?>#quote" class="premium-btn premium-btn-primary d-inline-flex align-items-center gap-2 mt-4" style="background:#fff; color:var(--heading-color);">
        Request Custom Configuration <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </section>

  <!-- Technical Specifications -->
  <section id="specs" class="section-spacing bg-light">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold text-dark mb-3">Technical Specifications</h2>
        <p class="text-muted fs-5">Detailed engineering parameters for the Sealing Testing Chamber.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
          <div class="spec-table-container">
            <div class="table-responsive">
              <table class="table premium-table premium-table-striped premium-table-hover">
                <thead>
                  <tr>
                    <th scope="col">Specification</th>
                    <th scope="col">Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Chamber Material</th>
                    <td>High Clarity Transparent Acrylic / Polycarbonate</td>
                  </tr>
                  <tr>
                    <th scope="row">Transparency</th>
                    <td>360-Degree Crystal Clear Vision</td>
                  </tr>
                  <tr>
                    <th scope="row">Sealing Type</th>
                    <td>Heavy Duty Silicone Gasket</td>
                  </tr>
                  <tr>
                    <th scope="row">Vacuum Connection</th>
                    <td>Standardized Precision Valve Fittings</td>
                  </tr>
                  <tr>
                    <th scope="row">Gloves</th>
                    <td>Premium Chemical Resistant Rubber</td>
                  </tr>
                  <tr>
                    <th scope="row">Hardware</th>
                    <td>Sanitary Stainless Steel</td>
                  </tr>
                  <tr>
                    <th scope="row">Feedthroughs</th>
                    <td>Configurable Instrument & Cable Ports</td>
                  </tr>
                  <tr>
                    <th scope="row">Viewing Window</th>
                    <td>Scratch-resistant Clear Panels</td>
                  </tr>
                  <tr>
                    <th scope="row">Maintenance</th>
                    <td>Easy Wipe-down / Clean Interface</td>
                  </tr>
                  <tr>
                    <th scope="row">Custom Sizes</th>
                    <td>Available Upon Request</td>
                  </tr>
                  <tr>
                    <th scope="row">Industrial Compatibility</th>
                    <td>Pharma, Food, Medical QA Compliant</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose BET (Highlights) -->
  <section class="section-spacing">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold text-dark mb-3">Why Choose BET</h2>
        <p class="text-muted fs-5">At Burhani Engineering Technology, we prioritize precision engineering and unparalleled durability.</p>
      </div>
      <div class="row g-4 justify-content-center text-center">
        <?php
          $highlights = [
            "Precision Engineering", "Industrial Grade Components", "Leak Proof Performance",
            "Long Service Life", "Custom Configurations", "Global Support"
          ];
          foreach ($highlights as $index => $text):
        ?>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo ($index+1)*100; ?>">
          <div class="p-4 rounded shadow-sm bg-white border h-100 d-flex align-items-center justify-content-center gap-3" style="border-color: rgba(0,0,0,0.05) !important; transition: all 0.3s ease;">
            <i class="bi bi-check-circle-fill text-primary fs-4"></i> <span class="fw-bold text-dark fs-5"><?php echo $text; ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 

  <!-- Custom Contact Section -->
  <section id="quote" class="contact-section-premium">
    <div class="container">
      <div class="row g-5">
        <!-- Left: Engineering Support -->
        <div class="col-lg-5" data-aos="fade-right">
          <div class="contact-card">
            <h3 class="fw-bold text-dark mb-4">Engineering Support</h3>
            <p class="text-muted mb-5" style="line-height: 1.7;">Have questions about our products or need a custom solution? Our technical team is ready to help you find the right equipment for your application.</p>
            
            <div class="d-flex align-items-center gap-4 mb-4">
              <div class="contact-icon-box mb-0 flex-shrink-0"><i class="bi bi-telephone-fill"></i></div>
              <div>
                <h6 class="fw-bold mb-1 text-dark">Phone</h6>
                <a href="tel:<?php echo PHONE_NUMBER; ?>" class="text-decoration-none text-muted fs-6"><?php echo PHONE_NUMBER; ?></a>
              </div>
            </div>
            
            <div class="d-flex align-items-center gap-4 mb-4">
              <div class="contact-icon-box mb-0 flex-shrink-0"><i class="bi bi-envelope-fill"></i></div>
              <div>
                <h6 class="fw-bold mb-1 text-dark">Email</h6>
                <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" class="text-decoration-none text-muted fs-6"><?php echo EMAIL_ADDRESS; ?></a>
              </div>
            </div>
            
            <div class="d-flex align-items-center gap-4 mb-4">
              <div class="contact-icon-box mb-0 flex-shrink-0"><i class="bi bi-geo-alt-fill"></i></div>
              <div>
                <h6 class="fw-bold mb-1 text-dark">Address</h6>
                <span class="text-muted fs-6 d-block" style="line-height:1.5;">Thirupthi Nagar, Chettimedu Village,<br>Vadaperumbakkam, Chennai,<br>Tamil Nadu 600060, India</span>
              </div>
            </div>
            
          </div>
        </div>

        <!-- Right: Request Quote Form -->
        <div class="col-lg-7" data-aos="fade-left">
          <div class="contact-card">
            <h3 class="fw-bold text-dark mb-2">Request a Quote</h3>
            <p class="text-muted mb-4">We typically respond within 1 business day.</p>
            
            <form id="global-contact-form" novalidate>
              <div class="row g-4">
                <div class="col-md-6">
                  <input type="text" id="gc-name" class="form-control bg-light border-0 py-3 px-4" placeholder="Your Full Name *" required>
                </div>
                <div class="col-md-6">
                  <input type="email" id="gc-email" class="form-control bg-light border-0 py-3 px-4" placeholder="Email Address *" required>
                </div>
                <div class="col-md-6">
                  <input type="tel" id="gc-phone" class="form-control bg-light border-0 py-3 px-4" placeholder="Phone / WhatsApp *" required>
                </div>
                <div class="col-md-6">
                  <input type="text" id="gc-subject" class="form-control bg-light border-0 py-3 px-4" value="Enquiry: Sealing Testing Chamber" readonly>
                </div>
                <div class="col-12">
                  <textarea id="gc-message" class="form-control bg-light border-0 py-3 px-4" rows="5" placeholder="Tell us about your requirement..." required></textarea>
                </div>
                <div class="col-12 mt-4">
                  <button type="submit" class="premium-btn premium-btn-primary w-100 py-3 fs-5">
                    <i class="bi bi-send-fill me-2"></i> Submit Enquiry via WhatsApp
                  </button>
                </div>
              </div>
              <div class="alert alert-success mt-4" id="gc-success" style="display: none;">
                ✅ Your enquiry has been sent! We'll get back to you shortly.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<script>
document.getElementById('global-contact-form').addEventListener('submit', function(e) {
  e.preventDefault();

  const name    = document.getElementById('gc-name').value.trim();
  const email   = document.getElementById('gc-email').value.trim();
  const phone   = document.getElementById('gc-phone').value.trim();
  const subject = document.getElementById('gc-subject').value.trim();
  const message = document.getElementById('gc-message').value.trim();

  if (!name || !email || !phone || !message) {
    alert('Please fill in all required fields (Name, Email, Phone, Message).');
    return;
  }

  const text = `Hello Burhani Engineering Technology,\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\n\nMessage:\n${message}`;
  const waUrl = `https://wa.me/919677296252?text=${encodeURIComponent(text)}`;
  window.open(waUrl, '_blank');

  document.getElementById('gc-success').style.display = 'block';
  this.reset();
  setTimeout(() => { document.getElementById('gc-success').style.display = 'none'; }, 6000);
});
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
