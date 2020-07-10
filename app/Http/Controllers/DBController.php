<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{

	public function select()
	{
		$mvs = DB::select('select * from mls_order limit 10');
    	dd($mvs);
	}

	public function trans(){
	    DB::transaction(function(){
            $res1 = DB::update('update kefu_export_log set export_time="2" where id=1');
            $res2 = DB::update('update kefu_export_log set export_time="1" where id=2');
	        if($res1 && $res2){
	            DB::commit();
            }else{
	            DB::rollBack();
            }
        });

        return view('page');
    }

   
}
