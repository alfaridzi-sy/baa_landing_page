<?php
$nc = isset($navbarClass) ? ' ' . $navbarClass : '';
$active = fn($p) => ($currentPage ?? '') === $p ? ' active' : '';
?>
<header class="navbar<?= $nc ?>" role="banner">
  <div class="container">
    <div class="navbar-inner">

      <a href="/" class="navbar-logo" aria-label="CV Berlian Artha Abadi — Beranda">
        <div class="logo-icon" aria-hidden="true" style="background: transparent; border: none;">
          <img src="/assets/images/logo-icon.svg" alt="Ikon CV BAA" width="40" height="40"
            style="width: 100%; height: 100%;">
        </div>
        <div class="logo-text">
          <span class="logo-title" style="font-size: 1.1rem;">CV Berlian Artha Abadi</span>
          <span class="logo-subtitle" style="letter-spacing: 0.05em;">General Consumer &amp; IT Consultant</span>
        </div>
      </a>

      <nav role="navigation" aria-label="Menu utama desktop">
        <ul class="navbar-nav" role="list">
          <li><a href="/" class="nav-link<?= $active('') ?>" data-page="">Home</a></li>
          <li><a href="/produk" class="nav-link<?= $active('produk') ?>" data-page="produk">Produk</a></li>
          <li><a href="/tentang" class="nav-link<?= $active('tentang') ?>" data-page="tentang">Tentang Kami</a></li>
          <li><a href="/projek" class="nav-link<?= $active('projek') ?>" data-page="projek">Projek</a></li>
          <li><a href="/kontak" class="nav-link<?= $active('kontak') ?>" data-page="kontak">Kontak</a></li>
        </ul>
      </nav>

      <div class="navbar-cta">
        <a href="https://wa.me/6285707497957" class="btn-whatsapp" target="_blank" rel="noopener noreferrer"
          aria-label="Hubungi via WhatsApp">
          <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp
        </a>
        <button class="hamburger" aria-label="Buka menu navigasi mobile" aria-expanded="false"
          aria-controls="mobile-nav">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

    </div>
  </div>
</header>

<div class="mobile-nav" id="mobile-nav" role="dialog" aria-label="Menu navigasi mobile">
  <nav>
    <ul role="list">
      <li><a href="/" class="nav-link<?= $active('') ?>" data-page="">Home</a></li>
      <li><a href="/produk" class="nav-link<?= $active('produk') ?>" data-page="produk">Produk</a></li>
      <li><a href="/tentang" class="nav-link<?= $active('tentang') ?>" data-page="tentang">Tentang Kami</a></li>
      <li><a href="/projek" class="nav-link<?= $active('projek') ?>" data-page="projek">Projek</a></li>
      <li><a href="/kontak" class="nav-link<?= $active('kontak') ?>" data-page="kontak">Kontak</a></li>
    </ul>
  </nav>
  <div class="mobile-nav-cta">
    <a href="https://wa.me/6285707497957" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
      <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Hubungi via WhatsApp
    </a>
  </div>
</div>
