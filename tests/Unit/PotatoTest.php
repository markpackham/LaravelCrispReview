<?php

namespace Tests\Unit;

use App\Models\Potato;
use App\Models\User;
use Tests\TestCase;

class PotatoTest extends TestCase
{

    public function test_potato_attributes()
    {
        $potato1 = new Potato();
        $potato1->potato_name = 'Duke of York';
        $potato1->potato_country = 'UK';

        $this->assertTrue($potato1->potato_name === 'Duke of York');
        $this->assertTrue($potato1->potato_country === 'UK');
    }

    public function test_potato_created()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/potatoes', ['potato_name' => 'Duke of York', 'potato_country' => 'UK']);

        $potato1 = Potato::where('potato_name', '=', 'Duke of York')->first();

        $this->assertEquals('Duke of York', $potato1->potato_name);
        $this->assertEquals('UK', $potato1->potato_country);
    }
}