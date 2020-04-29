<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';
    protected $fillable = ['name',
        'longitude',
        'latitude',
        'zipcode'
        ];

    /*
    public function inDatabase($search)
    {
        if (Destination::where('name', 'LIKE', '%'. $search. '%')->exists()) {
            $destination=Destination::where('name', 'LIKE', '%'. $search. '%')->get()->toJson(JSON_PRETTY_PRINT);
            return response($destination);
         }
    }

*/
    public function getDestinationFromHotelsApi($search){
        $response = \Unirest\Request::get("https://hotels4.p.rapidapi.com/locations/search?locale=en_US&query={$search}",
        array(
          "X-RapidAPI-Host" => "hotels4.p.rapidapi.com",
          "X-RapidAPI-Key" => "7d6f037ee1msh7f9148c2f5901c2p17cc79jsnc16226e926d4"
        )
        ); 
        //dd($response->body->suggestions[0]->entities[0]);
        
        Destination::firstOrCreate([
            'name' => $response->body->suggestions[0]->entities[0]->name,
            'longitude' => $response->body->suggestions[0]->entities[0]->longitude,
            'latitude'=>$response->body->suggestions[0]->entities[0]->latitude,
            'zipcode'=>$response->body->suggestions[0]->entities[0]->name,
            //'dummy'=>$$response->body->suggestions[0]->entities[0]->longitud
        ]);
        
    }
    

    /*
    public function getDestinationFromTripAdvisorApi(){
        $response = Unirest\Request::get("https://tripadvisor1.p.rapidapi.com/answers/list?limit=10&question_id=5283833",
        array(
            "X-RapidAPI-Host" => "tripadvisor1.p.rapidapi.com",
            "X-RapidAPI-Key" => "7d6f037ee1msh7f9148c2f5901c2p17cc79jsnc16226e926d4"
        )
        );
         Destination::firstOrCreate([
            'name' => $response->body->suggestions[0]->entities[0]->name,
            'longitude' => $response->body->suggestions[0]->entities[0]->longitude,
            'latitude'=>$response->body->suggestions[0]->entities[0]->latitude,
            'zipcode'=>$response->body->suggestions[0]->entities[0]->name,
            //'dummy'=>$$response->body->suggestions[0]->entities[0]->longitud
        ]);
    }*/
}
