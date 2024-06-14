@extends('front.layout.app')
@section('content')

 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Ekstrakurikuler</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Ekstrakurikuler</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Event List Section ======= -->
  <section id="event-list" class="event-list">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{ asset('front') }}/assets/img/1.jpeg" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title">Pramuka</h5>
              <p class="card-text">
                Berdasarkan Peraturan Permendikbud RI Nomor 63 tahun 2014,
                pramuka adalah kegiatan ekstrakurikuler yang wajib untuk
                diikuti oleh seluruh siswa. Karena sifatnya wajib maka tak
                heran jika pramuka menjadi kegiatan ekstrakurikuler yang
                paling banyak diikuti.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{ asset('front') }}/assets/img/2.jpeg" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title">Olahraga</h5>
              <p class="card-text">
                Selain pramuka, kegiatan ekstrakurikuler lain yang banyak
                diminati adalah olahraga. Selain bermanfaat untuk kesehatan
                dan memberikan aktivitas yang positif, banyak siswa yang
                mengikuti ekstrakurikuler olahraga untuk mengejar cita-cita
                atau mimpi mereka menjadi atil profesional dalam bidang
                olahraga tertentu.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{ asset('front') }}/assets/img/3.jpg" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title">Bela Diri</h5>
              <p class="card-text">
                Contoh kegiatan ekstrakurikuler di sekolah lain yang juga
                melibatkan kekuatan fisik adalah bela diri. Berbeda dari
                olahraga yang dilakukan untuk menyehatkan badan, bela diri
                bertujuan untuk melindungi diri saat berhadapan dengan
                kondisi bahaya.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{ asset('front') }}/assets/img/4.jpg" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title">Paskibra</h5>
              <p class="card-text">
                Ekstrakurikuler paskibra mulai diperkenalkan saat siswa
                sudah menginjak bangku SMP dan SMA. Paskibra juga merupakan
                salah satu ekstrakurikuler yang banyak diminati oleh siswa
                khususnya mereka yang suka dengan baris-berbaris.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Event List Section -->

@endsection
