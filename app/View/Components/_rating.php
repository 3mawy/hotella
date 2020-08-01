<?php

namespace App\View\Components;

use Illuminate\View\Component;

class _rating extends Component
{

    public $rate;
    public $reviewsCount;

    /**
     * Create a new component instance.
     *
     * @param $rate
     * @param $reviewsCount
     */
    public function __construct($rate, $reviewsCount)
    {
        $this->rate = $rate;
        $this->reviewsCount= $reviewsCount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components._rating');
    }
}
