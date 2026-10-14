<?php if (!defined('BASE_URL')) require_once __DIR__ . '/config.php'; ?>

<style>
  /* ===== Global Contact Section ===== */
  .global-contact-section {
    background: linear-gradient(135deg, #f8f9fc 0%, #eef2f8 100%);
    padding: 80px 0;
    border-top: 1px solid #dde3ec;
  }
  .global-contact-section .section-label {
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: var(--accent-color);
    margin-bottom: 8px;
  }
  .global-contact-section h2 {
    font-weight: 800;
    font-size: 2rem;
    color: var(--heading-color);
    line-height: 1.25;
    margin-bottom: 14px;
  }
  .global-contact-section .subtitle {
    color: #6b7280;
    font-size: 1rem;
    line-height: 1.7;
    margin-bottom: 28px;
  }
  .contact-info-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 18px;
  }
  .contact-info-item .ci-icon {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    background: var(--accent-color);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .contact-info-item .ci-icon i {
    color: #fff;
    font-size: 1rem;
  }
  .contact-info-item .ci-text strong {
    display: block;
    font-weight: 700;
    font-size: 0.87rem;
    color: var(--heading-color);
    margin-bottom: 2px;
  }
  .contact-info-item .ci-text span,
  .contact-info-item .ci-text a {
    font-size: 0.9rem;
    color: #4b5563;
    text-decoration: none;
  }
  .contact-info-item .ci-text a:hover { color: var(--accent-color); }

  .contact-cta-btns {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 28px;
  }
  .btn-call-now {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--accent-color);
    color: #fff;
    padding: 11px 24px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: 0.3s;
  }
  .btn-call-now:hover { background: #c75a00; color: #fff; transform: translateY(-2px); }
  .btn-whatsapp-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #25D366;
    color: #fff;
    padding: 11px 24px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: 0.3s;
  }
  .btn-whatsapp-cta:hover { background: #1dab55; color: #fff; transform: translateY(-2px); }

  /* Form Card */
  .contact-form-card {
    background: #fff;
    border-radius: 16px;
    padding: 38px 36px;
    box-shadow: 0 8px 40px rgba(0,0,0,0.08);
    border-top: 4px solid var(--accent-color);
  }
  .contact-form-card h4 {
    font-weight: 700;
    font-size: 1.25rem;
    color: var(--heading-color);
    margin-bottom: 6px;
  }
  .contact-form-card .form-sub {
    font-size: 0.87rem;
    color: #9ca3af;
    margin-bottom: 24px;
  }
  .contact-form-card .form-control,
  .contact-form-card textarea {
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 12px 15px;
    font-size: 0.9rem;
    color: #374151;
    transition: 0.2s;
    resize: none;
  }
  .contact-form-card .form-control:focus,
  .contact-form-card textarea:focus {
    border-color: var(--accent-color);
    box-shadow: 0 0 0 3px rgba(var(--accent-color-rgb, 230,115,0), 0.12);
    outline: none;
  }
  .btn-submit-global {
    width: 100%;
    background: var(--accent-color);
    color: #fff;
    border: none;
    padding: 13px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.95rem;
    transition: 0.3s;
    cursor: pointer;
    margin-top: 6px;
  }
  .btn-submit-global:hover { background: #c75a00; transform: translateY(-1px); }
  .form-success-msg { display: none; background: #d1fae5; color: #065f46; border-radius: 8px; padding: 12px 16px; font-size: 0.88rem; font-weight: 600; margin-top: 12px; }

  @media (max-width: 991px) {
    .global-contact-section { padding: 50px 0; }
    .contact-form-card { padding: 28px 22px; margin-top: 30px; }
    .global-contact-section h2 { font-size: 1.7rem; }
  }
</style>

<div id="contact"></div>
<section class="global-contact-section" id="contact-enquiry">
  <div class="container">
    <div class="row gy-5 align-items-start">

      <!-- LEFT: Info -->
      <div class="col-lg-5" data-aos="fade-right">
        <p class="section-label">Get In Touch</p>
        <h2>Talk to Our Engineering Experts</h2>
        <p class="subtitle">
          Have questions about our products or need a custom solution? Our technical team is ready to help you find the right equipment for your application.
        </p>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="ci-text">
            <strong>Our Address</strong>
            <span>Thirupthi Nagar, Chettimedu Village,<br>Vadaperumbakkam, Chennai,<br>Tamil Nadu 600060, India</span>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-telephone-fill"></i></div>
          <div class="ci-text">
            <strong>Phone</strong>
            <a href="tel:<?php echo PHONE_NUMBER; ?>"><?php echo PHONE_NUMBER; ?></a>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-envelope-fill"></i></div>
          <div class="ci-text">
            <strong>Email</strong>
            <a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-clock-fill"></i></div>
          <div class="ci-text">
            <strong>Working Hours</strong>
            <span>Monday – Saturday: 9:00 AM – 5:00 PM IST</span>
          </div>
        </div>

        <div class="contact-cta-btns">
          <a href="tel:<?php echo PHONE_NUMBER; ?>" class="btn-call-now">
            <i class="bi bi-telephone-fill"></i> Call Now
          </a>
          <a href="https://wa.me/919677296252?text=Hello%20Burhani%20Engineering%20Technology,%20I%20would%20like%20to%20enquire%20about%20your%20products."
             target="_blank" rel="noopener" class="btn-whatsapp-cta">
            <i class="bi bi-whatsapp"></i> WhatsApp Us
          </a>
        </div>
      </div>

      <!-- RIGHT: Form -->
      <div class="col-lg-7" data-aos="fade-left">
        <div class="contact-form-card">
          <h4>Send Us an Enquiry</h4>
          <p class="form-sub">We typically respond within 1 business day.</p>

          <form id="global-contact-form" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" id="gc-name" class="form-control" placeholder="Your Full Name *" required>
              </div>
              <div class="col-md-6">
                <input type="email" id="gc-email" class="form-control" placeholder="Email Address *" required>
              </div>
              <div class="col-md-6">
                <input type="tel" id="gc-phone" class="form-control" placeholder="Phone / WhatsApp *" required>
              </div>
              <div class="col-md-6">
                <input type="text" id="gc-subject" class="form-control" placeholder="Product / Subject">
              </div>
              <div class="col-12">
                <textarea id="gc-message" class="form-control" rows="4" placeholder="Tell us about your requirement..." required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-submit-global">
                  <i class="bi bi-send-fill me-2"></i>Send Message via WhatsApp
                </button>
              </div>
            </div>
            <div class="form-success-msg" id="gc-success">
              ✅ Your enquiry has been sent! We'll get back to you shortly.
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
document.getElementById('global-contact-form').addEventListener('submit', function(e) {
  e.preventDefault();

  const name    = document.getElementById('gc-name').value.trim();
  const email   = document.getElementById('gc-email').value.trim();
  const phone   = document.getElementById('gc-phone').value.trim();
  const subject = document.getElementById('gc-subject').value.trim();
  const message = document.getElementById('gc-message').value.trim();

  if (!name || !email || !phone || !message) {
    alert('Please fill in all required fields (Name, Email, Phone, Message).');
    return;
  }

  const text = `Hello Burhani Engineering Technology,\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject || 'General Enquiry'}\n\nMessage:\n${message}`;
  const waUrl = `https://wa.me/919677296252?text=${encodeURIComponent(text)}`;
  window.open(waUrl, '_blank');

  document.getElementById('gc-success').style.display = 'block';
  this.reset();
  setTimeout(() => { document.getElementById('gc-success').style.display = 'none'; }, 6000);
});
</script>
