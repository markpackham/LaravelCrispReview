<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Crisp;
use App\Models\User;

class CrispTest extends TestCase
{
    public function test_crisp_name()
    {
        $crisp1 = new Crisp();
        $crisp1->crisp_name = 'Crispy The Crisp';
        $crisp1->crisp_weight = 10;
        $crisp1->crisp_review_score = 1;
        $crisp1->crisp_review = 'Crisp review description test.';
        $crisp1->brand_id = 1;
        $crisp1->flavour_id = 1;

        $this->assertTrue($crisp1->crisp_name === 'Crispy The Crisp');
        $this->assertTrue($crisp1->crisp_weight === 10);
        $this->assertTrue($crisp1->crisp_review_score === 1);
        $this->assertTrue($crisp1->crisp_review === 'Crisp review description test.');
        $this->assertTrue($crisp1->brand_id === 1);
        $this->assertTrue($crisp1->flavour_id === 1);
    }

    public function test_crisp_created()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/crisps', ['crisp_name' => 'Hula Hoops Original Crisps Multipack 12X24g', 'crisp_weight' => 24, 'crisp_review_score' => 2, 'crisp_review' => 'Ok salt and hardness, descent design', 'brand_id' => 12, 'flavour_id' => 4]);
        $crisp1 = Crisp::where('crisp_name', '=', 'Hula Hoops Original Crisps Multipack 12X24g')->first();

        $this->assertEquals('Hula Hoops Original Crisps Multipack 12X24g', $crisp1->crisp_name);
        $this->assertEquals(24, $crisp1->crisp_weight);
        $this->assertEquals(2, $crisp1->crisp_review_score);
        $this->assertEquals('Ok salt and hardness, descent design', $crisp1->crisp_review);
        $this->assertEquals(12, $crisp1->brand_id);
        $this->assertEquals(4, $crisp1->flavour_id);
    }

    public function test_crisp_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/crisps', ['crisp_name' => 'Delete Crisp Name', 'crisp_weight' => 24, 'crisp_review_score' => 2, 'crisp_review' => 'Really good', 'brand_id' => 12, 'flavour_id' => 4]);
        $crisp1 = Crisp::where('crisp_name', '=', 'Delete Crisp Name')->first();

        $this->assertEquals('Delete Crisp Name', $crisp1->crisp_name);
        $this->assertEquals(24, $crisp1->crisp_weight);
        $this->assertEquals(2, $crisp1->crisp_review_score);
        $this->assertEquals('Really good', $crisp1->crisp_review);
        $this->assertEquals(12, $crisp1->brand_id);
        $this->assertEquals(4, $crisp1->flavour_id);

        $this->actingAs($user)->delete("/crisps/$crisp1->id;");
        $crisp1 = Crisp::where('crisp_name', '=', 'Delete Crisp Name')->first();

        $this->assertNull($crisp1);
    }

    public function test_crisp_edited_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/crisps', ['crisp_name' => 'Delete Crisp Name', 'crisp_weight' => 24, 'crisp_review_score' => 2, 'crisp_review' => 'Really good', 'brand_id' => 12, 'flavour_id' => 4]);
        $crisp1 = Crisp::where('crisp_name', '=', 'Delete Crisp Name')->first();

        $this->assertEquals('Delete Crisp Name', $crisp1->crisp_name);
        $this->assertEquals(24, $crisp1->crisp_weight);
        $this->assertEquals(2, $crisp1->crisp_review_score);
        $this->assertEquals('Really good', $crisp1->crisp_review);
        $this->assertEquals(12, $crisp1->brand_id);
        $this->assertEquals(4, $crisp1->flavour_id);

        $this->actingAs($user)->put("/crisps/$crisp1->id", ['crisp_name' => 'Delete Crisp Name', 'crisp_weight' => 1, 'crisp_review_score' => 1, 'crisp_review' => 'Really bad', 'brand_id' => 1, 'flavour_id' => 1]);
        $crisp1 = Crisp::where('crisp_name', '=', 'Delete Crisp Name')->first();

        $this->assertEquals('Delete Crisp Name', $crisp1->crisp_name);
        $this->assertEquals(1, $crisp1->crisp_weight);
        $this->assertEquals(1, $crisp1->crisp_review_score);
        $this->assertEquals('Really bad', $crisp1->crisp_review);
        $this->assertEquals(1, $crisp1->brand_id);
        $this->assertEquals(1, $crisp1->flavour_id);

        $this->actingAs($user)->delete("/crisps/$crisp1->id;");
        $crisp1 = Crisp::where('crisp_name', '=', 'Delete Crisp Name')->first();

        $this->assertNull($crisp1);
    }
}
