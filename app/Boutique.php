<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Boutique extends Authenticatable
{
     use Notifiable;
          
	protected $table = 'boutiques';
	protected $guard = 'boutique';
      
	   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','type_magasin','nbr_annonce_autorise','nom','prenom','ville','tel','address','secteur_activite','presentation','url_photo',
    ];

	
	
  protected $hidden = [
        'password', 'remember_token',
    ];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
	



	public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
=======
/*
class Boutique extends Model
{
    //
>>>>>>> 2849f0efbef649f2fd55843089cc122eee408790
}
*/