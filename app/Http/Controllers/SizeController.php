<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;

class SizeController extends Controller
{
    public function create() {

    	return view('admin.add_size');

    }

    public function store() {

    	$this->validate(request(),[

    		'name' => 'required',
    		'description' => 'required'
    	]);

    	$size = new Size;
    	$size->name = request('name');
    	$size->description = request('description');

    	$size->save();

    	session()->flash('message', 'you have added a new size successfully!');

    	return redirect('/add/size');
    }


    public function show() {

        $sizes = Size::paginate(10);


        return view('admin.show_size', compact('sizes'));
    }


    public function edit($id) {

        $size = Size::find($id);

        return view('admin.update_size', compact('size'));
    }




    public function update($id, Request $request) {

        $size = Size::find($id);

        $size->name = $request->name; 

        $size->description = $request->description;

        $size->save();

        session()->flash('message', 'Size type has been updated successfully!');

        return redirect('/show/size');
    }




}
