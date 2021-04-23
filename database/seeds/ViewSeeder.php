<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Property;
use App\View;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++) {
        $newView = new View();
        $newView->property_id = rand(1,Count(Property::all()->toArray()));
        $newView->date = $faker->dateTimeBetween('-1 week', '+1 week');

        $newView->save();
      }
    }
}
