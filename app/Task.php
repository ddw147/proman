<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
	protected $fillable = ['title','description','project_id','created_by','assigned_to','start_date','end_date','due_date','priority','label','parent_id'];



    public function project()
    {
    	return $this->belongsTo('App\Project');
    }



     public function attachments()
    {
        return $this->morphMany('App\Attachment', 'owner');
    }


    public function comments()
    {	
    	 return $this->morphMany('App\Comment', 'owner');
    }

}
