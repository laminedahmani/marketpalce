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

<<<<<<< HEAD

// membre authentication routes

  Route::get( 'membre/login', 'Auth\AuthMembreLoginController@showLoginForm' );
  Route::get( 'membre/register', 'Auth\MembreRegisterController@showRegistrationForm' );
  
  Route::post( 'membre/login', ['as' => 'membre.login', 'uses' => 'Auth\AuthMembreLoginController@membreLogin' ] );
  Route::post( 'membre/register', [ 'as' => 'membre.register', 'uses' => 'Auth\MembreRegisterController@register' ] );
  Route::post('membre/logout', 'Auth\AuthMembreLoginController@logout')->name('membre.logout');
  
  
  
  // boutique authentication routes

  Route::get( 'boutique/login', 'Auth\AuthBoutiqueLoginController@showLoginForm' );
  Route::get( 'boutique/register', 'Auth\BoutiqueRegisterController@showRegistrationForm' );
  
  Route::post( 'boutique/login', ['as' => 'boutique.login', 'uses' => 'Auth\AuthBoutiqueLoginController@boutiqueLogin' ] );
  Route::post( 'boutique/register', [ 'as' => 'boutique.register', 'uses' => 'Auth\BoutiqueRegisterController@register' ] );
  Route::post('boutique/logout', 'Auth\AuthBoutiqueLoginController@logout')->name('boutique.logout');
  

Route::middleware('auth:membre')->get('membre', 'MembreController@index');
 Route::middleware('auth:boutique')->get('boutique', 'BoutiqueController@index');

//backoffice admin
Route::view('/home', 'home')->middleware('auth');

/*
=======
Route::get('/home', 'HomeController@index')->name('home');

// boutique routes
Route::get('/add', 'BoutiqueController@newBoutique');
Route::get('/see', 'BoutiqueController@allBoutique');
Route::get('/inscriptionform', 'BoutiqueController@inscription');
Route::post('inscription', 'BoutiqueController@newBoutique');




>>>>>>> 2849f0efbef649f2fd55843089cc122eee408790
*/