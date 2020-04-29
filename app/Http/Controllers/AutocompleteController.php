<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;
use App\User;

class AutoCompleteController extends Controller
{

    public function index()
    {
        return view('search');
    }

    public function search(Request $request, Destination $destination)
    {
          $search = $request->get('term');


           if(Destination::where('name', 'LIKE',  $search. '%')->exists()){
            a:
                $destination=Destination::where('name', 'LIKE', '%'. $search. '%')->take(3)->get()->toJson(JSON_PRETTY_PRINT);
                return response($destination);
            }else{
                $destination->getDestinationFromHotelsApi($search);
                goto a;
            }


        /*$search = $request->get('term');

          return Destination::inDataBase($search);*/
    }
}
