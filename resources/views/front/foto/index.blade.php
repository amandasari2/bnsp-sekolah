@extends('front.layout.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Gallery</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Gallery Sekolah</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row gallery-container">
        <div class="col-lg-4 col-md-6 gallery-item filter-home">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/1.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Foto Sekolah</h4>
              <p>Foto Sekolah</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/1.jpg"
                  class="glightbox"
                  title="Foto Sekolah"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/v2.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Wisata Sekolah</h4>
              <p>Wisata Sekolah</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/v2.jpg"
                  class="glightbox"
                  title="Wisata Sekolah"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-home">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/2.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Foto Sekolah</h4>
              <p>Foto Sekolah</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/2.jpg"
                  class="glightbox"
                  title="Foto Sekolah"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-beach">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/s2.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Study Tour</h4>
              <p>Study Tour</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/s2.jpg"
                  class="glightbox"
                  title="Study Tour"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/v1.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Wisata Sekolah</h4>
              <p>Wisata Sekolah</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/v1.jpg"
                  class="glightbox"
                  title="Wisata Sekolah"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-home">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/3.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Foto Sekolah</h4>
              <p>Foto Sekolah</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/3.jpg"
                  class="glightbox"
                  title="Foto Sekolah"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-beach">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/s1.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Study Tour</h4>
              <p>Study Tour</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/s1.jpg"
                  class="glightbox"
                  title="Study Tour"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-beach">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/s3.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Study Tour</h4>
              <p>Study Tour</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/s3.jpg"
                  class="glightbox"
                  title="Study Tour"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
          <div class="gallery-wrap">
            <img src="{{ asset('front') }}/assets/img/gallery/v3.jpg" class="img-fluid" alt="" />
            <div class="gallery-info">
              <h4>Wisata Sekolah</h4>
              <p>Wisata Sekolah</p>
              <div class="gallery-links">
                <a
                  href="{{ asset('front') }}/assets/img/gallery/v3.jpg"
                  class="glightbox"
                  title="Wisata Sekolah"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery Section -->

@endsection
