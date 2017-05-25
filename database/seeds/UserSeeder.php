<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// create user me myself
    	User::create([
    		'name' => 'brian',
    		'username' => 'brian',
    		'password' => bcrypt('brian'),
    		'email' => 'leehongjie91@gmail.com'
    	]);
    }
}
