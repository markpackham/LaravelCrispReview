<?php

namespace Tests\Unit;

use App\Models\Company;
use App\Models\User;
use Tests\TestCase;

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

    public function test_company_created()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/companies', ['company_name' => 'Burts Snacks Ltd', 'company_address' => 'The Klamp House, Belliver Way, Roborough, Plymouth, PL6 7BP', 'company_phone' => '0800 023 7404', 'company_website' => 'https://www.burtssnacks.com/']);

        $company1 = Company::where('company_name', '=', 'Burts Snacks Ltd')->first();

        $this->assertEquals('Burts Snacks Ltd', $company1->company_name);
        $this->assertEquals('The Klamp House, Belliver Way, Roborough, Plymouth, PL6 7BP', $company1->company_address);
        $this->assertEquals('0800 023 7404', $company1->company_phone);
        $this->assertEquals('https://www.burtssnacks.com/', $company1->company_website);
    }

    public function test_company_deleted()
    {
        $user = User::where('id', '=', 1)->first();
        $this->actingAs($user)->post('/companies', ['company_name' => 'Delete Company Name', 'company_address' => 'The Klamp House, Belliver Way, Roborough, Plymouth, PL6 7BP', 'company_phone' => '0800 023 7404', 'company_website' => 'https://www.burtssnacks.com/']);

        $company1 = Company::where('company_name', '=', 'Delete Company Name')->first();

        $this->assertEquals('Delete Company Name', $company1->company_name);
        $this->assertEquals('The Klamp House, Belliver Way, Roborough, Plymouth, PL6 7BP', $company1->company_address);
        $this->assertEquals('0800 023 7404', $company1->company_phone);
        $this->assertEquals('https://www.burtssnacks.com/', $company1->company_website);

        $companyID = $company1->id;

        $this->actingAs($user)->delete("/companies/$companyID");

        $company1 = Company::where('company_name', '=', 'Delete Company Name')->first();
        $this->assertNull($company1);
    }
}
