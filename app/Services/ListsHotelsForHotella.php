<?php


namespace App\Services;


use App\Services\DataModels\HotellaHotel;

interface ListsHotelsForHotella
{
    /**
     * @param $destinationId
     * @param $checkIn
     * @param $checkOut
     * @param $adults
     * @param $children
     * @return HotellaHotel[]
     */
    public function listProperties($destinationId, $checkIn, $checkOut, $adults , $children ) : array ;

}
