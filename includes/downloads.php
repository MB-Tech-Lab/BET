<?php
// ============================================================
// BET Software Download Center
// ============================================================
$meta_title       = "Software Downloads | Burhani Engineering Technology";
$meta_description = "Download the latest software for Burhani Engineering Technology equipment including Vacuum Chambers, Leak Testing Systems, Pressure Aging Vessels and related industrial equipment.";

require_once __DIR__ . '/config.php';
$canonical_url = url('includes/downloads/');

function formatBytes($bytes, $precision = 2) {
    if (!$bytes || $bytes == 0) return 'Unknown size';
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . ' ' . $units[$pow];
}

// Read software database
$data_file = dirname(__DIR__) . '/data/downloads.json';
$downloads = [];
if (file_exists($data_file)) {
    $downloads = json_decode(file_get_contents($data_file), true) ?: [];
    
    // Safe in-memory migration
    foreach ($downloads as &$item) {
        if (isset($item['platform']) && isset($item['file'])) {
            if ($item['platform'] === 'Windows') {
                $item['windows_file'] = $item['file'];
            } else if ($item['platform'] === 'Linux') {
                $item['linux_file'] = $item['file'];
            }
        }
    }
    unset($item);
    
    // Sort descending by upload date
    usort($downloads, function($a, $b) {
        return strtotime($b['uploaded_date']) - strtotime($a['uploaded_date']);
    });
}

require_once __DIR__ . '/header.php';
?>

