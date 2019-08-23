<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function Actor()
    {
        return $this->belongsToMany(Actor::class);
    }
}
