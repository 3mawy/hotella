<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destination;
use Faker\Generator as Faker;

$factory->define(Destination::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->country,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'dummy' =>$faker->sentence(),

    ];
});
