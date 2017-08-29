<?php

namespace App\Http\Controllers;

use App\Merchant;
use Illuminate\Http\Request;
use View;

class MerchantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $merchants = Merchant::paginate(10);

        // return view('merchant.index',compact('merchants'));

        return view('admin.merchant');

    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    //     return view::make('merchant.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    //     $this->validate($request, array(
    //             'merchant_name' => 'required|max:255',
    //             'merchant_address' => 'required',
    //             'merchant_phone_number' => 'required',
    //             'start_time' => 'required',
    //             'end_time' => 'required'
    //     ));
    //     $merchants = $request->all();
    //     $merchants=new Merchant;
    //     $merchants->id_merchant=$request->id_merchant;
    //     $merchants->merchant_name=$request->merchant_name;
    //     $merchants->merchant_address=$request->merchant_address;
    //     $merchants->merchant_phone_number=$request->merchant_phone_number;
    //     $merchants->start_time=$request->start_time;
    //     $merchants->end_time=$request->end_time;
    //     $merchants->save();
       

    //     return redirect()->route('merchant.index');
    // }

    // *
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id_merchant)
    // {
    //     //
    //     $merchants=Merchant::find($id_merchant);

    //     return view('merchant.edit',compact('merchants', $merchants));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id_merchant)
    // {
    //     //
    //     $merchants=Merchant::find($id_merchant); 
    //     $merchants->merchant_name=$request->merchant_name;
    //     $merchants->merchant_address=$request->merchant_address;
    //     $merchants->merchant_phone_number=$request->merchant_phone_number;
    //     $merchants->start_time=$request->start_time;
    //     $merchants->end_time=$request->end_time;
    //     $merchants->save();

    //     return redirect()->route('merchant.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id_merchant)
    // {
    //     //
    //     $merchants = Merchant::find($id_merchant);
    //     $merchants->delete();
    //     return redirect()->route('merchant.index');
    // }
}
