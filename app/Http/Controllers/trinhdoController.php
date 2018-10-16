<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrinhDo;
class trinhdoController extends Controller
{
    public function index(){
    	$trinhdo = TrinhDo::all();
    	return view('quanlychung.trinhdo',['trinhdo' => $trinhdo]);
    }
    public function insert(Request $request){
    	$Trinhdo = new TrinhDo;
    	$Trinhdo->ten_trinh_do = $request->tentrinhdo;
    	$Trinhdo->save();
    	return redirect()->back();
    }

    public function update(Request $request){
    	$Trinhdo = TrinhDo::where('id',$request->id)->update(['ten_chuc_vu' => $request->tenTrinhdo]);
    	return redirect()->back();
    }

    public function delete(Request $request){
    	$Trinhdo = TrinhDo::where('id',$request->id)->delete();
    	return redirect()->back();

    }
}
