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
<section class="ftco-section">
  <div class="container py-5"> <div class="row">
          <div class="col-lg-4">
              <div class="card mb-4 text-dark" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px);">
                 
                <div class="card-body text-center">
                    @foreach($User as $userinfo)
                      <img src="{{asset('img/user.png')}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:148px">
                      <h5 class="my-3 text-dark ">{{$userinfo->name}}</h5>
                      <p class="text-muted mb-1">{{$userinfo->role}}</p>
                      {{-- <p class="text-muted mb-4">{{$userinfo->name}}</p> --}}
                      <div class="d-flex justify-content-center mb-2">
                        @php


                        $user = Auth::user();
                    @endphp
                                                        @if($user->role==='Admin')
                                                        <a class="ms-4"><a class="btn btn-primary"
                                                                            href="/admin" > Admin
                                                                Dashboard</a></a>
                                                    @endif
                                                    <a class="ms-4 mx-1"><a class="btn btn-primary"
                                                        href="{{route('editProfile' , $id)}}" > Edit Profile</a></a>
                          {{-- <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" ><a href="{{route('editProfile' , $id)}}">Edit Profile</a></button> --}}
                          {{-- <a href="register/includes/logout.inc.php?id=2"><button type="button" class="btn btn-danger btn-outline-danger mx-1" onclick="">Logout</button></a> --}}
  
                      </div>
                  </div>
              </div>
  
          </div>
          <div class="col-lg-8">
              <div class="card mb-4 text" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px);">
                  <div class="card-body">
                    {{-- @foreach($User as $userinfo) --}}
                      <div class="row">
                          <div class="col-sm-3">
                              <h5 class="mb-0 bw">Full Name:</h5>
                          </div>
                          <div class="col-sm-9">
                              <p class="text-muted mb-0">{{$userinfo->name}} </p>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-sm-3">
                              <h5 class="mb-0 bw">Email:</h5>
                          </div>
                          <div class="col-sm-9">
                              <p class="text-muted mb-0">{{$userinfo->email}}</p>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-sm-3">
                              <h5 class="mb-0 bw">City:</h5>
                          </div>
                          <div class="col-sm-9">
                              <p class="text-muted mb-0">Amman</p>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-sm-3">
                              <h5 class="mb-0 bw">Address:</h5>
                          </div>
                          <div class="col-sm-9">
                              <p class="text-muted mb-0">{{$userinfo->city}}</p>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-sm-3 bw">
                              <h5 class="mb-0">phone number:</h5>
                          </div>
                          <div class="col-sm-9">
                              <p class="text-muted mb-0">0775582555 </p>
                          </div>
                      </div>
                      <hr>
                      {{-- <div class="row">
                          <div class="col-sm-3 bw ">
                              <h5 class="mb-0">Adress:</h5>
                          </div>
                          <div class="col-sm-9">
                              <p class="text-muted mb-0"></p>
                          </div>
                      </div> --}}
  
                  </div>
              </div>
          </div>
          <div class="biosection1 col-md-12">
            {{-- @php


                $user = Auth::user();
            @endphp --}}

            <div class="bio-row">
                {{-- <h3>City: Amman</h3> --}}
            </div>
        </div>
      </div>
      @endforeach

  <div class="row">
      <div class="col-md-12">
          <div class="card mb-4 mb-md-0" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px); min-height:auto;">
              <div class="card-body">
                  <h3>Appointment History</h3>
                  <hr>
                  <div class="table-responsive">
                      <table id="mytable" class="table table-bordred table-striped">
                          <thead class="text">
                              <tr><th>Appointment Number</th>
                              <th>Tailor name</th>
                              <th>Appointment date</th>
                              <th>Total Price</th>
                              
  
                          </tr></thead>
  
                          <tbody>
  
                              
                                  <!-- Display Records -->
                                  <tr class="text">
                                      <td class="text">1</td>
                                      <td class="text">dareen</td>
                                      <td class="text">2022-09-30 00:00:00</td>
                                      <td class="text">200 JOD</td>
                                      {{-- <td class="text"><button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal1"> Booking Details</button></td> --}}
  
  
  
                                  </tr>
  
                              
                                  <!-- Display Records -->
                                  {{-- <tr class="text">
                                      <td class="text">5</td>
                                      <td class="text"> Approved</td>
                                      <td class="text">2022-10-03 13:17:50</td>
                                      <td class="text">45 JOD</td>
                                      {{-- <td class="text"><button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal5"> Confirm Now</button></td> --}}
  
  
  
                                  </tr>

                            
                            
                      
                              
  
                              
                               
  
                              
  
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
  
      </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  
  
  
      {{-- <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog ">
              <div class="modal-content" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(5px);">
                  <div class="modal-header">
                      <h3 class="modal-title text-black text " id="exampleModalLabel">Purchase Reciept</h3>
                      <hr>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
  
                      <div class="card-body p-5">
  
  
                                                              <div class="row">
                                  <div class="col-6 mb-1">
                                      <p class="small text-muted mb-1">Date</p>
                                      <p>2022-09-30 00:00:00</p>
                                  </div>
                                  <div class="col-3 mb-1">
                                      <p class="small text-muted mb-1">Order No.</p>
                                      <p>1</p>
                                  </div>
                                  <div class="col-3 mb-1">
                                      <p class="small text-muted mb-1">invoice No.</p>
                                      <p>1</p>
                                  </div>
                              </div>
  
                          
                          <hr color="grey">
                          <div class="py-2" style="border-radius:5px;">
                              <div class="row">
                                  <div class="col-md-4 col-lg-6">
  
                                      <p style="color:#f37a27 ;">Product name</p>
                                  </div>
                                  <div class="col-md-4 col-lg-3">
  
                                      <p style="color:#f37a27 ;">Quantity</p>
                                  </div>
                                  <div class="col-md-4 col-lg-3">
                                      <p class="text-center" style="color:#f37a27 ;">Price</p>
                                  </div>
                              </div>
                          </div>
                          
                              <div class="py-2" style="border-radius:5px;">
                                  <div class="row">
                                      <div class="col-md-4 col-lg-6">
  
                                          <p style="color:#f37a27 ;">Chemex</p>
                                      </div>
                                      <div class="col-md-4 col-lg-3">
  
                                          <p class="text-center" style="color:#f37a27 ;">2</p>
                                      </div>
                                      <div class="col-md-4 col-lg-3">
                                          <p class="text-center" style="color:#f37a27 ;">31 JOD</p>
                                      </div>
                                  </div>
                              </div>
  
                          
                          <div class="row mt-2">
                              <div class="col-md-8 col-lg-9">
                                  <p class="mb-0" style="color:#f37a27 ;">Shipping fees</p>
                              </div>
                              <div class="col-md-4 col-lg-3">
                                  <p class="mb-0 text-center" style="color:#f37a27 ;">3 JOD</p>
                              </div>
                          </div>
                      </div>
  
                      <hr color="grey">
  
                      <div class="row my-4">
  
                          <div class="col-md-8 col-lg-9">
                              <p class="lead fw-bold mb-0" style="color: #f37a27;">Total Price:</p>
                          </div>
  
                          <div class="col-md-4 col-lg-3">
                              <p class="lead fw-bold mb-0" style="color: #f37a27;">200 JOD</p>
                          </div>
                      </div>
  
                      <hr color="grey">
  
                      <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>
  
                      <div class="row">
                          <div class="col-lg-12">
  
                              <div class="horizontal-timeline" style="color:#f37a27;">
  
                                  <ul class="list-inline items d-flex justify-content-between">
                                      <li class="list-inline-item items-list">
                                          <p class="py-1 px-2 rounded text" style="background-color: green;">Ordered</p>
                                      </li>
                                      <li class="list-inline-item items-list">
                                          <p class="py-1 px-2 rounded text" style="background-color: #f37a27;">Shipped</p>
                                      </li>
                                      <li class="list-inline-item items-list">
                                          <p class="py-1 px-2 rounded text" style="background-color: #f37a27;">On the way
                                          </p>
                                      </li>
                                      <li class="list-inline-item items-list">
                                          <p class="py-1 px-2 rounded text" style="background-color: #f37a27;">Delivered
                                          </p>
                                      </li>
                                  </ul>
  
                              </div>
  
                          </div>
                      </div>
  
                      <p class="mt-4 pt-2">Want any help? <a href="contact.php" style="color: #f37a27;">Please contact
                              us</a></p>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div> --}}
  </div>
</section>

@endsection
