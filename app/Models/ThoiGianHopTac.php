<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThoiGianHopTac extends Model
{
    public function nhansu(){
        return $this->belongsTo('App\Models\NhanSu','user_id','id');
    }
}
