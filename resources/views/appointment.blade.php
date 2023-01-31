@extends('layout')

@section('content')
<style>
   
    a{
     color:#fff !important; 
    }
         .ftco-footer{
             font-size: 16px;
     padding: 7em 0;
     background: #262b2ed9 !important;
         }
   
   .ftco-navbar-light .navbar-brand{
       color: #343a40;
     }
     #ftco-navbar :hover{
   color:aliceblue;
   }
   .navbar-expand-lg .navbar-collapse{
     justify-content:flex-end !important;
   }
     #ftco-navbar :hover{
     /* color:#679692; */
       }
     
     .navbar-brand small {
       color: #343a40;
     }
         .ftco-navbar-light{
             background: #679692eb !important;
            position:relative;
         }
         .ftco-navbar-light .navbar-nav > .nav-item.cart > a .icon{
         color:#4e4747;
       }
         .ftco-navbar-light .navbar-nav > .nav-item > .nav-link{
             color:rgb(246, 240, 240);
         }
         span{
             color:#343a40;
         }
         body{
           color:#101010;
         }
         h3,h2,h5{
           color:#000;
         }
         a:not([href]):not([tabindex]){
             color: inherit !important;
     text-decoration: none !important;
         }
         .ftco-footer .block-21 .text .heading{
             color: rgba(255, 255, 255, 0.9) !important;
         }
         .card
         {
             /* border-color:rgb(88 83 83); */
         }
         .ftco-footer .ftco-footer-widget h2{
             font-weight: normal;
     color: #fff !important;
     margin-bottom: 40px;
     font-size: 16px;
     font-weight: 400;
     position: relative;
     text-transform: uppercase;
     letter-spacing: 1px;
         }
 
         .form-control{
            border: 1px solid #c5bbbb !important
         }
         .btn-primary{
           background-color:#b9a494 !important; 
           border: 1px solid #b9a494 !important;
           color:rgb(55, 53, 52) !important;
         }
         .btn-primary:hover{
           background-color: #c5bbbb1d !important;
         }
         .bw{
         
         }
         </style>
    {{-- Create Appointment Section --}}
    <section>
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h5 class="d-inline-block text-primary  text-uppercase border-bottom border-5"></h5>
                    <div class="mb-4">
                        <h1 class="display-4">We stitch designs that Perfectly suits you </h1>
                    </div>

                    {{-- <p class=" mb-5"><b> 1- Free Health Centers can be found by clicking here to.
                            <br> 2- NeedyMeds has a database of free clinics.
                            <br> 3- Your local pharmacist may have a clinic that provides visits.
                            <br> 4- There may be charitable health care providers or hospitals in your area that provide
                            free health services.</b></p> --}}
                           
                            <div class="col-md-6 col-sm-6">
                                <img src="./../../images1/Hand sewing (1).gif" class="img-responsive" alt="">
                           </div>
                                        </div>
                                      
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('appointmentStore', $id)}}" method="POST" id="submitBtn">

                            @csrf
                            @php

                                $user = Auth::user();
                            @endphp
                            <div class="row g-3">
                                {{-- <div class="col-12 col-sm-12">
                                    <select class="form-select bg-light border-0" id="Availability" name="time"
                                            style="height: 55px;">

                                        {{-- @foreach($availableForDepartment as $availability)

                                            <option
                                                value="{{$availability->available_time}},{{$availability->id}}">{{$availability->name}}
                                                /{{$availability->available_time}}</option>

                                        @endforeach --}}

                                    {{-- </select>
                                </div>  --}}


                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control bg-light border-0 m-1" value="{{$user['name']}}"
                                           name="name" placeholder="Your Name"
                                           style="height: 55px;">
                                </div>
                               
                                <div class="col-12 col-sm-12">
                                    <input type="date" class="form-control bg-light border-0 m-1"
                                           name="date" placeholder="Date"
                                           style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="time" class="form-control bg-light border-0 m-1"
                                           name="time" placeholder="time"
                                           style="height: 55px;">
                                </div>
                                {{-- <label for="Message">Additional Message</label> --}}
                                <textarea  class="form-control m-3" rows="4" id="message" name="message" placeholder="Description
                                "></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-primary w-100 py-3" type="submit" onclick="event.preventDefault()
                                    Swal.fire({
                                          position: 'top-center',
                                          icon: 'success',
                                          title: 'Your work has been saved',
                                          showConfirmButton: false,
                                          timer: 1500
                                        })
                                        let form = document.getElementById('submitBtn')
                                        setTimeout(function() {
                                            form.submit()
                                        },1600)
                                    ">Make An
                                    Appointment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Department</label>
                                        <select class="form-control">
                                             <option>General Health</option>
                                             <option>Cardiology</option>
                                             <option>Dental</option>
                                             <option>Medical Research</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section> --}}

    {{-- End Appointment Section --}}
@endsection
