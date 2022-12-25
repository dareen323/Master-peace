<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Tailor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);


        return redirect(RouteServiceProvider::HOME);
    }


    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function createDoc()
    {
        return view('auth.registertailor');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeDoc(Request $request)
    {

        $image = base64_encode(file_get_contents($request->file('image')));
        // $certificate = base64_encode(file_get_contents($request->file('certificate')));
$phone='phone';
$available_time='available_time';

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['required'],
            'overview' => ['required'],
            'available_time' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'overview' => ['required']
        ]);

        $tailor = Tailor::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->$image,
            'phone' => $request->$phone,
            'available_time' =>$request-> $available_time,
            'password' => Hash::make($request->password),
            'overview' => $request->overview,
            // 'department_id' => $request->department
        ]);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Tailor',
            'tailor_id' => $tailor->id,
        ]);

        event(new Registered($user));

        Auth::login($user);


        return redirect(RouteServiceProvider::HOME);
    }

}
