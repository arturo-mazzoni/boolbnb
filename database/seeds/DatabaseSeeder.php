<?php

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
        $this->call([
            PropertySeeder::class,
            AmenitySeeder::class,
            SponsorSeeder::class,
            MessageSeeder::class,
            ViewSeeder::class
            ]);
    }
}