<style>
  /* --- Software Downloads Styles --- */
  .downloads-hero {
    background: linear-gradient(135deg, var(--heading-color, #1a1a1a) 0%, #2a2a2a 100%);
    color: #fff;
    padding: 80px 0 60px;
    text-align: center;
    position: relative;
  }
  .downloads-hero h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    color: #fff;
  }
  .downloads-hero p {
    font-size: 1.1rem;
    color: #e0e0e0;
    max-width: 800px;
    margin: 0 auto 30px;
    line-height: 1.6;
  }
  .hero-cta-btn {
    display: inline-block;
    background: transparent;
    border: 2px solid var(--accent-color, #e67300);
    color: var(--accent-color, #e67300);
    padding: 10px 24px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
  }
  .hero-cta-btn:hover {
    background: var(--accent-color, #e67300);
    color: #fff;
  }

  .downloads-section {
    padding: 60px 0;
    background-color: #f8f9fa;
  }

  /* Filters & Search */
  .controls-wrapper {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    margin-bottom: 40px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: center;
    justify-content: space-between;
  }
  
  .filter-group {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }
  .filter-btn {
    background: #fff;
    border: 1px solid #dee2e6;
    color: #495057;
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: 500;
    font-size: 0.95rem;
    cursor: pointer;
    transition: 0.2s;
  }
  .filter-btn:hover, .filter-btn.active {
    background: var(--accent-color, #e67300);
    border-color: var(--accent-color, #e67300);
    color: #fff;
  }

  .search-wrapper {
    position: relative;
    flex-grow: 1;
    max-width: 400px;
  }
  .search-wrapper i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
  }
  .search-input {
    width: 100%;
    padding: 10px 15px 10px 40px;
    border: 1px solid #dee2e6;
    border-radius: 6px;
    font-size: 0.95rem;
    outline: none;
    transition: 0.2s;
  }
  .search-input:focus {
    border-color: var(--accent-color, #e67300);
    box-shadow: 0 0 0 3px rgba(230,115,0,0.1);
  }

  /* Software Cards */
  .software-card {
    background: #fff;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    height: 100%;
    display: flex;
    flex-direction: column;
    border-top: 4px solid var(--accent-color, #e67300);
    transition: 0.3s;
  }
  .software-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  }
  .sw-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
  }
  .sw-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--heading-color, #222);
    margin: 0;
    line-height: 1.3;
  }
  .sw-version {
    background: #f1f5f9;
    color: #475569;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 600;
    white-space: nowrap;
    margin-left: 10px;
  }
  .sw-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 0.85rem;
    color: #6c757d;
  }
  .sw-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
  }
  .platform-badge-win { color: #0078d7; font-weight: 600; }
  .platform-badge-lin { color: #fcc624; font-weight: 600; }
  
  .sw-notes {
    font-size: 0.95rem;
    color: #495057;
    margin-bottom: 25px;
    flex-grow: 1;
    line-height: 1.6;
  }
  
  .btn-download {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: var(--accent-color, #e67300);
    color: #fff;
    padding: 12px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
  }
  .btn-download:hover {
    background: var(--heading-color, #222);
    color: #fff;
  }

  /* Empty state */
  .empty-state {
    text-align: center;
    padding: 60px 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
  }
  .empty-state i {
    font-size: 3.5rem;
    color: #dee2e6;
    margin-bottom: 20px;
  }
  .empty-state h3 {
    font-size: 1.5rem;
    color: #495057;
    margin-bottom: 10px;
  }

  /* Info Section */
  .info-section {
    background: #fff;
    padding: 60px 0;
    border-top: 1px solid #eaeaea;
  }
  .info-box {
    background: #f8f9fa;
    border-left: 4px solid var(--accent-color, #e67300);
    padding: 30px;
    border-radius: 0 8px 8px 0;
    margin-bottom: 30px;
  }
  .info-box h3 {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 15px;
  }
  .info-box p {
    color: #495057;
    line-height: 1.7;
    margin-bottom: 15px;
  }
  .info-box p:last-child { margin-bottom: 0; }
  
  .support-box {
    text-align: center;
    padding: 30px;
    background: #1a1a1a;
    color: #fff;
    border-radius: 8px;
  }
  .support-box h3 {
    font-size: 1.4rem;
    color: #fff;
    margin-bottom: 15px;
  }
  .btn-support {
    display: inline-block;
    background: var(--accent-color, #e67300);
    color: #fff;
    padding: 10px 24px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 600;
    margin-top: 10px;
    transition: 0.3s;
  }
  .btn-support:hover {
    background: #fff;
    color: var(--accent-color, #e67300);
  }

</style>

<!-- Hero Section -->
<section class="downloads-hero">
  <div class="container">
    <h1>Software Downloads</h1>
    <p>Download the latest software for your Burhani Engineering Technology equipment.<br>All software requires activation using a valid License Key and Machine Verification Key provided by BET technicians during installation.</p>
    <a href="<?php echo url(''); ?>#contact" class="hero-cta-btn">Need Activation Support?</a>
  </div>
</section>

<!-- Downloads Section -->
<section class="downloads-section">
  <div class="container">
    
    <?php if (empty($downloads)): ?>
      <div class="empty-state">
        <i class="bi bi-box-seam"></i>
        <h3>No software currently available.</h3>
        <p class="text-muted">Please contact BET support for assistance.</p>
      </div>
    <?php else: ?>
      
      <!-- Controls -->
      <div class="controls-wrapper">
        <div class="filter-group">
          <button class="filter-btn active" data-filter="all">All</button>
          <button class="filter-btn" data-filter="Windows">Windows</button>
          <button class="filter-btn" data-filter="Linux">Linux</button>
        </div>
        <div class="search-wrapper">
          <i class="bi bi-search"></i>
          <input type="text" class="search-input" id="softwareSearch" placeholder="Search software by name or version...">
        </div>
      </div>

      <!-- Software Grid -->
      <div class="row g-4" id="softwareGrid">
        <?php foreach ($downloads as $sw): ?>
          <?php 
            // Determine platforms string for filtering
            $platforms = [];
            if (!empty($sw['windows_file'])) $platforms[] = 'Windows';
            if (!empty($sw['linux_file'])) $platforms[] = 'Linux';
            $platform_str = implode(' ', $platforms);
          ?>
          <div class="col-lg-4 col-md-6 software-item" data-platforms="<?php echo htmlspecialchars($platform_str); ?>">
            <div class="software-card">
              <div class="sw-header">
                <div>
                  <h3 class="sw-title search-target"><?php echo htmlspecialchars($sw['product']); ?></h3>
                  <?php 
                      $status = $sw['status'] ?? 'Latest Release';
                      $badge_color = '#12c8dc';
                      if ($status === 'Previous Release') $badge_color = '#fcc624';
                      if ($status === 'Archived Release') $badge_color = '#6c757d';
                  ?>
                  <div style="font-size: 0.8rem; font-weight: 600; color: <?php echo $badge_color; ?>; margin-top: 5px;">
                      <?php echo htmlspecialchars($status); ?>
                  </div>
                </div>
                <span class="sw-version search-target">v<?php echo htmlspecialchars($sw['version']); ?></span>
              </div>
              
              <div class="sw-meta d-flex flex-wrap gap-2 mb-3">
                <?php if (!empty($sw['windows_file'])): ?>
                  <span class="platform-badge-win"><i class="bi bi-windows"></i> Windows</span>
                <?php endif; ?>
                <?php if (!empty($sw['linux_file'])): ?>
                  <span class="platform-badge-lin"><i class="bi bi-ubuntu"></i> Linux</span>
                <?php endif; ?>
                <span class="ms-auto text-muted"><i class="bi bi-calendar3"></i> <?php echo htmlspecialchars($sw['uploaded_date']); ?></span>
              </div>
              
              <div class="sw-notes">
                <?php echo nl2br(htmlspecialchars($sw['release_notes'] ?: 'No release notes available.')); ?>
              </div>
              
              <div class="d-flex flex-column gap-2 mt-auto">
                <a href="<?php echo url('includes/software-detail.php?id=' . htmlspecialchars($sw['id'])); ?>" class="btn-download" style="background: var(--accent-color, #12c8dc); border-color: var(--accent-color, #12c8dc);">
                  <i class="bi bi-box-arrow-up-right"></i> View Details &amp; Download
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      
      <!-- No Results Message (Hidden by default) -->
      <div id="noResults" class="empty-state" style="display: none; padding: 40px 20px;">
        <i class="bi bi-search"></i>
        <h3>No matching software found.</h3>
        <p class="text-muted">Try adjusting your search or filters.</p>
      </div>

    <?php endif; ?>

  </div>
</section>

<!-- Information & Support Section -->
<section class="info-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <div class="info-box">
          <h3>Software Activation Information</h3>
          <p>All software supplied by Burhani Engineering Technology requires activation.</p>
          <p>After installation, a valid <strong>License Key</strong> and <strong>Machine Verification Key</strong> must be entered. These credentials are generated and configured by authorized BET technicians during machine installation.</p>
          <p>If you require software reactivation or support, please contact our technical support team.</p>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="support-box">
          <h3>Technical Support</h3>
          <p>Need assistance with installation or activation? Contact BET Technical Support.</p>
          <a href="<?php echo url(''); ?>#contact" class="btn-support">Contact Support</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Filter & Search Logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('softwareSearch');
    const items = document.querySelectorAll('.software-item');
    const noResults = document.getElementById('noResults');

    if (!items.length) return;

    let currentFilter = 'all';
    let currentSearch = '';

    function updateGrid() {
        let visibleCount = 0;

        items.forEach(item => {
            const platformStr = item.getAttribute('data-platforms');
            const searchTargets = item.querySelectorAll('.search-target');
            let textContent = '';
            searchTargets.forEach(t => textContent += t.textContent.toLowerCase() + ' ');

            const matchesFilter = (currentFilter === 'all' || platformStr.includes(currentFilter));
            const matchesSearch = (currentSearch === '' || textContent.includes(currentSearch));

            if (matchesFilter && matchesSearch) {
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        if (visibleCount === 0) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }
    }

    // Filter Buttons
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.getAttribute('data-filter');
            updateGrid();
        });
    });

    // Search Input
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            currentSearch = this.value.toLowerCase().trim();
            updateGrid();
        });
    }
});
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
