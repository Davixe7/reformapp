<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = \App\Models\User::create([
          'name' => 'John Doe',
          'email' => 'johndoe@formapp.com',
          'password' => bcrypt('123456')
        ]);
        
        $profile = \App\Models\Profile::create([
          'name' => 'John Doe',
          'email' => 'johndoe@formapp.com',
          'phone_1' => '4141231234',
          'phone_2' => '4141231235',
          'user_id' => $user->id
        ]);
    }
}
