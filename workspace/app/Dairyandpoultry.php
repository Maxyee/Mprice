<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dairyandpoultry extends Model
{
    protected $fillable = ['dairyandpoultry_name','dairyandpoultry_price','location'];
    
    protected $table = 'dairyandpoultrys';
}
