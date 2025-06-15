@extends('layouts.app')
@section('title','Detail Artikel')
@section('content')

<main class="main">

  <!-- Judul Halaman -->
<div class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Konsultasi Kesehatan Mental</h1>
          <p class="mb-0">
            Kesehatan mental merupakan bagian penting dari kesejahteraan hidup. Melalui halaman ini, Anda dapat melakukan pemeriksaan singkat untuk mengetahui kondisi mental Anda saat ini dan mendapatkan saran yang sesuai.
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li class="current">Konsultasi Mental</li>
      </ol>
    </div>
  </nav>
</div><!-- Akhir Judul Halaman -->


  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <!-- Blog Details Section -->
        <section id="cek-kondisi" class="py-5">
          <div class="container">
            <h2 class="text-center mb-4">Cek Kondisi Mental Anda</h2>
            <form id="mentalCheckForm">
              @csrf

              <div class="mb-4">
                <label>1. Apakah Anda merasa cemas atau khawatir berlebihan akhir-akhir ini?</label><br>
                <input type="radio" name="q1" value="1"> Tidak Pernah<br>
                <input type="radio" name="q1" value="2"> Kadang-kadang<br>
                <input type="radio" name="q1" value="3"> Sering<br>
                <input type="radio" name="q1" value="4"> Sangat Sering
              </div>

              <div class="mb-4">
                <label>2. Apakah Anda merasa sedih berkepanjangan atau kehilangan minat pada hal-hal yang biasa Anda nikmati?</label><br>
                <input type="radio" name="q2" value="1"> Tidak Pernah<br>
                <input type="radio" name="q2" value="2"> Kadang-kadang<br>
                <input type="radio" name="q2" value="3"> Sering<br>
                <input type="radio" name="q2" value="4"> Sangat Sering
              </div>

              <div class="mb-4">
                <label>3. Apakah Anda merasa sulit tidur, atau tidur terlalu banyak?</label><br>
                <input type="radio" name="q3" value="1"> Tidak Pernah<br>
                <input type="radio" name="q3" value="2"> Kadang-kadang<br>
                <input type="radio" name="q3" value="3"> Sering<br>
                <input type="radio" name="q3" value="4"> Sangat Sering
              </div>

              <div class="mb-4">
                <label>4. Apakah Anda merasa tidak berharga atau menyalahkan diri sendiri secara berlebihan?</label><br>
                <input type="radio" name="q4" value="1"> Tidak Pernah<br>
                <input type="radio" name="q4" value="2"> Kadang-kadang<br>
                <input type="radio" name="q4" value="3"> Sering<br>
                <input type="radio" name="q4" value="4"> Sangat Sering
              </div>

              <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="cekKondisi()">Lihat Hasil</button>
              </div>
            </form>

            <div class="mt-4" id="hasilCek" style="display: none;">
              <h4 class="text-center">Hasil Analisa:</h4>
              <p id="hasilText" class="text-center fw-bold"></p>
            </div>
          </div>
        </section><!-- /Blog Details Section -->

      </div>
    </div>
  </div>

</main>

<script>
  function cekKondisi() {
    let skor = 0;
    for (let i = 1; i <= 4; i++) {
      let radios = document.getElementsByName('q' + i);
      let jawaban = Array.from(radios).find(r => r.checked);
      if (!jawaban) {
        alert("Silakan jawab semua pertanyaan.");
        return;
      }
      skor += parseInt(jawaban.value);
    }

    let hasil = "";
    if (skor <= 6) {
      hasil = "✅ Kondisi mental Anda cenderung stabil. Terus jaga keseimbangan emosi Anda.";
    } else if (skor <= 10) {
      hasil = "⚠️ Anda mungkin mengalami tekanan ringan. Pertimbangkan untuk berbicara dengan orang yang Anda percaya.";
    } else if (skor <= 14) {
      hasil = "⚠️ Anda tampaknya sedang dalam tekanan cukup berat. Disarankan untuk berkonsultasi dengan profesional.";
    } else {
      hasil = "❗ Kondisi mental Anda mengkhawatirkan. Segera cari bantuan dari psikolog atau konselor terpercaya.";
    }

    document.getElementById("hasilText").innerText = hasil;
    document.getElementById("hasilCek").style.display = "block";
  }
</script>

@endsection