<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

     protected $guarded = [];

    public function getFeaturedAttribute($featured){
        
        return asset($featured);
    } 

    public function category(){

    	return $this->belongsTo('App\Category');
    }
}
