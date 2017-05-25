<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Company::create([
    		'name' => 'SMRT Singapore',
    		'roc' => 'SG9011101',
    		'contact' => '89889898',
    		'address' => 'B23-43, Toa Pa Yoh, Singapore 584343'
    	]);
    }
}
