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
       $user = App\User::create([
        	'name' => 'Ammar Ali',
        	'email' => 'Ammar@gmail.com',
        	'password' => bcrypt('Ammar Ali'),
            'admin' => 1


    
        ]);
        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatar/1.jpg',
          'about' => 'fake text is here',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'

         ]);
    }

}
