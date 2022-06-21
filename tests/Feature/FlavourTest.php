<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FlavourTest extends TestCase
{
    public function test_flavours()
    {
        $response = $this->get('/flavours');

        $response->assertStatus(200);
    }
}
