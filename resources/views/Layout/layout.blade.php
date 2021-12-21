<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Blog Iván</title>
  <!-- Load Bootstrap version 5-->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Fontawesome-->
  <!--<script src="https://kit.fontawesome.com/dce7e34885.js" crossorigin="anonymous"></script>-->
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('css/templatemo-plot-listing.css')}}">
  <link rel="stylesheet" href="{{asset('css/animated.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.css')}}">

  <!--Owl Carousel-->
  <link rel="stylesheet" href="{{asset('OwlCarousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('OwlCarousel/dist/assets/owl.theme.default.min.css')}}">

  <!-- Custom css files -->
  <link rel="stylesheet" href="{{asset('css/custom-0.0.css')}}">

  <!-- Load JQuery 3.6.0 -->
  <script src="{{asset('jquery/jquery-3.6.js')}}"></script>

  <!-- Load custom JS -->
  <script src="{{asset('js/Share/Configuration-0.0.js')}}"></script>
</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <!--<div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>-->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route('home')}}" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="{{route('home')}}" class="active">Home</a></li>
              <li><a href="{{route('cv')}}">Curriculum</a></li>
              <!--<li><a href="listing.html">Listing</a></li>-->
              <li><a href="{{route('contactme')}}">Contacto</a></li>
              <li>
                <div class="main-white-button"><a href="#"><i class="fa fa-camera-retro fa-lg"></i> Add Your Listing</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <section class="context">
    @yield('content')
  </section>

  <!-- Footer -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="{{asset('images/black-logo.png')}}" alt="Plot Listing">
            </div>
            <p>Portafolio de proyectos diseñado por Ernesto Iván Martínez García con la intención de presentar la experiencía laboral y proyectos involucrados.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Enlaces de ayuda</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <ul>
                  <!--<li><a href="#">Categories</a></li>
                  <li><a href="#">Reviews</a></li>-->
                  <li><a href="{{route('cv')}}">Curriculum</a></li>
                  <li><a href="{{route('contactme')}}">Contactame</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <!--<li><a href="#">About Me</a></li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Datos de Contacto</h4>
            <p>ivan.2015.puebla@gmail.com</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">22-25-2052-57</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2021 Ernesto Iván Martínez García. All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/owl-carousel.js')}}"></script>
  <script src="{{asset('js/animation.js')}}"></script>
  <script src="{{asset('js/imagesloaded.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>

  <!--JS OwlCarousel-->
  <script src="{{asset('OwlCarousel/dist/owl.carousel.min.js')}}"></script>

  <section class="context">
    @yield('scripts')
  </section>
</body>

</html>