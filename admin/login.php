<?php
// ============================================================
// BET Software Manager — Admin Login
// ============================================================
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    session_start();
}

// Already logged in → go to dashboard
if (!empty($_SESSION['bet_admin_logged_in'])) {
    header('Location: dashboard.php');
    exit;
}

// Load local credentials when present, then allow Render/server environment variables
// to provide production credentials without committing a password hash to Git.
$admins = [];
$local_admin_config = __DIR__ . '/config/admins.php';
if (is_file($local_admin_config)) {
  require_once $local_admin_config;
}

$env_username = getenv('BET_ADMIN_USERNAME');
$env_password_hash = getenv('BET_ADMIN_PASSWORD_HASH');
if ($env_username && $env_password_hash) {
  $admins[] = [
    'username' => $env_username,
    'display_name' => getenv('BET_ADMIN_DISPLAY_NAME') ?: 'Administrator',
    'role' => getenv('BET_ADMIN_ROLE') ?: 'owner',
    'password' => $env_password_hash,
  ];
}

$error   = '';
$success = false;
$timeout_msg = isset($_GET['timeout']) ? 'Your session has expired due to inactivity. Please log in again.' : '';

// Brute force protection setup
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$attempts_file = dirname(__DIR__) . '/data/login_attempts.json';
$attempts_data = file_exists($attempts_file) ? (json_decode(file_get_contents($attempts_file), true) ?: []) : [];
$now = time();
$lockout_duration = 900; // 15 mins
$max_attempts = 5;

// Clean old attempts
foreach ($attempts_data as $key => $data) {
    if ($now - $data['time'] > $lockout_duration) {
        unset($attempts_data[$key]);
    }
}

if (isset($attempts_data[$ip]) && $attempts_data[$ip]['count'] >= $max_attempts) {
    $error = 'Too many failed attempts. Please try again later.';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $valid_login = false;

    foreach ($admins as $admin) {
        if (
            strtolower($admin['username']) === strtolower($username) &&
            password_verify($password, $admin['password'])
        ) {
            $valid_login = true;
            session_regenerate_id(true);
            $_SESSION['bet_admin_logged_in'] = true;
            $_SESSION['bet_admin_user']      = $admin['username'];
            $_SESSION['bet_admin_name']      = $admin['display_name'];
            $_SESSION['bet_admin_role']      = $admin['role'] ?? 'technician';
            $_SESSION['last_activity']       = time();
            
            // Clear attempts on success
            unset($attempts_data[$ip]);
            file_put_contents($attempts_file, json_encode($attempts_data));
            
            header('Location: dashboard.php');
            exit;
        }
    }

    if (!$valid_login) {
        $error = 'Invalid username or password.';
        if (!isset($attempts_data[$ip])) {
            $attempts_data[$ip] = ['count' => 0, 'time' => $now];
        }
        $attempts_data[$ip]['count']++;
        $attempts_data[$ip]['time'] = $now;
    }
}

