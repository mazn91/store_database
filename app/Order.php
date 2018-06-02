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
    
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function item(){
    		return $this->belongsTo(Item::class);
    }

}
