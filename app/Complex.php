<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complex extends Model
{
    //отключаем поля updated_at, created_at
    public $timestamps = false;
}
