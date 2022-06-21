<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PotatoTest extends TestCase
{
    public function test_potatoes()
    {
        $response = $this->get('/potatoes');

        $response->assertStatus(200);
    }
}
