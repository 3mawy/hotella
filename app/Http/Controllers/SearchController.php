<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Hotel;
use App\Services\RapidApiService;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    /*public function getDestinationId($destinationName)
    {
        $destinationId = Destination::select('destination_id')
            ->where('name', '=', $destinationName)
            ->get();
        return $destinationId;
    }*/
    /*public function index(Request $request, Destination $destination,RapidApiService $rapidApiService)
    {
        $this->validate($request,[
            'search' =>'required',
            'checkIn' =>'required|date',
            'checkOut' =>'required|date',
            'adults' =>'required',
        ]);
        $search = $request->get('search');
        $checkIn = $request->get('checkIn');
        $checkOut = $request->get('checkOut');
        $adults = $request->get('adults');
        $children = $request->input('children');
        $destinationId =$request->get('dest_id');
        $hotels=$rapidApiService->listProperties($destinationId, $checkIn, $checkOut, $adults, $children);
               return view('search', ['hotels' => $hotels]);
    }*/
    public function index(Request $request, Destination $destination,RapidApiService $rapidApiService)
    {
        $this->validate($request, [
            'search' => 'required',
            'checkIn' => 'required|date',
            'checkOut' => 'required|date',
            'adults' => 'required',
        ]);
        $search = $request->get('search');
        $checkIn = $request->get('checkIn');
        $checkOut = $request->get('checkOut');
        $adults = $request->get('adults');
        $children = $request->input('children');
        $destinationId = $request->get('dest_id');
        $hotels = Hotel::where('destination_id',$destinationId)->paginate(10);
        $destination = Destination::where('destination_id',$destinationId)->first();
        return view('search', ['hotels' => $hotels, 'destination' => $destination->name]);
    }
    public function show(/*$hotel*//*Request $request,*/ RapidApiService $rapidApiService, $id)
    {   $hotel=$rapidApiService->GetHotelDetails($id);
        /* $id =$request->get('id');
        $checkIn = $request->get('checkIn');
        $checkOut = $request->get('checkOut');
        $adults = $request->get('adults');
        $children = $request->input('children');
        $hotel=$rapidApiService->GetHotelDetails($id, $checkIn, $checkOut, $adults, $children)*/
        return view('hotel', ['hotel' => $hotel]);
    }

}
