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

  // Cursor-responsive effects are kept off touch devices and reduced-motion mode.
  var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var serviceCards = document.querySelectorAll('.services-grid .service-card');
  if (finePointer && !reduceMotion) {
    var cursorSections = document.querySelectorAll('section');
    cursorSections.forEach(function (section) {
      section.classList.add('cursor-responsive');
      var layer = document.createElement('span');
      layer.className = 'cursor-response-layer';
      layer.setAttribute('aria-hidden', 'true');
      section.insertBefore(layer, section.firstChild);

      section.addEventListener('pointerenter', function () {
        section.classList.add('is-cursor-active');
      });
      section.addEventListener('pointermove', function (e) {
        var rect = section.getBoundingClientRect();
        section.style.setProperty('--cursor-x', (e.clientX - rect.left) + 'px');
        section.style.setProperty('--cursor-y', (e.clientY - rect.top) + 'px');
      });
      section.addEventListener('pointerleave', function () {
        section.classList.remove('is-cursor-active');
        section.style.removeProperty('--cursor-x');
        section.style.removeProperty('--cursor-y');
      });
    });

    serviceCards.forEach(function (card) {
      card.addEventListener('pointermove', function (e) {
        var rect = card.getBoundingClientRect();
        card.style.setProperty('--glow-x', (e.clientX - rect.left) + 'px');
        card.style.setProperty('--glow-y', (e.clientY - rect.top) + 'px');
        var tiltX = (e.clientY - rect.top) / rect.height - 0.5;
        var tiltY = (e.clientX - rect.left) / rect.width - 0.5;
        card.style.setProperty('--tilt-x', (-tiltX * 2.4).toFixed(2) + 'deg');
        card.style.setProperty('--tilt-y', (tiltY * 2.4).toFixed(2) + 'deg');
      });
      card.addEventListener('pointerleave', function () {
        card.style.removeProperty('--glow-x');
        card.style.removeProperty('--glow-y');
        card.style.removeProperty('--tilt-x');
        card.style.removeProperty('--tilt-y');
      });
    });

    // Draw the hero's pointer-reactive particle field without external libraries.
    var hero = document.querySelector('.hero');
    if (hero) {
      var canvas = document.createElement('canvas');
      canvas.className = 'cursor-response-canvas';
      canvas.setAttribute('aria-hidden', 'true');
      hero.insertBefore(canvas, hero.firstChild);
      var context = canvas.getContext('2d');

      if (context) {
        var width = 0;
        var height = 0;
        var particles = [];
        var ripples = [];
        var pointer = { x: -1000, y: -1000, inside: false };
        var lastRipple = 0;
        var lastFrame = 0;
        var frame = 0;
        var heroVisible = true;
        var particleCount = window.innerWidth < 700 ? 28 : 54;

        for (var i = 0; i < particleCount; i++) {
          particles.push({
            x: Math.random(),
            y: Math.random(),
            vx: (Math.random() - 0.5) * 0.00045,
            vy: (Math.random() - 0.5) * 0.00045,
            size: 0.8 + Math.random() * 1.4
          });
        }

        function draw(now) {
          var delta = lastFrame ? Math.min((now - lastFrame) / 16.67, 2) : 1;
          lastFrame = now;
          context.clearRect(0, 0, width, height);

          particles.forEach(function (particle, index) {
            particle.x += particle.vx * delta;
            particle.y += particle.vy * delta;
            if (particle.x < 0 || particle.x > 1) particle.vx *= -1;
            if (particle.y < 0 || particle.y > 1) particle.vy *= -1;

            var x = particle.x * width;
            var y = particle.y * height;
            if (pointer.inside) {
              var dx = x - pointer.x;
              var dy = y - pointer.y;
              var distance = Math.sqrt(dx * dx + dy * dy);
              if (distance > 0 && distance < 115) {
                var force = (1 - distance / 115) * 0.8 * delta;
                particle.x += dx / distance * force / width;
                particle.y += dy / distance * force / height;
                x = particle.x * width;
                y = particle.y * height;
                context.beginPath();
                context.moveTo(pointer.x, pointer.y);
                context.lineTo(x, y);
                context.strokeStyle = 'rgba(91,211,239,' + ((1 - distance / 115) * 0.28) + ')';
                context.stroke();
              }
            }

            for (var j = index + 1; j < particles.length; j++) {
              var other = particles[j];
              var ox = other.x * width - x;
              var oy = other.y * height - y;
              var gap = Math.sqrt(ox * ox + oy * oy);
              if (gap < 120) {
                context.beginPath();
                context.moveTo(x, y);
                context.lineTo(x + ox, y + oy);
                context.strokeStyle = 'rgba(91,185,221,' + ((1 - gap / 120) * 0.13) + ')';
                context.stroke();
              }
            }

            context.beginPath();
            context.arc(x, y, particle.size, 0, Math.PI * 2);
            context.fillStyle = 'rgba(132,225,247,0.55)';
            context.fill();
          });

          ripples = ripples.filter(function (ripple) { return ripple.alpha > 0.025; });
          ripples.forEach(function (ripple) {
            context.beginPath();
            context.arc(ripple.x, ripple.y, ripple.radius, 0, Math.PI * 2);
            context.strokeStyle = 'rgba(102,218,244,' + ripple.alpha + ')';
            context.lineWidth = 1.2;
            context.stroke();
            ripple.radius += 1.6 * delta;
            ripple.alpha *= 0.955;
          });
        }

        function resizeCanvas() {
          var rect = hero.getBoundingClientRect();
          var ratio = Math.min(window.devicePixelRatio || 1, 1.5);
          width = rect.width;
          height = rect.height;
          canvas.width = Math.round(width * ratio);
          canvas.height = Math.round(height * ratio);
          context.setTransform(ratio, 0, 0, ratio, 0, 0);
          draw(performance.now());
        }

        function animate(now) {
          frame = 0;
          if (document.hidden || !heroVisible) return;
          draw(now);
          frame = window.requestAnimationFrame(animate);
        }

        function startAnimation() {
          if (!frame && !document.hidden && heroVisible) {
            frame = window.requestAnimationFrame(animate);
          }
        }

        function stopAnimation() {
          if (frame) window.cancelAnimationFrame(frame);
          frame = 0;
        }

        hero.addEventListener('pointermove', function (e) {
          var rect = hero.getBoundingClientRect();
          pointer.x = e.clientX - rect.left;
          pointer.y = e.clientY - rect.top;
          pointer.inside = true;
          var now = performance.now();
          if (now - lastRipple > 150 && ripples.length < 8) {
            lastRipple = now;
            ripples.push({ x: pointer.x, y: pointer.y, radius: 5, alpha: 0.42 });
          }
        });
        hero.addEventListener('pointerleave', function () {
          pointer.inside = false;
        });
        hero.addEventListener('pointerdown', function (e) {
          if (e.target.closest('a,button,input,select,textarea,label,summary')) return;
          for (var ripple = 0; ripple < 3; ripple++) {
            ripples.push({ x: pointer.x, y: pointer.y, radius: 7 + ripple * 13, alpha: 0.6 });
          }
        });

        if ('ResizeObserver' in window) {
          new ResizeObserver(resizeCanvas).observe(hero);
        } else {
          window.addEventListener('resize', resizeCanvas, { passive: true });
        }
        if ('IntersectionObserver' in window) {
          new IntersectionObserver(function (entries) {
            heroVisible = entries[0].isIntersecting;
            if (heroVisible) startAnimation();
            else stopAnimation();
          }).observe(hero);
        } else {
          startAnimation();
        }
        document.addEventListener('visibilitychange', function () {
          if (document.hidden) stopAnimation();
          else startAnimation();
        });
        resizeCanvas();
        startAnimation();
      } else {
        canvas.remove();
      }
    }
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