<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title', 'Sewing House')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    @yield('head')
  </head>


<body >

@php

    use App\Models\departments;
        $Department = departments::all();
        $user = Auth::user();
@endphp

    <!-- Navbar Start -->
   
         <header>
                <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar">
                  <div class="container">
            
                   
                    <a class="navbar-brand" href="/"><span > <img src="./../../../images1/sewing-house-low-resolution-logo-white-on-transparent-background (1).png" style="width:100px"></span><small></small></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="oi oi-menu"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                      <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                        {{-- <li class="nav-item"><a href="services.html" class="nav-link"></a></li> --}}
                        {{-- <li class="nav-item"><a href="blogs" class="nav-link">Blog</a></li> --}}
                       
                        <li class="nav-item"><a href="/tailor" class="nav-link">Tailors</a></li>
                          {{-- <a class="dropdown-item" href="shop">Handmade Shop</a> --}}
                          {{-- <a class="dropdown-item" href="room">Cart</a> --}}
                          {{-- <a class="dropdown-item" href="checkout.">Checkout</a> --}}
                       
                      </li>
                      <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                        @auth
                            @can('User')
                                <a class="nav-item nav-link" href="/userprofile/{{$user['id']}}">
                                    <img class="img-fluid" style="width: 30px;margin-right: 8px"
                                         src="{{asset('img/user.png')}}">
                                </a>
                            @endcan
                            @can('Tailor')
                                <a class="nav-item nav-link" href="/tailorprofile/{{$user['tailor_id']}}">
                                    @php
                                        $tailorImage = \App\Models\Tailor::find($user['tailor_id'])->image;

                                    @endphp
                                    <img class="img-fluid"
                                         style="width: 40px;margin-right: 8px;border-radius: 50%;height: 40px"
                                         src="data:image/png;base64,{{$tailorImage}}">
                                </a>
                            @endcan
                            @can('Admin')
                                <a class="nav-item nav-link" href="/adminprofile/{{$user['id']}}">
                                    <img class="img-fluid" style="width: 40px;margin-right: 8px;height: 40px"
                                         src="{{asset('img/user.png')}}">
                                </a>
                            @endcan
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-item nav-link mx-2" href="{{route('logout')}}"
                                   onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    <img class="img-fluid" style="width: 30px" src="{{asset('img/logout.png')}}">
                                </a>
                            </form>
                        @endauth

                        @guest
                            <!-- inser more links here -->
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}" type="button">{{ __('Login') }}</a>
                          </li>
                                {{-- <ul class="dropdown-menu main-nav" aria-labelledby="dropdownMenuButton1">
                                    <li><a href="/login" class="nav-item nav-link">LogIn</a></li>
                                    <li><a class="nav-item nav-link " href="/register">Register</a></li>
                                </ul> --}}
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
            </div>
         </header>
<!-- Navbar End -->

{{--@include('loginform')--}}
{{--@include('loginformdoctor')--}}
@yield('content')


<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About Us</h2>
          <p>
            Online Website tha give you the options to choose the right Tailor for you.
          </p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate">
              <a href="https://twitter.com/Starbucks?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><span class="icon-twitter"></span></a>
            </li>
            <li class="ftco-animate">
              <a href="https://www.facebook.com/Starbucks/"><span class="icon-facebook"></span></a>
            </li>
            <li class="ftco-animate">
              <a href="https://www.instagram.com/starbucks/?hl=en"><span class="icon-instagram"></span></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Partners</h2>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbXuMU4YsoLZwlfFPlHjggCcmpP224hXzaUHXheN2L0g903l8dnNbpIeyRfuUCvp8MvRU&usqp=CAU)"></a>
            <div class="text">
              <h3 class="heading">
                <a href="https://www.buynespresso.com/"> ORFAIL | Sewing Machine, Tools, and Accessories.</a>
              </h3>

            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(data:image/jpeg;base64,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)"></a>
            <div class="text">
              <h3 class="heading">
                <a href="https://www.starbucks.com/"> Jordan | Variety of top notch.</a>
              </h3>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="index.php" class="py-2 d-block">Home</a></li>
            <li><a href="./about.php" class="py-2 d-block">About</a></li>
            <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
            <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li>
                <span class="icon icon-map-marker"></span><span class="text">Amman, Jordan.</span>
              </li>
              <li>
                <span class="icon icon-phone"></span><span class="text">+ (962) 776 789012</span>
              </li>
              <li>
                <span class="icon icon-envelope"></span><span class="text">Sewinghouse@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved | SEWING HOUSE
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer End -->
 <!-- loader -->
 {{-- <div id="ftco-loader" class="show fullscreen"> --}}
    {{-- <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
  </div> --}}


<!-- Back to Top -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
      @yield('script')
@yield('javascript')
<!-- Template Javascript -->
<script src="{{asset('js1/main.js')}}"></script>
</body>

</html>
