<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use App\Model;
use App\Utility;
use Faker\Generator as Faker;

$factory->define(\App\HotelUtility::class, function (Faker $faker) {
    return [
        'utility_id' => Utility::all()->random()->id,
        'hotel_id' => Hotel::all()->random()->id,
        ];
});
