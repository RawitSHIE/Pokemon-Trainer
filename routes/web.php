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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/show', 'IndexController@find');

Auth::routes();

Route::group(['prefix' => 'console'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/data', 'PokemonController');
});

Route::get('/home', function() {
    return redirect('console');
});

Route::get('/all', function() {
    return view('all');
});