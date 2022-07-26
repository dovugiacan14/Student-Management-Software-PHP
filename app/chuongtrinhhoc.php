<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuongtrinhhoc extends Model
{
    protected $table= "chuongtrinhhocs";
    public $timestamps = false;
    public function monhoc()
    {
        return $this->belongsTo('App\monhoc','mamh','id');
    }
}
