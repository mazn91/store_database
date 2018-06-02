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


}
