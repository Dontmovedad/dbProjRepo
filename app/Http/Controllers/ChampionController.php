<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChampionController extends Controller
{
    public function delete($postID = null){
    	DB::table('champion')->where('champ_id', $postID)->delete();
    	return redirect('/index');
    }
}
