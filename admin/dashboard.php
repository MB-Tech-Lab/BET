<?php
// ============================================================
// BET Software Manager - Analytics Dashboard
// CSV-Powered Real-Time Analytics Engine
// ============================================================
require_once __DIR__ . '/config/auth.php';
define('BET_ADMIN', true);

// -------------------------------------------------------
// CSV Analytics Engine — Pure Flat-File, No JSON
// -------------------------------------------------------

/**
 * Parse a CSV file, skipping the header row.
 * Returns array of associative arrays keyed by header columns.
 */
function read_csv(string $file): array {
    if (!file_exists($file) || filesize($file) === 0) {
        return [];
    }
    $rows = [];
    if (($fh = fopen($file, 'r')) !== false) {
        $headers = fgetcsv($fh); // skip / read header row
        if (!$headers) { fclose($fh); return []; }
        while (($row = fgetcsv($fh)) !== false) {
            if (count($row) === count($headers)) {
                $rows[] = array_combine($headers, $row);
            }
        }
        fclose($fh);
    }
    return $rows;
}

// --- Date boundary constants ---
$today_str   = date('Y-m-d');
$month_str   = date('Y-m');                       // e.g. "2026-05"
$week_start  = strtotime('monday this week midnight'); // Unix timestamp of Monday 00:00:00

// -------------------------------------------------------
// VISITOR METRICS — dynamically calculated from visitors.csv
// -------------------------------------------------------
$visitors_csv   = dirname(__DIR__) . '/data/visitors.csv';
$visitor_rows   = read_csv($visitors_csv);

$today_visitors   = 0;
$weekly_visitors  = 0;
$monthly_visitors = 0;
$total_visitors   = count($visitor_rows);

foreach ($visitor_rows as $row) {
    $dt = $row['DateTime'] ?? '';
    if (!$dt) continue;

    $ts = strtotime($dt);
    $row_date  = date('Y-m-d', $ts);
    $row_month = date('Y-m', $ts);

    // Today
    if ($row_date === $today_str) {
        $today_visitors++;
    }
    // This week (Monday to now)
    if ($ts >= $week_start) {
        $weekly_visitors++;
    }
    // This month
    if ($row_month === $month_str) {
        $monthly_visitors++;
    }
}

// -------------------------------------------------------
// PAGE VIEW METRICS — dynamically calculated from pageviews.csv
// -------------------------------------------------------
$pageviews_csv   = dirname(__DIR__) . '/data/pageviews.csv';
$pageview_rows   = read_csv($pageviews_csv);

$today_pageviews   = 0;
$weekly_pageviews  = 0;
$monthly_pageviews = 0;
$total_pageviews   = count($pageview_rows);

foreach ($pageview_rows as $row) {
    $dt = $row['DateTime'] ?? '';
    if (!$dt) continue;

    $ts = strtotime($dt);
    $row_date  = date('Y-m-d', $ts);
    $row_month = date('Y-m', $ts);

    if ($row_date === $today_str)    $today_pageviews++;
    if ($ts >= $week_start)          $weekly_pageviews++;
    if ($row_month === $month_str)   $monthly_pageviews++;
}

// -------------------------------------------------------
// DOWNLOAD METRICS — dynamically calculated from downloads.csv
// -------------------------------------------------------
$downloads_csv_file  = dirname(__DIR__) . '/data/downloads.csv';
$download_rows       = read_csv($downloads_csv_file);

$today_downloads   = 0;
$weekly_downloads  = 0;
$monthly_downloads = 0;
$total_downloads   = count($download_rows);

// Also tally per-software counts for Most Downloaded
$software_counts = [];

