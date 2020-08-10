<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destination;
use App\Hotel;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
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
    $overviews = ['Elite Residence & Aqua Park boasts a restaurant. The hotel has an outdoor pool, and indoor heated swimming pool and a private beach area, and guests can enjoy a meal at the restaurant or a drink at the bar. Free private parking is available on site.

Each room at this hotel is air conditioned and has a flat-screen TV with satellite channels. Certain units have a seating area for your convenience. Some rooms feature views of the sea or pool. Each room is fitted with a private bathroom. For your comfort, you will find free toiletries and a hair dryer.

Guests can enjoy an energizing workout at the gym or relaxing massage treatments, Sauna, Steam Jacuzzi or Beauty Sessions at the Green Spa.

You will find a 24-hour front desk, hairdresser\'s, and gift shop at the property.','This elegant resort features 6 restaurants and bars, a luxury spa, a private beach and an outdoor pool. It is 22 km from Hurghada Airport and offers a shuttle service.

All guest bedrooms at SUNRISE Romance Resort feature a private balcony or terrace. Every room has satellite TV, air conditioning and a minibar.

The SUNRISE Romance Resort has Italian and a Chinese restaurant. There is a 24-hour lounge bar as well as the Espresso Café.

Guests can relax on the pool-side terrace, or make use of the sun loungers on the private beach. There is a golf course 15 km from the hotel.

SUNRISE Romance Resort (Adult Only) Sahl Hasheesh is 27 km from the centre of Hurghada town. Free on-site car parking is available.
Helnan Hotel ElSokhna is set in Suez and features a restaurant. With a bar, the property also has a garden, as well as a terrace. Each room includes a flat-screen TV with satellite channels.

At the hotel, all rooms include a wardrobe. With a private bathroom equipped with a shower and a hairdryer, some rooms at Helnan Hotel ElSokhna also have pool view.

A continental breakfast is available daily at the property.

The accommodation can conveniently provide information at the reception to help guests to get around the area.

Ain Sokhna is 10 km from Helnan Hotel ElSokhna, while Ras Sedr is 34 km from the property.

Distance in property description is calculated using © OpenStreetMap','Featuring a private beach on the Red Sea, this 4-star resort offers air-conditioned accommodation with a satellite TV. It features 2 outdoor pools and a sauna. Water sports are available on site.

All of Mercure Hurghada’s rooms have a balcony or terrace overlooking the Red Sea or garden.Each room has a safe deposit box and mini fridge.

Mercure has 3 in-house restaurants, including a seafood restaurant. Freshly made exotic cocktails are available at the Beach Bar, and the Pool Bar serves a variety of light snacks and drinks.

Snorkelling, parasailing, and boat excursions are offered at the beach. Guests can also play a game of tennis outside or darts in the games rooms.'

    ];
    return [
        'name' => $faker->company,
        'destination_id' =>Destination::all()->random()->destination_id,
        'star_rating' => $faker->numberBetween(1,5),
        'motto' => $faker->sentence(11),
        'overview' => $faker->randomElement($overviews),
        'address' => $faker->address,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'city' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->numberBetween(111,2222),
        'phone_number' => $faker->randomNumber,
        'thumbnail_url' => $faker->randomElement($images),
        'thumbnail_url1' => $faker->randomElement($images),
        'thumbnail_url2' => $faker->randomElement($images),
        'thumbnail_url3' => $faker->randomElement($images),
        'reviews_count' => $faker->randomNumber,
    ];
});
