<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Admin;
use Session;
use View;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    public function index()
    {
        // $items = Item::paginate(10);
        $id_user =Auth::User()->id;
        $items = DB::table('items')->where('id', $id_user)
        ->paginate(10);

        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $items = Item::all();
     
        return view::make('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'item_name' => 'required|max:255',
                'item_stock' => 'required',
                'item_price' => 'required',
            ));

        $items = $request->all();
        $items = new Item;
        $items->item_name = $request->item_name;
        $items->item_stock = $request->item_stock;
        $items->item_price = $request->item_price;
        $items->id = Auth::User()->id;
        $items->save();

      return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        $item->item_name = $request->item_name;
        $item->item_stock = $request->item_stock;
        $item->item_price = $request->item_price;
        $items->save();

        return redirect()->route('item.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_item)
    {
        $item = Item::find($id_item);

        return view('item.edit', compact('item', $item));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_item)
    {
        $item = Item::find($id_item);
        $item->item_name = $request->item_name;
        $item->item_stock = $request->item_stock;
        $item->item_price = $request->item_price;
        $item->id= Auth::User()->id;
        $item->save();

        return redirect()->route('item.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_item)
    {
        $item = Item::find($id_item);
        $item->delete();

        Session::flash('success', 'The item data was successfully deleted!');
        return redirect()->route('item.index');
    }
}
