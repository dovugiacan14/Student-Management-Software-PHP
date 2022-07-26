<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giaovien extends Model
{
    protected $table= "giaoviens";
    public $timestamps = false;
    public function quanlylop()
    {
        return $this->hasMany('App\quanlylop','magvcn','id');
    }
}
