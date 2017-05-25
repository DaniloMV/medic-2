<?php

use Illuminate\Database\Seeder;
use App\Salutation;

class SalutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salutation::create([
        	'name' => 'Mr'
        ]);

        Salutation::create([
        	'name' => 'Mrs'
        ]);

        Salutation::create([
        	'name' => 'Miss'
        ]);

        Salutation::create([
        	'name' => 'Ms'
        ]);
    }
}
