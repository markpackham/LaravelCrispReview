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
        $this->actingAs($user)->post('/potatoes', ['potato_name' => 'Delete Spud Name', 'potato_country' => 'Delete Spud Country']);
        $potato1 = Potato::where('potato_name', '=', 'Delete Spud Name')->first();

        $this->assertEquals('Delete Spud Name', $potato1->potato_name);
        $this->assertEquals('Delete Spud Country', $potato1->potato_country);

        $this->actingAs($user)->delete("/potatoes/$potato1->id");
        $potato1 = Potato::where('potato_name', '=', 'Delete Spud Name')->first();

        $this->assertNull($potato1);
    }

    public function test_potato_country_edited_potato_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/potatoes', ['potato_name' => 'Delete Spud Name', 'potato_country' => 'Delete Spud Country']);
        $potatoDel = Potato::where('potato_name', '=', 'Delete Spud Name')->first();

        $this->assertEquals('Delete Spud Name', $potatoDel->potato_name);
        $this->assertEquals('Delete Spud Country', $potatoDel->potato_country);

        $this->actingAs($user)->put("/potatoes/$potatoDel->id;", ['potato_name' => 'Delete Spud Name', 'potato_country' => 'Edited Spud Country']);
        $potatoDel = Potato::where('potato_name', '=', 'Delete Spud Name')->first();

        $this->assertEquals('Edited Spud Country', $potatoDel->potato_country);

        $this->actingAs($user)->delete("/potatoes/$potatoDel->id");
        $potatoDel = Potato::where('potato_name', '=', 'Delete Spud Name')->first();

        $this->assertNull($potatoDel);
    }
}
