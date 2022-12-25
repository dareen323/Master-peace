@extends('layout')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

<style>
  .listing-item{
    background: #679692;
  }
    .ftco-navbar-light .navbar-brand{
  color: #343a40;
}
#ftco-navbar :hover{
/* color:#679692; */
  }

.navbar-brand small {
  color: #343a40;
}
#ftco-navbar :hover{
color:aliceblue;
  }
    .ftco-navbar-light{
        background: #679692eb !important;
    }
    .ftco-navbar-light .navbar-nav > .nav-item.cart > a .icon{
    color:#4e4747;
  }
    .ftco-navbar-light .navbar-nav > .nav-item > .nav-link{
        color:#000;
    }
	span{
        color:#343a40;
    }
	#ara {
		overflow: hidden;
	}

	#imgpic:hover {

		transform: scale(1.1);
	}

	.ftco-services1, .ftco-gallery {
	background-color:#f6f5f5;
   }
   .body{
	background-color:white;
	color:white;
   }
   .btn.btn-primary{
	    background:#679692 ;
    border: 1px solid #679692;
    color: #000;
   }
   .heading-section .subheading{
	color:#679692;
   }
   h2{
	color:#679692;
   }
   .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    color:#f6f5f5 !important;
   }
   .listing-item .listing-item-content .category{
   font-size: 12px;
    display: inline-block;
    padding: 5px 30px;
    background: #efba6c;
    border-radius: 30px;
    color: #fff;
    letter-spacing: .2em;
    text-transform: uppercase;}
	.listing-item:after {
    position: absolute;
    content: "";
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: 1;
    /* background:rgba(0, 0, 0, 0.042); */
}
	.listing-item .listing-item-content {
    position: absolute;
    bottom: 20px;
    /* padding-left: 20px; */
    /* padding-right: 20px; */
    z-index: 2;
    width: 90%;
    text-align: center;}
	.listing-item .listing-item-content h2{
		font-size:18px;
		color:white;
	}
	.listing-item-content h2 a {
    color: #fff;}
 
</style>


     <section class="ftco-section">
 
      <div class="container">
          <div class="row justify-content-center mb-5 pb-3 ">
              <div class="col-md-7 col-sm-6 heading-section ftco-animate text-center fadeInUp ftco-animated">
                <div class="sub-title">Our Tailor</div>             
                <h2 class="sec-title">Meet the Tailors</h2>              <p></p>
              </div>
          </div>
          <div class="row">
          @foreach($tailors as $tailorinfo)
       <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
        <div class="listing-item">
          <div class="listing-image">
            <img src="data:image/jpg;charset=utf8;base64,{{$tailorinfo['image']}}" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a class="px-3 mb-3 category bg-primary" href="single/{{ $tailorinfo->id }}">Make appoinment </a>
            <h2 class="mb-1"><a href="/profile
    
              ">{{$tailorinfo['name']}}</a></h2>
          </div>
        </div>
       </div>
       @endforeach

       {{-- <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
        <div class="listing-item">
          <div class="listing-image">
            <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-12.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a class="px-3 mb-3 category bg-primary" href="/profile
            ">Make appoinment </a>
            <h2 class="mb-1"><a href="/profile
    
              ">Ahmad Ibrahim</a></h2>
          </div>
        </div>
       </div> --}}
    
        {{-- <div class="col-lg-4 col-md-6 mb-4 aos-init" data-aos="fade-up">
         <div class="listing-item">
          <div class="listing-image">
            <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-13.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a class="px-3 mb-3 category bg-primary" href="/profile
            ">Make appoinment </a>
            <h2 class="mb-1"><a href="/profile
    
              ">Abdulla Essam</a></h2>
          </div>
        </div> --}}
       </div>
    
       
     
    
     
  
    </section>
    
     {{-- <div class="row">
       <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
        <div class="listing-item">
          <div class="listing-image">
            <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-11.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a class="px-3 mb-3 category bg-primary" href="/profile
            ">Make appoinment </a>
            <h2 class="mb-1"><a href="/profile

              ">Omar Ahmad</a></h2>
          </div>
        </div>
       </div>
    
       <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
        <div class="listing-item">
          <div class="listing-image">
            <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-12.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a class="px-3 mb-3 category bg-primary" href="/profile
            ">Make appoinment </a>
            <h2 class="mb-1"><a href="/profile

              ">Ahmad Ibrahim</a></h2>
          </div>
        </div>
       </div>
    
        <div class="col-lg-4 col-md-6 mb-4 aos-init" data-aos="fade-up">
         <div class="listing-item">
          <div class="listing-image">
            <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-13.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a class="px-3 mb-3 category bg-primary" href="/profile
            ">Make appoinment </a>
            <h2 class="mb-1"><a href="/profile

              ">Abdulla Essam</a></h2>
          </div>
        </div>
      </div>
     --}}

{{-- 
<div class="row">
  <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
   <div class="listing-item">
     <div class="listing-image">
       <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-11.jpg" alt="Image" class="img-fluid">
     </div>
     <div class="listing-item-content">
       <a class="px-3 mb-3 category bg-primary" href="/profile

       "><span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span></a>
       <h2 class="mb-1"><a href="/profile

         ">Omar Ahmad</a></h2>
     </div>
   </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
   <div class="listing-item">
     <div class="listing-image">
       <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-12.jpg" alt="Image" class="img-fluid">
     </div>
     <div class="listing-item-content">
       <a class="px-3 mb-3 category bg-primary" href="/profile

       "><span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked "></span></a>
       <h2 class="mb-1"><a href="/profile

         ">Ahmad Ibrahim</a></h2>
     </div>
   </div>
  </div>

   <div class="col-lg-4 col-md-6 mb-4 aos-init" data-aos="fade-up">
    <div class="listing-item">
     <div class="listing-image">
       <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-13.jpg" alt="Image" class="img-fluid">
     </div>
     <div class="listing-item-content">
       <a class="px-3 mb-3 category bg-primary" href="/profile

       "><span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star    checked "></span>
       <span class="fa fa-star checked"></span></a>
       <h2 class="mb-1"><a href="/profile

         ">Abdulla Essam</a></h2>
     </div>
   </div>
  </div> --}}

 
{{-- <div class="col text-center">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
      </ul>
    </div>
  </div> --}}

@endsection