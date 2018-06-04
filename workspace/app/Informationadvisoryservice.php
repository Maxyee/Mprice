<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informationadvisoryservice extends Model
{
    protected $fillable = ['infomobileapp_name','infowebsite_name','infocallcenter_number','location'];
    
    protected $table = 'informationadvisoryservices';
}
