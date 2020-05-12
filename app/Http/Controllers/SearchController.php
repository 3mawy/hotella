<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Services\RapidApiService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getDestinationId($destinationName)
    {
        $destinationId = Destination::select('destination_id')
            ->where('name', '=', $destinationName)
            ->get();
        return $destinationId;
    }
    public function index(Request $request, Destination $destination,RapidApiService $rapidApiService)
    {
        $search = $request->get('search');
        $checkIn = $request->get('checkIn');
        $checkOut = $request->get('checkOut');
        //$adults = $request->input('adults');
        //$children = $request->input('children');
        $destinationId =$request->get('dest_id'); /*$this->getDestinationId($search)*/;
        $response=$rapidApiService->listProperties($destinationId, $checkIn, $checkOut);
        $response[0]->star_rating;
        return view('search', ['hotels' => $response]);    }
}
