<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quatrinhhoc extends Model
{
    protected $table= "quatrinhhocs";
    public $timestamps = false;
    public function hocsinh()
    {
        return $this->belongsTo('App\hocsinh','mahs','id');
    }
    public function bangdiemmon()
    {
        return $this->hasMany('App\bangdiemmon','maqth','id');
    }
}
