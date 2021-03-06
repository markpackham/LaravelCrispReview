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

    public function test_flavour_created()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/flavours', ['flavour_name' => 'Shrimp']);
        $flavour1 = Flavour::where('flavour_name', '=', 'Shrimp')->first();

        $this->assertEquals('Shrimp', $flavour1->flavour_name);
    }

    public function test_flavour_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/flavours', ['flavour_name' => 'Delete Flavour Name']);
        $flavour1 = Flavour::where('flavour_name', '=', 'Delete Flavour Name')->first();

        $this->assertEquals('Delete Flavour Name', $flavour1->flavour_name);

        $this->actingAs($user)->delete("/flavours/$flavour1->id;");
        $flavour1 = Flavour::where('flavour_name', '=', 'Delete Flavour Name')->first();

        $this->assertNull($flavour1);
    }

    public function test_flavour_name_edited_flavour_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/flavours', ['flavour_name' => 'Delete Flavour Name']);
        $flavour1 = Flavour::where('flavour_name', '=', 'Delete Flavour Name')->first();

        $this->assertEquals('Delete Flavour Name', $flavour1->flavour_name);

        $this->actingAs($user)->put("/flavours/$flavour1->id", ['flavour_name' => 'Edited Flavour Name']);
        $flavour1 = Flavour::where('flavour_name', '=', 'Edited Flavour Name')->first();

        $this->assertEquals('Edited Flavour Name', $flavour1->flavour_name);

        $this->actingAs($user)->delete("/flavours/$flavour1->id");
        $flavour1 = Flavour::where('flavour_name', '=', 'Edited Flavour Name')->first();

        $this->assertNull($flavour1);
    }
}
