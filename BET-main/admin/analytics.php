<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
define('BET_ADMIN', true);
require_once __DIR__ . '/config/auth.php';

require_once __DIR__ . '/includes/header.php';
?>

<div class="dashboard-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="dashboard-card mt-4">
                    <h3 class="mb-4"><i class="bi bi-graph-up-arrow text-primary me-2"></i> Google Analytics</h3>
                    <p class="text-muted mb-4">
                        Website tracking is configured using Google Analytics 4. Detailed visitor reports, traffic sources, events, and analytics reports are available directly in Google Analytics.
                    </p>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <tbody>
                                <tr>
                                    <th class="bg-light w-25">Status</th>
                                    <td><span class="badge bg-success">Connected / Tracking Configured</span></td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Property</th>
                                    <td>BET Website</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Website</th>
                                    <td><a href="https://www.burhaniengineeringtechnology.com" target="_blank" rel="noopener noreferrer">https://www.burhaniengineeringtechnology.com</a></td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Measurement ID</th>
                                    <td class="fw-bold">G-7LKJF1Z2NJ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center">
                        <a href="https://analytics.google.com/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                            <i class="bi bi-box-arrow-up-right me-2"></i> Open Google Analytics
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
