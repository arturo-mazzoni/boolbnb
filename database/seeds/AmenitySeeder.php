<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Amenity;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=[
            "wifi","doccia","vasca","TV","vino","balcone"
        ];
        for ($i=0; $i <count($array) ; $i++) { 
            $newtag= new Amenity();
            
           $newtag->service=$array[$i];
   
           $tag_check= Amenity::where('service',$newtag->service)->first();
           
           
            if(!$tag_check){
               
                 $newtag->save();
            }
            
         
           
        } 
    }
}
