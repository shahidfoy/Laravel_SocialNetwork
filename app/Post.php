<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // POSTS FOR USERS
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likes() {
        return $this->hasMany('App\Like');
    }

}
