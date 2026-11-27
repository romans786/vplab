<!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <img src="<?php echo htmlspecialchars($brandLogo, ENT_QUOTES, 'UTF-8'); ?>" data-light-logo="<?php echo htmlspecialchars($brandLogoLight, ENT_QUOTES, 'UTF-8'); ?>" data-dark-logo="<?php echo htmlspecialchars($brandLogoDark, ENT_QUOTES, 'UTF-8'); ?>" alt="VP ITLabs">
          <div class="brand-theme-switch" role="group" aria-label="Header and footer theme">
            <button type="button" class="theme-option" data-brand-theme-choice="light" aria-label="Light theme" title="Light theme" aria-pressed="<?php echo $brandTheme === 'light' ? 'true' : 'false'; ?>">
              <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/></svg>
            </button>
            <button type="button" class="theme-option" data-brand-theme-choice="dark" aria-label="Dark theme" title="Dark theme" aria-pressed="<?php echo $brandTheme === 'dark' ? 'true' : 'false'; ?>">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.2 15.4A8.5 8.5 0 0 1 8.6 3.8 8.5 8.5 0 1 0 20.2 15.4Z"/></svg>
            </button>
          </div>
        </div>
        <div>
          <h4>Menu</h4>
          <ul class="footer-links">
            <li><a href="index">Home</a></li>
            <li><a href="about">About us</a></li>
            <li><a href="service">Services</a></li>
            <li><a href="contact">Contact us</a></li>
            <li><a href="courses">Courses</a></li>
            <li><a href="login">Log in</a></li>
            <li><a href="signup">Create account</a></li>
          </ul>
        </div>
        <div>
          <h4>contact</h4>
          <ul class="footer-contact">
            <li><svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.24 11.36 11.36 0 0 0 3.56.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .57 3.56 1 1 0 0 1-.25 1z"/></svg><a href="tel:+917359119740">+91 7359119740</a></li>
            <li><svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.24 11.36 11.36 0 0 0 3.56.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .57 3.56 1 1 0 0 1-.25 1z"/></svg><a href="tel:+916355924578">+91 6355924578</a></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg><a href="mailto:info@vpitlabs.com">info@vpitlabs.com</a></li>
          </ul>
        </div>
        <div>
          <h4>address</h4>
          <p style="font-size:.88rem;line-height:1.7;">Pushpak corner, B-536, Navyug School Rd, Krishnanagar, Naroda, Ahmedabad, Gujarat 382330</p>
          <div class="footer-social">
            <a href="https://www.instagram.com/vpitlabs/" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .4-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5 0-4.8.1-1.1.1-1.7.2-2 .4-.5.2-.8.4-1.2.7-.3.3-.6.7-.7 1.2-.1.4-.3 1-.4 2-.1 1.2-.1 1.7-.1 4.8s0 3.6.1 4.8c.1 1.1.2 1.7.4 2 .2.5.4.8.7 1.2.3.3.7.6 1.2.7.4.1 1 .3 2 .4 1.2.1 1.7.1 4.8.1s3.6 0 4.8-.1c1.1-.1 1.7-.2 2-.4.5-.2.8-.4 1.2-.7.3-.3.6-.7.7-1.2.1-.4.3-1 .4-2 .1-1.2.1-1.7.1-4.8s0-3.6-.1-4.8c-.1-1.1-.2-1.7-.4-2a3 3 0 0 0-.7-1.2 3 3 0 0 0-1.2-.7c-.4-.1-1-.3-2-.4-1.2-.1-1.7-.1-4.8-.1zm0 3.1a4.9 4.9 0 1 1 0 9.8 4.9 4.9 0 0 1 0-9.8zm0 8.1a3.2 3.2 0 1 0 0-6.4 3.2 3.2 0 0 0 0 6.4zm6.2-8.3a1.1 1.1 0 1 1-2.3 0 1.1 1.1 0 0 1 2.3 0z"/></svg></a>
            <a href="https://in.linkedin.com/company/vp-itlabs" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24"><path d="M4.98 3.5A2.5 2.5 0 1 1 0 3.5a2.5 2.5 0 0 1 4.98 0zM0 8.66h2.02V24H0V8.66zm7.76 0h1.94v2.1h.03c.27-.51 1.05-2.1 3.51-2.1 2.46 0 4.3 1.6 4.3 5.05V24h-2.02v-9.6c0-2.3-1.11-3.5-2.86-3.5-2.14 0-3.06 1.7-3.06 2.8V24H7.76V8.66z"/></svg></a>
            <a href="https://www.facebook.com/vpitlabs/" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"/></svg></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; <span data-year>2025</span> Best IT Service Provider in Ahmedabad. All rights reserved.</p>
        <div class="footer-social">
          <a href="https://www.instagram.com/vpitlabs/" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .4-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5 0-4.8.1-1.1.1-1.7.2-2 .4-.5.2-.8.4-1.2.7-.3.3-.6.7-.7 1.2-.1.4-.3 1-.4 2-.1 1.2-.1 1.7-.1 4.8s0 3.6.1 4.8c.1 1.1.2 1.7.4 2 .2.5.4.8.7 1.2.3.3.7.6 1.2.7.4.1 1 .3 2 .4 1.2.1 1.7.1 4.8.1s3.6 0 4.8-.1c1.1-.1 1.7-.2 2-.4.5-.2.8-.4 1.2-.7.3-.3.6-.7.7-1.2.1-.4.3-1 .4-2 .1-1.2.1-1.7.1-4.8s0-3.6-.1-4.8c-.1-1.1-.2-1.7-.4-2a3 3 0 0 0-.7-1.2 3 3 0 0 0-1.2-.7c-.4-.1-1-.3-2-.4-1.2-.1-1.7-.1-4.8-.1zm0 3.1a4.9 4.9 0 1 1 0 9.8 4.9 4.9 0 0 1 0-9.8zm0 8.1a3.2 3.2 0 1 0 0-6.4 3.2 3.2 0 0 0 0 6.4zm6.2-8.3a1.1 1.1 0 1 1-2.3 0 1.1 1.1 0 0 1 2.3 0z"/></svg></a>
          <a href="https://in.linkedin.com/company/vp-itlabs" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24"><path d="M4.98 3.5A2.5 2.5 0 1 1 0 3.5a2.5 2.5 0 0 1 4.98 0zM0 8.66h2.02V24H0V8.66zm7.76 0h1.94v2.1h.03c.27-.51 1.05-2.1 3.51-2.1 2.46 0 4.3 1.6 4.3 5.05V24h-2.02v-9.6c0-2.3-1.11-3.5-2.86-3.5-2.14 0-3.06 1.7-3.06 2.8V24H7.76V8.66z"/></svg></a>
          <a href="https://www.facebook.com/vpitlabs/" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"/></svg></a>
          <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24"><path d="M18.9 1.2h3.7l-8.1 9.3L24 22.8h-7.5l-5.9-7.7-6.7 7.7H.2l8.7-9.9L0 1.2h7.7l5.3 7 6-7z"/></svg></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>