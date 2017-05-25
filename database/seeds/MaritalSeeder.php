<?php

use Illuminate\Database\Seeder;
use App\Marital;

class MaritalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marital::create([
        	'name' => 'Single'
        ]);

        Marital::create([
        	'name' => 'Married'
        ]);

        Marital::create([
        	'name' => 'Widowed'
        ]);
    }
}
