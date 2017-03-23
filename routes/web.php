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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('pdf/{id}', 'UsersController@pdf');
Route::get('usuari/{id}', 'UsersController@profile');

Route::get('aposta/{id}', 'AuctionsController@profile');

Route::get('subhasta/{id}', 'AuctionsController@profile');

Route::get('producte/{id}', 'AuctionsController@product');
Route::get('productes', 'AuctionsController@products');
Route::get('productes/{category}', 'AuctionsController@categoryProducts');

/* Admins */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function ()    {
        return view('admin');;
    });
});

Route::get('/', 'UsersController@index');
/* AIXÒ S'HA D'ANAR ESBORRANT POC A POC I PASSANT A NET A DALT */
/*
Route::group(['middleware' => ['web']], function () {

    
    Route::get('principal', function() {
        return view('principal');
    });
    
    Route::get('welcome', function() {
        return view('welcome');
    });
});*/
