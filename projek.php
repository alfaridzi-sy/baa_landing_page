<?php
$currentPage     = 'projek';
$pageTitle       = 'Projek & Klien — CV Berlian Artha Abadi';
$pageDescription = 'Daftar klien dan projek CV Berlian Artha Abadi dari instansi pemerintah, BUMN, dan perusahaan swasta terkemuka di Indonesia.';
$pageCanonical   = 'https://www.berlianarthaabadi.co.id/projek';
$pageOgTitle     = 'Projek & Klien — CV Berlian Artha Abadi';
$pageOgUrl       = 'https://www.berlianarthaabadi.co.id/projek';

require 'partials/head.php';
?>

<body>

<?php require 'partials/navbar.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="page-hero-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="page-hero-content" data-aos="fade-up">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span class="breadcrumb-sep" aria-hidden="true"><i class="fa-solid fa-chevron-right" style="font-size:.65rem;"></i></span>
          <span class="breadcrumb-current">Projek &amp; Klien</span>
        </nav>
        <h1 class="page-hero-title">Projek &amp; <span class="text-gold">Klien Kami</span></h1>
        <p class="page-hero-subtitle">
          Kepercayaan dari instansi pemerintah dan perusahaan swasta terkemuka adalah bukti nyata
          komitmen dan kualitas layanan kami.
        </p>
      </div>
    </div>
  </section>


  <!-- STATS ROW -->
  <section class="stats-section" aria-label="Statistik klien">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item" data-aos="zoom-in" data-aos-delay="0">
          <span class="stat-number" data-counter="12+">12+</span>
          <span class="stat-label">Klien Aktif</span>
        </div>
        <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
          <span class="stat-number" data-counter="2">2</span>
          <span class="stat-label">Sektor Utama</span>
        </div>
        <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
          <span class="stat-number" data-counter="3+">3+</span>
          <span class="stat-label">Tahun Pengalaman</span>
        </div>
        <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
          <span class="stat-number" data-counter="100%">100%</span>
          <span class="stat-label">Kepuasan Klien</span>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider" aria-hidden="true"></div>

  <!-- KLIEN PER SEKTOR -->
  <section class="section" id="klien">
    <div class="container">

      <div class="section-header" data-aos="fade-up">
        <span class="section-label">Portofolio Klien</span>
        <h2 class="section-title">Klien per <span>Sektor</span></h2>
        <p class="section-subtitle">
          Kami melayani dua sektor utama: instansi pemerintah &amp; BUMN, serta
          perusahaan swasta dan perkebunan.
        </p>
      </div>

      <div class="clients-sector" data-aos="fade-up">
        <div class="sector-label">
          <i class="fa-solid fa-landmark" aria-hidden="true"></i>
          Sektor 1 — Instansi Pemerintah &amp; BUMN
        </div>
        <div class="clients-grid-list">

          <div class="client-item" data-aos="fade-up" data-aos-delay="0">
            <div class="client-avatar"><i class="fa-solid fa-landmark" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">Kementerian Hukum dan HAM RI</p>
              <span class="client-sector-tag">Kemenkumham · Pemerintah Pusat</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="60">
            <div class="client-avatar"><i class="fa-solid fa-passport" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">Imigrasi Sumatera Utara – Aceh</p>
              <span class="client-sector-tag">Ditjen Imigrasi · Pemerintah</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="120">
            <div class="client-avatar"><i class="fa-solid fa-chart-bar" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">Badan Pusat Statistik (BPS)</p>
              <span class="client-sector-tag">UPT Tebing Tinggi · Pemerintah</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="180">
            <div class="client-avatar"><i class="fa-solid fa-ship" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">Pelindo (Indonesia Maritime Gateway)</p>
              <span class="client-sector-tag">BUMN · Kepelabuhanan</span>
            </div>
          </div>

        </div>
      </div>

      <div class="clients-sector" data-aos="fade-up">
        <div class="sector-label">
          <i class="fa-solid fa-industry" aria-hidden="true"></i>
          Sektor 2 — Perusahaan Swasta &amp; Perkebunan
        </div>
        <div class="clients-grid-list">

          <div class="client-item" data-aos="fade-up" data-aos-delay="0">
            <div class="client-avatar"><i class="fa-solid fa-leaf" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">Paya Pinang Group</p>
              <span class="client-sector-tag">Rubber &amp; Palm, Plantation and Mill</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="60">
            <div class="client-avatar"><i class="fa-solid fa-building" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">PT Betami</p>
              <span class="client-sector-tag">Perusahaan Swasta · Industri</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="120">
            <div class="client-avatar"><i class="fa-solid fa-building" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">PT Hana Cakra Indonesia</p>
              <span class="client-sector-tag">Perusahaan Swasta · Industri</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="180">
            <div class="client-avatar"><i class="fa-solid fa-seedling" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">PT Tunas Harapan Sawit</p>
              <span class="client-sector-tag">Perkebunan Sawit · Sumatera</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="0">
            <div class="client-avatar"><i class="fa-solid fa-seedling" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">PT Cinta Raja</p>
              <span class="client-sector-tag">Perkebunan · Industri</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="60">
            <div class="client-avatar"><i class="fa-solid fa-industry" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">PT Dharma Guna Wibawa (DGW)</p>
              <span class="client-sector-tag">Perusahaan Swasta · Industri</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="120">
            <div class="client-avatar"><i class="fa-solid fa-building" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">PT Mursi Jaya Mandiri</p>
              <span class="client-sector-tag">Perusahaan Swasta · Industri</span>
            </div>
          </div>

          <div class="client-item" data-aos="fade-up" data-aos-delay="180">
            <div class="client-avatar"><i class="fa-solid fa-building" aria-hidden="true"></i></div>
            <div>
              <p class="client-name">PT Purwaka Artha Danadyaksa</p>
              <span class="client-sector-tag">Perusahaan Swasta · Industri</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <div class="section-divider" aria-hidden="true"></div>

  <!-- LOGO GRID MOSAIC -->
  <section class="section section-alt" id="logo-grid">
    <div class="container">

      <div class="section-header" data-aos="fade-up">
        <span class="section-label">Seluruh Klien</span>
        <h2 class="section-title">Mitra yang <span>Mempercayai Kami</span></h2>
      </div>

      <div class="logo-mosaic">
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="0"><img src="/assets/images/clients/logo-kemenkumham.png" alt="Kemenkumham RI" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">Kemenkumham RI</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="40"><img src="/assets/images/clients/logo-imigrasi.png" alt="Imigrasi Sumut–Aceh" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">Imigrasi Sumut–Aceh</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="80"><img src="/assets/images/clients/logo-bps.png" alt="BPS Tebing Tinggi" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">BPS Tebing Tinggi</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="120"><img src="/assets/images/clients/logo-pelindo.png" alt="Pelindo" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">Pelindo</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="0"><img src="/assets/images/clients/logo-paya-pinang.png" alt="Paya Pinang Group" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">Paya Pinang Group</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="40"><img src="/assets/images/clients/Betami Logo.png" alt="PT Betami" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">PT Betami</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="80"><img src="/assets/images/clients/Hana Cakra Logo.png" alt="PT Hana Cakra Indonesia" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">PT Hana Cakra Indonesia</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="120"><img src="/assets/images/clients/Tunas Harapan Sawit Logo.png" alt="PT Tunas Harapan Sawit" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">PT Tunas Harapan Sawit</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="0"><img src="/assets/images/clients/Cinta Raja Logo.png" alt="PT Cinta Raja" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">PT Cinta Raja</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="40"><img src="/assets/images/clients/Dharma Guna Wibawa Logo (1).png" alt="PT Dharma Guna Wibawa" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">PT Dharma Guna Wibawa</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="80"><img src="/assets/images/clients/Mursi Jaya Mandiri Logo.png" alt="PT Mursi Jaya Mandiri" class="logo-mosaic-img" loading="lazy"><p class="logo-mosaic-name">PT Mursi Jaya Mandiri</p></div>
        <div class="logo-mosaic-item" data-aos="fade-up" data-aos-delay="120"><p class="logo-mosaic-name">PT Purwaka Artha Danadyaksa</p></div>
      </div>
    </div>
  </section>

  <div class="section-divider" aria-hidden="true"></div>

  <!-- CAKUPAN WILAYAH -->
  <section class="section" id="wilayah">
    <div class="container">

      <div class="section-header" data-aos="fade-up">
        <span class="section-label">Jangkauan Layanan</span>
        <h2 class="section-title">Melayani di <span>Seluruh Indonesia</span></h2>
        <p class="section-subtitle">
          Berpusat di Medan, Sumatera Utara, CV BAA telah melayani klien dari
          berbagai wilayah di Indonesia dengan komitmen pengiriman yang tepat waktu.
        </p>
      </div>

      <div class="grid-3" data-aos="fade-up" data-aos-delay="100">

        <div class="card">
          <div class="card-icon"><i class="fa-solid fa-map-location-dot" aria-hidden="true"></i></div>
          <h3 class="card-title">Sumatera Utara</h3>
          <p class="card-text">Basis operasional utama kami. Melayani klien di Medan, Tebing Tinggi, dan seluruh wilayah Sumatera Utara.</p>
        </div>

        <div class="card">
          <div class="card-icon"><i class="fa-solid fa-map-location-dot" aria-hidden="true"></i></div>
          <h3 class="card-title">Aceh &amp; Sumatera</h3>
          <p class="card-text">Melayani instansi dan perusahaan di wilayah Aceh serta wilayah Sumatera lainnya melalui jaringan distribusi yang andal.</p>
        </div>

        <div class="card">
          <div class="card-icon"><i class="fa-solid fa-globe" aria-hidden="true"></i></div>
          <h3 class="card-title">Seluruh Indonesia</h3>
          <p class="card-text">Dengan dukungan mitra logistik terpercaya, kami siap memenuhi kebutuhan pengadaan klien di seluruh wilayah Indonesia.</p>
        </div>

      </div>

      <div class="mt-48" data-aos="fade-up">
        <div style="background: var(--bg-secondary); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 48px; text-align: center; position: relative; overflow: hidden;">
          <div style="position: absolute; inset: 0; background: radial-gradient(ellipse 60% 60% at 35% 50%, rgba(201,168,76,0.06) 0%, transparent 60%);" aria-hidden="true"></div>
          <div style="position: relative; z-index:1;">
            <i class="fa-solid fa-map" style="font-size: 3rem; color: var(--gold); margin-bottom: 16px; display:block;" aria-hidden="true"></i>
            <h3 style="font-family: var(--font-heading); color: var(--text-primary); margin-bottom:8px;">Fokus Utama: Sumatera Utara &amp; Aceh</h3>
            <p style="color: var(--text-muted); font-size:.9375rem; max-width:500px; margin: 0 auto;">
              Kantor pusat kami berlokasi di Medan — titik strategis di jantung Sumatera,
              dengan akses mudah ke seluruh wilayah Sumut, Aceh, dan sekitarnya.
            </p>
            <div class="flex-center gap-16 mt-24">
              <div style="padding: 10px 20px; background: var(--gold-dim); border: 1px solid var(--border); border-radius: var(--border-radius); font-size:.875rem; color: var(--gold); font-weight:600;">
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i> Medan, Sumatera Utara
              </div>
              <div style="padding: 10px 20px; background: var(--gold-dim); border: 1px solid var(--border); border-radius: var(--border-radius); font-size:.875rem; color: var(--gold); font-weight:600;">
                <i class="fa-solid fa-truck-fast" aria-hidden="true"></i> Pengiriman ke Seluruh Indonesia
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="section-divider" aria-hidden="true"></div>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-section-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="cta-content" data-aos="fade-up">
        <span class="section-label">Bergabung Bersama Kami</span>
        <h2 class="cta-title mt-16">Bergabunglah bersama <span class="text-gold">Klien Terbaik Kami</span></h2>
        <p class="cta-subtitle mt-16">
          Diskusikan kebutuhan pengadaan Anda dengan tim kami dan dapatkan solusi
          terbaik yang disesuaikan dengan anggaran Anda.
        </p>
        <div class="btn-group flex-center mt-32">
          <a href="https://wa.me/6285707497957" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            Diskusikan Kebutuhan Anda
          </a>
          <a href="/kontak" class="btn btn-outline-light">Info Kontak Lengkap</a>
        </div>
      </div>
    </div>
  </section>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/scripts.php'; ?>
