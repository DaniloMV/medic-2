<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(OccupationSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(RaceSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(MaritalSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(ResidentSeeder::class);
        $this->call(NationalitySeeder::class);
    }
}
