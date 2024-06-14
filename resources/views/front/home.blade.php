@extends('front.layout.app')
@section('content')

 <!-- ======= My & Family Section ======= -->
 <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <h2>Sekolah</h2>
        <p>
          Sekolah merupakan sekolah yang berada di kota Provinsi Sumatera
          Utara Yang terdapat begitu banyak sekolah yang berada disini dan
          juga sekolah begitu banyak untuk mendidik semua anak disini
        </p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <video width="500" height="450" controls>
            <source src="{{ asset('front') }}/assets/video/sekolah.mp4" type="video/mp4" />
          </video>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Video disamping merupakan video untuk memperkenalkan sekolah
            dengan cara berbagai informasi terkait sekolahnya dan juga
            mengajak teman - teman nya untuk menginformasikan sekolah
            tersebut kepada orang lain / masyarakat sekitarnya.
          </p>
          <a href="{{('profil')}}" class="btn-learn-more">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End My & Family Section -->

  <!-- ======= Recent Photos Section ======= -->
  <section id="recent-photos" class="recent-photos">
    <div class="container">
      <div class="section-title">
        <h2>Photo Sekolah</h2>
        <p>Ini adalah gambar/foto sekolah yang ada di seluruh indonesia</p>
      </div>

      <div class="recent-photos-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide">
            <a href="assets/img/recent-photos/1.jpg" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/1.jpg"
                class="img-fluid"
                alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <a href="{{ asset('front') }}/assets/img/recent-photos/2.jpg" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/2.jpg"
                class="img-fluid"
                alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <a href="{{ asset('front') }}/assets/img/recent-photos/3.jpg" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/3.jpg"
                class="img-fluid"
                alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <a href="{{ asset('front') }}/assets/img/recent-photos/4.jpg" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/4.jpg"
                class="img-fluid"
                alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <a href="{{ asset('front') }}/assets/img/recent-photos/5.png" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/5.png"
                class="img-fluid"
                alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <a href="{{ asset('front') }}/assets/img/recent-photos/6.jpg" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/6.jpg"
                class="img-fluid"
                alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <a href="{{ asset('front') }}/assets/img/recent-photos/7.jpg" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/7.jpg"
                class="img-fluid"
                alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <a href="{{ asset('front') }}/assets/img/recent-photos/8.jpg" class="glightbox"
              ><img
                src="{{ asset('front') }}/assets/img/recent-photos/8.jpg"
                class="img-fluid"
                alt=""
            /></a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- End Recent Photos Section -->
</main>

@endsection
