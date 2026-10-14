<?php
require_once __DIR__ . '/history.php';

function compare_audits($current_audit_results) {
    $previous_audit = get_previous_audit();
    
    $comparison = [];
    
    foreach ($current_audit_results as $url => $current_data) {
        $prev_data = $previous_audit[$url] ?? null;
        
        $current_issues = $current_data['issues'] ?? [];
        $prev_issues = $prev_data ? ($prev_data['issues'] ?? []) : [];
        
        $curr_map = [];
        foreach ($current_issues as $iss) {
            $key = $iss['code']; // group by code
            // Handle multiple instances of the same issue type (e.g., multiple broken links)
            if (!isset($curr_map[$key])) $curr_map[$key] = [];
            $curr_map[$key][] = $iss;
        }
        
        $prev_map = [];
        foreach ($prev_issues as $iss) {
            $key = $iss['code'] ?? $iss['type'];
            if (!isset($prev_map[$key])) $prev_map[$key] = [];
            $prev_map[$key][] = $iss;
        }
        
        $compared_issues = [];
        
        // Find NEW, EXISTING, CHANGED
        foreach ($curr_map as $code => $issues_list) {
            foreach ($issues_list as $i => $iss) {
                if (isset($prev_map[$code]) && count($prev_map[$code]) > 0) {
                    // Match found
                    $prev_iss = array_shift($prev_map[$code]); // Pop one off
                    if (($iss['detected'] ?? '') !== ($prev_iss['detected'] ?? '')) {
                        $iss['status'] = 'CHANGED';
                    } else {
                        $iss['status'] = 'EXISTING';
                    }
                } else {
                    $iss['status'] = 'NEW';
                }
                $compared_issues[] = $iss;
            }
        }
        
        // Find FIXED
        foreach ($prev_map as $code => $remaining_prev_issues) {
            foreach ($remaining_prev_issues as $iss) {
                $iss['status'] = 'FIXED';
                $compared_issues[] = $iss;
            }
        }
        
        $current_data['compared_issues'] = $compared_issues;
        $comparison[$url] = $current_data;
    }
    
    // Check for missing URLs (were in previous, not in current)
    // Actually, `urls.json` already flags them as missing. We can just add them with a status.
    
    return $comparison;
}
