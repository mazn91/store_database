<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;
use App\Item;
use App\Order;
use Auth;

class DashboardController extends Controller
{
    


    public function index() {

    	$admin = auth::user()->isAdmin();

    	$buyers = Buyer::get()->count();

    	$items = Item::get()->count();

    	$orders = Order::groupBy('number')->get()->count();

   		$all_orders = Order::get();

   		$total_revenue = 0;
   		$total_profit = 0;
   		$total_loan = 0;

   		foreach ($all_orders as $order) {
   			
   			if($order->payment_type == 1){

   				$total_revenue = $total_revenue + $order->total_price;
   				$total_profit = $total_profit + $order->profit;

   			}else{

   				$total_loan = $total_loan + $order->total_price;

   			}
   		}



    	return view('dashboard', compact('admin', 'buyers', 'items', 'orders', 'total_profit', 'total_revenue', 'total_loan'));
    }

    
}
