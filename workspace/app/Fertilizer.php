<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fertilizer extends Model
{
    protected $fillable = ['fertilizer_name','fertilizer_price','location'];
    
    protected $table = 'fertilizers';
}
