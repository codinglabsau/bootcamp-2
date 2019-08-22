<?php

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
        // factory(\App\Movie::class, 100)->create(); 
        \App\Movie::insert([
            'title' => 'John Wick 3: Parabellum',
            'image' => 'imgs/movies/1.png',
            'description' => "The story focuses on John Wick (Reeves) who seeks revenge on the son of Russian gangster for stealing his vintage car and killing his puppy, which serves as a memento of his recently deceased wife, Helen. Stahelski and David Leitch directed the film together, though only Stahelski was credited.",
            'rating' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Movie::insert([
            'title' => 'Avengers: Endgame',
            'image' => 'imgs/movies/2.png',
            'description' => "The grave course of events set in motion by Thanos, that wiped out half the universe and fractured the Avengers ranks, compels the remaining Avengers to take one final stand in Marvel Studios' grand conclusion to twenty-two films - Avengers: Endgame.",
            'rating' => '5',
            'created_at' => now(),
            'updated_at' => now(),          
        ]);
        \App\Movie::insert([
            'title' => 'Spider-Man: Far From Home',
            'image' => 'imgs/movies/3.png',
            'description' => 'Following the events of Avengers: Endgame, Spider-Man must step up to take on new threats in a world that has changed forever.',
            'rating' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
