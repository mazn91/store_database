<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returned extends Model
{
    
     public function order(){
    	return $this->belongsTo(Order::class);
    }

    public function item(){
    	return $this->belongsTo(Item::class);
    }
}
