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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// boutique routes
Route::get('/add', 'BoutiqueController@newBoutique');
Route::get('/see', 'BoutiqueController@allBoutique');
Route::get('/inscriptionform', 'BoutiqueController@inscription');
Route::post('inscription', 'BoutiqueController@newBoutique');




