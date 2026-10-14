<?php
// Ensure this is not accessed directly
if (!defined('BET_ADMIN')) {
    exit('Direct access not permitted');
}

$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BET Website Management Portal</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="shortcut icon" href="../assets/img/favicon.png">
  <link rel="apple-touch-icon" href="../assets/img/favicon.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary:       #0b4f79;
      --primary-dark:  #083b5c;
      --accent:        #18c4d8; /* Updated Cyan */
      --accent-hover:  #15b1c3;
      --bg-body:       #f5f7fa; /* Updated Light Background */
      --bg-card:       #ffffff;
      --border:        #dbe6ef;
      --border-input:  #cfd8e3;
      --text-main:     #222222;
      --text-muted:    #555555;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Poppins', 'Roboto', sans-serif;
      background: var(--bg-body);
      color: var(--text-main);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Navbar */
    .admin-navbar {
      background: var(--primary);
      border-bottom: 1px solid var(--primary-dark);
      padding: 10px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .admin-navbar .navbar-brand {
      color: #ffffff;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .admin-navbar .navbar-brand i {
      color: var(--accent);
      font-size: 1.4rem;
    }
    .admin-navbar .nav-link {
      color: rgba(255, 255, 255, 0.7);
      font-weight: 500;
      transition: 0.2s;
      padding: 8px 16px !important;
      border-radius: 6px;
    }
    .admin-navbar .nav-link:hover, .admin-navbar .nav-link:focus {
      color: #ffffff;
      background: rgba(255, 255, 255, 0.1);
    }
    .admin-navbar .nav-link.active {
      color: #ffffff;
      background: rgba(24, 196, 216, 0.2);
      border-bottom: 2px solid var(--accent);
    }
    .user-badge {
      background: #e6f8fb;
      border: 1px solid #c9eff4;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.85rem;
      color: var(--primary);
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-weight: 500;
    }
    .user-badge i { color: var(--accent); }
    
    .navbar-toggler {
        border-color: rgba(255,255,255,0.2);
    }
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Main Content */
    .dashboard-container {
      flex: 1;
      padding: 40px 0;
    }

    /* Cards */
    .dashboard-card {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 25px;
      margin-bottom: 30px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .dashboard-card h3 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 20px;
      padding-bottom: 15px;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 10px;
      color: var(--primary);
    }
    .dashboard-card h3 i { color: var(--accent); }

    /* Form Elements */
    .form-label {
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--text-muted);
      margin-bottom: 6px;
    }
    .form-control, .form-select {
      background: #ffffff;
      border: 1px solid var(--border-input);
      color: var(--text-main);
      border-radius: 6px;
      padding: 10px 14px;
    }
    .form-control:focus, .form-select:focus {
      background: #ffffff;
      border-color: var(--accent);
      color: var(--text-main);
      box-shadow: 0 0 0 2px rgba(24,196,216,0.2);
    }
    /* File Input specific styling */
    .form-control[type="file"] {
        padding: 8px 12px;
    }
    .form-control[type="file"]::file-selector-button {
        background: var(--bg-body);
        color: var(--text-main);
        border: 1px solid var(--border-input);
        padding: 4px 10px;
        border-radius: 4px;
        margin-right: 10px;
        transition: 0.2s;
    }
    .form-control[type="file"]::file-selector-button:hover {
        background: var(--border);
    }

    .btn-primary {
      background: var(--accent);
      border: none;
      color: #ffffff;
      font-weight: 600;
      padding: 10px 24px;
      transition: 0.2s;
    }
    .btn-primary:hover {
      background: var(--accent-hover);
      color: #ffffff;
      transform: translateY(-2px);
    }

    /* Table */
    .table {
      color: var(--text-main);
      margin-bottom: 0;
    }
    .table th {
      background: var(--bg-body);
      color: var(--text-muted);
      font-weight: 600;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      border-bottom: 2px solid var(--border);
      padding: 15px;
    }
    .table td {
      border-bottom: 1px solid var(--border);
      padding: 15px;
      vertical-align: middle;
    }
    .table tbody tr:hover {
      background: #fdfdfd;
    }
    .platform-badge {
      display: inline-block;
      padding: 4px 10px;
      border-radius: 4px;
      font-size: 0.8rem;
      font-weight: 600;
    }
    .platform-windows { background: #e0f0ff; color: #0056b3; border: 1px solid #b3d7ff; }
    .platform-linux { background: #fff5d6; color: #997400; border: 1px solid #ffe599; }

    .btn-action {
      background: #ffffff;
      border: 1px solid var(--border-input);
      color: var(--text-muted);
      padding: 6px 12px;
      border-radius: 4px;
      font-size: 0.85rem;
      transition: 0.2s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }
    .btn-action:hover {
      background: var(--bg-body);
      color: var(--primary);
      border-color: var(--primary);
    }
    .btn-delete {
      color: #dc3545;
    }
    .btn-delete:hover {
      background: #fff5f5;
      color: #dc3545;
      border-color: #dc3545;
    }

    /* Alerts */
    .alert {
      border-radius: 8px;
      border: none;
      color: #fff;
    }
    .alert-success { background: rgba(16, 185, 129, 0.2); border: 1px solid rgba(16, 185, 129, 0.4); color: #34d399; }
    .alert-danger { background: rgba(239, 68, 68, 0.2); border: 1px solid rgba(239, 68, 68, 0.4); color: #f87171; }

    .empty-state {
      text-align: center;
      padding: 40px 20px;
      color: var(--text-muted);
    }
    .empty-state i {
      font-size: 3rem;
      color: var(--border);
      margin-bottom: 15px;
    }
    
    .drag-drop-zone {
      border: 2px dashed var(--border-input);
      border-radius: 8px;
      padding: 10px 15px;
      background: #fdfdfd;
      transition: all 0.2s;
      cursor: pointer;
      position: relative;
      display: flex;
      align-items: center;
      min-height: 55px;
      max-height: 70px;
    }
    .drag-drop-zone.dragover {
      border-color: var(--primary);
      background: #f0faff;
    }
    .drag-drop-zone input[type="file"] {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      opacity: 0;
      cursor: pointer;
    }
    .file-info-display {
      font-weight: 600;
      color: var(--primary);
      display: none;
      width: 100%;
    }
    .drag-drop-text-container {
      display: flex;
      align-items: center;
      gap: 10px;
      width: 100%;
    }
    .drag-drop-text-container i {
      font-size: 1.5rem;
      color: var(--text-muted);
    }
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>
