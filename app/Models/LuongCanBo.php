<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuongCanBo extends Model
{
    public function luongcoban()
    {
        return $this->belongsTo('App\Models\LuongCoBan','luong_co_ban_id','id');
    }
    public function hesoluong()
    {
        return $this->belongsTo('App\Models\HeSoLuong','he_so_luong_id','id');
    }
}
