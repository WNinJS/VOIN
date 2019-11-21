<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Отключаем поля created_at and updated_at
    
    public $timestamps = false;
}
