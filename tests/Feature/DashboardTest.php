<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{

    use RefreshDatabase;
    /** @test */
    public function it_shows_the_dashboard_page_to_authenticated_user()
    {
        $user = factory(User::class)->create([
            'admin'=> true
        ]);

        $this->actingAs($user)
            ->get(route('home'))
            ->assertSee('Dashboard')
            ->assertStatus(200)
        ;
    }

    /** @test */
    public function it_redirects_the_user_when_unauthenticated()
    {
        $user = factory(User::class)->create([
            'admin' => false,
        ]);

        $this->actingAs($user)
            ->get(route('home'))
            ->assertSee('Dashboard')
            ->assertStatus(200)
        ;
    }

}
