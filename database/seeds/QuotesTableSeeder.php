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
            'quote' => 'Lorem ipsum dolar.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
