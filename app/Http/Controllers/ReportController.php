<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DateTime;
use App\Item;
use DB;

class ReportController extends Controller
{
    

    public function show() {

    	return view('report_date');
    }


    public function report(Request $request){

    	$start_date = new DateTime($request->start_date);
    	$end_date = new DateTime($request->end_date);


    	$stdate = $request->start_date;
    	$endate = $request->end_date;

    	

    	$items = Item::get();


    	$piad_reports = DB::table('orders')
                ->select('item_id', 'quantity', 'total_price', 'profit', 'updated_at', 'payment_type' ,DB::raw('SUM(quantity) as quantity'), DB::raw('SUM(total_price) as total_price'), DB::raw('SUM(profit) as profit'))
                ->groupBy('item_id')
                ->where('updated_at', '>=', $start_date)
                ->where('updated_at', '<', $end_date)
                ->where('payment_type', '=', 1)
                ->get();


    	$loan_reports = DB::table('orders')
                ->select('item_id', 'quantity', 'total_price', 'profit', 'updated_at', 'payment_type' ,DB::raw('SUM(quantity) as quantity'), DB::raw('SUM(total_price) as total_price'), DB::raw('SUM(profit) as profit'))
                ->groupBy('item_id')
                ->where('updated_at', '>=', $start_date)
                ->where('updated_at', '<', $end_date)
                ->where('payment_type', '=', 0)
                ->get();

         $paid_cost = $piad_reports->pluck('total_price')->sum() - $piad_reports->pluck('profit')->sum();
         $loan_cost = $loan_reports->pluck('total_price')->sum() - $loan_reports->pluck('profit')->sum();

    	return view('show_report', compact('piad_reports', 'loan_reports', 'stdate', 'endate', 'items' ,'paid_cost', 'loan_cost'));
    }



}
