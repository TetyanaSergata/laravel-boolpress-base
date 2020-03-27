<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++){
        $newUser = new User;
        $newUser->name = $faker->name;
        $newUser->email = $faker->email;
        // Creiamo la hashed password e aggiungiamo 'use'
        $newUser->password = Hash::make('tania');
        $newUser->save();
      }
    }
}
