<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    	/**
     * The table of this model .
     *
     * @var array
     */
   protected $table = 'states';
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'code_postal', 'nom','state_id',
    ];
	
	
	
	// method qui retourne les communes d'une state 
	/*public function communes()
    {
        return $this->hasMany('App\Commune');
    }*/
	// method qui retourne les clients d'une state 
		public function  annonces ()
    {
        return $this->hasMany('App\Annonce');
    }
	
		public function  membres ()
    {
        return $this->hasMany('App\Membre');
    }
		public function  boutiques ()
    {
        return $this->hasMany('App\Boutique');
    }
}
