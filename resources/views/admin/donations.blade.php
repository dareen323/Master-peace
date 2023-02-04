@extends('admin.index')

@section('content')


<div class="d-flex justify-content-between m-3">
    <div class="h4" style="color: black">All Contact Response</div>
</div>
<table class="table text-center table-hover">
    <thead style="color:#1D2A4D; ">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col"> Subject</th>
        <th scope="col"> Massage</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody style="color:#354F8E">
    @foreach($contact as $cont)
        
        <tr>
            <td>{{$cont->id}}</td>
            <td>{{$cont->name}}</td>
            <td>{{$cont->email}}</td>
            <td>{{$cont->subject}}</td>
            <td>{{$cont->message}}</td>
                 {{-- <div>
                    <a class="fa-solid fa-user-pen me-2"  style="color:green" href="editAppointment/{{$donation->id}}"></a>
                   <a class="fa-solid fa-trash"  style="color: red"  onclick="deleteAppointment(this,{{$donation->id}})"></a>
                </div> --}}
                <td>
                <div>
                    <a class="fa-solid fa-trash" style="color: red; cursor: pointer; " onclick="deletecontact(this,{{$cont['id']}})" ></a>
        
                </div></td>
        </tr>
        
    @endforeach
    </tbody>
</table>
@endsection