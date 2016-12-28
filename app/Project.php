<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

	protected $fillable = ['name','description','icon','header','created_by','start_date','due_date','end_date'];


    public function user()
    {
    	return $this->belongsTo('App\User','created_by','id');
    }


    public function tasks()
    {
    	return $this->hasMany('App\Task');
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