<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    protected $fillable = ['name','description','image_path','creator_id','claimer_id','category_id'];

   public function categories(){
   		return $this->belongsTo('App\Category','category_id');
   }

   public function creator_project(){
   		return $this->belongsTo('App\User','creator_id');
   }

   public function claimer_project(){
   		return $this->hasOne('App\User','claimer_id');
   }

}
