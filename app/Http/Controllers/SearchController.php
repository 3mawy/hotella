<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Destination $destination)
{
    $destination->getDestinationFromHotelsApi("egypt");

}
}
