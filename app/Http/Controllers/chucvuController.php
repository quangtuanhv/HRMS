<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chucvu;
class chucvuController extends Controller
{
    public function index(){
    	$chucvu = Chucvu::all();
    	return view('Chucvu',['chucvu' => $chucvu]);
    }
    public function insert(Request $request){
    	$chucvu = new Chucvu;
    	$chucvu->tencv = $request->tencv;
    	$chucvu->save();
    	return redirect()->back();
    }

    public function update(Request $request){
    	$chucvu = Chucvu::where('macv',$request->macv)->update(['tencv' => $request->tencv]);
    	return redirect()->back();
    }

    public function delete($macv){
    	$chucvu = Chucvu::where('macv',$macv)->delete();
    	return redirect()->back();

    }
}
