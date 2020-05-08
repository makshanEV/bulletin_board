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
        for ($i=0; $i < 4; $i++) { 
    		$users[] = [
    			'name' => Str::random(10),
    			'surname' => Str::random(10),
    			'email' => Str::random(10).'@gmail.com',
                'email_verified_at' => now(),
    			'password' => bcrypt('qwerty'),
                'remember_token' => Str::random(10),
    		];
    	}
    DB::table('users')->insert($users);
    }
}