<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
       /**
     * The table of this model .
     *
     * @var array
     */
	protected $table = 'pubs';
	
	    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'emplacement_x', 'emplacement_y', 'dimension_x', 'dimension_y',
    ];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
	

}
