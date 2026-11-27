<?php
$pageTitle = "Internship Registration (3rd Sem) - VP ITLabs";
$pageDesc = "Register for the VP ITLabs student internship open to 3rd semester students. Build foundational skills with projects, training and an internship certificate.";
$pageKeywords = "student internship Ahmedabad, IT internship 3rd semester, internship registration, programming basics internship, semester internship";
include __DIR__ . '/header.php';
?>

<section class="page-hero">
    <div class="container">
      <div class="eyebrow" style="color:var(--primary);font-size:.8rem;letter-spacing:2.5px;font-weight:600;text-transform:uppercase;">Student Internship</div>
      <h1 class="reveal in"><mark>Internship Registration &ndash; 3rd Semester</mark></h1>
      <p class="reveal in d1">An early-career internship for 3rd semester students to build strong fundamentals, explore technologies, and grow with a mentor.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="about-story">
        <div class="reveal">
          <div class="eyebrow" style="color:var(--primary);font-size:.8rem;letter-spacing:2.5px;font-weight:600;text-transform:uppercase;">About the Internship</div>
          <h2>Start your journey early and stay ahead of the curve.</h2>
          <p>The 3rd semester internship at VP ITLabs focuses on building your foundation. You will learn core concepts, practice with guided projects, and gain the confidence to take on bigger challenges in later semesters.</p>
          <p>Perfect for students who want to start learning hands-on before the exam-driven rush of final years begins.</p>
          <a class="btn-primary" href="#reg-form">Register Now</a>
        </div>
        <div class="reveal d1">
          <div class="meta-row" style="margin-top:0;">
            <div class="meta-item">
              <div class="mv-ico cover-1"><svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm1 9V8h-2v3H9v2h2v3h2v-3h2v-2h-2z"/></svg></div>
              <h3>Duration</h3>
              <p>30 Days</p>
            </div>
            <div class="meta-item">
              <div class="mv-ico cover-2"><svg viewBox="0 0 24 24"><path d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z"/></svg></div>
              <h3>Eligibility</h3>
              <p>3rd Semester Students</p>
            </div>
            <div class="meta-item">
              <div class="mv-ico cover-3"><svg viewBox="0 0 24 24"><path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.58L18 9l-8 8z"/></svg></div>
              <h3>Certificate</h3>
              <p>Internship + Project</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container" style="max-width:880px;">
      <div class="section-head reveal">
        <div class="eyebrow">Why Join</div>
        <h2><mark>Internship Highlights</mark></h2>
      </div>
      <div class="reveal d1" style="background:var(--soft);border:1px solid var(--border);border-radius:20px;padding:36px;">
        <ul class="curriculum">
          <li>Learn programming fundamentals with a focus on practical application.</li>
          <li>Explore multiple domains so you can choose the right career path.</li>
          <li>Guided mini-projects with regular feedback from mentors.</li>
          <li>Internship completion certificate at the end of the program.</li>
          <li>Access to future advanced internship and training programs.</li>
          <li>Friendly batch sizes with weekend &amp; weekday options.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="contact" id="reg-form">
    <div class="container contact-grid">
      <div class="contact-form reveal">
        <h2 style="font-size:clamp(1.4rem,3vw,1.9rem);margin-bottom:8px;">Register for 3rd Sem Internship</h2>
        <p style="color:var(--muted);margin-bottom:26px;">Fill in your details and our team will confirm your seat in the next batch.</p>
        <form action="#" method="POST">
          <div class="form-row">
            <div class="form-group">
              <label for="i3-name">Full Name *</label>
              <input type="text" id="i3-name" name="i3-name" placeholder="Your name" required>
            </div>
            <div class="form-group">
              <label for="i3-email">Email *</label>
              <input type="email" id="i3-email" name="i3-email" placeholder="you@example.com" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="i3-phone">Phone *</label>
              <input type="tel" id="i3-phone" name="i3-phone" placeholder="+91 00000 00000" required>
            </div>
            <div class="form-group">
              <label for="i3-track">Interest Area *</label>
              <select id="i3-track" name="i3-track" style="width:100%;padding:13px 16px;border:1px solid var(--border);border-radius:12px;font-family:var(--font);font-size:.95rem;background:#fff;">
                <option value="">Select interest</option>
                <option>Web Development</option>
                <option>Programming (C / Python)</option>
                <option>Data Science Basics</option>
                <option>Digital Marketing</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="i3-college">College / University *</label>
            <input type="text" id="i3-college" name="i3-college" placeholder="Your college or university" required>
          </div>
          <div class="form-group">
            <label for="i3-msg">Message</label>
            <textarea id="i3-msg" name="i3-msg" rows="4" placeholder="Preferred batch timings or any questions"></textarea>
          </div>
          <p class="form-note">Your email address will not be published. Required fields are marked *</p>
          <button class="btn-primary" type="submit" style="border:none;">Submit Registration</button>
          <div class="form-ok">Thank you! Your registration has been received. We&rsquo;ll contact you shortly with the batch schedule.</div>
        </form>
      </div>
      <div class="reveal d1">
        <div class="info-card">
          <div class="mv-ico"><svg viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/></svg></div>
          <div>
            <h3>Prefer Data Science?</h3>
            <p>See the dedicated <a href="data-science-reg">Data Science Registration</a> page for the full program.</p>
          </div>
        </div>
        <div class="info-card">
          <div class="mv-ico" style="background:linear-gradient(135deg,#ff5f6d,#ffc371);"><svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.24 11.36 11.36 0 0 0 3.56.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .57 3.56 1 1 0 0 1-.25 1z"/></svg></div>
          <div>
            <h3>Questions?</h3>
            <p>Call <a href="tel:+917359119740">+91 7359119740</a> or email <a href="mailto:info@vpitlabs.com">info@vpitlabs.com</a>.</p>
          </div>
        </div>
        <div class="info-card">
          <div class="mv-ico" style="background:linear-gradient(135deg,#11998e,#38ef7d);"><svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg></div>
          <div>
            <h3>Training Center</h3>
            <p>Pushpak Corner, B-536, Navyug School Rd, Krishnanagar, Naroda, Ahmedabad, Gujarat 382330</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include __DIR__ . "/footer.php"; ?>
