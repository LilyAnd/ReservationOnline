<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function customers()
    {
    	return $this->hasOne('App\User');
    }

    public function merchants()
    {
    	return $this->hasOne('App\Admin');
    }

    public function items()
    {
    	return $this->belongsToMany('App\Item','reservations_items');
	}
}
