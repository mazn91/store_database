<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Buyer;
use DB;

class BuyerController extends Controller
{
    

    public function create() {
    	return view('add_buyer');
    }


    public function store() {

    	$this->validate(request(), [

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'place_name' => 'required',
            
        ]);

        
        $user = new Buyer;

        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->city = request('city');
        $user->address = request('address');
        $user->place_name = request('place_name');

        $user->save();

        session()->flash('message', 'A new Buyer has been added successfully!');

        return redirect('/');
    }



    public function show() {

    	$buyers = Buyer::orderBy('status', 'desc')->  paginate(10);



    	return view('show_buyers', compact('buyers'));
    }


    public function find(Request $request){

         $buyers = Buyer::where('phone', '=', $request->search)->paginate(1);


        if($buyers->count() == 1) {

            return view('show_buyers', compact('buyers'));
        }

        if($buyers->count() == 0){

            
            $buyers = Buyer::where('place_name', 'like', '%' .$request->search. '%')->paginate(10);

            if($buyers->count() > 0){

                return view('show_buyers', compact('buyers'));

            }else{
                return redirect('/show/buyers');
            }
        }
    }


    public function activation($id){

    	$buyer = Buyer::find($id);



    	if($buyer->status == 1){
    		$buyer->status = 0;
    	}else{
    		$buyer->status = 1;
    	}

    	$buyer->save();

    	return redirect('/show/buyers');
    }


    public function edit($id){

    	$buyer = Buyer::find($id);

    	return view('update_buyer', compact('buyer'));

    }


    public function update($id, Request $request){

    	$this->validate(request(), [

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'place_name' => 'required',
            
        ]);

        $buyer = Buyer::find($id);

        $buyer->fname = $request->fname;
        $buyer->lname = $request->lname ;
        $buyer->email = $request->email ;
        $buyer->phone = $request->phone ;
        $buyer->address = $request->address ;
        $buyer->city = $request->city ;
        $buyer->place_name = $request->place_name ;

        $buyer->save();

        session()->flash('message', 'a buyer has been updated successfully!');

        return redirect('/show/buyers');
    }


    public function show_loans(){

        $loans = DB::table('orders')
                ->select('buyer_id','total_price', 'payment_type' , DB::raw('SUM(total_price) as total_price'))
                ->groupBy('buyer_id')
                ->where('payment_type', '=', 0)
                ->get();


        $buyers = Buyer::paginate(10);

        return view('show_buyers_loan', compact('loans', 'buyers'));
    }


    public function confirm_loan($id){

        $orders = Order::where('buyer_id', '=', $id)->where('payment_type', '=', 0)->get();

        foreach ($orders as $order) {
            
            $order->payment_type = 1;

            $order->save();
        }

        return redirect('/show/loans');
    }


}
