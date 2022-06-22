<?php

namespace Tests\Unit;

use App\Models\Brand;
use PHPUnit\Framework\TestCase;

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
}
