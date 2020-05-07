<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Services\RapidApiService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public static function getDestinationId($destinationName)
    {
        $destinationId = Destination::select('destination_id')
            ->where('name', '=', $destinationName)
            ->get();
        return $destinationId;
    }
    public function index(Request $request, Destination $destination,RapidApiService $rapidApiService)
    {
        $search = $_GET['search'];
        $checkIn = $_GET['checkIn'];
        $checkOut = $_GET['checkOut'];
        $destinationId = 10233105;
        $rapidApiService->listProperties($destinationId, $checkIn, $checkOut);
    }
}
