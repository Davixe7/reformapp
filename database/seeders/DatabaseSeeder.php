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
        'pintura' => 'format_paint',
        'electricidad' => 'electrical_services',
        'carpinteria' => 'carpenter',
        'plomeria' => 'plumbing',
        'herreria' => 'hardware',
        'diseño' => 'design_services',
        'limpieza' => 'cleaning_services',
        'informática' => 'memory',
        ];
        
        foreach( $cats as $key => $value){
          \App\Models\Category::create([
            'name' => $key,
            'icon_name' => $value,
          ]);
        }
        
        \App\Models\Category::all()->each(function($cat){
          \App\Models\Project::create([
            'name' => 'Proyecto Prueba ' . $cat->name,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'due_date' => '2021-03-30 12:00:00',
            'budget' => 100,
            'category_id' => $cat->id,
            'user_id' => 1
          ]);
        });
    }
}
