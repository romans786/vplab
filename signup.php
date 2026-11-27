<?php
$pageTitle = "Create an Account - VP ITLabs";
$pageDesc = "Preview the VP ITLabs account creation experience. Account authentication is not yet connected.";
$pageKeywords = "VP ITLabs signup, create account preview";
include __DIR__ . '/header.php';
?>

<main class="account-page">
  <section class="account-section">
    <div class="container">
      <div class="account-shell">
        <aside class="account-story">
          <div class="account-story-copy">
            <div class="account-eyebrow"><span class="account-status-dot"></span> VP ITLABS <span>/</span> ACCOUNT PORTAL</div>
            <h1>Make room for what&rsquo;s next.</h1>
            <p>Learn new skills, explore ideas and take your next step with VP ITLabs. Account access is being prepared.</p>
            <div class="account-pills" aria-label="VP ITLabs focus areas">
              <span>Learn</span><span>Build</span><span>Grow</span>
            </div>
          </div>
          <div class="account-visual" aria-hidden="true">
            <div class="account-orbit account-orbit-one"></div>
            <div class="account-orbit account-orbit-two"></div>
            <div class="account-orbit account-orbit-three"></div>
            <div class="account-orbit-core">
              <svg viewBox="0 0 48 48"><path d="M24 5v38M5 24h38M10.6 10.6l26.8 26.8m0-26.8L10.6 37.4"/><circle cx="24" cy="24" r="13"/><circle cx="24" cy="24" r="4"/></svg>
            </div>
            <div class="account-visual-label"><span></span> A workspace in progress</div>
          </div>
          <a class="account-story-link" href="index">Explore VP ITLabs <span aria-hidden="true">&rarr;</span></a>
        </aside>

        <div class="account-card">
          <div class="account-card-top">
            <span class="account-step">ACCOUNT ACCESS <span>02</span></span>
            <a href="index" aria-label="Back to VP ITLabs home">&times;</a>
          </div>
          <div class="account-heading">
            <div class="account-form-eyebrow">GET STARTED</div>
            <h2>Create your account</h2>
            <p>A fresh start for your VP ITLabs experience.</p>
          </div>

          <div class="account-preview-note" role="note">
            <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 11v5m0-8h.01"/></svg>
            <span>Preview only. Account creation is not connected, and your details will not be sent.</span>
          </div>

          <div class="account-form">
            <div class="account-field">
              <label for="signup-name">Full name</label>
              <div class="account-input-wrap">
                <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3.5"/><path d="M5 20a7 7 0 0 1 14 0"/></svg>
                <input id="signup-name" name="name" type="text" placeholder="Your name" autocomplete="name" required>
              </div>
            </div>
            <div class="account-field">
              <label for="signup-email">Email address</label>
              <div class="account-input-wrap">
                <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="3"/><path d="m4 7 8 6 8-6"/></svg>
                <input id="signup-email" name="email" type="email" placeholder="you@example.com" autocomplete="email" required>
              </div>
            </div>
            <div class="account-field">
              <label for="signup-password">Create password</label>
              <div class="account-input-wrap">
                <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3m-4 5v2"/></svg>
                <input id="signup-password" name="password" type="password" placeholder="At least 8 characters" autocomplete="new-password" minlength="8" required>
              </div>
            </div>
            <button class="account-submit" type="button" data-account-preview-trigger>Create account <span aria-hidden="true">&rarr;</span></button>
            <p class="account-feedback" data-account-preview-status role="status" aria-live="polite" hidden></p>
          </div>

          <p class="account-switch">Already have an account? <a href="login">Log in <span aria-hidden="true">&rarr;</span></a></p>
          <p class="account-help">Need a hand? <a href="contact">Contact our team</a></p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
