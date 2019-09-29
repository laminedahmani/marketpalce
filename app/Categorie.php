<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    
	
	/**
     * The table of this model .
     *
     * @var array
     */
	protected $table = 'categories';
	
	    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
	
	public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
	 public function subCategories()
    {
        return $this->hasMany('App\SubCategorie');
    }
}
