<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
define('BET_ADMIN', true);
require_once __DIR__ . '/config/auth.php';

$stats_file = dirname(__DIR__) . '/data/website_stats.json';

// Initialize defaults if file doesn't exist or is empty
$default_stats = [
    'projects_delivered' => 0,
    'returning_clients' => 0,
    'countries_served' => 0,
    'industry_awards' => 0
];

$stats = $default_stats;
if (file_exists($stats_file)) {
    $content = file_get_contents($stats_file);
    if (!empty($content)) {
        $loaded_stats = json_decode($content, true);
        if (is_array($loaded_stats)) {
            $stats = array_merge($default_stats, $loaded_stats);
        }
    }
}

$message = '';
$message_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
        $message = 'Invalid CSRF token. Please try again.';
        $message_type = 'danger';
    } else {
        $projects = filter_var($_POST['projects_delivered'] ?? 0, FILTER_VALIDATE_INT);
        $clients = filter_var($_POST['returning_clients'] ?? 0, FILTER_VALIDATE_INT);
        $countries = filter_var($_POST['countries_served'] ?? 0, FILTER_VALIDATE_INT);
        $awards = filter_var($_POST['industry_awards'] ?? 0, FILTER_VALIDATE_INT);
        
        if ($projects !== false && $projects >= 0 &&
            $clients !== false && $clients >= 0 &&
            $countries !== false && $countries >= 0 &&
            $awards !== false && $awards >= 0) {
            
            $stats = [
                'projects_delivered' => $projects,
                'returning_clients' => $clients,
                'countries_served' => $countries,
                'industry_awards' => $awards
            ];
            
            if (file_put_contents($stats_file, json_encode($stats, JSON_PRETTY_PRINT))) {
                $message = 'Website statistics updated successfully.';
                $message_type = 'success';
            } else {
                $message = 'Failed to save statistics to file.';
                $message_type = 'danger';
            }
        } else {
            $message = 'Invalid input. Please enter valid positive numbers.';
            $message_type = 'danger';
        }
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="dashboard-container">
    <div class="container">
        
        <?php if ($message): ?>
            <div class="alert alert-<?= $message_type; ?> alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($message); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="dashboard-card">
                    <h3><i class="bi bi-bar-chart-fill"></i> Website Statistics</h3>
                    <p class="text-muted mb-4">Update the numerical counters shown on the main BET homepage.</p>
                    
                    <form method="post" action="statistics.php">
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="projects_delivered" class="form-label">Projects Delivered</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-briefcase text-primary"></i></span>
                                    <input type="number" min="0" class="form-control" id="projects_delivered" name="projects_delivered" value="<?= htmlspecialchars($stats['projects_delivered']); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="returning_clients" class="form-label">Returning Clients</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-people text-info"></i></span>
                                    <input type="number" min="0" class="form-control" id="returning_clients" name="returning_clients" value="<?= htmlspecialchars($stats['returning_clients']); ?>" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="countries_served" class="form-label">Countries Served</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-globe text-success"></i></span>
                                    <input type="number" min="0" class="form-control" id="countries_served" name="countries_served" value="<?= htmlspecialchars($stats['countries_served']); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="industry_awards" class="form-label">Industry Awards</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-award text-warning"></i></span>
                                    <input type="number" min="0" class="form-control" id="industry_awards" name="industry_awards" value="<?= htmlspecialchars($stats['industry_awards']); ?>" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i> Save Statistics</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
