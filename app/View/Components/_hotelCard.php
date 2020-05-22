<?php

namespace App\View\Components;

use Illuminate\View\Component;

class _hotelCard extends Component
{
    public $hotel_name;
    public $hotel_destination;
    /**
     * Create a new component instance.
     *
     * @param $hotel_name
     * @param $hotel_destination
     */
    public function __construct( $hotel_name, $hotel_destination)
    {
        $this->hotel_name=$hotel_name;
        $this->hotel_destination=$hotel_destination;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components._hotel-card');
    }
}
