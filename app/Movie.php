<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model

{
    public function actors(){
        return $this->belongsToMany(Actor::class)
            //This extends what information is displayed within the Pivot table, allowing for extra data to be called within the app
            ->using(ActorMovie::class)
            ->withPivot([
                'character',
            ]);

    }
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }


}
