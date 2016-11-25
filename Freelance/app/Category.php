<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name','category'];

    public function projects(){
    	return $this->hasMany('App\Project');
    }
}
