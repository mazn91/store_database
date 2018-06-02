<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Color extends Model
{
    
    public function items(){
    	return $this->hasMany(Item::class);
    }

    
}
