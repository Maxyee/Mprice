<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable = ['bank_name','Insurance_name','location'];
    
    protected $table = 'finances';
}
