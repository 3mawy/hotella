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
        return [
            'search_destination' => pack('H*', $destinationId),
            'total_count' => $this->faker->numberBetween(150,300),

            'id' => $this->faker->numberBetween(1,500),
            'name' => $this->faker->company,
            'thumbnail_url' => $this->faker->imageUrl(500, 500, 'cats') ,
            'star_rating' => $this->faker->numberBetween(1,5),
            'rooms_left' => $this->faker->numberBetween(1,8),
            'price' => $this->faker->numberBetween(60,200),
            'old_price' => $this->faker->numberBetween(200,300),
            'pageSize' => 25

        ];
    }

    /**
     * @param $search
     */
    public function autoCompleteHotelsApi($search)
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
