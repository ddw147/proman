<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    //

	protected $fillable = ['owner_type','owner_id','caption','description','path','user_id'];

	

     public function owner()
    {
    	  return $this->morphTo();
    }
}
