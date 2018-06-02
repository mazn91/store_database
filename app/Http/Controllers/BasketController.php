<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Basket;
use App\Order;
use Redirect;

class BasketController extends Controller
{	


    public function show(){
    	

    	$items = Item::orderBy('activation', 'desc')->  paginate(10);

    	$baskets = Basket::get();

    	$many_items = [];

    	return view('sale.sale', compact('items', 'baskets', 'many_items'));
    }






    public function add($id) {

    	$item = Item::find($id);

    	// this add plus 1000 for the order number
    	$order = Order::orderBy('created_at', 'desc')->first();
    	
    	$basket_check = Basket::get();


    	
    	// this to check if the item exists then update the quantity instead of adding it to the basket 
    	if($basket_check->count() > 0) {

    		foreach ($basket_check as $basket_item) {
    			
    			if($basket_item->item_id == $item->id){


    				$quantity_update = Basket::find($basket_item->id);

    				$quantity_update->quantity = $quantity_update->quantity+1; 

    				$quantity_update->total_price = $quantity_update->price * $quantity_update->quantity;

    				$quantity_update->save();

    				return redirect('/sale');
    			}	
    		}
    	}

    	// add the item to the basket
    	$basket = new Basket;

    	$basket->item_id = $item->id;

    	$basket->quantity = 1;

    	$basket->price = $item->max_price;

    	$basket->total_price = $item->max_price;

    	if(is_null($order)){

    		$basket->order_number = 1000;

    	}else{

    		$basket->order_number = 1000 + $order->id;

    	}


    	$basket->save();

    	return redirect('/sale');
    	

    }



    public function cancel() {

    	Basket::truncate();;

    	session()->flash('message', 'The order has been cancelled successfully!');

    	return redirect('/sale');
    }


    public function delete($id) {

    	$item = Basket::find($id);

    	$item->delete();

    	session()->flash('message', 'an item has been deleted from the basket successfully!');

    	return redirect('/sale');
    }


    public function discount($id) {

    	$item = Basket::find($id);

    	$item->price = $item->item->min_price;

    	$item->total_price = $item->quantity * $item->price;

    	$item->save();

    	session()->flash('message', 'a discount has been given to an item successfully!');

    	return redirect('/sale');
    }


    public function update($id, Request $request) {


    	$item = Basket::find($id);

    	$item->quantity = $request->quantity;

    	$item->total_price = $request->quantity * $item->price;

    	$item->save();

    	session()->flash('message', 'quantity has been changed successfully!');

    	return redirect('/sale');
    }


    public function find(Request $request){


    	$this->validate(request(),[

    		'search' => 'required'
    	]);


    	$item = Item::where('code', '=', $request->search)->get();

    	if($item->count() == 1) {

    		$this->add($item->first()->id);

    		return redirect('/sale');
    	}

    	if($item->count() == 0){
    		
    		$many_items = Item::where('name', 'like', '%' .$request->search. '%')->get();

    		if($many_items->count() > 0){


    			$baskets = Basket::get();


    			return view('sale.sale', compact('many_items', 'baskets'));

    		}else{
    			return redirect('/sale');
    		}


    	}



    }




}

