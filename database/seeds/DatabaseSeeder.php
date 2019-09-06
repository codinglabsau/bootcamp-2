<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        // $this->call(QuotesTableSeeder::class);
<<<<<<< HEAD
        $this->call(RelationTableSeeder::class);

=======
        //$this->call(ActorMovieTableSeeder::class);
>>>>>>> 92dbe091571102cfe7c9c4f399288054b5469127
    }
}
