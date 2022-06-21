<?php

namespace Tests\Unit;

use App\Models\Potato;
use App\Models\User;
use Tests\TestCase;

class PotatoTest extends TestCase
{

    public function test_potato_name()
    {
        $potato1 = new Potato();
        $potato1->potato_name = 'Starchy';
        $potato1->potato_country = 'Narnia';

        $this->assertTrue($potato1->potato_name === 'Starchy');
    }

    // public function test_potato_country_created()
    // {
    //     $user = User::where('id', '=', 1)->first();
    //     $this->actingAs($user)->post('/potatoes', ['potato_name' => 'Namey', 'potato_country' => 'Spuddy']);

    //     $potato1 = Potato::where('potato_name', '=', 'Namey')->first();

    //     $this->assertEquals('Spuddy', $potato1->potato_country);
    // }

}
