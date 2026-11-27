<?php
// ============================================================
//  VP ITLabs - Shared Header (/header.php)
//  Edit site-wide defaults below once. Per-page SEO is set
//  before including this file (see individual pages).
// ============================================================

$siteName    = isset($siteName)     ? $siteName     : 'VP ITLabs';
$siteUrl     = isset($siteUrl)      ? $siteUrl      : 'https://vpitlabs.com';

$pageFile    = isset($_SERVER['REQUEST_URI']) ? trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') : '';
$pageFile    = basename($pageFile);
if ($pageFile === '' || $pageFile === 'router') {
    $pageFile = 'index';
}
$pageFile    = preg_replace('/\.php$/i', '', $pageFile);
$pageTitle   = isset($pageTitle)    ? $pageTitle    : 'VP ITLabs - Best IT Service Provider in Ahmedabad';
$pageDesc    = isset($pageDesc)     ? $pageDesc     : 'VP ITLabs Delivers Optimal Solutions For Your Digital Transformation Journey. Taking Your Business Online and Give Best IT Solution.';
$pageKeywords= isset($pageKeywords) ? $pageKeywords : 'VP ITLabs, IT services Ahmedabad, web development, app development, software company Gujarat, website development company, digital marketing, IT training';
$canonicalUrl= isset($canonicalUrl) ? $canonicalUrl : ($pageFile === 'index' ? $siteUrl : $siteUrl . '/' . $pageFile);
$ogImage     = isset($ogImage)      ? $ogImage      : $siteUrl . '/img/vpit.png';
$brandTheme  = isset($_COOKIE['vpit-brand-theme']) && $_COOKIE['vpit-brand-theme'] === 'light' ? 'light' : 'dark';
$brandLogoLight = 'img/Untitled%20design%20(3).png';
$brandLogoDark  = 'img/vpit.png';
$brandLogo      = $brandTheme === 'light' ? $brandLogoLight : $brandLogoDark;
$naturalScrollPage = in_array($pageFile, array('login', 'signup', 'data-science-reg', 'internship-3rd-sem', 'internship-5th-sem'), true);

// Which nav item is active (by filename)
$active = array(
    'home'     => in_array($pageFile, array('index'), true),
    'about'    => ($pageFile === 'about'),
    'services' => ($pageFile === 'service'),
    'contact'  => ($pageFile === 'contact'),
    'courses'  => ($pageFile === 'courses'),
    'internship'=> in_array($pageFile, array('data-science-reg', 'internship-5th-sem', 'internship-3rd-sem'), true),
    'gallery'  => ($pageFile === 'gallery'),
);
$accountActive = in_array($pageFile, array('login', 'signup'), true);
$servicesHref = 'service';
?>
<!DOCTYPE html>
<html lang="en"<?php echo $naturalScrollPage ? ' class="natural-scroll-page"' : ''; ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
  <meta name="robots" content="index, follow">
  <meta name="author" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta name="theme-color" content="#081727">

  <!-- Open Graph / Social -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:locale" content="en_US">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "VP ITLabs",
    "url": "<?php echo htmlspecialchars($siteUrl); ?>",
    "logo": "<?php echo htmlspecialchars($siteUrl); ?>/img/vpit.png",
    "description": "Best IT Service Provider in Ahmedabad. Our Technology takes your Imagination into Reality.",
    "email": "info@vpitlabs.com",
    "telephone": "+91-7359119740",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Pushpak Corner, B-536, Navyug School Rd, Krishnanagar, Naroda",
      "addressLocality": "Ahmedabad",
      "addressRegion": "Gujarat",
      "postalCode": "382330",
      "addressCountry": "IN"
    },
    "sameAs": [
      "https://www.instagram.com/vpitlabs/",
      "https://in.linkedin.com/company/vp-itlabs",
      "https://www.facebook.com/vpitlabs/"
    ]
  }
  </script>
