<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Membre extends Authenticatable
{
	 use Notifiable;
          /**
     * The table of this model .
     *
     * @var array
     */
	protected $table = 'membres';
	protected $guard = 'membre';

	    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email','password','type_magasin','nbr_annonce_autorise','nom','prenom','state_id','tel','nom_magasin','address','secteur_activite','presentation','url_photo',
    ];

	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
  protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['deleted_at'];
	



	public function state()
    {
        return $this->belongsTo('App\State');
    }
	public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
	
   public function message_senders()
    {
        return $this->hasMany('App\Message');
    }
	
   public function message_recevers()
    {
        return $this->hasMany('App\Message');
    }
}
