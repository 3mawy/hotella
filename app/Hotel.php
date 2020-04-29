<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function bookings()
    {
        return $this->hasMany(Booking::class)->latest();
    }
    public function rooms()
    {
        return $this->hasMany(Room::class)->latest();
    }

}
