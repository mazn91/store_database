<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;

class ColorController extends Controller
{
    

    public function create() {

    	return view('admin.add_color');
    }



    public function store() {

    	$this->validate(request(), [

    		'name' => 'required',
    		'description' => 'required'

    	]);


    	$color = new Color;

    	$color->name = request('name');
    	$color->description = request('description');

    	$color->save();


    	session()->flash('message', 'new color has been added successfully!');

    	return redirect('/add/color');
    }



      public function show() {

        $colors = Color::paginate(10);


        return view('admin.show_color', compact('colors'));
    }




    public function edit($id) {

        $color = Color::find($id);

        return view('admin.update_color', compact('color'));
    }




    public function update($id, Request $request) {

        $color = Color::find($id);

        $color->name = $request->name; 

        $color->description = $request->description;

        $color->save();

        session()->flash('message', 'Color type has been updated successfully!');

        return redirect('/show/color');
    }



}
