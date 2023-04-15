<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Folio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Folio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><h3>Ade Dwi Putra</h3></a>
      <!-- Uncomment below if you prefer to use an text logo -->
      <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link  scrollto" href="#journal">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>I'm <span class="typed" data-typed-items="Ade Dwi Putra, UI/UX Designer, Developer"></span></h1>
        <p> <?php echo "UI/UX Designer, Developer"?></p>

        <ul class="list-unstyled list-social">
          <li><a href="https://dribbble.com/ddwptrr_" target="_blank" title="dribbble - Ade Dwi Putra"><i class="bi bi-dribbble"></i></a></li>
          <li><a href="https://github.com/adee012" target="_blank" title="github - Ade Dwi Putra"><i class="bi bi-github"></i></a></li>
          <li><a href="https://www.instagram.com/ade.designn/?hl=id" target="_blank" title="instagram - Ade Dwi Putra"><i class="bi bi-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/in/ade-dwi-putra-87525a181/" target="_blank" title="linkedin - Ade Dwi Putra"><i class="bi bi-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="assets/img/profile.jpg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading"><?php echo "Ade Dwi Putra" ?> </p>
              
              <p class="separator">
              <?php
              echo "I am the second child of three siblings. I was born in Kepahiang, January 16, 2002, in grade 6 of elementary school my family and I decided to move to the city of Jambi and continue my education there. Currently I am studying at a private tertiary institution in the province of Banten, namely Pamulang University and focusing on the Informatics Engineering major.";
              ?></p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-briefcase"></i>
                <span>UI/UX DESIGN</span>
                <p class="separator">You can find me on the dribbble link </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-database"></i>
                <span>DATABASE</span>
                <p class="separator">I can use database just fine, I usually use MYSQL </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-bar-chart"></i>
                <span>WEB DESIGN</span>
                <p class="separator">I can make elegant website designs according to consumer interests </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-pc-display-horizontal"></i>
                <span>WEB APPS</span>
                <p class="separator">I work with a team to create a website application </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-camera"></i>
                <span>PHOTOGRAPHY</span>
                <p class="separator">Photography is an art that uses imaging on an object in my opinion</p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Hobby</h2>
        </div>
      </div>

      <div class="container">

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/badminton.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Badminton</h4>
              <p>Hobby 1</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/silat.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pencak Silat</h4>
              <p>Hobby 2</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>education</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/smp.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">SMP NEGERI 2 BETARA</a></h4>
                  <p class="separator">Having its address in Betara District, Jambi Province
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/smk.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">SMK NEGERI 1 BETARA</a></h4>
                  <p class="separator">Automotive major, motorcycle engineering
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/viktor.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">Universitas Pamulang</a></h4>
                  <p class="separator">The Informatics Engineering major focuses on frontend and UI/UX designers
                  </p>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- End Journal Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
        <li><a href="https://dribbble.com/ddwptrr_" target="_blank" title="dribbble - Ade Dwi Putra"><i class="bi bi-dribbble"></i></a></li>
          <li><a href="https://github.com/adee012" target="_blank" title="github - Ade Dwi Putra"><i class="bi bi-github"></i></a></li>
          <li><a href="https://www.instagram.com/ade.designn/?hl=id" target="_blank" title="instagram - Ade Dwi Putra"><i class="bi bi-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/in/ade-dwi-putra-87525a181/" target="_blank" title="linkedin - Ade Dwi Putra"><i class="bi bi-linkedin"></i></a></li>
        </ul>

      </div>

      <p>&copy; Copyrights Ade. All rights reserved.</p>

      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
        Fullstack Web Developer - PT Arkatama Multi Solusindo</a>
      </div>

    </div>
  </div><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>