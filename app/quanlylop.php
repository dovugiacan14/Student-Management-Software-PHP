<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quanlylop extends Model
{
    protected $table= "quanlylops";
    public $timestamps = false;
    public function loptruong()
    {
        return $this->belongsTo('App\hocsinh','maloptruong','id');
    }
    public function giaovien()
    {
        return $this->belongsTo('App\giaovien','magvcn','id');
    }
    public function lop()
    {
        return $this->belongsTo('App\lop','malop','id');
    }
}
