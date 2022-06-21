<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_register_redirect()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/register');

        $response->assertStatus(302);
    }
}
