<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PotatoTest extends TestCase
{
    public function test_potatoes()
    {
        $response = $this->get('/potatoes');

        $response->assertStatus(200);
    }

    public function test_potatoe()
    {
        $response = $this->get('/potatoes/1');

        $response->assertStatus(200);
    }

    public function test_potatoes_create_guest_redirect()
    {
        $response = $this->get('/potatoes/create');

        $response->assertStatus(302);
    }

    public function test_potatoes_create_user()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/potatoes/create');

        $response->assertStatus(200);
    }
}
