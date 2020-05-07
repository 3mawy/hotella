<?php

namespace App\Services;

use App\Destination;
use Illuminate\Support\Facades\Log;

use function GuzzleHttp\Psr7\build_query;

class TripAdvisorApi
{
    public function __construct($host = 'tripadvisor1.p.rapidapi.com', $key = '7d6f037ee1msh7f9148c2f5901c2p17cc79jsnc16226e926d4')
    {
        $this->baseUrl =  'https://tripadvisor1.p.rapidapi.com';
        $this->header = array(
            "X-RapidAPI-Host" => $host,
            "X-RapidAPI-Key" => $key
        );
    }


    public function getDestinationFromTripAdvisorApi()
    {

        $response = $this->request(
            'answers/list',
            [
                'limit' => 10,
                'question_id' => 5283833
            ]
        );

        Destination::firstOrCreate([
            'name' => $response->body->suggestions[0]->entities[0]->name,
            'longitude' => $response->body->suggestions[0]->entities[0]->longitude,
            'latitude' => $response->body->suggestions[0]->entities[0]->latitude,
            'zipcode' => $response->body->suggestions[0]->entities[0]->name,
            //'dummy'=>$$response->body->suggestions[0]->entities[0]->longitud
        ]);
    }

    private function request(string $path, array $query)
    {
        return \Unirest\Request::get(
            "{$this->baseUrl}/$path?" . build_query($query),
            $this->header
        );
    }
}
