<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RecommendController extends Controller
{
    public function show(Request $request){
        $curr_item = substr($_SERVER['REQUEST_URI'], 16);
        $query1 = DB::table('recom')->select('*')->where('item_name', '=', $curr_item)->limit(50);
        $results = $query1->get();
        return view('recommends', [
            'results' => $results
        ]);
    }
}