<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

	protected $fillable= ['comment','owner_type','owner_id','parent_id','user_id'];

	
     public function owner()
    {
    	  return $this->morphTo();
    }


}
