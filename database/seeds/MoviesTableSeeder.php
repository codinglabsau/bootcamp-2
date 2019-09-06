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
        ]);

        factory(Movie::class)->create([
            'title' => 'Spider-Man: Far From Home',
            'image' => 'imgs/movies/spiderman.png',
            'description' => "Peter Parker's relaxing European vacation takes an unexpected turn when Nick Fury shows up in his hotel room to recruit him for a mission.",
            'rating' => '4',
        ]);

        factory(Movie::class)->create([
            'title' => 'Avengers: Endgame',
            'image' => 'imgs/movies/avengersendgame_lob_crd_05_2.png',
            'description' => "Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies",
            'rating' => '5',
        ]);

        factory(Movie::class)->create([
            'title' => 'Ironman',
            'image' => 'imgs/movies/ironman.png',
            'description' => "A billionaire industrialist and genius inventor, Tony Stark (Robert Downey Jr.), is conducting weapons tests overseas, but terrorists kidnap him to force him to build a devastating weapon.",
            'rating' => '4',
        ]);

//        $actors = [
//            [
//                'f_name' => 'Bob',
//                'l_name' => 'Dylan',
//                'quotes' => ["I'm John Wick!", "Lorem dolar visa bella."]
//            ],
//            [
//                'f_name' => 'Sue',
//                'l_name' => 'Salway',
//                'quotes' => ['test quote']
//            ]
//        ];
//
//        foreach ($actors as $data) {
//            $actor = factory(Actor::class)->create([
//                'f_name' => $data['f_name'],
//                'l_name' => $data['l_name'],
//            ]);
//            $movie->actors()->attach($actor);
//            foreach ($data['quotes'] as $quote) {
//                $movie->quotes()->create([
//                    'movie_id' => $movie->id,
//                    'actor_id' => $actor->id,
//                    'quote' => $quote,
//                ]);
//            }
//        }



        // factory(\App\Movie::class, 100)->create();
        // \App\Movie::insert([
        //     'title' => 'John Wick 3: Parabellum',
        //     'image' => 'imgs/movies/1.png',
        //     'description' => "The story focuses on John Wick (Reeves) who seeks revenge on the son of Russian gangster for stealing his vintage car and killing his puppy, which serves as a memento of his recently deceased wife, Helen. Stahelski and David Leitch directed the film together, though only Stahelski was credited.",
        //     'rating' => '4',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // \App\Movie::insert([
        //     'title' => 'Avengers: Endgame',
        //     'image' => 'imgs/movies/2.png',
        //     'description' => "The grave course of events set in motion by Thanos, that wiped out half the universe and fractured the Avengers ranks, compels the remaining Avengers to take one final stand in Marvel Studios' grand conclusion to twenty-two films - Avengers: Endgame.",
        //     'rating' => '5',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // \App\Movie::insert([
        //     'title' => 'Spider-Man: Far From Home',
        //     'image' => 'imgs/movies/3.png',
        //     'description' => 'Following the events of Avengers: Endgame, Spider-Man must step up to take on new threats in a world that has changed forever.',
        //     'rating' => '4',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
