<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function item(){
    	return $this->belongsTo(Item::class);
    }

    public function buyer(){
    	return $this->belongsTo(Buyer::class);
    }

}
