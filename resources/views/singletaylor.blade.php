@extends('layout')

@section('content')

<style>
   a{
    color:aliceblue !important;
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
    .profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
    background-size: cover;
    background-repeat: no-repeat
}
    </style>
    @if(session('mssg'))
        <div class="row justify-content-md-center py-5">
            <h3 class="alert alert-success text-center col-md-4">{{session ('mssg')}}</h3>
        </div>
    @endif
    {{-- @foreach($tailor as $tailorinfo)

        <div class="container bootstrap snippets bootdey py-5">
            <div class="row">
                <div class="profile-nav col-md-4">
                    <div class="panel border ">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="data:image/jpg;charset=utf8;base64,{{$tailorinfo['image']}}"
                                     alt="">
                            </a>
                            <h1>{{$tailorinfo->name}}</h1>
                            <p>{{$tailorinfo->overview}}</p>
                        </div>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="w-100"><a href="{{route('editDocProfile' , $id)}}"> <i class="fa fa-edit"></i>
                                    Edit profile</a></li>
                        </ul>
                        <hr class="m-0">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            @method('POST')


                            <input type="submit" value="Logout"
                                   style="border:none; border-radius:0px 0px 3px 3px; height:52px"
                                   class="w-100 btn btn-outline-danger">

                        </form>
                    </div>
                </div>
             

@endforeach
               --}}


            </div>
        </div>
        <div class="row py-5 px-4">
        <div class="col-md-11 mx-auto">
           <!-- Profile widget --> 
           <div class="bg-white shadow rounded overflow-hidden">
              <div class="px-4 pt-0 pb-4 cover">
                 <div class="media align-items-end profile-head">
                    <div class="profile mr-3">
                        @foreach($tailor as $tailorinfo)
                       <img src="data:image/jpg;charset=utf8;base64,{{$tailorinfo['image']}}" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                       {{-- <a href="" class="btn btn-outline-dark btn-sm btn-block">Book Now</a> --}}
                    </div>
                    <div class="media-body mb-5 text-white">
                       <h4 class="mt-0 mb-0">{{$tailorinfo->name}}</h4>
                       <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>{{$tailorinfo->city}}</p>
                    </div>
                 </div>
              </div>
              @guest
              <div class="bg-light p-4 d-flex justify-content-end text-center">
                <a href="/login" class="btn btn-primary text-white py-3 px-4"><b>Make appoinment Now</b></a>                
              </div>
              @endguest
              @auth
              <div class="bg-light p-4 d-flex justify-content-end text-center">
                <a href="/appointment/{{$tailorinfo->id}}" class="btn btn-primary text-white py-3 px-4"><b>Make appoinment Now</b></a>     
              </div>
              @endauth
              <div class="px-4 py-3">
                 <h5 class="mb-0">About</h5>
                 <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0"><b>Mobile:</b> 0{{$tailorinfo->phone}}</p>
                    <p class="font-italic mb-0"> <b>Available time:</b> {{$tailorinfo->available_time}}</p>
                    <p class="font-italic mb-0"><b>Bio:</b> {{$tailorinfo->overview}}</p>
                    <p class="font-italic mb-0"><b>Address:</b> {{$tailorinfo->adress}}</p>

                 </div>
              </div>
              <div class="py-4 px-4">
                 <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent Works</h5>
                    <a href="#" class="btn btn-link text-muted">Show all</a> 
                 </div>
                 <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="data:image/jpg;charset=utf8;base64,{{$tailorinfo['work1']}}" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="data:image/jpg;charset=utf8;base64,{{$tailorinfo['work2']}}" alt="" class="img-fluid rounded shadow-sm"></div>
                    {{-- <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div> --}}
                 </div>
              </div>
           </div>
        </div>
        @endforeach
</div>
        @endsection
