# BET Weekly SEO Monitoring System

This is a production-ready, read-only SEO Auditing System for the BET website.

## Architecture

- **`seo/index.php`**: The main SEO Dashboard UI.
- **`seo/config/seo-config.php`**: Global settings (batch size, timeouts, risk levels, history retention).
- **`seo/audit/`**: The core auditing engines.
  - `discovery.php`: Parses XML sitemaps to inventory URLs.
  - `fetcher.php`: cURL HTTP wrapper for safely requesting pages.
  - `parser.php`: DOMDocument wrapper for extracting HTML metadata.
  - `checker.php`: Coordinator for the auditing process.
  - `*-checker.php`: Specific validation rules (canonicals, indexability, images, links).
  - `url-validator.php`: BET-specific location/product routing rule validation.
  - `duplicate-check.php`: Post-crawl analysis for duplicate titles/meta/H1s.
- **`seo/storage/`**: Snapshot and comparison logic.
  - `audit-storage.php`: Saves incremental crawl batches.
  - `history.php`: Snapshots completed audits.
  - `comparison.php`: Detects NEW, FIXED, and EXISTING issues.
- **`seo/cron/`**: Automated execution entry points.
  - `weekly-audit.php`: The primary cron script that executes a full audit cycle.
  - `cleanup.php`: Removes history older than configured retention days.
- **`seo/data/`**: JSON storage.
- **`seo/reports/`**: API endpoints and exporters (CSV).
- **`seo/logs/`**: Non-sensitive operational logs.

## Setup & Execution

### Dashboard

Access the dashboard in your browser:
`http://localhost/BET/seo/`

From here you can:
1. Initialize the inventory (parse sitemaps).
2. Start/resume the audit manually via AJAX batches.
3. Generate reports to calculate scores.

### Weekly Cron

To run the audit automatically, add the following to your VPS crontab (e.g., every Monday at 2:00 AM):

```bash
0 2 * * 1 php /path/to/xampp/htdocs/BET/seo/cron/weekly-audit.php
```

This single command will:
1. Acquire a lock.
2. Discover new URLs.
3. Crawl all pending URLs.
4. Check for duplicates.
5. Compare against the previous week.
6. Generate a snapshot.
7. Update the dashboard automatically.

## Safety Measures

- **Read-Only**: The crawler only performs HTTP GET requests. It never modifies files outside of the `seo/data` and `seo/logs` directories.
- **Audit Lock**: Only one audit can run at a time to prevent server exhaustion.
- **Resumable**: If the crawler is interrupted, it will resume from the last pending URL instead of starting over.
- **Throttling**: The batch size and delay between requests are configurable in `seo-config.php`.
