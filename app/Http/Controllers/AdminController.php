<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\tailor;
use App\Models\product;
use App\Models\contact;
use App\Models\appointment;
use App\Models\departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $NumallUsers = count(User::all());
        $Numalltailors = count(tailor::all());
        $NumallOrders = count(Order::all());
        $NumallAppointments = count(appointment::all());
        $NumallProducts = count(product::all());
        $NumallDepartments = count(departments::all());
        // $sum = Donation::sum('donationAmount');
        $NumallContact = count(contact::all());


        return view('admin.overview', ['NumallUsers' => $NumallUsers, 'Numalltailors' => $Numalltailors, 'NumallOrders' => $NumallOrders, 'NumallAppointments' => $NumallAppointments, 'NumallProducts' => $NumallProducts , 'NumallDepartments'=>$NumallDepartments,'NumallContact' => $NumallContact,]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function alltailor()
    {

        $alltailors = tailor::all();
        $approved = tailor::all('status')->where('status', '=', 'Approve');
        $pending = tailor::all('status')->where('status', '=', 'pendding');
        return view('admin.alltailor', ['alltailors' => $alltailors, 'approved' => $approved, 'pending' => $pending]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function allProduct()
    {
        //TODO get All product From table
        $allProduct = product::all();
        return view('admin.allProduct', ['allProduct' => $allProduct]);
    }

    public function allAppointment()
    {


        $userstailorsAppointments = DB::table('users')
            ->join('appointment', 'users.id', '=', 'appointment.user_id')
            ->join('tailors', 'tailors.id', '=', 'appointment.tailor_id')
            ->select('users.*', 'tailors.*', 'appointment.*')
            ->get();




        $names = DB::table('users')
            ->join('appointment', 'users.id', '=', 'appointment.user_id')
            ->join('tailors', 'tailors.id', '=', 'appointment.tailor_id')
            ->select('users.*', 'appointment.*')
            ->get();



        foreach ($names as $name) {

            $name->user_name = $name->name;
        }


        $counter = 0;
        foreach ($userstailorsAppointments as $usr) {
            for ($i = $counter; $i < count($names); $i++) {

                $usr->user_name = $names[$i]->user_name;
                $counter++;

                break;
            }
        }



        return view('admin.allAppointment', ['userstailorsAppointments' => $userstailorsAppointments]);
    }

    public function allDepartments(){

        $allDepartments=departments::all();

        return view('admin.allDepartments', ['allDepartments' => $allDepartments]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function allUsers()
    {

        $allUsers = User::all();
        // $approved = tailor::all('status')->where('status','=','Approve');
        // $pending = tailor::all('status')->where('status','=','pending ');
        // dd(count($allUsers));
        return view('admin/allUsers', ['allUsers' => $allUsers]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function addProduct(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $image = base64_encode(file_get_contents($request->file('image')));
        $product->image = $image;
        $product->save();

        return redirect('/admin/allProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function allContact(){

        $contact = contact::all();

        return view('admin.donations' , ['contact' => $contact]);
    }

    public function allDepartmentspost(Request $request){

        $Department = new departments();
        $Department->name = $request->name;
        $Department->description = $request->description;
        $Department->numberOfMembers = $request->members;

        $Department->save();
        return redirect('/admin/allDepartments');


    }

    public function deleteDepartment($id){


        $Department = departments::destroy($id);

        return response()->json($Department);
    }

    public function editDepartment($id){

        $Department = departments::find($id);

        return view('admin.editDepartment' , ['Department' => $Department]);

    }

    public function storeEditDepartment($id){

        departments::where('id', $id)->update(['name' => request('name'), 'description' => request('description'), 'numberOfMembers' => request('Members')]);

        return redirect('/admin/allDepartments')->with('mssg', 'Department information updated successfully');


        

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editUser($id)
    {
        $user = User::find($id);

        return view('admin.editUser', ['user' => $user]);
    }

    public function editProduct($id)
    {
        $product = product::find($id);

        return view('admin.editProduct', ['product' => $product]);
    }

    public function edittailor($id)
    {
        $tailor = tailor::find($id);

        return view('admin.edittailor', ['tailor' => $tailor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function storeEdit(Request $request, $id)
    {
        // dd($request);
        //TODO: handle update user
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect('admin/allUsers')->withSuccess('User Updated');
    }

    public function storeEditProduct(Request $request, $id)
    {

        $product = product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $image = base64_encode(file_get_contents($request->file('image')));
        $product->image = $image;
        $product->save();
        return redirect('admin/allProduct')->withSuccess('Product Updated');
    }

    public function storeEdittailor(Request $request, $id)
    {
        //TODO: handle update tailor
        //        dd($request);
        $tailor = tailor::find($id);
        $tailor->email = $request->email;
        $tailor->name = $request->name;
        $tailor->password = $request->password;
        $image = base64_encode(file_get_contents($request->file('image')));
        $tailor->image = $image;
        $tailor->city = $request->city;
        $tailor->phone = $request->phone;
        $tailor->save();
        return redirect('admin')->withSuccess('tailor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     */
    public function destroy($id)
    {
        $allUsers = User::destroy($id);

        return response()->json($allUsers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     */
    public function deletetailor($id)
    {
        $tailor = tailor::destroy($id);

        return response()->json($tailor);
    }

    public function deletecontact($id)
    {
        $contact = contact::destroy($id);

        return response()->json($contact);
    }

    public function deleteProduct($id)
    {
        $product = product::destroy($id);

        return response()->json($product);
    }

    public function deleteAppointment($id)
    {
        $appointment = appointment::destroy($id);
        return response()->json($appointment);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function allOrder()
    {

        $allOrders = Order::all();
        $approved = Order::all('status')->where('status', '=', 'Approve');
        $pending = Order::all('status')->where('status', '=', 'pendding');
        return view('admin.allOrder', ['allOrders' => $allOrders, 'approved' => $approved, 'pending' => $pending]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     */
    public function deleteOrder($id)
    {
        $order = Order::destroy($id);

        return response()->json($order);
    }



    public function editOrder($id)
    {
        $order = Order::find($id);

        return view('admin.editOrder', ['order' => $order]);
    }



    public function storeEditOrder(Request $request, $id)
    {

        $order = Order::find($id);
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->national = $request->national;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->status = $request->status;
        $order->save();
        return redirect('admin')->withSuccess('Order Updated');
    }
}
