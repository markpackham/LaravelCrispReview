<?php

namespace Tests\Unit;

use App\Models\Brand;
use App\Models\User;
use Tests\TestCase;

class BrandTest extends TestCase
{
    public function test_brand_attributes()
    {
        $brand1 = new Brand();
        $brand1->brand_name = 'Mr Crisp Brand';
        $brand1->company_id = 1;

        $this->assertTrue($brand1->brand_name === 'Mr Crisp Brand');
        $this->assertTrue($brand1->company_id === 1);
    }

    public function test_brand_created()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/brands', ['brand_name' => 'Walkers Ridge Crisps', 'company_id' => 5]);

        $brand1 = Brand::where('brand_name', '=', 'Walkers Ridge Crisps')->first();

        $this->assertEquals('Walkers Ridge Crisps', $brand1->brand_name);
        $this->assertEquals(5, $brand1->company_id);
    }

    public function test_brand_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/brands', ['brand_name' => 'Delete Brand Name', 'company_id' => 1]);

        $brand1 = Brand::where('brand_name', '=', 'Delete Brand Name')->first();

        $this->assertEquals('Delete Brand Name', $brand1->brand_name);
        $this->assertEquals(1, $brand1->company_id);

        $brandID = $brand1->id;

        $this->actingAs($user)->delete("/brands/$brandID");

        $brand1 = Brand::where('brand_name', '=', 'Delete Brand Name')->first();
        $this->assertNull($brand1);
    }

    public function test_brand_company_id_edited_brand_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/brands', ['brand_name' => 'Delete Brand Name', 'company_id' => 1]);

        $brand1 = Brand::where('brand_name', '=', 'Delete Brand Name')->first();

        $this->assertEquals('Delete Brand Name', $brand1->brand_name);
        $this->assertEquals(1, $brand1->company_id);

        $brandID = $brand1->id;

        $this->actingAs($user)->put("/brands/$brandID", ['brand_name' => 'Delete Brand Name', 'company_id' => 2]);

        $brand1 = Brand::where('brand_name', '=', 'Delete Brand Name')->first();

        $this->assertEquals(2, $brand1->company_id);

        $brandID = $brand1->id;

        $this->actingAs($user)->delete("/brands/$brandID");

        $brand1 = Brand::where('brand_name', '=', 'Delete Brand Name')->first();
        $this->assertNull($brand1);
    }
}
