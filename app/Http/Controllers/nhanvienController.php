<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chucvu;
use App\Phongban;
use App\Nhanvien;
class nhanvienController extends Controller
{
    public function index(){
    	$chucvu = Chucvu::all();
    	$nhanvien = Nhanvien::all();
    	$phongban = Phongban::all();
    	return view('Nhanvien',['chucvu' => $chucvu, 'nhanvien' => $nhanvien, 'phongban' => $phongban]);
    }
    public function insert(Request $request){
    	$nhanvien = new Nhanvien;
    	$nhanvien->tennv = $request->tennv;
    	$nhanvien->gioi_tinh = $request->gioi_tinh;
    	$nhanvien->chuc_vu = $request->chucvu;
    	$nhanvien->phongban = $request->phongban;
    	$nhanvien->save();
    	return redirect()->back();
    }

    public function update(Request $request){
    	$nhanvien = Nhanvien::where('manv',$request->manv)->update([
    		'tennv' => $request->tennv, 
    		'gioi_tinh' => $request->gioitinh,
    		'chuc_vu' => $request->chucvu,
    		'phongban' => $request->phongban
    	]);
    	return redirect()->back();
    }

    public function delete($manv){
    	$nhanvien = Nhanvien::where('manv',$manv)->delete();
    	return redirect()->back();

    }
}
