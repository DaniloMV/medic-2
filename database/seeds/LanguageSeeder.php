<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Language::create([
        	'name' => 'English'
        ]);

        Language::create([
        	'name' => 'Mandarin'
        ]);

        Language::create([
        	'name' => 'Cantonese'
        ]);

        Language::create([
        	'name' => 'Hokkien'
        ]);

        Language::create([
        	'name' => 'Malay'
        ]);

        Language::create([
        	'name' => 'Tamil'
        ]);

    }
}
