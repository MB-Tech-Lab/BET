<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$asia_dir = __DIR__ . '/../locations/asia';
if (!is_dir($asia_dir)) {
    die("Asia directory not found.\n");
}

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($asia_dir));

$updated_count = 0;
$skipped_count = 0;

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

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filepath = $file->getRealPath();
        
        $country_dir = basename(dirname($filepath));
        $lang = $lang_map[strtolower($country_dir)] ?? 'en';
        
        $content = file_get_contents($filepath);
        
        if (strpos($content, "'pcr_chambers'") !== false) {
            $skipped_count++;
            continue;
        }

        $title = '';
        $mfg_kw = '';
        $sup_kw = '';
        $exp_kw = '';
        
        if ($lang === 'ar') {
            $title = 'الشركة المصنعة لغرف PCR في \' . $city . \'، \' . $country . \'';
            $mfg_kw = 'مصنعي غرف PCR';
            $sup_kw = 'مورد محطات عمل PCR';
            $exp_kw = 'مصدر غرف PCR';
        } elseif ($lang === 'zh') {
            $title = 'PCR 实验室操作台制造商位于 \' . $city . \', \' . $country . \'';
            $mfg_kw = 'PCR 实验室操作台制造商';
            $sup_kw = 'PCR 工作站供应商';
            $exp_kw = 'PCR 实验室操作台出口商';
        } elseif ($lang === 'ja') {
            $title = 'PCRチャンバーメーカー \' . $city . \', \' . $country . \'';
            $mfg_kw = 'PCRチャンバーメーカー';
            $sup_kw = 'PCRワークステーションサプライヤー';
            $exp_kw = 'PCRチャンバー輸出業者';
        } elseif ($lang === 'ko') {
            $title = 'PCR 챔버 제조업체 \' . $city . \', \' . $country . \'';
            $mfg_kw = 'PCR 챔버 제조업체';
            $sup_kw = 'PCR 워크스테이션 공급업체';
            $exp_kw = 'PCR 챔버 수출업체';
        } elseif ($lang === 'th') {
            $title = 'ผู้ผลิตตู้ PCR ใน \' . $city . \', \' . $country . \'';
            $mfg_kw = 'ผู้ผลิตตู้ PCR';
            $sup_kw = 'ซัพพลายเออร์ตู้ปฏิบัติการ PCR';
            $exp_kw = 'ผู้ส่งออกตู้ PCR';
        } elseif ($lang === 'vi') {
            $title = 'Nhà sản xuất Buồng PCR tại \' . $city . \', \' . $country . \'';
            $mfg_kw = 'Nhà sản xuất Buồng PCR';
            $sup_kw = 'Nhà cung cấp Trạm làm việc PCR';
            $exp_kw = 'Nhà xuất khẩu Buồng PCR';
        } elseif ($lang === 'id') {
            $title = 'Produsen Bilik PCR di \' . $city . \', \' . $country . \'';
            $mfg_kw = 'Produsen Bilik PCR';
            $sup_kw = 'Pemasok Stasiun Kerja PCR';
            $exp_kw = 'Eksportir Bilik PCR';
        } elseif ($lang === 'ms') {
            $title = 'Pengeluar Kebuk PCR di \' . $city . \', \' . $country . \'';
            $mfg_kw = 'Pengeluar Kebuk PCR';
            $sup_kw = 'Pembekal Stesen Kerja PCR';
            $exp_kw = 'Pengeksport Kebuk PCR';
        } elseif ($lang === 'hi') {
            $title = 'पीसीआर चैंबर निर्माता \' . $city . \', \' . $country . \' में';
            $mfg_kw = 'पीसीआर चैंबर निर्माता';
            $sup_kw = 'पीसीआर वर्कस्टेशन आपूर्तिकर्ता';
            $exp_kw = 'पीसीआर चैंबर निर्यातक';
        } elseif ($lang === 'ur') {
            $title = 'پی سی آر چیمبرز تیار کرنے والا \' . $city . \'، \' . $country . \' میں';
            $mfg_kw = 'پی سی آر چیمبرز تیار کرنے والا';
            $sup_kw = 'پی سی آر ورک اسٹیشن سپلائر';
            $exp_kw = 'پی سی آر چیمبر برآمد کنندہ';
        } elseif ($lang === 'ta') {
            $title = 'பிசிஆர் சேம்பர் உற்பத்தியாளர் \' . $city . \', \' . $country . \' இல்';
            $mfg_kw = 'பிசிஆர் சேம்பர் உற்பத்தியாளர்';
            $sup_kw = 'பிசிஆர் ஒர்க்ஸ்டேஷன் சப்ளையர்';
            $exp_kw = 'பிசிஆர் சேம்பர் ஏற்றுமதியாளர்';
        } else {
            $title = 'Manufacturer of PCR Chambers in \' . $city . \', \' . $country . \'';
            $mfg_kw = 'PCR Chamber Manufacturer';
            $sup_kw = 'PCR Workstation Supplier';
            $exp_kw = 'PCR Chamber Exporter';
        }

        $snippet = "    'pcr_chambers' => [
        'title' => '$title',
        'desc' => [
            'Burhani Engineering Technology is a trusted <strong>$mfg_kw</strong> in ' . \$city . ', ' . \$country . '. Our contamination-controlled workstations are equipped with HEPA filtration and UV sterilization for secure DNA/RNA handling.',
            'As a leading <strong>$sup_kw</strong> in ' . \$city . ', we provide advanced benchtop equipment designed to prevent cross-contamination during critical molecular biology and diagnostic preparations.',
            'Our company also serves as a prominent <strong>$exp_kw</strong> and <strong>Dealer</strong>, delivering superior quality laboratory solutions to research institutes and hospitals across ' . \$country . '.'
        ]
    ]";

        $injected = false;
        
        $pos = strrpos($content, "    ]\n];");
        if ($pos !== false) {
            $search = substr($content, $pos, strlen("    ]\n];"));
            $replace = "    ],\n" . $snippet . "\n];";
            $content = substr_replace($content, $replace, $pos, strlen($search));
            $injected = true;
        } elseif (($pos = strrpos($content, "    ]\r\n];")) !== false) {
            $search = substr($content, $pos, strlen("    ]\r\n];"));
            $replace = "    ],\r\n" . $snippet . "\r\n];";
            $content = substr_replace($content, $replace, $pos, strlen($search));
            $injected = true;
        } else {
            // Find the last item ending before $cta_banner
            $pos = strpos($content, "];\n\n\$cta_banner");
            if ($pos !== false) {
                $last_bracket_pos = strrpos(substr($content, 0, $pos), "    ]");
                if ($last_bracket_pos !== false) {
                    $search = substr($content, $last_bracket_pos, $pos - $last_bracket_pos);
                    $replace = rtrim($search) . ",\n" . $snippet . "\n";
                    $content = substr_replace($content, $replace, $last_bracket_pos, strlen($search));
                    $injected = true;
                }
            }
        }
        
        if ($injected) {
            file_put_contents($filepath, $content);
            $updated_count++;
            echo "Updated: $filepath\n";
        } else {
            echo "Could not find insertion point for: $filepath\n";
        }
    }
}

echo "Done! Updated $updated_count files. Skipped $skipped_count files.\n";
