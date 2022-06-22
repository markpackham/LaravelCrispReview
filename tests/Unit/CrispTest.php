<?php

namespace Tests\Unit;

use App\Models\Crisp;
use PHPUnit\Framework\TestCase;

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
}
