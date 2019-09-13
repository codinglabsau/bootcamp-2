<?php

namespace Tests\Feature;

use App\Movie;
use App\Actor;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        factory(Movie::class)->create(['title'=>"Fast boi and their toys"]);
        factory(Movie::class)->create(['title'=>"Test movie 2"]);
        factory(Actor::class)->create(['dob'=>""]);
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee("Fast boi and their toys");
        $response->assertSee("Test movie 2");
        $response = $this->get('/movies/2');
        $response->assertStatus(200);
        $response = $this->get('/actors/1');
        $response->assertStatus(200);
    }
}
