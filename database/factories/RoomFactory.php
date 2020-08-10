<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use App\Model;
use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    $images =['https://exp.cdn-hotels.com/hotels/46000000/45490000/45484100/45484010/37eb65cb_l.jpg',
        'https://exp.cdn-hotels.com/hotels/6000000/5360000/5359900/5359834/3dd8462e_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/6000000/5360000/5359900/5359834/d30ffa7d_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/6000000/5360000/5359900/5359834/ffc6c36f_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/28000000/27920000/27918500/27918471/9428cc2b_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/28000000/27920000/27918500/27918471/74635c3b_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/28000000/27920000/27918500/27918471/9428cc2b_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/28000000/27920000/27918500/27918471/046fd6a5_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/2000000/1400000/1397500/1397438/da7c4c85_y.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/2000000/1400000/1397500/1397438/da7c4c85_y.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/2000000/1400000/1397500/1397438/a5833765_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
        'https://exp.cdn-hotels.com/hotels/2000000/1400000/1397500/1397438/5cbe299d_z.jpg?impolicy=fcrop&w=773&h=530&q=high',
    ];
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
