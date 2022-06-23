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

    public function test_potato_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/potatoes', ['potato_name' => 'Delete Spud Name', 'potato_country' => 'Delete Spun Country']);

        $potato1 = Potato::where('potato_name', '=', 'Delete Spud Name')->first();

        $this->assertEquals('Delete Spud Name', $potato1->potato_name);
        $this->assertEquals('Delete Spun Country', $potato1->potato_country);

        $potato1ID = $potato1->id;

        $this->actingAs($user)->delete("/potatoes/$potato1ID");

        $potato1 = Potato::where('potato_name', '=', 'Delete Spud Name')->first();
        $this->assertNull($potato1);
    }
}
