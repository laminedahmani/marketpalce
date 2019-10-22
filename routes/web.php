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
use App\Boutique;
use App\Categorie;
use App\State;
use App\Annonce;
use App\Photo;



Route::get('/', function () {
  $annonces=Annonce::orderBy('id','desc')->take(10)->get();
   $annoncevendu=Annonce::orderBy('nbr_vue','desc')->take(10)->get();
  $boutiques=Boutique::orderBy('id','desc')->take(6)->get();
  $categorie=Categorie::all();
    return view('index',['boutiques'=>$boutiques , 'annonces'=>$annonces,'categorie'=>$categorie,'annoncevendu'=>$annoncevendu]);
})->name('index');



Route::get('/annonce/{id}', function ($id) {
  $annonce=Annonce::find($id);
  $photos=Photo::where('annonce_id',$annonce->id)->get();
  $categorie=Categorie::find($annonce->categorie_id);
  $souscategorie=Categorie::find($annonce->subcategorie_id);
  $wilaya=State::find($annonce->state_id);
  return view('product/oneproduct',['annonce'=>$annonce , 'photos'=>$photos,'categorie'=>$categorie ,'souscategorie'=>$souscategorie,'wilaya'=>$wilaya]);
})->name('annonce')->where('id','[0-9]+');


// page marquet routes -----------------------------------------------------------
/*
Route::get('/marquet/', function () {
    $annoncevendu=Annonce::orderBy('nbr_vue','desc')->take(4)->get();
    $annonce=Annonce::all();
    $categories=Categorie::all();
    $wilayas =State::all();
  return view('store',['annonces'=>$annonce , 'categories'=>$categories,'annoncevendu'=>$annoncevendu,'wilayas'=>$wilayas]);
})->name('marquet.');

Route::get('/marquet/{q}', function ($q) {
    $annoncevendu=Annonce::orderBy('nbr_vue','desc')->take(4)->get();
    $annonce=Annonce::all();
    $categories=Categorie::all();
    $wilayas =State::all();
  return view('store',['annonces'=>$annonce , 'categories'=>$categories,'annoncevendu'=>$annoncevendu,'wilayas'=>$wilayas]);
})->name('marquet.show');
*/
  Route::get( 'marquet/filtre', 'AnnonceController@filtre' )->name('filtre'); //filtre market
  Route::get( 'marquet/{cat}', 'AnnonceController@categorie' );
  Route::get( 'marquet/{cat}/{subcat}', 'AnnonceController@subcategorie' );

// !marquette route  ------------------------------------------------------------


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
  
Route::get('modifier/boutique/{id}','BoutiqueController@edit');
  Route::put('modifier/boutique/{id}','BoutiqueController@update');  

Route::middleware('auth:membre')->get('membre', 'MembreController@index')->name('membre');
Route::middleware('auth:boutique')->get('boutique', 'BoutiqueController@index')->name('boutique');


//-----Routes Annonce 

Route::get( 'produits/ajout', 'AnnonceController@create' )->name('ajout.produits');
Route::post('produits/ajout', 'AnnonceController@store')->name("annonces.store");
Route::get('get-categorie-list','AnnonceController@getSubcatList');

// });


//public routes 
Route::get('/boutiques/{id}',  'BoutiqueController@show');


// routes statique ------------------------------------------------------

Route::get('/apropos/', function () {
    return view('appropo');
});
Route::get('/pack', function () {
    return view('pack');
});
Route::get('/pubs', function () {
    return view('pubs');
});
Route::get('/terme', function () {
    return view('terme');
});
Route::get('/pubs', function () {
    return view('pubs');
});
Route::get('/contact', function () {
    return view('contact');
});

