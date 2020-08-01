<?php

namespace App\View\Components;

use Illuminate\View\Component;

class _hotelCard extends Component
{
    public $hotel;
    /**
     * Create a new component instance.
     *
     * @param $hotel
     */
    public function __construct( $hotel)
    {
        $this->hotel=$hotel;

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
