
@extends('layout')
@include('auth.layouts')
@section('content')
<style>  
  
    .ftco-navbar-light .navbar-brand{
    color: #343a40;
  }
  #ftco-navbar :hover{
  color:aliceblue;
    }
  
  .navbar-brand small {
    color: #343a40;
  }
      .ftco-navbar-light{
          background: #679692eb !important;
      }
      .ftco-navbar-light .navbar-nav > .nav-item.cart > a .icon{
      color:#4e4747;
    }
      .ftco-navbar-light .navbar-nav > .nav-item > .nav-link{
          color:rgb(255, 255, 255);
      }
      span{
          color:#343a40;
      }
      body{
        color:#101010;
      }
      h3,h2{
        color:#000;
      }
      
      .dot {
    height: 40px;
    width: 40px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
  }
    
      .divider:after,
  .divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
  }
  .h-custom {
  height: calc(100% - 73px);
  }
  @media (max-width: 450px) {
  .h-custom {
  height: 100%;
  }
  }
     
  .btn.btn-primary{
    color:#fff;
  }
  .form-control {
    border: 1px solid #a39e9e !important;
    height: 50px !important;

  }
  .bg{
    background-color: #eeeeee70;
  }
    </style> 
<section class="ftco-section m-5">
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-7 col-lg-6 col-xl-5">
                <img src="./../../images1/Hand sewing (1).gif"
                  class="img-fluid" alt="Sample image">
              </div>
              <div class="col-md-10 col-lg-6 col-xl-4 offset-xl-1 bg">
                <form class="p-2" method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="d-flex flex-column align-items-center justify-content-center ">
                  <h2 class="lead fw-normal mb-0 me-3">Sign Up with</h2>
                  <div>
                  {{-- <button type="button" class="btn btn-primary btn-floating mx-1 dot">
                    <i class="fab fa-facebook-f"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1 dot">
                    <i class="fab fa-google"></i>
                  </button> --}}
      
                  </div>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3"> Your Name</label>

                        <input type="text" id="form3Example3" class="form-control form-control-lg p-2 m-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                          placeholder={{ __('Name') }} />
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        {{-- <label class="form-label" for="form3Example3">Name</label> --}}
                        {{-- <input type="text" id="form3Example3" class="form-control form-control-lg p-2 m-1"
                        placeholder=" Last name" /> --}}
                      {{-- <label class="form-label" for="form3Example3">Name</label> --}}
                      </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" class="form-control form-control-lg p-2  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                    placeholder="Enter a valid email address" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
      
                {{-- <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Phone</label>

                    <input type="text" id="form3Example4" class="form-control form-control-lg p-2"
                      placeholder="Enter you phone number" />
                  </div> --}}
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">{{ __('Password') }}</label>

                  <input type="password" id="form3Example4" class="form-control form-control-lg p-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                    placeholder="Enter password" />
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">                   
                     <label class="form-label" for="form3Example4">{{ __('Confirm Password') }}</label>
                     <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                  </div>
                  {{-- <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4"> Image</label>

                    <input type="file" id="form3Example4" class="form-control form-control-lg p-2"
                      placeholder="Repeat the password" />
                  </div> --}}
                
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">  {{ __('Register Now') }}</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">AlReady Have an account? <a href="/login"
                      class="link-danger">Login</a></p>

                </div>
       <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('registertailor') }}">
                    {{ __('Are you A Tailor?') }}
                </a>
              </form>
            </div>
          </div>
        </div>
    
      </section>
</section>
@endsection
