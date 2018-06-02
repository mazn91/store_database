<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Size;
use App\Color;
use App\Material;

use Redirect;

class ItemController extends Controller
{
    


    public function create(){

    	$categories = Category::where('activation', '=', 1)->get();

        $sizes = Size::get();

        $colors = Color::get();

        $materials = Material::get();

    	return view('admin.add_items', compact('categories', 'sizes', 'colors', 'materials'));
    }


    public function store() {

    	$this->validate(request(), [

    		'name' => 'required',
    		'description' => 'required',
    		'code' => 'required',
    		'quantity' => 'required',
    		'size' => 'required',
    		'color' => 'required',
    		'material' => 'required',
    		'consumption' => 'required',
    		'cost' => 'required',
    		'min_price' => 'required',
    		'max_price' => 'required',
    		'category' => 'required',


    	]);


    	$item = new Item;

    	$item->name = request('name');
    	$item->description = request('description');
    	$item->code = request('code');
    	$item->quantity = request('quantity');
    	$item->size = request('size');
    	$item->color = request('color');
    	$item->material = request('material');
    	$item->consumption = request('consumption');
    	$item->cost = request('cost');
    	$item->min_price = request('min_price');
    	$item->max_price = request('max_price');
    	$item->category_id = request('category');
        $item->size_id = request('size_category');
        $item->color_id = request('color_category');
        $item->material_id = request('material_category');
        $item->warranty = request('warranty');
        $item->activation = 1;
    	$item->save();

    	session()->flash('message', 'Item has been added successfully!');

    	return redirect('/add/items');
    }



    public function show(){

        $items = Item::orderBy('activation', 'desc')->  paginate(10);

        return view('admin.show_items', compact('items'));

    }


    public function activation($id){

        $item = Item::find($id);


        if($item->activation == 1){
            $item->activation = 0;
            session()->flash('message', 'an item has been deactivated!');
        }else{
            $item->activation = 1;
            session()->flash('message', 'an item has been activated!');
        }

        $item->save();

        return redirect('/show/items');
    }




    public function show_info($id) {

        $item = Item::find($id);

        return view('admin.info_item', compact('item'));

    }



    public function edit($id) {


        $item = Item::find($id);

        $sizes = Size::get();

        $colors = Color::get();

        $materials = Material::get();

        $categories = Category::where('activation', '=', 1)->get();

        return view('admin.update_item', compact('item', 'sizes', 'colors', 'materials', 'categories'));

    }



    public function update($id, Request $request) {




        $this->validate(request(), [

            'name' => 'required',
            'description' => 'required',
            'code' => 'required',
            'quantity' => 'required',
            'size' => 'required',
            'size_id' => 'required',
            'color' => 'required',
            'color_id' => 'required',
            'material' => 'required',
            'material_id' => 'required',
            'consumption' => 'required',
            'cost' => 'required',
            'min_price' => 'required',
            'max_price' => 'required',
            'category_id' => 'required',

        ]);


        $item = Item::find($id);

        $item->name = $request->name;
        $item->description = $request->description;

    

            $otherItems = Item::where('id','!=', $item->id)->get();

            foreach ($otherItems as  $other_item) {
               
                if($other_item->code == $request->code){
                    
                    return Redirect::back()->withErrors(['item_code' => 'This Item code '. $request->code .' has been associated with a different item!']);
                }else{

                    $item->code = $request->code;
                }
            }

            
        
        
        $item->quantity = $request->quantity;
        $item->size = $request->size;
        $item->color = $request->color;
        $item->material = $request->material;
        $item->consumption = $request->consumption;
        $item->cost = $request->cost;
        $item->min_price = $request->min_price;
        $item->max_price = $request->max_price;


        $item->category_id = $request->category_id;
        $item->color_id = $request->color_id;
        $item->material_id = $request->material_id;
        $item->size_id = $request->size_id;


        $item->save();

        session()->flash('message', 'Item has been updated successfully!');

        return redirect('/show/items');


    }




}


