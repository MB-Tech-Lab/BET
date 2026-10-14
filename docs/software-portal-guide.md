# Software Portal User Guide — Burhani Engineering Technology (BET)

Welcome to the Burhani Engineering Technology Software Portal and Download Center guide. This document explains how customers, field engineers, and end-users can access and download official BET software packages.

---

## Overview

The BET Download Center provides a centralized hub to obtain control software, calibration utilities, and diagnostic programs for BET pressure and vacuum testing systems. All downloads are served through secure proxy paths to ensure package integrity and verify version compliance.

---

## Downloading Software

To download software packages:
1. Navigate to the **Software Hub** page on the website: `https://[your-domain]/downloads.php`
2. Scroll to the software catalog showing the list of available applications.
3. Select the package matching your engineering equipment.
4. Choose the appropriate download button based on your system platform.

### Windows Downloads
- Click the **Download for Windows** button.
- The portal serves standard `.exe`, `.msi`, or `.zip` installers.
- Extract any zipped directories and double-click the setup binary to initiate installation.

### Linux Downloads
- Click the **Download for Linux** button.
- Files are distributed in standard package formats such as `.deb` (Debian/Ubuntu), `.rpm` (RedHat/Fedora), or `.tar.gz` archive formats.
- For `.tar.gz` files, extract via terminal:
  ```bash
  tar -xzf filename.tar.gz
  ```

---

## Version Information

The portal categorizes software packages under specific flags to let users verify their build status:
* **Latest Release:** The current, most up-to-date stable release containing new features, bug fixes, and security patches.
* **Previous Release:** Stable legacy builds kept online for systems running on older operating systems or hardware revisions.
* **Archived Release:** Historical releases maintained for reference but de-emphasized.

---

## Release Notes

Every software listing includes a dedicated release notes section. Please review this log prior to downloading or upgrading to check for:
- Equipment compatibility constraints.
- Firmware update requirements.
- Known issues and hardware calibration guidelines.

---

## Download Tracking

For quality control and maintenance auditing, the portal tracks basic download metrics:
- Logs the download platform (Windows or Linux).
- Records the date and timestamp of the transaction.
- Registers transaction volume to compile internal "Most Downloaded Software" metrics.
- *Note:* No personal identification info or email forms are required to download public binaries.

---

## Supported Platforms

* **Microsoft Windows:** Fully compatible with Windows 10, Windows 11, and Windows Server editions.
* **Linux distributions:** Packages are optimized for Ubuntu LTS releases, Debian stable branches, and Fedora Workstations.

---

## Common Issues & FAQ

### 1. The download stops or fails midway.
- Large files may fail if your network connection drops.
- **Solution:** Check your internet status, clear your browser cache, and try initiating the download again. If failures persist, contact support for a direct mirror.

### 2. Windows Defender SmartScreen blocks the installer.
- Since BET software interfaces directly with industrial hardware COM ports, generic browser filters might flag new builds.
- **Solution:** Click *"More Info"* on the SmartScreen dialog, verify the publisher information, and select *"Run Anyway"*.

### 3. Linux installer throws dependency errors.
- Some Linux installations might require additional shared libraries.
- **Solution:** Run `sudo apt-get install -f` on Ubuntu/Debian to resolve missing dependency linkages automatically.

---

## Contact Support

If you experience issues installing your software or require technical assistance with your vacuum test apparatus:
- **Support Email:** Sales@bhfvacuum.com
- **Helpline:** +91 96772 96252
- **Office Address:** Thirupthi Nagar, Chettimedu Village, Vadaperumbakkam, Chennai, Tamil Nadu 600060, India.
