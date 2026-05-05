<?php
$currentPage    = '';
$navbarClass    = 'navbar-transparent-top';
$pageTitle      = 'CV Berlian Artha Abadi — General Consumer & IT Consultant';
$pageDescription = 'CV Berlian Artha Abadi adalah mitra terpercaya dalam bidang General Consumer dan IT Consultant — pengadaan barang & solusi teknologi untuk instansi pemerintah dan perusahaan swasta.';
$pageCanonical  = 'https://www.berlianarthaabadi.co.id/';
$pageOgTitle    = 'CV Berlian Artha Abadi — Solusi Terpadu Pengadaan & IT';
$pageOgUrl      = 'https://www.berlianarthaabadi.co.id/';
$pageOgImage    = 'https://www.berlianarthaabadi.co.id/assets/images/logo-badge.svg';
$preloadImages  = ['/assets/images/hero-main.svg', '/assets/images/hero-float.svg'];
$extraHead      = <<<'EOT'
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "CV Berlian Artha Abadi",
    "image": "https://www.berlianarthaabadi.co.id/assets/images/logo-icon.svg",
    "@id": "https://www.berlianarthaabadi.co.id/",
    "url": "https://www.berlianarthaabadi.co.id/",
    "telephone": "+6285707497957",
    "email": "arthaabadiberlian@gmail.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl. Bangun Sari No. 91, Kelurahan Kedai Durian, Kecamatan Medan Johor",
      "addressLocality": "Medan",
      "addressRegion": "Sumatera Utara",
      "postalCode": "20145",
      "addressCountry": "ID"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 3.5596,
      "longitude": 98.6722
    },
    "foundingDate": "2022-03-30",
    "description": "Perusahaan penyedia pengadaan barang industri (General Consumer) dan IT Consultant terpercaya di Medan, Sumatera Utara.",
    "priceRange": "$$"
  }
  </script>
EOT;

require 'partials/head.php';
?>

<body>

