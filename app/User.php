<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function ownedprojects()
    {
    	return $this->hasMany('App\Project','created_by','id');
    }


    public function projects()
    {
    	return $this->belongsToMany('App\Project');
    }


    public function member_since()
    {
    	 return $this->created_at->diffForHumans(Carbon::now(),true);
    }

    

}
