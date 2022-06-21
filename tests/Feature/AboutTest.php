<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{
    public function test_about()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
