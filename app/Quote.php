<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    public function actors(){
        return $this->belongsTo(Actor::class);
    }

    public function movies(){
        return $this->belongsTo(Movie::class);
    }
}
