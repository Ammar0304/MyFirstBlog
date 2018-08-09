<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'Ammar Ali',
        	'email' => 'Ammar@gmail.com',
        	'password' => bcrypt('Ammar Ali')


        ]);
    }
}
