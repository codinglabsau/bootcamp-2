<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Actor::insert([
            'id' => '1',
            'f_name' => 'Keanu',
            'l_name' => 'Reeves',
            'dob' => '1964-09-02',
            'image' => 'imgs/actors/keanu.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Actor::insert([
            'id' => '2',
            'f_name' => 'Scarlett',
            'l_name' => 'Johansson',
            'dob' => '22-11-1984',
            'image' => 'imgs/actors/scarlett.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Actor::insert([
            'id' => '3',
            'f_name' => 'Robert',
            'l_name' => 'Downey Jr.',
            'dob' => '04/04/1965',
            'image' => 'imgs/actors/rdj.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Actor::insert([
            'id' => '4',
            'f_name' => 'Chris',
            'l_name' => 'Evans',
            'dob' => '13/06/1981',
            'image' => 'imgs/actors/chris.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Actor::insert([
            'id' => '5',
            'f_name' => 'Tom',
            'l_name' => 'Holland',
            'dob' => '01/06/1996',
            'image' => 'imgs/actors/tom.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // factory(\App\Actor::class, 95)->create();
    }
}
