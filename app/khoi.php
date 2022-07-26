<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khoi extends Model
{
    protected $table= "khois";
    public $timestamps = false;
    public function lophoc()
    {
        return $this->hasMany('App\lop','makhoi','id');
    }
    public function chuongtrinhhoc()
    {
        return $this->hasMany('App\chuongtrinhhoc','makhoi','id');
    }

}
