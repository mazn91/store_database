<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buyer;

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


    public function activation($id){

    	$buyer = Buyer::find($id);

    	if($buyer->id == 1){
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




}
