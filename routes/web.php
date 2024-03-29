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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function (){
       return view('welcome'); 
    })->name('home');
    
    Route::get('principal', function() {
        return view('principal');
    });
    
    Route::get('welcome', function() {
        return view('welcome');
    });
    
    Route::get('admin', function() {
        return view('admin');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');
