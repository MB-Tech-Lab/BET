# Performance Audit Report

**Date:** June 2026
**Target:** BET Website Codebase (Localhost/XAMPP environment)

## Executive Summary
The website feels slow on localhost primarily due to **heavy unoptimized media assets** that block rendering, and **inefficient file-based operations**. While the core PHP execution time on localhost is relatively fast (~15ms - 70ms), there are several architectural bottlenecks that will cause severe performance degradation when deployed to a production environment under concurrent load.

---

## Top Bottlenecks & Findings

### 1. `visitor-tracker.php` (Synchronous File Locking)
*   **Audit Result:** The tracker correctly aborts on localhost (`127.0.0.1`), which is why the local PHP execution is fast. However, for live traffic, it uses `fopen` with `flock($fp, LOCK_EX)` to write to `visitors.csv` and `pageviews.csv`. 
*   **Impact:** Exclusive file locking forces concurrent incoming requests to wait in a queue until the file is unlocked. Under high traffic, this will cause severe thread starvation and massive TTFB (Time to First Byte) delays.
*   **Optimization:** Move analytics to an asynchronous logger, a proper database (e.g., MySQL, SQLite), or rely on a standard analytics provider (Google Analytics / Plausible).

### 2. Heavy Image Assets (Largest Contentful Paint Bottleneck)
*   **Audit Result:** Analysis of `assets/img/` revealed multiple unoptimized images:
    *   `HeroS.jpg`: **2.00 MB**
    *   `hero section.jpg`: **1.80 MB**
    *   Multiple SVG and JPEG files ranging from **500KB to 800KB**.
*   **Impact:** Browsers must download and decode these massive files before painting the screen. This is the primary reason the site "feels slow" to load visually, even on a local server.
*   **Optimization:** Convert large `.jpg` and `.png` files to modern `.webp` formats. Compress SVGs. Implement responsive `<picture>` tags or `srcset`.

### 3. `router.php` (Dynamic Directory Scanning)
*   **Audit Result:** The `resolve_path_case_insensitive()` function relies on a recursive loop using `scandir()` to match paths.
*   **Impact:** While currently executing in ~15ms locally, scanning the disk repeatedly on every single request is highly inefficient. On a slower production disk (or shared hosting like InfinityFree), this disk I/O will compound.
*   **Optimization:** Implement a caching layer (e.g., store resolved paths in a static map or APCu) to bypass disk scanning for frequently accessed routes.

### 4. `includes/header.php` (Inline Payload Bloat)
*   **Audit Result:** The header contains a massive inline JavaScript object (`MARKETPLACE_DATA`) representing all locations and links (over 200+ lines).
*   **Impact:** Injecting a massive JSON/JS object directly into the HTML on *every* page request bloats the DOM size and prevents the browser from caching the data.
*   **Optimization:** Extract `MARKETPLACE_DATA` into an external static file (e.g., `assets/js/locations.js`) so the browser can cache it on the first visit.

### 5. Page Includes Overhead
*   **Audit Result:** A typical product page executes 6-10 `require_once` statements (Config, Router, Header, Footer, Gallery, Contact, etc.).
*   **Impact:** Minor on localhost with SSDs, but reading multiple distinct files adds disk latency overhead.
*   **Optimization:** Ensure PHP OPcache is enabled in production. 

---

## Recommended Optimization Plan (Next Steps)

1.  **Media Optimization (Immediate Visual Impact):**
    *   Run a batch script to compress all images > 300KB into WebP format.
    *   Update `index.php` and product pages to use the optimized WebP assets.
2.  **Asset Externalization:**
    *   Extract the `MARKETPLACE_DATA` from `header.php` to a static JS file.
3.  **Analytics Refactor:**
    *   Rewrite `visitor-tracker.php` to use a non-blocking queue or switch to a proper database table instead of CSV locking.
4.  **Routing Cache:**
    *   Introduce a simple `route_cache.php` array that stores the result of `resolve_path_case_insensitive()` to skip `scandir()` calls.
