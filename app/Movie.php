<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model

{
    public function actors(){
        return $this->belongsToMany(Actor::class, "actor_movie", "id", "id")->withTimestamps();

    }
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }


}
