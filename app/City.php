<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'City'; //ini itu databasenya.
    public $timestamps = false; 
    protected $fillable = ['city_id','city','country_id'];
}
