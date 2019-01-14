<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use App\User;

class MoviesTest extends TestCase
{
    /** @test */
    function it_shows_the_movies()
    {

        $this->get(route('movies.index'))
            ->assertSee('Available movies')
            ->assertStatus(200)
        ;
    }

    /** @test */
    function it_does_not_show_the_edit_button_to_logged_in_users()
    {
       $this->markTestIncomplete();
    }

    /** @test */
    function it_does_not_show_the_edit_button_to_non_admin_users()
    {
        $this->markTestIncomplete();
    }
}
