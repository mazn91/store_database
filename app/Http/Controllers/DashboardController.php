<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    


    public function index() {

    	$admin = auth::user()->isAdmin();


    	return view('dashboard', compact('admin'));
    }
}
