<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanSu extends Model
{
    public function bophan(){
        return $this->belongsTo('App\Models\BoPhan','bo_phan_id','id');
    }
}
