<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Admin;
use App\Item;
use Illuminate\Http\Request;

class CustreservController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function daftar()
    {
        $admins=Admin::all();
        return view('custreserv.daftar',compact('admins'));
    }

    public function index($id)
    {
    	$admins=DB::table('admins')
        ->where('admins.id',$id)
        ->get();
    	$items=DB::table('items')
    	->leftJoin ('admins', 'admins.id', '=', 'items.id')
        ->where('items.id',$id)
    	->select('items.item_name','items.item_price','items.item_stock','admins.name','admins.name','admins.email')
    	->get();

    	return view('custreserv.detail',compact('admins','items'));
    }


    public function reservasi($id)
    {
        $users=User::all();
        $reservations=DB::table('reservations')
        ->rightjoin('admins', 'reservations.id_admin', '=', 'admins.id')
        ->where('admins.id',$id)
        ->get();
        $admins=DB::table('admins')
        ->where('admins.id',$id)
        ->get();
        $items=DB::table('items')
        ->leftJoin ('admins', 'admins.id', '=', 'items.id')
        ->where('admins.id',$id)
        ->get();
        return view('custreserv.checkreservasi',compact('items','admins','reservations','users'));
    }

    public function postReservasi(Request $request)
    {
        // dd($request->all());
        $reservations_items=DB::table('reservations_items')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->paginate(6);

       //  $this->validate($request, [

       //     //'product_id' => 'required|exists:products,product_id',

       //     'quantity' => 'required|integer|min:1'

       //     //'size' => 'required'

       // ]);

        $id_admin=$request->input('id_admin');// admins
        // $customers = Customer::find($customer_id);
        $id_item=$request->input('id_item');
        $reservation_status=$request->input('reservation_status');
        $id_user=Auth::User()->id;
        $quantity=$request->input('quantity');
        $total_price=$request->input('total_price');
        $reservation_date= $request->input('reservation_date');
        //Carbon::now();
        //dd($id_customer);

        $id_reservation=DB::table('reservations')->insertGetId([
            'id_admin'=>$id_admin,
            'id'=>$id_user,
            'reservation_date'=>$reservation_date
            ]);

        foreach ($id_item as $key => $value) {
        DB::table('reservations_items')->insert([
            "id_reservation"=>$id_reservation,
            "id_item"=>$value,
            'reservation_status'=>$reservation_status,
            "total_price"=>$total_price,
            "quantity"=>$quantity[$key]
        ]);
       }

       $reservasidata = DB::table('reservations')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();

       $details = DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->leftJoin ('admins', 'admins.id', '=', 'reservations.id_admin')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();
        

        // return redirect ('show');
         return view ('custreserv.reservdetail', compact('details','reservasidata'));
    }

    public function show()
    {
        $reservations_items=DB::table('reservations_items')
         ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->paginate(6);
        
        return view('custreserv.tabel',compact('reservations_items'));
    }

    public function detail($id_reservation)
    { 
        $reservasidata = DB::table('reservations')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();

       $details = DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->leftJoin ('admins', 'admins.id', '=', 'reservations.id_admin')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();
    
        $reservations_items = DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();
        
        return view('custreserv.reservdetail',compact('reservations_items', 'reservasidata', 'details'));
    }

    public function history()
    {
        $id = Auth::User()->id;
        $history = DB::table('reservations')
        ->leftJoin('reservations_items', 'reservations_items.id_reservation', '=', 'reservations.id_reservation')
        ->leftJoin('admins', 'admins.id', '=', 'reservations.id_admin' )
        ->where('reservations.id',$id)
        ->paginate(6);

        return view('custreserv.history', compact('history'));
    } 

}

