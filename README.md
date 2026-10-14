# Burhani Engineering Technology (BET)

Welcome to the official repository of Burhani Engineering Technology (BET). This project constitutes the complete public website, global download center, and custom web management portal designed for BET's advanced vacuum engineering operations.

---

## Project Overview

Burhani Engineering Technology is a premier manufacturer specializing in the design and fabrication of vacuum process equipment. This codebase integrates a public-facing website highlighting BET's products, industries served, and global office locations with an administrative software manager portal capable of handling up to 5 GB files for client software distribution.

---

## Features

### Website Features
* **Products:** Interactive showcase of industrial vacuum systems, testing chambers, degassing units, and glove boxes.
* **Industries:** Dedicated grid outlining engineering expertise in sectors such as Aerospace, Semiconductor, and Pharmaceuticals.
* **Locations:** Dynamic multi-step off-canvas "Market Place" selector displaying BET's footprint across regions, countries, and cities.
* **Contact Forms:** Lead capture and booking system styled with the BET theme.
* **Sitemap:** Automatically generated XML sitemap supporting proper indexability.
* **SEO Pages:** Dedicated pages with canonical tags, meta tags, and structured heading hierarchies.

### Software Portal Features
* **Windows Software Distribution:** Hosting and delivery of `.exe`, `.msi`, and `.zip` installers.
* **Linux Software Distribution:** Hosting and delivery of `.deb`, `.rpm`, and `.tar.gz` packages.
* **Chunk Upload Engine:** Custom chunked JavaScript-to-PHP file upload processor supporting large files up to 5 GB.
* **Download Tracking:** Flat-file transaction logging of successful downloads.

### Admin Portal Features
* **Dashboard:** Unified command center with visitor statistics (unique visitors/page views), download counts, most downloaded packages list, and recent activity logs.
* **Software Manager:** Graphical panel to upload, publish, update, and delete software packages with release notes.
* **Website Statistics:** Real-time logging metrics parsed directly from flat-file database stores.

---

## Technology Stack

* **Core Language:** PHP 8.x (Portable and compatible with shared hosting)
* **Frontend:** HTML5, CSS3 (Vanilla CSS framework/design tokens), JavaScript (Vanilla ES6)
* **Database System:** Pure flat-file database architecture (CSV logs and JSON catalogs)
* **CSS Framework:** Styled using custom responsive design tokens (BET Blue and Cyan colors)

---

## Project Structure

```text
BET/
├── admin/                     # Admin portal pages
│   ├── config/                # Authentication configurations
│   ├── includes/              # Header, footer, and navbar templates
│   ├── dashboard.php          # Analytics command center
│   ├── login.php              # Admin login page
│   ├── logout.php             # Session end controller
│   ├── software.php           # Software upload and manager interface
│   ├── statistics.php         # Analytics logging display
│   └── upload_chunk.php       # Chunked upload processor
├── assets/                    # Static assets
│   ├── css/                   # Stylesheets (main.css)
│   ├── js/                    # Main JavaScript files
│   └── img/                   # Images and official SVG logos (logo-light.svg)
├── data/                      # Protected flat-file databases
│   ├── activity.csv           # System activity feed log
│   ├── downloads.csv          # File downloads log
│   ├── downloads.json         # Software catalog database
│   ├── pageviews.csv          # Raw page views log
│   ├── visitors.csv           # Unique visitors log
│   └── website_stats.json     # Basic system configuration/stats
├── docs/                      # Documentation
│   ├── ADMIN_ACCESS.md        # Admin credentials and login guide
│   └── software-portal-guide.md # End-user and administrator usage guide
├── includes/                  # Public website templates
│   ├── config.php             # Core configuration and URL mapping
│   ├── security.php           # Security headers and error handlers
│   ├── visitor-tracker.php    # Unique visitor and page view parser
│   ├── header.php             # Website header and navigation menu
│   └── footer.php             # Website footer and address block
├── uploads/                   # Uploaded client files
│   ├── chunks/                # Temporary directory for chunk uploads
│   └── software/              # Uploaded software packages (local storage)
├── download.php               # Secure download proxy engine
├── index.php                  # Website Homepage
├── router.php                 # Local PHP development router
├── sitemap.xml                # Search engine sitemap index
└── robots.txt                 # Crawling crawler policy rules
```

