@extends('admin.index')

@section('content')
    <br>
    <div class="container w-50">
        <h4>Edit tailor Information</h4>
        <form action="/admin/storeEdittailor/{{$tailor['id']}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$tailor['name']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$tailor['email']}}" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"value="{{$tailor['password']}}" >
            </div>
            {{-- <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password"  class="form-control" id="confirmPassword" name="confirmPassword">
            </div> --}}
            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file"  class="form-control" id="image" name="image" value="{{$tailor['image']}}">
            </div>
          
            <div class="mb-3">
                <label for="available_time" class="form-label">Available time</label>
                <input type="text" id="available_time" name="available_time" value="{{$tailor['available_time']}}">
            </div>
            <div class="mb-3">
                <label for="available_time" class="form-label">City</label>
                <input type="text" id="available_time" name="city" value="{{$tailor['city']}}">
            </div>
            <div class="mb-3">
                <label for="available_time" class="form-label">Phone</label>
                <input type="text" id="available_time" name="phone"value="{{$tailor['phone']}}" >
            </div>
            {{-- <div class="mb-3">
                <label for="role" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" id="role" name="status">
                    <option value="Pending">Pending</option>
                    <option value="Approve">Approve</option>
                    <option value="Deny">Deny</option>
                </select>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
