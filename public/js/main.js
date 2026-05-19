/* ClearView Tree Services — main.js */

(function () {
  'use strict';

  // ── Navbar scroll effect ──────────────────────────────────────────
  const navbar = document.getElementById('navbar');

  function handleScroll() {
    if (window.scrollY > 60) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll(); // run once on load

  // ── Mobile menu toggle ────────────────────────────────────────────
  const navToggle = document.getElementById('nav-toggle');
  const navLinks  = document.getElementById('nav-links');

  function openMenu() {
    navLinks.classList.add('open');
    navToggle.classList.add('active');
    navbar.classList.add('menu-open');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    navLinks.classList.remove('open');
    navToggle.classList.remove('active');
    navbar.classList.remove('menu-open');
    document.body.style.overflow = '';
  }

  navToggle.addEventListener('click', function () {
    navLinks.classList.contains('open') ? closeMenu() : openMenu();
  });

  // Close menu when any nav link is clicked
  navLinks.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });

  // Close menu on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && navLinks.classList.contains('open')) closeMenu();
  });

  // ── Smooth scroll for anchor links ───────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const href   = this.getAttribute('href');
      const target = document.querySelector(href);
      if (!target) return;
      e.preventDefault();
      const isMenuOpen = navLinks.classList.contains('open');
      if (isMenuOpen) closeMenu();
      setTimeout(function () {
        const navHeight = navbar.offsetHeight;
        const top = target.getBoundingClientRect().top + window.scrollY - navHeight + 5;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }, isMenuOpen ? 50 : 0);
    });
  });

  // ── Scroll-triggered fade-up animations ──────────────────────────
  const fadeEls = document.querySelectorAll('.fade-up');

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target); // animate once
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );
    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    // Fallback: show all immediately in older browsers
    fadeEls.forEach(function (el) { el.classList.add('visible'); });
  }

  // ── Contact form submission ───────────────────────────────────────
  const contactForm = document.getElementById('contact-form');
  const formSuccess = document.getElementById('form-success');

  if (contactForm && formSuccess) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.textContent;

      // Disable + show loading state
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';

      // Simulate async submission (replace with real fetch/XHR as needed)
      setTimeout(function () {
        contactForm.style.display = 'none';
        formSuccess.classList.add('show');
        formSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }, 900);
    });
  }

  // ── Active nav link highlight on scroll ──────────────────────────
  const sections = document.querySelectorAll('section[id]');
  const navAnchors = document.querySelectorAll('.nav-links li a[href^="#"]');

  function setActiveLink() {
    let current = '';
    const scrollY = window.scrollY + navbar.offsetHeight + 20;

    sections.forEach(function (section) {
      if (section.offsetTop <= scrollY) {
        current = section.getAttribute('id');
      }
    });

    navAnchors.forEach(function (a) {
      a.style.fontWeight = '';
      if (a.getAttribute('href') === '#' + current) {
        a.style.fontWeight = '700';
      }
    });
  }

  window.addEventListener('scroll', setActiveLink, { passive: true });

})();
