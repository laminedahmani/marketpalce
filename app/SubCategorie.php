<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategorie extends Model
{
	
	/**
     * The table of this model .
     *
     * @var array
     */
	protected $table = 'subcategories';
	
		
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'categorie_id'
    ];

	
	
	
   public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
	public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }	
	
}
