<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanSu;
use App\Models\ThongTinTaiKhoanNganHang;

class taikhoannganhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
        $this->validate($request, [
            'taikhoan_id'   =>'required',
			'tennganhang'   => 'required',
            'sotaikhoan'    => 'required',
            'kichhoat'      => 'required|boolean',
            ]);
            $tttk = ThongTinTaiKhoanNganHang::where('id',$request->taikhoan_id)->first();
            $tttk->ten_ngan_hang = $request->tennganhang;
            $tttk->so_tai_khoan = $request->sotaikhoan;
            $tttk->kich_hoat = $request->kichhoat;
            $tttk->nhan_su_id = $id;
            $tttk->save();
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhansu = NhanSu::where('id',$id)->first();
        $taikhoan = ThongTinTaiKhoanNganHang::where('nhan_su_id',$id)->get();
        return view('quanlytaikhoannganhang.thongtinchitiettaikhoan', compact(['nhansu','taikhoan']));
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
    public function store(Request $request, $id)
    {
        $this->validate($request, [
			'tennganhang'     => 'required',
            'sotaikhoan' => 'required',
            'kichhoat' => 'required|boolean',
            ]);

            $tttk = new ThongTinTaiKhoanNganHang;
            $tttk->ten_ngan_hang = $request->tennganhang;
            $tttk->so_tai_khoan = $request->sotaikhoan;
            $tttk->kich_hoat = $request->kichhoat;
            $tttk->nhan_su_id = $id;
            $tttk->save();
            return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {   
        ThongTinTaiKhoanNganHang::where('id',$req->taikhoan_id)->delete();
        return redirect()->back();
        
    }
}
