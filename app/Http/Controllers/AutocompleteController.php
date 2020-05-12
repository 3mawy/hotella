<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Services\RapidApiService;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class AutoCompleteController extends Controller
{

    public function index()
    {
        return view('search');
    }

    public function search(Request $request, Destination $destinationModel, RapidApiService $rapidApiService)
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

            $destinations =  $rapidApiService->AutoCompleteProxy($search);
        }

        return response()->json($destinations);
    }
}
