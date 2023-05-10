<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('template/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('template/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('template/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('template/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: FlexStart - v1.11.1
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="" class="logo d-flex align-items-center">
          <img src="{{ asset('template/img/logo.png')}}" alt="">
          <span>AIIR</span>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}" class="nav-link scrollto">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link scrollto">Register</a></li>
                        @endif
                    @endauth
            @endif
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up" class="aos-init aos-animate">Aplikasi Informasi Izin Reklame</h1>
            <h2 data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU KABUPATEN TULUNGAGUNG</h2>
            <div data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
              <div class="text-center text-lg-start">
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Get Started</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('template/img/hero-img.png')}}" class="img-fluid" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h2>Apa Itu Reklame?</h2>
                <p>
                    reklame, papan iklan, atau baliho merupakan salah satu media luar ruang yang memiliki tujuan menyampaikan pesan mengenai suatu produk atau jasa bahkan individu-individu yang ingin mendongkrak popularitas.
                </p>
                <div class="text-center text-lg-start">
                  <a href="#values" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('template/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </section><!-- End About Section -->

      <!-- ======= Values Section ======= -->
      <section id="values" class="values">

        <div class="container aos-init" data-aos="fade-up">

          <header class="section-header">
            <p>Daftar Bahan Reklame</p>
          </header>

          <div class="row">

            <div class="col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="{{ asset('template/img/values-1.png')}}" class="img-fluid" alt="">
                <h3>Alur Reklame</h3>
                <a href="{{ asset('/file/alur.png') }}" class="btn btn-primary" download>unduh</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0 aos-init" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <img src="{{ asset('template/img/values-2.png')}}" class="img-fluid" alt="">
                <h3>Peraturan Bupati</h3>
                <a href="{{ asset('/file/perbub_reklame.pdf') }}" class="btn btn-primary" download>unduh</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0 aos-init" data-aos="fade-up" data-aos-delay="600">
              <div class="box">
                <img src="{{ asset('template/img/values-3.png')}}" class="img-fluid" alt="">
                <h3>Form Reklame</h3>
                <a href="{{ asset('/file/formulir_permohonan_reklame.doc') }}" class="btn btn-primary" download>unduh word</a>
                <a href="{{ asset('/file/formulir_permohonan_reklame.pdf') }}" class="btn btn-primary" download>unduh pdf</a>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Values Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-2" style="background-color: rgba(205, 231, 255, 0.2);">
           <marquee behavior="right" direction="scroll">
            © 2022 Copyright:
            <b>
                <a class="text-dark" href="/" style="text-decoration: none;">DPMPTSP Kab. Tulungagung</a>
            </b>
           </marquee>
        </div>
        <!-- Copyright -->
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('template/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('template/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('template/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('template/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('template/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/js/main.js')}}"></script>



  </body>
