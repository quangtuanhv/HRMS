<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoPhan extends Model
{
    public function nhansu(){
        return $this->hasOne('App\Models\NhanSu','bo_phan_id','id');
    }
}
