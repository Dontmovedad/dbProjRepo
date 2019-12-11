<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function fullSearch(Request $request){
    	$input = $request->all();
        $id = -1;
        $query1 = DB::table('item')->select('*');
    	if(is_numeric($input['id'])){
            $id = $input['id'];
        }
        $name = $input['name'];
        $effect = $input['effect'];
        if($id != -1){
            $query1 = $query1->where('item_id', '=', $id);
        }
        $query2 = $query1->where('item_name', 'ilike', '%'.strtolower($input['name']).'%');
        $query3 = $query2->where('item_effect', 'ilike', '%'.strtolower($input['effect']).'%')->limit(50);

	    $results = $query3->get();
		return view('result', [
			'results' => $results
		]);
    }
}
