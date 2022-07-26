<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ct_bangdiemmon extends Model
{
    protected $table= "ct_bangdiemmons";
    public $timestamps = false;
    public function lhkt()
    {
        return $this->belongsTo('App\loaihinhkiemtra','lhkt','id');
    }
    public function bangdiemmon()
    {
        return $this->belongsTo('App\bangdiemmon','mabdm','id');
    }

}
