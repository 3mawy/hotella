<?php

use App\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/destinations.json");
        $data = json_decode($json);
        $faker = Faker\Factory::create();;
        foreach ($data as $obj) {
            Destination::create(array(
                'name' => $obj->city,
                'latitude' => $obj->lat,
                'longitude' => $obj->lng,
                'dummy' =>$faker->sentence(),
                'destination_id'=>$faker->unique()->numberBetween(1,100),
            ));
        }
    }
}
