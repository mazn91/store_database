<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function orders() {
    	return $this->hasMany(Order::class);
    }


    public function baskets() {
    	return $this->hasMany(Baskset::class);
    }
}
