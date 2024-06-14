<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Sekolah Asahan</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('front') }}/assets/img/favicon.png" rel="icon" />
    <link href="{{ asset('front') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="{{ asset('front') }}/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="{{ asset('front') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="{{ asset('front') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="{{ asset('front') }}/assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="{{ asset('front') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="{{ asset('front') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('front') }}/assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: MeFamily
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{('/')}}">Sekolah</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{('/')}}" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="{{('/')}}">Beranda</a></li>
            <li><a href="{{('/profil')}}">Profil Sekolah</a></li>
            <li><a href="{{('ekskul')}}">Ekstrakurikuler</a></li>
            <li><a href="{{('/foto')}}">Gallery</a></li>

          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
