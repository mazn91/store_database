<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class RoleController extends Controller
{
    

    public function index() {

    	$roles = Role::get();

    	return view('admin.roles', compact('roles'));
    }




    public function role() {

    	$this->validate(request(), [

    		'role' => 'required'

    	]);

    	$role = new Role;

	    $role->type = request('role');

	    $role->save();

        session()->flash('message', 'New role has been added successfully!');

	    return redirect('/');
    }


    public function change($id, Request $request) {

        $user = User::find($id);


        $user->roles()->sync($request->role);

        return redirect('/show/users');
    }


}
