<?php
require_once __DIR__ . '/config/seo-config.php';

// Handle Automation Toggle
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'toggle_automation') {
    header('Content-Type: application/json');
    $current_settings = seo_get_automation_settings();
    $current_settings['enabled'] = !empty($_POST['enabled']) && $_POST['enabled'] === 'true';
    $current_settings['updated_at'] = date('Y-m-d H:i:s');
    atomic_write_json(SEO_AUTOMATION_SETTINGS_FILE, $current_settings);
    echo json_encode(['success' => true, 'settings' => $current_settings]);
    exit;
}

$stats_file = __DIR__ . '/data/stats.json';
$stats = file_exists($stats_file) ? json_decode(file_get_contents($stats_file), true) : null;
$audits_file = __DIR__ . '/data/audits.json';
$audits = file_exists($audits_file) ? json_decode(file_get_contents($audits_file), true) : [];

$automation = seo_get_automation_settings();
$run_meta = file_exists(SEO_RUN_META_FILE) ? json_decode(file_get_contents(SEO_RUN_META_FILE), true) : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BET SEO Monitoring Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-stat { border-left: 4px solid #0d6efd; }
        .card-critical { border-left: 4px solid #dc3545; }
        .card-high { border-left: 4px solid #fd7e14; }
        .card-medium { border-left: 4px solid #ffc107; }
        .card-low { border-left: 4px solid #198754; }
        .table-responsive { max-height: 600px; overflow-y: auto; }
        .url-link { cursor: pointer; color: #0d6efd; text-decoration: underline; }
        .sortable { cursor: pointer; user-select: none; }
        .sortable:hover { background-color: #f8f9fa; }
    </style>
</head>
<body class="bg-light">

<div class="container-fluid py-5 px-4">
    <h1 class="mb-4">SEO Monitoring Dashboard</h1>
    
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <button id="btnDiscover" class="btn btn-secondary me-2">1. Initialize / Refresh Inventory</button>
            <button id="btnCrawl" class="btn btn-primary me-2">2. Start / Resume Crawl Batch</button>
            <button id="btnGenerate" class="btn btn-info text-white me-2">3. Process & Generate Reports</button>
            <a href="reports/export.php" class="btn btn-success" target="_blank">Export CSV</a>
        </div>
        <div class="text-end text-muted small">
            <em>Weekly Cron: php seo/cron/weekly-audit.php</em>
        </div>
    </div>

    <div id="progressContainer" class="d-none mb-4">
        <div class="progress">
            <div id="crawlProgress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;"></div>
        </div>
        <small id="progressText" class="text-muted">Crawling...</small>
    </div>
    
    <!-- AUTOMATION CONTROL CARD -->
    <div class="card mb-4 shadow-sm border-<?php echo $automation['enabled'] ? 'success' : 'secondary'; ?>" id="automationCard">
        <div class="card-header bg-<?php echo $automation['enabled'] ? 'success text-white' : 'light'; ?> d-flex justify-content-between align-items-center">
            <h5 class="mb-0">AUTOMATIC SEO AUDIT</h5>
            <div class="form-check form-switch fs-5 mb-0">
                <input class="form-check-input" type="checkbox" id="automationSwitch" <?php echo $automation['enabled'] ? 'checked' : ''; ?> style="cursor:pointer;">
                <label class="form-check-label text-<?php echo $automation['enabled'] ? 'white' : 'dark'; ?>" for="automationSwitch" id="automationStatusLabel">
                    [ <?php echo $automation['enabled'] ? 'ON 🟢' : 'OFF ⚪'; ?> ]
                </label>
            </div>
        </div>
        <div class="card-body bg-white">
            <div class="row">
                <div class="col-md-3 border-end">
                    <h6 class="text-muted text-uppercase mb-1">Status</h6>
                    <p class="fs-5 fw-bold mb-0 text-<?php echo $automation['enabled'] ? 'success' : 'secondary'; ?>" id="automationStatusText">
                        <?php echo $automation['enabled'] ? 'Enabled' : 'Disabled'; ?>
                    </p>
                </div>
                <div class="col-md-3 border-end">
                    <h6 class="text-muted text-uppercase mb-1">Schedule</h6>
                    <p class="mb-0">
                        <strong>Weekly:</strong> Every <?php echo htmlspecialchars($automation['weekly_day']); ?> at <?php echo htmlspecialchars($automation['weekly_time']); ?><br>
                        <strong>Worker:</strong> Every <?php echo htmlspecialchars($automation['worker_interval']); ?> minutes<br>
                        <strong>Batch:</strong> <?php echo htmlspecialchars($automation['batch_size']); ?> URLs
                    </p>
                </div>
                <div class="col-md-3 border-end">
                    <h6 class="text-muted text-uppercase mb-1">Current Run</h6>
                    <p class="mb-0">
                        <strong>Status:</strong> <?php echo $run_meta ? htmlspecialchars(ucfirst($run_meta['status'] ?? 'unknown')) : 'None'; ?><br>
                        <strong>VPS Scheduler:</strong> Configured
                    </p>
                </div>
                <div class="col-md-3">
                    <h6 class="text-muted text-uppercase mb-1">Latest History</h6>
                    <p class="mb-0">
                        <strong>Last Completed:</strong> <?php echo $stats && isset($stats['completed_at']) ? htmlspecialchars($stats['completed_at']) : 'Never'; ?><br>
                        <strong>Progress:</strong> <?php echo $stats ? number_format($stats['audited']) . ' / ' . number_format($stats['total_urls']) : '0 / 0'; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <?php if ($stats): ?>
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card card-stat shadow-sm"><div class="card-body">
                <h6 class="text-muted text-uppercase">Total URLs</h6>
                <h3 class="mb-0"><?php echo number_format($stats['total_urls']); ?></h3>
                <?php if(isset($stats['discovery'])): ?>
                    <small class="text-muted">From <?php echo number_format($stats['discovery']['total_sitemap_urls'] ?? 0); ?> sitemap entries (<?php echo number_format($stats['discovery']['excluded_images'] ?? 0); ?> images excluded)</small>
                <?php endif; ?>
            </div></div>
        </div>
        <div class="col-md-3">
            <div class="card card-stat shadow-sm"><div class="card-body">
                <h6 class="text-muted text-uppercase">Audited</h6>
                <h3 class="mb-0 text-primary"><?php echo number_format($stats['audited']); ?></h3>
                <small class="text-muted">
                    <?php 
                        $total = $stats['total_urls'];
                        $cov = $total > 0 ? round(($stats['audited'] / $total) * 100, 2) : 0;
                        echo "Coverage: $cov%";
                    ?>
                </small>
            </div></div>
        </div>
        <div class="col-md-3">
            <div class="card card-stat shadow-sm"><div class="card-body">
                <h6 class="text-muted text-uppercase">Pending / Failed / Missing</h6>
                <h3 class="mb-0 text-secondary"><?php echo number_format($stats['pending'] ?? 0); ?> / <?php echo number_format($stats['failed'] ?? 0); ?> / <?php echo number_format($stats['missing'] ?? 0); ?></h3>
            </div></div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm <?php echo $stats['health_score'] < 70 ? 'bg-danger text-white' : 'bg-success text-white'; ?>"><div class="card-body">
                <h6 class="text-uppercase opacity-75">
                    SEO Health Score 
                    <?php if(!empty($stats['is_partial'])): ?>
                        <span class="badge bg-light text-dark ms-2">PARTIAL AUDIT</span>
                    <?php else: ?>
                        <span class="badge bg-dark text-white ms-2">FULL AUDIT</span>
                    <?php endif; ?>
                </h6>
                <h3 class="mb-0"><?php echo $stats['health_score']; ?> / 100</h3>
            </div></div>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card card-critical shadow-sm"><div class="card-body">
                <h6 class="text-danger text-uppercase">Critical Issues</h6>
                <h3 class="mb-0 text-danger"><?php echo number_format($stats['issues']['critical']); ?></h3>
            </div></div>
        </div>
        <div class="col-md-3">
            <div class="card card-high shadow-sm"><div class="card-body">
                <h6 class="text-warning text-uppercase" style="color: #fd7e14 !important;">High Issues</h6>
                <h3 class="mb-0" style="color: #fd7e14;"><?php echo number_format($stats['issues']['high']); ?></h3>
            </div></div>
        </div>
        <div class="col-md-3">
            <div class="card card-medium shadow-sm"><div class="card-body">
                <h6 class="text-warning text-uppercase">Medium Issues</h6>
                <h3 class="mb-0 text-warning"><?php echo number_format($stats['issues']['medium']); ?></h3>
            </div></div>
        </div>
        <div class="col-md-3">
            <div class="card card-low shadow-sm"><div class="card-body">
                <h6 class="text-success text-uppercase">Low Issues</h6>
                <h3 class="mb-0 text-success"><?php echo number_format($stats['issues']['low']); ?></h3>
            </div></div>
        </div>
    </div>
    
    <div class="row mb-4">
        <?php if (isset($stats['comparison'])): ?>
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-light"><strong>Week over Week Change</strong></div>
                <div class="card-body d-flex justify-content-around align-items-center">
                    <div class="text-center">
                        <h4 class="text-danger"><?php echo $stats['comparison']['new'] ?? 0; ?></h4>
                        <span class="text-muted">NEW</span>
                    </div>
                    <div class="text-center">
                        <h4 class="text-success"><?php echo $stats['comparison']['fixed'] ?? 0; ?></h4>
                        <span class="text-muted">FIXED</span>
                    </div>
                    <div class="text-center">
                        <h4 class="text-secondary"><?php echo $stats['comparison']['existing'] ?? 0; ?></h4>
                        <span class="text-muted">EXISTING</span>
                    </div>
                    <div class="text-center">
                        <h4 class="text-warning"><?php echo $stats['comparison']['changed'] ?? 0; ?></h4>
                        <span class="text-muted">CHANGED</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($stats['top_problems'])): ?>
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-light"><strong>Top Problems</strong></div>
                <div class="card-body p-2" style="max-height: 150px; overflow-y: auto;">
                    <ul class="list-group list-group-flush">
                    <?php foreach($stats['top_problems'] as $tp): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                            <small>
                                <strong><?php echo htmlspecialchars($tp['code']); ?></strong>: <?php echo htmlspecialchars($tp['message']); ?>
                            </small>
                            <span class="badge bg-secondary rounded-pill"><?php echo $tp['count']; ?> URLs</span>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <!-- Filtering Bar -->
    <div class="card shadow-sm mb-3">
        <div class="card-body p-2 d-flex gap-2 align-items-center bg-light">
            <strong>Filters:</strong>
            <select id="filterMode" class="form-select form-select-sm w-auto">
                <option value="all">All URLs</option>
                <option value="errors" selected>Errors Only</option>
            </select>
            <select id="filterSeverity" class="form-select form-select-sm w-auto">
                <option value="">Any Severity</option>
                <option value="critical">Critical</option>
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
            </select>
            <select id="filterType" class="form-select form-select-sm w-auto">
                <option value="">Any Type</option>
                <option value="product">Product</option>
                <option value="location">Location</option>
                <option value="location_product">Location Product</option>
            </select>
            <select id="filterHttp" class="form-select form-select-sm w-auto">
                <option value="">Any HTTP Status</option>
                <option value="2xx">2xx Success</option>
                <option value="3xx">3xx Redirect</option>
                <option value="4xx">4xx Client Error</option>
                <option value="5xx">5xx Server Error</option>
                <option value="0">Timeout/Error</option>
            </select>
            <input type="text" id="filterSearch" class="form-control form-control-sm ms-auto" style="max-width: 300px;" placeholder="Search URL...">
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0 table-responsive">
            <table class="table table-hover mb-0" id="auditTable">
                <thead class="table-dark sticky-top">
                    <tr>
                        <th class="sortable" data-sort="url">URL ⇕</th>
                        <th class="sortable" data-sort="type">Type ⇕</th>
                        <th class="sortable" data-sort="http">HTTP ⇕</th>
                        <th class="sortable" data-sort="critical">Critical ⇕</th>
                        <th class="sortable" data-sort="high">High ⇕</th>
                        <th class="sortable" data-sort="medium">Medium ⇕</th>
                        <th class="sortable" data-sort="date">Last Audited ⇕</th>
                    </tr>
                </thead>
                <tbody id="auditTableBody">
                    <!-- Rendered by JS -->
                </tbody>
            </table>
            <div id="tableLimitNote" class="p-3 text-center text-muted d-none">Showing first 1000 results. Use export for full data.</div>
        </div>
    </div>

    <?php else: ?>
        <div class="alert alert-info">No stats found. Please run Initialization, then Crawl, then Generate Reports.</div>
    <?php endif; ?>

</div>

<!-- URL Detail Modal -->
<div class="modal fade" id="urlModal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="urlModalTitle">URL Audit Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div id="urlModalBody">Loading...</div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Make PHP data available to JS
const auditsData = <?php echo json_encode($audits); ?>;
const auditsList = Object.entries(auditsData).map(([url, data]) => ({url, ...data}));

let currentSort = { col: 'critical', dir: 'desc' };

// Handle Automation Toggle
document.getElementById('automationSwitch')?.addEventListener('change', function() {
    const isEnabled = this.checked;
    this.disabled = true;
    
    const formData = new FormData();
    formData.append('action', 'toggle_automation');
    formData.append('enabled', isEnabled ? 'true' : 'false');
    
    fetch('index.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            // Update UI
            const card = document.getElementById('automationCard');
            const header = card.querySelector('.card-header');
            const label = document.getElementById('automationStatusLabel');
            const text = document.getElementById('automationStatusText');
            
            if (data.settings.enabled) {
                card.classList.remove('border-secondary');
                card.classList.add('border-success');
                header.classList.remove('bg-light');
                header.classList.add('bg-success', 'text-white');
                label.classList.remove('text-dark');
                label.classList.add('text-white');
                label.innerText = '[ ON 🟢 ]';
                text.classList.remove('text-secondary');
                text.classList.add('text-success');
                text.innerText = 'Enabled';
            } else {
                card.classList.remove('border-success');
                card.classList.add('border-secondary');
                header.classList.remove('bg-success', 'text-white');
                header.classList.add('bg-light');
                label.classList.remove('text-white');
                label.classList.add('text-dark');
                label.innerText = '[ OFF ⚪ ]';
                text.classList.remove('text-success');
                text.classList.add('text-secondary');
                text.innerText = 'Disabled';
            }
        } else {
            alert('Failed to update automation settings.');
            this.checked = !isEnabled; // revert
        }
    })
    .catch(err => {
        console.error(err);
        alert('An error occurred.');
        this.checked = !isEnabled; // revert
    })
    .finally(() => {
        this.disabled = false;
    });
});

function renderTable() {
    const tbody = document.getElementById('auditTableBody');
    const fMode = document.getElementById('filterMode').value;
    const fSev = document.getElementById('filterSeverity').value;
    const fType = document.getElementById('filterType').value;
    const fHttp = document.getElementById('filterHttp').value;
    const fSearch = document.getElementById('filterSearch').value.toLowerCase();
    
    let filtered = auditsList.filter(item => {
        // Search
        if (fSearch && !item.url.toLowerCase().includes(fSearch)) return false;
        
        // Mode
        let hasErrors = (item.severity_counts?.critical > 0 || item.severity_counts?.high > 0 || item.severity_counts?.medium > 0 || item.severity_counts?.low > 0);
        if (fMode === 'errors' && !hasErrors) return false;
        
        // Severity
        if (fSev && (!item.severity_counts || !item.severity_counts[fSev] || item.severity_counts[fSev] === 0)) return false;
        
        // Type
        if (fType && item.type !== fType) return false;
        
        // HTTP
        if (fHttp) {
            let status = parseInt(item.http_status) || 0;
            if (fHttp === '2xx' && (status < 200 || status >= 300)) return false;
            if (fHttp === '3xx' && (status < 300 || status >= 400)) return false;
            if (fHttp === '4xx' && (status < 400 || status >= 500)) return false;
            if (fHttp === '5xx' && status < 500) return false;
            if (fHttp === '0' && status !== 0) return false;
        }
        
        return true;
    });
    
    // Sort
    filtered.sort((a, b) => {
        let valA, valB;
        if (currentSort.col === 'url') { valA = a.url; valB = b.url; }
        else if (currentSort.col === 'type') { valA = a.type; valB = b.type; }
        else if (currentSort.col === 'http') { valA = parseInt(a.http_status)||0; valB = parseInt(b.http_status)||0; }
        else if (currentSort.col === 'date') { valA = a.audited_at; valB = b.audited_at; }
        else {
            valA = (a.severity_counts && a.severity_counts[currentSort.col]) ? a.severity_counts[currentSort.col] : 0;
            valB = (b.severity_counts && b.severity_counts[currentSort.col]) ? b.severity_counts[currentSort.col] : 0;
        }
        
        if (valA < valB) return currentSort.dir === 'asc' ? -1 : 1;
        if (valA > valB) return currentSort.dir === 'asc' ? 1 : -1;
        return 0;
    });
    
    let html = '';
    let count = 0;
    for (let res of filtered) {
        if (count++ >= 1000) break;
        let crit = res.severity_counts?.critical || 0;
        let high = res.severity_counts?.high || 0;
        let med = res.severity_counts?.medium || 0;
        let tr_class = crit > 0 ? 'table-danger' : (high > 0 ? 'table-warning' : '');
        
        let httpBadge = 'bg-secondary';
        if (res.http_status == 200) httpBadge = 'bg-success';
        else if (res.http_status >= 400 || res.http_status == 0) httpBadge = 'bg-danger';
        else if (res.http_status >= 300) httpBadge = 'bg-warning text-dark';
        
        html += `<tr class="${tr_class}">
            <td class="text-break"><span class="url-link" onclick='showUrlDetails(${JSON.stringify(res.url)})'>${res.url}</span></td>
            <td><span class="badge bg-secondary">${res.type}</span></td>
            <td><span class="badge ${httpBadge}">${res.http_status}</span></td>
            <td>${crit > 0 ? `<strong>${crit}</strong>` : 0}</td>
            <td>${high > 0 ? `<strong>${high}</strong>` : 0}</td>
            <td>${med}</td>
            <td><small class="text-muted">${res.audited_at || ''}</small></td>
        </tr>`;
    }
    
    tbody.innerHTML = html;
    
    let note = document.getElementById('tableLimitNote');
    if (note) {
        if (filtered.length > 1000) note.classList.remove('d-none');
        else note.classList.add('d-none');
    }
}

// Initial render
renderTable();

// Bind filters
['filterMode', 'filterSeverity', 'filterType', 'filterHttp'].forEach(id => {
    document.getElementById(id)?.addEventListener('change', renderTable);
});
document.getElementById('filterSearch')?.addEventListener('keyup', renderTable);

// Bind sorts
document.querySelectorAll('.sortable').forEach(th => {
    th.addEventListener('click', function() {
        let col = this.getAttribute('data-sort');
        if (currentSort.col === col) {
            currentSort.dir = currentSort.dir === 'asc' ? 'desc' : 'asc';
        } else {
            currentSort.col = col;
            currentSort.dir = 'desc';
        }
        renderTable();
    });
});

document.getElementById('btnDiscover').addEventListener('click', function() {
    this.disabled = true;
    this.innerText = 'Discovering...';
    fetch('audit/discovery.php?run=1')
        .then(res => res.json())
        .then(data => {
            alert('Found ' + data.count + ' URLs');
            location.reload();
        });
});

let isCrawling = false;
document.getElementById('btnCrawl').addEventListener('click', function() {
    if (isCrawling) return;
    isCrawling = true;
    this.disabled = true;
    document.getElementById('progressContainer').classList.remove('d-none');
    crawlBatch();
});

function crawlBatch() {
    fetch('audit/crawler.php?run=1')
        .then(res => res.json())
        .then(data => {
            if (data.error || !data.success) {
                alert(data.error || 'Crawler failed to start.');
                return;
            }
            let resData = data.data;
            document.getElementById('crawlProgress').style.width = resData.progress_pct + '%';
            document.getElementById('progressText').innerText = `Processed ${resData.completed} / ${resData.total} (${resData.progress_pct}%)`;
            
            if (resData.processed > 0 && resData.completed < resData.total) {
                crawlBatch();
            } else {
                alert('Crawl finished or paused.');
                location.reload();
            }
        }).catch(err => {
            console.error(err);
            alert('Crawl interrupted by error. Check console.');
        });
}

document.getElementById('btnGenerate').addEventListener('click', function() {
    this.disabled = true;
    this.innerText = 'Checking Duplicates & Generating...';
    
    fetch('audit/duplicate-check.php?run=1')
        .then(() => fetch('reports/generate.php?run=1'))
        .then(res => res.json())
        .then(data => {
            alert('Reports generated!');
            location.reload();
        });
});

function showUrlDetails(urlKey) {
    const data = auditsData[urlKey];
    if (!data) return;
    
    document.getElementById('urlModalTitle').innerText = urlKey;
    
    let html = `
        <div class="row">
            <div class="col-md-6">
                <table class="table table-sm table-bordered">
                    <tr><th class="w-25 bg-light">HTTP Status</th><td>${data.http_status}</td></tr>
                    <tr><th class="bg-light">Type</th><td>${data.type}</td></tr>
                    <tr><th class="bg-light">Final URL</th><td class="text-break">${data.final_url}</td></tr>
                    <tr><th class="bg-light">Response Time</th><td>${data.response_time}s</td></tr>
                    <tr><th class="bg-light">Noindex</th><td>${data.noindex ? '<span class="badge bg-danger">Yes</span>' : '<span class="badge bg-success">No</span>'}</td></tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-sm table-bordered">
                    <tr><th class="w-25 bg-light">Title</th><td>${data.title || '<em>Missing</em>'}</td></tr>
                    <tr><th class="bg-light">Meta Desc</th><td>${data.meta_description || '<em>Missing</em>'}</td></tr>
                    <tr><th class="bg-light">Canonical</th><td class="text-break">${data.canonical || '<em>Missing</em>'}</td></tr>
                    <tr><th class="bg-light">H1</th><td>${Array.isArray(data.h1) ? data.h1.join('<br>') : (data.h1 || '<em>Missing</em>')}</td></tr>
                </table>
            </div>
        </div>
        
        <h5 class="mt-4 border-bottom pb-2">Detected Issues</h5>
    `;
    
    let issuesList = data.compared_issues || data.issues;
    
    if (issuesList && issuesList.length > 0) {
        issuesList.forEach(issue => {
            let badgeClass = 'bg-secondary';
            if(issue.severity === 'critical') badgeClass = 'bg-danger';
            if(issue.severity === 'high') badgeClass = 'bg-warning text-dark';
            if(issue.severity === 'medium') badgeClass = 'bg-info text-dark';
            
            let statusBadge = '';
            if (issue.status) {
                if(issue.status === 'NEW') statusBadge = '<span class="badge bg-danger ms-2">NEW</span>';
                if(issue.status === 'EXISTING') statusBadge = '<span class="badge bg-secondary ms-2">EXISTING</span>';
                if(issue.status === 'FIXED') statusBadge = '<span class="badge bg-success ms-2">FIXED</span>';
                if(issue.status === 'CHANGED') statusBadge = '<span class="badge bg-warning text-dark ms-2">CHANGED</span>';
            }
            
            html += `
            <div class="card mb-3 border-${issue.severity === 'critical' ? 'danger' : 'secondary'}">
                <div class="card-header d-flex justify-content-between align-items-center bg-light">
                    <strong>${issue.code || issue.type}</strong>
                    <div>
                        <span class="badge ${badgeClass}">${(issue.severity || 'unknown').toUpperCase()}</span>
                        ${statusBadge}
                    </div>
                </div>
                <div class="card-body py-2">
                    <p class="mb-2"><strong>Message:</strong> ${issue.message}</p>
                    ${issue.detected ? `<p class="mb-1"><strong>Detected:</strong> <span class="text-danger">${issue.detected}</span></p>` : ''}
                    ${issue.expected ? `<p class="mb-2"><strong>Expected:</strong> <span class="text-success">${issue.expected}</span></p>` : ''}
                    ${issue.explanation ? `<p class="mb-1 text-muted small"><em>Why:</em> ${issue.explanation}</p>` : ''}
                    ${issue.recommendation ? `<p class="mb-0 text-primary small"><strong>Fix:</strong> ${issue.recommendation}</p>` : ''}
                </div>
            </div>`;
        });
    } else {
        html += `<div class="alert alert-success">No issues found. This URL is healthy!</div>`;
    }
    
    document.getElementById('urlModalBody').innerHTML = html;
    let modal = new bootstrap.Modal(document.getElementById('urlModal'));
    modal.show();
}
</script>

</body>
</html>
