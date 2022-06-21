<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    public function test_brands()
    {
        $response = $this->get('/brands');

        $response->assertStatus(200);
    }
}
