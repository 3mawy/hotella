<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use App\Model;
use App\Review;
use App\User;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'hotel_id' => Hotel::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'header' => $faker->word,
        'review' => $faker->sentence(11),
        'star_rating' => $faker->numberBetween(1,5),
    ];
});
