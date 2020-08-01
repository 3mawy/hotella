<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelTabsController extends Controller
{
    public function index()
    {
        return view('components/_tabs');
    }
}
