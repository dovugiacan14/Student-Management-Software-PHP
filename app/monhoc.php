<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monhoc extends Model
{
    protected $table= "monhocs";
    public $timestamps = false;
    public function bangdiemmon()
    {
        return $this->hasMany('App\bangdiemmon','mamh','id');
    }
    
}
