<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
class Project extends Model
{
    //

	protected $fillable = ['name','description','icon','header','created_by','start_date','due_date','end_date'];


	protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'start_date',
        'due_date',
        'end_date'
    ];

    public function owner()
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

    public function members()
    {
    	return $this->belongsToMany('App\User');
    }
    
    public function setStartDateAttribute($value)
    {
    	return Carbon::createFromFormat('d/m/Y',$value);
    }

    public function setDueDateAttribute($value)
    {
    	return Carbon::createFromFormat('d/m/Y',$value);
    }
    public function setEndDateAttribute($value)
    {
    	return Carbon::createFromFormat('d/m/Y',$value);
    }
}
