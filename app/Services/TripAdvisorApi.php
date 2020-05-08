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


    public function listProperties($destinationId, $checkIn, $checkOut, $adults = 1, $children = 0)
    {
        $from = \Carbon\Carbon::createFromFormat('Y/m/d', $checkIn);
        $to = \Carbon\Carbon::createFromFormat('Y/m/d', $checkOut);
        $nights = $to->diffInDays($from);
        $query = [
            'currency' => 'USD',
            'lang' => 'en_US',
            'sort' => 'PRICE',
            'order' => 'asc',
            'destinationId' => $destinationId,
            'pageNumber' => 1,
            'limit' => 25,
            'nights' => $nights,
            'adults' => $adults,
            'rooms' => $children
        ];
        $response = $this->request('/hotels/list', $query);
      /*   return [
            'name' => $response->body,




        ]; */
    }

    public function autoCompleteTripAdvisorApi($search)
    {
        $response = Unirest\Request::get("https://tripadvisor1.p.rapidapi.com/locations/auto-complete?lang=en_US&units=km&query=$search",
        array(
          "X-RapidAPI-Host" => "tripadvisor1.p.rapidapi.com",
          "X-RapidAPI-Key" => "7d6f037ee1msh7f9148c2f5901c2p17cc79jsnc16226e926d4"
        )
      );
        /* $response = $this->request(
            '/locations/auto-complete?',
            [
                'query' => $search
            ]
        );

        if ($response->code !== 200) {
            Log::alert("Api return an error raw_body {$response->raw_body} ");
            return;
        } */

        Destination::firstOrCreate([
            'name' => $response->body->data[0]->result_object->name,
            'longitude' => $response->body->data[0]->result_object->longitude,
            'latitude' => $response->body->data[0]->result_object->latitude,
            'destination_id' => $response->body->data[0]->result_object->location_id,
            //'dummy'=>$$response->body->data[0]->result_object->longitud
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
