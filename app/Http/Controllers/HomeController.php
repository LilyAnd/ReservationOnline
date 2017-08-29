<?php

namespace App\Http\Controllers;

use Session;
use View;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('home',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view::make('home.create');
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
        //  $this->validate($request, array(
        //         'customer_name' => 'required|max:255',
        //         'customer_gender' => 'required',
        //         'customer_address' => 'required',
        //         'customer_phone_number' => 'required'
        // ));

        // $customers = $request->all();
        // $customers=new Customer;
        // $customers->id_customer=$request->id_customer;
        // $customers->customer_name=$request->customer_name;
        // $customers->customer_gender=$request->customer_gender;
        // $customers->customer_address=$request->customer_address;
        // $customers->customer_phone_number=$request->customer_phone_number;

        // $customers->save();

        // return redirect()->route('home.index')->with('info','Customer Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_customer)
    {
        //  $customers=Customer::find($id_customer);
        // return view('home.edit',compact('customers', $customers));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_customer)
    {
       //  $customers=Customer::find($id_customer);
       // $customers->customer_name=$request->customer_name;
       // $customers->customer_gender=$request->customer_gender;
       // $customers->customer_address=$request->customer_address;
       // $customers->customer_phone_number=$request->customer_phone_number;
       // $customers->save();
       // return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_customer)
    {
        // $customers = Customer::find($id_customer);
        // $customers->delete();
        // return redirect()->route('home.index');
    }
}
