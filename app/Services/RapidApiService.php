<?php

namespace App\Services;

use App\Destination;
use App\Services\DataModels\HotellaHotel;
use Illuminate\Support\Facades\Log;

use function GuzzleHttp\Psr7\build_query;

class RapidApiService implements ListsHotelsForHotella
{
    use RequestExternalApi;

    public function __construct($host = 'hotels4.p.rapidapi.com', $key = '7d6f037ee1msh7f9148c2f5901c2p17cc79jsnc16226e926d4')
    {
        $this->baseUrl = 'https://hotels4.p.rapidapi.com';
        $this->header = array(
            "X-RapidAPI-Host" => $host,
            "X-RapidAPI-Key" => $key
        );
    }

    /**
     * @param $destinationId
     * @param $checkIn
     * @param $checkOut
     * @param int $adults
     * @param int $children
     * @return HotellaHotel[]
     */
    public function listProperties($destinationId, $checkIn, $checkOut, $adults = 1, $children = 0): array
    {
        $query = [
            'currency' => 'USD',
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
        $response = $this->request('/properties/list', $query);
        $results = $response->body->data->body->searchResults->results;
        dd($results);
        return $this->transformRapidToHotella($results);
        /*  $searchResults = [
            'search_destination' => $response->body->data->body->query->destination->value,
            'total_count' => $response->body->data->body->searchResults->totalCount,

         //  $hotels
            'id' => $response->body->data->body->searchResults->results[0]->id,
            'name' => $response->body->data->body->searchResults->results[0]->name,
            'star_rating' => $response->body->data->body->searchResults->results[0]->starRating,
            'thumbnail_url' => $response->body->data->body->searchResults->results[0]->thumbnailUrl

        ];*/
    }

    private $cacheEnabled = true;

    public function AutoCompleteProxy(string $search)
    {
        if ($this->cacheEnabled) {
            return $this->AutoCompleteDataBaseProxy($search);
        }
        return $this->AutoCompleteApiProxy($search);
    }

    public function AutoCompleteDataBaseProxy(string $search)
    {
        $entities = (new Destination())->listByName($search)->get();
        if ($entities->isEmpty()) {
            $entities = $this->AutoCompleteApiProxy($search);

            foreach ($entities as $entity) {
                Destination::firstOrCreate(
                    [
                        'name' => $entity->name,
                        'longitude' => $entity->longitude,
                        'latitude' => $entity->latitude,
                        'destination_id' => $entity->destination_id
                    ]
                );
            }
            $entities = (new Destination())->listByName($search)->get();
        }

        return $entities;
    }

    public function AutoCompleteApiProxy(string $search)
    {
        $query = [
            'currency' => 'US',
            'query' => $search
        ];
        $response = $this->request('/locations/search', $query);
        if ($response->code !== 200) {
            Log::alert("Api return an error raw_body {$response->raw_body} ");
            return;
        }
        $entities = [];
        foreach ($response->body->suggestions as $sug) {
            foreach ($sug->entities as $entity) {
                $entities[] =
                    [
                        'name' => $entity->name,
                        'longitude' => $entity->longitude,
                        'latitude' => $entity->latitude,
                        'destination_id' => $entity->destinationId
                    ];

            }

        }
        return $entities;
    }

    /*public function AutoCompleteHotelsApi($destination)
    {


        return (new Destination())->listByName($destination)->get();
    }
*/

    /**
     * @param $results array a list of Rapid hotels
     * @return HotellaHotel[]
     */
    private function transformRapidToHotella($results): array
    {
        $hotels = [];
        foreach ($results as $result) {
            $hotel = new HotellaHotel();
            $hotel->id = $result->id;
            $hotel->name = $result->name;
            $hotel->star_rating = $result->starRating;
            $hotel->thumbnail_url = $result->thumbnailUrl;
            $hotel->destination = $result->address->locality;
            // 'rooms_left' = $result->roomsLeft;
            $hotel->price = $result->ratePlan->price->current;
            //'old_price'= $result->ratePlan->price->old
            $hotels[] = $hotel;
        }
        return $hotels;
    }
}