<?php require 'partials/navbar.php'; ?>

  <main>
    <!-- ============================================================
       HERO SECTION
       ============================================================ -->
    <section class="hero" id="hero">
      <div class="hero-bg" aria-hidden="true"></div>
      <div class="hero-geo" aria-hidden="true">
        <div class="hero-geo-line"></div>
      </div>

      <div class="container">
        <div class="hero-inner">
          <div class="hero-content" data-aos="fade-right" data-aos-duration="800">
            <div class="hero-tag">Terdaftar di E-Catalogue LKPP</div>
            <h1 class="hero-title">
              Solusi Terpadu<br>
              <span class="highlight">General Consumer</span><br>
              &amp; <span class="highlight">IT Consultant</span>
            </h1>
            <p class="hero-subtitle">
              CV Berlian Artha Abadi hadir sebagai mitra pengadaan barang industri
              dan konsultasi teknologi informasi yang handal, bersertifikasi, dan
              dipercaya oleh berbagai instansi di Indonesia.
            </p>
            <div class="btn-group" data-aos="fade-up" data-aos-delay="200">
              <a href="/produk" class="btn btn-primary">
                <i class="fa-solid fa-boxes-stacked" aria-hidden="true"></i> Lihat Produk
              </a>
              <a href="/kontak" class="btn btn-outline-light">Konsultasi Gratis</a>
            </div>
            <div class="hero-badges" data-aos="fade-up" data-aos-delay="350">
              <span class="hero-badge-label">Terdaftar di</span>
              <div class="hero-badge-divider" aria-hidden="true"></div>
              <div class="trust-badges-row flex gap-8">
                <div class="trust-badge"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i> LKPP</div>
                <div class="trust-badge"><i class="fa-solid fa-store" aria-hidden="true"></i> PaDi UMKM</div>
              </div>
            </div>
          </div>

          <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000">
            <img src="/assets/images/hero-main.svg" alt="Ilustrasi Pengadaan Industri Terpadu" class="hero-img-main"
              fetchpriority="high">
            <img src="/assets/images/hero-float.svg" alt="Ilustrasi Solusi IT Consultant" class="hero-img-float"
              fetchpriority="high">
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       STATS / COUNTER SECTION
       ============================================================ -->
    <section class="stats-section" aria-label="Statistik perusahaan">
      <div class="container">
        <div class="stats-grid">

          <div class="stat-item" data-aos="zoom-in" data-aos-delay="0">
            <span class="stat-number" data-counter="50+" aria-label="Lebih dari 50 mitra dan klien">0</span>
            <span class="stat-label">Mitra &amp; Klien</span>
          </div>

          <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
            <span class="stat-number" data-counter="2" aria-label="2 fokus bisnis utama">0</span>
            <span class="stat-label">Fokus Bisnis Utama</span>
          </div>

          <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
            <span class="stat-number" data-counter="3+" aria-label="Lebih dari 3 tahun beroperasi">0</span>
            <span class="stat-label">Tahun Beroperasi</span>
          </div>

          <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
            <span class="stat-number" data-counter="100%" aria-label="100 persen legalitas terpenuhi">0</span>
            <span class="stat-label">Legalitas Terpenuhi</span>
          </div>

        </div>
      </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- ============================================================
       LAYANAN UNGGULAN
       ============================================================ -->
    <section class="section" id="layanan">
      <div class="container">

        <div class="section-header" data-aos="fade-up">
          <span class="section-label">Dua Pilar Bisnis Kami</span>
          <h2 class="section-title">Apa yang Kami <span>Tawarkan</span></h2>
          <p class="section-subtitle">
            Dua fokus bisnis utama yang saling melengkapi untuk memenuhi kebutuhan
            pengadaan barang dan teknologi informasi Anda secara menyeluruh.
          </p>
        </div>

        <div class="services-grid">

          <article class="service-card" data-aos="fade-up" data-aos-delay="0">
            <div class="service-number" aria-hidden="true">01</div>
            <div class="card-icon">
              <i class="fa-solid fa-boxes-stacked" aria-hidden="true"></i>
            </div>
            <h3 class="card-title">General Consumer</h3>
            <p class="card-text">
              Pengadaan barang kebutuhan industri dan perkantoran secara menyeluruh —
              spare part, chemical, furniture, elektronik, seragam, hingga komoditas agribisnis.
            </p>
          </article>

          <article class="service-card" data-aos="fade-up" data-aos-delay="100">
            <div class="service-number" aria-hidden="true">02</div>
            <div class="card-icon">
              <i class="fa-solid fa-laptop-code" aria-hidden="true"></i>
            </div>
            <h3 class="card-title">IT Consultant</h3>
            <p class="card-text">
              Konsultasi teknologi informasi komprehensif — pengembangan software,
              infrastruktur IT, integrasi sistem, dan pendampingan transformasi digital bisnis Anda.
            </p>
          </article>

          <article class="service-card" data-aos="fade-up" data-aos-delay="200">
            <div class="service-number" aria-hidden="true">03</div>
            <div class="card-icon">
              <i class="fa-solid fa-landmark" aria-hidden="true"></i>
            </div>
            <h3 class="card-title">Pengadaan Pemerintah</h3>
            <p class="card-text">
              Terdaftar di E-Catalogue LKPP dan PaDi UMKM — memudahkan
              instansi pemerintah dan BUMN dalam proses pengadaan barang maupun jasa IT.
            </p>
          </article>

          <article class="service-card" data-aos="fade-up" data-aos-delay="300">
            <div class="service-number" aria-hidden="true">04</div>
            <div class="card-icon">
              <i class="fa-solid fa-server" aria-hidden="true"></i>
            </div>
            <h3 class="card-title">IT Infrastructure</h3>
            <p class="card-text">
              Pengadaan perangkat keras bersertifikasi TKDN — server, jaringan,
              komputer, dan peralatan teknologi kantor yang siap pakai sesuai standar pengadaan nasional.
            </p>
          </article>

        </div>

        <!-- IoT Trainer Kit Callout -->
        <div data-aos="fade-up" data-aos-delay="150" style="
          margin-top: 32px;
          background: var(--gold-dim);
          border: 1px solid rgba(201,168,76,0.25);
          border-left: 3px solid var(--gold);
          border-radius: var(--card-radius);
          padding: 20px 28px;
          display: flex;
          align-items: center;
          gap: 20px;
          flex-wrap: wrap;
        ">
          <div style="
            width: 44px; height: 44px; flex-shrink: 0;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
          ">
            <i class="fa-solid fa-microchip" style="color: var(--gold); font-size: 1.1rem;" aria-hidden="true"></i>
          </div>
          <div style="flex: 1; min-width: 220px;">
            <div style="font-size: 0.65rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--gold); margin-bottom: 3px;">Produk Terbaru</div>
            <h4 style="font-family: var(--font-heading); color: var(--text-primary); margin: 0 0 3px; font-size: 0.9375rem; font-weight: 700;">IoT Trainer Kit</h4>
            <p style="color: var(--text-muted); font-size: 0.8125rem; margin: 0; line-height: 1.5;">
              Kit pelatihan IoT berbasis NodeMCU &amp; Arduino — modul sensor, aktuator, dan mikrokontroler siap pakai sebagai bahan ajar di kelas.
            </p>
          </div>
          <a href="https://iot.berliantech.id" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer" style="flex-shrink: 0; white-space: nowrap;">
            Lihat Detail <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>

        <div class="text-center mt-48" data-aos="fade-up" data-aos-delay="100">
          <a href="/produk" class="btn btn-outline">
            Lihat Semua Produk &amp; Layanan
            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>

      </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- ============================================================
       KENAPA BERMITRA DENGAN KAMI
       ============================================================ -->
    <section class="section section-alt" id="keunggulan">
      <div class="container">

        <div class="section-header" data-aos="fade-up">
          <span class="section-label">Keunggulan Kami</span>
          <h2 class="section-title">Kenapa Bermitra <span>Dengan Kami?</span></h2>
          <p class="section-subtitle">
            Satu mitra, dua keahlian. Kami menggabungkan kekuatan pengadaan barang
            dan solusi IT dalam satu hubungan kemitraan yang andal.
          </p>
        </div>

        <div class="why-grid">

          <div class="why-item" data-aos="fade-up" data-aos-delay="0">
            <div class="why-check"><i class="fa-solid fa-check" aria-hidden="true"></i></div>
            <div class="why-text">
              <strong>Satu Mitra, Dua Keahlian</strong>
              <span>General Consumer dan IT Consultant dalam satu perusahaan yang terintegrasi.</span>
            </div>
          </div>

          <div class="why-item" data-aos="fade-up" data-aos-delay="80">
            <div class="why-check"><i class="fa-solid fa-check" aria-hidden="true"></i></div>
            <div class="why-text">
              <strong>Tim IT Profesional &amp; Bersertifikat</strong>
              <span>Konsultan IT berpengalaman siap merancang solusi teknologi yang tepat sasaran.</span>
            </div>
          </div>

          <div class="why-item" data-aos="fade-up" data-aos-delay="160">
            <div class="why-check"><i class="fa-solid fa-check" aria-hidden="true"></i></div>
            <div class="why-text">
              <strong>Produk Berstandar Kualitas Tinggi</strong>
              <span>Seluruh barang melewati seleksi ketat dari pemasok terpercaya.</span>
            </div>
          </div>

          <div class="why-item" data-aos="fade-up" data-aos-delay="0">
            <div class="why-check"><i class="fa-solid fa-check" aria-hidden="true"></i></div>
            <div class="why-text">
              <strong>Terdaftar LKPP &amp; PaDi UMKM</strong>
              <span>Proses pengadaan pemerintah lebih mudah, aman, dan sesuai regulasi.</span>
            </div>
          </div>

          <div class="why-item" data-aos="fade-up" data-aos-delay="80">
            <div class="why-check"><i class="fa-solid fa-check" aria-hidden="true"></i></div>
            <div class="why-text">
              <strong>Solusi End-to-End</strong>
              <span>Dari pengadaan barang hingga implementasi sistem IT — semua kami tangani.</span>
            </div>
          </div>

          <div class="why-item" data-aos="fade-up" data-aos-delay="160">
            <div class="why-check"><i class="fa-solid fa-check" aria-hidden="true"></i></div>
            <div class="why-text">
              <strong>Support &amp; Purna Jual Responsif</strong>
              <span>Dukungan teknis dan after-sales yang sigap, baik untuk produk maupun sistem IT.</span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- ============================================================
       KLIEN KAMI — MARQUEE
       ============================================================ -->
    <section class="clients-section" id="klien">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="section-label">Klien Kami</span>
          <h2 class="section-title">Dipercaya oleh Instansi &amp; <span>Perusahaan Terkemuka</span></h2>
        </div>
      </div>

      <div class="marquee-wrapper" aria-label="Daftar klien CV BAA" role="region">
        <div class="marquee-track" aria-hidden="true">
          <!-- Set 1 -->
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-kemenkumham.png" alt="Kemenkumham RI" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-imigrasi.png" alt="Imigrasi Sumut–Aceh" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-bps.png" alt="BPS Tebing Tinggi" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-pelindo.png" alt="Pelindo" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-paya-pinang.png" alt="Paya Pinang Group" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Betami Logo.png" alt="PT Betami" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Hana Cakra Logo.png" alt="PT Hana Cakra Indonesia" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Tunas Harapan Sawit Logo.png" alt="PT Tunas Harapan Sawit" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Cinta Raja Logo.png" alt="PT Cinta Raja" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Dharma Guna Wibawa Logo (1).png" alt="PT Dharma Guna Wibawa" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Mursi Jaya Mandiri Logo.png" alt="PT Mursi Jaya Mandiri" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><span class="client-logo-name">PT Purwaka Artha Danadyaksa</span></div></div>
          <!-- Set 2 (duplicate for seamless loop) -->
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-kemenkumham.png" alt="Kemenkumham RI" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-imigrasi.png" alt="Imigrasi Sumut–Aceh" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-bps.png" alt="BPS Tebing Tinggi" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-pelindo.png" alt="Pelindo" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/logo-paya-pinang.png" alt="Paya Pinang Group" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Betami Logo.png" alt="PT Betami" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Hana Cakra Logo.png" alt="PT Hana Cakra Indonesia" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Tunas Harapan Sawit Logo.png" alt="PT Tunas Harapan Sawit" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Cinta Raja Logo.png" alt="PT Cinta Raja" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Dharma Guna Wibawa Logo (1).png" alt="PT Dharma Guna Wibawa" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><img src="/assets/images/clients/Mursi Jaya Mandiri Logo.png" alt="PT Mursi Jaya Mandiri" class="marquee-logo" loading="lazy"></div></div>
          <div class="client-logo-item"><div class="client-logo-box"><span class="client-logo-name">PT Purwaka Artha Danadyaksa</span></div></div>
        </div>
      </div>

      <div class="container mt-32 text-center" data-aos="fade-up">
        <a href="/projek" class="btn btn-outline btn-sm">
          Lihat Semua Klien
          <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- ============================================================
       CTA SECTION
       ============================================================ -->
    <section class="cta-section" id="cta">
      <div class="cta-section-bg" aria-hidden="true"></div>
      <div class="container">
        <div class="cta-content" data-aos="fade-up">
          <span class="section-label">Mulai Kemitraan</span>
          <h2 class="cta-title mt-16">Siap Bermitra <span class="text-gold">Bersama Kami?</span></h2>
          <p class="cta-subtitle mt-16">
            Hubungi tim kami sekarang dan dapatkan penawaran terbaik
            untuk kebutuhan pengadaan Anda.
          </p>
          <div class="btn-group flex-center mt-32">
            <a href="https://wa.me/6285707497957" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
              Hubungi via WhatsApp
            </a>
            <a href="/kontak" class="btn btn-outline-light">
              Lihat Kontak Kami
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/scripts.php'; ?>
