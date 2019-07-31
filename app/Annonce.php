<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
      // use SoftDeletes;
	protected $table = 'annonces';
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
	



	public function photos()
    {
        return $this->hasMany('App\Photo');
    }

	public function membre()
    {
        return $this->belongsTo('App\Membre');
    }
	public function boutique()
    {
        return $this->belongsTo('App\Boutique');
    }
}
