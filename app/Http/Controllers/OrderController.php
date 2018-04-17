<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    

	public function show(){

		return view('orders');

	}


	public function find(Request $request){

		if($request->search == ''){

			return redirect('/show/orders');
		}


		$find = Order::where('number', '=', $request->search)->get();

		if($find->count() > 0 ){

			return view('invoice', compact('find'));

		}else{

			session()->flash('message', 'Order could not be found!');

			return redirect('/show/orders');
		}


	}





}
