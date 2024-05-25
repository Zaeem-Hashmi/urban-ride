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

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
                Urban Ride
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="user_option">
              @if (auth()->user())
                  {{ auth()->user()->name }}
              @else
              <a href="{{ route('login') }}">
                Login
              </a>
              @endif
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
                <a href="{{ route('booking') }}">Book a ride</a>
                @if (auth()->user())
                <a href="#" onclick="document.getElementById('form').submit()">Logout</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                @endif
                <form hidden action="{{ route('logout') }}" method="post" id="form">
                @csrf
                </form>
                
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  @yield('content')

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