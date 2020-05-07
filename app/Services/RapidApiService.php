<?php

namespace App\Services;

use App\Destination;
use Illuminate\Support\Facades\Log;

use function GuzzleHttp\Psr7\build_query;

class RapidApiService
{
    public function __construct($host = 'hotels4.p.rapidapi.com', $key = '7d6f037ee1msh7f9148c2f5901c2p17cc79jsnc16226e926d4')
    {
        $this->baseUrl =  'https://hotels4.p.rapidapi.com';
        $this->header = array(
            "X-RapidAPI-Host" => $host,
            "X-RapidAPI-Key" => $key
        );
    }

    public function listProperties($destinationId, $checkIn, $checkOut, $adults = 1, $children = 0)
    {
        $query = [
            'currency' => 'US',
            'locale' => 'en_US',
            'sortOrder' => 'PRICE',
            'destinationId' => $destinationId,
            'pageNumber' => 1,
            'pageSize' => 25,
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'adults1' => $adults,
            'children1' => $children
        ];
        \Unirest\Request::get(
            "{$this->baseUrl}/properties/list?" . build_query($query),
            $this->header
        );
        /**
         *  Or better you can call
         *  $this->request('/properties/list',$query);
         *  */
    }


    public function getDestinationFromHotelsApi($destination)
    {
        $query = [
            'currency' => 'US',
            'query' => $destination
        ];
        $response = \Unirest\Request::get(
            "{$this->baseUrl}/locations/search?" . build_query($query),
            $this->header
        );

        if ($response->code !== 200) {
            Log::alert("Api return an error raw_body {$response->raw_body} ");
            return;
        }

        Destination::firstOrCreate(
            [
                'name' => $response->body->suggestions[0]->entities[0]->name,
                'longitude' => $response->body->suggestions[0]->entities[0]->longitude,
                'latitude' => $response->body->suggestions[0]->entities[0]->latitude,
                'destination_id' => $response->body->suggestions[0]->entities[0]->destinationId
            ]
        );
    }

    /**
     * A function that calls api using the defualt of the class in constructor
     */
    private function request(string $path, array $query)
    {
        return \Unirest\Request::get(
            "{$this->baseUrl}/$path?" . build_query($query),
            $this->header
        );
    }
}
