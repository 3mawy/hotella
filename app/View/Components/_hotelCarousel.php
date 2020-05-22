<?php

namespace App\View\Components;

use Illuminate\View\Component;

class _hotelCarousel extends Component
{
    /*public $carouselID;
    public $img1;
    public $img2;
    public $img3;*/

    /**
     * Create a new component instance.
     *
     * @param $img1
     * @param $img2
     * @param $img3
     */
    public function __construct(/*$img1,$img2,$img3,$carouselID*/)
    {
        /*$this->img1 = $img1;
        $this->img2 = $img2;
        $this->img3 = $img3;
        $this->carouselID= $carouselID;*/

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components._hotel-carousel');
    }

}
