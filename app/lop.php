<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lop extends Model
{
    protected $table= "lops";
    public $timestamps = false;
    public function quatrinhhoc()
    {
        return $this->hasMany('App\quatrinhhoc','malop','id');
    }
    public function khoi()
    {
        return $this->belongsTo('App\khoi','makhoi','id');
    }
    public function quanlylop()
    {
        return $this->hasMany('App\quanlylop','malop','id');
    }
}