foreach ($download_rows as $row) {
    $dt = $row['DateTime'] ?? '';
    if (!$dt) continue;

    $ts = strtotime($dt);
    $row_date  = date('Y-m-d', $ts);
    $row_month = date('Y-m', $ts);

    if ($row_date === $today_str)    $today_downloads++;
    if ($ts >= $week_start)          $weekly_downloads++;
    if ($row_month === $month_str)   $monthly_downloads++;

    // Tally software counts
    $sw_name = $row['SoftwareName'] ?? 'Unknown';
    $sw_ver  = $row['Version'] ?? '';
    if (!isset($software_counts[$sw_name])) {
        $software_counts[$sw_name] = ['count' => 0, 'version' => $sw_ver];
    }
    $software_counts[$sw_name]['count']++;
    $software_counts[$sw_name]['version'] = $sw_ver; // keep latest version seen
}

// Sort most downloaded descending
arsort($software_counts);
// Limit to top 5
$top_downloads_csv = array_slice($software_counts, 0, 5, true);

// -------------------------------------------------------
// RECENT ACTIVITY — from activity.csv (latest 20 entries)
// -------------------------------------------------------
$activity_csv_file = dirname(__DIR__) . '/data/activity.csv';
$activity_rows     = read_csv($activity_csv_file);

// Sort by DateTime descending (newest first)
usort($activity_rows, function($a, $b) {
    return strtotime($b['DateTime'] ?? 0) - strtotime($a['DateTime'] ?? 0);
});
$recent_activities = array_slice($activity_rows, 0, 20);

// Activity icon map
$icon_map = [
    'Software Uploaded'   => 'cloud-arrow-up text-primary',
    'Version Updated'     => 'pencil-square text-warning',
    'Software Deleted'    => 'trash text-danger',
    'Software Downloaded' => 'download text-success',
];

// -------------------------------------------------------
// Software catalog (for software manager link context)
// -------------------------------------------------------
$downloads_json_file = dirname(__DIR__) . '/data/downloads.json';
$downloads_catalog   = file_exists($downloads_json_file)
    ? (json_decode(file_get_contents($downloads_json_file), true) ?: [])
    : [];

