<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use Session;

class CustomerController extends Controller
{
    public function setting()
    {        
        $id_user= Auth::User()->id;
        $user = User::find($id_user);
        return view ('customer.setting', compact('user'));
    }

    public function postSetting(Request $request)
    {
    	$id_user= Auth::User()->id;
        $user = User::find($id_user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->save();
        Session::flash('success', 'Update Profil Berhasil!');
        return view ('customer.setting', compact('user'));
    }
    
}
