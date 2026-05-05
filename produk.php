<?php
$currentPage     = 'produk';
$pageTitle       = 'Produk & Layanan — CV Berlian Artha Abadi';
$pageDescription = 'Produk dan layanan CV Berlian Artha Abadi: General Consumer (pengadaan barang industri & perkantoran) dan IT Consultant (software, infrastruktur IT, system integration).';
$pageCanonical   = 'https://www.berlianarthaabadi.co.id/produk';
$pageOgTitle     = 'Produk & Layanan — CV Berlian Artha Abadi';
$pageOgUrl       = 'https://www.berlianarthaabadi.co.id/produk';

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
          <span class="breadcrumb-current">Produk &amp; Layanan</span>
        </nav>
        <h1 class="page-hero-title">Produk &amp; <span class="text-gold">Layanan Kami</span></h1>
        <p class="page-hero-subtitle">
          Dua fokus utama dalam satu mitra: <strong>General Consumer</strong> untuk pengadaan
          barang industri &amp; perkantoran, dan <strong>IT Consultant</strong> untuk solusi
          teknologi informasi yang komprehensif.
        </p>
      </div>
    </div>
  </section>


  <!-- PRODUCT SECTION -->
  <section class="section" id="produk">
    <div class="container">

      <div class="product-filters" role="group" aria-label="Filter kategori produk" data-aos="fade-up">
        <button class="filter-btn active" data-filter="semua">Semua</button>
        <button class="filter-btn" data-filter="general-consumer">General Consumer</button>
        <button class="filter-btn" data-filter="it-consultant">IT Consultant</button>
      </div>

      <div class="products-grid">

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="0">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-industrial.svg'); background-size: cover; background-position: center;" role="img" aria-label="Peralatan Industri">
            <i class="fa-solid fa-gear" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Peralatan Industri (Spare Part)</h3>
            <p class="product-card-desc">Kami menyediakan berbagai komponen dan suku cadang industri berkualitas tinggi dari pemasok terpercaya, mencakup spare part mesin produksi, komponen mekanikal, dan berbagai kebutuhan pemeliharaan fasilitas industri.</p>
            <div class="product-tags">
              <span class="product-tag">#SparePartMesin</span>
              <span class="product-tag">#KomponenMekanikal</span>
              <span class="product-tag">#Maintenance</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="80">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-chemical.svg'); background-size: cover; background-position: center;" role="img" aria-label="Chemical Industri">
            <i class="fa-solid fa-flask" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Chemical Industri</h3>
            <p class="product-card-desc">Penyediaan bahan kimia industri berstandar untuk kebutuhan proses produksi, perawatan mesin, dan sanitasi fasilitas industri. Seluruh produk kimia kami memenuhi standar keamanan dan regulasi yang berlaku.</p>
            <div class="product-tags">
              <span class="product-tag">#KimiaIndustri</span>
              <span class="product-tag">#Cleaning</span>
              <span class="product-tag">#Sanitasi</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="160">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-industrial.svg'); background-size: cover; background-position: center;" role="img" aria-label="Oil dan Lubricant">
            <i class="fa-solid fa-oil-can" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Oil, Lubricant &amp; Chassis Grease</h3>
            <p class="product-card-desc">Pelumas dan grease berkualitas tinggi untuk memastikan kelancaran operasional mesin dan peralatan industri. Tersedia berbagai viskositas dan spesifikasi sesuai kebutuhan mesin Anda.</p>
            <div class="product-tags">
              <span class="product-tag">#Pelumas</span>
              <span class="product-tag">#Lubricant</span>
              <span class="product-tag">#Grease</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="0">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-industrial.svg'); background-size: cover; background-position: center;" role="img" aria-label="Hydraulic dan Pressure">
            <i class="fa-solid fa-gauge-high" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Hydraulic, Pressure &amp; Temperature</h3>
            <p class="product-card-desc">Peralatan dan komponen sistem hidrolik, pengukur tekanan, dan temperatur untuk kebutuhan monitoring dan kontrol proses industri. Produk kami memastikan keakuratan dan keandalan sistem operasional.</p>
            <div class="product-tags">
              <span class="product-tag">#Hydraulic</span>
              <span class="product-tag">#Pressure</span>
              <span class="product-tag">#Sensor</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="80">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-chemical.svg'); background-size: cover; background-position: center;" role="img" aria-label="Pupuk Fertilizer">
            <i class="fa-solid fa-seedling" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Fertilizer (Pupuk)</h3>
            <p class="product-card-desc">Penyediaan pupuk berkualitas untuk kebutuhan perkebunan dan pertanian skala industri. Kami bermitra dengan produsen pupuk terpercaya untuk memastikan kualitas dan ketersediaan pasokan yang konsisten.</p>
            <div class="product-tags">
              <span class="product-tag">#Pupuk</span>
              <span class="product-tag">#Perkebunan</span>
              <span class="product-tag">#Agribisnis</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="160">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-chemical.svg'); background-size: cover; background-position: center;" role="img" aria-label="Cangkang Sawit">
            <i class="fa-solid fa-leaf" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Cangkang Sawit</h3>
            <p class="product-card-desc">Suplier cangkang sawit berkualitas tinggi untuk kebutuhan bioenergi, bahan bakar biomassa, pupuk organik, dan bahan baku industri. Pasokan kami terjamin konsisten dengan kualitas yang terstandarisasi.</p>
            <div class="product-tags">
              <span class="product-tag">#CangkangSawit</span>
              <span class="product-tag">#Biomassa</span>
              <span class="product-tag">#Bioenergi</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="0">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-office.svg'); background-size: cover; background-position: center;" role="img" aria-label="Furniture Kantor">
            <i class="fa-solid fa-couch" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Furniture</h3>
            <p class="product-card-desc">Furnitur kantor ergonomis dan profesional untuk menciptakan lingkungan kerja yang produktif dan representatif. Tersedia dalam berbagai pilihan material dan desain, mulai dari meja kerja, kursi ergonomis, hingga sistem penyimpanan.</p>
            <div class="product-tags">
              <span class="product-tag">#FurniturKantor</span>
              <span class="product-tag">#Ergonomis</span>
              <span class="product-tag">#Interior</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="80">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-office.svg'); background-size: cover; background-position: center;" role="img" aria-label="Perlengkapan Kantor">
            <i class="fa-solid fa-print" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Perlengkapan Kantor</h3>
            <p class="product-card-desc">Solusi lengkap kebutuhan operasional kantor: dari peralatan cetak, mesin fotokopi, sistem kearsipan, hingga perlengkapan presentasi. Kami memastikan ketersediaan stok yang konsisten untuk mendukung produktivitas tim Anda.</p>
            <div class="product-tags">
              <span class="product-tag">#ATK</span>
              <span class="product-tag">#PeralatanKantor</span>
              <span class="product-tag">#OfficeSupply</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="160">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-office.svg'); background-size: cover; background-position: center;" role="img" aria-label="Peralatan Elektronik TKDN">
            <i class="fa-solid fa-laptop" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Peralatan Elektronik TKDN</h3>
            <p class="product-card-desc">Perangkat elektronik bersertifikasi TKDN (Tingkat Komponen Dalam Negeri) untuk memenuhi persyaratan pengadaan pemerintah. Mencakup laptop, komputer, printer, dan perangkat elektronik kantor lainnya.</p>
            <div class="product-tags">
              <span class="product-tag">#TKDN</span>
              <span class="product-tag">#Elektronik</span>
              <span class="product-tag">#Komputer</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="general-consumer" data-aos="fade-up" data-aos-delay="0">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-office.svg'); background-size: cover; background-position: center;" role="img" aria-label="Seragam Kerja">
            <i class="fa-solid fa-shirt" style="font-size:3rem; color: var(--gold); position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat"><span class="badge badge-gold">General Consumer</span></div>
            <h3 class="product-card-title">Seragam Kerja</h3>
            <p class="product-card-desc">Penyediaan seragam kerja profesional dan APD (Alat Pelindung Diri) untuk kebutuhan perusahaan dan instansi. Tersedia berbagai jenis seragam lapangan, kantor, dan pakaian keselamatan kerja sesuai standar K3.</p>
            <div class="product-tags">
              <span class="product-tag">#Seragam</span>
              <span class="product-tag">#APD</span>
              <span class="product-tag">#K3</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="it-consultant" data-aos="fade-up" data-aos-delay="0">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-it.svg'); background-size: cover; background-position: center;" role="img" aria-label="IT Consulting dan Advisory">
            <i class="fa-solid fa-lightbulb" style="font-size:3rem; color: #2B5BA8; position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat">
              <span class="badge" style="background: rgba(43,91,168,0.10); color: #2B5BA8; border-color: rgba(43,91,168,0.25);">IT Consultant</span>
            </div>
            <h3 class="product-card-title">IT Consulting &amp; Advisory</h3>
            <p class="product-card-desc">Konsultasi teknologi informasi strategis untuk membantu bisnis Anda merancang roadmap digital yang tepat. Kami menganalisis kebutuhan, mengidentifikasi celah sistem, dan merekomendasikan solusi IT terbaik sesuai skala dan anggaran organisasi Anda.</p>
            <div class="product-tags">
              <span class="product-tag">#ITStrategy</span>
              <span class="product-tag">#DigitalRoadmap</span>
              <span class="product-tag">#Advisory</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="it-consultant" data-aos="fade-up" data-aos-delay="80">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-it.svg'); background-size: cover; background-position: center;" role="img" aria-label="Custom Software Development">
            <i class="fa-solid fa-code" style="font-size:3rem; color: #2B5BA8; position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat">
              <span class="badge" style="background: rgba(43,91,168,0.10); color: #2B5BA8; border-color: rgba(43,91,168,0.25);">IT Consultant</span>
            </div>
            <h3 class="product-card-title">Custom Software Development</h3>
            <p class="product-card-desc">Pengembangan aplikasi dan perangkat lunak yang dirancang khusus sesuai kebutuhan operasional bisnis Anda. Mulai dari aplikasi web, mobile app, sistem manajemen internal (ERP/HRIS/CRM), hingga dashboard analitik yang efisien dan scalable.</p>
            <div class="product-tags">
              <span class="product-tag">#WebApp</span>
              <span class="product-tag">#MobileApp</span>
              <span class="product-tag">#ERP</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="it-consultant" data-aos="fade-up" data-aos-delay="160">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-it.svg'); background-size: cover; background-position: center;" role="img" aria-label="IT Infrastructure dan Procurement">
            <i class="fa-solid fa-server" style="font-size:3rem; color: #2B5BA8; position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat">
              <span class="badge" style="background: rgba(43,91,168,0.10); color: #2B5BA8; border-color: rgba(43,91,168,0.25);">IT Consultant</span>
            </div>
            <h3 class="product-card-title">IT Infrastructure &amp; Procurement</h3>
            <p class="product-card-desc">Pengadaan dan instalasi infrastruktur teknologi bersertifikasi TKDN — server, perangkat jaringan (LAN/WAN/WiFi), storage, komputer, dan peralatan IT kantor. Sesuai persyaratan pengadaan pemerintah dan swasta.</p>
            <div class="product-tags">
              <span class="product-tag">#Server</span>
              <span class="product-tag">#Networking</span>
              <span class="product-tag">#TKDN</span>
            </div>
          </div>
        </article>

        <article class="product-card" data-category="it-consultant" data-aos="fade-up" data-aos-delay="0">
          <div class="product-card-img" style="background-image: url('/assets/images/bg-it.svg'); background-size: cover; background-position: center;" role="img" aria-label="System Integration dan Support">
            <i class="fa-solid fa-diagram-project" style="font-size:3rem; color: #2B5BA8; position:relative; z-index:1;" aria-hidden="true"></i>
          </div>
          <div class="product-card-body">
            <div class="product-card-cat">
              <span class="badge" style="background: rgba(43,91,168,0.10); color: #2B5BA8; border-color: rgba(43,91,168,0.25);">IT Consultant</span>
            </div>
            <h3 class="product-card-title">System Integration &amp; Support</h3>
            <p class="product-card-desc">Integrasi antar sistem dan aplikasi bisnis agar dapat saling berkomunikasi secara mulus — API integration, middleware, sinkronisasi data lintas platform. Dilengkapi layanan pemeliharaan dan technical support pasca implementasi.</p>
            <div class="product-tags">
              <span class="product-tag">#API</span>
              <span class="product-tag">#Integration</span>
              <span class="product-tag">#TechSupport</span>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>

  <div class="section-divider" aria-hidden="true"></div>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-section-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="cta-content" data-aos="fade-up">
        <span class="section-label">Konsultasi Gratis</span>
        <h2 class="cta-title mt-16">Butuh Solusi <span class="text-gold">Lebih Spesifik?</span></h2>
        <p class="cta-subtitle mt-16">
          Apakah kebutuhan barang pengadaan atau solusi IT Anda — tim kami siap
          memberikan konsultasi gratis dan penawaran terbaik sesuai anggaran Anda.
        </p>
        <div class="btn-group flex-center mt-32">
          <a href="https://wa.me/6285707497957" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            Konsultasi Sekarang
          </a>
          <a href="mailto:arthaabadiberlian@gmail.com" class="btn btn-outline-light">
            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
            Kirim Email
          </a>
        </div>
      </div>
    </div>
  </section>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/scripts.php'; ?>
