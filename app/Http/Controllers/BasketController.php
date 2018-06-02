<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Basket;
use App\Order;
use Auth;
use Redirect;
use Carbon\Carbon;
use App\Buyer;

class BasketController extends Controller
{	


    public function show(){
    	

    	$items = Item::where('activation', '=', 1)->orderBy('activation', 'desc')->  paginate(10);

    	$baskets = Basket::get();

    	$many_items = [];

    	$buyers = Buyer::where('status', '=', 1)->get();


    	return view('sale.sale', compact('items', 'baskets', 'many_items', 'buyers'));
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

    		$basket->order_number = 10;

    	}else{

    		$basket->order_number = 10 + $order->id;

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

                $buyers = Buyer::get();


    			return view('sale.sale', compact('many_items', 'baskets', 'buyers'));

    		}else{
    			return redirect('/sale');
    		}


    	}


    }




    public function order(){

    	$baskets = Basket::get();


    	if($baskets->count() > 0){

    		foreach ($baskets as $item) {

    			

                // lower the quantity from item's inventory
                // check if the order items is less than the inventory then subtract it 
                // if it is zero then deactivate it and make it out of stock

                $inventory = Item::find($item->item_id);

                if($item->quantity <= $inventory->quantity){

                    $order = new Order;
                    
                    $order->number = $item->order_number;
                    
                    $order->quantity = $item->quantity;
                    $inventory->quantity = $inventory->quantity - $item->quantity;

                    $inventory->save();

                    $order->price = $item->price;
                    $order->total_price = $item->total_price;

                    $order->profit = ($item->price - $item->item->cost) * $item->quantity;

                    $order->payment_type = 1;
                    $order->user_id = auth::user()->id;
                    $order->item_id = $item->item_id;
                    $order->buyer_id = $item->buyer_id;
                    $order->payment_type = $item->payment_type;

                    $date = carbon::now();

                    $order->end_warranty = $date->addYears($item->item->warranty);

                    // extra checking if an item with the same order number exists then dont save it again
                    // in case a dublicate happens


                    $order->save();

                     $item_id = $item->item_id;

                        $order->items()->attach($item_id);

                        // delete the row in the basket
                        $item->delete();

                }else{

                    session()->flash('message', 'Item low in quantity!');
                    return redirect('/sale');
                }

                if($inventory->quantity == 0){
                    $inventory->activation = 0;
                    $inventory->stock = 0;
                    $inventory->save();
                }

    		}

    		/*Basket::truncate();;*/

    		session()->flash('message', 'order has been confirmed!');



    		return redirect('/print/invoice');


    	}else{

    		session()->flash('message', 'The basket is empty!');
    		return redirect('/sale');
    	}



    }


    public function print(){

        $order_number = Order::orderBy('created_at', 'desc')->first()->number;

        $current_order = Order::where('number', '=', $order_number)->get();

        return view('print', compact('current_order'));
    }



    public function type(Request $request) {

    	$baskets = Basket::get();

    	if($request->buyer == 0 && $request->payment == 1){

    		session()->flash('message', 'standard buyer with paid payment method is already applied!');

    		return redirect('/sale');
    	}

    	foreach ($baskets as $item) {
    		
    		$item->buyer_id = $request->buyer;
    		$item->payment_type = $request->payment;

    		$item->save();

    	}

    	session()->flash('message', 'applied successfully!');
    	return redirect('/sale');
    }



    


}

