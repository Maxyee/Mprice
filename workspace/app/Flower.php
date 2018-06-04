<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = ['flower_name','flower_price','location'];
    
    protected $table = 'flowers';
}
