<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hocsinh extends Model
{
    protected $table= "hocsinhs";
    public $timestamps = false;
    public function quatrinhhoc()
    {
        return $this->hasOne('App\quatrinhhoc','mahs','id');
    }
}
