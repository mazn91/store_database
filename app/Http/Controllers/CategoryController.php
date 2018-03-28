<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function create(){

    	return view('admin.add_category');
    }


    public function store() {

    	$this->validate(request(), [

    		'name' => 'required'

    	]);
    }
}
