<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = ['feed_name','feed_price','location'];
    
    protected $table = 'feeds';
}
