<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
/**
     * The table of this model .
     *
     * @var array
     */
	protected $table = 'photos';
	
	
	  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'url_photo', 'annonce_id',
    ];
	
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
	


	public function annonce()
    {
        return $this->belongsTo('App\Annonce');
    }
}
