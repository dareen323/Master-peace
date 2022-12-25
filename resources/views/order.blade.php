@extends("layout")
@section('content')


<div class="text-center mx-auto mb-5" style="max-width: 500px;">
    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"></h5>
    <h1 class="display-4"> Add Order</h1>
</div>

    <div class="d-flex w-100 justify-content-center mt-5">
        <form class="row g-3 w-50" method="get">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <span class="text-danger" id="cardholderNames">*</span>
                <input type="text" name="name" class="form-control" id="cardholderName" placeholder="Name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">National ID </label>
                <span class="text-danger" id="inputIds">*</span>
                <input type="text" name="national" class="form-control" id="inputId">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <span class="text-danger" id="billingAddresss">*</span>
                <input type="text" name="address" class="form-control" id="billingAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Phone</label>
                <span class="text-danger" id="spanPhone">*</span>
                <input type="text" name='phone' class="form-control" id="phone" placeholder="07XXXXXXXX">
            </div>
            <div class="col-md-12">
                <label for="inputCity" class="form-label">City</label>
                <span class="text-danger" id="inputCitys">*</span>
                <input type="text" class="form-control" name="city" id="inputCity">
                <input type="hidden" value="{{$id}}" class="form-control" name="city" id="product_id">

            </div>
            <div class="col-12">
                <button type="button" onclick="addOrder()" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src={{asset('js/order.js')}}></script>

@endsection

