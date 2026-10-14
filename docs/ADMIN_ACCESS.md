# Admin Portal Guide — Burhani Engineering Technology (BET)

This document contains credentials and instructions for the BET Web Management and Software Portal. Access is restricted to Owners, Managers, and System Administrators.

---

## Admin Portal URL

To access the administrative panel:
- **Local Dev Server:** `http://localhost/BET/admin/login.php`
- **Production Server:** `https://[your-domain]/admin/login.php`

---

## Production Login Information

Production administrator credentials must be supplied through the server environment:

* `BET_ADMIN_USERNAME`
* `BET_ADMIN_PASSWORD_HASH`
* `BET_ADMIN_DISPLAY_NAME` (optional)
* `BET_ADMIN_ROLE` (optional)

Never place a plaintext password or password hash in tracked documentation. Generate a bcrypt
hash locally and configure it as a protected deployment secret.

---

## Dashboard Overview

The admin section is divided into three functional areas:

### 1. Website Analytics (Command Center)
- **Today's Visitors / Views:** Displays unique IP visitors and page views recorded today.
- **Weekly / Monthly / Total Visitors / Views:** Displays aggregated metrics parsed from `visitors.csv` and `pageviews.csv`.
- **Analytics Status Panel:** Visual indicator confirming that the logging system is actively tracking hits.

### 2. Software Manager
- Displays a table of all uploaded software versions, release types, file locations, and separate Windows/Linux download counters.
- Allows deletion of obsolete binaries and updates to current release records.

### 3. Website Statistics
- Displays detailed system metrics, platform statistics, and detailed lists of visitors and page views.

---

## Uploading Software

The portal features a **Chunked Upload Engine** that bypasses standard php.ini upload limits, supporting files up to **5 GB**.

### Supported Formats
* **Windows Platform:** `.exe`, `.msi`, `.zip`, `.iso`, `.img`, `.bin`
* **Linux Platform:** `.deb`, `.rpm`, `.tar.gz`, `.iso`, `.img`, `.bin`

### Upload Steps
1. Navigate to the **Software Manager** page (`admin/software.php`).
2. Input the **Product Name** (e.g. *Vacuum Glove Box Software*).
3. Input the **Version** (e.g. *1.2.0*).
4. Enter the **Release Notes** listing changes.
5. Select a **Release Status**:
   - `Latest Release`: Becomes the primary version highlighted to customers.
   - `Previous Release`: Maintained for users requiring older stable binaries.
   - `Archived Release`: Retained for history but de-emphasized.
6. Select file source for Windows or Linux:
   - **Local File:** Drag and drop the installer into the zone. The system splits the binary into 5MB chunks and uploads them with a real-time progress bar.
   - **External URL:** Input a direct download link (e.g., from an AWS S3 or Google Drive share) to proxy downloads instead of hosting them locally.
7. Click **Upload & Publish**.

---

## Security Features

* **Session Timeout:** Administrator sessions automatically expire after 30 minutes of inactivity to prevent unauthorized access on public workstations.
* **CSRF Protection:** Secure tokens (`csrf_token`) are injected into forms and checked during all software operations (upload, update, delete).
* **Upload Validation:** Files are checked for permitted extensions, and file names are automatically sanitized during merge operations.

---

## Backup Procedures

* **Automatic Backups:** The portal automatically saves a timestamped JSON backup in `data/backups/` whenever software data is modified. Only the last 10 backups are retained.
* **Manual Backups:** To backup database catalogs, download `data/downloads.json` and the CSV metrics (`visitors.csv`, `pageviews.csv`, `downloads.csv`, `activity.csv`) from your server FTP or file manager.

---

## Troubleshooting

1. **Uploads Failing / Hanging:**
   - Verify that the `uploads/software/` and `uploads/chunks/` directories exist and have write permissions (`0775` or `0777`).
   - If a chunked upload gets interrupted, the server garbage collector automatically cleans up orphaned chunks in `uploads/chunks/` after 24 hours.
2. **Missing Analytics:**
   - Ensure the server process has permission to write to files inside the `data/` directory.
   - If CSV logs are deleted, the system will recreate empty versions of the files upon the next visitor click or page load.