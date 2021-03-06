<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function sections()
    {
        return $this->belongsToMany('App\Models\Section');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
