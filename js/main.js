(function () {
  'use strict';

  // Sticky header shadow
  var header = document.querySelector('.site-header');
  function onScroll() {
    if (!header) return;
    if (window.scrollY > 12) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Mobile menu (off-canvas drawer)
  var burger = document.querySelector('.burger');
  var mobileMenu = document.getElementById('mobileMenu');
  var menuScrim = document.getElementById('menuScrim');
  var menuClose = document.getElementById('mobileMenuClose');
  function setMenu(open) {
    if (!burger || !mobileMenu) return;
    burger.classList.toggle('active', open);
    mobileMenu.classList.toggle('open', open);
    if (menuScrim) menuScrim.classList.toggle('show', open);
    document.body.classList.toggle('restrict', open);
  }
  function closeMenu() { setMenu(false); }
  if (burger) burger.addEventListener('click', function () {
    setMenu(!mobileMenu.classList.contains('open'));
  });
  if (menuClose) menuClose.addEventListener('click', closeMenu);
  if (menuScrim) menuScrim.addEventListener('click', closeMenu);
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

  // Mobile dropdown toggles
  var labels = document.querySelectorAll('.has-dropdown > .nav-label');
  labels.forEach(function (label) {
    label.addEventListener('click', function () {
      if (window.innerWidth > 1024) return;
      var item = label.parentElement;
      item.classList.toggle('open');
    });
  });

  // Close mobile menu when a link is chosen
  document.addEventListener('click', function (e) {
    if (window.innerWidth > 1024) return;
    if (mobileMenu && mobileMenu.classList.contains('open') && e.target.closest('#mobileMenu a')) {
      if (!e.target.closest('.has-dropdown')) {
        setMenu(false);
      }
    }
  });

  // Scroll reveal
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.14, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  }

  // Service-card pointer glow, enabled only for fine pointers.
  var serviceCards = document.querySelectorAll('.services-grid .service-card');
  if (serviceCards.length && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
    serviceCards.forEach(function (card) {
      card.addEventListener('pointermove', function (e) {
        var rect = card.getBoundingClientRect();
        card.style.setProperty('--glow-x', (e.clientX - rect.left) + 'px');
        card.style.setProperty('--glow-y', (e.clientY - rect.top) + 'px');
      });
      card.addEventListener('pointerleave', function () {
        card.style.removeProperty('--glow-x');
        card.style.removeProperty('--glow-y');
      });
    });
  }

  // Tech carousel: duplicate track for a seamless infinite loop
  var track = document.querySelector('.tech-track');
  if (track) {
    var slides = Array.prototype.slice.call(track.children).map(function (s) { return s.cloneNode(true); });
    slides.forEach(function (s) { track.appendChild(s); });
  }

  // Footer year
  var yearEl = document.querySelector('[data-year]');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Contact form demo submit
  var form = document.querySelector('.contact-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var ok = form.querySelector('.form-ok');
      if (ok) ok.classList.add('show');
      form.reset();
    });
  }
}());