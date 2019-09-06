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
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '2',
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '3',
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '4',
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '3',
            'actor_id' => '5',
        ]);
    }
}

