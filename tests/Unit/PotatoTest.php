<?php

namespace Tests\Unit;

use App\Models\Potato;
use PHPUnit\Framework\TestCase;

class PotatoTest extends TestCase
{

    public function test_potato_name()
    {
        $potato1 = new Potato();
        $potato1->potato_name = 'Starchy';
        $potato1->potato_country = 'Narnia';

        $this->assertTrue($potato1->potato_name === 'Starchy');
    }

    public function test_potato_country()
    {
        $potato1 = new Potato();
        $potato1->potato_name = 'Starchy';
        $potato1->potato_country = 'Narnia';

        $this->assertTrue($potato1->potato_country === 'Narnia');
    }
}
