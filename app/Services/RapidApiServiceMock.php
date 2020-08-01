<?php

namespace App\Services;

use App\Destination;
use App\Hotel;
use App\Services\DataModels\HotellaHotel;
use Faker\Factory as Faker;

class RapidApiServiceMock extends RapidApiService
{
    /**
     * @var \Faker\Generator
     */
    private $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function listProperties($destinationId, $checkIn, $checkOut, $adults = 1, $children = 0): array
    {
        return  [
            'search_destination' => pack('H*', $destinationId),
            'total_count' => $this->faker->numberBetween(150,300),
            'hotel_index'=>$this->transformRapidToHotella($destinationId)
        ];
    }
    public function GetHotelDetails($id, $checkIn=0, $checkOut=0, $adults =1, $children =0){
        $hotel = new HotellaHotel();
        $hotel->id = $id;
        $hotel->name = $this->faker->company;
        $hotel->star_rating =$this->faker->numberBetween(1,5);
        $hotel->thumbnail_url = $this->faker->imageUrl(200, 150, 'cats');
        $hotel->price = $this->faker->numberBetween(60,200);
        $hotel->rooms_left = $this->faker->numberBetween(1,8);
        $hotel->old_price = $this->faker->numberBetween(200,300);
        return $hotel;
    }
    private function transformRapidToHotella(): array
    {
        /*Hotel::firstOrCreate(
            [
                'id' => $this->faker->numberBetween(1,500),
                'name' => $this->faker->company,
                'star_rating' => $this->faker->numberBetween(1,5),
                'motto' => $this->faker->sentence(15),
                'latitude' => $this->faker->latitude,
                'longitude' => $this->faker->longitude,
                'city' => $this->faker->city,
                'zipcode' => $this->faker->state,
                'phone_number' => $this->faker->state,
                'state' => $this->faker->state,
                'thumbnail_url' => $this->faker->imageUrl(200, 150, 'cats'),
             ]);*/
        $hotels = [];
        $pageSize = 25;
        for ($i = 0; $i < $pageSize; $i++) {
            $hotel = new HotellaHotel();
            $hotel->id = $this->faker->numberBetween(1,500);
            $hotel->name = $this->faker->company;
            $hotel->star_rating =$this->faker->numberBetween(1,5);
            $hotel->thumbnail_url = $this->faker->imageUrl(200, 150, 'cats');
           // $hotel->destination = pack('H*', $destinationId);
            $hotel->price = $this->faker->numberBetween(60,200);
            $hotel->rooms_left = $this->faker->numberBetween(1,8);
            $hotel->old_price = $this->faker->numberBetween(200,300);
            $hotels[] = $hotel;
        }
        return $hotels;
    }

    /**
     * @param $destination
     */
    public function AutoCompleteHotelsApi($destination)
    {
        $imaginaryCity = $destination . $this->faker->city;
        Destination::firstOrCreate(
            [
                'name' => $imaginaryCity,
                'longitude' => $this->faker->longitude,
                'latitude' => $this->faker->latitude,
                'destination_id' => bin2hex($imaginaryCity)
            ]
        );
        return (new Destination())->listByName($destination)->get();
    }
}
