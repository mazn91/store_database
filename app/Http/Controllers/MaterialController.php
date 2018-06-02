<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Material;

class MaterialController extends Controller
{
    

    public function create() {

    	return view('admin.add_material');
    }

    public function store() {

    	$this->validate(request(), [

    		'name' => 'required',
    		'description' => 'required'

    	]);

    	$material = new Material;

    	$material->name = request('name');
    	$material->description = request('description');

    	$material->save();


    	session()->flash('message', 'Material type has been added successfully');

    	return redirect('/add/material');

    }



    public function show() {

        $materials = Material::paginate(10);


        return view('admin.show_material', compact('materials'));
    }




    public function edit($id) {

        $material = Material::find($id);

        return view('admin.update_material', compact('material'));
    }




    public function update($id, Request $request) {

        $material = Material::find($id);

        $material->name = $request->name; 

        $material->description = $request->description;

        $material->save();

        session()->flash('message', 'Material type has been updated successfully!');

        return redirect('/show/material');
    }


}
