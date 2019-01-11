<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admins_can_visit_the_admin_dashboard()
    {
        $user = factory(User::class)->create(['admin' => true]);

        $this->actingAs($user)
        ->get(route('admin_dashboard'))
        ->assertStatus(200)
        ->assertSee('Admin Panel')
        ;

    }

    /** @test */
    public function non_admin_users_cannot_visit_the_admin_dashboard()
    {
        $user = factory(User::class)->create(['admin' => false]);

        $this->actingAs($user)
        ->get(route('admin_dashboard'))
        ->assertStatus(403)
        ;

    }


    /** @test */
    function guests_cannot_see_the_dashboard_page()
    {

        $this->get(route('admin_dashboard'))
        ->assertStatus(200)
        ->assertRedirect('login')
        ;
    }
}
