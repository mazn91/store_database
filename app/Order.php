<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items() {

    	return $this->belongsToMany(Item::class);
    }


    public function buyer() {
    	return $this->belongsTo(Buyer::class);
    } 
    
}
