<?php

use Illuminate\Database\Seeder;
use App\Religion;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::create([
        	'name' => 'Buddishm'
        ]);

        Religion::create([
        	'name' => 'Taoism'
        ]);

        Religion::create([
        	'name' => 'Christian'
        ]);

        Religion::create([
        	'name' => 'Islam'
        ]);

        Religion::create([
        	'name' => 'Hindu'
        ]);

        Religion::create([
        	'name' => 'Others'
        ]);
    }
}
