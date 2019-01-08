<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function Posts()
    {
    	return $this->belongsToMany('App\Admin\Post','post_tags')->orderBy('created_at','DESC')->paginate(5);
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
