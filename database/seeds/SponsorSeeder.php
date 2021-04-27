<?php

use Illuminate\Database\Seeder;
use App\Sponsor;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $nomi = ['bronzo', 'argento', 'oro'];
        $durata = [24, 72, 144];
        $prezzo = [2.99, 5.99, 9.99];
    
        for ($i = 0; $i < 3; $i++) {
            $newSponsor = new Sponsor();
            
            $newSponsor->name_package = $nomi[$i];
            $newSponsor->duration = $durata[$i];
            $newSponsor->price = $prezzo[$i];

            $newSponsor->save();
        }
       
    }
}

