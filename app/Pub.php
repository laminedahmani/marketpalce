<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
       // use SoftDeletes;
	protected $table = 'pubs';
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
	

}
