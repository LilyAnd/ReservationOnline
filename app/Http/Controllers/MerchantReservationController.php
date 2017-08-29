<?php

namespace App\Http\Controllers;

use DB;
use App\Item;
use App\Reservations_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantReservationController extends Controller
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
        $id_user =Auth::User()->id;

        $reservations_items = DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->leftJoin('users', 'users.id', '=', 'reservations.id')
        ->where('id_admin', $id_user)
        ->select('items.item_name', 'reservations.id_reservation', 'users.name','reservations_items.reservation_status', 'reservations_items.alasan','reservations_items.quantity','reservations.reservation_date')
        ->where('reservation_status', '=', null)
        ->distinct('id_reservation', 'name')
        ->paginate(6);

        return view('merchantreserv.index',compact('reservations_items'));
    }

    public function detail($id_reservation)
    { 
        $reservation=DB::table('reservations')
        ->rightJoin ('users', 'users.id', '=', 'reservations.id')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();
        $reservations_items=DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();

        return view('merchantreserv.detailHistory',compact('reservations_items','reservation'));
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


    public function history()
    {
        $id_user =Auth::User()->id;

        $reservations_items = DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->leftJoin('users', 'users.id', '=', 'reservations.id')
        ->where('id_admin', $id_user)
        ->select('items.item_name','reservations.id_reservation','users.name','reservations_items.reservation_status','reservations_items.alasan','reservations_items.quantity','reservations.reservation_date')
        ->where('reservation_status', '!=', NULL)
        ->distinct('id_reservation','name')
        ->paginate(6);

        return view('merchantreserv.res',compact('reservations_items'));
    }

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
    public function edit($id_reservation)
    {
        $reservation=DB::table('reservations')
        ->rightJoin ('users', 'users.id', '=', 'reservations.id')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();
        $reservations_items=DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();

        return view('merchantreserv.detail',compact('reservations_items','reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_reservation)
   {
       
       $reservations_items=Reservations_item::find($id_reservation);
       $id_item=DB::table('reservations_items')
       ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
       ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
       ->where('reservations.id_reservation',$id_reservation)
       ->get();
       $reservations_items->total_price=$request->total_price;
       $reservations_items->reservation_status = $request->reservation_status;
       // dd($id_item->all());
       foreach($id_item as $key => $value)
       {
           //dd($value);
           if($request->reservation_status == 'Diterima')
           {
               // dd($value);
               //dd($value->item_stock[$key].' '.$value->quantity[$key]);
               $item=Item::find($value->id_item);
               $item->item_stock=$value->item_stock - $value->quantity;
               $item->save();            }            else
               $value->item_stock = $value->item_stock;        }    
       $reservations_items->alasan = $request->alasan;
       $reservations_items->save();        return redirect()->route('reservmerchant.index');
   }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_reservation)
    {
        $reservations_items=Reservations_item::find($id_reservation);
        $reservations_items->delete();
        return redirect()->route('reservmerchant.index');
    }
}
