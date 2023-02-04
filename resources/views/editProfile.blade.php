@extends('without')


@section('content')

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

                <div class="container">
                    <div class="row row justify-content-md-center">
                        <div class="col-6 col-md-4">
                            <h2 class="text-center">Edit form</h2>


                            <form action="{{route('updateProfile' , $id)}}" method="POST" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @foreach ($User as $userinfo)
                                    <div class="mb-3">
                                        <label for="Name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="Name" name="Name"
                                               value="{{$userinfo->name}}" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="Email" id="exampleInputEmail1"
                                               value="{{$userinfo->email}}" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">City</label>
                                        <input type="text" class="form-control" name="City" id=""
                                               value="{{$userinfo->city}}" aria-describedby="emailHelp">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" id=""
                                               value="{{$userinfo->address}}" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                                        <input type="number" class="form-control" name="phone" id=""
                                               value="{{$userinfo->phone}}" aria-describedby="emailHelp">
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="password" class="form-label">New Password</label>
                                        <input type="Password" class="form-control" name="password" id="password"
                                               aria-describedby="Password" value="{{$userinfo->password}}">
                                    </div> --}}
                                 
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                @endforeach
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