// Save attempts back
file_put_contents($attempts_file, json_encode($attempts_data));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login — BET Software Manager</title>
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
      --accent:        #11c5d9;
      --accent-dark:   #12c8dc;
      --bg-deep:       #083b5c;
      --bg-panel:      #0b4f79;
      --bg-card:       #0b4f79;
      --border:        #0d6b9a;
      --text-primary:  #ffffff;
      --text-muted:    #a0d5ef;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Poppins', 'Roboto', sans-serif;
      background: var(--bg-deep);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    /* Subtle industrial grid background */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(rgba(17,197,217,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(17,197,217,0.04) 1px, transparent 1px);
      background-size: 40px 40px;
      pointer-events: none;
    }

    /* Glowing orb */
    body::after {
      content: '';
      position: fixed;
      top: -200px;
      left: 50%;
      transform: translateX(-50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(17,197,217,0.12) 0%, transparent 70%);
      pointer-events: none;
    }

    .login-wrap {
      position: relative;
      z-index: 10;
      width: 100%;
      max-width: 420px;
      padding: 20px;
    }

    .brand-badge {
      text-align: center;
      margin-bottom: 32px;
    }
    .brand-badge .brand-icon {
      width: 56px;
      height: 56px;
      background: var(--accent);
      border-radius: 14px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
      box-shadow: 0 8px 24px rgba(17,197,217,0.35);
    }
    .brand-badge .brand-icon i {
      font-size: 1.6rem;
      color: #fff;
    }
    .brand-badge h1 {
      font-family: 'Raleway', sans-serif;
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--text-primary);
      letter-spacing: 0.3px;
    }
    .brand-badge p {
      font-size: 0.82rem;
      color: var(--text-muted);
      margin-top: 4px;
    }

    .login-card {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 36px 32px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    }

    .login-card h2 {
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--text-primary);
      margin-bottom: 24px;
      padding-bottom: 16px;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .login-card h2 i { color: var(--accent); font-size: 1rem; }

    .form-label {
      font-size: 0.82rem;
      font-weight: 600;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: 0.6px;
      margin-bottom: 6px;
    }

    .form-control {
      background: var(--bg-panel);
      border: 1px solid var(--border);
      border-radius: 8px;
      color: var(--text-primary);
      font-size: 0.92rem;
      padding: 11px 14px;
      transition: 0.2s;
    }
    .form-control:focus {
      background: var(--bg-panel);
      border-color: var(--accent);
      color: var(--text-primary);
      box-shadow: 0 0 0 3px rgba(17,197,217,0.18);
      outline: none;
    }
    .form-control::placeholder { color: #555; }

    .input-group-text {
      background: var(--bg-panel);
      border: 1px solid var(--border);
      border-right: none;
      color: var(--text-muted);
    }
    .input-group .form-control { border-left: none; }
    .input-group .form-control:focus { box-shadow: none; border-color: var(--accent); }
    .input-group:focus-within .input-group-text { border-color: var(--accent); }

    .btn-login {
      width: 100%;
      background: var(--accent);
      border: none;
      border-radius: 8px;
      color: #fff;
      font-weight: 700;
      font-size: 0.95rem;
      padding: 13px;
      margin-top: 8px;
      transition: 0.25s;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .btn-login:hover {
      background: var(--accent-dark);
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(17,197,217,0.35);
    }
    .btn-login:active { transform: translateY(0); }

    .alert-error {
      background: rgba(220,38,38,0.12);
      border: 1px solid rgba(220,38,38,0.35);
      border-radius: 8px;
      color: #f87171;
      font-size: 0.86rem;
      padding: 11px 14px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .back-link {
      text-align: center;
      margin-top: 20px;
    }
    .back-link a {
      font-size: 0.82rem;
      color: var(--text-muted);
      text-decoration: none;
      transition: 0.2s;
    }
    .back-link a:hover { color: var(--accent); }

    /* Toggle password visibility */
    .pwd-toggle {
      background: var(--bg-panel);
      border: 1px solid var(--border);
      border-left: none;
      border-radius: 0 8px 8px 0;
      color: var(--text-muted);
      cursor: pointer;
      padding: 0 12px;
      transition: 0.2s;
    }
    .pwd-toggle:hover { color: var(--accent); }

    @media (max-width: 480px) {
      .login-card { padding: 28px 20px; }
    }
  </style>
</head>
<body>

  <div class="login-wrap">

    <!-- Brand Header -->
    <div class="brand-badge">
      <img src="../assets/img/logo-light.svg" alt="Burhani Engineering Technology" style="width: 280px; max-width: 100%; height: auto; margin-bottom: 12px;">
      <p>Software Distribution Portal</p>
    </div>

    <!-- Login Card -->
    <div class="login-card">
      <h2><i class="bi bi-key-fill"></i> Admin Sign In</h2>

      <?php if ($error): ?>
        <div class="alert-error" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <?php echo htmlspecialchars($error); ?>
        </div>
      <?php endif; ?>

      <?php if ($timeout_msg): ?>
        <div class="alert-error" role="alert" style="color: #60a5fa; background: rgba(96, 165, 250, 0.12); border-color: rgba(96, 165, 250, 0.35);">
          <i class="bi bi-info-circle-fill"></i>
          <?php echo htmlspecialchars($timeout_msg); ?>
        </div>
      <?php endif; ?>

      <form method="post" action="" id="login-form" novalidate>

        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input
              type="text"
              id="username"
              name="username"
              class="form-control"
              placeholder="Enter username"
              value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
              autocomplete="username"
              required
            >
          </div>
        </div>

        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input
              type="password"
              id="password"
              name="password"
              class="form-control"
              placeholder="Enter password"
              autocomplete="current-password"
              required
            >
            <button type="button" class="pwd-toggle" id="pwd-toggle" tabindex="-1" title="Show/hide password">
              <i class="bi bi-eye" id="pwd-icon"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="btn-login" id="login-btn">
          <i class="bi bi-box-arrow-in-right"></i> Sign In
        </button>

      </form>
    </div>

    <div class="back-link">
      <a href="../index.php"><i class="bi bi-arrow-left me-1"></i>Back to Website</a>
    </div>

  </div>

  <script>
    // Toggle password visibility
    document.getElementById('pwd-toggle').addEventListener('click', function () {
      const inp  = document.getElementById('password');
      const icon = document.getElementById('pwd-icon');
      if (inp.type === 'password') {
        inp.type = 'text';
        icon.className = 'bi bi-eye-slash';
      } else {
        inp.type = 'password';
        icon.className = 'bi bi-eye';
      }
    });

    // Prevent double-submit
    document.getElementById('login-form').addEventListener('submit', function () {
      const btn = document.getElementById('login-btn');
      btn.disabled = true;
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status"></span>Signing in…';
    });
  </script>

</body>
</html>
