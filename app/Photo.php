<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
          // use SoftDeletes;
	protected $table = 'photos';
	
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
