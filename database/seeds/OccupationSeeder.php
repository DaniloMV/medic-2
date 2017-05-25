<?php

use Illuminate\Database\Seeder;
use App\Occupation;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Occupation::create([
        	'name' => 'Cleaner'
        ]);

        Occupation::create([
        	'name' => 'Engineer'
        ]);

        Occupation::create([
        	'name' => 'Truck Driver'
        ]);
    }
}
