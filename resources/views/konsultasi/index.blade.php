@extends('layouts.app')
@section('title','Konsultasi Mental Cepat')
@section('content')

<main class="main">

  <!-- Judul Halaman -->
  <div class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Konsultasi Mental Cepat</h1>
            <p class="mb-0">
              Pilih kondisi yang paling menggambarkan perasaan Anda hari ini. Dapatkan respons langsung sebagai langkah awal memahami kondisi mental Anda.
            </p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li class="current">Konsultasi Cepat</li>
        </ol>
      </div>
    </nav>
  </div><!-- Akhir Judul Halaman -->

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <h4 class="text-center mb-4">Bagaimana perasaan Anda hari ini?</h4>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="card p-3 h-100 shadow-sm card-konsultasi" onclick="tampilkanRespon('A')">
              <h5>😟 Saya sering merasa cemas dan khawatir</h5>
              <p class="mb-0 text-muted">Tanpa alasan jelas, pikiran sering terasa gelisah</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card p-3 h-100 shadow-sm card-konsultasi" onclick="tampilkanRespon('B')">
              <h5>😞 Saya merasa sangat sedih & kehilangan semangat</h5>
              <p class="mb-0 text-muted">Hal yang dulu menyenangkan kini terasa hambar</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card p-3 h-100 shadow-sm card-konsultasi" onclick="tampilkanRespon('C')">
              <h5>😫 Saya merasa lelah dan ingin menyerah</h5>
              <p class="mb-0 text-muted">Beban terasa berat, ingin berhenti sejenak</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card p-3 h-100 shadow-sm card-konsultasi" onclick="tampilkanRespon('D')">
              <h5>😊 Saya merasa cukup baik dan stabil</h5>
              <p class="mb-0 text-muted">Ingin refleksi diri atau sekadar cek kondisi</p>
            </div>
          </div>
        </div>

        <div id="responBot" class="alert alert-info mt-4 d-none"></div>

      </div>
    </div>
  </div>

</main>

<style>
  .card-konsultasi {
    cursor: pointer;
    transition: 0.3s;
  }

  .card-konsultasi:hover {
    background-color: #f0f4ff;
    border-color: #007bff;
  }
</style>

<script>
  function tampilkanRespon(pilihan) {
    const responDiv = document.getElementById("responBot");
    let responText = "";

    switch (pilihan) {
      case "A":
        responText = "🤖 Kecemasan dapat mengganggu aktivitas harian. Coba tarik napas dalam, kurangi konsumsi berita negatif, dan buat rutinitas menenangkan. Jika berlanjut, pertimbangkan sesi konseling.";
        break;
      case "B":
        responText = "🤖 Perasaan sedih yang berkepanjangan bisa menjadi tanda awal depresi. Coba terhubung kembali dengan hal-hal kecil yang Anda sukai, dan jangan ragu bercerita kepada orang yang Anda percaya.";
        break;
      case "C":
        responText = "🤖 Keinginan untuk menyerah adalah sinyal kuat bahwa Anda butuh istirahat emosional. Anda tidak sendiri. Pertimbangkan berbicara dengan psikolog atau konselor untuk memulihkan energi batin.";
        break;
      case "D":
        responText = "🤖 Senang mendengar kondisi Anda stabil. Terus rawat diri secara mental dan emosional. Jangan lupa luangkan waktu untuk istirahat dan refleksi.";
        break;
    }

    responDiv.innerText = responText;
    responDiv.classList.remove("d-none");
  }
</script>

@endsection