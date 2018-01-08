<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products'; - можно не писать, модель знает с чем работает по умолчанию

    protected $fillable = ['singer', 'album', 'style', 'country', 'amount',];

}
