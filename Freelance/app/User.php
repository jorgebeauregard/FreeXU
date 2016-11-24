<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects_creators(){
        return $this->hasMany('App\Project');
    }

    public function project_claimer(){
        return $this->belongsTo('App\Project');
    }

    public function getId()
    {   
        return $this->id;
    }

    public function getName()
    {   
        return $this->name;
    }
}
