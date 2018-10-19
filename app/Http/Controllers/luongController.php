<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeSoLuong;
use App\Models\LuongCoBan;
use App\Models\NhanSu;
use App\Models\LuongCanBo;
class luongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hsl = HeSoLuong::all();
        $lcb = LuongCoBan::all();
        return view('quanlychung.luongcoban',compact(['hsl','lcb']));
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
    public function store(Request $request)
    {
        $this->validate($request, [
			'hsl'     => 'required|numeric',
            ]);
        $hsl = new HeSoLuong;
        $hsl->HSL = $request->hsl;
        $hsl->save();
        return redirect()->back();
    }
    public function storelcb(Request $request)
    {
        $this->validate($request, [
			'lcb'     => 'required|numeric',
            ]);
        $lcb = new LuongCoBan;
        $lcb->luong_co_ban = $request->lcb;
        $lcb->save();
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
        //
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
    public function update(Request $request)
    {
        $this->validate($request, [
			'hsl'     => 'required|numeric',
            ]);
        $hsl = HeSoLuong::where('id',$request->id_hsl)->first();
        $hsl->HSL = $request->hsl;
        $hsl->save();
        return redirect()->back();
    }
    public function updatelcb(Request $request)
    {
        $this->validate($request, [
			'lcb'     => 'required|numeric',
            ]);
        $lcb = LuongCoBan::where('id',$request->id_lcb)->first();
        $lcb->luong_co_ban = $request->lcb;
        $lcb->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        HeSoLuong::where('id',$request->id_hsl)->delete();
        return redirect()->back();
    }
    public function destroylcb(Request $request)
    {
        LuongCoBan::where('id',$request->id_lcb)->delete();
        return redirect()->back();
    }

    public function luongcobancanhan($id){
        $nhansu = NhanSu::where('id',$id)->first();
        $ttl = LuongCanBo::where('nhan_su_id',$id)->get();
        $hsl = HeSoLuong::all();
        $lcb = LuongCoBan::all();
         return view('quanlythongtinluong.thongtinmucluong',compact('nhansu','ttl','hsl','lcb'));
    }
    public function postluongcobancanhan(Request $request, $id){
        $this->validate($request, [
			'ngayapdung'     => 'required',
			'muclcb'     => 'required|numeric',
			'hsl'     => 'required|numeric',
			'kichhoat'     => 'required|boolean',
        ]);
        
        $lcbcn = new LuongCanBo;
        $lcbcn->nhan_su_id = $id;
        $lcbcn->luong_co_ban_id = $request->muclcb;
        $lcbcn->he_so_luong_id = $request->hsl;
        $lcbcn->ngay = $request->ngayapdung;
        if($request->kichhoat){
            $lcbs = LuongCanBo::where([['nhan_su_id',$id],['ap_dung',true]])->get();
            foreach($lcbs as $lcb){
                $lcb->ap_dung = false;
                $lcb->save();
            }
        }
        $lcbcn->ap_dung = $request->kichhoat;
        $a = LuongCoBan::where('id',$request->muclcb)->value('luong_co_ban');
        $b = HeSoLuong::where('id',$request->hsl)->value('HSL');;
        $c = $a*$b;
        $lcbcn->tongluong =  $c;
        $lcbcn->save();
    return redirect()->back();
    }
    public function thaydoiluong($id,$id2){
        $lcb = LuongCanBo::where([['nhan_su_id',$id],['ap_dung',true]])->first();
        if(!empty($lcb)){
            $lcb->ap_dung = false;
            $lcb->save();
        }
        $apply = LuongCanBo::where('id',$id2)->first();
        $apply->ap_dung = true;
        $apply->save();
        return redirect()->back();
    }
}
