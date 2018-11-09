<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCity extends Model
{
	protected $table = 'city';

	protected $primaryKey = 'city_id';

	public $timestamps=false; 
 	protected $fillable = [ //yang bisa diowah owah
 		'city',
 		'country_id',
 		
 	]; 
}
