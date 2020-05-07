<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 4; $i++) { 
    		$users[] = [
    			'name' => Str::random(10),
    			'surname' => Str::random(10),
    			'email' => Str::random(10).'@gmail.com',
    			'password' => bcrypt('password'),
    		];
    	}
    DB::table('users')->insert($users);
    }
}