<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'id_item';
	
	public $timestamps = false;
	
    public function admins()
    {
    	return $this->hasOne('App\Admin');
    }

    public function reservations()
    {
    	return $this->belongsToMany('App\Item','reservations_items');
	}
}
