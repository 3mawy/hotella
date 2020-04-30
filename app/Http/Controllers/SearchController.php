<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public static function getDestinationId($destinationName){
        $destinationId= Destination::select('destination_id')
        ->where('name', '=', $destinationName)
        ->get();
        return $destinationId;
    }
    public function index(Request $request, Destination $destination)
{
    $search = $_GET['search'];
    $checkIn = $_GET['checkIn'];
    $checkOut = $_GET['checkOut'];
    $destinationId = 10233105;
    $destination->listProperties($destinationId,$checkIn,$checkOut);
}
}
