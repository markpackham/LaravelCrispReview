<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BrandTest extends TestCase
{
    public function test_brands()
    {
        $response = $this->get('/brands');

        $response->assertStatus(200);
    }

    public function test_brand()
    {
        $response = $this->get('/brands/1');

        $response->assertStatus(200);
    }

    public function test_brand_edit()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/brands/1/edit');

        $response->assertStatus(200);
    }

    public function test_brand_edit_redirect()
    {
        $response = $this->get('/brands/1/edit');

        $response->assertStatus(302);
    }

    public function test_brands_create_guest_redirect()
    {
        $response = $this->get('/brands/create');

        $response->assertStatus(302);
    }

    public function test_brands_create_user()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/brands/create');

        $response->assertStatus(200);
    }
}
