<?php

use App\Actor;
use App\Movie;
use App\Quote;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class)->create([
            'title' => 'John Wick 3: Parabellum',
            'image' => '/imgs/movies/John-Wick-3.png',
            'description' => "The story focuses on John Wick (Reeves) who seeks revenge on the son of Russian gangster for stealing his vintage car and killing his puppy, which serves as a memento of his recently deceased wife, Helen. Stahelski and David Leitch directed the film together, though only Stahelski was credited.",
            'rating' => '4',
            'genre' => 'Action, Crime, Thriller',
            'duration' => '2h 11min',
            'director' => 'Chad Stahelski',
        ]);

        factory(Movie::class)->create([
            'title' => 'Spider-Man: Far From Home',
            'image' => 'imgs/movies/spiderman.png',
            'description' => "Peter Parker's relaxing European vacation takes an unexpected turn when Nick Fury shows up in his hotel room to recruit him for a mission.",
            'rating' => '4',
            'genre' => 'Action, Adventure, Sci-Fi',
            'duration' => '2h 9min',
            'director' => 'Jon Watts'
        ]);

        factory(Movie::class)->create([
            'title' => 'Avengers: Endgame',
            'image' => 'imgs/movies/avengersendgame_lob_crd_05_2.png',
            'description' => "Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies",
            'rating' => '5',
            'genre' => 'Action, Adventure, Sci-Fi',
            'duration' => '3h 1min',
            'director' => 'Anthony Russo, Joe Russo'
        ]);

        factory(Movie::class)->create([
            'title' => 'Ironman',
            'image' => 'imgs/movies/ironman.png',
            'description' => "A billionaire industrialist and genius inventor, Tony Stark (Robert Downey Jr.), is conducting weapons tests overseas, but terrorists kidnap him to force him to build a devastating weapon.",
            'rating' => '4',
            'genre' => 'Action, Adventure, Sci-Fi',
            'duration' => '2h 6min',
            'director' => 'Jon Favreau'
        ]);
    }
}
