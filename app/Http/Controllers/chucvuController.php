<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chucvu;
class chucvuController extends Controller
{
    public function index(){
    	$chucvu = Chucvu::all();
    	return view('quanlychung.Chucvu',['chucvu' => $chucvu]);
    }
    public function insert(Request $request){
    	$chucvu = new Chucvu;
    	$chucvu->ten_chuc_vu = $request->tenchucvu;
    	$chucvu->save();
    	return redirect()->back();
    }

    public function update(Request $request){
    	$chucvu = Chucvu::where('id',$request->id)->update(['ten_chuc_vu' => $request->tenchucvu]);
    	return redirect()->back();
    }

    public function delete(Request $request){
    	$chucvu = Chucvu::where('id',$request->id)->delete();
    	return redirect()->back();

    }
}
