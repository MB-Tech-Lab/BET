<?php
require_once __DIR__ . '/../config/seo-config.php';

$audits_file = SEO_DATA_DIR . '/audits.json';
if (!file_exists($audits_file)) {
    die("No audits to export.");
}

$audits = json_decode(file_get_contents($audits_file), true);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="seo_audit_export_' . date('Y-m-d_H-i') . '.csv"');

$out = fopen('php://output', 'w');
fputcsv($out, [
    'URL', 'Type', 'HTTP Status', 'Final URL', 'Redirect Count', 'Response Time (s)', 
    'Canonical', 'Title', 'Meta Description', 'H1', 'Noindex',
    'Critical Issues', 'High Issues', 'Medium Issues', 'Low Issues', 
    'Issue Code', 'Issue Message', 'Severity', 'Comparison Status', 'Detected', 'Expected', 'Recommendation', 'Audited At'
]);

foreach ($audits as $path => $audit) {
    $h1 = isset($audit['h1']) ? (is_array($audit['h1']) ? implode(" | ", $audit['h1']) : $audit['h1']) : '';
    
    $base_row = [
        $audit['url'] ?? $path,
        $audit['type'] ?? '',
        $audit['http_status'] ?? '',
        $audit['final_url'] ?? '',
        $audit['redirect_count'] ?? 0,
        $audit['response_time'] ?? 0,
        $audit['canonical'] ?? '',
        $audit['title'] ?? '',
        $audit['meta_description'] ?? '',
        $h1,
        !empty($audit['noindex']) ? 'Yes' : 'No',
        $audit['severity_counts']['critical'] ?? 0,
        $audit['severity_counts']['high'] ?? 0,
        $audit['severity_counts']['medium'] ?? 0,
        $audit['severity_counts']['low'] ?? 0,
    ];
    
    $issues = $audit['compared_issues'] ?? $audit['issues'] ?? [];
    
    if (empty($issues)) {
        // Output row with empty issue columns
        fputcsv($out, array_merge($base_row, ['', '', '', '', '', '', '', $audit['audited_at'] ?? '']));
    } else {
        foreach ($issues as $iss) {
            fputcsv($out, array_merge($base_row, [
                $iss['code'] ?? $iss['type'] ?? '',
                $iss['message'] ?? '',
                $iss['severity'] ?? '',
                $iss['status'] ?? '', // NEW, EXISTING, FIXED, CHANGED
                $iss['detected'] ?? '',
                $iss['expected'] ?? '',
                $iss['recommendation'] ?? '',
                $audit['audited_at'] ?? ''
            ]));
        }
    }
}

fclose($out);
