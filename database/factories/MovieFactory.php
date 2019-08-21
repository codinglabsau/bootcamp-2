<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->city(),
        'image' => 'https://via.placeholder.com/210x311',  
        'description' => $faker->text(rand(80, 255)),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
