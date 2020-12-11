<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loai_ghe extends Model
{
    public $timestamps = false;
    protected $table = "loai_ghe";

    public function ghe_ngoi(){
        return $this->hasMany('App\ghe_ngoi','tenloai','tenloai');
    }
}
