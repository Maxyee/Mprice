<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    protected $fillable = ['seed_name','seed_price','location'];
    
    protected $table = 'seeds';
}
