<?php
require_once __DIR__ . '/../config/seo-config.php';

function run_duplicate_check() {
    $audits_file = SEO_DATA_DIR . '/audits.json';

    if (!file_exists($audits_file)) {
        seo_log('error', 'No audits found to check for duplicates.');
        return false;
    }

    $audits = json_decode(file_get_contents($audits_file), true) ?: [];

    $titles = [];
    $descriptions = [];
    $canonicals = [];
    $h1s = [];

    foreach ($audits as $path => &$result) {
        if (isset($result['issues'])) {
            $result['issues'] = array_filter($result['issues'], function($i) {
                return !in_array($i['type'], ['duplicate_title', 'duplicate_description', 'duplicate_canonical', 'duplicate_h1']);
            });
        }
        
        if (!empty($result['title'])) {
            $t = strtolower($result['title']);
            $titles[$t][] = $path;
        }
        if (!empty($result['meta_description'])) {
            $d = strtolower($result['meta_description']);
            $descriptions[$d][] = $path;
        }
        if (!empty($result['canonical'])) {
            $c = strtolower($result['canonical']);
            $canonicals[$c][] = $path;
        }
        if (!empty($result['h1'])) {
            $h_arr = is_array($result['h1']) ? $result['h1'] : [$result['h1']];
            foreach ($h_arr as $h) {
                $hs = strtolower($h);
                $h1s[$hs][] = $path;
            }
        }
    }

    $duplicate_groups = [
        'titles' => [],
        'descriptions' => [],
        'canonicals' => [],
        'h1s' => []
    ];

    foreach ($titles as $title => $paths) {
        if (count($paths) > 1) {
            $duplicate_groups['titles'][] = ['value' => $title, 'urls' => $paths];
            foreach ($paths as $path) {
                $audits[$path]['issues'][] = seo_create_issue(
                    'duplicate_title', 
                    'Duplicate Title Tag', 
                    $title, 
                    'Unique title across the site', 
                    'Identical titles confuse search engines and users, hurting ranking ability for specific queries.', 
                    'Write a unique title tag that accurately describes this specific page.'
                );
            }
        }
    }

    foreach ($descriptions as $desc => $paths) {
        if (count($paths) > 1) {
            $duplicate_groups['descriptions'][] = ['value' => $desc, 'urls' => $paths];
            foreach ($paths as $path) {
                $audits[$path]['issues'][] = seo_create_issue(
                    'duplicate_description', 
                    'Duplicate Meta Description', 
                    $desc, 
                    'Unique description', 
                    'Identical descriptions result in generic snippets in search results.', 
                    'Write a unique meta description for each page.'
                );
            }
        }
    }

    foreach ($canonicals as $can => $paths) {
        if (count($paths) > 1) {
            $duplicate_groups['canonicals'][] = ['value' => $can, 'urls' => $paths];
            foreach ($paths as $path) {
                $audits[$path]['issues'][] = seo_create_issue(
                    'duplicate_canonical', 
                    'Multiple pages share the same canonical URL', 
                    $can, 
                    'Self-referencing canonical or explicit alternate', 
                    'If multiple distinct pages point to the same canonical URL, search engines will only index one of them.', 
                    'Ensure canonicals are self-referencing unless the pages are exact duplicates.'
                );
            }
        }
    }
    
    foreach ($h1s as $h1 => $paths) {
        if (count($paths) > 1) {
            $duplicate_groups['h1s'][] = ['value' => $h1, 'urls' => $paths];
            foreach ($paths as $path) {
                $audits[$path]['issues'][] = seo_create_issue(
                    'duplicate_h1', 
                    'Duplicate H1 Tag', 
                    $h1, 
                    'Unique H1', 
                    'H1 tags indicate the primary topic of the page and should ideally be unique across the site.', 
                    'Update the H1 tag to better reflect the specific content of this page.'
                );
            }
        }
    }

    foreach ($audits as $path => &$result) {
        $result['severity_counts'] = ['critical'=>0, 'high'=>0, 'medium'=>0, 'low'=>0];
        if (isset($result['issues'])) {
            foreach ($result['issues'] as $issue) {
                if (isset($result['severity_counts'][$issue['severity']])) {
                    $result['severity_counts'][$issue['severity']]++;
                }
            }
        }
        $result['issues'] = array_values($result['issues']);
    }

    file_put_contents($audits_file, json_encode($audits, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    file_put_contents(SEO_DATA_DIR . '/duplicates.json', json_encode($duplicate_groups, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    
    seo_log('info', 'Duplicate check completed. Found ' . count($duplicate_groups['titles']) . ' duplicate titles.');

    return true;
}

if (php_sapi_name() === 'cli' && basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    run_duplicate_check();
} elseif (isset($_GET['run'])) {
    header('Content-Type: application/json');
    $success = run_duplicate_check();
    echo json_encode(['success' => $success]);
}
