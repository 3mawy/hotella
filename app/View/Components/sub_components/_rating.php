<?php

namespace App\View\Components;

use Illuminate\View\Component;

class _rating extends Component
{

    public $rate;

    /**
     * Create a new component instance.
     *
     * @param $rate
     */
    public function __construct($rate)
    {
        $this->rate = $rate;
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
