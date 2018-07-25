<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable=[
    	'name',
    	'url',
    	'element_id',
    	'city',
    	'lat',
    	'long'
    ];


}
