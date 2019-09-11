<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('actor_movie')->insert([
            'movie_id' => '1',
            'actor_id' => '1',
            'character' => 'John Wick',
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '2',
            'character' => 'Black Widow',
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '3',
            'character' => 'Iron Man',
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '4',
            'character' => 'Captain America',
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '3',
            'actor_id' => '5',
            'character' => 'Spider-Man'
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '5',
            'character' => 'Spider-Man'
        ]);
    }
}

