<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Property;
use App\User;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++) {
        $newProperty = new Property();
        $newProperty->title = $faker->sentence();
        $newProperty->rooms_number = $faker->randomDigit();
        $newProperty->beds_number = $faker->randomDigit();
        $newProperty->bathrooms_number = $faker->randomDigit();
        $newProperty->sqm_number = $faker->randomDigit();
        $newProperty->address = $faker->address();
        $newProperty->longitude = $faker->randomDigit();
        $newProperty->latitude = $faker->randomDigit();
        $newProperty->image = $faker->word();
        $newProperty->visible = $faker->numberBetween(0,1);
        $newProperty->price_per_night = $faker->randomDigit();
        $newProperty->floor = $faker->randomDigit();
        $newProperty->description = $faker->paragraph();

        $newProperty->user_id = rand(1,Count(User::all()->toArray()));

        $newProperty->save();
      }
    }
}
