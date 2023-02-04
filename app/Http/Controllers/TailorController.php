<?php

namespace App\Http\Controllers;

use App\Models\Tailor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Storage;


class TailorController extends Controller
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


    public function showtailorpage($id)
    {
        $tailor = tailor::where('id', $id)->get();
        // dd($tailor[0]->certificate);
        $appointmentsAndusers = DB::table('users')->join('appointment', 'appointment.user_id', '=', 'users.id')->where('appointment.tailor_id', $id)->get();

        return view('tailorpage', ['id' => $id, 'tailor' => $tailor, 'appointmentsAndusers' => $appointmentsAndusers]);
    }
    
    public function showtailorpage1()
    {
        $tailors=tailor::all();
      return view('taylors',['tailors'=>$tailors]);
    }

    public function edittailorinfo($id)
    {
        $tailor = tailor::where('id', $id)->get();
        return view('editDocProfile', ['id' => $id, 'tailor' => $tailor]);
    }

    public function updatetailorProfile(Request $request, $id)
    {



        $request->validate([
            'Name' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255'],
            'Password' => ['required'],
            'available_time' => ['required'],
            'city' => ['required'],
            'adress' => ['required'],
            'phone' => ['required'],
           


        ]);
        if ($request->file('Personal')&& $request->file('work1') && $request->file('work2')) {


            $image = base64_encode(file_get_contents($request->file('Personal')));
            $work1 = base64_encode(file_get_contents($request->file('work1')));
            $work2 = base64_encode(file_get_contents($request->file('work2')));

            tailor::where('id', $id)->update(['name' => request('Name'), 'password' => Hash::make($request->password), 'available_time' => request('available_time'), 'image' => $image, 'work1'=>$work1,'work2'=>$work2 ,'city'=>request('city'), 'adress'=>request('adress'),'phone'=>request('phone')]);

            return redirect("/tailorprofile/$id")->with('mssg', 'Personal information updated successfully');

         }elseif ($request->file('Personal')) {

            $image = base64_encode(file_get_contents($request->file('Personal')));
            $work1 = base64_encode(file_get_contents($request->file('work1')));
            $work2 = base64_encode(file_get_contents($request->file('work2')));


            tailor::where('id', $id)->update(['name' => request('Name'), 'email' => request('Email'), 'password' => Hash::make($request->password), 'available_time' => request('available_time'), 'image' => $image,'work1'=>$work1,'work2'=>$work2 ,'city'=>$city, 'adress'=>$adress,'phone'=>$phone]);

            return redirect("/tailorprofile/$id")->with('mssg', 'Personal information updated successfully');
        } 
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
    public function showtaylorprofile($id)
    {
        $tailor = tailor::where('id', $id)->get();
        return view('singletaylor', ['id' => $id, 'tailor' => $tailor]);
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
