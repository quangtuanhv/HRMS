<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoPhan;
class bophanController extends Controller
{
    public function index(){
    	$bophan = BoPhan::all();
    	return view('quanlychung.bophan',['bophan' => $bophan]);
    }
    public function insert(Request $request){
    	$bophan = new BoPhan;
    	$bophan->ten_bo_phan = $request->tenbophan;
    	$bophan->save();
    	return redirect()->back();
    }

    public function update(Request $request){
    	$bophan = BoPhan::where('id',$request->id)->update(['ten_bo_phan' => $request->tenbophan]);
    	return redirect()->back();
    }

    public function delete(Request $request){
    	$bophan = BoPhan::where('id',$request->id)->delete();
    	return redirect()->back();

    }
}
