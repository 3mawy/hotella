<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $bookings = Booking::where('user_id',Auth::user()->id)->get();

        return view('profile', ['user' => Auth::user(), 'bookings'=> $bookings]);

    }
}
