<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class SearchTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function hotelsTest()
    {
      /*  Http::fake([
            'https://hotels4.p.rapidapi.com/properties/list'=>$this->fakeHotels(),
        ]);*/
        $response = $this->get(route('search.index'));
        $response->assertStatus(200);
    }

    public function hotelTest()
    {
        Http::fake([
            'https://hotels4.p.rapidapi.com/properties/get-details'=>$this->fakeHotel(),
        ]);
        $response = $this->get(route('search.show'));
        $response->assertStatus(200);
    }

    public function destinationTest()
    {
        Http::fake([
            'https://hotels4.p.rapidapi.com/locations/search'=>$this->fakeDestination(),
        ]);
        $response = $this->get(route('autocomplete'));
        $response->assertStatus(200);
    }

    private function fakeHotels(){

    }
    private function fakeHotel(){

    }
    private function fakeDestination(){

    }
}
