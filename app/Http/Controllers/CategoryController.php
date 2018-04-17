<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
class CategoryController extends Controller
{
    
    public function create(){

    	return view('admin.add_category');
    }


    public function store() {

    	$this->validate(request(), [

    		'name' => 'required',
    		'description' => 'required'

    	]);


    	$category = new Category;

    	$category->name = request('name');

    	$category->description = request('description');

    	$category->save();

    	session()->flash('message', 'Category has been added successfully!');

    	return redirect('/show/category');
    }



    public function show() {

    	$categories = Category::orderBy('activation', 'desc')->paginate(10);

    	return view('admin.show_category', compact('categories'));
    }


    public function show_items($id){

        $category = Category::find($id);


        $items = Item::where('category_id', '=', $category->id)->paginate(10);

 

        return view('admin.show_items', compact('items'));
    }


    public function edit($id) {

    	$category = Category::find($id);

    	return view('admin.update_category', compact('category'));
    }




    public function update($id, Request $request) {

    	$this->validate(request(), [

    		'name' => 'required',
    		'description' => 'required'

    	]);

    	$category = Category::find($id);


    	$category->name = $request->name;

    	$category->description = $request->description;


    	$category->save();

    	session()->flash('message', 'Category has been updated successfully!');


    	return redirect('/show/category');

    }




    public function activation($id, Request $request) {


    	$activation = Category::find($id);

    	if($activation->activation == 1){
    		$activation->activation = 0;

    	}else {
    		$activation->activation = 1;
    	}
    	
    	$activation->save();

    	return redirect('/show/category');
    }																																																																																																																																				

}
