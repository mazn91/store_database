<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Redirect;
use App\User;


class AuthController extends Controller
{
    

    public function show() {
    	return view('login');
    }




    public function login(Request $request) {

    	$this->validate(request(), [
    		'email' => 'required',
    		'password' => 'required'
    	]);

        $activation = User::where('email', '=', $request->email)->first();

        if($activation->status == 1){
            if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
                return redirect('/');
            }else{
                return Redirect::back()
                ->withErrors([
                    'password' => 'Incorrect email or password!'
                ]);
            }
        }else{

            return Redirect::back()
                ->withErrors([
                    'password' => 'Your account has been deactivated!'
                ]);

        }

    }





    public function logout() {

    	auth()->logout();

    	return redirect('/login');

    }



    public function reset_password($id){

        $user = User::find($id);

        return view('admin.reset_password', compact('user'));
    }




    public function reset($id, Request $request) {

        $user = User::find($id);

        $this->validate(request(), [

            'password' => 'required|confirmed'

        ]);

            $user->password = Hash::make($request->password);
            $user->save();

            session()->flash('message', 'Your password has been changed successfully!');

            return redirect('/');

    }



} 