require_once __DIR__ . '/includes/header.php';
?>
<div class="dashboard-container">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="bi bi-graph-up-arrow"></i> Command Center</h2>
        <a href="software.php" class="btn btn-primary"><i class="bi bi-hdd-stack"></i> Manage Software</a>
    </div>

    <!-- Section 1: Website Analytics -->
    <h5 class="mb-3 border-bottom pb-2 text-primary">Website Analytics</h5>
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-primary mb-0"><i class="bi bi-people"></i></h1>
          <h3 class="mt-2 mb-1">
            <?php echo number_format($today_visitors); ?>
            <span class="text-muted fs-6" style="font-weight: normal;">/ <?php echo number_format($today_pageviews); ?> PV</span>
          </h3>
          <div class="text-muted small text-uppercase fw-bold">Today's Visitors / Views</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-primary mb-0"><i class="bi bi-calendar-week"></i></h1>
          <h3 class="mt-2 mb-1">
            <?php echo number_format($weekly_visitors); ?>
            <span class="text-muted fs-6" style="font-weight: normal;">/ <?php echo number_format($weekly_pageviews); ?> PV</span>
          </h3>
          <div class="text-muted small text-uppercase fw-bold">This Week Visitors / Views</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-primary mb-0"><i class="bi bi-calendar-month"></i></h1>
          <h3 class="mt-2 mb-1">
            <?php echo number_format($monthly_visitors); ?>
            <span class="text-muted fs-6" style="font-weight: normal;">/ <?php echo number_format($monthly_pageviews); ?> PV</span>
          </h3>
          <div class="text-muted small text-uppercase fw-bold">This Month Visitors / Views</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-primary mb-0"><i class="bi bi-globe"></i></h1>
          <h3 class="mt-2 mb-1">
            <?php echo number_format($total_visitors); ?>
            <span class="text-muted fs-6" style="font-weight: normal;">/ <?php echo number_format($total_pageviews); ?> PV</span>
          </h3>
          <div class="text-muted small text-uppercase fw-bold">Total Visitors / Views</div>
        </div>
      </div>
    </div>

    <!-- Section 2: Download Analytics -->
    <h5 class="mb-3 border-bottom pb-2 text-info">Download Analytics</h5>
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-info mb-0"><i class="bi bi-cloud-arrow-down"></i></h1>
          <h3 class="mt-2 mb-1"><?php echo number_format($today_downloads); ?></h3>
          <div class="text-muted small text-uppercase fw-bold">Today's Downloads</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-info mb-0"><i class="bi bi-cloud-arrow-down"></i></h1>
          <h3 class="mt-2 mb-1"><?php echo number_format($weekly_downloads); ?></h3>
          <div class="text-muted small text-uppercase fw-bold">Weekly Downloads</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-info mb-0"><i class="bi bi-cloud-arrow-down"></i></h1>
          <h3 class="mt-2 mb-1"><?php echo number_format($monthly_downloads); ?></h3>
          <div class="text-muted small text-uppercase fw-bold">Monthly Downloads</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card text-center py-4">
          <h1 class="text-info mb-0"><i class="bi bi-cloud-arrow-down"></i></h1>
          <h3 class="mt-2 mb-1"><?php echo number_format($total_downloads); ?></h3>
          <div class="text-muted small text-uppercase fw-bold">Total Downloads</div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Section 3: Most Downloaded Software -->
      <div class="col-lg-6 mb-4">
        <div class="dashboard-card h-100">
          <h5 class="mb-3"><i class="bi bi-trophy text-warning"></i> Most Downloaded Software</h5>
          <?php if (empty($top_downloads_csv)): ?>
            <p class="text-muted">No downloads recorded yet.</p>
          <?php else: ?>
            <ul class="list-group list-group-flush">
              <?php foreach ($top_downloads_csv as $sw_name => $sw_data): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <div>
                    <h6 class="mb-0"><?php echo htmlspecialchars($sw_name); ?></h6>
                    <small class="text-muted">v<?php echo htmlspecialchars($sw_data['version']); ?></small>
                  </div>
                  <span class="badge bg-primary rounded-pill"><?php echo number_format($sw_data['count']); ?> Downloads</span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>

      <!-- Section 4: Recent Activity Feed -->
      <div class="col-lg-6 mb-4">
        <div class="dashboard-card h-100">
          <h5 class="mb-3"><i class="bi bi-activity text-danger"></i> Recent Activity</h5>
          <?php if (empty($recent_activities)): ?>
            <p class="text-muted">No recent activity recorded yet.</p>
          <?php else: ?>
            <div class="timeline">
              <?php foreach ($recent_activities as $act): ?>
                <?php
                  $icon = $icon_map[$act['Type'] ?? ''] ?? 'circle text-secondary';
                  $ts_act = strtotime($act['DateTime'] ?? '');
                ?>
                <div class="d-flex mb-3 align-items-start">
                  <div class="me-3 mt-1">
                    <i class="bi bi-<?php echo $icon; ?> fs-5"></i>
                  </div>
                  <div>
                    <h6 class="mb-0"><?php echo htmlspecialchars($act['Description'] ?? ''); ?></h6>
                    <small class="text-muted"><?php echo $ts_act ? date('M d, Y h:i A', $ts_act) : 'Unknown time'; ?></small>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Section 5: Analytics Status -->
    <h5 class="mb-3 border-bottom pb-2 mt-2 text-success">Analytics Status</h5>
    <div class="row">
      <div class="col-12">
        <div class="dashboard-card text-center py-4">
          <i class="bi bi-check-circle-fill fs-1 text-success mb-3 d-block"></i>
          <p class="mb-1 fw-bold text-dark">Analytics system active.</p>
          <p class="text-muted mb-0">Data is collected from visitor and download logs.</p>
        </div>
      </div>
    </div>

  </div>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
