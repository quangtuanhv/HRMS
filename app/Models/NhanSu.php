<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanSu extends Model
{
    public function bophan(){
        return $this->belongsTo('App\Models\BoPhan','bo_phan_id','id');
    }
    public function thoigianhoptac(){
        return $this->hasOne('App\Models\ThoiGianHopTac','user_id','id');
    }
    public function thongtinnganhang(){
        return $this->hasMany('App\Models\ThongTinTaiKhoanNganHang','nhan_su_id','id');
    }
}
