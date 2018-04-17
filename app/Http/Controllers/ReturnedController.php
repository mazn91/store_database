<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Returned;
use App\Item;
class ReturnedController extends Controller
{
    

    public function create($id){

 		$order = Order::find($id);

 		return view('add_return', compact('order'));  	
    }


    public function store(){

    	$this->validate(request(), [
    		'quantity' => 'required',
    		'description' => 'required'
    	]);

    	$return = new Returned;

    	$return->quantity = request('quantity');
    	$return->description = request('description');
    	$return->order_id = request('order_id');
    	$return->item_id = request('item_id');

    	$return->save();

    	return redirect('/show/orders');

    }

    public function return_all($id){

    	$orders = Order::where('number', '=', $id)->get();

    	foreach ($orders as $order) {
    		
    		$return = new Returned;

	    	$return->quantity = $order->quantity;
	    	$return->description = 'returned all by the employee!';
	    	$return->order_id = $order->id;
	    	$return->item_id = $order->item_id;

	    	$return->save();
    	}

    	return redirect('/show/orders');
    }


    public function show(){

    	$returns = Returned::orderBy('created_at', 'desc')->paginate(10);

    	return view('show_returned', compact('returns'));
    }


    public function confirmation(){

    	$returns = Returned::orderBy('created_at', 'desc')->paginate(10);

    	return view('return_confirmation', compact('returns'));
    }


    public function confirm_all() {

    	$items = Returned::where('confirmation', '=', 0)->get();

    	if($items->count() >0){

    		foreach ($items as $item) {
    			
    			$item->confirmation = 1;
    			$item->save();

    			$order = Order::find($item->order_id);

    			$order->quantity = $order->quantity - $item->quantity;
    			$order->total_price = $order->quantity * $order->price;
    			$order->profit = ($order->price - $item->item->cost) * $order->quantity;

    			$order->save();

    			$product = Item::find($item->item_id);

    			$product->quantity = $product->quantity + $item->quantity;

    			if($product->quantity > 0 && $product->activation == 0){
    				$product->activation = 1;
    				$product->stock = 1;
    			}

    			$product->save();
    		}
    	}

    	return redirect('/return/confirmation');
    }

}
