<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Services\RapidApiService;
use App\Services\TripAdvisorApi;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class AutoCompleteController extends Controller
{

    public function index()
    {
        return view('search');
    }

    public function search(Request $request, Destination $destinationModel, TripAdvisorApi $tripAdvisorApi)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'term' => 'required|min:2'
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $search = $request->get('term');

        $destinations =  $destinationModel->listByName($search);

        if ($destinations->isEmpty()) {
            dd();
         //   $rapidApiService->getDestinationFromHotelsApi($search);
            $tripAdvisorApi->autoCompleteTripAdvisorApi($search);
            $destinations =  $destinationModel->listByName($search);
        }

        return response()->json($destinations);
    }
}
