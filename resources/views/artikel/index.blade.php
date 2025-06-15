@extends('layouts.app')
@section('title','Manage Slider Image')
@section('content')

<main class="main">

    <!-- Judul Halaman -->
<div class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Detail Artikel</h1>
          <p class="mb-0">
            Menjaga kesehatan mental sama pentingnya dengan menjaga kesehatan fisik. Dalam artikel ini, kami membahas bagaimana cara mengenali, merawat, dan menghargai kondisi mental kita di tengah tekanan hidup sehari-hari.
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li class="current">Detail Artikel</li>
      </ol>
    </div>
  </nav>
</div><!-- Akhir Judul Halaman -->


    <div class="container">
      <div class="row">

        <div class="col-lg-12">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

                <article class="article">

  <div class="post-img text-center">
    <img src="https://rsum.bandaacehkota.go.id/wp-content/uploads/2024/07/kesehatan-mental.jpg" alt="Ilustrasi kesehatan mental" class="img-fluid" width="80%">
  </div>

  <h2 class="title">Menjaga Kesehatan Mental di Tengah Tekanan Hidup Modern</h2>

  <div class="meta-top">
    <ul>
      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Dr. Lestari Putri</a></li>
      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2025-06-14">14 Juni 2025</time></a></li>
      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">20 Komentar</a></li>
    </ul>
  </div><!-- End meta top -->

  <div class="content">
    <p>
      Di tengah hiruk pikuk kehidupan modern, menjaga kesehatan mental menjadi hal yang semakin penting. Bekerja tanpa henti, tekanan media sosial, hingga tuntutan hidup yang tinggi sering kali membuat seseorang merasa cemas, lelah, bahkan terpuruk.
    </p>

    <p>
      Kesehatan mental bukan sekadar tidak adanya gangguan psikologis, tetapi tentang bagaimana kita berpikir, merasakan, dan bertindak saat menghadapi kehidupan sehari-hari. Mental yang sehat memungkinkan kita untuk menghadapi stres, bekerja secara produktif, dan berkontribusi pada komunitas kita.
    </p>

    <blockquote>
      <p>
        "Merawat kesehatan mental bukan berarti kita lemah. Justru itu adalah bentuk keberanian untuk mengenal dan menerima diri sendiri." — Psikolog Klinis
      </p>
    </blockquote>

    <p>
      Ada banyak cara yang bisa dilakukan untuk menjaga kesehatan mental, mulai dari menjaga pola tidur, berolahraga secara teratur, membatasi paparan media sosial, hingga berkonsultasi dengan profesional ketika diperlukan.
    </p>

    <h3>Tips Menjaga Kesehatan Mental</h3>
    <ul>
      <li><strong>Luangkan waktu untuk diri sendiri:</strong> Istirahat sejenak dari rutinitas bisa memberi ruang untuk memulihkan energi emosional.</li>
      <li><strong>Bicara dengan orang yang dipercaya:</strong> Curhat bisa menjadi cara melepaskan beban pikiran.</li>
      <li><strong>Lakukan aktivitas yang disukai:</strong> Melukis, membaca, atau berjalan di alam dapat membantu menurunkan tingkat stres.</li>
      <li><strong>Jaga pola makan dan tidur:</strong> Keseimbangan fisik turut memengaruhi stabilitas emosional.</li>
    </ul>

    <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid mt-4 mb-4" alt="Ilustrasi aktivitas menjaga kesehatan mental">

    <p>
      Kita tidak perlu menunggu sampai merasa “terlalu lelah” untuk mulai peduli pada kesehatan mental. Sama seperti tubuh, pikiran pun perlu dirawat secara rutin. Dan ingatlah, meminta bantuan adalah bentuk kekuatan, bukan kelemahan.
    </p>
  </div><!-- End post content -->

  <div class="meta-bottom">
    <i class="bi bi-folder"></i>
    <ul class="cats">
      <li><a href="#">Kesehatan</a></li>
    </ul>

    <i class="bi bi-tags"></i>
    <ul class="tags">
      <li><a href="#">Mental Health</a></li>
      <li><a href="#">Psikologi</a></li>
      <li><a href="#">Tips Hidup Sehat</a></li>
    </ul>
  </div><!-- End meta bottom -->

</article>

            </div>
          </section><!-- /Blog Details Section -->

        </div>


      </div>
    </div>

  </main>

  @endsection