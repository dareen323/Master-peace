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
    <link href="{{asset('style/bootstrap.min.css')}}" rel="stylesheet">
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
            
                   
                    <a class="navbar-brand" href="/"><span > <img src="./../../../images1/1.png" style="width:100px"></span><small></small></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="oi oi-menu"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                      <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                        {{-- <li class="nav-item"><a href="services.html" class="nav-link"></a></li> --}}
                        {{-- <li class="nav-item"><a href="blogs" class="nav-link">Blog</a></li> --}}
                       
                        <li class="nav-item"><a href="/tails" class="nav-link">Tailors</a></li>
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

