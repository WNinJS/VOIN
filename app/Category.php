<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = false;

    public function capabilities(){

        return $this->hasMany('App\Capability');
    }
}
