<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function byID(Request $request){
    	$input = $request->all();
    	$results = "";
    	if(is_numeric($input['id'])){
			$query1 = DB::table('item')->select('*')->where('item_id', '=', $input['id'])->limit(50);
	    	$results = $query1->get();
	    }
		return view('result', [
			'results' => $results
		]);
    }

    public function byName(Request $request){
    	$input = $request->all();
    	$query1 = DB::table('item')->select('*')->where('item_name', 'ilike', '%'.strtolower($input['name']).'%')->limit(50);
    	$results = $query1->get();
    	return view('result', [
			'results' => $results
		]);
    }

    public function byEffect(Request $request){
    	$input = $request->all();
    	$query1 = DB::table('item')->select('*')->where('item_effect', 'ilike', '%'.strtolower($input['effect']).'%')->limit(50);
    	$results = $query1->get();
    	return view('result', [
			'results' => $results
		]);
    }
}
