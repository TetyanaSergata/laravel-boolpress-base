<?php

use App\Photo;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $newPhotos = new Photo;
        $newPhotos->user_id = rand(1, 9);

        $newPhotos->path = $faker->imageUrl(640, 480);
        $newPhotos->save();
      }
    }
}
