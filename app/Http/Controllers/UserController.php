<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Auth;
use Hash;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        return view('profile', compact('user'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $this->validate(request(), [

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'password' => 'required|confirmed'
        ]);

        
        $user = new User;

        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->gender = request('gender');
        $user->password = Hash::make(request('password'));

        $user->save();


           $roles = 2;

            $user->roles()->attach($roles);


            session()->flash('message', 'A new user has been added successfully!');



        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::orderBy('status', 'desc')->get();
        
        return  view('admin.show_users', compact('users'));
        
    }


    public function activation($id, Request $request) {

        $user = User::find($id);

        if($user->status == 1){
            $user->status = 0;
            session()->flash('message', 'A new user has been deactivated successfully!');
        }else{
            $user->status = 1;
            session()->flash('message', 'A new user has been activated successfully!');
        }

        $user->save();

        

        return redirect('/show/users');
    }




    public function show_update_user($id){

        $user = User::find($id);

        $roles = Role::get();

         foreach($user->roles as $role){
            $user_role = $role->type;
         }

        
        return view('admin.update_user', compact('user', 'roles', 'user_role'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = auth::user();

        return view('update_profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;

        $user->save();

        session()->flash('message', 'You successfully updated your profile!');

        return redirect('/');
    }



    public function show_password() {
        return view('change_password');
    }


    public function change_password($id, Request $request) {

        $user = User::find($id);

        $this->validate(request(), [

            'current_password' => 'required',
            'password' => 'required|confirmed'

        ]);


        if(Hash::check($request->current_password, $user->password)){
            
            $user = User::find($id);
            $user->password = Hash::make($request->password);
            $user->save();

            session()->flash('message', 'Your password has been changed successfully!');

            return redirect('/');

        }else{

            return Redirect::back()->withErrors(['current_password' => 'Current Password Does Not Match With The Users Password!']);
        }


    }






}
