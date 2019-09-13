<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Actor extends Model
{
    protected $casts =['dob'=>'date'];
    public function movies(){
        return $this->belongsToMany( Movie::class);
    }

    public function quotes(){
        return $this->hasMany(Quote::class);
    }
}

