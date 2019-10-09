<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
      /**
     * The table of this model .
     *
     * @var array
     */
	protected $table = 'annonces';
	
	
	  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'titre', 'description','type_annonce','prix','quantite','prix_livraison','prix_livraison','deli_livraison','prix_solde','Activated','nbr_vue','marque','anne','taille','modele','etat','couleur','img_principale','membre_id','boutique_id','state_id','categorie_id','subcategorie_id'
    ];
	
	
	
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

	public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }	
	public function subCategorie()
    {
        return $this->belongsTo('App\SubCategorie');
    }	
	public function state()
    {
        return $this->belongsTo('App\State');
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
