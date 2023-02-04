@extends('admin.index')

@section('content')


<div class="d-flex justify-content-between m-3 ">
    <div class="h4" style="color: black">All Appointment</div>
</div>
<table class="table text-center table-hover">
    <thead style="color:#1D2A4D; ">
    <tr>
        <th scope="col">#</th>
        <th scope="col">tailor Name</th>
        <th scope="col">User Name</th>
        <th scope="col">Appointment Time</th>
        <th scope="col">delete</th>

        {{-- <th scope="col">Actions</th> --}}
    </tr>
    </thead>
    <tbody style="color:#354F8E">
    @foreach($userstailorsAppointments as $appointment)
        {{-- @php
            $user = App\Models\User::find($appointment['user_id']);
            $tailor_id=$appointment['tailor_id'];
            $tailor = App\Models\tailor::all()->where('id','=',$tailor_id);
        @endphp --}}
        <tr>
            {{-- <th scope="row"></th> --}}

            <td>{{$appointment->id}}</td>
            <td>{{$appointment->name}}</td>
            <td>{{$appointment->user_name}}</td>
            <td>{{$appointment->appointment_time}}</td>
             <td>  
                 <div>
                    {{-- <a class="fa-solid fa-user-pen me-2"  style="color:green" href="editAppointment/{{$appointment->id}}"></a> --}}
                   <a class="fa-solid fa-trash"  style="color: red; cursor: pointer;"  onclick="deleteAppointment(this,{{$appointment->id}})"></a>
                </div>
            </td>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection