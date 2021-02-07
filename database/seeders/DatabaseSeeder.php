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
        
        $membership = \App\Models\Membership::create([
          'name' => 'Membresia Básica',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
          'price' => 50
        ]);
        
        $profile = \App\Models\Profile::create([
          'name' => 'John Doe',
          'email' => 'johndoe@formapp.com',
          'phone_1' => '4141231234',
          'phone_2' => '4141231235',
          'user_id' => $user->id
        ]);
        
        $user->subscriptions()->attach(1, [
          'subscribed_at' => \Carbon\Carbon::now(),
          'expires_at'    => \Carbon\Carbon::now()->addDays(30),
          'expired_at'    => null
        ]);
        
        $cats = [
          'pintura',
          'electricidad',
          'carpinteria',
          'plomeria',
          'herreria',
          'diseño'
        ];
        
        foreach( $cats as $cat ){
          \App\Models\Category::create([
            'name' => $cat
          ]);
        }
    }
}
