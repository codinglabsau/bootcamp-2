<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

public function Movies() {
    return $this->belongsToMany(Actor::class);
}

// public function Quotes()
// {
//     return $this->belongsToMany(Quotes::class);
// }

// class Driver
// {
//     public function cars()
//     {
//         return $this->belongsToMany(Car::class);
//     }
// }
// class Car
// {
//     public function drivers()
//     {
//         return $this->belongsToMany(Driver::class);
//     }
// }
}
