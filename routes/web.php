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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\SubCategorie;

Route::get('/', function () {
    return view('index');
})->name('index');;;

Auth::routes();
 

//backoffice admin
Route::view('/home', 'home')->middleware('auth');



// membre authentication routes

  Route::get( 'connexion', 'Auth\AuthMembreLoginController@showLoginForm' );
  Route::get( 'inscription', 'Auth\MembreRegisterController@showRegistrationForm' )->name('inscription');;
  
  Route::post( 'membre/login','Auth\AuthMembreLoginController@membreLogin' )->name('membre.login');
  Route::post( 'membre/register', [ 'as' => 'membre.register', 'uses' => 'Auth\MembreRegisterController@register' ] );
  Route::post('membre/logout', 'Auth\AuthMembreLoginController@logout')->name('membre.logout');
  Route::get('modifier/membre/{id}','MembreController@edit');
  Route::put('modifier/membre/{id}','MembreController@update');
  
  
  // boutique authentication routes

  //Route::get( 'boutique/login', 'Auth\AuthBoutiqueLoginController@showLoginForm' );
//  Route::get( 'boutique/register', 'Auth\BoutiqueRegisterController@showRegistrationForm' );
  
  Route::post( 'boutique/login', ['as' => 'boutique.login', 'uses' => 'Auth\AuthBoutiqueLoginController@boutiqueLogin' ] );
  Route::post( 'boutique/register', [ 'as' => 'boutique.register', 'uses' => 'Auth\BoutiqueRegisterController@register' ] );
  Route::post('boutique/logout', 'Auth\AuthBoutiqueLoginController@logout')->name('boutique.logout');
  

Route::middleware('auth:membre')->get('membre', 'MembreController@index')->name('membre');
Route::middleware('auth:boutique')->get('boutique', 'BoutiqueController@index')->name('boutique');
Route::get('modifier/boutique/{id}','BoutiqueController@edit');

// Annonce 
Route::get( 'ajout/produits', 'AnnonceController@create' )->name('ajout.produits');;
Route::get('get-categorie-list','AnnonceController@getSubcatList');

// });

