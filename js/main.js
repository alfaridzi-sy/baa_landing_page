/* ============================================================
   CV BERLIAN ARTHA ABADI — main.js
   Navbar | Hamburger | Counter | AOS Init | Marquee | Filters
   ============================================================ */

'use strict';

/* ============================================================
   1. NAVBAR SCROLL EFFECT
   ============================================================ */
(function initNavbar() {
  const navbar = document.querySelector('.navbar');
  if (!navbar) return;

  const SCROLL_THRESHOLD = 80;

  function onScroll() {
    if (window.scrollY > SCROLL_THRESHOLD) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // run once on load
})();

/* ============================================================
   2. HAMBURGER / MOBILE NAV
   ============================================================ */
(function initMobileNav() {
  const hamburger = document.querySelector('.hamburger');
  const mobileNav = document.querySelector('.mobile-nav');
  const body = document.body;

  if (!hamburger || !mobileNav) return;

  function toggleMenu() {
    const isOpen = hamburger.classList.toggle('open');
    mobileNav.classList.toggle('open', isOpen);
    body.style.overflow = isOpen ? 'hidden' : '';
  }

  function closeMenu() {
    hamburger.classList.remove('open');
    mobileNav.classList.remove('open');
    body.style.overflow = '';
  }

  hamburger.addEventListener('click', toggleMenu);

  // Close on nav link click
  mobileNav.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Close on Escape
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeMenu();
  });

  // Close on overlay click (outside menu content)
  mobileNav.addEventListener('click', e => {
    if (e.target === mobileNav) closeMenu();
  });
})();

/* ============================================================
   3. ACTIVE NAV LINK (based on current page)
   ============================================================ */
(function setActiveNavLink() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav-link[data-page]');

  navLinks.forEach(link => {
    const page = link.dataset.page;
    if (
      page === currentPage ||
      (currentPage === '' && page === 'index.html')
    ) {
      link.classList.add('active');
    }
  });
})();

/* ============================================================
   4. COUNTER ANIMATION (Intersection Observer)
   ============================================================ */
(function initCounters() {
  const counters = document.querySelectorAll('[data-counter]');
  if (!counters.length) return;

  function easeOutQuart(t) {
    return 1 - Math.pow(1 - t, 4);
  }

  function animateCounter(el) {
    const target = el.dataset.counter;
    const isPercent = target.includes('%');
    const hasPlus = target.includes('+');
    const numeric = parseFloat(target.replace(/[^0-9.]/g, ''));
    const duration = 2000;
    const start = performance.now();

    function step(now) {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = easeOutQuart(progress);
      const current = Math.round(eased * numeric);

      el.textContent = current + (hasPlus ? '+' : '') + (isPercent ? '%' : '');

      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target;
      }
    }

    requestAnimationFrame(step);
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(el => observer.observe(el));
})();

/* ============================================================
   5. AOS INITIALIZATION
   ============================================================ */
(function initAOS() {
  if (typeof AOS === 'undefined') return;

  AOS.init({
    duration: 700,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80,
  });
})();

/* ============================================================
   6. PRODUCT FILTER TABS
   ============================================================ */
(function initProductFilters() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const productCards = document.querySelectorAll('.product-card[data-category]');

  if (!filterBtns.length || !productCards.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;

      productCards.forEach(card => {
        const cat = card.dataset.category;
        const show = filter === 'semua' || cat === filter;

        if (show) {
          card.style.display = '';
          card.style.animation = 'fadeInUp 0.4s ease-out forwards';
        } else {
          card.style.display = 'none';
        }
      });

      // Refresh AOS after filter
      if (typeof AOS !== 'undefined') {
        setTimeout(() => AOS.refresh(), 50);
      }
    });
  });
})();

/* ============================================================
   7. SMOOTH SCROLL FOR ANCHOR LINKS
   ============================================================ */
(function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const target = document.querySelector(targetId);
      if (!target) return;

      e.preventDefault();
      const navHeight = document.querySelector('.navbar')?.offsetHeight || 80;
      const top = target.getBoundingClientRect().top + window.scrollY - navHeight - 16;

      window.scrollTo({ top, behavior: 'smooth' });
    });
  });
})();

/* ============================================================
   8. COPY PHONE / EMAIL FEEDBACK
   ============================================================ */
(function initCopyFeedback() {
  document.querySelectorAll('[data-copy]').forEach(el => {
    el.addEventListener('click', () => {
      const text = el.dataset.copy;
      if (!navigator.clipboard) return;

      navigator.clipboard.writeText(text).then(() => {
        const orig = el.textContent;
        el.textContent = 'Copied!';
        setTimeout(() => { el.textContent = orig; }, 1500);
      });
    });
  });
})();

/* ============================================================
   9. LAZY IMAGE LOADING (native)
   ============================================================ */
(function initLazyImages() {
  document.querySelectorAll('img[data-src]').forEach(img => {
    img.setAttribute('loading', 'lazy');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
          observer.unobserve(img);
        }
      });
    });
    observer.observe(img);
  });
})();

/* ============================================================
   10. MARQUEE PAUSE ON FOCUS (accessibility)
   ============================================================ */
(function initMarqueePause() {
  const tracks = document.querySelectorAll('.marquee-track');
  tracks.forEach(track => {
    track.addEventListener('focusin', () => {
      track.style.animationPlayState = 'paused';
    });
    track.addEventListener('focusout', () => {
      track.style.animationPlayState = 'running';
    });
  });
})();

/* ============================================================
   11. WHATSAPP FORM REDIRECT
   ============================================================ */
(function initWAForm() {
  const waForm = document.getElementById('waForm');
  if (!waForm) return;

  waForm.addEventListener('submit', function (e) {
    e.preventDefault();

    // Prevent execution if fields are empty (fallback validation)
    const name = document.getElementById('waName').value.trim();
    const company = document.getElementById('waCompany').value.trim();
    const message = document.getElementById('waMessage').value.trim();

    if (!name || !company || !message) return;

    // Construct the WhatsApp message format
    const targetNumber = '6285707497957';
    const waText = `Halo tim CV Berlian Artha Abadi,%0A%0APerkenalkan saya *${name}* dari *${company}*.%0A%0ASaya ingin berdiskusi mengenai kebutuhan berikut:%0A"${message}"%0A%0AMohon informasi lebih lanjut. Terima kasih.`;

    // Open WhatsApp URL
    window.open(`https://wa.me/${targetNumber}?text=${waText}`, '_blank');
  });
})();