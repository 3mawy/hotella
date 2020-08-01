<?php

namespace App\View\Components;

use App\Destination;
use App\Services\RapidApiService;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class _cardIndex extends Component
{
    public $hotels;

    /**
     * Create a new component instance.
     * @param $hotels
     */
    public function __construct($hotels)
    {
        $this->hotels = $hotels;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @param Request $request
     * @param Destination $destination
     * @param RapidApiService $rapidApiService
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components._card-index');
    }


}
