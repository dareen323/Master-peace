 {{-- @extends('layout')
@include('auth.layouts')
@section('content') --}}

 @php

    use App\Models\departments;
        $Department = departments::all();

@endphp
{{-- 
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
      h3,h2, h4{
        color:#000 !important;
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
    </style>  --}}

 <section class="ftco-section">
    <x-guest-layout>

        <x-auth-card>
            <x-slot name="logo">
                <h3 class="h3">Register as Tailor</h3>
            </x-slot>

            <form method="POST" action="{{ route('storeDoc') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')"/>

                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                  required autofocus/>

                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')"/>

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                  required/>

                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>


                <div class="mt-4">
                    <x-input-label for="image" :value="__('image')"/>

                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')"
                                  required/>

                    <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                </div>


                {{-- <div class="mt-4">
                    <x-input-label for="certificate" :value="__('certificate')"/>

                    <x-text-input id="certificate" class="block mt-1 w-full" type="file" name="certificate"
                                  :value="old('certificate')" required/>

                    <x-input-error :messages="$errors->get('certificate')" class="mt-2"/>
                </div> --}}


                <div class="mt-4">
                    <x-input-label for="available_time" :value="__('available_time')"/>

                    <x-text-input id="available_time" class="block mt-1 w-full" type="text" name="available_time"
                                  :value="old('available_time')" required/>

                    <x-input-error :messages="$errors->get('available_time')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="overview" :value="__('phone')"/>

                    <x-text-input id="phone" class="block mt-1 w-full" type="number" name="text" required>

                    </x-text-input>

                    <x-input-error :messages="$errors->get('overview')" class="mt-2"/>
                </div>



                <div class="mt-4">
                    <x-input-label for="overview" :value="__('overview')"/>

                    <textarea id="overview" class="block mt-1 w-full" type="date" name="overview" required>

                    </textarea>

                    <x-input-error :messages="$errors->get('overview')" class="mt-2"/>
                </div>


                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')"/>

                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="new-password"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                  type="password"
                                  name="password_confirmation" required/>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4" style="background-color:#53b7c6">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
     
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
{{-- <section class="ftco-section m-5">
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-7 col-lg-6 col-xl-5">
                <img src="./../../images1/Hand sewing (1).gif"
                  class="img-fluid" alt="Sample image">
              </div>
              <div class="col-md-10 col-lg-6 col-xl-4 offset-xl-1 bg">
                <form class="p-2" method="POST" action="{{ route('storeDoc') }}" enctype="multipart/form-data">
                    @csrf
                <div class="d-flex flex-column align-items-center justify-content-center ">
                  <h2 class="lead fw-normal mb-0 me-3">Sign Up with</h2>
                  <div>
                  <button type="button" class="btn btn-primary btn-floating mx-1 dot">
                    <i class="fab fa-facebook-f"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1 dot">
                    <i class="fab fa-google"></i>
                  </button>
      
                  </div>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3"> Your Name</label>

                        <input type="text" id="name" class="form-control form-control-lg p-2 m-1  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                          placeholder={{ __('Name') }} name="name"/>
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
                {{-- <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="email" class="form-control form-control-lg p-2  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                    placeholder="Enter a valid email address" name="email"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
      
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Phone</label>

                    <input type="text" id="phone" class="form-control form-control-lg p-2"
                      placeholder="Enter you phone number" name="phone" />
                  </div>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Availabile time</label>

                    <input type="text" id="time" class="form-control form-control-lg p-2"
                      placeholder="8:00 am -10:00pm " name="available_time" />
                  </div>
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">{{ __('Password') }}</label>

                  <input type="password" id="password" class="form-control form-control-lg p-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
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
                     <input id="password" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                  </div>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4"> Image</label>

                    <input type="file" id="image" class="form-control form-control-lg p-2"
                      placeholder="Repeat the password" name="image"/>
                  </div>
                
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">  {{ __('Register Now') }}</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">AlReady Have an account? <a href="/login"
                      class="link-danger">Login</a></p>

                </div>
       <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('registertailor') }}">
                    {{ __('Are you A Tailor?') }}
                </a> --}}
              {{-- </form>
            </div>
          </div>
        </div>
    
    </section> --}}
{{-- </section>  --}}
@endsection


