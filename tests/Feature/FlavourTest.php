<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FlavourTest extends TestCase
{
    public function test_flavours()
    {
        $response = $this->get('/flavours');

        $response->assertStatus(200);
    }

    public function test_flavour()
    {
        $response = $this->get('/flavours/1');

        $response->assertStatus(200);
    }

    public function test_flavour_edit()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/flavours/1/edit');

        $response->assertStatus(200);
    }

    public function test_flavour_edit_redirect()
    {
        $response = $this->get('/flavours/1/edit');

        $response->assertStatus(302);
    }

    public function test_flavours_create_guest_redirect()
    {
        $response = $this->get('/flavours/create');

        $response->assertStatus(302);
    }

    public function test_flavours_create_user()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/flavours/create');

        $response->assertStatus(200);
    }
}
