<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    

    public function category() {
    	return $this->belongsTo(Category::class);
    }

    public function color() {
    	return $this->belongsTo(Color::class);
    }


    public function size() {
    	return $this->belongsTo(Size::class);
    }

    public function material() {
    	return $this->belongsTo(Material::class);
    }        
    
    public function orders() {
        return $this->belongsToMany(Order::class);
    }

}
