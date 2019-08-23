<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieActor extends Model
{
    public function actors(){
        return $this->hasOne(Actor::class);
    }
    public function movie(){
        return $this->hasOne(Movie::class);
    }
}
