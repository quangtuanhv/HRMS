<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phongban;
class phongbanController extends Controller
{
    public function index(){
    	$phongban = Phongban::all();
    	return view('Phong',['phongban' => $phongban]);
    }
    public function insert(Request $request){
    	$phong = new Phongban;
    	$phong->tenphong = $request->tenphong;
    	$phong->save();
        return redirect()->back();
    }
    public function update(Request $request){
    	$maphong = $request->maphong;
    	$tenphong = $request->tenphong;
    	$phong = Phongban::where('maphong',$maphong)->update(['tenphong'=>$tenphong]);
        return redirect()->back();
    }
    public function delete($maphong){
    	$phong = Phongban::where('maphong',$maphong)->delete();
        return redirect()->back();
    }
}
