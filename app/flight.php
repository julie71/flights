<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
     protected $fillable=[
     	'number',
     	'time',
     	'city',
     	'country',
     	'status',
     	'realTime',
     	'airportId'
    ];
}
