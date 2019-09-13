<?php

namespace Tests\Feature;

use App\Movie;
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
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("Fast boi and their toys");
    }
}
