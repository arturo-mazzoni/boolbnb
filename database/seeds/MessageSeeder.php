<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Message;
use App\Property;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $newMessage = new Message();
            $newMessage->email = $faker->word();
            $newMessage->name = $faker->word();
            $newMessage->content = $faker->paragraph();
    
            $newMessage->property_id = rand(1,Count(Property::all()->toArray()));
    
            $newMessage->save();
        }
    }
}

