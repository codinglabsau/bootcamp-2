<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('Image');
            $table->string('Description');
            $table->float('Rating');
            $table->timestamps();
        });
        Schema::create('actor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fName');
            $table->string('lName');
            $table->string('DoB');
            $table->timestamps();
        });
        Schema::create('movie-actor', function (Blueprint $table) {
            $table->integer('movie_ID');
            $table->integer('actor_ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
