<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Quote::insert([
            'id' => '1',
            'movie_id' => '1',
            'actor_id' => '1',
            'quote' => 'Guns. Lots Of Guns - John Wick',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Quote::insert([
            'id' => '2',
            'movie_id' => '2',
            'actor_id' => '2',
            'quote' => "Avengers Assemble! - Scarlett Johansson",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Quote::insert([
            'id' => '3',
            'movie_id' => '2',
            'actor_id' => '3',
            'quote' => "I'am Iron Man! - Robert Downey Jr.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Quote::insert([
            'id' => '4',
            'movie_id' => '3',
            'actor_id' => '5',
            'quote' => "it's like my senses have been dialed to eleven. - Tom Holland",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
