<?php

namespace App\View\Components;

use Illuminate\View\Component;

class _bookModal extends Component
{
    public $room;

    /**
     * Create a new component instance.
     *
     * @param $room
     */
    public function __construct($room )
    {
        $this->room = $room;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components._book-modal');
    }
}
