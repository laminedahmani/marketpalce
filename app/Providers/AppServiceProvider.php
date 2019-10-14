<?php

// namespace App\Providers;

// use Illuminate\Support\ServiceProvider;

// class AppServiceProvider extends ServiceProvider
// {
//     *
//      * Bootstrap any application services.
//      *
//      * @return void
     
//     public function boot()
//     {
//         //
//     }

//     /**
//      * Register any application services.
//      *
//      * @return void
//      */
//     public function register()
//     {
//         //
//     }
// }
namespace App\Providers;
 use App\Categorie;
  use App\State;
 use App\SubCategorie;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       // Schema::defaultStringLength(191);
	   //View::share(['currentUser' => $currentUser, 'needToBePassed' => $needToBePassed]);
	   View::share( ['categories_dfault'=>Categorie::all(),'states'=>State::all(['code', 'nom'])->pluck('nom', 'code')]);
    }
 
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
