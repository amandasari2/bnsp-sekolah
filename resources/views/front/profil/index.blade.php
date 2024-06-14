@extends('front.layout.app')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Profile Sekolah</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Profile Sekolah</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Story Intro Section ======= -->
  <section id="story-intro" class="story-intro">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('front') }}/assets/img/intro2.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Profile Sekolah</h3>
          <p class="fst-italic">
            Sekolah adalah lembaga untuk para siswa mendapat pengajaran di
            bawah pengawasan guru. Sebagian besar negara memiliki sistem
            pendidikan formal yang umumnya wajib. Dalam sistem ini, siswa
            mengalami kemajuan melalui serangkaian kegiatan belajar mengajar
            di sekolah.Nama-nama untuk sekolah ini bervariasi menurut
            negara, tetapi umumnya termasuk sekolah dasar untuk anak-anak
            dan dilanjutkan ke sekolah menengah untuk remaja yang telah
            menyelesaikan pendidikan dasar.Selain itu terdapat sekolah
            menengah kejuruan.
          </p>
          <p>
            Selain sekolah inti, siswa di negara tertentu juga mungkin
            memiliki akses untuk mengikuti sekolah baik sebelum dan sesudah
            pendidikan dasar dan menengah. Taman Kanak-Kanak (TK) atau
            pra-sekolah menyediakan sekolah bagi anak-anak (biasanya umur
            3-5 tahun). Universitas, sekolah kejuruan, perguruan tinggi atau
            seminari mungkin tersedia setelah sekolah menengah. Sebuah
            sekolah mungkin juga didedikasikan untuk satu bidang tertentu,
            seperti sekolah ekonomi atau sekolah tari. Alternatif sekolah
            dapat menyediakan kurikulum dan metode non-tradisional.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Story Intro Section -->

  <!-- ======= Featured Members Section ======= -->
  <section id="featured-members" class="featured-members">
    <div class="container">
      <div class="row content">
        <h1 align="center">Tabel Informasi Sekolah</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Wilayah</th>
              <th scope="col">Jenjang</th>
              <th scope="col">Tahun Ajaran</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Sumatera Utara</td>
              <td>TK</td>
              <td>2021/2022</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Sumatera Barat</td>
              <td>SD</td>
              <td>2022/2023</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jakarta</td>
              <td>SMP</td>
              <td>2023/2024</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jawa</td>
              <td>SMA</td>
              <td>2024/2025</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- End Featured Members Section -->

  @endsection
