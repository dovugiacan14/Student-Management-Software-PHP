<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bangdiemmon extends Model
{
    protected $table= "bangdiemmons";
    public $timestamps = false;
    public function ctbdm()
    {
        return $this->hasMany('App\ct_bangdiemmon','mabdm','id');
    }
    public function quatrinhhoc()
    {
        return $this->belongsTo('App\quatrinhhoc','maqth','id');
    }
}
