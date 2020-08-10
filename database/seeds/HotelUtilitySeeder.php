<?php

use App\HotelUtility;
use Illuminate\Database\Seeder;

class HotelUtilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HotelUtility::class, 40)->create();
    }
}
