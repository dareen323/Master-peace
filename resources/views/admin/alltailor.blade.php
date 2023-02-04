@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total number of tailors</h6>
                    <p class="m-b-0"><span class="f-right">{{count($alltailors)}} </span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Approved tailors</h6>
                    <p class="m-b-0"> <span class="f-right">{{count($approved)}} </span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Pending tailors</h6>
                    <p class="m-b-0"><span class="f-right">{{count($pending)}} </span></p>
                </div>
            </div>
        </div>
    </div>
</div>

        <br>
   
        <table class="table text-center table-hover">
            <thead style="color:#1D2A4D; ">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody  style="color:#354F8E">
            @foreach($alltailors as $tailors)
                <tr>
                    <th scope="row">{{$tailors['id']}}</th>
                    <td>{{$tailors['name']}}</td>
                    <td>{{$tailors['email']}}</td>
                    <td>0{{$tailors['phone']}}</td>
                    <td>{{$tailors['city']}}</td>
                    <td>
                        <div>
                            <a class="fa-solid fa-user-pen me-2" style="color:green" href="/admin/edittailor/{{$tailors['id']}}"></a>
                            <a class="fa-solid fa-trash" style="color: red; cursor: pointer;" onclick="deletetailor(this,{{$tailors['id']}})"></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection