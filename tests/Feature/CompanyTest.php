<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    public function test_companies()
    {
        $response = $this->get('/companies');

        $response->assertStatus(200);
    }

    public function test_company()
    {
        $response = $this->get('/companies/1');

        $response->assertStatus(200);
    }

    public function test_company_edit()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/companies/1/edit');

        $response->assertStatus(200);
    }

    public function test_company_edit_redirect()
    {
        $response = $this->get('/companies/1/edit');

        $response->assertStatus(302);
    }

    public function test_companies_create_guest_redirect()
    {
        $response = $this->get('/companies/create');

        $response->assertStatus(302);
    }

    public function test_companies_create_user()
    {
        $user = User::where('id', '=', 1)->first();
        $response = $this->actingAs($user)->get('/companies/create');

        $response->assertStatus(200);
    }
}
