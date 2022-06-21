<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrispTest extends TestCase
{
    public function test_crisps()
    {
        $response = $this->get('/crisps');

        $response->assertStatus(200);
    }

    public function test_crisp()
    {
        $response = $this->get('/crisps/1');

        $response->assertStatus(200);
    }

    public function test_crisp_edit()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/crisps/1/edit');

        $response->assertStatus(200);
    }

    public function test_crisp_edit_redirect()
    {
        $response = $this->get('/crisps/1/edit');

        $response->assertStatus(302);
    }

    public function test_crisps_create_guest_redirect()
    {
        $response = $this->get('/crisps/create');

        $response->assertStatus(302);
    }

    public function test_crisps_create_user()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/crisps/create');

        $response->assertStatus(200);
    }
}
