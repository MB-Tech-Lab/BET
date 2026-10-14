<?php
// Ensure this is not accessed directly
if (!defined('BET_ADMIN')) {
    exit('Direct access not permitted');
}

$page = basename($_SERVER['PHP_SELF']);
?>
<nav class="admin-navbar navbar navbar-expand-lg">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand" href="dashboard.php" style="text-decoration: none;">
      <div class="d-flex align-items-center gap-3">
          <img src="../assets/img/logo-light.svg" alt="Burhani Engineering Technology" style="width: 220px; height: auto; max-width: 100%; display: block;">
          <div style="font-size: 0.75rem; color: rgba(255,255,255,0.8); font-weight: 500; border-left: 1px solid rgba(255,255,255,0.3); padding-left: 10px; line-height: 1.2;">Website Management Portal</div>
      </div>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="adminNavbar">
      <ul class="navbar-nav me-4 mb-2 mb-lg-0 gap-1">
        <li class="nav-item">
          <a class="nav-link <?= ($page == 'dashboard.php') ? 'active' : ''; ?>" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($page == 'software.php') ? 'active' : ''; ?>" href="software.php">Software Manager</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($page == 'statistics.php') ? 'active' : ''; ?>" href="statistics.php">Website Statistics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($page == 'analytics.php') ? 'active' : ''; ?>" href="analytics.php">Google Analytics</a>
        </li>
      </ul>
      <div class="d-flex align-items-center gap-3">
        <div class="dropdown">
          <a href="#" class="user-badge text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> Owner
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
            <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
