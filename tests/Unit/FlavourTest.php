<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Flavour;
use Tests\TestCase;

class FlavourTest extends TestCase
{
    public function test_flavour_attributes()
    {
        $flavour1 = new Flavour();
        $flavour1->flavour_name = 'Shrimp';

        $this->assertTrue($flavour1->flavour_name === 'Shrimp');
    }

    public function test_flavour_name_created()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/flavours', ['flavour_name' => 'Shrimp']);

        $flavour1 = Flavour::where('flavour_name', '=', 'Shrimp')->first();

        $this->assertEquals('Shrimp', $flavour1->flavour_name);
    }
}
