<?php

namespace App\Services;

use App\Destination;
use Faker\Factory as Faker;

class RapidApiServiceMock extends RapidApiService
{
    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function listProperties($destinationId, $checkIn, $checkOut, $adults = 1, $children = 0)
    {
        // use faker to return and array from here
    }


    public function getDestinationFromHotelsApi($search)
    {
        $imaginaryCity = $search . $this->faker->city;
        Destination::firstOrCreate(
            [
                'name' => $imaginaryCity,
                'longitude' => $this->faker->longitude,
                'latitude' => $this->faker->latitude,
                'destination_id' => bin2hex($imaginaryCity)
            ]
        );
    }
}
