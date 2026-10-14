<?php include_once __DIR__ . '/product-image-gallery.php'; ?>
<?php include_once __DIR__ . '/contact-section.php'; ?>
  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="<?php echo url(''); ?>" class="logo d-flex align-items-center">
            <img src="<?php echo asset('img/logo.svg'); ?>" alt="<?php echo SITE_NAME; ?>">
          </a>
          <div class="footer-contact pt-3">
            <h5 style="color: #ffffff; font-size: 0.95rem; font-weight: 600; margin-bottom: 10px; font-family: var(--heading-font);">Corporate Office</h5>
            <p>Thirupthi Nagar, Chettimedu Village,<br>Vadaperumbakkam, Chennai,<br>Tamil Nadu 600060, India</p>
            <p class="mt-3"><strong>Phone:</strong> <span><?php echo PHONE_NUMBER; ?></span></p>
            <p><strong>Email:</strong> <span><?php echo EMAIL_ADDRESS; ?></span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/burhani_engineering"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/burhaniengineering"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/burhani_engineering"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/bhfvacuum/" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.youtube.com/channel/UCRKrRo6sYhjMG7Bg6MkWekQ" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="<?php echo url(''); ?>">HOME</a></li>
            <li><a href="<?php echo url(''); ?>#about">ABOUT US</a></li>
            <li><a href="<?php echo url(''); ?>#services">SERVICES</a></li>
            <li><a href="#">CAREER</a></li>
            <li><a href="#">PRIVACY POLICY</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Global Presence</h4>
          <ul>
            <li><a href="<?php echo url('locations/oceania/australia/sydney.php'); ?>">Australia - Sydney</a></li>
            <li><a href="<?php echo url('locations/asia/india/chennai.php'); ?>">India - Chennai</a></li>
            <li><a href="<?php echo url('locations/north-america/usa/houston.php'); ?>">United States - Houston</a></li>
            <li><a href="<?php echo url('locations/europe/italy/milan.php'); ?>">Italy - Milan</a></li>
            <li><a href="<?php echo url('locations/asia/singapore/singapore.php'); ?>">Singapore</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 footer-links">
          <h4>Our Location</h4>
          <div class="footer-map" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-top: 10px;">
            <iframe
              style="border:0; width: 100%; height: 200px;"
              src="https://maps.google.com/maps?q=13.184434,80.219468&t=m&z=16&ie=UTF8&iwloc=B&output=embed"
              frameborder="0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Burhani Engineering Technology – Thirupthi Nagar, Vadaperumbakkam, Chennai"
            ></iframe>
          </div>
          <div style="margin-top: 8px; text-align: center;">
            <a href="https://www.google.com/maps?q=13.184434,80.219468" target="_blank" rel="noopener noreferrer"
               style="font-size: 0.82rem; color: #00c8ff; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
              <i class="bi bi-map-fill"></i> View on Google Maps
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright mt-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
        <p class="mb-2 mb-md-0" style="margin: 0;">© 2026 Burhani Engineering Technology. All Rights Reserved.</p>
        <div class="credits" style="font-size: 0.85rem; opacity: 0.8; margin: 0;">
          Website Designed & Developed by MB Tech Labs
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo asset('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo asset('vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?php echo asset('vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo asset('js/main.min.js'); ?>"></script>
  


</body>

</html>
