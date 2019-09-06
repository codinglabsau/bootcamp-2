<?php

use Illuminate\Database\Seeder;
use App\ActorMovie;

class ActorMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActorMovie::insert([
            'movie_id' => '1',
            'actor_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        ActorMovie::insert([
            'movie_id' => '2',
            'actor_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        ActorMovie::insert([
            'movie_id' => '2',
            'actor_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        ActorMovie::insert([
            'movie_id' => '2',
            'actor_id' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        ActorMovie::insert([
            'movie_id' => '3',
            'actor_id' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
