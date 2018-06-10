<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{
    public function insert(Request $request){
    	$data = [
    		'name' => $request->name,
    		'dep' => $request->dep,
    	];

    	$done = DB::table('ajaxes')->insert($data);

    	echo "fine";
    }

    public function show(){
    	$data['result'] = DB::table('ajaxes')->get();
    	return view('welcome',$data);
    }
}
