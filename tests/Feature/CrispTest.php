<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrispTest extends TestCase
{
    public function test_crisps()
    {
        $response = $this->get('/crisps');

        $response->assertStatus(200);
    }
}
