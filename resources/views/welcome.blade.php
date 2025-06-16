@extends('layouts.app')
@section('title','Manage Slider Image')
@section('content')

  <main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section accent-background">

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-5 justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2><span>Selamat datang di </span><span class="accent">Tellus</span></h2>
        <p>Kami membantu kamu menjaga kesehatan mental melalui pemantauan suasana hati, edukasi, dan konsultasi dengan profesional.</p>
        <div class="d-flex">
          <a href="#cek-mood" class="btn-get-started">Cek Mood Hari Ini</a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <img src="https://bootstrapmade.com/content/demo/Impact/assets/img/hero-img.svg" class="img-fluid" alt="Ilustrasi Mental Health">
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-emoji-smile"></i></div>
            <h4 class="title">
              <a href="#cek-mood" class="stretched-link">Cek Mood</a>
            </h4>
            <p class="text-white-50">Lacak dan catat perasaanmu setiap hari.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-person-lines-fill"></i></div>
            <h4 class="title">
              <a href="#konsultasi" class="stretched-link">Konsultasi</a>
            </h4>
            <p class="text-white-50">Buat janji atau konsultasi dengan konselor.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-journal-text"></i></div>
            <h4 class="title">
              <a href="#artikel" class="stretched-link">Artikel Edukasi</a>
            </h4>
            <p class="text-white-50">Baca artikel seputar stres, kecemasan, dan lainnya.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-clipboard-check"></i></div>
            <h4 class="title">
              <a href="#tes" class="stretched-link">Tes Psikologi</a>
            </h4>
            <p class="text-white-50">Ikuti tes mandiri untuk memahami kondisimu.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

</section><!-- /Hero Section -->


<!-- Tentang Kami -->
<section id="about" class="about section">

  <!-- Judul Bagian -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Tentang Kami</h2>
    <p>Kami hadir untuk mendampingi Anda menjaga kesehatan mental secara bijak dan penuh empati.</p>
  </div><!-- Akhir Judul Bagian -->

  <div class="container">
    <div class="row gy-4">
      
      <!-- Kiri: Gambar dan Deskripsi -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Menjadi Ruang Aman untuk Kesehatan Mental Anda</h3>
        <img src="https://rsj.acehprov.go.id/thumbnail/700x0/media/2024.01/kesehatan-mental1.jpg" class="img-fluid rounded-4 mb-4" alt="Kesehatan Mental">
        <p>Kesehatan mental adalah fondasi kehidupan yang seimbang dan bermakna. Kami percaya bahwa setiap individu berhak mendapatkan akses terhadap informasi, dukungan, dan pendampingan emosional yang tepat.</p>
        <p>Dengan pendekatan yang empatik dan ilmiah, kami hadir untuk membantu Anda mengenal, merawat, dan menjaga kondisi psikologis Anda dalam menghadapi tantangan hidup sehari-hari.</p>
      </div>

      <!-- Kanan: Nilai dan Video -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            Kami menyediakan artikel, konsultasi awal, dan alat pemeriksaan mandiri untuk mendukung perjalanan Anda menuju kesehatan mental yang lebih baik.
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>Pendekatan ramah dan profesional dari para ahli.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Fitur konsultasi cepat untuk mengenali kondisi emosional Anda.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Ruang aman untuk berbagi dan belajar memahami diri sendiri.</span></li>
          </ul>
          <p>
            Jangan menunggu hingga beban terlalu berat. Mulailah langkah kecil hari ini untuk mendengarkan dan merawat diri Anda sendiri.
          </p>

          <div class="position-relative mt-4">
            <img src="https://pwmjateng.com/wp-content/uploads/2024/12/Gambar-WhatsApp-2024-12-14-pukul-05.56.08_6116d606.jpg" class="img-fluid rounded-4" alt="Video Edukasi">
          </div>
        </div>
      </div>

    </div>
  </div>

</section><!-- /Tentang Kami -->

 
  </main>

  @endsection