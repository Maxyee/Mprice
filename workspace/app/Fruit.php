<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $fillable = ['fruit_name','fruit_price','location'];
    
    protected $table = 'fruits';
}
