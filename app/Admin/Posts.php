<?php

namespace App\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function Tags()
    {
    	return $this->belongsToMany('App\Admin\Tags','post_tags')->withTimestamps();
    }

    public function Categories()
    {
    	return $this->belongsToMany('App\Admin\Categories','category_posts')->withTimestamps();;
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

   

    public function getSlugAttribute($value)
    {
        return route('post',$value);
    }
}
