<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisheries extends Model
{
    protected $fillable = ['fisherie_name','fisherie_price','location'];
    
    protected $table = 'fisheries';
}
