<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Actor;
use Faker\Generator as Faker;

$factory->define(Actor::class, function (Faker $faker) {
    return [
        'f_name' => $faker->firstName(),
        'l_name' => $faker->firstName(),
        'image' => $faker->imageUrl(210, 311, 'people'), 
        'dob' => $faker->dateTimeBetween('1950-01-01', '2012-12-31')
            ->format('Y-m-d'), // outputs something like 17/09/2001
    ];
});
