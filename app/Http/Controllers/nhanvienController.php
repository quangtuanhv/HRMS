<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrinhDo;
use App\Models\BoPhan;
use App\Models\ChucVu;
use App\Models\NhanSu;
use App\Models\ThoiGianHopTac;
class nhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanvien = NhanSu::all();
        return view('quanlynhanvien.danhsachnhanvien', compact('nhanvien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trinhdo  = TrinhDo::all(); 
        $phongban = BoPhan::all();
        $chucvu   = ChucVu::all();
        return view('quanlynhanvien.taomoinhanvien', compact(['trinhdo','phongban','chucvu']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'ho'     => 'required',
            'ten' => 'required',
            'diachi' => 'required',
            'gioitinh' => 'required',
            'email' => 'required',
            'sodienthoai' => 'required',
            'phongban' => 'required',
            'ngaybatdaulamviec' => 'required',

            ]);

			$user                = new NhanSu;
			$user->ho            = $request->ho;
            $user->ten           = $request->ten;
            $user->dia_chi       = $request->diachi;
            $user->email         = $request->email;
            $user->dia_chi       = $request->diachi;
            $user->gioi_tinh     = $request->gioitinh;
            $user->so_dien_thoai = $request->sodienthoai;
            $user->bo_phan_id      = $request->phongban;
            $user->save();
            $tght = new ThoiGianHopTac;
            $tght->ngay_bat_dau = $request->ngaybatdaulamviec;
            $tght->user_id = $user->id;
            $tght->save();
            return redirect('/danh-sach-nhan-vien')->with('notification', 'Thêm nhân viên thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $nhanvien = NhanSu::where('id',$id)->first();
        return view('quanlynhanvien.thongtinnhanvien', compact('nhanvien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
