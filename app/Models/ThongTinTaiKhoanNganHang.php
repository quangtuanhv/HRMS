<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongTinTaiKhoanNganHang extends Model
{
    public function nhansu(){
        return $this->belongsTo('App\Models\NhanSu','nhan_su_id','id');
    }
}
