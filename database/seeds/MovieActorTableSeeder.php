<?php

use Illuminate\Database\Seeder;

class MovieActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MovieActor::insert([
            'movie_id' => '1',
            'actor_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\MovieActor::insert([
            'movie_id' => '2',
            'actor_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\MovieActor::insert([
            'movie_id' => '2',
            'actor_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\MovieActor::insert([
            'movie_id' => '2',
            'actor_id' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\MovieActor::insert([
            'movie_id' => '3',
            'actor_id' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
