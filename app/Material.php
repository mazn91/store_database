<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;


class Material extends Model
{
    
    public function items(){
    	return $this->hasMany(Item::class);
    }

    
}
