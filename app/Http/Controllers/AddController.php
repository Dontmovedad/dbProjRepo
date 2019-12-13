<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class AddController extends Controller
{
    public function index(){
        $curr_item = substr($_SERVER['REQUEST_URI'], 5);
        $champ_list = DB::table('champion')->select('champ_name')->get();
        return view('add', [
            'name' => $curr_item,
            'champions' => $champ_list,
        ]);
    }

    public function add(Request $request){
        $input = $request->all();
        $curr_item = substr($_SERVER['REQUEST_URI'], 15);
        $validation = Validator::make($input,[
            'reason' => 'required',
        ]);
        if($validation->fails()){
            return redirect('/add/'.$curr_item)
            ->withInput()
            ->withErrors($validation);
        }
        DB::table('recom')->insert([
            'item_name' => $curr_item,
            'champ_name' => $request->champ_name,
            'reason' => $request->reason
        ]);
        return redirect('/index');
    }

    public function preaddnewitem(){
        $item_types = DB::table('item_type')->select('item_type_name')->get();
        return view('addItem', [
            'types' => $item_types
        ]);
    }

    public function addnewitem(Request $request){
        $input = $request->all();
        $validation = Validator::make($input,[
            'item_name' => 'required|unique:item|alpha_dash',
            'item_effect' => 'required'
        ]);
        if($validation->fails()){
            return redirect('/add-item')
            ->withInput()
            ->withErrors($validation);
        }
        $type_id = 0;
        if($input['type_name'] == "Attack_Damage"){
            $type_id = 1;
        }
        else if($input['type_name'] == "Ability_Power"){
            $type_id = 2;
        }
        else if($input['type_name'] == "Attack_Speed"){
            $type_id = 3;
        }
        else if($input['type_name'] == "Defense"){
            $type_id = 4;
        }
        else{
            $type_id = 5;
        }
        DB::table('item')->insert([
            'item_name' => $request->item_name,
            'item_effect' => $request->item_effect,
            'item_type_id' => $type_id
        ]);
        return redirect('/index');
    }
}