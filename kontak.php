<?php
$currentPage     = 'kontak';
$pageTitle       = 'Kontak — CV Berlian Artha Abadi';
$pageDescription = 'Hubungi CV Berlian Artha Abadi untuk konsultasi pengadaan, penawaran produk, dan informasi kemitraan. WhatsApp, email, dan kunjungan langsung tersedia.';
$pageCanonical   = 'https://www.berlianarthaabadi.co.id/kontak';
$pageOgTitle     = 'Kontak — CV Berlian Artha Abadi';
$pageOgUrl       = 'https://www.berlianarthaabadi.co.id/kontak';

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
          <span class="breadcrumb-current">Kontak</span>
        </nav>
        <h1 class="page-hero-title">Hubungi <span class="text-gold">Kami</span></h1>
        <p class="page-hero-subtitle">
          Tim kami siap membantu Anda. Jangan ragu untuk menghubungi kami kapan saja —
          kami merespons dalam 1×24 jam.
        </p>
      </div>
    </div>
  </section>


  <!-- CONTACT MAIN -->
  <section class="section" id="kontak">
    <div class="container">
      <div class="contact-grid">

        <div data-aos="fade-right">
          <span class="section-label">Info Kontak</span>
          <h2 class="section-title mt-16 mb-32">
            Cara Menghubungi <span>Kami</span>
          </h2>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></div>
            <div>
              <p class="contact-info-label">Alamat Kantor</p>
              <p class="contact-info-value">
                Jalan Bangun Sari No. 91, Kelurahan Kedai Durian<br>
                Kecamatan Medan Johor, Kota Medan<br>
                Provinsi Sumatera Utara 20145
              </p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fa-solid fa-phone" aria-hidden="true"></i></div>
            <div>
              <p class="contact-info-label">Telepon / WhatsApp</p>
              <p class="contact-info-value">
                <a href="https://wa.me/6285707497957" target="_blank" rel="noopener noreferrer">+62 857-0749-7957</a><br>
                <a href="https://wa.me/6285296241692" target="_blank" rel="noopener noreferrer">+62 852-9624-1692</a><br>
                <a href="https://wa.me/6281364127992" target="_blank" rel="noopener noreferrer">+62 813-6412-7992</a>
              </p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fa-solid fa-envelope" aria-hidden="true"></i></div>
            <div>
              <p class="contact-info-label">Email</p>
              <p class="contact-info-value">
                <a href="mailto:arthaabadiberlian@gmail.com">arthaabadiberlian@gmail.com</a>
              </p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fa-solid fa-clock" aria-hidden="true"></i></div>
            <div>
              <p class="contact-info-label">Jam Operasional</p>
              <p class="contact-info-value">
                Senin – Jumat: 08.00 – 17.00 WIB<br>
                Sabtu: 08.00 – 13.00 WIB<br>
                <span style="color: var(--text-muted); font-size:.875rem;">Minggu &amp; Hari Libur: Tutup</span>
              </p>
            </div>
          </div>

          <div class="card mt-32" style="background: var(--gold-dim); border-color: var(--border);" data-aos="fade-up" data-aos-delay="100">
            <div style="display:flex; gap:12px; align-items:flex-start;">
              <i class="fa-solid fa-circle-info" style="color: var(--gold); margin-top:3px; flex-shrink:0;" aria-hidden="true"></i>
              <div>
                <p style="font-weight:700; color: var(--text-primary); font-family: var(--font-heading); font-size:.9375rem; margin-bottom:6px;">Untuk Penawaran Resmi &amp; Pengadaan</p>
                <p style="font-size:.875rem; color: var(--text-muted); line-height:1.6; margin-bottom:0;">
                  Silakan hubungi kami melalui WhatsApp atau email dengan menyertakan
                  detail kebutuhan Anda (jenis produk, kuantitas, lokasi pengiriman).
                  Tim kami akan merespons dalam 1×24 jam.
                </p>
              </div>
            </div>
          </div>

        </div>

        <div data-aos="fade-left" data-aos-delay="150">
          <div class="contact-cta-card">

            <span class="section-label">Hubungi Langsung</span>
            <h3 class="contact-cta-title mt-16">
              Siap Membantu <span class="text-gold">Anda</span>
            </h3>
            <p class="contact-cta-subtitle">
              Pilih cara tercepat untuk menghubungi tim kami. Kami selalu siap
              memberikan konsultasi dan penawaran terbaik untuk Anda.
            </p>

            <form id="waForm" class="contact-form mt-24">
              <div style="margin-bottom: 16px;">
                <label for="waName" style="display:block; font-size: 0.875rem; font-weight: 600; margin-bottom: 8px; color: var(--text-primary);">Nama Lengkap</label>
                <input type="text" id="waName" required
                  style="width: 100%; padding: 12px 16px; border: 1px solid var(--border); border-radius: var(--border-radius); background: var(--bg-primary);"
                  placeholder="Masukkan nama Anda">
              </div>
              <div style="margin-bottom: 16px;">
                <label for="waCompany" style="display:block; font-size: 0.875rem; font-weight: 600; margin-bottom: 8px; color: var(--text-primary);">Instansi / Perusahaan</label>
                <input type="text" id="waCompany" required
                  style="width: 100%; padding: 12px 16px; border: 1px solid var(--border); border-radius: var(--border-radius); background: var(--bg-primary);"
                  placeholder="Nama instansi Anda">
              </div>
              <div style="margin-bottom: 24px;">
                <label for="waMessage" style="display:block; font-size: 0.875rem; font-weight: 600; margin-bottom: 8px; color: var(--text-primary);">Detail Kebutuhan</label>
                <textarea id="waMessage" rows="4" required
                  style="width: 100%; padding: 12px 16px; border: 1px solid var(--border); border-radius: var(--border-radius); background: var(--bg-primary); resize: vertical;"
                  placeholder="Jelaskan produk atau layanan yang Anda butuhkan..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Kirim Pesan via WhatsApp
              </button>
            </form>

            <div class="contact-note">
              <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
              <span>Untuk penawaran resmi dan pengadaan, silakan hubungi kami melalui WhatsApp atau email. Tim kami akan merespons dalam 1×24 jam.</span>
            </div>

            <div style="margin-top: 28px; padding-top: 24px; border-top: 1px solid var(--border);">
              <p style="font-size:.75rem; font-weight:700; color: var(--text-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:12px;">Nomor Alternatif</p>
              <div style="display:flex; flex-direction:column; gap:8px;">
                <a href="https://wa.me/6285296241692" target="_blank" rel="noopener noreferrer"
                  style="display:flex; align-items:center; gap:10px; padding: 10px 14px; background: rgba(255,255,255,0.03); border: 1px solid var(--border); border-radius: var(--border-radius); font-size:.875rem; color: var(--text-secondary); transition: all var(--transition-base);"
                  onmouseover="this.style.borderColor='var(--border-hover)'; this.style.color='var(--gold)'"
                  onmouseout="this.style.borderColor='var(--border)'; this.style.color='var(--text-secondary)'">
                  <i class="fa-brands fa-whatsapp" style="color: var(--gold);" aria-hidden="true"></i>
                  +62 852-9624-1692
                </a>
                <a href="https://wa.me/6281364127992" target="_blank" rel="noopener noreferrer"
                  style="display:flex; align-items:center; gap:10px; padding: 10px 14px; background: rgba(255,255,255,0.03); border: 1px solid var(--border); border-radius: var(--border-radius); font-size:.875rem; color: var(--text-secondary); transition: all var(--transition-base);"
                  onmouseover="this.style.borderColor='var(--border-hover)'; this.style.color='var(--gold)'"
                  onmouseout="this.style.borderColor='var(--border)'; this.style.color='var(--text-secondary)'">
                  <i class="fa-brands fa-whatsapp" style="color: var(--gold);" aria-hidden="true"></i>
                  +62 813-6412-7992
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <div class="section-divider" aria-hidden="true"></div>

  <!-- GOOGLE MAPS -->
  <section class="section section-alt" id="lokasi">
    <div class="container">

      <div class="section-header" data-aos="fade-up">
        <span class="section-label">Lokasi Kami</span>
        <h2 class="section-title">Temukan <span>Kami di Sini</span></h2>
        <p class="section-subtitle">
          Jl. Bangun Sari No. 91, Kelurahan Kedai Durian, Kecamatan Medan Johor,
          Kota Medan, Sumatera Utara 20145
        </p>
      </div>

      <div class="map-area" data-aos="fade-up" data-aos-delay="100">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.4!2d98.6722!3d3.5596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMzMnMzQuNiJOIDk4wrA0MCcxOS45IkU!5e0!3m2!1sid!2sid!4v1700000000000"
          title="Lokasi CV Berlian Artha Abadi di Medan" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div class="text-center mt-32" data-aos="fade-up">
        <a href="https://maps.google.com/?q=Jl.+Bangun+Sari+No.+91+Medan+Johor+Medan" target="_blank"
          rel="noopener noreferrer" class="btn btn-outline">
          <i class="fa-solid fa-diamond-turn-right" aria-hidden="true"></i>
          Buka di Google Maps
        </a>
      </div>

    </div>
  </section>

  <div class="section-divider" aria-hidden="true"></div>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-section-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="cta-content" data-aos="fade-up">
        <span class="section-label">Mulai Sekarang</span>
        <h2 class="cta-title mt-16">Jangan Ragu untuk <span class="text-gold">Menghubungi Kami</span></h2>
        <p class="cta-subtitle mt-16">
          Tim profesional kami siap memberikan konsultasi dan penawaran terbaik
          untuk kebutuhan pengadaan Anda.
        </p>
        <div class="btn-group flex-center mt-32">
          <a href="https://wa.me/6285707497957" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            Mulai Chat Sekarang
          </a>
          <a href="/produk" class="btn btn-outline-light">
            Lihat Produk Kami
          </a>
        </div>
      </div>
    </div>
  </section>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/scripts.php'; ?>