</head>
<body data-page="<?php echo htmlspecialchars($pageFile, ENT_QUOTES, 'UTF-8'); ?>" data-brand-theme="<?php echo htmlspecialchars($brandTheme, ENT_QUOTES, 'UTF-8'); ?>">

  <!-- Top utility bar -->
  <div class="topbar">
    <div class="container">
      <a href="https://maps.app.goo.gl/6dVaU4FKtCnu4z7w5" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
        Ahmedabad, India
      </a>
      <a href="mailto:info@vpitlabs.com">
        <svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
        info@vpitlabs.com
      </a>
    </div>
  </div>

  <!-- Header -->
  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="index">
        <img src="<?php echo htmlspecialchars($brandLogo, ENT_QUOTES, 'UTF-8'); ?>" data-light-logo="<?php echo htmlspecialchars($brandLogoLight, ENT_QUOTES, 'UTF-8'); ?>" data-dark-logo="<?php echo htmlspecialchars($brandLogoDark, ENT_QUOTES, 'UTF-8'); ?>" alt="VP ITLabs">
      </a>
      <nav class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a class="nav-link<?php echo $active['home'] ? ' active' : ''; ?>" href="index">Home</a></li>
          <li><a class="nav-link<?php echo $active['about'] ? ' active' : ''; ?>" href="about">About</a></li>
          <li><a class="nav-link<?php echo $active['services'] ? ' active' : ''; ?>" href="<?php echo $servicesHref; ?>">Services</a></li>
          <li><a class="nav-link<?php echo $active['contact'] ? ' active' : ''; ?>" href="contact">Contact</a></li>
          <li><a class="nav-link<?php echo $active['courses'] ? ' active' : ''; ?>" href="courses">Courses</a></li>
          <li class="has-dropdown<?php echo $active['internship'] ? ' is-active' : ''; ?>">
            <span class="nav-label">Internship <span class="caret">&#9662;</span></span>
            <ul>
              <li><a href="data-science-reg">Data Science Registration</a></li>
              <li><a href="internship-5th-sem">Internship 5th Sem</a></li>
              <li><a href="internship-3rd-sem">Internship 3rd Sem</a></li>
              <li><a href="contact">Contact for More</a></li>
            </ul>
          </li>
          <li class="has-dropdown<?php echo $active['gallery'] ? ' is-active' : ''; ?>">
            <span class="nav-label">Gallery <span class="caret">&#9662;</span></span>
            <ul>
              <li><a href="gallery#seminar"><svg class="menu-icon" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 7V3.5L18.5 9H13z"/></svg>Expert Lecture</a></li>
              <li><a href="gallery#students"><svg class="menu-icon" viewBox="0 0 24 24"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3 1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>Internship&rsquo;s Students</a></li>
            </ul>
          </li>
        </ul>
        <a class="nav-link account-nav-link<?php echo $accountActive ? ' active' : ''; ?>" href="login">Log in</a>
        <a class="btn-primary header-cta" href="contact">Get Started</a>
      </nav>
      <div class="brand-theme-switch" role="group" aria-label="Header and footer theme">
        <button type="button" class="theme-option" data-brand-theme-choice="light" aria-label="Light theme" title="Light theme" aria-pressed="<?php echo $brandTheme === 'light' ? 'true' : 'false'; ?>">
          <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/></svg>
        </button>
        <button type="button" class="theme-option" data-brand-theme-choice="dark" aria-label="Dark theme" title="Dark theme" aria-pressed="<?php echo $brandTheme === 'dark' ? 'true' : 'false'; ?>">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.2 15.4A8.5 8.5 0 0 1 8.6 3.8 8.5 8.5 0 1 0 20.2 15.4Z"/></svg>
        </button>
      </div>
      <button class="burger" aria-label="Toggle menu"><span></span><span></span><span></span></button>
    </div>
  </header>

  <!-- Mobile menu (off-canvas drawer) -->
  <div class="menu-scrim" id="menuScrim"></div>
  <aside class="mobile-menu" id="mobileMenu" aria-label="Mobile navigation">
    <div class="mobile-menu-head">
      <span class="mobile-menu-title">Menu</span>
      <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close menu">&times;</button>
    </div>
    <ul>
      <li><a class="nav-link<?php echo $active['home'] ? ' active' : ''; ?>" href="index">Home</a></li>
      <li><a class="nav-link<?php echo $active['about'] ? ' active' : ''; ?>" href="about">About</a></li>
      <li><a class="nav-link<?php echo $active['services'] ? ' active' : ''; ?>" href="service">Services</a></li>
      <li><a class="nav-link<?php echo $active['contact'] ? ' active' : ''; ?>" href="contact">Contact</a></li>
      <li><a class="nav-link<?php echo $active['courses'] ? ' active' : ''; ?>" href="courses">Courses</a></li>
      <li class="has-dropdown">
        <span class="nav-label">Internship <span class="caret">&#9662;</span></span>
        <ul>
          <li><a href="data-science-reg">Data Science Registration</a></li>
          <li><a href="internship-5th-sem">Internship 5th Sem</a></li>
          <li><a href="internship-3rd-sem">Internship 3rd Sem</a></li>
          <li><a href="contact">Contact for More</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <span class="nav-label">Gallery <span class="caret">&#9662;</span></span>
        <ul>
          <li><a href="gallery#seminar">Expert Lecture</a></li>
          <li><a href="gallery#students">Internship&rsquo;s Students</a></li>
        </ul>
      </li>
      <li><a class="nav-link<?php echo $accountActive ? ' active' : ''; ?>" href="login">Log in</a></li>
      <li><a class="nav-link" href="signup">Create account</a></li>
    </ul>
    <a class="btn-primary header-cta" href="contact">Get Started</a>
  </aside>