---

## Installation Instructions

### Local Development
1. Clone this repository to your local web root folder (e.g. `C:\xampp\htdocs\BET`).
2. Start the Apache server in XAMPP or your local server panel.
3. Access the website via: `http://localhost/BET/`
4. Access the admin dashboard via: `http://localhost/BET/admin/login.php`

### Production Deployment
1. Upload the entire project directory to the `public_html` or equivalent root directory on your live hosting server.
2. Confirm the directory structure matches and `/data/` is protected from direct public HTTP access.
3. The system will run automatically; database files in `data/` will automatically write when hits/events occur.

### Docker / Render Deployment
The included `Dockerfile` runs PHP 8.2 on Apache with `mod_rewrite`, `expires`, and `headers` enabled. Render supplies the `PORT` environment variable and `docker-entrypoint.sh` configures Apache to listen on it. Configure these protected Render environment variables for the admin portal:

* `BET_ADMIN_USERNAME`
* `BET_ADMIN_PASSWORD_HASH`
* `BET_ADMIN_DISPLAY_NAME` (optional)
* `BET_ADMIN_ROLE` (optional)

Runtime analytics, cache, logs, and uploaded software are stored on the container filesystem. Configure persistent storage before relying on the admin upload/analytics features in a redeployable production service.

---

## Hosting Requirements

* **WebServer:** Apache with mod_rewrite enabled (standard Linux / cPanel hosting).
* **PHP Version:** PHP 7.4 to 8.x.
* **Storage space:** Sufficient allocation to store your local software installers (supports chunked uploads up to 5 GB).
* **Permissions:** Read/Write access granted to the `data/` and `uploads/` directories.

---

## Security Features

* **Direct Access Block:** All sensitive flat-file databases (`.csv` / `.json`) in `data/` are blocked from web users via a `.htaccess` file containing `Deny from all`.
* **Download Proxying:** File delivery is managed by [download.php](download.php) rather than direct links, preventing file scraping and unauthorized hotlinking.
* **CSRF Protection:** CSRF tokens are injected and verified on all post operations inside the admin panel.
* **Brute Force Defense:** Login attempts are rate-limited per IP in `data/login_attempts.json` with temporary lockout thresholds.

---

## Analytics Overview

The portal uses a custom-coded, flat-file analytical tracking system:
- **Unique Visitors:** Logged inside `data/visitors.csv` with a 30-minute deduplication session rule.
- **Page Views:** Recorded on every page hit inside `data/pageviews.csv`.
- **Download Metrics:** Logged inside `data/downloads.csv`.
- **Bot Exclusions:** Known crawlers and bots are ignored to prevent metric inflation.

---

## Backup Recommendations

* **Catalog Backup:** Keep copies of `data/downloads.json` which contains the registered software catalog.
* **Database Backups:** The system automatically saves backups of `downloads.json` on modification inside `data/backups/` (retaining the last 10 versions).
* **Software Installer Backups:** Keep local backups of all uploaded binaries in the event of web hosting server storage failure.

---

## Support Information

For software deployment, server configurations, or technical support, contact the Burhani Engineering Technology sales and support division:
- **Phone:** +91 96772 96252
- **Email:** Sales@bhfvacuum.com
- **Website:** [Burhani Engineering Technology](https://bhfvacuum.com/)

---

## Version Information

- **Current Version:** 1.0.0
- **Project Status:** Production Ready

---

## Internal References

* **Administrator Credentials & Access Guide:** [ADMIN_ACCESS.md](docs/ADMIN_ACCESS.md)
* **Detailed Portal User Guide:** [software-portal-guide.md](docs/software-portal-guide.md)
