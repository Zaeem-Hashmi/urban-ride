<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
  <title>Urban Ride</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('client/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('client/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('client/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="/">
              <span>
                Urban Ride
              </span>
            </a>
    
            <div class="navbar-collapse" id="">
              <div class="user_option">
                <a href="{{ route('login') }}">
                  Login
                </a>
              </div>
              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                    <a href="{{ route('index') }}">Home</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('car') }}">Cars</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                    <a href="{{ route('login') }}">Login</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_container">
        <div class="img-box">
          <img src="{{asset('client/images/hero-img.jpg')}}" alt="">
        </div>
        <div class="detail_container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h1>
                    Book Ride<br>
                    Experts <br>
                    Service
                  </h1>
                  <a href="{{ route('contact') }}">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1>
                    Become<br>
                    Driver <br>
                    Earn
                  </h1>
                  <a href="{{ route('contact') }}">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  @yield('content')
  <!-- map section -->

  <section class="map_section">
    <!-- map section -->
    <div class="map_container">
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
      </div>
    </div>
    <!-- end map section -->
  </section>


  <!-- end map section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024 All Rights Reserved.
    </p>
  </footer>
  <!-- footer section -->

  <script src="{{ asset('client/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ asset('client/js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{ asset('client/js/custom.js')}}"></script>


</body>

</html>