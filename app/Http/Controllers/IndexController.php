<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function index(){
    	$query1 = DB::table('item')->select('*');
    	#$query2 = $query1->join('users', 'posts.userid', '=', 'users.id');
    	$items = $query1->get();
    	return view('index', [
    		'items' => $items
    	]);
    }
}
