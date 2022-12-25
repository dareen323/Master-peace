@extends('layout')

@section('content')
    <!-- banner -->
    <div class="heading-container heading-resize heading-button">
        <div class="heading-background heading-parallax bg-4" style="background-image:url()">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-wrap">
                            <div class="page-title">
                                <h1></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="text-center mx-auto mb-5" style="max-width: 500px;">
    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Packages</h5>
    <h1 class="display-4">Medical Products</h1>
</div>


<div class="container ">
    <div class="container d-flex flex-wrap gap-5 justify-content-center">
        @foreach ($products as $product)
          @if($product->quantity>0)
        <div class="bg-light rounded text-center m-1"  style="width: 40%">
            <div class="position-relative">
                <img class="img-fluid rounded-top " style="width: 250px" src="data:image/jpg;charset=utf8;base64,{{$product['image']}}" alt="0000000">
            </div>
            <div class="py-2 m-2">
                <h3>{{$product['name']}}</h3>
                <p  class="px-3" style="text-align: justify">{{$product['description']}}</p>
                <a href="order/{{$product['id']}}" class="btn btn-primary rounded-pill py-3 px-5 my-2">Order Now</a>
            </div>
        </div>
          @endif
        @endforeach

        </div>
    </div>

@endsection
