@extends('without')

@section('style')

    {{-- <link rel="stylesheet" href="{{asset('style/profileStyle.css')}}"> --}}

@endsection

@section('content')

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

                <div class="container">
                    <div class="row row justify-content-md-center">
                        <div class="col-6 col-md-4">
                            <h2 class="text-center">Edit form</h2>


                            <form action="{{route('updatetailorProfile' , $id)}}" method="POST"
                                  enctype="multipart/form-data">

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

                                @foreach ($tailor as $tailorinfo)
                                    <div class="mb-3">
                                        <label for="Name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="Name" name="Name"
                                               value="{{$tailorinfo->name}}" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="Email" id="exampleInputEmail1"
                                               value="{{$tailorinfo->email}}" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Password" class="form-label">Password</label>
                                        <input type="Password" class="form-control" name="Password" id="Password"
                                               value="{{$tailorinfo->password}}" aria-describedby="Password">
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2" for="available">Select Availability</label>
                                        <input type="text" class="form-control" name="available_time" id="available"
                                               value="{{$tailorinfo->available_time}}" aria-describedby="Password">

                                    </div>
                                    <div class="mb-3">
                                        <label for="Certificate" class="form-label">Bio</label>
                                        <input type="text" class="form-control" id="Certificate" name="overview"
                                               value="{{$tailorinfo->overview}}" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Certificate" class="form-label">City</label>
                                        <input type="text" class="form-control" id="Certificate" name="city"
                                               value="{{$tailorinfo->city}}" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Certificate" class="form-label">address</label>
                                        <input type="text" class="form-control" id="Certificate" name="adress"
                                               value="{{$tailorinfo->adress}}" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Certificate" class="form-label">Phone</label>
                                        <input type="number" class="form-control" id="Certificate" name="phone"
                                               value="{{$tailorinfo->phone}}" aria-describedby="">
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for="Personal" class="form-label">Personal Photo</label>
                                        <input type="file" class="form-control" id="Personal" name="Personal"
                                               value="{{$tailorinfo->image}}" aria-describedby="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="Personal" class="form-label"> your work 1</label>
                                        <input type="file" class="form-control" id="Personal" name="work1"
                                               value="{{$tailorinfo->work1}}" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Personal" class="form-label">your work 2</label>
                                        <input type="file" class="form-control" id="Personal" name="work2"
                                               value="{{$tailorinfo->work2}}" aria-describedby="">
                                    </div>

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
