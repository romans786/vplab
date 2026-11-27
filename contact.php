<?php
$pageTitle = "Contact - VP ITLabs | Best IT Service Provider in Ahmedabad";
$pageDesc = "Contact VP ITLabs. Call +91 7359119740 or email info@vpitlabs.com. Pushpak corner, B-536, Navyug School Rd, Naroda, Ahmedabad, Gujarat 382330.";
$pageKeywords = "contact VP ITLabs, IT company contact number Ahmedabad, software company email, web development enquiry, get in touch";
include __DIR__ . '/header.php';
?>

<!-- Page hero -->
  <section class="page-hero">
    <div class="container">
      <div class="eyebrow" style="color:var(--primary);font-size:.8rem;letter-spacing:2.5px;font-weight:600;text-transform:uppercase;">contact with Us</div>
      <h1 class="reveal in"><mark>Contact Us</mark></h1>
      <p class="reveal in d1">&ldquo;VP ITLabs Delivers Optimal Solutions for Your Digital Transformation Journey.&rdquo;</p>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact" style="padding-top:20px;">
    <div class="container contact-grid">
      <!-- Form -->
      <div class="contact-form reveal">
        <h2 style="font-size:clamp(1.4rem,3vw,1.9rem);margin-bottom:8px;">Please Get In Touch</h2>
        <p style="color:var(--muted);margin-bottom:26px;">Let&rsquo;s Talk. Send us a message and we&rsquo;ll get back to you soon.</p>

        <form action="#" method="POST">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Name *</label>
              <input type="text" id="name" name="name" placeholder="Your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" placeholder="you@example.com" required>
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="How can we help?">
          </div>
          <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>
          </div>
          <p class="form-note">Your email address will not be published. Required fields are marked *</p>
          <button class="btn-primary" type="submit" style="border:none;">Send Message</button>
          <div class="form-ok">Thank you! Your message has been received. We&rsquo;ll contact you shortly.</div>
        </form>
      </div>

      <!-- Info -->
      <div class="reveal d1">
        <div class="info-card">
          <div class="mv-ico">
            <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.24 11.36 11.36 0 0 0 3.56.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .57 3.56 1 1 0 0 1-.25 1z"/></svg>
          </div>
          <div>
            <h3>Our Phone</h3>
            <p><a href="tel:+917359119740">+91 7359119740</a></p>
            <p><a href="tel:+916355924578">+91 6355924578</a></p>
          </div>
        </div>

        <div class="info-card">
          <div class="mv-ico" style="background:linear-gradient(135deg,#ff5f6d,#ffc371);">
            <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
          </div>
          <div>
            <h3>Find Me</h3>
            <p>Pushpak Corner, B-536, Navyug School Rd, Krishnanagar, Naroda, Ahmedabad, Gujarat 382330</p>
          </div>
        </div>

        <div class="info-card">
          <div class="mv-ico" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
            <svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
          </div>
          <div>
            <h3>Our Email</h3>
            <p><a href="mailto:info@vpitlabs.com">info@vpitlabs.com</a></p>
          </div>
        </div>

        <div class="map-frame">
          <iframe title="VP ITLabs location on Google Maps" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Pushpak+Corner+Navyug+School+Rd+Krishnanagar+Naroda+Ahmedabad&output=embed"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
<?php include __DIR__ . "/footer.php"; ?>
