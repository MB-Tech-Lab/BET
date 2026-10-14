<?php
require_once __DIR__ . '/../config/seo-config.php';

function generate_reports() {
    $urls_file = SEO_DATA_DIR . '/urls.json';
    $audits_file = SEO_DATA_DIR . '/audits.json';
    $discovery_file = SEO_DATA_DIR . '/discovery_stats.json';

    if (!file_exists($urls_file) || !file_exists($audits_file)) {
        seo_log('error', 'Data files missing for report generation.');
        return false;
    }

    $urls = json_decode(file_get_contents($urls_file), true) ?: [];
    $audits = json_decode(file_get_contents($audits_file), true) ?: [];
    $discovery = file_exists($discovery_file) ? json_decode(file_get_contents($discovery_file), true) : null;

    $stats = [
        'total_urls' => count($urls), // Auditable urls from discovery
        'audited' => 0,
        'pending' => 0,
        'failed' => 0,
        'missing' => 0,
        'issues' => [
            'critical' => 0,
            'high' => 0,
            'medium' => 0,
            'low' => 0
        ],
        'comparison' => [
            'new' => 0,
            'fixed' => 0,
            'existing' => 0,
            'changed' => 0
        ],
        'top_problems' => [],
        'health_score' => 100,
        'is_partial' => false,
        'generated_at' => date('Y-m-d H:i:s'),
        'discovery' => $discovery
    ];

    foreach ($urls as $url) {
        if ($url['status'] === 'completed') $stats['audited']++;
        elseif ($url['status'] === 'failed') $stats['failed']++;
        elseif ($url['status'] === 'missing') $stats['missing']++;
        else $stats['pending']++;
    }
    
    // Ignore 'missing' when considering partial vs full
    $active_total = $stats['total_urls'] - $stats['missing'];
    
    if (($stats['audited'] + $stats['failed']) < $active_total) {
        $stats['is_partial'] = true;
    }

    $problem_counts = [];

    foreach ($audits as $audit) {
        $stats['issues']['critical'] += $audit['severity_counts']['critical'] ?? 0;
        $stats['issues']['high'] += $audit['severity_counts']['high'] ?? 0;
        $stats['issues']['medium'] += $audit['severity_counts']['medium'] ?? 0;
        $stats['issues']['low'] += $audit['severity_counts']['low'] ?? 0;
        
        if (isset($audit['compared_issues'])) {
            foreach ($audit['compared_issues'] as $c_iss) {
                $status = strtolower($c_iss['status'] ?? 'unknown');
                if (isset($stats['comparison'][$status])) {
                    $stats['comparison'][$status]++;
                }
                
                // Track top problems for current existing/new issues
                if ($status !== 'fixed') {
                    $code = $c_iss['code'] ?? $c_iss['type'];
                    if (!isset($problem_counts[$code])) {
                        $problem_counts[$code] = [
                            'code' => $code,
                            'message' => $c_iss['message'],
                            'severity' => $c_iss['severity'],
                            'count' => 0
                        ];
                    }
                    $problem_counts[$code]['count']++;
                }
            }
        }
    }

    // Sort top problems
    usort($problem_counts, function($a, $b) {
        return $b['count'] <=> $a['count'];
    });
    $stats['top_problems'] = array_slice($problem_counts, 0, 10);

    // Health score calculation based ONLY on audited URLs
    $valid_audited = $stats['audited']; // Exclude failed from health score base, or include? Failed means 0 score for that page.
    // If a page fails (timeout/500), it has a critical issue attached.
    // Let's include failed in the penalty denominator.
    $audited_and_failed = $stats['audited'] + $stats['failed'];
    
    if ($audited_and_failed > 0) {
        $penalty = (
            ($stats['issues']['critical'] * 5) + 
            ($stats['issues']['high'] * 2) + 
            ($stats['issues']['medium'] * 0.5) + 
            ($stats['issues']['low'] * 0.1)
        ) / $audited_and_failed;
        
        $stats['health_score'] = max(0, round(100 - $penalty));
    }

    atomic_write_json(SEO_DATA_DIR . '/stats.json', $stats);
    
    return $stats;
}

if (php_sapi_name() === 'cli' && basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    generate_reports();
} elseif (isset($_GET['run'])) {
    header('Content-Type: application/json');
    $stats = generate_reports();
    echo json_encode(['success' => $stats !== false, 'stats' => $stats]);
}
