<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;	
use App\Basket;

class SaleController extends Controller
{
    public function show(){
    	

    	$items = Item::orderBy('activation', 'desc')->  paginate(10);

    	$baskets = Basket::get();


    	return view('sale.sale', compact('items', 'baskets'));
    }



}
