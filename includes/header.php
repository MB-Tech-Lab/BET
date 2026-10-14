<?php
if (!isset($meta_title)) {
    $meta_title = "Burhani Engineering Technology - Advanced Vacuum Solutions";
}
if (!isset($meta_description)) {
    $meta_description = "Burhani Engineering Technology - Leading manufacturer of precision vacuum leak test machines and degassing chambers.";
}
if (!isset($canonical_url)) {
    $canonical_url = url('');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7LKJF1Z2NJ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7LKJF1Z2NJ');
  </script>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo htmlspecialchars($meta_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <meta name="keywords" content="vacuum systems, leak testing, industrial vacuum, vacuum pumps">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />

  <!-- Favicons -->
  <link href="<?php echo asset('img/favicon.png'); ?>" rel="icon" type="image/png">
  <link href="<?php echo asset('img/favicon.png'); ?>" rel="shortcut icon">
  <link href="<?php echo asset('img/favicon.png'); ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo asset('vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

  <!-- Main CSS File -->
  <link href="<?php echo asset('css/main.min.css'); ?>" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?php echo url(''); ?>" class="logo d-flex align-items-center me-auto">
          <img src="<?php echo asset('img/logo-navbar.svg'); ?>" alt="<?php echo SITE_NAME; ?>">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?php echo url(''); ?>#hero" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php' || $_SERVER['REQUEST_URI'] == '/') echo 'class="active"'; ?>>Home<br></a></li>
            <li><a href="<?php echo url(''); ?>#about">About Us</a></li>
            <li><a href="<?php echo url(''); ?>#products">Our Products</a></li>
            <li><a href="<?php echo url('downloads.php'); ?>" <?php if(basename($_SERVER['PHP_SELF']) == 'downloads.php') echo 'class="active"'; ?>>Software Hub</a></li>
            <li><a href="<?php echo url(''); ?>#industries">Industries</a></li>
            <li><a href="#" id="marketplace-trigger" onclick="openMarketplace(event)"><span>Market Place</span> <i class="bi bi-globe"></i></a></li>
            <li><a href="<?php echo url(''); ?>#contact">Contact Us</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="<?php echo url(''); ?>#appointment">Make an Appointment</a>

      </div>

    </div>

  </header>




  <!-- ===== MARKETPLACE MODAL ===== -->
  <div id="marketplace-modal" aria-modal="true" role="dialog" aria-label="Market Place Selector">
    <div id="mp-overlay"></div>
    <div id="mp-panel">

      <!-- Header bar -->
      <div id="mp-header">
        <div id="mp-breadcrumb"><span class="mp-bc-item active" id="bc-continent">Select Region</span></div>
        <button id="mp-close" onclick="closeMarketplace()" aria-label="Close">&times;</button>
      </div>

      <!-- Step containers -->
      <div id="mp-body">

        <!-- STEP 1: Continents -->
        <div class="mp-step" id="step-continent">
          <h2 class="mp-title">Where are you located?</h2>
          <p class="mp-sub">Choose your region to explore BET's market presence.</p>
          <div class="mp-grid" id="continent-grid"></div>
        </div>

        <!-- STEP 2: Countries -->
        <div class="mp-step hidden" id="step-country">
          <h2 class="mp-title" id="country-title">Select a Country</h2>
          <div class="mp-grid" id="country-grid"></div>
        </div>

        <!-- STEP 3: Cities -->
        <div class="mp-step hidden" id="step-city">
          <h2 class="mp-title" id="city-title">Select a City</h2>
          <div class="mp-grid mp-grid-sm" id="city-grid"></div>
        </div>

      </div>

      <!-- Back button -->
      <div id="mp-footer">
        <button id="mp-back" onclick="mpBack()" class="hidden">
          <i class="bi bi-arrow-left"></i> Back
        </button>
      </div>

    </div>
  </div>

  <style>
  /* ===== Marketplace Modal ===== */
  #marketplace-modal { position:fixed; inset:0; z-index:99999; display:none; }
  #marketplace-modal.open { display:flex; align-items:center; justify-content:center; }
  #mp-overlay { position:absolute; inset:0; background:rgba(10,20,40,0.75); backdrop-filter:blur(4px); cursor:pointer; }
  #mp-panel {
    position:relative; z-index:1; background:#fff; border-radius:20px;
    width:min(900px, 96vw); max-height:88vh; display:flex; flex-direction:column;
    box-shadow:0 30px 80px rgba(0,0,0,0.35); overflow:hidden;
    animation: mpSlideUp 0.35s cubic-bezier(0.34,1.2,0.64,1) both;
  }
  @keyframes mpSlideUp { from { opacity:0; transform:translateY(40px) scale(0.97); } to { opacity:1; transform:none; } }

  #mp-header {
    display:flex; align-items:center; justify-content:space-between;
    padding:18px 28px; border-bottom:1px solid #eaecf0;
    background:linear-gradient(135deg,#0f3443,#1a5276);
  }
  #mp-breadcrumb { display:flex; align-items:center; gap:8px; flex-wrap:wrap; }
  .mp-bc-item { font-size:0.82rem; font-weight:600; color:rgba(255,255,255,0.55); cursor:default; }
  .mp-bc-item.active { color:#fff; }
  .mp-bc-sep { color:rgba(255,255,255,0.35); font-size:0.8rem; }
  #mp-close {
    background:rgba(255,255,255,0.12); border:none; color:#fff;
    width:36px; height:36px; border-radius:50%; font-size:1.4rem; line-height:1;
    cursor:pointer; transition:0.2s; display:flex; align-items:center; justify-content:center;
  }
  #mp-close:hover { background:rgba(255,255,255,0.25); }

  #mp-body { flex:1; overflow-y:auto; padding:32px 28px; }
  .mp-title { font-size:1.5rem; font-weight:800; color:#0f3443; margin-bottom:6px; }
  .mp-sub { color:#6b7280; font-size:0.95rem; margin-bottom:28px; }

  .mp-step { animation:mpFadeIn 0.25s ease both; }
  .mp-step.hidden { display:none; }
  @keyframes mpFadeIn { from { opacity:0; transform:translateX(18px); } to { opacity:1; transform:none; } }

  /* Grid cards */
  .mp-grid { display:grid; grid-template-columns:repeat(auto-fill, minmax(150px,1fr)); gap:14px; }
  .mp-grid-sm { grid-template-columns:repeat(auto-fill, minmax(120px,1fr)); gap:10px; }
  .mp-card {
    background:#f8f9fc; border:2px solid #eaecf0; border-radius:14px;
    padding:20px 14px; text-align:center; cursor:pointer;
    transition:all 0.22s ease; font-weight:600; font-size:0.88rem; color:#1a2a4a;
    display:flex; flex-direction:column; align-items:center; gap:10px;
  }
  .mp-card:hover { background:#fff; border-color:var(--accent-color,#e67300); color:var(--accent-color,#e67300); transform:translateY(-3px); box-shadow:0 8px 24px rgba(0,0,0,0.1); }
  .mp-card .mp-icon { font-size:2rem; line-height:1; }
  .mp-card.country-card { padding:14px 10px; }
  .mp-card.country-card .mp-icon { font-size:1.6rem; }
  .mp-card.city-card { padding:12px 10px; font-size:0.83rem; }
  .mp-card.city-card .mp-icon { font-size:1.3rem; }
  /* Continent color accents */
  .cont-asia:hover { border-color:#f59e0b; color:#d97706; }
  .cont-africa:hover { border-color:#10b981; color:#059669; }
  .cont-europe:hover { border-color:#3b82f6; color:#2563eb; }
  .cont-namerica:hover { border-color:#8b5cf6; color:#7c3aed; }
  .cont-samerica:hover { border-color:#ef4444; color:#dc2626; }
  .cont-oceania:hover { border-color:#06b6d4; color:#0891b2; }

  #mp-footer { padding:14px 28px; border-top:1px solid #f0f4f8; background:#fafbfc; }
  #mp-back {
    background:none; border:2px solid #d1d5db; color:#374151; padding:9px 20px;
    border-radius:8px; font-weight:600; font-size:0.88rem; cursor:pointer;
    display:flex; align-items:center; gap:8px; transition:0.2s;
  }
  #mp-back:hover { border-color:#0f3443; color:#0f3443; }
  #mp-back.hidden { visibility:hidden; }

  /* Navbar trigger style */
  #marketplace-trigger { cursor:pointer; }
  #marketplace-trigger i { margin-left:4px; font-size:0.8rem; transition:transform 0.2s; }
  #marketplace-trigger:hover i { transform:rotate(15deg); }

  @media(max-width:600px) {
    #mp-panel { border-radius:16px 16px 0 0; align-self:flex-end; width:100%; max-height:92vh; }
    #mp-body { padding:20px 16px; }
    #mp-header { padding:14px 16px; }
    .mp-grid { grid-template-columns:repeat(auto-fill,minmax(120px,1fr)); gap:10px; }
  }
  </style>

  <script>
  const BASE = '<?php echo rtrim(url(''), '/'); ?>';

  const MARKETPLACE_DATA = {
    Asia: {
      icon: '🌏',
      countries: {
        'Afghanistan': { slug:'afghanistan', cities:{ Kabul:'kabul' } },
        'Armenia': { slug:'armenia', cities:{ Yerevan:'yerevan' } },
        'Azerbaijan': { slug:'azerbaijan', cities:{ Baku:'baku' } },
        'Bahrain': { slug:'bahrain', cities:{ Manama:'manama' } },
        'Bangladesh': { slug:'bangladesh', cities:{ Dhaka:'dhaka', Chittagong:'chittagong' } },
        'Bhutan': { slug:'bhutan', cities:{ Thimphu:'thimphu' } },
        'Brunei': { slug:'brunei', cities:{ 'Bandar Seri Begawan':'bandar-seri-begawan' } },
        'Cambodia': { slug:'cambodia', cities:{ 'Phnom Penh':'phnom-penh' } },
        'China': { slug:'china', cities:{ Shanghai:'shanghai', Shenzhen:'shenzhen' } },
        'Cyprus': { slug:'cyprus', cities:{ Nicosia:'nicosia', Limassol:'limassol' } },
        'Georgia': { slug:'georgia', cities:{ Tbilisi:'tbilisi' } },
        'India': { slug:'india', cities:{ 
          Chennai:'chennai', Bangalore:'bangalore', Mumbai:'mumbai', Delhi:'delhi', Hyderabad:'hyderabad', 
          Pune:'pune', Ahmedabad:'ahmedabad', Kolkata:'kolkata', Coimbatore:'coimbatore', Vadodara:'vadodara', 
          Surat:'surat', Nashik:'nashik', Nagpur:'nagpur', Visakhapatnam:'visakhapatnam', Bhubaneswar:'bhubaneswar', 
          Jaipur:'jaipur', Indore:'indore', Bhopal:'bhopal', Ludhiana:'ludhiana', Kanpur:'kanpur', 
          Chandigarh:'chandigarh', Faridabad:'faridabad', Ghaziabad:'ghaziabad', Noida:'noida', Gurugram:'gurugram', 
          Hosur:'hosur', Tiruppur:'tiruppur', Salem:'salem', Madurai:'madurai', Tiruchirappalli:'tiruchirappalli', 
          Erode:'erode', Karur:'karur', Vellore:'vellore', Kanchipuram:'kanchipuram', Sriperumbudur:'sriperumbudur', 
          Ranipet:'ranipet', Ennore:'ennore', Rajkot:'rajkot', Jamnagar:'jamnagar', Bhavnagar:'bhavnagar', 
          Ankleshwar:'ankleshwar', Bharuch:'bharuch', Vapi:'vapi', Gandhinagar:'gandhinagar', Mehsana:'mehsana', 
          Morbi:'morbi', Surendranagar:'surendranagar', Aurangabad:'aurangabad', Kolhapur:'kolhapur', Solapur:'solapur', 
          Satara:'satara', Sangli:'sangli', Jalgaon:'jalgaon', Amravati:'amravati', Akola:'akola', 
          Chandrapur:'chandrapur', Ratnagiri:'ratnagiri', Panipat:'panipat', Sonipat:'sonipat', Karnal:'karnal', 
          Rohtak:'rohtak', Ambala:'ambala', Yamunanagar:'yamunanagar', Meerut:'meerut', Aligarh:'aligarh', 
          Agra:'agra', Bareilly:'bareilly', Moradabad:'moradabad', Saharanpur:'saharanpur', Jamshedpur:'jamshedpur', 
          Dhanbad:'dhanbad', Bokaro:'bokaro', Ranchi:'ranchi', Rourkela:'rourkela', Angul:'angul', 
          Haldia:'haldia', Durgapur:'durgapur', Asansol:'asansol', Mysore:'mysore', Mangalore:'mangalore', 
          Hubli:'hubli', Belgaum:'belgaum', Bellary:'bellary', Vijayawada:'vijayawada', Guntur:'guntur', 
          Nellore:'nellore', Kakinada:'kakinada', Tirupati:'tirupati', Kochi:'kochi', Thiruvananthapuram:'thiruvananthapuram', 
          Thoothukudi:'thoothukudi', Paradeep:'paradeep', Mormugao:'mormugao', Udaipur:'udaipur', Jodhpur:'jodhpur', 
          Kota:'kota', Silvassa:'silvassa', Daman:'daman', Baddi:'baddi', Haridwar:'haridwar', Dehradun:'dehradun' 
        } },
        'Indonesia': { slug:'indonesia', cities:{ Jakarta:'jakarta', Surabaya:'surabaya' } },
        'Iran': { slug:'iran', cities:{ Tehran:'tehran', Isfahan:'isfahan' } },
        'Iraq': { slug:'iraq', cities:{ Baghdad:'baghdad', Basra:'basra' } },
        'Israel': { slug:'israel', cities:{ 'Tel Aviv':'tel-aviv', Haifa:'haifa' } },
        'Japan': { slug:'japan', cities:{ Tokyo:'tokyo', Osaka:'osaka' } },
        'Jordan': { slug:'jordan', cities:{ Amman:'amman', Aqaba:'aqaba' } },
        'Kazakhstan': { slug:'kazakhstan', cities:{ Almaty:'almaty', Astana:'astana' } },
        'Kuwait': { slug:'kuwait', cities:{ 'Kuwait City':'kuwait-city' } },
        'Kyrgyzstan': { slug:'kyrgyzstan', cities:{ Bishkek:'bishkek' } },
        'Laos': { slug:'laos', cities:{ Vientiane:'vientiane' } },
        'Lebanon': { slug:'lebanon', cities:{ Beirut:'beirut' } },
        'Malaysia': { slug:'malaysia', cities:{ 'Kuala Lumpur':'kuala-lumpur', Penang:'penang' } },
        'Maldives': { slug:'maldives', cities:{ Male:'male' } },
        'Mongolia': { slug:'mongolia', cities:{ Ulaanbaatar:'ulaanbaatar' } },
        'Myanmar': { slug:'myanmar', cities:{ Yangon:'yangon' } },
        'Nepal': { slug:'nepal', cities:{ Kathmandu:'kathmandu' } },
        'North Korea': { slug:'north-korea', cities:{ Pyongyang:'pyongyang' } },
        'Oman': { slug:'oman', cities:{ Muscat:'muscat' } },
        'Pakistan': { slug:'pakistan', cities:{ Karachi:'karachi', Lahore:'lahore' } },
        'Palestine': { slug:'palestine', cities:{ Ramallah:'ramallah' } },
        'Philippines': { slug:'philippines', cities:{ Manila:'manila', Cebu:'cebu' } },
        'Qatar': { slug:'qatar', cities:{ Doha:'doha' } },
        'Saudi Arabia': { slug:'saudi-arabia', cities:{ Riyadh:'riyadh', Dammam:'dammam' } },
        'Singapore': { slug:'singapore', cities:{ Singapore:'singapore' } },
        'South Korea': { slug:'south-korea', cities:{ Seoul:'seoul', Busan:'busan' } },
        'Sri Lanka': { slug:'sri-lanka', cities:{ Colombo:'colombo' } },
        'Syria': { slug:'syria', cities:{ Damascus:'damascus' } },
        'Taiwan': { slug:'taiwan', cities:{ Taipei:'taipei', Kaohsiung:'kaohsiung' } },
        'Tajikistan': { slug:'tajikistan', cities:{ Dushanbe:'dushanbe' } },
        'Thailand': { slug:'thailand', cities:{ Bangkok:'bangkok', 'Chiang Mai':'chiang-mai' } },
        'Timor-Leste': { slug:'timor-leste', cities:{ Dili:'dili' } },
        'Turkey': { slug:'turkey', cities:{ Istanbul:'istanbul', Ankara:'ankara' } },
        'Turkmenistan': { slug:'turkmenistan', cities:{ Ashgabat:'ashgabat' } },
        'United Arab Emirates': { slug:'united-arab-emirates', cities:{ Dubai:'dubai', 'Abu Dhabi':'abu-dhabi' } },
        'Uzbekistan': { slug:'uzbekistan', cities:{ Tashkent:'tashkent' } },
        'Vietnam': { slug:'vietnam', cities:{ Hanoi:'hanoi', 'Ho Chi Minh City':'ho-chi-minh-city' } },
        'Yemen': { slug:'yemen', cities:{ "Sana’a":'sana-a' } },
      }
    },
    Africa: {
      icon: '🌍',
      countries: {
        'Algeria': { slug:'algeria', cities:{ Algiers:'algiers', Oran:'oran' } },
        'Angola': { slug:'angola', cities:{ Luanda:'luanda' } },
        'Benin': { slug:'benin', cities:{ Cotonou:'cotonou' } },
        'Botswana': { slug:'botswana', cities:{ Gaborone:'gaborone' } },
        'Burkina Faso': { slug:'burkina-faso', cities:{ Ouagadougou:'ouagadougou' } },
        'Burundi': { slug:'burundi', cities:{ Bujumbura:'bujumbura' } },
        'Cape Verde': { slug:'cape-verde', cities:{ Praia:'praia' } },
        'Cameroon': { slug:'cameroon', cities:{ Douala:'douala', 'Yaoundé':'yaounde' } },
        'Central African Republic': { slug:'central-african-republic', cities:{ Bangui:'bangui' } },
        'Chad': { slug:'chad', cities:{ 'N’Djamena':'ndjamena' } },
        'Comoros': { slug:'comoros', cities:{ Moroni:'moroni' } },
        'Congo (Brazzaville)': { slug:'congo-brazzaville', cities:{ Brazzaville:'brazzaville' } },
        'Congo (DRC)': { slug:'congo-drc', cities:{ Kinshasa:'kinshasa', Lubumbashi:'lubumbashi' } },
        'Djibouti': { slug:'djibouti', cities:{ 'Djibouti City':'djibouti-city' } },
        'Egypt': { slug:'egypt', cities:{ Cairo:'cairo', Alexandria:'alexandria' } },
        'Equatorial Guinea': { slug:'equatorial-guinea', cities:{ Malabo:'malabo' } },
        'Eritrea': { slug:'eritrea', cities:{ Asmara:'asmara' } },
        'Eswatini': { slug:'eswatini', cities:{ Mbabane:'mbabane' } },
        'Ethiopia': { slug:'ethiopia', cities:{ 'Addis Ababa':'addis-ababa', Adama:'adama' } },
        'Gabon': { slug:'gabon', cities:{ Libreville:'libreville' } },
        'Gambia': { slug:'gambia', cities:{ Banjul:'banjul' } },
        'Ghana': { slug:'ghana', cities:{ Accra:'accra', Tema:'tema' } },
        'Guinea': { slug:'guinea', cities:{ Conakry:'conakry' } },
        'Guinea-Bissau': { slug:'guinea-bissau', cities:{ Bissau:'bissau' } },
        'Ivory Coast': { slug:'ivory-coast', cities:{ Abidjan:'abidjan' } },
        'Kenya': { slug:'kenya', cities:{ Nairobi:'nairobi', Mombasa:'mombasa' } },
        'Lesotho': { slug:'lesotho', cities:{ Maseru:'maseru' } },
        'Liberia': { slug:'liberia', cities:{ Monrovia:'monrovia' } },
        'Libya': { slug:'libya', cities:{ Tripoli:'tripoli' } },
        'Madagascar': { slug:'madagascar', cities:{ Antananarivo:'antananarivo' } },
        'Malawi': { slug:'malawi', cities:{ Lilongwe:'lilongwe' } },
        'Mali': { slug:'mali', cities:{ Bamako:'bamako' } },
        'Mauritania': { slug:'mauritania', cities:{ Nouakchott:'nouakchott' } },
        'Mauritius': { slug:'mauritius', cities:{ 'Port Louis':'port-louis' } },
        'Morocco': { slug:'morocco', cities:{ Casablanca:'casablanca', Tangier:'tangier' } },
        'Mozambique': { slug:'mozambique', cities:{ Maputo:'maputo' } },
        'Namibia': { slug:'namibia', cities:{ Windhoek:'windhoek' } },
        'Niger': { slug:'niger', cities:{ Niamey:'niamey' } },
        'Nigeria': { slug:'nigeria', cities:{ Lagos:'lagos', Abuja:'abuja' } },
        'Rwanda': { slug:'rwanda', cities:{ Kigali:'kigali' } },
        'Sao Tome': { slug:'sao-tome', cities:{ 'Sao Tome':'sao-tome' } },
        'Senegal': { slug:'senegal', cities:{ Dakar:'dakar' } },
        'Seychelles': { slug:'seychelles', cities:{ Victoria:'victoria' } },
        'Sierra Leone': { slug:'sierra-leone', cities:{ Freetown:'freetown' } },
        'Somalia': { slug:'somalia', cities:{ Mogadishu:'mogadishu' } },
        'Somaliland': { slug:'somaliland', cities:{ Hargeisa:'hargeisa' } },
        'South Africa': { slug:'south-africa', cities:{ Johannesburg:'johannesburg', 'Cape Town':'cape-town' } },
        'South Sudan': { slug:'south-sudan', cities:{ Juba:'juba' } },
        'Sudan': { slug:'sudan', cities:{ Khartoum:'khartoum' } },
        'Tanzania': { slug:'tanzania', cities:{ 'Dar es Salaam':'dar-es-salaam' } },
        'Togo': { slug:'togo', cities:{ Lome:'lome' } },
        'Tunisia': { slug:'tunisia', cities:{ Tunis:'tunis' } },
        'Uganda': { slug:'uganda', cities:{ Kampala:'kampala' } },
        'Zambia': { slug:'zambia', cities:{ Lusaka:'lusaka' } },
        'Zimbabwe': { slug:'zimbabwe', cities:{ Harare:'harare' } },
      }
    },
    Europe: {
      icon: '🌍',
      countries: {
        'Albania': { slug:'albania', cities:{ Tirana:'tirana' } },
        'Andorra': { slug:'andorra', cities:{ 'Andorra la Vella':'andorra-la-vella' } },
        'Austria': { slug:'austria', cities:{ Vienna:'vienna' } },
        'Belarus': { slug:'belarus', cities:{ Minsk:'minsk' } },
        'Belgium': { slug:'belgium', cities:{ Brussels:'brussels', Antwerp:'antwerp' } },
        'Bosnia': { slug:'bosnia', cities:{ Sarajevo:'sarajevo' } },
        'Bulgaria': { slug:'bulgaria', cities:{ Sofia:'sofia' } },
        'Croatia': { slug:'croatia', cities:{ Zagreb:'zagreb' } },
        'Czech Republic': { slug:'czech-republic', cities:{ Prague:'prague' } },
        'Denmark': { slug:'denmark', cities:{ Copenhagen:'copenhagen' } },
        'Estonia': { slug:'estonia', cities:{ Tallinn:'tallinn' } },
        'Finland': { slug:'finland', cities:{ Helsinki:'helsinki' } },
        'France': { slug:'france', cities:{ Paris:'paris', Lyon:'lyon' } },
        'Germany': { slug:'germany', cities:{ Berlin:'berlin', Stuttgart:'stuttgart' } },
        'Greece': { slug:'greece', cities:{ Athens:'athens' } },
        'Hungary': { slug:'hungary', cities:{ Budapest:'budapest' } },
        'Iceland': { slug:'iceland', cities:{ Reykjavik:'reykjavik' } },
        'Ireland': { slug:'ireland', cities:{ Dublin:'dublin' } },
        'Italy': { slug:'italy', cities:{ Milan:'milan', Turin:'turin' } },
        'Kosovo': { slug:'kosovo', cities:{ Pristina:'pristina' } },
        'Latvia': { slug:'latvia', cities:{ Riga:'riga' } },
        'Liechtenstein': { slug:'liechtenstein', cities:{ Vaduz:'vaduz' } },
        'Lithuania': { slug:'lithuania', cities:{ Vilnius:'vilnius' } },
        'Luxembourg': { slug:'luxembourg', cities:{ Luxembourg:'luxembourg' } },
        'Malta': { slug:'malta', cities:{ Valletta:'valletta' } },
        'Moldova': { slug:'moldova', cities:{ Chisinau:'chisinau' } },
        'Monaco': { slug:'monaco', cities:{ Monaco:'monaco' } },
        'Montenegro': { slug:'montenegro', cities:{ Podgorica:'podgorica' } },
        'Netherlands': { slug:'netherlands', cities:{ Amsterdam:'amsterdam', Rotterdam:'rotterdam' } },
        'North Macedonia': { slug:'north-macedonia', cities:{ Skopje:'skopje' } },
        'Norway': { slug:'norway', cities:{ Oslo:'oslo' } },
        'Poland': { slug:'poland', cities:{ Warsaw:'warsaw' } },
        'Portugal': { slug:'portugal', cities:{ Lisbon:'lisbon' } },
        'Romania': { slug:'romania', cities:{ Bucharest:'bucharest' } },
        'Russia': { slug:'russia', cities:{ Moscow:'moscow', 'St Petersburg':'st-petersburg' } },
        'San Marino': { slug:'san-marino', cities:{ 'San Marino':'san-marino' } },
      }
    },
    'North America': {
      icon: '🌎',
      countries: {
        'Antigua': { slug:'antigua', cities:{ 'St Johns':'st-johns' } },
        'Bahamas': { slug:'bahamas', cities:{ Nassau:'nassau' } },
        'Barbados': { slug:'barbados', cities:{ Bridgetown:'bridgetown' } },
        'Belize': { slug:'belize', cities:{ 'Belize City':'belize-city' } },
        'Canada': { slug:'canada', cities:{ Toronto:'toronto', Calgary:'calgary' } },
        'Costa Rica': { slug:'costa-rica', cities:{ 'San Jose':'san-jose' } },
        'Cuba': { slug:'cuba', cities:{ Havana:'havana' } },
        'Dominica': { slug:'dominica', cities:{ Roseau:'roseau' } },
        'Dominican Republic': { slug:'dominican-republic', cities:{ 'Santo Domingo':'santo-domingo' } },
        'El Salvador': { slug:'el-salvador', cities:{ 'San Salvador':'san-salvador' } },
        'Grenada': { slug:'grenada', cities:{ 'St Georges':'st-georges' } },
        'Guatemala': { slug:'guatemala', cities:{ 'Guatemala City':'guatemala-city' } },
        'Haiti': { slug:'haiti', cities:{ 'Port-au-Prince':'port-au-prince' } },
        'Honduras': { slug:'honduras', cities:{ Tegucigalpa:'tegucigalpa' } },
        'Jamaica': { slug:'jamaica', cities:{ Kingston:'kingston' } },
        'Mexico': { slug:'mexico', cities:{ 'Mexico City':'mexico-city', Monterrey:'monterrey' } },
        'Nicaragua': { slug:'nicaragua', cities:{ Managua:'managua' } },
        'Panama': { slug:'panama', cities:{ 'Panama City':'panama-city' } },
        'St Lucia': { slug:'st-lucia', cities:{ Castries:'castries' } },
        'USA': { slug:'usa', cities:{ Houston:'houston', Chicago:'chicago' } },
      }
    },
    'South America': {
      icon: '🌎',
      countries: {
        'Argentina':  { slug:'argentina',  cities:{ 'Buenos Aires':'buenos-aires' } },
        'Bolivia':    { slug:'bolivia',    cities:{ 'La Paz':'la-paz' } },
        'Brazil':     { slug:'brazil',     cities:{ 'Sao Paulo':'sao-paulo', 'Rio de Janeiro':'rio-de-janeiro' } },
        'Chile':      { slug:'chile',      cities:{ Santiago:'santiago' } },
        'Colombia':   { slug:'colombia',   cities:{ Bogota:'bogota' } },
        'Ecuador':    { slug:'ecuador',    cities:{ Quito:'quito' } },
        'Guyana':     { slug:'guyana',     cities:{ Georgetown:'georgetown' } },
        'Paraguay':   { slug:'paraguay',   cities:{ Asuncion:'asuncion' } },
        'Peru':       { slug:'peru',       cities:{ Lima:'lima' } },
        'Suriname':   { slug:'suriname',   cities:{ Paramaribo:'paramaribo' } },
        'Uruguay':    { slug:'uruguay',    cities:{ Montevideo:'montevideo' } },
        'Venezuela':  { slug:'venezuela',  cities:{ Caracas:'caracas' } },
      }
    },
    Oceania: {
      icon: '🌏',
      countries: {
        'Australia':         { slug:'australia',         cities:{ Sydney:'sydney', Perth:'perth' } },
        'Fiji':              { slug:'fiji',              cities:{ Suva:'suva' } },
        'Kiribati':          { slug:'kiribati',          cities:{ Tarawa:'tarawa' } },
        'Marshall Islands':  { slug:'marshall-islands',  cities:{ Majuro:'majuro' } },
        'Micronesia':        { slug:'micronesia',        cities:{ Palikir:'palikir' } },
        'Nauru':             { slug:'nauru',             cities:{ Yaren:'yaren' } },
        'New Zealand':       { slug:'new-zealand',       cities:{ Auckland:'auckland' } },
        'Palau':             { slug:'palau',             cities:{ Ngerulmud:'ngerulmud' } },
        'Papua New Guinea':  { slug:'papua-new-guinea',  cities:{ 'Port Moresby':'port-moresby' } },
        'Samoa':             { slug:'samoa',             cities:{ Apia:'apia' } },
        'Solomon Islands':   { slug:'solomon-islands',   cities:{ Honiara:'honiara' } },
        'Tonga':             { slug:'tonga',             cities:{ "Nuku'alofa":'nukualofa' } },
        'Tuvalu':            { slug:'tuvalu',            cities:{ Funafuti:'funafuti' } },
        'Vanuatu':           { slug:'vanuatu',           cities:{ 'Port Vila':'port-vila' } },
      }
    },
  };

  const contClassMap = {
    'Asia':'cont-asia','Africa':'cont-africa','Europe':'cont-europe',
    'North America':'cont-namerica','South America':'cont-samerica','Oceania':'cont-oceania'
  };

  let mpHistory = [];   // stack of steps for back button
  let currentContinent = null;
  let currentCountry   = null;

  function openMarketplace(e) {
    e.preventDefault();
    renderContinents();
    document.getElementById('marketplace-modal').classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeMarketplace() {
    document.getElementById('marketplace-modal').classList.remove('open');
    document.body.style.overflow = '';
    setTimeout(resetMarketplace, 300);
  }

  document.getElementById('mp-overlay').addEventListener('click', closeMarketplace);

  function resetMarketplace() {
    mpHistory = [];
    showStep('step-continent');
    updateBreadcrumb();
    updateBack();
  }

  /* ---- Rendering ---- */
  function renderContinents() {
    const grid = document.getElementById('continent-grid');
    grid.innerHTML = '';
    Object.keys(MARKETPLACE_DATA).forEach(name => {
      const d = MARKETPLACE_DATA[name];
      const card = document.createElement('div');
      card.className = `mp-card ${contClassMap[name]||''}`;
      card.innerHTML = `<span class="mp-icon">${d.icon}</span><span>${name}</span>`;
      card.addEventListener('click', () => selectContinent(name));
      grid.appendChild(card);
    });
  }

  function selectContinent(name) {
    currentContinent = name;
    mpHistory.push('step-continent');
    document.getElementById('country-title').textContent = `Countries in ${name}`;
    const grid = document.getElementById('country-grid');
    grid.innerHTML = '';
    const countries = MARKETPLACE_DATA[name].countries;
    Object.keys(countries).forEach(cname => {
      const card = document.createElement('div');
      card.className = 'mp-card country-card';
      card.innerHTML = `<span class="mp-icon">📍</span><span>${cname}</span>`;
      card.addEventListener('click', () => selectCountry(cname, countries[cname]));
      grid.appendChild(card);
    });
    showStep('step-country');
    updateBreadcrumb(name);
    updateBack();
  }

  const EXISTING_CAPITALS = {
    'Afghanistan': 'kabul', 'Armenia': 'yerevan', 'Azerbaijan': 'baku', 'Bahrain': 'manama',
    'Bangladesh': 'dhaka', 'Bhutan': 'thimphu', 'Brunei': 'bandar-seri-begawan', 'Cambodia': 'phnom-penh',
    'Cyprus': 'nicosia', 'Georgia': 'tbilisi', 'Indonesia': 'jakarta', 'Iran': 'tehran', 'Iraq': 'baghdad',
    'Israel': 'tel-aviv', 'Japan': 'tokyo', 'Jordan': 'amman', 'Kazakhstan': 'astana', 'Kuwait': 'kuwait-city',
    'Kyrgyzstan': 'bishkek', 'Laos': 'vientiane', 'Lebanon': 'beirut', 'Malaysia': 'kuala-lumpur',
    'Maldives': 'male', 'Mongolia': 'ulaanbaatar', 'Myanmar': 'yangon', 'Nepal': 'kathmandu',
    'North Korea': 'pyongyang', 'Oman': 'muscat', 'Palestine': 'ramallah', 'Philippines': 'manila',
    'Qatar': 'doha', 'Saudi Arabia': 'riyadh', 'Singapore': 'singapore', 'South Korea': 'seoul',
    'Sri Lanka': 'colombo', 'Syria': 'damascus', 'Taiwan': 'taipei', 'Tajikistan': 'dushanbe',
    'Thailand': 'bangkok', 'Timor-Leste': 'dili', 'Turkey': 'ankara', 'Turkmenistan': 'ashgabat',
    'United Arab Emirates': 'abu-dhabi', 'Uzbekistan': 'tashkent', 'Vietnam': 'hanoi', 'Yemen': 'sana-a',
    'Algeria': 'algiers', 'Angola': 'luanda', 'Botswana': 'gaborone', 'Burkina Faso': 'ouagadougou',
    'Cape Verde': 'praia', 'Cameroon': 'yaounde', 'Central African Republic': 'bangui', 'Chad': 'ndjamena',
    'Comoros': 'moroni', 'Djibouti': 'djibouti-city', 'Egypt': 'cairo', 'Equatorial Guinea': 'malabo',
    'Eritrea': 'asmara', 'Eswatini': 'mbabane', 'Ethiopia': 'addis-ababa', 'Gabon': 'libreville',
    'Gambia': 'banjul', 'Ghana': 'accra', 'Guinea': 'conakry', 'Guinea-Bissau': 'bissau', 'Kenya': 'nairobi',
    'Lesotho': 'maseru', 'Liberia': 'monrovia', 'Libya': 'tripoli', 'Madagascar': 'antananarivo',
    'Malawi': 'lilongwe', 'Mali': 'bamako', 'Mauritania': 'nouakchott', 'Mauritius': 'port-louis',
    'Mozambique': 'maputo', 'Namibia': 'windhoek', 'Niger': 'niamey', 'Nigeria': 'abuja', 'Rwanda': 'kigali',
    'Sao Tome': 'sao-tome', 'Senegal': 'dakar', 'Seychelles': 'victoria', 'Sierra Leone': 'freetown',
    'Somalia': 'mogadishu', 'Somaliland': 'hargeisa', 'South Sudan': 'juba', 'Sudan': 'khartoum',
    'Togo': 'lome', 'Tunisia': 'tunis', 'Uganda': 'kampala', 'Zambia': 'lusaka', 'Zimbabwe': 'harare',
    'Albania': 'tirana', 'Andorra': 'andorra-la-vella', 'Austria': 'vienna', 'Belarus': 'minsk',
    'Belgium': 'brussels', 'Bosnia': 'sarajevo', 'Bulgaria': 'sofia', 'Croatia': 'zagreb',
    'Czech Republic': 'prague', 'Denmark': 'copenhagen', 'Estonia': 'tallinn', 'Finland': 'helsinki',
    'France': 'paris', 'Germany': 'berlin', 'Greece': 'athens', 'Hungary': 'budapest', 'Iceland': 'reykjavik',
    'Ireland': 'dublin', 'Kosovo': 'pristina', 'Latvia': 'riga', 'Liechtenstein': 'vaduz',
    'Lithuania': 'vilnius', 'Luxembourg': 'luxembourg', 'Malta': 'valletta', 'Moldova': 'chisinau',
    'Monaco': 'monaco', 'Montenegro': 'podgorica', 'Netherlands': 'amsterdam', 'North Macedonia': 'skopje',
    'Norway': 'oslo', 'Poland': 'warsaw', 'Portugal': 'lisbon', 'Romania': 'bucharest', 'Russia': 'moscow',
    'San Marino': 'san-marino', 'Antigua': 'st-johns', 'Bahamas': 'nassau', 'Barbados': 'bridgetown',
    'Costa Rica': 'san-jose', 'Cuba': 'havana', 'Dominica': 'roseau', 'Dominican Republic': 'santo-domingo',
    'El Salvador': 'san-salvador', 'Grenada': 'st-georges', 'Guatemala': 'guatemala-city',
    'Haiti': 'port-au-prince', 'Honduras': 'tegucigalpa', 'Jamaica': 'kingston', 'Mexico': 'mexico-city',
    'Nicaragua': 'managua', 'Panama': 'panama-city', 'St Lucia': 'castries', 'Argentina': 'buenos-aires',
    'Chile': 'santiago', 'Colombia': 'bogota', 'Ecuador': 'quito', 'Guyana': 'georgetown',
    'Paraguay': 'asuncion', 'Peru': 'lima', 'Suriname': 'paramaribo', 'Uruguay': 'montevideo',
    'Venezuela': 'caracas', 'Fiji': 'suva', 'Kiribati': 'tarawa', 'Marshall Islands': 'majuro',
    'Micronesia': 'palikir', 'Nauru': 'yaren', 'Palau': 'ngerulmud', 'Papua New Guinea': 'port-moresby',
    'Samoa': 'apia', 'Solomon Islands': 'honiara', 'Tonga': 'nukualofa', 'Tuvalu': 'funafuti',
    'Vanuatu': 'port-vila',
    'India': 'delhi' // Delhi exists and is the national capital territory
  };

  function selectCountry(name, data) {
    currentCountry = name;
    const cities = data.cities;
    const cityNames = Object.keys(cities);
    const contSlug = currentContinent.toLowerCase().replace(/\s+/g, '-');
    if (cityNames.length === 0) {
      let targetCity = EXISTING_CAPITALS[name] || '';
      window.location.href = `${BASE}/locations/${contSlug}/${data.slug}/${targetCity}`;
      return;
    }
    mpHistory.push('step-country');
    document.getElementById('city-title').textContent = `Cities in ${name}`;
    const grid = document.getElementById('city-grid');
    grid.innerHTML = '';
    // Add country-level link
    const allCard = document.createElement('div');
    allCard.className = 'mp-card city-card';
    allCard.innerHTML = `<span class="mp-icon">🗺️</span><span>All of ${name}</span>`;
    allCard.addEventListener('click', () => {
      let targetCity = EXISTING_CAPITALS[name];
      if (!targetCity) {
        // Fallback to first available city if capital page is not on disk
        targetCity = cities[cityNames[0]];
      }
      window.location.href = `${BASE}/locations/${contSlug}/${data.slug}/${targetCity}/`;
    });
    grid.appendChild(allCard);
    cityNames.forEach(city => {
      const card = document.createElement('div');
      card.className = 'mp-card city-card';
      card.innerHTML = `<span class="mp-icon">🏙️</span><span>${city}</span>`;
      card.addEventListener('click', () => { window.location.href = `${BASE}/locations/${contSlug}/${data.slug}/${cities[city]}/`; });
      grid.appendChild(card);
    });
    showStep('step-city');
    updateBreadcrumb(currentContinent, name);
    updateBack();
  }

  function mpBack() {
    const prev = mpHistory.pop();
    if (prev) {
      showStep(prev);
      if (prev === 'step-continent') { currentContinent = null; updateBreadcrumb(); }
      else if (prev === 'step-country') { currentCountry = null; updateBreadcrumb(currentContinent); }
      updateBack();
    }
  }

  function showStep(id) {
    document.querySelectorAll('.mp-step').forEach(s => s.classList.add('hidden'));
    const el = document.getElementById(id);
    el.classList.remove('hidden');
    // Re-trigger animation
    el.style.animation = 'none';
    el.offsetHeight;
    el.style.animation = '';
  }

  function updateBreadcrumb(continent, country) {
    const bc = document.getElementById('mp-breadcrumb');
    let html = '<span class="mp-bc-item active" id="bc-continent">Select Region</span>';
    if (continent) html += '<span class="mp-bc-sep">›</span><span class="mp-bc-item active">' + continent + '</span>';
    if (country)   html += '<span class="mp-bc-sep">›</span><span class="mp-bc-item active">' + country + '</span>';
    bc.innerHTML = html;
  }

  function updateBack() {
    document.getElementById('mp-back').classList.toggle('hidden', mpHistory.length === 0);
  }

  // Close on Escape
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMarketplace(); });
  </script>

  <main class="main">
