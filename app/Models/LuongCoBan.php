<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuongCoBan extends Model
{
    public function luongcanbo()
    {
        return $this->belongsTo('App\Models\LuongCanBo','luong_co_ban_id','id');
    }
}
