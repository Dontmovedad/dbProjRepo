<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class EditController extends Controller
{
    public function index(){
        $curr_item = substr($_SERVER['REQUEST_URI'], 6);
        $item_info = DB::table('item')->select('*')->where('item_name', '=', $curr_item)->get();
        #dd($item_info);
        return view('edit', [
            'item' => $item_info
        ]);
    }

    public function edit(Request $request){
        $input = $request->all();
        $curr_item = substr($_SERVER['REQUEST_URI'], 11);
        $validation = Validator::make($input,[
            'effect' => 'required',
        ]);
        if($validation->fails()){
            return redirect('/edit/'.$curr_item)
            ->withInput()
            ->withErrors($validation);
        }
        DB::table('item')->where('item_name', $curr_item)->update(['item_effect' => $input['effect']]);
        return redirect('/index');
    }

    public function delete(Request $request){
        $curr_item = substr($_SERVER['REQUEST_URI'], 13);
        DB::table('item')->where('item_name', $curr_item)->delete();
        DB::table('recom')->where('item_name', $curr_item)->delete();
        return redirect('/index');
    }
}