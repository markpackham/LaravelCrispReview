<?php

namespace Tests\Unit;

use App\Models\Company;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    public function test_company_attributes()
    {
        $company1 = new Company();
        $company1->company_name = 'The Company';
        $company1->company_address = 'The Company Address';
        $company1->company_phone = '12345678';
        $company1->company_website = 'www.companywebsite.org';

        $this->assertTrue($company1->company_name === 'The Company');
        $this->assertTrue($company1->company_address === 'The Company Address');
        $this->assertTrue($company1->company_phone === '12345678');
        $this->assertTrue($company1->company_website === 'www.companywebsite.org');
    }
}
