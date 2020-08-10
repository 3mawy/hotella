<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use App\Model;
use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    $images =['https://imgur.com/BSezryi','https://imgur.com/KqIym5m'];
    $names=['Sea view room', 'Garden view room', 'sea view suite', 'Garden view suite'

    ];
    $descriptions=['2 beds, 1 sofa, tv, AC.','1 king-sized bed, 1 large sofa, tv, AC, Hairdryer.'

    ];
    return [
        'hotel_id' => Hotel::all()->random()->id,
        'floor' => $faker->numberBetween(1,5),
        'room_type_id' => $faker->numberBetween(1,2),
        'room_number' => $faker->numberBetween(1,5),
        'name' => $faker->randomElement($names),
        'description' => $faker->randomElement($descriptions),
        'price' => $faker->numberBetween(70,150),
        'img' => $faker->randomElement($images),
        'room_status_id' => $faker->numberBetween(1,2),

    ];
});
