<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Airport;



Route::get('/test', function () {
    $Airport = Airport::create([
    	'name'=>'Beirut Airport',
    	'url'=>'http://beirutairport.gov.lb/_flight.php',
    	'element_id'=> 'date_1',
    	'city'=> 'Beirut',
    	'lat'=>'33.8208023',
    	'long'=>'35.4699001',
    ]);
    return response()-> json($Airport);
});

Route::resource('airports','AirportsController');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
