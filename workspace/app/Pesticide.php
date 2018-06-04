<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesticide extends Model
{
    protected $fillable = ['pesticide_name','pesticide_price','location'];
    
    protected $table = 'pesticides';
}
