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
    public function run()
    {
      /* for ($i = 0; $i < 10; $i++) {
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
      } */

      $apartments = [
        [
          /* 1 */
          'nome' => 'Private Standard Queen Room Near HNL Airport',
          'stanze' => '2',
          'letti' => '1',
          'bagni' => '1',
          'metri' => '40',
          'indirizzo' => '1956 ALA MOANA BLVDHONOLULU, HI 96815',
          'longitudine' => -157.836242675,
          'latitudine' => 21.2848720550,
          'immagine' => 'https://a0.muscache.com/im/pictures/0390fdfa-14b2-4a11-b85c-b67b0cab16df.jpg',
          'visibile' => 1,
          'prezzo' => 50,
          'piano' => '1',
          'descrizione' => 'This unique property provides a quiet, private and peaceful stay. Walk along the beach with your morning coffee. Relax to the sound of waves as you lounge day and night next to the ocean'
        ],
        [
          /* 2 */
          'nome' => '(KAI LUA) Sandy Beachfront Hawaii Villa',
          'stanze' => '2',
          'letti' => '3',
          'bagni' => '2',
          'metri' => '50',
          'indirizzo' => '2452 KALAKAUA AVENUEHONOLULU, HI 96815',
          'longitudine' => -157.824749,
          'latitudine' => 21.275051,
          'immagine' => 'https://a0.muscache.com/im/pictures/a2b9ea30-aecc-44d7-8555-2c1db0550f3b.jpg',
          'visibile' => 1,
          'prezzo' => 200,
          'piano' => '2',
          'descrizione' => "'Kai Lua' means Cave in the ocean in Hawaiian language, Polynesian hide their most valuable treasure into the cave under the water, the only way to find it is to diving down into the crystal water and know exactly where you hide these gems, this villa is representing everything of this word. Nestling along the beautiful kailua beach, just steps from the public beach park in convenience, but still have all the privacy, Short walk to kailua town center which bring you back to the modern world."
        ],
        [
          /* 3 */
          'nome' => 'Hawaii Beachfront luxury private pool/spa villa',
          'stanze' => '3',
          'letti' => '2',
          'bagni' => '2',
          'metri' => '90',
          'indirizzo' => '725 MANAWAI ST.KAPOLEI, HI 96707',
          'longitudine' => -158.078912,
          'latitudine' => 21.334021,
          'immagine' => 'https://a0.muscache.com/im/pictures/3cbc9062-d4d6-4765-96f9-ebc5dd827a03.jpg',
          'visibile' => 1,
          'prezzo' => 250,
          'piano' => '3',
          'descrizione' => 'An incredible beachfront location, modern design bedrooms, most of them suite style, make Oahu Lani feel like your own private luxury resort. This one-of-a-kind vacation rental faces the postcard-perfect, top-rated white sands and turquoise water of Kailua Beach, and its soaring contemporary architecture maximizes the views. Book the property for a family reunion, anniversary celebration, warm-weather getaway with friends under the palm trees.'
        ],
        [
          /* 4 */
          'nome' => 'Beautiful Kailua Beachside Luxury Home w/Pool & AC. Maluhia',
          'stanze' => '2',
          'letti' => '4',
          'bagni' => '2',
          'metri' => '80',
          'indirizzo' => '2464 KALAKAUA AVEHONOLULU, HI 96815',
          'longitudine' => -157.824366,
          'latitudine' => 21.274747,
          'immagine' => 'https://a0.muscache.com/im/pictures/db5eab4d-f2da-4838-b0b4-be86ec3e5e30.jpg',
          'visibile' => 0,
          'prezzo' => 100,
          'piano' => '4',
          'descrizione' => 'Let the tranquil atmosphere of Maluhia whisk you into vacation mode. A favorite of many celebrities and families for the perfect, peaceful getaway, Maluhia is the definition of island contemporary. Its remodeled, modern interior features nearly 5,000 sq. ft. of living space. The villa also offers peace of mind with a new state-of-the-art security system.'
        ],
        [
          /* 5 */
          'nome' => 'Heart of Waikiki w/ AC & Wifi, Just Steps to Beach',
          'stanze' => '2',
          'letti' => '1',
          'bagni' => '1',
          'metri' => '40',
          'indirizzo' => '410 ATKINSON DRIVEHONOLULU, HI 96814',
          'longitudine' => -157.8390960,
          'latitudine' => 21.28992080,
          'immagine' => 'https://a0.muscache.com/im/pictures/d05ba389-dba5-461d-93d2-1e5a15a41e27.jpg',
          'visibile' => 1,
          'prezzo' => 135,
          'piano' => '14',
          'descrizione' => "This 14th floor Waikiki paradise is the perfect retreat for your Waikiki vacation. Just two blocks from Waikiki Beach and within walking distance to all the best shops and restaurants, guests love the ease and conveniences of this centrally located studio. Soak in the warm Hawaii sun from your private lanai while you enjoy afternoon Mai Tai's or watch the sunrise with coffee in hand. Additional perks include a King-sized bed, air-conditioning, free Wifi, and an on-site pool & BBQ!"
        ],
        [
          /* 6 */
          'nome' => 'Camera in hotel - Host: Kaimana Beach',
          'stanze' => '1',
          'letti' => '1',
          'bagni' => '1',
          'metri' => '30',
          'indirizzo' => '2427 KUHIO AVENUEHONOLULU, HI 96815',
          'longitudine' => -157.823725,
          'latitudine' => 21.276787,
          'immagine' => 'https://a0.muscache.com/im/pictures/aa406434-0a01-424b-a832-840386ad64ba.jpg',
          'visibile' => 1,
          'prezzo' => 90,
          'piano' => '6',
          'descrizione' => "Built in 1963 on Oahu's iconic Gold Coast, Kaimana Beach Hotel is Waikiki's only boutique property located directly on the sand. With a soul that harkens back to the heyday of Waikiki, and a rejuvenated identity that embraces today's thriving creative community, Kaimana Beach Hotel welcomes global wanderers to connect with Hawaii's world-class sense of place."
        ],
        [
          /* 7 */
          'nome' => 'Adventure Awaits! 2 Comfy Units Near Beaches, Pool',
          'stanze' => '4',
          'letti' => '6',
          'bagni' => '3',
          'metri' => '100',
          'indirizzo' => '2255 KALAKAUA AVENUEHONOLULU, HI 96815',
          'longitudine' => -157.828784,
          'latitudine' => 21.27883,
          'immagine' => "https://a0.muscache.com/im/pictures/e82e150d-232d-43eb-937a-8b298328d867.jpg",
          'visibile' => 1,
          'prezzo' => 140,
          'piano' => '5',
          'descrizione' => 'Situated in the heart of Waikiki and across from the Ala Wai Canal, this property is just minutes from the Waikiki Beach Walk. Explore the area to discover white-sand beaches, local favorites, tourist hotspots, and world-class shopping and restaurants. You’ll also be just a short drive away from famous Oahu attractions such as Pearl Harbor, Honolulu Zoo, Kualoa Ranch, and more. Whether you are looking for relaxing sandy beaches or exciting adventures, look no further than this Waikiki property.'
        ],
        [
          /* 8 */
          'nome' => 'Relaxing Condo with City View',
          'stanze' => '2',
          'letti' => '3',
          'bagni' => '1',
          'metri' => '48',
          'indirizzo' => '120 KAIULANI AVEHONOLULU, HI 96815',
          'longitudine' => -157.825454,
          'latitudine' => 21.276987,
          'immagine' => 'https://a0.muscache.com/im/pictures/135319b9-def9-490a-95e4-29f07c8715d0.jpg',
          'visibile' => 0,
          'prezzo' => 95,
          'piano' => '4',
          'descrizione' => 'We are pleased to confirm this property is professionally cleaned and undergoes a strict pre-arrival checklist to ensure that cleaning has been completed in full compliance with local hotel and professional accommodation guidelines.'
        ],
        [
          /* 9 */
          'nome' => 'Luxe -Beach House minutes from Waikiki',
          'stanze' => '2',
          'letti' => '1',
          'bagni' => '1',
          'metri' => '58',
          'indirizzo' => '450 LEWERS STREETHONOLULU, HI 96815',
          'longitudine' => -157.827597,
          'latitudine' => 21.282369,
          'immagine' => 'https://a0.muscache.com/im/pictures/92d0eea4-af08-4384-a041-93a468adb52e.jpg',
          'visibile' => 1,
          'prezzo' => 172,
          'piano' => '3',
          'descrizione' => 'Imagine staying 10 steps from a sandy, spacious beach with access to camping, fishing, surfing and more…',
        ],
        [
          /* 10 */
          'nome' => 'Family Suite with 2 connecting rooms',
          'stanze' => '4',
          'letti' => '6',
          'bagni' => '3',
          'metri' => '100',
          'indirizzo' => "92-1185 ALI'INUI DRIVEKAPOLEI, HI 96707",
          'longitudine' => -158.121873,
          'latitudine' => 21.339338,
          'immagine' => 'https://a0.muscache.com/im/pictures/f8619767-e593-4030-adc3-4de7572e91f7.jpg',
          'visibile' => 1,
          'prezzo' => 135,
          'piano' => '2',
          'descrizione' => "Spacious family suite featuring 2 connecting rooms with living room, kitchenette, two bathrooms, two queen beds and two double beds. Great for big family with maximum of 6 people. Amenities include Free WIFI, 50 Smart TV, Keurig Coffee Maker, I-Home Clock Radio, Refrigerator, Microwave, Work Desk, Cordless Phone, In-Room Safe, Iron and Ironing Board, Toaster, Individual A/C, Non- Smoking.",
        ],
        [
          /* 11 */
          'nome' => 'Enjoy your beach moment',
          'stanze' => '1',
          'letti' => '1',
          'bagni' => '1',
          'metri' => '30',
          'indirizzo' => '2552 KALAKAUA AVEHONOLULU, HI 96815-3699',
          'longitudine' => -157.82223,
          'latitudine' => 21.270196,
          'immagine' => 'https://a0.muscache.com/im/pictures/fe14e3c3-0ef7-4eff-ba36-5d2721a5430c.jpg',
          'visibile' => 0,
          'prezzo' => 60,
          'piano' => '1',
          'descrizione' => 'Fantastic house all inclusive services!!!',
        ],
        [
          /* 12 */
          'nome' => 'Cool and spacious bedroom',
          'stanze' => '2',
          'letti' => '2',
          'bagni' => '1',
          'metri' => '80',
          'indirizzo' => '2572 LEMON ROAD #502HONOLULU, HI 96818',
          'longitudine' => -157.821580,
          'latitudine' => 21.272290,
          'immagine' => 'https://a0.muscache.com/im/pictures/bf07f169-754c-46ce-8a2b-f0d62f92ceed.jpg',
          'visibile' => 1,
          'prezzo' => 199,
          'piano' => '2',
          'descrizione' => 'Recently have been painted and redecorated This bedroom has a nice view of the city and is quite spacious and very clean There is also storage for your belongings and a walk in closet',
        ],
        [
          /* 13 */
          'nome' => 'Waikiki Grand 705',
          'stanze' => '4',
          'letti' => '8',
          'bagni' => '4',
          'metri' => '140',
          'indirizzo' => '2005 KALIA RDHONOLULU, HI 96815-1999',
          'longitudine' => -157.835930,
          'latitudine' => 21.284010,
          'immagine' => 'https://a0.muscache.com/im/pictures/a851f893-7edc-4a46-a33c-fc98be8def20.jpg',
          'visibile' => 1,
          'prezzo' => 160,
          'piano' => '1',
          'descrizione' => 'This cozy Waikiki haven is just steps from the action of Waikiki, but quietly tucked away from the hustle and bustle. Unit 705 includes WiFi, flat screen TV, full bed and sofabed, and a kitchenette.',
        ],
        [
          /* 14 */
          'nome' => 'The Modern Honolulu',
          'stanze' => '2',
          'letti' => '1',
          'bagni' => '1',
          'metri' => '50',
          'indirizzo' => '2470 KALAKAUA AVEHONOLULU, HI 96815',
          'longitudine' => -157.823990,
          'latitudine' => 21.275020,
          'immagine' => 'https://a0.muscache.com/im/pictures/8dda76e3-c799-43ed-8b23-b6517ff927e1.jpg',
          'visibile' => 1,
          'prezzo' => 100,
          'piano' => '2',
          'descrizione' => ' Please note that rates are inclusive of all taxes but that a resort fee of $34.95 per night plus tax which covers the use of certain on-property features and amenities will be collected directly by the property onsite. ',
        ],
        [
          /* 15 */
          'nome' => 'City View Terrace King',
          'stanze' => '3',
          'letti' => '3',
          'bagni' => '2',
          'metri' => '90',
          'indirizzo' => '5000 KAHALA AVEHONOLULU, HI 96816',
          'longitudine' => -157.774560,
          'latitudine' => 21.272080,
          'immagine' => 'https://a0.muscache.com/im/pictures/88322ad8-f7d4-467f-a164-660a3cf38789.jpg',
          'visibile' => 1,
          'prezzo' => 220,
          'piano' => '8',
          'descrizione' => "Please note that this is a resort-style property where the actual furnishings, décor, unit layout, view and/or building placement may vary. Front desk staff will assign your unit at check-in and will otherwise be available during your stay to ensure you have a great experience.",
        ],
      ];

      foreach ($apartments as $apartment) {
        $newProperty = new Property();
        $newProperty->title = $apartment['nome'];
        $newProperty->rooms_number = $apartment['stanze'];
        $newProperty->beds_number = $apartment['letti'];
        $newProperty->bathrooms_number = $apartment['bagni'];
        $newProperty->sqm_number = $apartment['metri'];
        $newProperty->address = $apartment['indirizzo'];
        $newProperty->longitude = $apartment['longitudine'];
        $newProperty->latitude = $apartment['latitudine'];
        $newProperty->image = $apartment['immagine'];
        $newProperty->visible = $apartment['visibile'];
        $newProperty->price_per_night = $apartment['prezzo'];
        $newProperty->floor = $apartment['piano'];
        $newProperty->description = $apartment['descrizione'];

        $newProperty->user_id = rand(1,Count(User::all()->toArray()));

        $newProperty->save();
      }
    }
}
