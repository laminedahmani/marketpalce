<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
		
	public function recever()
    {
        return $this->belongsTo('App\Membre');
    }
	
   public function 	sender()
    {
        return $this->belongsTo('App\Membre');
    }
}
