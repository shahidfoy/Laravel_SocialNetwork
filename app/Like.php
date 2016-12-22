<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // LIKES MODEL FILE
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
