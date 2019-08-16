<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class)->create([
            'title'=>"John Wick 3"
        ]);
    }
}
