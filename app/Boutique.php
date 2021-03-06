<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Boutique extends Authenticatable
{
     use Notifiable;
          /**
     * The table of this model .
     *
     * @var array
     */
	protected $table = 'boutiques';
	protected $guard = 'boutique';
      
	   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email','password','type_magasin','nbr_annonce_autorise','nom','prenom','state_id','tel','address','secteur_activite','presentation','url_photo','nom_magasin','nbr_vue','pack','Activated'
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
	

    public function state()
    {
        return $this->belongsTo('App\State');
    }

	public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }

}