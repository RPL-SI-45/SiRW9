<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiRW9</title>
  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assetsG/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assetsG/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">SiRW9</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assetsG/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/profilRW">Profil RW</a></li>
          <li><a class="nav-link scrollto" href="/beritakegiatan">Berita Kegiatan</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/panduanlayanan">Panduan Layanan</a></li>
              <li><a href="/suratonline/create">Surat Online</a></li>
              <li><a href="/iurankas">Pembayaran Kas</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Laporan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/usulanwarga">Usulan</a></li>
              <li><a href="/aduanwarga/create">Aduan</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="/login">Login Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    
    <section class="inner-page">
      
          @yield('content')
        
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SiRW9</h3>
            <p>
              Telkom University <br>
              Bandung, Jawa Barat<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 812-1234-1234 <br>
              <strong>Email:</strong> KelompokE@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>KELOMPOK E</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Btari Salwa Larasati</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Grace Amanda Rosadi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ahmad Rafiano Harya Putra</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Erina Zahira Nurhasan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gede Dipta Narayana</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Surat Online</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pembayaran Kas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Usulan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aduan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita Kegiatan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Panduan Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profil RW</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Website SiRW9</h4>
            <p>Merupakan website yang dibangun untuk membantu pendataan warga pada lingkungan Rukun Warga(RW) IX Kecamatan Banyumanik, Kelurahan Banyumanik, Semarang</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok E SI4503</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Kelompok E SI4503</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assetsG/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assetsG/js/main.js') }}"></script>

</body>

</html>