<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tailor;
use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//  use App\Http\Controllers\Auth;
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function appointmentPage($id)
    {

        $availableForDepartment = tailor::where('department_id', $id)->get();
        return view('appointment', ['id' => $id, 'availableForDepartment' => $availableForDepartment]);
    }

    public function appointmentStore(Request $request,$id)
    {

        $appointment = new appointment();
        $request->validate([
           'date'=>['required'],
           'time'=>['required'],
        ]);
        $appointment->user_id = Auth::user()->id;
        $appointment->tailor_id = $id;


        $appointment->appointment_time = request('date');
        $appointment->time = request('time');
        $appointment->description = request('description');
        // $appointment->appointment_time = $appointment_time;
        // $email = request('email');
        // $user = User::where('email', $email)->get();
        // $user_id = $user[0]->id;

        // $time = explode(',', $request->appointment_time);
                // dd($request->appointment_time);
     
                // $appointment->user_id = $user_id;
                // $time = explode(',', request('time'));
             
        
        // $appointment->tailor_id = $request->tailor_id;
        // select random_int ((select all from tailors where department_id= $id and available_time =$appointment->appointment_time)) then push id number foreeach inside array then select random number from an array
        // $availabletailors = tailor::where([
        //     ['department_id', "$id"],
        //     ['available_time', "$appointment->appointment_time"],
        // ])->get();

        // $ArrayofIDs=[];

        // foreach ($availabletailors as $tailor)
        // {
        //     array_push($ArrayofIDs, $tailor->id);

        // }

        // $rand_id = array_rand($ArrayofIDs, 1);
        // $rand_id++;

        // $appointment->_id = $time[1];

        $appointment->save();

        return redirect("/")->with('mssg', 'Your appointment has been booked successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
